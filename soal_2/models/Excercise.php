<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%excercise}}".
 *
 * @property int $id
 * @property string $question
 * @property string $answer_a
 * @property string $answer_b
 * @property string $answer_c
 * @property string $answer_d
 * @property string $correct_answer
 * @property string $created_at
 * @property string $updated_at
 *
 * @property StudentAnswers[] $studentAnswers
 */
class Excercise extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%excercise}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['question'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['answer_a', 'answer_b', 'answer_c', 'answer_d'], 'string', 'max' => 255],
            [['correct_answer'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'question' => Yii::t('app', 'Question'),
            'answer_a' => Yii::t('app', 'Answer A'),
            'answer_b' => Yii::t('app', 'Answer B'),
            'answer_c' => Yii::t('app', 'Answer C'),
            'answer_d' => Yii::t('app', 'Answer D'),
            'correct_answer' => Yii::t('app', 'Correct Answer'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentAnswers()
    {
        return $this->hasMany(StudentAnswers::className(), ['excercise_id' => 'id']);
    }
}
