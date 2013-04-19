<?php
/* @var $this ManagerController */
/* @var $data Manager */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cin')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cin), array('view', 'id'=>$data->cin)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOM')); ?>:</b>
	<?php echo CHtml::encode($data->NOM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Prenom')); ?>:</b>
	<?php echo CHtml::encode($data->Prenom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tel')); ?>:</b>
	<?php echo CHtml::encode($data->Tel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('login')); ?>:</b>
	<?php echo CHtml::encode($data->login); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />


</div>