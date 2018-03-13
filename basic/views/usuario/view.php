<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Usuario */

$this->title = $model->idusuario;
$this->params['breadcrumbs'][] = ['label' => 'Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuario-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idusuario' => $model->idusuario, 'empresa_idempresa' => $model->empresa_idempresa], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idusuario' => $model->idusuario, 'empresa_idempresa' => $model->empresa_idempresa], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idusuario',
            'nombre',
            'apellido',
            'nickname',
            'empresa_idempresa',
        ],
    ]) ?>

</div>
