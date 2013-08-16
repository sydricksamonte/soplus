<?php
/* @var $this LastnumController */
/* @var $model Lastnum */

$this->breadcrumbs=array(
	'Lastnums'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Lastnum', 'url'=>array('index')),
	array('label'=>'Manage Lastnum', 'url'=>array('admin')),
);
?>

<h1>Create Lastnum</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>