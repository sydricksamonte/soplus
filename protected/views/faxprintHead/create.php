<?php
/* @var $this FaxprintHeadController */
/* @var $model FaxprintHead */

$this->breadcrumbs=array(
	'Faxprint Heads'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FaxprintHead', 'url'=>array('index')),
	array('label'=>'Manage FaxprintHead', 'url'=>array('admin')),
);
?>

<h1>Create FaxprintHead</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>