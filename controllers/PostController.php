<?php

namespace app\controllers;

use app\models\Category;
use app\models\TestForm;
use Yii;

class PostController extends AppController {

    public $layout = 'basic';

    public function actionIndex() {

       $model = new TestForm();

//       $model->name = 'Автор';
//       //$model->email = 'mail@mail.com';
//       $model->text = 'Текст сообщения';
//       $model->save();

       if ($model->load(Yii::$app->request->post())){
           if ($model->save()){
                Yii::$app->session->setFlash('success', 'Данные приняты');
                return $this->refresh();
           }else{
               Yii::$app->session->setFlash('error', 'Ошибка записи данных');
           }
       }
        return $this->render('test', compact('model'));
    }





    public function actionShow() {
        //$cats = Category::find()->all();
        //$cats = Category::find()->orderBy(['name' => SORT_ASC])->all();
        //$cats = Category::find()->asArray()->all();
        //$cats = Category::find()->asArray()->where(['name' => 'Dior'])->all();
        //$cats = Category::find()->asArray()->where(['like', 'name', 'Di'])->all();
        //$cats = Category::find()->asArray()->where(['<=', 'id', '15'])->all();
        //$cats = Category::find()->asArray()->where(['<=', 'id', '15'])->limit(3)->all();
        //$cats = Category::find()->asArray()->where(['<=', 'id', '15'])->one();
        //$cats = Category::findOne(['name' => 'Dior']);
        //$cats = Category::findAll(['name' => 'Dior']);
        //$cats = Category::findAll(['name' => 'Dior']);

        $query = "SELECT * FROM category WHERE name LIKE '%di%'";
        $cats = Category::findBySql($query)->all();


        $data= [
            'cats' => $cats
        ];
        return $this->render('show', $data);
    }

}