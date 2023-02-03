<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DetallePqr */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detalle-pqr-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--?= $form->field($model, 'id_pqr')->textInput() ?-->

    

    <?= $form->field($model, 'fecha')->textInput() ?>

    <?= $form->field($model, 'Observacion')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>