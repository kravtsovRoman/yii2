<?php


namespace app\controllers;

use app\models\TestForm;

class PostController extends AppController {

    public $layout = 'basic';

    public function actionIndex() {

       $model = new TestForm();

        return $this->render('test', compact('model'));
    }

    public function actionShow() {
        return $this->render('show');
    }

}