<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        //'rowOptions' => ['style' => 'background-color:#778899;'],
//        [
//            'attribute'=>'image',
//            'format' => 'image',
//            'value' => function($data) {
//                return 'data:image/jpeg;charset=utf-8;base64,' . base64_encode($data->image);
//            },
//        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'surname:ntext',
            'name:ntext',
            'middname:ntext',
            'birth_date',
            'age',
            [
                'label' => 'Картинка',
                'format' => 'raw',
                'value' => function($data){
                    return Html::img(Url::toRoute($data->image),[
                        'alt'=>'yii2 - картинка в gridview',
                        'style' => 'width:15px;'
                    ]);
                },
            ],
            'last_modified',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
