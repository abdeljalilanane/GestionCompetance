<?php
/* @var $this CollaborateursController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Collaborateurs',
);

$this->menu=array(
	array('label'=>'Create Collaborateurs', 'url'=>array('create')),
	array('label'=>'Manage Collaborateurs', 'url'=>array('admin')),
);
?>

<h1>Collaborateurs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
