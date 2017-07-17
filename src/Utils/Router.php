<?php

class Router
{
    public function dispatch()
    {
        $controller = $_GET['controller'] . 'Controller';
        $controller = new $controller(new ModelCreator(), new View());
        $controller->action();
    }
}
