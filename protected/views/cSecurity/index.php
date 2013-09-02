<?php
/* @var $this CSecurityController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Csecurities',
);

$this->menu=array(
	array('label'=>'Create CSecurity', 'url'=>array('create')),
	array('label'=>'Manage CSecurity', 'url'=>array('admin')),
);
?>

<h1>Csecurities</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
