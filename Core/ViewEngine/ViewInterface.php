<?php

namespace Core\ViewEngine;


interface ViewInterface
{
    public function render($view_name = null, $model = null);
}
