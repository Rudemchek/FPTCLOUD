<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\helpers\Url;

$this->title = 'Вход';

?>
<div class="site-login">
    <button style=" background:white; background-image: url(../uploads/sun.png); width:50px; height:50px;  background-repeat: no-repeat; border:0;" id="sun_btn"></button>
    <button style=" background:white; background-image: url(../uploads/moon.png); width:50px; height:50px;  background-repeat: no-repeat; border:0;" id="muun_mtn" ></button>

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n{input}\n{error}",
            'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
            'inputOptions' => ['class' => 'col-lg-3 form-control'],
            'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
        ],
    ]); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "<div class=\"offset-lg-1 col-lg-3 custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
        ]) ?>

        <div class="form-group">
            <div class="offset-lg-1 col-lg-11">
                <?php 
                    echo Html::submitButton('Войти', ['class' => 'btn btn-primary mr-1', 'name' => 'login-button']);
                    echo Html::a('Регистрация', Url::toRoute('user/create'), $options = ['class' => 'btn btn-primary m-1'])
                ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>

    <?php 
       
    ?>
</div>
