<?php
/* @var $this SoDetailController */
/* @var $model SoDetail */

$this->breadcrumbs=array(
	'So Details'=>array('index'),
    $model->DocNo=>array('view','id'=>$model->DocNo),
	'Create',
);

$this->menu=array(
	array('label'=>'List Items', 'url'=>array('index')),
	array('label'=>'Manage Items', 'url'=>array('admin')),
	array('label'=>'Manage Types', 'url'=>array('/tblsotype/admin')),
	
);
?>
<?php $id = Yii::app()->request->getQuery('id');
 echo $this->renderPartial('_form', array('model'=>$model,'message'=>$id)); ?>