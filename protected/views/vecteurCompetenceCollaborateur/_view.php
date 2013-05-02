<?php
/* @var $this VecteurCompetenceCollaborateurController */
/* @var $data VecteurCompetenceCollaborateur */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_competence_collaborateur')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_competence_collaborateur), array('view', 'id'=>$data->id_competence_collaborateur)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_competence')); ?>:</b>
	<?php echo CHtml::encode($data->id_competence); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_collaborateur')); ?>:</b>
	<?php echo CHtml::encode($data->id_collaborateur); ?>
	<br />


</div>