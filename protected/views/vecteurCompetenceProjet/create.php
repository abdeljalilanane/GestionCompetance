<?php
/* @var $this VecteurCompetenceProjetController */
/* @var $model VecteurCompetenceProjet */

$this->breadcrumbs=array(
	'Vecteur Competence Projets'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List VecteurCompetenceProjet', 'url'=>array('index')),
	array('label'=>'Manage VecteurCompetenceProjet', 'url'=>array('admin')),
);
?>

<h1>Create VecteurCompetenceProjet</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>