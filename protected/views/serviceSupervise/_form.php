<?php
/* @var $this ServiceSuperviseController */
/* @var $model ServiceSupervise */
/* @var $form CActiveForm */
$CIN = Manager::model()->findAll(array('order' => 'cin'));
$listcin = CHtml::listData($CIN,'cin','cin');
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'service-supervise-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'service'); ?>
		<?php echo $form->textField($model,'service',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'service'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'cin_Manager'); ?>
		<?php echo $form->dropDownList( $model, 'cin_Manager',$listcin,array('empty' => 'CIN *'));?>
		<?php echo $form->error($model,'cin_Manager'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->