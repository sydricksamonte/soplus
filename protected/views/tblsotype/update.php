<?php
/* @var $this TblsotypeController */
/* @var $model Tblsotype */

$this->breadcrumbs=array(
	'Tblsotypes'=>array('index'),
	$model->Type1=>array('view','id'=>$model->Type1),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tblsotype', 'url'=>array('index')),
	array('label'=>'Create Tblsotype', 'url'=>array('create')),
	array('label'=>'View Tblsotype', 'url'=>array('view', 'id'=>$model->Type1)),
	array('label'=>'Manage Tblsotype', 'url'=>array('admin')),
);
?>

<h1>Update Tblsotype <?php echo $model->Type1; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>