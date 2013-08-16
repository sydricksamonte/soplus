<?php
/* @var $this LexmarkItemsController */
/* @var $model LexmarkItems */

$this->breadcrumbs=array(
	'Lexmark Items'=>array('index'),
	$model->partNo=>array('view','id'=>$model->partNo),
	'Update',
);

$this->menu=array(
	array('label'=>'List LexmarkItems', 'url'=>array('index')),
	array('label'=>'Create LexmarkItems', 'url'=>array('create')),
	array('label'=>'View LexmarkItems', 'url'=>array('view', 'id'=>$model->partNo)),
	array('label'=>'Manage LexmarkItems', 'url'=>array('admin')),
);
?>

<h1>Update LexmarkItems <?php echo $model->partNo; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>