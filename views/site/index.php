<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Реестр сотрудников';
?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Реестр сотрудников</h2>

                    <div class="search-employees" style="width: 400px">


                        <div class="search_box">
                            <form method="get" action="<?= \yii\helpers\Url::to(['category/search']) ?>">
                                <input type="text" placeholder="Поиск сотрудников по ФИО" name="q">
                            </form>
                        </div>
                        <p>Пол</p>

                        <div class="form-group field-loginform-rememberme">
                            <div class="col-lg-offset-1 col-lg-3"><input type="hidden" name="LoginForm[rememberMe]"
                                                                         value="0">
                                <input type="checkbox" id="loginform-rememberme" name="LoginForm[rememberMe]" value="1"
                                       checked>
                                <label for="loginform-rememberme">Мужской</label>


                                <input type="checkbox" id="loginform-rememberme" name="LoginForm[rememberMe]" value="1"
                                       checked>
                                <label for="loginform-rememberme">Женский</label></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h1>board/view</h1>

<!--        <h3 class="h3-title">--><?//=($boardname->name_cat);?><!--</h3><br>-->

<!--        --><?//= GridView::widget([
//            'dataProvider' => $dataProvider,
//            //'filterModel' => $searchModel,
//            'columns' => [
//                ['class' => 'yii\grid\SerialColumn'],
//                'id',
//                'name:ntext',
//                'url:ntext',
//                'image:ntext',
//                // 'created_at',
//                // 'updated_at',
//                ['class' => 'yii\grid\ActionColumn'],
//            ],
//        ]); ?>

        <?php if (!empty($users)): ?>
            <?php foreach ($users as $user): ?>
                <div class="row">
                    <div class="col-sm-8 f-left">
                        <h5 class="h5-title"><?=$user->surname?></h5><br>
                        <h5 class="h5-title"><?=$user->name?></h5><br>
                        <h5 class="h5-title"><?=$user->middname?></h5><br>
                        <h5 class="h5-title"><?=$user->birth_date?></h5><br>
                        <?=Html::img("@web/images/photo/{$user->image}") ?><br>

                    </div>
                </div>
                <br><br>
            <?php endforeach; ?>

        <?php else: ?>
            <p>ТАКОГО РАБОТНИКА НЕТ</p>
        <?php endif; ?>

    </div>

    <br><br><br><br><br>
</section>