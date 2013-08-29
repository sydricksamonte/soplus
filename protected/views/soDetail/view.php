<?php
/* @var $this SoDetailController */
/* @var $model SoDetail */

$this->breadcrumbs=array(
	'So Details'=>array('index'),
	$model->DetailNo,
);

$this->menu=array(

	array('label'=>'Update Item', 'url'=>array('update', 'id'=>$model->DetailNo)),
	array('label'=>'Delete Item', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->DetailNo),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View Item #<?php echo $model->DetailNo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'DetailNo',
		'DocNo',
		'Qty',
		'UnitMeas',
		'ItemDesc',
		'CurSign',
		'UnitPrice',
	#	'InvoiceNo',
	#	'InvoiceDte',
	#	'PORemarks',
		'FullComm',
	#	'CommB',
	#	'CommC',
		'War_Parts',
		'War_Labor',
		'War_Onsite',
		'TransactionNo',
	#	'Lexmark',
	#	'Field1',
	#	'Field2',
	#	'Field3',
	#	'Field4',
	#	'chngePrice',
		'partNo',
		'bold',
	),
)); ?>
