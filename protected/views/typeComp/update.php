<?php
/* @var $this TypeCompController */
/* @var $model TypeComp */

$this->breadcrumbs=array(
	'Type Comps'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TypeComp', 'url'=>array('index')),
	array('label'=>'Create TypeComp', 'url'=>array('create')),
	array('label'=>'View TypeComp', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TypeComp', 'url'=>array('admin')),
);
?>

<h1>Update TypeComp <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>