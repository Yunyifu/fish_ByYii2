<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;
use frontend\widgets\CustomForm2;
use yii\bootstrap\ActiveForm;
/* @var $this \yii\web\View */
$this->registerCssFile("@web/css/login.css", ['depends' => ['frontend\assets\AdminAsset']]);
$this->registerJsFile("@web/js/reg.js", ['depends' => ['frontend\assets\AdminAsset']]);
$this->title = '渔鱼网平台密码找回';
?>
<?= $this->render('/layouts/search')?>
<?= $this->render('/layouts/navi-bar')?>

<div class="login-container">

  <?php $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => false, 'options'=>['class'=>'login-form'] ]); ?>
      <h6>找回密码</h6>
      <?= $form->field($model, 'username')->textInput(['class'=>'inputuser','placeholder'=>'用户名（手机号）']) ?>

      <?= $form->field($model, 'validation')->textInput(['class'=>'inputpsw','placeholder'=>'短信验证码']) ?>

      <button id="validation-btn" type="button" name="button">发送验证码</button><span id="countDown"></span>

      <?= $form->field($model, 'password')->passwordInput(['class'=>'inputpsw','placeholder'=>'输入新密码']) ?>

      <br class="clear">

      <?= Html::submitButton('确认', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>

  <?php ActiveForm::end(); ?>

</div>
<?php
  echo $this->render('/layouts/footer');
?>
<script type="text/javascript">
  var codeType = 1;
</script>