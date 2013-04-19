<?php
/* @var $this CollaborateursController */
/* @var $model Collaborateurs */

$this->breadcrumbs=array(
	'Collaborateurs'=>array('index'),
	$model->cin=>array('view','id'=>$model->cin),
	'Update',
);

$this->menu=array(
	array('label'=>'List Collaborateurs', 'url'=>array('index')),
	array('label'=>'Create Collaborateurs', 'url'=>array('create')),
	array('label'=>'View Collaborateurs', 'url'=>array('view', 'id'=>$model->cin)),
	array('label'=>'Manage Collaborateurs', 'url'=>array('admin')),
);
?>

<h1>Update Collaborateurs <?php echo $model->cin; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>