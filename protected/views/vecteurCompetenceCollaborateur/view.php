<?php
/* @var $this VecteurCompetenceCollaborateurController */
/* @var $model VecteurCompetenceCollaborateur */

$this->breadcrumbs=array(
	'Vecteur Competence Collaborateurs'=>array('index'),
	$model->id_competence_collaborateur,
);

$this->menu=array(
	array('label'=>'List VecteurCompetenceCollaborateur', 'url'=>array('index')),
	array('label'=>'Create VecteurCompetenceCollaborateur', 'url'=>array('create')),
	array('label'=>'Update VecteurCompetenceCollaborateur', 'url'=>array('update', 'id'=>$model->id_competence_collaborateur)),
	array('label'=>'Delete VecteurCompetenceCollaborateur', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_competence_collaborateur),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage VecteurCompetenceCollaborateur', 'url'=>array('admin')),
);
?>

<h1>View VecteurCompetenceCollaborateur #<?php echo $model->id_competence_collaborateur; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_competence_collaborateur',
		'id_competence',
		'id_collaborateur',
	),
)); ?>
