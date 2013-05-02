<?php
/* @var $this VecteurCompetenceCollaborateurController */
/* @var $model VecteurCompetenceCollaborateur */

$this->breadcrumbs=array(
	'Vecteur Competence Collaborateurs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List VecteurCompetenceCollaborateur', 'url'=>array('index')),
	array('label'=>'Manage VecteurCompetenceCollaborateur', 'url'=>array('admin')),
);
?>

<h1>Create VecteurCompetenceCollaborateur</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>