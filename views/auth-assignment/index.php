<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel mdm\admin\models\searchs\AuthAssignmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Auth Assignments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-assignment-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Auth Assignment', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute'=>'item_name',
                'filter' => $items
            ],
            [
                'attribute'=>'email',
                'value'=>function($model) {
                    if(!is_null($model->user)) {
                        return $model->user->email;
                    }
                }
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view}',
                'buttons' => [
                    'view' => function ($url, $model){
                        return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', Url::toRoute(['assignment/view', 'id'=>$model->user_id]), [
                            'title' => Yii::t('app', 'View'),
                        ]);
                    }
                ],
            ],
        ],
    ]); ?>

</div> 