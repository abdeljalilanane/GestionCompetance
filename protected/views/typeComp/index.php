<?php
/* @var $this TypeCompController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Type Comps',
);

$this->menu=array(
	array('label'=>'Create TypeComp', 'url'=>array('create')),
	array('label'=>'Manage TypeComp', 'url'=>array('admin')),
);
?>

<h1>Type Comps</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
