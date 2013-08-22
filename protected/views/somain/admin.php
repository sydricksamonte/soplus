<?php
/* @var $this SomainController */
/* @var $model Somain */

$this->breadcrumbs=array(
	'Somains'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Entries', 'url'=>array('index')),
	array('label'=>'Create Entries', 'url'=>array('create')),
);

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
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'DocNo',
		'DatePlaced',
		'UserID',
		'Customer',
		'ContactPerson',
		'Terms',
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
		),
	),
)); ?>
