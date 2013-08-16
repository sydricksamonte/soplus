<?php
/* @var $this LastnumController */
/* @var $model Lastnum */

$this->breadcrumbs=array(
	'Lastnums'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Lastnum', 'url'=>array('index')),
	array('label'=>'Create Lastnum', 'url'=>array('create')),
	array('label'=>'Update Lastnum', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Lastnum', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Lastnum', 'url'=>array('admin')),
);
?>

<h1>View Lastnum #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'LN_Counter',
	),
)); ?>
