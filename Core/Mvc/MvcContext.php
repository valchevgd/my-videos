<?php

namespace Core\Mvc;


class MvcContext implements MvcContextInterface
{
    private string $controller_name;
    private string $action_name;
    private array $params = [];

    public function __construct(string $controller_name, string $action_name, array $params)
    {
        $this->controller_name = $controller_name . 'Controller';
        $this->action_name = $action_name;
        $this->params = $params;
    }


    /**
     * @return string
     */
    public function getControllerName(): string
    {
        return $this->controller_name;
    }

    /**
     * @param string $controller_name
     */
    public function setControllerName(string $controller_name): void
    {
        $this->controller_name = $controller_name . 'Controller';
    }

    /**
     * @return string
     */
    public function getActionName(): string
    {
        return $this->action_name;
    }

    /**
     * @param string $action_name
     */
    public function setActionName(string $action_name): void
    {
        $this->action_name = $action_name;
    }

    /**
     * @return array
     */
    public function getParams(): array
    {
        return $this->params;
    }

    /**
     * @param array $params
     */
    public function setParams(array $params): void
    {
        $this->params = $params;
    }
}
