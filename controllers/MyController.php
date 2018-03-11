<?php

namespace app\controllers;



class MyController extends AppController {

    public function actionIndex() {
        $hi = 'HI $hi';
        return $this->render('index', ['hi' => $hi]);
    }
}