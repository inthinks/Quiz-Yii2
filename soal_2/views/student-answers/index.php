<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\search\StudentAnswersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Student Answers');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-answers-crud-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            [
                'attribute' => 'excercise_id',
                'label' => 'Excercise ID',
                'value' => function($model){
                    return $model->excercise->id;
                }
            ],
            [
                'attribute' => 'student_id',
                'label' => 'Student Name',
                'value' => function($model){
                    return $model->student->name;
                }
            ],
            'student_answer',
            'created_at',
            'updated_at',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
