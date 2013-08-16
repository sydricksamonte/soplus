<?php
/* @var $this TblsotypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tblsotypes',
);

$this->menu=array(
	array('label'=>'Create Tblsotype', 'url'=>array('create')),
	array('label'=>'Manage Tblsotype', 'url'=>array('admin')),
);
?>

<h1>Tblsotypes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
