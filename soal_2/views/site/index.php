<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
<?php if (Yii::$app->session->hasFlash('submit')): ?>
  <div class="alert alert-success alert-dismissable">
  <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
  <h4><i class="icon fa fa-check"></i>Completed</h4>
  <?= Yii::$app->session->getFlash('submit') ?>
  </div>
<?php endif; ?>
    <div class="jumbotron">
        <h1>Welcome Student!</h1>
        <hr>
        <?php $form = ActiveForm::begin(); ?>
            <?= $form->field($model, 'token')->textInput(['placeholder' => 'Please enter Token']) ?>


            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-success btn-sm']) ?>

        <?php ActiveForm::end(); ?>
    </div>


</div>
