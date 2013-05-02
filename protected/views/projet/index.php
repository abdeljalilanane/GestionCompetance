<?php
/* @var $this ProjetController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Projets',
);

$this->menu=array(
	array('label'=>'Create Projet', 'url'=>array('create')),
	array('label'=>'Manage Projet', 'url'=>array('admin')),
);
?>

<h1>Projets</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
