<?php
/* @var $this SoprptController */
/* @var $data Soprpt */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('RptNo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->RptNo), array('view', 'id'=>$data->RptNo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RptName')); ?>:</b>
	<?php echo CHtml::encode($data->RptName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RptDesc')); ?>:</b>
	<?php echo CHtml::encode($data->RptDesc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SQLComm')); ?>:</b>
	<?php echo CHtml::encode($data->SQLComm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AccessRptName')); ?>:</b>
	<?php echo CHtml::encode($data->AccessRptName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ORDERBYclause')); ?>:</b>
	<?php echo CHtml::encode($data->ORDERBYclause); ?>
	<br />


</div>