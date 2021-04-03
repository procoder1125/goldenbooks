<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Transaction */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transaction-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'summa_vkalada')->textInput() ?>

    <?= $form->field($model, 'prosent')->textInput() ?>

    <?= $form->field($model, 'kolvo_tek_natch')->textInput() ?>

    <?= $form->field($model, 'summa_natch')->textInput() ?>

    <?= $form->field($model, 'status_deposit')->textInput() ?>

    <?= $form->field($model, 'data')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
