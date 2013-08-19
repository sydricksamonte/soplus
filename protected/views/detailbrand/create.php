<?php
/* @var $this DetailbrandController */
/* @var $model Detailbrand */

$this->breadcrumbs=array(
	'Detailbrands'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Detailbrand', 'url'=>array('index')),
	array('label'=>'Manage Detailbrand', 'url'=>array('admin')),
);
?>

<h1>Create Detailbrand</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>