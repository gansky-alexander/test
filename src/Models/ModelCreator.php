<?php

class ModelCreator
{
    public function getModel($name)
    {
        return new $name();
    }
}