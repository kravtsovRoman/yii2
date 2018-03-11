<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html ;
?>



<h1>TEST action</h1>

<?php $form = ActiveForm::begin() ?>
<?=$form->field($model, 'name')-> label('Имя')?>
<?=$form->field($model, 'email')?>
<?=$form->field($model, 'text')-> label('Текст сообщения')->textarea()?>
<?=Html::submitButton('Send', ['class' => 'btn btn-success'])?>
<?php ActiveForm::end() ?>