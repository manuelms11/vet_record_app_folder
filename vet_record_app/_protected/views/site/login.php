<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \app\models\LoginForm */

$this->title = Yii::t('app', 'Login');
$this->params['breadcrumbs'][] = $this->title;
//$this->layout = 'guestuser';
?>
<div class="col-lg-7 well bs-component guest-form guest-title">
        <h1>Vet Clinical Record System</h1>
</div> 
<div class="col-lg-5 site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class=" well bs-component guest-form">

        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

        <?php //-- use email or username field depending on model scenario --// ?>
        <?php if ($model->scenario === 'lwe'): ?>
            <?= $form->field($model, 'email') ?>        
        <?php else: ?>
            <?= $form->field($model, 'username') ?>
        <?php endif ?>

        <?= $form->field($model, 'password')->passwordInput() ?>
        <?= $form->field($model, 'rememberMe')->checkbox() ?>

        <div style="color:#999;margin:1em 0">
            <?= Yii::t('app', 'If you forgot your password you can') ?>
            <?= Html::a(Yii::t('app', 'reset it'), ['site/request-password-reset']) ?>.
        </div>

        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Login'), ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            <?= Html::a('SignUp', ['site/signup'], ['class'=>'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>

</div>
