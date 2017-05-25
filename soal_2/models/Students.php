<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%students}}".
 *
 * @property int $id
 * @property string $token
 * @property string $name
 * @property int $correct_answer
 * @property int $wrong_answer
 * @property int $score
 * @property int $is_complete
 * @property string $created_at
 * @property string $updated_at
 */
class Students extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%students}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['correct_answer', 'wrong_answer', 'score', 'is_complete'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['token', 'name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'token' => Yii::t('app', 'Token'),
            'name' => Yii::t('app', 'Name'),
            'correct_answer' => Yii::t('app', 'Correct Answer'),
            'wrong_answer' => Yii::t('app', 'Wrong Answer'),
            'score' => Yii::t('app', 'Score'),
            'is_complete' => Yii::t('app', 'Is Complete'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
}
