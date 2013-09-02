<?php
/* @var $this CSecurityController */
/* @var $model CSecurity */

$this->breadcrumbs=array(
	'Csecurities'=>array('index'),
	$model->Emp_Code,
);

$this->menu=array(
	array('label'=>'List CSecurity', 'url'=>array('index')),
	array('label'=>'Create CSecurity', 'url'=>array('create')),
	array('label'=>'Update CSecurity', 'url'=>array('update', 'id'=>$model->Emp_Code)),
	array('label'=>'Delete CSecurity', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Emp_Code),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CSecurity', 'url'=>array('admin')),
);
?>

<h1>View CSecurity #<?php echo $model->Emp_Code; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Emp_Code',
		'FirstName',
		'MI',
		'LastName',
		'Level',
		'Passwrd',
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
	),
)); ?>
