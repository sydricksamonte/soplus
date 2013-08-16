<?php
/* @var $this FaxprintHeadController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Faxprint Heads',
);

$this->menu=array(
	array('label'=>'Create FaxprintHead', 'url'=>array('create')),
	array('label'=>'Manage FaxprintHead', 'url'=>array('admin')),
);
?>

<h1>Faxprint Heads</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
