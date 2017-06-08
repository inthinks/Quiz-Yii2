<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\StudentsCrud;


class SubmitForm extends Model
{
    public $token;
    public $message = 'Invalid token input.';

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            ['token', 'required'],
            ['token', 'validateToken']
        ];
    }
    
    public function validateToken(){
        if(!StudentsCrud::findOne(['token' => $this->token])){
            $this->addError('token', $this->message);
        }
    }
}
