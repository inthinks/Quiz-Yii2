<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StudentsCrud */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Students Crud',
]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Students Cruds'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="students-crud-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
