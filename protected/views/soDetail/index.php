<?php
/* @var $this SoDetailController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'So Details',
);

$this->menu=array(
	array('label'=>'Create SoDetail', 'url'=>array('create')),
	array('label'=>'Manage SoDetail', 'url'=>array('admin')),
);
?>

<h1>So Details</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
