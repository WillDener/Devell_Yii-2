<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Credordevedor */

$this->title = 'Inserir Credordevedor';
$this->params['breadcrumbs'][] = ['label' => 'Credordevedor', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="credordevedor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
