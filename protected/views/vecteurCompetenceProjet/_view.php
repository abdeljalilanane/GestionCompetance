<?php
/* @var $this VecteurCompetenceProjetController */
/* @var $data VecteurCompetenceProjet */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_competence_projet')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_competence_projet), array('view', 'id'=>$data->id_competence_projet)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_competence')); ?>:</b>
	<?php echo CHtml::encode($data->id_competence); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_projet')); ?>:</b>
	<?php echo CHtml::encode($data->id_projet); ?>
	<br />


</div>