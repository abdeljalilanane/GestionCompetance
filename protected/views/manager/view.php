<?php
/* @var $this ManagerController */
/* @var $model Manager */

$this->breadcrumbs=array(
	'Managers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Manager', 'url'=>array('index')),
	array('label'=>'Create Manager', 'url'=>array('create')),
	array('label'=>'Update Manager', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Manager', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Manager', 'url'=>array('admin')),
);
?>

<h1>View Manager #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'cin',
		'NOM',
		'Prenom',
		'Email',
		'Tel',
		'login',
		'motpasse',
	),
)); ?>
