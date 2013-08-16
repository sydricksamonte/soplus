<?php
/* @var $this SoprptController */
/* @var $model Soprpt */

$this->breadcrumbs=array(
	'Soprpts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Soprpt', 'url'=>array('index')),
	array('label'=>'Manage Soprpt', 'url'=>array('admin')),
);
?>

<h1>Create Soprpt</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>