<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DetallePqr */

$this->title = 'Actualizar PQR';
$this->params['breadcrumbs'][] = ['label' => 'Detalle PQR', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detalle-pqr-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
