<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Liste */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Listes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="liste-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'user_id',
            'name',
            'description:ntext',
            'category:ntext',
        ],
    ]) ?>

    <?php $test = $model->getProducts()->all();
        foreach($test as $t) {
            echo '<a href="/products/view?id='.$t->id.'" >' . $t->name . '</a>';
            echo '<br>';
        }?>
    <a href="/products/create?liste=<?= $model->id ?>">Neu</a>
</div>
