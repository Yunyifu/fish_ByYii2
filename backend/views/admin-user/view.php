<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\AdminUser */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', '管理员'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', '更新'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', '删除'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
//             'password_hash',
            'nickname',
//             'password_reset_token',
//             'auth_key',
//             'status',
            [
                'attribute' => 'status',
                'value' => $model->status ? '激活' : '禁止',
            ],
            'phone',
            [
                'attribute'=>'group',
                'label'=>'类型',
                'filter'=>\common\util\Constants::$admin,
                'value'=>function($model){
                    return \common\util\Constants::$admin[$model->group];
                }
            ],
//             'created_at',
//             'updated_at',
        ],
    ]) ?>

</div>
