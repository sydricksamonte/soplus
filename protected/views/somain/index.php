<?php
/* @var $this SomainController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Somains',
);

$this->menu=array(
	array('label'=>'Create Entries', 'url'=>array('create')),
	array('label'=>'Manage Entries', 'url'=>array('admin')),
);
?>

<h1>Entries</h1>

<?php 
 $model = new Somain;
 $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$model->getAllRelToUser(Yii::app()->user->id),
	'itemView'=>'_view',
)); ?>
