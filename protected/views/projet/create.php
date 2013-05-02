<?php
/* @var $this ProjetController */
/* @var $model Projet */

$this->breadcrumbs=array(
	'Projets'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Projet', 'url'=>array('index')),
	array('label'=>'Manage Projet', 'url'=>array('admin')),
);
?>

<h1>Create Projet</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>