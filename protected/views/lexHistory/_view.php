<?php
/* @var $this LexHistoryController */
/* @var $data LexHistory */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('AN')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->AN), array('view', 'id'=>$data->AN)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('InvoiceNo')); ?>:</b>
	<?php echo CHtml::encode($data->InvoiceNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LexDate')); ?>:</b>
	<?php echo CHtml::encode($data->LexDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('StockOnHand')); ?>:</b>
	<?php echo CHtml::encode($data->StockOnHand); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('partNo')); ?>:</b>
	<?php echo CHtml::encode($data->partNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DocNo')); ?>:</b>
	<?php echo CHtml::encode($data->DocNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('QtyIN')); ?>:</b>
	<?php echo CHtml::encode($data->QtyIN); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('QtyOUT')); ?>:</b>
	<?php echo CHtml::encode($data->QtyOUT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Remarks')); ?>:</b>
	<?php echo CHtml::encode($data->Remarks); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OldDocNo')); ?>:</b>
	<?php echo CHtml::encode($data->OldDocNo); ?>
	<br />

	*/ ?>

</div>