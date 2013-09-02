<?php
/* @var $this CSecurityController */
/* @var $model CSecurity */

$this->breadcrumbs=array(
	'Csecurities'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CSecurity', 'url'=>array('index')),
	array('label'=>'Manage CSecurity', 'url'=>array('admin')),
);
?>

<h1>Create CSecurity</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>