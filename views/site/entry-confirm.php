
<?php
use yii\helpers\Html;
?>

<p>Agrega informacion</p>

<ul>
    <li><label >Name</label>: <?= Html::encode($model->name )  ?></li>
    <li><label>email</label>: <?= Html::encode($model->email ) ?></li>
</ul> 