<?php
/* @var $this ServiceSuperviseController */
/* @var $model ServiceSupervise */

$this->breadcrumbs=array(
	'Service Supervises'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ServiceSupervise', 'url'=>array('index')),
	array('label'=>'Manage ServiceSupervise', 'url'=>array('admin')),
);
?>

<h1>Create ServiceSupervise</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>