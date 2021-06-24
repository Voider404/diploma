<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>
<div class="col-lg-6 col-sm-12">


<h1>Редактировать событие</h1>

<?php $form = ActiveForm::begin([
'options' => ['id'=>"myform"],
]) ?>

<?= $form->field($model, 'number')->label('Название события') ?>
<?= $form->field($model, 'navigate')->label('Место события') ?>
<?= $form->field($model, 'date')->label('Дата события') ?>





<?= Html::submitButton('Отправить', ['class'=> "btn btn-primary"]) ?>


<?php ActiveForm::end() ?>
</div>