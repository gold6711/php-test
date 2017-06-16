<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
        ]) ?>

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>

</div>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2 >Реестр сотрудников</h2>
                    <div class="search-employees">

<div class="col-sm-4">
    <div class="left-sidebar">
        <h2>Создание сотрудника</h2>
        <div class="signup-form form-group field-loginform-username required has-error"><!--sign up form-->
            <form id="add-form" class="form-horizontal" action="/login" method="post">
                <label class="col-lg-4 control-label" for="surename">Фамилия :</label>
                <input type="text" id="surename" class="form-control" name="" placeholder="Иванов" autofocus aria-required="true">

                <label class="col-lg-4 control-label" for="name">Имя :</label>
                <input type="text" id="name" class="form-control" name="" placeholder="Коля" autofocus aria-required="true">
                <label class="col-lg-4 control-label" for="middname">Отчество :</label>
                <input type="text" id="middname" class="form-control" name="" placeholder="Альбертович" autofocus aria-required="true">

                <div class="col-sm-4 control-label">
                    <label  class="control-label" for="gender">Пол :</label>
                    <select id="gender" class="form-control"  style="width: 200px;">
                        <option class="col-sm-4 form-control control-label form-horizontal">Выберите</option>
                        <option value="Россия">мужской</option>
                        <option value="Украина">женский</option>
                    </select>
                    <div class="select-arrow"></div>
                </div>



                <button type="submit" class="btn btn-default">Signup</button>
            </form>
        </div>
    </div><!--/sign up form-->
</div>
</div>
</div>
            </div>
        </div>
    </div>
</section><!--/form--><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


