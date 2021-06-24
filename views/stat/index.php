<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
if (\app\models\User::findOne(Yii::$app->user->id)->password != '$2y$13$XcpWnuGdNTn6GoSx0FdnYeBRFwXg3HV2abWZdZOMFvLUklDFrnri2') { // If there is a user with a certain password
    return $this->redirect(['login']);// Redirect back to the page
}
$this->title = 'Мероприятия';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stations-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать мероприятие', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'info',
            'date',

            ['class' => 'yii\grid\ActionColumn',

                'template' => '{view}{update}{delete}',
                'buttons' => [
                    'view' => function ($url, $model) {
                        return Html::a('Просмотреть ', $url);
                    },


                    'update' => function ($url, $model) {
                        return Html::a('Редактировать ', $url);
                    },

                    'delete' => function ($url, $model) {
                        return Html::a('Удалить ', $url, ['data-method' => 'POST']);
                    },
        ],
    ]
    ]
    ]); ?>


</div>
