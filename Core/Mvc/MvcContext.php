<?php

namespace Core\Mvc;


class MvcContext implements MvcContextInterface
{
    private string $controllerName;
    private string $actionName;
    private array $params = [];

    public function __construct(string $controllerName, string $actionName, array $params)
    {
        $this->controllerName = $controllerName . 'Controller';
        $this->actionName = $actionName;
        $this->params = $params;
    }


    /**
     * @return string
     */
    public function getControllerName(): string
    {
        return $this->controllerName;
    }

    /**
     * @param string $controllerName
     */
    public function setControllerName(string $controllerName): void
    {
        $this->controllerName = $controllerName . 'Controller';
    }

    /**
     * @return string
     */
    public function getActionName(): string
    {
        return $this->actionName;
    }

    /**
     * @param string $actionName
     */
    public function setActionName(string $actionName): void
    {
        $this->actionName = $actionName;
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
