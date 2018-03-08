<?php

namespace app\controllers;


use yii\base\Controller;

class MyController extends Controller{

    public function actionIndex() {
        $hi = 'HI $hi';
        return $this->render('index', ['hi' => $hi]);
    }
}