<?php
/* @var $this SoDetailController */
/* @var $data SoDetail */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('DetailNo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->DetailNo), array('view', 'id'=>$data->DetailNo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DocNo')); ?>:</b>
	<?php echo CHtml::encode($data->DocNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Qty')); ?>:</b>
	<?php echo CHtml::encode($data->Qty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UnitMeas')); ?>:</b>
	<?php echo CHtml::encode($data->UnitMeas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ItemDesc')); ?>:</b>
	<?php echo CHtml::encode($data->ItemDesc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CurSign')); ?>:</b>
	<?php echo CHtml::encode($data->CurSign); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UnitPrice')); ?>:</b>
	<?php echo CHtml::encode($data->UnitPrice); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('InvoiceNo')); ?>:</b>
	<?php echo CHtml::encode($data->InvoiceNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('InvoiceDte')); ?>:</b>
	<?php echo CHtml::encode($data->InvoiceDte); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PORemarks')); ?>:</b>
	<?php echo CHtml::encode($data->PORemarks); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FullComm')); ?>:</b>
	<?php echo CHtml::encode($data->FullComm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CommB')); ?>:</b>
	<?php echo CHtml::encode($data->CommB); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CommC')); ?>:</b>
	<?php echo CHtml::encode($data->CommC); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('War_Parts')); ?>:</b>
	<?php echo CHtml::encode($data->War_Parts); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('War_Labor')); ?>:</b>
	<?php echo CHtml::encode($data->War_Labor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('War_Onsite')); ?>:</b>
	<?php echo CHtml::encode($data->War_Onsite); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TransactionNo')); ?>:</b>
	<?php echo CHtml::encode($data->TransactionNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Lexmark')); ?>:</b>
	<?php echo CHtml::encode($data->Lexmark); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Field1')); ?>:</b>
	<?php echo CHtml::encode($data->Field1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Field2')); ?>:</b>
	<?php echo CHtml::encode($data->Field2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Field3')); ?>:</b>
	<?php echo CHtml::encode($data->Field3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Field4')); ?>:</b>
	<?php echo CHtml::encode($data->Field4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('chngePrice')); ?>:</b>
	<?php echo CHtml::encode($data->chngePrice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('partNo')); ?>:</b>
	<?php echo CHtml::encode($data->partNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bold')); ?>:</b>
	<?php echo CHtml::encode($data->bold); ?>
	<br />

	*/ ?>

</div>