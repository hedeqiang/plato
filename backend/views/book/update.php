<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Book */

$this->title = '修改图书信息: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => '图书', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="book-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
