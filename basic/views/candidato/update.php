<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Candidato */

$this->title = 'Update Candidato: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Candidatos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idcandidato, 'url' => ['view', 'id' => $model->idcandidato]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="candidato-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
