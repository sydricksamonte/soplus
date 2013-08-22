<?php
/* @var $this LexHistoryController */
/* @var $model LexHistory */

$this->breadcrumbs=array(
	'Lex Histories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LexHistory', 'url'=>array('index')),
	array('label'=>'Manage LexHistory', 'url'=>array('admin')),
);
?>

<h1>Create LexHistory</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>