<?php
/* @var $this SoDetailController */
/* @var $model SoDetail */

$this->breadcrumbs=array(
	'So Details'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Items', 'url'=>array('index')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#so-detail-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Items</h1>

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
	'id'=>'so-detail-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'DetailNo',
		'DocNo',
		'Qty',
		'UnitMeas',
		'ItemDesc',
		'CurSign',
		/*
		'UnitPrice',
		'InvoiceNo',
		'InvoiceDte',
		'PORemarks',
		'FullComm',
		'CommB',
		'CommC',
		'War_Parts',
		'War_Labor',
		'War_Onsite',
		'TransactionNo',
		'Lexmark',
		'Field1',
		'Field2',
		'Field3',
		'Field4',
		'chngePrice',
		'partNo',
		'bold',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
