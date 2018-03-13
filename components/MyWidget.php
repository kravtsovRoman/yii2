<?php

namespace app\components;
use yii\base\Widget;

class MyWidget extends Widget{

    public $name;

    public function init()
    {
        parent::init();
//        if ($this->name == false) $this->name = 'Guest';
//
//    }

    public function run(){

       return '<h1>'. $this->name .'</h1>';
    }


}