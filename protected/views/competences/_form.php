<?php
/* @var $this CompetencesController */
/* @var $model Competences */
/* @var $form CActiveForm */

$Type = TypeComp::model()->findAll(array('order' => 'id'));
$listtype = CHtml::listData($Type,'type','type');

$Group = TypeComp::model()->findAll(array('order'=>'id', 'condition'=>'id=:x', 'params'=>array(':x'=>$x)));
$listGroup = CHtml::listData($Group,'id','id');
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'competences-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'libelle'); ?>
		<?php echo $form->textField($model,'libelle',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'libelle'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'type'); ?>
		<?php //echo $form->textField($model,'type',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->dropDownList( $model, 'type',
		//$listtype,
		array(
        'Competences Linguistique'=>'Competences Linguistique',
        'Competences de base'=>'Competences de base',
        'Competences Specifique'=>array(
            'Communication & Réseau'=>'Communication & Réseau',
            'Domaine d\'application'=>'Domaine d\'application',
            'Langage et Base de donnée'=>'Langage et Base de donnée',
            'Materiel'=>'Materiel',
            'outils logiciel & burotique'=>'outils logiciel & burotique',
            'Systeme d\'exploitation & serveur'=>'Systeme d\'exploitation & serveur',
        ),
    ),
		array('empty' => 'type competences *'));?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'Groupe'); ?>
		<?php //echo $form->textField($model,'Groupe',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->dropDownList( $model, 'Groupe',
		array('Linguistique' => 'Linguistique', 
				  'Specifique' => 'Specifique',
				  'De base'=>'De base',
				  ),array('empty' => 'Groupe *'));?>
		<?php echo $form->error($model,'Groupe'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->