<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Oferta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="oferta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion')->textarea(['rows' => 10]) ?>

    <?= $form->field($model, 'puestosVacantes')->textInput() ?>

    <?= $form->field($model, 'tiempoContratacion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nivelExperiencia')->textInput(['maxlength' => true]) ?>

    
    <?php
		echo $form->field($model, 'genero')->dropDownList(
            ['0' => 'Masculino', '1' => 'Femenino']
    ); ?>

    <?= $form->field($model, 'salarioMInimo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'salarioMaximo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'escolaridad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'empresa_idempresa')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
