<?php
/* @var $this VecteurCompetenceCollaborateurController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Vecteur Competence Collaborateurs',
);

$this->menu=array(
	array('label'=>'Create VecteurCompetenceCollaborateur', 'url'=>array('create')),
	array('label'=>'Manage VecteurCompetenceCollaborateur', 'url'=>array('admin')),
);
?>

<h1>Vecteur Competence Collaborateurs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
