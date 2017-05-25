<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\StudentsCrud;


class SubmitForm extends Model
{
    public $token;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            ['token', 'required'],
            ['token', 'exist', 'targetClass' => StudentsCrud::className(), 'targetAttribute' => 'token']
        ];
    }
    
    public function validateToken(){
        return StudentsCrud::findOne(['token' => $this->token]) ? true : null;
    }
}
