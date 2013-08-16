<?php
/* @var $this LexmarkItemsController */
/* @var $model LexmarkItems */

$this->breadcrumbs=array(
	'Lexmark Items'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LexmarkItems', 'url'=>array('index')),
	array('label'=>'Manage LexmarkItems', 'url'=>array('admin')),
);
?>

<h1>Create LexmarkItems</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>