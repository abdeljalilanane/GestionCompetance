<?php
/* @var $this TesteController */
/* @var $model Teste */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'teste-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'test'); ?>
		<?php echo $form->textField($model,'test'); ?>
		<?php echo $form->error($model,'test'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tesbb'); ?>
		<?php echo $form->textField($model,'tesbb'); ?>
		<?php echo $form->error($model,'tesbb'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->