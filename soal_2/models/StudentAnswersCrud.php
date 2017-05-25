<?php

namespace app\models;

use Yii;
use app\models\StudentAnswers;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

/**
 * This is the model class for table "{{%student_answers}}".
 *
 * @property int $id
 * @property int $excercise_id
 * @property int $student_id
 * @property string $student_answer
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Excercise $excercise
 * @property Students $student
 */
class StudentAnswersCrud extends StudentAnswers {

    public function behaviors() {
        return [
            [
                'class' => TimestampBehavior::className(),
                'value' => new Expression('NOW()'),
            ],
        ];
    }

    public function rules() {
        return array_merge(parent::rules(), [
            [['student_answer'], 'isRequired'],
        ]);
    }
    
    public function isRequired($attribute, $params){
        if($this->student_answer == null){
            $this->addError('student_answer', 'Error');
        }
    }

}
