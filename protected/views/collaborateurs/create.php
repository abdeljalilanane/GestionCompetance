<?php
/* @var $this CollaborateursController */
/* @var $model Collaborateurs */

$this->breadcrumbs=array(
	'Collaborateurs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Collaborateurs', 'url'=>array('index')),
	array('label'=>'Manage Collaborateurs', 'url'=>array('admin')),
);
?>

<h1>Create Collaborateurs</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>