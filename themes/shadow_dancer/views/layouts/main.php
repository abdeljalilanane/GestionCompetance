<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/buttons.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/icons.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/tables.css" />
    
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/mbmenu.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/mbmenu_iestyles.css" />
	

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">
	<div id="topnav">
		<div class="topnav_text">
		<?php echo CHtml::link('Home',array('/site/index')); ?>| <?php echo CHtml::link('My Account',array('/site/index')); ?>| <?php echo CHtml::link('Settings',array('/site/index')); ?>| <?php echo CHtml::link('Logout',array('/site/logout')); ?>
	</div>
	</div>

	<div id="header">
		<div id="logo"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/logo.png"></img><?php //echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->
   
	<div id="mainmenu">
    
		<?php
                $manager = Manager::model()->findByAttributes(array('login'=>Yii::app()->user->name));
                $collaborateur=  Collaborateurs::model()->findByAttributes(array('login'=>Yii::app()->user->name));
               
                
                $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				/*array('label'=>'Dashboard', 'url'=>array('/site/index')),
				array('label'=>'Graphs', 'url'=>array('/site/page', 'view'=>'graphs'),'itemOptions'=>array('class'=>'icon_chart')),
				array('label'=>'Form', 'url'=>array('/site/page', 'view'=>'forms')),
				array('label'=>'Interface', 'url'=>array('/site/page', 'view'=>'interface')),				
				array('label'=>'Buttons & Icons', 'url'=>array('/site/page', 'view'=>'buttons_and_icons')),
				array('label'=>'Error Pages', 'url'=>array('/site/page', 'view'=>'Demo 404 page')),*/
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'Competences', 'url'=>array('/competences/admin'),'visible'=>Yii::app()->user->name=="admin"),
				array('label'=>'Type Competences', 'url'=>array('/typeComp/admin'),'visible'=>Yii::app()->user->name=="admin"),
				array('label'=>'Manager', 'url'=>array('/manager/admin'),'visible'=>Yii::app()->user->name=="admin"),
				array('label'=>'Service Supervise', 'url'=>array('/servicesupervise/admin'),'visible'=>Yii::app()->user->name=="admin"),
				array('label'=>'Collaborateurs', 'url'=>array('/collaborateurs/admin'),'visible'=>Yii::app()->user->name=="admin"),
                                array('label'=>'Projet', 'url'=>array('/projet/admin'),'visible'=>Yii::app()->user->name=="admin"),
                    array('label'=>'Cree Projet', 'url'=>array('/projet/create'),'visible'=>$manager!=null),
                    array('label'=>'Vecteur Comp Projet', 'url'=>array('/vecteurCompetenceProjet/create'),'visible'=>$manager!=null),
                                array('label'=>'Competences Par projet', 'url'=>array('/vecteurCompetenceProjet/index'),'visible'=>$manager!=null),
                                array('label'=>'Vecteur Comp Collaborateurs', 'url'=>array('/vecteurCompetenceCollaborateur/create'),'visible'=>$collaborateur!=null),
                                
                                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				//array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			
			),
		)); ?>
	</div> <!--mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by GC_3A11<br/>
		All Rights Reserved.<br/>
		
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>