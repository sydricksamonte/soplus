<?php
/* @var $this LexmarkItemsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Lexmark Items',
);

$this->menu=array(
	array('label'=>'Create LexmarkItems', 'url'=>array('create')),
	array('label'=>'Manage LexmarkItems', 'url'=>array('admin')),
);
?>

<h1>Lexmark Items</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
