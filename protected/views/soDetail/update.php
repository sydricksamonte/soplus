<?php
/* @var $this SoDetailController */
/* @var $model SoDetail */

$this->breadcrumbs=array(
	'So Details'=>array('index'),
	$model->DetailNo=>array('view','id'=>$model->DetailNo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Items', 'url'=>array('index')),
	array('label'=>'Create Item', 'url'=>array('create')),
	array('label'=>'View Item', 'url'=>array('view', 'id'=>$model->DetailNo)),
	array('label'=>'Manage Items', 'url'=>array('admin')),
);
?>

<h1>Update Item <?php echo $model->DetailNo; ?></h1>

<?php echo $this->renderPartial('_formup', array('model'=>$model)); ?>