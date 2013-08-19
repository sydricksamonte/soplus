<?php
/* @var $this SomainController */
/* @var $model Somain */

$this->breadcrumbs=array(
	'Somains'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Somain', 'url'=>array('index')),
	array('label'=>'Manage Somain', 'url'=>array('admin')),
);
?>

<h1>Create Somain</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>