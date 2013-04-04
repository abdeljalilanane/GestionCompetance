<?php
/* @var $this TesteController */
/* @var $model Teste */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'test'); ?>
		<?php echo $form->textField($model,'test'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tesbb'); ?>
		<?php echo $form->textField($model,'tesbb'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->