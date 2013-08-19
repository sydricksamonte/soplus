<?php
/* @var $this FaxprintHeadController */
/* @var $data FaxprintHead */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Customer')); ?>:</b>
	<?php echo CHtml::encode($data->Customer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ContactPerson')); ?>:</b>
	<?php echo CHtml::encode($data->ContactPerson); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TelNo')); ?>:</b>
	<?php echo CHtml::encode($data->TelNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Address')); ?>:</b>
	<?php echo CHtml::encode($data->Address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DocNo')); ?>:</b>
	<?php echo CHtml::encode($data->DocNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FANo')); ?>:</b>
	<?php echo CHtml::encode($data->FANo); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('DatePlaced')); ?>:</b>
	<?php echo CHtml::encode($data->DatePlaced); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Terms')); ?>:</b>
	<?php echo CHtml::encode($data->Terms); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PayMode')); ?>:</b>
	<?php echo CHtml::encode($data->PayMode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Instruction')); ?>:</b>
	<?php echo CHtml::encode($data->Instruction); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IssueDte')); ?>:</b>
	<?php echo CHtml::encode($data->IssueDte); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DeliverDte')); ?>:</b>
	<?php echo CHtml::encode($data->DeliverDte); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ApprovedBy')); ?>:</b>
	<?php echo CHtml::encode($data->ApprovedBy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Classification')); ?>:</b>
	<?php echo CHtml::encode($data->Classification); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UserID')); ?>:</b>
	<?php echo CHtml::encode($data->UserID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TradeIn')); ?>:</b>
	<?php echo CHtml::encode($data->TradeIn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DeliverTo2')); ?>:</b>
	<?php echo CHtml::encode($data->DeliverTo2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Acct')); ?>:</b>
	<?php echo CHtml::encode($data->Acct); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DRPeriod2')); ?>:</b>
	<?php echo CHtml::encode($data->DRPeriod2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('soDescription')); ?>:</b>
	<?php echo CHtml::encode($data->soDescription); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cancel1')); ?>:</b>
	<?php echo CHtml::encode($data->Cancel1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cancel2')); ?>:</b>
	<?php echo CHtml::encode($data->Cancel2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Delivered2')); ?>:</b>
	<?php echo CHtml::encode($data->Delivered2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PickedUp2')); ?>:</b>
	<?php echo CHtml::encode($data->PickedUp2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FaxedAsFA2')); ?>:</b>
	<?php echo CHtml::encode($data->FaxedAsFA2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Approved2')); ?>:</b>
	<?php echo CHtml::encode($data->Approved2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UCS_Company')); ?>:</b>
	<?php echo CHtml::encode($data->UCS_Company); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qty')); ?>:</b>
	<?php echo CHtml::encode($data->qty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unitmeas')); ?>:</b>
	<?php echo CHtml::encode($data->unitmeas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('itemdesc1')); ?>:</b>
	<?php echo CHtml::encode($data->itemdesc1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cursign')); ?>:</b>
	<?php echo CHtml::encode($data->cursign); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unitPrice')); ?>:</b>
	<?php echo CHtml::encode($data->unitPrice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TotalAmt')); ?>:</b>
	<?php echo CHtml::encode($data->TotalAmt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FullComm')); ?>:</b>
	<?php echo CHtml::encode($data->FullComm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('poremarks')); ?>:</b>
	<?php echo CHtml::encode($data->poremarks); ?>
	<br />

	*/ ?>

</div>