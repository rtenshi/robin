<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Liste */

$this->title = 'Create Liste';
$this->params['breadcrumbs'][] = ['label' => 'Listes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="liste-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
