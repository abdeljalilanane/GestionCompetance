<?php
/* @var $this ManagerController */
/* @var $model Manager */

$this->breadcrumbs=array(
	'Managers'=>array('index'),
	$model->cin=>array('view','id'=>$model->cin),
	'Update',
);

$this->menu=array(
	array('label'=>'List Manager', 'url'=>array('index')),
	array('label'=>'Create Manager', 'url'=>array('create')),
	array('label'=>'View Manager', 'url'=>array('view', 'id'=>$model->cin)),
	array('label'=>'Manage Manager', 'url'=>array('admin')),
);
?>

<h1>Update Manager <?php echo $model->cin; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>