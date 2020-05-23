<?php

namespace Core\ViewEngine;


interface ViewInterface
{
    public function render($model = null, $viewName = null);
}
