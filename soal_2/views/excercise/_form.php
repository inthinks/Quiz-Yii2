<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ExcerciseCrud */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="excercise-crud-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'question')->textarea(['rows' => 6]) ?>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'answer_a')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'answer_b')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'answer_c')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'answer_d')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <?= $form->field($model, 'correct_answer')->dropDownList($model->getCorrectAnswers(), ['prompt' => 'Please Choose one']) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
