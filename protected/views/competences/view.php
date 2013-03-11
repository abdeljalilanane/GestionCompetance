<?php
/* @var $this CompetencesController */
/* @var $model Competences */

$this->breadcrumbs=array(
	'Competences'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Competences', 'url'=>array('index')),
	array('label'=>'Create Competences', 'url'=>array('create')),
	array('label'=>'Update Competences', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Competences', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Competences', 'url'=>array('admin')),
);
?>

<h1>View Competences #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'libelle',
		'type',
		'Groupe',
	),
)); ?>
