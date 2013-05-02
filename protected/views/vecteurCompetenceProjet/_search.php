<?php
/* @var $this VecteurCompetenceProjetController */
/* @var $model VecteurCompetenceProjet */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_competence_projet'); ?>
		<?php echo $form->textField($model,'id_competence_projet'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_competence'); ?>
		<?php echo $form->textField($model,'id_competence'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_projet'); ?>
		<?php echo $form->textField($model,'id_projet'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->