<?php
/* @var $this SotypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sotypes',
);

$this->menu=array(
	array('label'=>'Create Sotype', 'url'=>array('create')),
	array('label'=>'Manage Sotype', 'url'=>array('admin')),
);
?>

<h1>Sotypes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
