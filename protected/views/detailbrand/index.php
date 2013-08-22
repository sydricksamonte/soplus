<?php
/* @var $this DetailbrandController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Detailbrands',
);

$this->menu=array(
	array('label'=>'Create Detailbrand', 'url'=>array('create')),
	array('label'=>'Manage Detailbrand', 'url'=>array('admin')),
);
?>

<h1>Detailbrands</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
