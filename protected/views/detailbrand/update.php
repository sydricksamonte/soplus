<?php
/* @var $this DetailbrandController */
/* @var $model Detailbrand */

$this->breadcrumbs=array(
	'Detailbrands'=>array('index'),
	$model->Code=>array('view','id'=>$model->Code),
	'Update',
);

$this->menu=array(
	array('label'=>'List Detailbrand', 'url'=>array('index')),
	array('label'=>'Create Detailbrand', 'url'=>array('create')),
	array('label'=>'View Detailbrand', 'url'=>array('view', 'id'=>$model->Code)),
	array('label'=>'Manage Detailbrand', 'url'=>array('admin')),
);
?>

<h1>Update Detailbrand <?php echo $model->Code; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>