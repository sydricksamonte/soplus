<?php
/* @var $this SoprptController */
/* @var $model Soprpt */

$this->breadcrumbs=array(
	'Soprpts'=>array('index'),
	$model->RptNo=>array('view','id'=>$model->RptNo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Soprpt', 'url'=>array('index')),
	array('label'=>'Create Soprpt', 'url'=>array('create')),
	array('label'=>'View Soprpt', 'url'=>array('view', 'id'=>$model->RptNo)),
	array('label'=>'Manage Soprpt', 'url'=>array('admin')),
);
?>

<h1>Update Soprpt <?php echo $model->RptNo; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>