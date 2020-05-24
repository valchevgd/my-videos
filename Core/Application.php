<?php

namespace Core;



use Core\Mvc\MvcContextInterface;

class Application
{
    /** @var string[]  */
    private array $dependencies = [];

    /** @var object[]  */
    private array $resolved_dependencies = [];

    /** @var MvcContextInterface */
    private MvcContextInterface $mvc_context;

    public function __construct(MvcContextInterface $mvc_context)
    {
        $this->mvc_context = $mvc_context;
        $this->dependencies[MvcContextInterface::class] = get_class($mvc_context);
        $this->resolved_dependencies[get_class($mvc_context)] = $mvc_context;
    }

    public function registerDependency(string $abstraction, string $implementation)
    {
        $this->dependencies[$abstraction] = $implementation;
    }

    public function resolve($class_name)
    {
        if (array_key_exists($class_name, $this->resolved_dependencies)){
            return $this->resolved_dependencies[$class_name];
        }

        $ref_class = new \ReflectionClass($class_name);
        $constructor = $ref_class->getConstructor();

        if ($constructor === null){
            $object = new $class_name;

            $this->resolved_dependencies[$class_name] = $object;

            return $object;
        }

        $parameters = $constructor->getParameters();

        $arguments = [];

        foreach ($parameters as $parameter){

            $dependency_interface = $parameter->getClass();

            $dependency_class = $this->dependencies[$dependency_interface->getName()];

            $arguments[] = $this->resolve($dependency_class);
        }

        $object = $ref_class->newInstanceArgs($arguments);

        $this->resolved_dependencies[$class_name] = $object;

        return $object;
    }

    public function start()
    {
        $controller_full_qualified_name = 'App\\Controllers\\'.ucfirst($this->mvc_context->getControllerName());
        $controller = $this->resolve($controller_full_qualified_name);

        $ref_method = new \ReflectionMethod($controller, $this->mvc_context->getActionName());
        $ref_params = $ref_method->getParameters();
        $count = count($this->mvc_context->getParams());

        $params = [];

        foreach ($this->mvc_context->getParams() as $param) {
            $params[] = $param;
        }

        for ($i = $count; $i < count($ref_params); $i++){

            $argument = $ref_params[$i];

            $argument_interface = $argument->getClass();

            $argument_class = $this->dependencies[$argument_interface->getName()] ?? $argument_interface->getName();
            $params[] = $this->resolve($argument_class);
        }

        try {
            //ToDo better way to handle error
            call_user_func_array([$controller, $this->mvc_context->getActionName()], $params);
        } catch (\Error $e) {
            $this->mvc_context->setControllerName('App\\Controllers\\Error');
            $controller = $this->resolve($this->mvc_context->getControllerName());
            $this->mvc_context->setActionName('index');
            call_user_func_array([$controller, $this->mvc_context->getActionName()], $params);
        }
    }
}
