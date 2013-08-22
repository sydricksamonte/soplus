<?php
/* @var $this DetailbrandController */
/* @var $model Detailbrand */

$this->breadcrumbs=array(
	'Detailbrands'=>array('index'),
	$model->Code,
);

$this->menu=array(
	array('label'=>'List Detailbrand', 'url'=>array('index')),
	array('label'=>'Create Detailbrand', 'url'=>array('create')),
	array('label'=>'Update Detailbrand', 'url'=>array('update', 'id'=>$model->Code)),
	array('label'=>'Delete Detailbrand', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Code),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Detailbrand', 'url'=>array('admin')),
);
?>

<h1>View Detailbrand #<?php echo $model->Code; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Code',
		'Description',
	),
)); ?>
