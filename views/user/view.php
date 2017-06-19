<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?php $image = $model->getImage();?>  // $picture = img->?????
    <?php debug($model->getImage())?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'surname',
            'name',
            'middname',
            'birth_date',
            'age',
            [
                'attribute' => 'image',
                'value' => "<img src='{$image->getUrl()}'>",
                'format' => 'html',
            ],
            'last_modified',
        ],
    ]) ?>

</div>
