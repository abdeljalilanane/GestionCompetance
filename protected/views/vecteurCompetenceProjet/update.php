<?php
/* @var $this VecteurCompetenceProjetController */
/* @var $model VecteurCompetenceProjet */

$this->breadcrumbs=array(
	'Vecteur Competence Projets'=>array('index'),
	$model->id_competence_projet=>array('view','id'=>$model->id_competence_projet),
	'Update',
);

$this->menu=array(
	array('label'=>'List VecteurCompetenceProjet', 'url'=>array('index')),
	array('label'=>'Create VecteurCompetenceProjet', 'url'=>array('create')),
	array('label'=>'View VecteurCompetenceProjet', 'url'=>array('view', 'id'=>$model->id_competence_projet)),
	array('label'=>'Manage VecteurCompetenceProjet', 'url'=>array('admin')),
);
?>

<h1>Update VecteurCompetenceProjet <?php echo $model->id_competence_projet; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>