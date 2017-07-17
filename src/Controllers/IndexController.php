<?php

class IndexController extends Controller
{
    public function action()
    {
        /** @var ProductModel $model */
        $model = $this->modelCreator->getModel('ProductModel');
        $result = $model->getProductById(10);

        $this->view->render('index.html', $result);
    }
}