<?php
/* @var $this SomainController */
/* @var $data Somain */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('DocNo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->DocNo), array('view', 'id'=>$data->DocNo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DatePlaced')); ?>:</b>
	<?php echo CHtml::encode($data->DatePlaced); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UserID')); ?>:</b>
	<?php echo CHtml::encode($data->UserID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Customer')); ?>:</b>
	<?php echo CHtml::encode($data->Customer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ContactPerson')); ?>:</b>
	<?php echo CHtml::encode($data->ContactPerson); ?>
	<br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('Address')); ?>:</b>
	<?php echo CHtml::encode($data->Address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TelNo')); ?>:</b>
	<?php echo CHtml::encode($data->TelNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Terms')); ?>:</b>
	<?php echo CHtml::encode($data->Terms); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PayMode')); ?>:</b>
	<?php echo CHtml::encode($data->PayMode); ?>
	<br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('AcctOf1')); ?>:</b>
	<?php echo CHtml::encode($data->AcctOf1); ?>
	<br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('Instruction')); ?>:</b>
	<?php echo CHtml::encode($data->Instruction); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('DeliverDte')); ?>:</b>
	<?php echo CHtml::encode($data->DeliverDte); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AcctOf1')); ?>:</b>
	<?php echo CHtml::encode($data->AcctOf1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AcctOf2')); ?>:</b>
	<?php echo CHtml::encode($data->AcctOf2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Instruction')); ?>:</b>
	<?php echo CHtml::encode($data->Instruction); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IssueDte')); ?>:</b>
	<?php echo CHtml::encode($data->IssueDte); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Address')); ?>:</b>
	<?php echo CHtml::encode($data->Address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TelNo')); ?>:</b>
	<?php echo CHtml::encode($data->TelNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Approved')); ?>:</b>
	<?php echo CHtml::encode($data->Approved); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Faxed')); ?>:</b>
	<?php echo CHtml::encode($data->Faxed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Emailed')); ?>:</b>
	<?php echo CHtml::encode($data->Emailed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ForApproval')); ?>:</b>
	<?php echo CHtml::encode($data->ForApproval); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Classification')); ?>:</b>
	<?php echo CHtml::encode($data->Classification); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ApprovedBy')); ?>:</b>
	<?php echo CHtml::encode($data->ApprovedBy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DRPeriod')); ?>:</b>
	<?php echo CHtml::encode($data->DRPeriod); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Remarks')); ?>:</b>
	<?php echo CHtml::encode($data->Remarks); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PODetails')); ?>:</b>
	<?php echo CHtml::encode($data->PODetails); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cancelled')); ?>:</b>
	<?php echo CHtml::encode($data->Cancelled); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CancelReason')); ?>:</b>
	<?php echo CHtml::encode($data->CancelReason); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CancelDateFax')); ?>:</b>
	<?php echo CHtml::encode($data->CancelDateFax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Currency')); ?>:</b>
	<?php echo CHtml::encode($data->Currency); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DeliverTo')); ?>:</b>
	<?php echo CHtml::encode($data->DeliverTo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Delilvered')); ?>:</b>
	<?php echo CHtml::encode($data->Delilvered); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FANo')); ?>:</b>
	<?php echo CHtml::encode($data->FANo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ApprovedDateTime')); ?>:</b>
	<?php echo CHtml::encode($data->ApprovedDateTime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PickedUp')); ?>:</b>
	<?php echo CHtml::encode($data->PickedUp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FaxedAsFA')); ?>:</b>
	<?php echo CHtml::encode($data->FaxedAsFA); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('FA_RGB')); ?>:</b>
	<?php echo CHtml::encode($data->FA_RGB); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FA_Other1')); ?>:</b>
	<?php echo CHtml::encode($data->FA_Other1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FA_Other2')); ?>:</b>
	<?php echo CHtml::encode($data->FA_Other2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RefDocNo')); ?>:</b>
	<?php echo CHtml::encode($data->RefDocNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RefInvDtr')); ?>:</b>
	<?php echo CHtml::encode($data->RefInvDtr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DateSubmitted')); ?>:</b>
	<?php echo CHtml::encode($data->DateSubmitted); ?>
	<br />

	*/ ?>

</div>