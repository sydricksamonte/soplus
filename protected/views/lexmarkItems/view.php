<?php
/* @var $this LexmarkItemsController */
/* @var $model LexmarkItems */

$this->breadcrumbs=array(
	'Lexmark Items'=>array('index'),
	$model->partNo,
);

$this->menu=array(
	array('label'=>'List LexmarkItems', 'url'=>array('index')),
	array('label'=>'Create LexmarkItems', 'url'=>array('create')),
	array('label'=>'Update LexmarkItems', 'url'=>array('update', 'id'=>$model->partNo)),
	array('label'=>'Delete LexmarkItems', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->partNo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LexmarkItems', 'url'=>array('admin')),
);
?>

<h1>View LexmarkItems #<?php echo $model->partNo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'partNo',
		'description',
		'dealersprice',
		'retailerprice',
		'stockOnHand',
		'consignment',
		'demo',
		'updatedBy',
		'lastUpdate',
	),
)); ?>
