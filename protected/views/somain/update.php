<?php
/* @var $this SomainController */
/* @var $model Somain */

$this->breadcrumbs=array(
	'Somains'=>array('index'),
	$model->DocNo=>array('view','id'=>$model->DocNo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Somain', 'url'=>array('index')),
	array('label'=>'Create Somain', 'url'=>array('create')),
	array('label'=>'View Somain', 'url'=>array('view', 'id'=>$model->DocNo)),
	array('label'=>'Manage Somain', 'url'=>array('admin')),
);
?>

<h1>Update Somain <?php echo $model->DocNo; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>