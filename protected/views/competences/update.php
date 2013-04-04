<?php
/* @var $this CompetencesController */
/* @var $model Competences */

$this->breadcrumbs=array(
	'Competences'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Competences', 'url'=>array('index')),
	array('label'=>'Create Competences', 'url'=>array('create')),
	array('label'=>'View Competences', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Competences', 'url'=>array('admin')),
);
?>

<h1>Update Competences <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>