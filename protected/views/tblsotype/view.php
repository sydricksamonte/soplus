<?php
/* @var $this TblsotypeController */
/* @var $model Tblsotype */

$this->breadcrumbs=array(
	'Tblsotypes'=>array('index'),
	$model->Type1,
);

$this->menu=array(
	array('label'=>'List Tblsotype', 'url'=>array('index')),
	array('label'=>'Create Tblsotype', 'url'=>array('create')),
	array('label'=>'Update Tblsotype', 'url'=>array('update', 'id'=>$model->Type1)),
	array('label'=>'Delete Tblsotype', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Type1),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tblsotype', 'url'=>array('admin')),
);
?>

<h1>View Tblsotype #<?php echo $model->Type1; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Type1',
		'Description',
	),
)); ?>
