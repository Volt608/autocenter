<?php

namespace app\models;

use yii\db\ActiveRecord;

class Employees extends ActiveRecord
{
    public function rules()
    {
        return [
            [['last_name', 'name', 'second_name', 'email', 'phone', 'passhash', 'status_id'], 'required', 'message' => 'Заполните поле'],
            [['email'], 'email', 'message' => 'Адрес электронной почты указан не верно'],
            ['email', 'unique', 'targetClass' => Employees::className(), 'message' => 'Данный E-mail уже зарегистрирован'],
            [['phone'], 'unique', 'targetClass' => Employees::className(), 'message' => 'Данный номер телефона уже зарегистрирован']
        ];
    }

    public function attributeLabels()
    {
        return [
            'last_name' => 'Отчество',
            'name' => 'Имя',
            'second_name' => 'Фамилия',
            'email' => 'E-mail',
            'phone' => 'Номер телефона',
            'passhash' => 'Пароль',
            'status_id' => 'Должность',
        ]; // TODO: Change the autogenerated stub
    }

}