<?php
/* @var $this ServiceSuperviseController */
/* @var $data ServiceSupervise */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('service')); ?>:</b>
	<?php echo CHtml::encode($data->service); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cin_Manager')); ?>:</b>
	<?php echo CHtml::encode($data->cin_Manager); ?>
	<br />


</div>