<?php
/* @var $this VecteurCompetenceProjetController */
/* @var $model VecteurCompetenceProjet */
/* @var $form CActiveForm */

$id_competences = Competences::model()->findAll(array('order' => 'libelle'));
$list_competences = CHtml::listData($id_competences,'id','libelle');

$id_projet = Projet::model()->findAll(array('order' => 'nom'));
$list_projet = CHtml::listData($id_projet,'id','nom');
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'vecteur-competence-projet-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_competence'); ?>
		<?php echo $form->dropDownList( $model, 'id_competence',$list_competences,array('empty' => 'competences *'));?>
		
		<?php echo $form->error($model,'id_competence'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_projet'); ?>
		<?php echo $form->dropDownList( $model, 'id_projet',$list_projet,array('empty' => 'Projet *'));?>
		<?php echo $form->error($model,'id_projet'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->