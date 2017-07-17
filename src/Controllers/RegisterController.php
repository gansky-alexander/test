<?php

class RegisterController extends Controller
{

    public function action()
    {
        if (!empty($_POST['name']) &&
            !empty($_POST['email']) &&
            !empty($_POST['login']) &&
            !empty($_POST['pass'])
        ) {
            /** @var CustomerModel $model */
            $model = $this->getModel('CustomerModel');
            $result = $model->register($_POST['name'], $_POST['email'], $_POST['login'], $_POST['pass']);

            /** @var IndexView $view */
            $this->view->render('registered.html', []);
        }

        /** @var IndexView $view */
        $this->view->render('register.html', []);
    }
}