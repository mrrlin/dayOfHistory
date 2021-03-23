<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Member extends Model
{
    public $id;
    public $content_id;
    public $date;
    public $description;

    public function rules() {
        return [
            [['id', 'content_id', 'date'], 'required'],
            
            [['content_id', 'date', 'description'], 'string']
        ];
    }
}