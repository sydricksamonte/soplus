<?php
/* @var $this SomainController */
/* @var $model Somain */

$this->breadcrumbs=array(
	'Somains'=>array('index'),
	$model->DocNo,
);

$this->menu=array(
	array('label'=>'List Somain', 'url'=>array('index')),
	array('label'=>'Create Somain', 'url'=>array('create')),
	array('label'=>'Update Somain', 'url'=>array('update', 'id'=>$model->DocNo)),
	array('label'=>'Delete Somain', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->DocNo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Somain', 'url'=>array('admin')),
);
?>

<h1>View Somain #<?php echo $model->DocNo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'DocNo',
		'DatePlaced',
		'UserID',
		'Customer',
		'ContactPerson',
		'Terms',
		'PayMode',
		'DeliverDte',
		'AcctOf1',
		'AcctOf2',
		'Instruction',
		'IssueDte',
		'Address',
		'TelNo',
		'Approved',
		'Faxed',
		'Emailed',
		'ForApproval',
		'Classification',
		'ApprovedBy',
		'DRPeriod',
		'Remarks',
		'PODetails',
		'Cancelled',
		'CancelReason',
		'CancelDateFax',
		'Currency',
		'DeliverTo',
		'Delilvered',
		'FANo',
		'ApprovedDateTime',
		'PickedUp',
		'FaxedAsFA',
		'Field1',
		'Field2',
		'Field3',
		'Field4',
		'FA_RGB',
		'FA_Other1',
		'FA_Other2',
		'RefDocNo',
		'RefInvDtr',
		'DateSubmitted',
	),
)); ?>
