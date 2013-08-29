<?php
/* @var $this SoDetailController */
/* @var $model SoDetail */

$this->breadcrumbs=array(
	'So Details'=>array('index'),
	$model->DetailNo=>array('view','id'=>$model->DetailNo),
	'Update',
);
$this->menu=array(
	array('label'=>'View Item', 'url'=>array('view', 'id'=>$model->DetailNo)),
    array('label'=>'Delete Item', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->DetailNo),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>Update Item <?php echo $model->DetailNo; ?></h1>

<?php echo $this->renderPartial('_formup', array('model'=>$model,'id'=>'43')); ?>