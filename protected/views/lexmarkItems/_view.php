<?php
/* @var $this LexmarkItemsController */
/* @var $data LexmarkItems */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('partNo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->partNo), array('view', 'id'=>$data->partNo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dealersprice')); ?>:</b>
	<?php echo CHtml::encode($data->dealersprice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('retailerprice')); ?>:</b>
	<?php echo CHtml::encode($data->retailerprice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stockOnHand')); ?>:</b>
	<?php echo CHtml::encode($data->stockOnHand); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('consignment')); ?>:</b>
	<?php echo CHtml::encode($data->consignment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('demo')); ?>:</b>
	<?php echo CHtml::encode($data->demo); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('updatedBy')); ?>:</b>
	<?php echo CHtml::encode($data->updatedBy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastUpdate')); ?>:</b>
	<?php echo CHtml::encode($data->lastUpdate); ?>
	<br />

	*/ ?>

</div>