<?php

namespace app\models;

use Yii;
use app\models\Excercise;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use app\models\Students;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "{{%excercise}}".
 *
 * @property int $id
 * @property int $student_id
 * @property string $question
 * @property string $answer_a
 * @property string $answer_b
 * @property string $answer_c
 * @property string $answer_d
 * @property string $student_answer
 * @property string $correct_answer
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Students $student
 */
class ExcerciseCrud extends Excercise
{
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
            [['question', 'correct_answer', 'answer_a', 'answer_b', 'answer_c', 'answer_d'], 'required'],
        ]);
    }
    
    public function getCorrectAnswers(){
        return [
            'A' => 'A',
            'B' => 'B',
            'C' => 'C',
            'D' => 'D',
        ];
    }
}
