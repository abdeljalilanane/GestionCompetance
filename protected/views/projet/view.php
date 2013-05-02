<?php
/* @var $this ProjetController */
/* @var $model Projet */

$this->breadcrumbs=array(
	'Projets'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Projet', 'url'=>array('index')),
	array('label'=>'Create Projet', 'url'=>array('create')),
	array('label'=>'Update Projet', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Projet', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Projet', 'url'=>array('admin')),
);
?>

<h1>View Projet #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nom',
		'type',
		'id_manager',
	),
)); ?>
