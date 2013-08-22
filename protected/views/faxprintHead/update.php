<?php
/* @var $this FaxprintHeadController */
/* @var $model FaxprintHead */

$this->breadcrumbs=array(
	'Faxprint Heads'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FaxprintHead', 'url'=>array('index')),
	array('label'=>'Create FaxprintHead', 'url'=>array('create')),
	array('label'=>'View FaxprintHead', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage FaxprintHead', 'url'=>array('admin')),
);
?>

<h1>Update FaxprintHead <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>