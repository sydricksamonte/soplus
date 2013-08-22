<?php
/* @var $this SoDetailController */
/* @var $model SoDetail */

$this->breadcrumbs=array(
	'So Details'=>array('index'),
	$model->DetailNo=>array('view','id'=>$model->DetailNo),
	'Update',
);

$this->menu=array(
	array('label'=>'List SoDetail', 'url'=>array('index')),
	array('label'=>'Create SoDetail', 'url'=>array('create')),
	array('label'=>'View SoDetail', 'url'=>array('view', 'id'=>$model->DetailNo)),
	array('label'=>'Manage SoDetail', 'url'=>array('admin')),
);
?>

<h1>Update SoDetail <?php echo $model->DetailNo; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>