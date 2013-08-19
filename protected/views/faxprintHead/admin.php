<?php
/* @var $this FaxprintHeadController */
/* @var $model FaxprintHead */

$this->breadcrumbs=array(
	'Faxprint Heads'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List FaxprintHead', 'url'=>array('index')),
	array('label'=>'Create FaxprintHead', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#faxprint-head-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Faxprint Heads</h1>

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
	'id'=>'faxprint-head-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'Customer',
		'ContactPerson',
		'TelNo',
		'Address',
		'DocNo',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
