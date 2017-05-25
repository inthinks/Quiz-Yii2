<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use app\models\Students;

class StudentsCrud extends Students {

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
            [['name'], 'required'],
            [['is_complete'], 'default', 'value' => 0]
        ]);
    }

    /**
     * save record student
     */
    public function saveStudent() {
        $this->getToken();
        if ($this->validate()) {
            $this->save();
            return true;
        }
        return false;
    }

    /**
     * generate token
     */
    public function getToken() {
        if($this->isNewRecord){
            $this->token = Yii::$app->getSecurity()->generateRandomString(10);
        }
    }
    
    public function sumCorrect(){
        $correctAnswer = [];
        $wrongAnswer = [];
        $corrects = StudentAnswersCrud::find()
                ->select('student_answers.*, excercise.correct_answer correct')
                ->leftJoin('excercise', 'excercise.id = student_answers.excercise_id')
                ->where(['student_answers.student_id' => $this->id])
                ->asArray()
                ->all();
        foreach($corrects as $correct){
            if($correct['student_answer'] == $correct['correct']){
                $correctAnswer[] = $correct['excercise_id']; 
            } else {
                $wrongAnswer[] = $correct['excercise_id']; 
            }
        }
        $this->is_complete = true;
        $this->wrong_answer = count($wrongAnswer);
        $this->correct_answer = count($correctAnswer);
        $this->score = count($correctAnswer);
        $this->update(false);
    }

}
