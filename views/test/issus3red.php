<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>
<div class="col-lg-6 col-sm-12">


<h1>Редактирование</h1>

<?php $form = ActiveForm::begin([
'options' => ['id'=>"myform"],
]) ?>

<?= $form->field($model, 'name')->label('Название мероприятия') ?>
<?= $form->field($model, 'info')->label('Место проведения') ?>
<?= $form->field($model, 'date')->label('Дата проведения') ?>



<?= Html::submitButton('Отправить', ['class'=> "btn btn-primary"]) ?>


<?php ActiveForm::end() ?>
</div>