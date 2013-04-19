<?php
/* @var $this CollaborateursController */
/* @var $data Collaborateurs */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cin')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cin), array('view', 'id'=>$data->cin)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom')); ?>:</b>
	<?php echo CHtml::encode($data->nom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prenom')); ?>:</b>
	<?php echo CHtml::encode($data->prenom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('service')); ?>:</b>
	<?php echo CHtml::encode($data->service); ?>
	<br />


</div>