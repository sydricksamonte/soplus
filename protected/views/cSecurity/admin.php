<?php
/* @var $this CSecurityController */
/* @var $model CSecurity */

$this->breadcrumbs=array(
	'Csecurities'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List CSecurity', 'url'=>array('index')),
	array('label'=>'Create CSecurity', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#csecurity-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Csecurities</h1>

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
	'id'=>'csecurity-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'Emp_Code',
		'FirstName',
		'MI',
		'LastName',
		'Level',
		'Passwrd',
		/*
		'AcctName',
		'Bday',
		'LocalNo',
		'CellPhone',
		'Email',
		'TermsConditions',
		'Position',
		'Resigned',
		'PRFPLUS',
		'Optimal',
		'ServiceCtr',
		'Unison',
		'LogIn',
		'LastLog',
		'Sex',
		'religion',
		'citizenship',
		'civilstatus',
		'completeaddress',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
