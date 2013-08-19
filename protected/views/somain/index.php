<?php
/* @var $this SomainController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Somains',
);

$this->menu=array(
	array('label'=>'Create Somain', 'url'=>array('create')),
	array('label'=>'Manage Somain', 'url'=>array('admin')),
);
?>

<h1>Somains</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
