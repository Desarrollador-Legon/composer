<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DetallePqrSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Observaciones PQR';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detalle-pqr-index">

    <h1><?= Html::encode($this->title) ?></h1>

    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'id_pqr',
            'fecha',
            'Observacion',
            [
                /*'class' => ActionColumn::className(),
                'urlCreator' => function ($action, app\models\DetallePqr $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }*/

                'class' => 'yii\grid\ActionColumn',
                'contentOptions' => [],
                'header'=>'Acciones',
                'template' => ' {update} {delete}',
                'visibleButtons'=>[
                    'update'=> function($model){
                        return ( $model->id);
                     },

                    'delete'=> function($model){
                        return ($model->id) ;
                     },
                ]
            ],        ],
    ]); ?>


</div>
