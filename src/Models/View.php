<?php


class View
{

    public function render($template, array $variables)
    {
        require __DIR__ . '/../Views/' . $template;

        die();
    }

}
