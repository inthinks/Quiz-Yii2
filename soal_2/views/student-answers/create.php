<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\StudentAnswersCrud */

$this->title = Yii::t('app', 'Create Student Answers Crud');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Student Answers Cruds'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-answers-crud-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
