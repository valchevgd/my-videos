<?php

spl_autoload_register();

$uri = $_SERVER['REQUEST_URI'];

$self = explode('/', $_SERVER['PHP_SELF']);

array_pop($self);

$replace = implode('/', $self);

$params = explode('/', $uri);
array_shift($params);
$cont = array_shift($params);
$controller_name = $cont === '' ? 'home' : $cont;
$action_name = array_shift($params) ?? 'index';

$mvc_context = new \Core\Mvc\MvcContext($controller_name, $action_name, $params ?? []);
$app = new \Core\Application($mvc_context);

$app->registerDependency(\Core\ViewEngine\ViewInterface::class, \Core\ViewEngine\View::class);
$app->registerDependency(\App\Services\HomeServiceInterface::class, \App\Services\HomeService::class);
$app->registerDependency(\Core\Http\Response\ResponseInterface::class, \Core\Http\Response\Response::class);
try {
    //ToDo better way to handle error
    $app->start();
} catch (Exception $e) {
    $mvc_context->setControllerName('error');
    $mvc_context->setActionName('index');
    $app->start();
}
