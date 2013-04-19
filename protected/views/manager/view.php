<?php
/* @var $this ManagerController */
/* @var $model Manager */

$this->breadcrumbs=array(
	'Managers'=>array('index'),
	$model->cin,
);

$this->menu=array(
	array('label'=>'List Manager', 'url'=>array('index')),
	array('label'=>'Create Manager', 'url'=>array('create')),
	array('label'=>'Update Manager', 'url'=>array('update', 'id'=>$model->cin)),
	array('label'=>'Delete Manager', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cin),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Manager', 'url'=>array('admin')),
);
?>

<h1>View Manager #<?php echo $model->cin; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cin',
		'NOM',
		'Prenom',
		'email',
		'Tel',
		'login',
		'password',
	),
)); ?>
