<?php
/**
 * Created by PhpStorm.
 * User: Рома
 * Date: 11.03.2018
 * Time: 14:17
 */

namespace app\models;
use yii\base\Model;


class TestForm extends Model
{
    public $name;
    public $email;
    public $text;

    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'email' => 'E-mail',
            'text' => 'Текст сообщения',
        ];
    }

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
            //['name','string', 'min' => 2, 'tooShort' => 'Поле должно содержать минимум 2 символа']
            ['name', 'string', 'length' => [2,10]],
            ['text', 'trim'],

        ];
    }


}