<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\LinkPager;
?>
<table  class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Название события</th>
      <th scope="col">Место события</th>
      <th scope="col">Дата события</th>
      
     
    </tr>
  </thead>
  <tbody>
<?php
foreach($models as $train): 
?>
<tr>
    <td><?=$train->number?></td>
    <td><?=$train->navigate?></td>
    <td><?=$train->date?></td>


<?php
if (\app\models\User::findOne(Yii::$app->user->id)->password == '$2y$13$XcpWnuGdNTn6GoSx0FdnYeBRFwXg3HV2abWZdZOMFvLUklDFrnri2') { // If there is a user with a certain password
  echo Html::tag("td", Html::tag("a", "Убрать событие", ["class"=>"btn btn-primary","href"=>Url::toRoute('test/delete?id=' . $train->id),]));
  echo Html::tag("td", Html::tag("a", "Ред.", ["class"=>"btn btn-primary","href"=>Url::toRoute('test/issus2red?id=' . $train->id),]));
}
?>

</tr>
<?php
endforeach;
?>
</tbody>
</table>

<?php
if (!Yii::$app->user->isGuest) {
  echo Html::tag("a", "Добавить событие", ["class"=>"btn btn-primary","href"=>Url::toRoute('test/issus2')]);} ?>
  <?php
  echo LinkPager::widget([
    'pagination' => $pages,
    'linkContainerOptions'=>['class'=>'page-item '],
    'linkOptions'=>['class'=>'btn btn-primary'],
    'firstPageCssClass' => '',
    'lastPageCssClass' => '',
    'prevPageCssClass' => '',
    'nextPageCssClass'=> '',
    'disabledPageCssClass'=>'btn btn-primary disabled',
]);
?>