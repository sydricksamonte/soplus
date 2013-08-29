<?php
/* @var $this SoDetailController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'So Details',
);

$this->menu=array(
	array('label'=>'Manage Items', 'url'=>array('admin')),
);
?>

<h1>Item Details</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
