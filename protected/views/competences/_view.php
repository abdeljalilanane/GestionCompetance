<?php
/* @var $this CompetencesController */
/* @var $data Competences */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('libelle')); ?>:</b>
	<?php echo CHtml::encode($data->libelle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Groupe')); ?>:</b>
	<?php echo CHtml::encode($data->Groupe); ?>
	<br />


</div>