<?php
/* @var $this LexHistoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Lex Histories',
);

$this->menu=array(
	array('label'=>'Create LexHistory', 'url'=>array('create')),
	array('label'=>'Manage LexHistory', 'url'=>array('admin')),
);
?>

<h1>Lex Histories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
