<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Banco */

$this->title = 'Inserir Banco';
$this->params['breadcrumbs'][] = ['label' => 'Banco', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="banco-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
