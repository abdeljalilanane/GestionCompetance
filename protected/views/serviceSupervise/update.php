<?php
/* @var $this ServiceSuperviseController */
/* @var $model ServiceSupervise */

$this->breadcrumbs=array(
	'Service Supervises'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ServiceSupervise', 'url'=>array('index')),
	array('label'=>'Create ServiceSupervise', 'url'=>array('create')),
	array('label'=>'View ServiceSupervise', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ServiceSupervise', 'url'=>array('admin')),
);
?>

<h1>Update ServiceSupervise <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>