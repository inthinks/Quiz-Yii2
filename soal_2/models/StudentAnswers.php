<?php

namespace app\models;

use Yii;

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
class StudentAnswers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%student_answers}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['excercise_id', 'student_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['student_answer'], 'string', 'max' => 1],
            [['excercise_id'], 'exist', 'skipOnError' => true, 'targetClass' => Excercise::className(), 'targetAttribute' => ['excercise_id' => 'id']],
            [['student_id'], 'exist', 'skipOnError' => true, 'targetClass' => Students::className(), 'targetAttribute' => ['student_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'excercise_id' => Yii::t('app', 'Excercise ID'),
            'student_id' => Yii::t('app', 'Student ID'),
            'student_answer' => Yii::t('app', 'Student Answer'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getExcercise()
    {
        return $this->hasOne(Excercise::className(), ['id' => 'excercise_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(Students::className(), ['id' => 'student_id']);
    }
}
