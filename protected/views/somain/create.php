<?php
/* @var $this SomainController */
/* @var $model Somain */

$this->breadcrumbs=array(
	'Somains'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Entries', 'url'=>array('index')),
	array('label'=>'Manage Entries', 'url'=>array('admin')),
);
?>

<h1>Create Data Entry</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>