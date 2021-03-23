<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Content extends Model
{
    public $id;
    public $name;
    public $years_of_life;
    public $photo;
    public $text;
    public $personality;

    public function rules(){
        return [
            [['id', 'name'], 'required'],
            
            [['name', 'years_of_life', 'photo', 'text', 'personality'], 'string'],
        ];
    }
}