<?php

namespace Core\ViewEngine;

use Core\Mvc\MvcContextInterface;

class View implements ViewInterface
{
    const TEMPLATES_FOLDER = 'views/';
    const TEMPLATES_EXTENSION = '.php';

    private MvcContextInterface $mvc_context;

    public function __construct(MvcContextInterface $mvc_context)
    {
        $this->mvc_context = $mvc_context;
    }

    public function render($view_name = null, $data = null)
    {
        if ($view_name != null){

            if (strstr($view_name, '.')){
                include self::TEMPLATES_FOLDER.$view_name;
            }else{
                include self::TEMPLATES_FOLDER.$view_name.self::TEMPLATES_EXTENSION;
            }
        }else{
            $folder = strtolower($this->mvc_context->getControllerName());
            $name = strtolower($this->mvc_context->getActionName());
            $view_name = $folder. DIRECTORY_SEPARATOR . $name;

            include self::TEMPLATES_FOLDER.$view_name.self::TEMPLATES_EXTENSION;
        }
    }
}
