<?php

namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model{
    public $name;
    public $email;

    // validaciones    
    public function rules(){
        return [
            [['name','email'], 'required'],
            // sintaxis que valida el email
            ['email','email'],
        ];
    }
}