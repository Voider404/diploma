<?php


use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
<head>
<title>Главная страница</title>
</head>
<body class="body">
<?php $this->beginBody() ?>

<iframe src="https://www.google.com/maps/d/embed?mid=11IAKSdYYB_fihGWzHPB4OkhYSyPypAdx" width="1200" height="800"></iframe>

<div class="recent_events"></div>
<div class="recent_mero"></div>
<?php $this->endBody() ?>
</body>
</html>
    <?php $this->endPage() ?>