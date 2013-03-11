<?php
/* @var $this TypeCompController */
/* @var $model TypeComp */

$this->breadcrumbs=array(
	'Type Comps'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TypeComp', 'url'=>array('index')),
	array('label'=>'Manage TypeComp', 'url'=>array('admin')),
);
?>

<h1>Create TypeComp</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>