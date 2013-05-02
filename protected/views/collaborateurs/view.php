<?php
/* @var $this CollaborateursController */
/* @var $model Collaborateurs */

$this->breadcrumbs=array(
	'Collaborateurs'=>array('index'),
	$model->cin,
);

$this->menu=array(
	array('label'=>'List Collaborateurs', 'url'=>array('index')),
	array('label'=>'Create Collaborateurs', 'url'=>array('create')),
	array('label'=>'Update Collaborateurs', 'url'=>array('update', 'id'=>$model->cin)),
	array('label'=>'Delete Collaborateurs', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cin),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Collaborateurs', 'url'=>array('admin')),
);
?>

<h1>View Collaborateurs #<?php echo $model->cin; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cin',
		'nom',
		'prenom',
		'service',
		'login',
		'password',
	),
)); ?>
