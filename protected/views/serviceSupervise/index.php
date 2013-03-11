<?php
/* @var $this ServiceSuperviseController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Service Supervises',
);

$this->menu=array(
	array('label'=>'Create ServiceSupervise', 'url'=>array('create')),
	array('label'=>'Manage ServiceSupervise', 'url'=>array('admin')),
);
?>

<h1>Service Supervises</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
