<?php
/* @var $this CompetencesController */
/* @var $model Competences */

$this->breadcrumbs=array(
	'Competences'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Competences', 'url'=>array('index')),
	array('label'=>'Manage Competences', 'url'=>array('admin')),
);
?>

<h1>Create Competences</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>