<?php
/* @var $this FaxprintHeadController */
/* @var $model FaxprintHead */

$this->breadcrumbs=array(
	'Faxprint Heads'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List FaxprintHead', 'url'=>array('index')),
	array('label'=>'Create FaxprintHead', 'url'=>array('create')),
	array('label'=>'Update FaxprintHead', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete FaxprintHead', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FaxprintHead', 'url'=>array('admin')),
);
?>

<h1>View FaxprintHead #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Customer',
		'ContactPerson',
		'TelNo',
		'Address',
		'DocNo',
		'FANo',
		'DatePlaced',
		'Terms',
		'PayMode',
		'Instruction',
		'IssueDte',
		'DeliverDte',
		'ApprovedBy',
		'Classification',
		'UserID',
		'TradeIn',
		'DeliverTo2',
		'Acct',
		'DRPeriod2',
		'soDescription',
		'Cancel1',
		'Cancel2',
		'Delivered2',
		'PickedUp2',
		'FaxedAsFA2',
		'Approved2',
		'UCS_Company',
		'qty',
		'unitmeas',
		'itemdesc1',
		'cursign',
		'unitPrice',
		'TotalAmt',
		'FullComm',
		'poremarks',
	),
)); ?>
