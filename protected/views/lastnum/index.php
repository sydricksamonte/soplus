<?php
/* @var $this LastnumController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Lastnums',
);

$this->menu=array(
	array('label'=>'Create Lastnum', 'url'=>array('create')),
	array('label'=>'Manage Lastnum', 'url'=>array('admin')),
);
?>

<h1>Lastnums</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
