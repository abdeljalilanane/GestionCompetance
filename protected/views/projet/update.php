<?php
/* @var $this ProjetController */
/* @var $model Projet */

$this->breadcrumbs=array(
	'Projets'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Projet', 'url'=>array('index')),
	array('label'=>'Create Projet', 'url'=>array('create')),
	array('label'=>'View Projet', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Projet', 'url'=>array('admin')),
);
?>

<h1>Update Projet <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>