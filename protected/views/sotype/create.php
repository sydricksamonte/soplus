<?php
/* @var $this SotypeController */
/* @var $model Sotype */

$this->breadcrumbs=array(
	'Sotypes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Sotype', 'url'=>array('index')),
	array('label'=>'Manage Sotype', 'url'=>array('admin')),
);
?>

<h1>Create Sotype</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>