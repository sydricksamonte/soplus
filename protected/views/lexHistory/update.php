<?php
/* @var $this LexHistoryController */
/* @var $model LexHistory */

$this->breadcrumbs=array(
	'Lex Histories'=>array('index'),
	$model->AN=>array('view','id'=>$model->AN),
	'Update',
);

$this->menu=array(
	array('label'=>'List LexHistory', 'url'=>array('index')),
	array('label'=>'Create LexHistory', 'url'=>array('create')),
	array('label'=>'View LexHistory', 'url'=>array('view', 'id'=>$model->AN)),
	array('label'=>'Manage LexHistory', 'url'=>array('admin')),
);
?>

<h1>Update LexHistory <?php echo $model->AN; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>