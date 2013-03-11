<?php
/* @var $this TesteController */
/* @var $data Teste */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('test')); ?>:</b>
	<?php echo CHtml::encode($data->test); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tesbb')); ?>:</b>
	<?php echo CHtml::encode($data->tesbb); ?>
	<br />


</div>