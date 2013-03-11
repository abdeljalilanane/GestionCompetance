<?php
/* @var $this ServiceSuperviseController */
/* @var $model ServiceSupervise */

$this->breadcrumbs=array(
	'Service Supervises'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ServiceSupervise', 'url'=>array('index')),
	array('label'=>'Create ServiceSupervise', 'url'=>array('create')),
	array('label'=>'Update ServiceSupervise', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ServiceSupervise', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ServiceSupervise', 'url'=>array('admin')),
);
?>

<h1>View ServiceSupervise #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'service',
		'cin_Manager',
	),
)); ?>
