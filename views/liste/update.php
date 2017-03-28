<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Liste */

$this->title = 'Update Liste: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Listes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="liste-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
