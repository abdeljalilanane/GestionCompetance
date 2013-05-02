<?php
/* @var $this VecteurCompetenceCollaborateurController */
/* @var $model VecteurCompetenceCollaborateur */

$this->breadcrumbs=array(
	'Vecteur Competence Collaborateurs'=>array('index'),
	$model->id_competence_collaborateur=>array('view','id'=>$model->id_competence_collaborateur),
	'Update',
);

$this->menu=array(
	array('label'=>'List VecteurCompetenceCollaborateur', 'url'=>array('index')),
	array('label'=>'Create VecteurCompetenceCollaborateur', 'url'=>array('create')),
	array('label'=>'View VecteurCompetenceCollaborateur', 'url'=>array('view', 'id'=>$model->id_competence_collaborateur)),
	array('label'=>'Manage VecteurCompetenceCollaborateur', 'url'=>array('admin')),
);
?>

<h1>Update VecteurCompetenceCollaborateur <?php echo $model->id_competence_collaborateur; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>