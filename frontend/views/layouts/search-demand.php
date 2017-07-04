<?php

use yii\helpers\Html;
$icon = Html::img('@web/images/publish.png', ['style'=>'width:25px;height: 25px;margin-right:14px']);
?>

<form class="search content" action="/demand/list" method="get">
  <?= Html::img('@web/images/logo@2x.png', ['class'=>'logo', 'alt' => 'LOGO']) ?>
  <?= Html::img('@web/images/logotext.png', ['alt' => 'LOGO']) ?>
  <?= Html::a($icon.'发布', ['/site/publish'], ['class'=>'pull-right'])?>
  <input class="pull-right btn" type="submit" name="" value="搜索">
  <input class="pull-right" type="text" name="GoodsSearch[title]" placeholder="请输入关键字...">
</form>