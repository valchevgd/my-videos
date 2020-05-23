<?php

spl_autoload_register();

$uri = $_SERVER['REQUEST_URI'];

$self = explode('/', $_SERVER['PHP_SELF']);

array_pop($self);

$replace = implode('/', $self);

$params = explode('/', $uri);
array_shift($params);
$cont = array_shift($params);
$controllerName = $cont === '' ? 'home' : $cont;
$actionName = array_shift($params) ?? 'index';

$mvcContext = new \Core\Mvc\MvcContext($controllerName, $actionName, $params ?? []);
$app = new \Core\Application($mvcContext);

$app->registerDependency(\ViewEngine\ViewInterface::class, \ViewEngine\View::class);
$app->registerDependency(\Services\HomeServiceInterface::class, \Services\HomeService::class);
try {
    //ToDo better way to handle error
    $app->start();
} catch (Exception $e) {
    $mvcContext->setControllerName('error');
    $mvcContext->setActionName('index');
    $app->start();
}
