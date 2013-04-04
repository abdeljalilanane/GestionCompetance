<?php
/* @var $this TypeCompController */
/* @var $model TypeComp */

$this->breadcrumbs=array(
	'Type Comps'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TypeComp', 'url'=>array('index')),
	array('label'=>'Create TypeComp', 'url'=>array('create')),
	array('label'=>'Update TypeComp', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TypeComp', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TypeComp', 'url'=>array('admin')),
);
?>

<h1>View TypeComp #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'type',
	),
)); ?>
