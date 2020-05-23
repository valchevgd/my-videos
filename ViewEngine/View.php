<?php

namespace ViewEngine;

use Core\Mvc\MvcContextInterface;

class View implements ViewInterface
{
    const TEMPLATES_FOLDER = 'views/';
    const TEMPLATES_EXTENSION = '.php';

    private $mvcContext;

    public function __construct(MvcContextInterface $mvcContext)
    {
        $this->mvcContext = $mvcContext;
    }

    public function render($viewName = null, $model = null)
    {
        if ($viewName != null){

            if (strstr($viewName, '.')){
                include self::TEMPLATES_FOLDER.$viewName;
            }else{
                include self::TEMPLATES_FOLDER.$viewName.self::TEMPLATES_EXTENSION;
            }
        }else{
            $folder = strtolower($this->mvcContext->getControllerName());
            $name = strtolower($this->mvcContext->getActionName());
            $viewName = $folder. DIRECTORY_SEPARATOR . $name;

            include self::TEMPLATES_FOLDER.$viewName.self::TEMPLATES_EXTENSION;
        }
    }
}
