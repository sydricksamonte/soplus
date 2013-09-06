<?php
/* @var $this SomainController */
/* @var $model Somain */

$this->breadcrumbs=array(
	'Somains'=>array('index'),
	'Manage',
);
if (Yii::app()->user->getState('role') != 1)
{
$this->menu=array(
	array('label'=>'Show Forms For Approval', 'url'=>array('nextuni', 'docno'=>'aaa', 'prf'=>'0', 'opt'=>'0', 'srv'=>'0', 'uni'=>'0', 'comm'=>'firstr', 'type'=>'all')),
    array('label'=>'Create An Entry', 'url'=>array('create')),
    array('label'=>'List My Encoded Entries', 'url'=>array('index')),
    array('label'=>'Generate Sales Report', 'url'=>array('report')),
    
);
}
else{
    $this->menu=array(
	array('label'=>'List Entries', 'url'=>array('index')),
	array('label'=>'Create Entry', 'url'=>array('create')),
    
);
}

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#somain-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Entries</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'somain-grid',
	'dataProvider'=>$model->getAllRelToUser(Yii::app()->user->id),
	'filter'=>$model,
	'columns'=>array(
		'DocNo',
		'DatePlaced',
       # array(
       #         'header'=>'Date Placed',
       #         'name'=>'DatePlaced',
       #         'class'=>'SYDateColumn'
       #     ),
        'Classification',
		#'UserID',
		'Customer',
		#'ContactPerson',
        'ApprovedDateTime',
		#'Terms',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
             'template'=>'{view}{update}',
		),
	),
)); ?>
