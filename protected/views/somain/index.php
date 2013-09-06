<?php
/* @var $this SomainController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Somains',
);

if (Yii::app()->user->getState('role') != 1)
{
$this->menu=array(
	array('label'=>'Show Forms For Approval', 'url'=>array('nextuni', 'docno'=>'aaa', 'prf'=>'0', 'opt'=>'0', 'srv'=>'0', 'uni'=>'0', 'comm'=>'firstr', 'type'=>'all')),
    array('label'=>'Create An Entry', 'url'=>array('create')),
    array('label'=>'List My Encoded Entries', 'url'=>array('index')),
    array('label'=>'Generate Sales Report', 'url'=>array('report')),
    );
}
else{
    $this->menu=array(
	array('label'=>'List Entries', 'url'=>array('index')),
	array('label'=>'Create Entry', 'url'=>array('create')),
    
);
}
?>

<h1>Entries</h1>

<?php 
 $model = new Somain;
 $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$model->getAllRelToUser(Yii::app()->user->id),
	'itemView'=>'_view',
)); ?>
