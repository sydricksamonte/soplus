<?php
/* @var $this TblsotypeController */
/* @var $model Tblsotype */

$this->breadcrumbs=array(
	'Tblsotypes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tblsotype', 'url'=>array('index')),
	array('label'=>'Manage Tblsotype', 'url'=>array('admin')),
);
?>

<h1>Create Tblsotype</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>