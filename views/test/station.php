<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>
<table  class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Мероприятие</th>
      <th scope="col">Место проведения</th>
     <th scope="col">Дата проведения</th>
    </tr>
  </thead>
  <tbody>
<?php
foreach($model as $station): 
?>
<tr>
<td><?=$station->name?></td>
<td><?=$station->info?></td>
<td><?=$station->date?></td>


<?php
if (\app\models\User::findOne(Yii::$app->user->id)->password == '$2y$13$XcpWnuGdNTn6GoSx0FdnYeBRFwXg3HV2abWZdZOMFvLUklDFrnri2') { //  If there is a user with a certain password
  echo Html::tag("td", Html::tag("a", "Убрать мероприятие", ["class"=>"btn btn-primary","href"=>Url::toRoute('test/delete?id=' . $station->id),]));
  echo Html::tag("td", Html::tag("a", "Ред.", ["class"=>"btn btn-primary","href"=>Url::toRoute('test/issus3red?id=' . $station->id),]));
}
?>
</tr>
<?php
endforeach;
?>
</tbody>
</table>
<?php
if (\app\models\User::findOne(Yii::$app->user->id)->password == '$2y$13$XcpWnuGdNTn6GoSx0FdnYeBRFwXg3HV2abWZdZOMFvLUklDFrnri2') { //  If there is a user with a certain password
  echo Html::tag("a", "Добавить мероприятие", ["class"=>"btn btn-primary","href"=>Url::toRoute('test/issus3')]);} ?>
