<?php
/* @var $this SomainController */
/* @var $model Somain */

$this->breadcrumbs=array(
	'Somains'=>array('index'),
	$model->DocNo=>array('view','id'=>$model->DocNo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Entries', 'url'=>array('index')),
	array('label'=>'Create Entries', 'url'=>array('create')),
	array('label'=>'View Entries', 'url'=>array('view', 'id'=>$model->DocNo)),
	array('label'=>'Manage Entries', 'url'=>array('admin')),
);
?>

<h1>Update Entries <?php echo $model->DocNo; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>