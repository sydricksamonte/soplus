<?php
/* @var $this LexHistoryController */
/* @var $model LexHistory */

$this->breadcrumbs=array(
	'Lex Histories'=>array('index'),
	$model->AN,
);

$this->menu=array(
	array('label'=>'List LexHistory', 'url'=>array('index')),
	array('label'=>'Create LexHistory', 'url'=>array('create')),
	array('label'=>'Update LexHistory', 'url'=>array('update', 'id'=>$model->AN)),
	array('label'=>'Delete LexHistory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->AN),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LexHistory', 'url'=>array('admin')),
);
?>

<h1>View LexHistory #<?php echo $model->AN; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'InvoiceNo',
		'LexDate',
		'StockOnHand',
		'partNo',
		'DocNo',
		'QtyIN',
		'QtyOUT',
		'AN',
		'Remarks',
		'OldDocNo',
	),
)); ?>
