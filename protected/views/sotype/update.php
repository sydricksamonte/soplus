<?php
/* @var $this SotypeController */
/* @var $model Sotype */

$this->breadcrumbs=array(
	'Sotypes'=>array('index'),
	$model->soType=>array('view','id'=>$model->soType),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sotype', 'url'=>array('index')),
	array('label'=>'Create Sotype', 'url'=>array('create')),
	array('label'=>'View Sotype', 'url'=>array('view', 'id'=>$model->soType)),
	array('label'=>'Manage Sotype', 'url'=>array('admin')),
);
?>

<h1>Update Sotype <?php echo $model->soType; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>