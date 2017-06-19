<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use rico\yii2images\models\Image;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $model app\models\User */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

<!--    --><?php //$image = $model->getImage();?>
    <?php debug($img);?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        //'rowOptions' => ['style' => 'background-color:#778899;'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'surname:ntext',
            'name:ntext',
            'middname:ntext',
            'birth_date:date',
            'age',
            [
                'label' => 'Картинка',
                'format' => 'raw',
                'value' => function($data){
                    return Html::img(Url::toRoute($data->image),[
                        'alt'=>'yii2 - картинка в gridview',
                        'style' => 'width:115px;'
                    ]);
                },
            ],
            'last_modified:date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
