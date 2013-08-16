<?php
/* @var $this SoDetailController */
/* @var $model SoDetail */

$this->breadcrumbs=array(
	'So Details'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SoDetail', 'url'=>array('index')),
	array('label'=>'Manage SoDetail', 'url'=>array('admin')),
	array('label'=>'Manage SO Type', 'url'=>array('/tblsotype/admin')),
	
);
?>

<h1>Create SoDetail</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>