<?php
/* @var $this CSecurityController */
/* @var $data CSecurity */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Emp_Code')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Emp_Code), array('view', 'id'=>$data->Emp_Code)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FirstName')); ?>:</b>
	<?php echo CHtml::encode($data->FirstName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MI')); ?>:</b>
	<?php echo CHtml::encode($data->MI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LastName')); ?>:</b>
	<?php echo CHtml::encode($data->LastName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Level')); ?>:</b>
	<?php echo CHtml::encode($data->Level); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Passwrd')); ?>:</b>
	<?php echo CHtml::encode($data->Passwrd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AcctName')); ?>:</b>
	<?php echo CHtml::encode($data->AcctName); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Bday')); ?>:</b>
	<?php echo CHtml::encode($data->Bday); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LocalNo')); ?>:</b>
	<?php echo CHtml::encode($data->LocalNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CellPhone')); ?>:</b>
	<?php echo CHtml::encode($data->CellPhone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Email')); ?>:</b>
	<?php echo CHtml::encode($data->Email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TermsConditions')); ?>:</b>
	<?php echo CHtml::encode($data->TermsConditions); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Position')); ?>:</b>
	<?php echo CHtml::encode($data->Position); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Resigned')); ?>:</b>
	<?php echo CHtml::encode($data->Resigned); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PRFPLUS')); ?>:</b>
	<?php echo CHtml::encode($data->PRFPLUS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Optimal')); ?>:</b>
	<?php echo CHtml::encode($data->Optimal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ServiceCtr')); ?>:</b>
	<?php echo CHtml::encode($data->ServiceCtr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Unison')); ?>:</b>
	<?php echo CHtml::encode($data->Unison); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LogIn')); ?>:</b>
	<?php echo CHtml::encode($data->LogIn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LastLog')); ?>:</b>
	<?php echo CHtml::encode($data->LastLog); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sex')); ?>:</b>
	<?php echo CHtml::encode($data->Sex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('religion')); ?>:</b>
	<?php echo CHtml::encode($data->religion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('citizenship')); ?>:</b>
	<?php echo CHtml::encode($data->citizenship); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('civilstatus')); ?>:</b>
	<?php echo CHtml::encode($data->civilstatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('completeaddress')); ?>:</b>
	<?php echo CHtml::encode($data->completeaddress); ?>
	<br />

	*/ ?>

</div>