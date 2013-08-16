<?php
/* @var $this SoprptController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Soprpts',
);

$this->menu=array(
	array('label'=>'Create Soprpt', 'url'=>array('create')),
	array('label'=>'Manage Soprpt', 'url'=>array('admin')),
);
?>

<h1>Soprpts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
