<?php
/* @var $this SoprptController */
/* @var $model Soprpt */

$this->breadcrumbs=array(
	'Soprpts'=>array('index'),
	$model->RptNo,
);

$this->menu=array(
	array('label'=>'List Soprpt', 'url'=>array('index')),
	array('label'=>'Create Soprpt', 'url'=>array('create')),
	array('label'=>'Update Soprpt', 'url'=>array('update', 'id'=>$model->RptNo)),
	array('label'=>'Delete Soprpt', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RptNo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Soprpt', 'url'=>array('admin')),
);
?>

<h1>View Soprpt #<?php echo $model->RptNo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'RptNo',
		'RptName',
		'RptDesc',
		'SQLComm',
		'AccessRptName',
		'ORDERBYclause',
	),
)); ?>
