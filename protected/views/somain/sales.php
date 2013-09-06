<?php
/* @var $this SomainController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Somains',
    $model->DocNo=>array('print','id'=>$model->DocNo),
);
die($model->DocNo);
?>

<h1>Entries</h1>

<?php 
 $model = new Somain;
 $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$model->getAllRelToUser(Yii::app()->user->id),
	'itemView'=>'_view',
)); ?>
