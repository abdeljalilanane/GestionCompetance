<?php
/* @var $this VecteurCompetenceCollaborateurController */
/* @var $model VecteurCompetenceCollaborateur */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'vecteur-competence-collaborateur-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_competence'); ?>
		<?php echo $form->textField($model,'id_competence'); ?>
		<?php echo $form->error($model,'id_competence'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_collaborateur'); ?>
		<?php echo $form->textField($model,'id_collaborateur'); ?>
		<?php echo $form->error($model,'id_collaborateur'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->