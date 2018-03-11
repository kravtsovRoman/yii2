<?php


namespace app\controllers;

use app\models\Category;
use app\models\TestForm;
use Yii;

class PostController extends AppController {

    public $layout = 'basic';

    public function actionIndex() {

       $model = new TestForm();
       if ($model->load(Yii::$app->request->post())){
           if ($model->validate()){
                Yii::$app->session->setFlash('success', 'Данные приняты');
                return $this->refresh();
           }else{
               Yii::$app->session->setFlash('error', 'Ошибка записи данных');
           }
       }




        return $this->render('test');
    }

    public function actionShow() {
        $cats = Category::find()->all();

        $data= [
            'cats' => $cats
        ];
        return $this->render('show', $data);
    }

}