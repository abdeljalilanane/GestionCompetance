<?php
/* @var $this VecteurCompetenceCollaborateurController */
/* @var $model VecteurCompetenceCollaborateur */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_competence_collaborateur'); ?>
		<?php echo $form->textField($model,'id_competence_collaborateur'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_competence'); ?>
		<?php echo $form->textField($model,'id_competence'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_collaborateur'); ?>
		<?php echo $form->textField($model,'id_collaborateur'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->