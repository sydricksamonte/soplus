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
	array('label'=>'Create Entry', 'url'=>array('create')),
	array('label'=>'Manage Entries', 'url'=>array('admin')),
    array('label'=>'Preview This Entry', 'url'=>array('view', 'id'=>$model->DocNo)),
);
?>

<h1>Update Entry <?php echo $model->DocNo; ?></h1>

<?php echo $this->renderPartial('_addso', array('model'=>$model)); ?>