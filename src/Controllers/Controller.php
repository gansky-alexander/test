<?php

abstract class Controller
{
    /** @var  ModelCreator */
    protected $modelCreator;

    /** @var  View */
    protected $view;

    public function __construct($modelCreator, $view)
    {
        $this->modelCreator = $modelCreator;
        $this->view = $view;
    }

    public abstract function action();
}