<?php
/* @var $this CompetencesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Competences',
);

$this->menu=array(
	array('label'=>'Create Competences', 'url'=>array('create')),
	array('label'=>'Manage Competences', 'url'=>array('admin')),
);
?>

<h1>Competences</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
