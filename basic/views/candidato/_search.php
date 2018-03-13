<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CandidatoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="candidato-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idcandidato') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'apellido') ?>

    <?= $form->field($model, 'fechaNac') ?>

    <?= $form->field($model, 'titulo') ?>

    <?php // echo $form->field($model, 'contrasenha') ?>

    <?php // echo $form->field($model, 'nacionalidad') ?>

    <?php // echo $form->field($model, 'correoElectronico') ?>

    <?php // echo $form->field($model, 'sexo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
