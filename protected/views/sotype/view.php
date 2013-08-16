<?php
/* @var $this SotypeController */
/* @var $model Sotype */

$this->breadcrumbs=array(
	'Sotypes'=>array('index'),
	$model->soType,
);

$this->menu=array(
	array('label'=>'List Sotype', 'url'=>array('index')),
	array('label'=>'Create Sotype', 'url'=>array('create')),
	array('label'=>'Update Sotype', 'url'=>array('update', 'id'=>$model->soType)),
	array('label'=>'Delete Sotype', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->soType),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sotype', 'url'=>array('admin')),
);
?>

<h1>View Sotype #<?php echo $model->soType; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'soType',
		'soDescription',
	),
)); ?>
