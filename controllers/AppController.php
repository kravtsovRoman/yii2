<?php

namespace app\controllers;


use yii\web\Controller;

class AppController extends Controller {

        public function actionTest() {
            return $this->render('test');
        }

}