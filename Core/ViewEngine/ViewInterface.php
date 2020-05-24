<?php

namespace Core\ViewEngine;


interface ViewInterface
{
    public function render($model = null, $view_name = null);
}
