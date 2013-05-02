<?php
/* @var $this VecteurCompetenceProjetController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Vecteur Competence Projets',
);

$this->menu=array(
	array('label'=>'Create VecteurCompetenceProjet', 'url'=>array('create')),
	array('label'=>'Manage VecteurCompetenceProjet', 'url'=>array('admin')),
);
?>

<h1>Vecteur Competence Projets</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
