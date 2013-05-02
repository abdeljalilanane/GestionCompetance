<?php
/* @var $this VecteurCompetenceProjetController */
/* @var $model VecteurCompetenceProjet */

$this->breadcrumbs=array(
	'Vecteur Competence Projets'=>array('index'),
	$model->id_competence_projet,
);

$this->menu=array(
	array('label'=>'List VecteurCompetenceProjet', 'url'=>array('index')),
	array('label'=>'Create VecteurCompetenceProjet', 'url'=>array('create')),
	array('label'=>'Update VecteurCompetenceProjet', 'url'=>array('update', 'id'=>$model->id_competence_projet)),
	array('label'=>'Delete VecteurCompetenceProjet', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_competence_projet),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage VecteurCompetenceProjet', 'url'=>array('admin')),
);
?>

<h1>View VecteurCompetenceProjet #<?php echo $model->id_competence_projet; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_competence_projet',
		'id_competence',
		'id_projet',
	),
)); ?>
