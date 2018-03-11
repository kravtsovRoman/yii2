<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html ;
?>



<h1>TEST action</h1>

<?php if (Yii::$app->session->hasFlash('success')): ?>
    <h3><?=Yii::$app->session->getFlash('success')?></h3>
<?php endif;?>

<?php if (Yii::$app->session->hasFlash('error')): ?>
    <h3><?=Yii::$app->session->getFlash('error')?></h3>
<?php endif;?>


<?php $form = ActiveForm::begin() ?>
<?=$form->field($model, 'name')?>
<?=$form->field($model, 'email')?>
<?=$form->field($model, 'text')->textarea()?>
<?=Html::submitButton('Send', ['class' => 'btn btn-success'])?>
<?php ActiveForm::end() ?>


