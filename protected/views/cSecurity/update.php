<?php
/* @var $this CSecurityController */
/* @var $model CSecurity */

$this->breadcrumbs=array(
	'Csecurities'=>array('index'),
	$model->Emp_Code=>array('view','id'=>$model->Emp_Code),
	'Update',
);

$this->menu=array(
	array('label'=>'List CSecurity', 'url'=>array('index')),
	array('label'=>'Create CSecurity', 'url'=>array('create')),
	array('label'=>'View CSecurity', 'url'=>array('view', 'id'=>$model->Emp_Code)),
	array('label'=>'Manage CSecurity', 'url'=>array('admin')),
);
?>

<h1>Update CSecurity <?php echo $model->Emp_Code; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>