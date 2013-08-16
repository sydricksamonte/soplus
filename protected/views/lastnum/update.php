<?php
/* @var $this LastnumController */
/* @var $model Lastnum */

$this->breadcrumbs=array(
	'Lastnums'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Lastnum', 'url'=>array('index')),
	array('label'=>'Create Lastnum', 'url'=>array('create')),
	array('label'=>'View Lastnum', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Lastnum', 'url'=>array('admin')),
);
?>

<h1>Update Lastnum <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>