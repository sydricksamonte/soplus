<?php
/* @var $this SomainController */
/* @var $model Somain */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'DocNo'); ?>
		<?php echo $form->textField($model,'DocNo',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DatePlaced'); ?>
		<?php echo $form->textField($model,'DatePlaced'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UserID'); ?>
		<?php echo $form->textField($model,'UserID',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Customer'); ?>
		<?php echo $form->textField($model,'Customer',array('size'=>60,'maxlength'=>75)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ContactPerson'); ?>
		<?php echo $form->textField($model,'ContactPerson',array('size'=>60,'maxlength'=>75)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Terms'); ?>
		<?php echo $form->textField($model,'Terms',array('size'=>35,'maxlength'=>35)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PayMode'); ?>
		<?php echo $form->textField($model,'PayMode',array('size'=>35,'maxlength'=>35)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DeliverDte'); ?>
		<?php echo $form->textField($model,'DeliverDte',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AcctOf1'); ?>
		<?php echo $form->textField($model,'AcctOf1',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AcctOf2'); ?>
		<?php echo $form->textField($model,'AcctOf2',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Instruction'); ?>
		<?php echo $form->textArea($model,'Instruction',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IssueDte'); ?>
		<?php echo $form->textField($model,'IssueDte'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Address'); ?>
		<?php echo $form->textField($model,'Address',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TelNo'); ?>
		<?php echo $form->textField($model,'TelNo',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Approved'); ?>
		<?php echo $form->textField($model,'Approved',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Faxed'); ?>
		<?php echo $form->textField($model,'Faxed'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Emailed'); ?>
		<?php echo $form->textField($model,'Emailed'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ForApproval'); ?>
		<?php echo $form->textField($model,'ForApproval'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Classification'); ?>
		<?php echo $form->textField($model,'Classification',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ApprovedBy'); ?>
		<?php echo $form->textField($model,'ApprovedBy',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DRPeriod'); ?>
		<?php echo $form->textField($model,'DRPeriod',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Remarks'); ?>
		<?php echo $form->textField($model,'Remarks',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PODetails'); ?>
		<?php echo $form->textField($model,'PODetails',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Cancelled'); ?>
		<?php echo $form->textField($model,'Cancelled'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CancelReason'); ?>
		<?php echo $form->textField($model,'CancelReason',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CancelDateFax'); ?>
		<?php echo $form->textField($model,'CancelDateFax'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Currency'); ?>
		<?php echo $form->textField($model,'Currency',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DeliverTo'); ?>
		<?php echo $form->textField($model,'DeliverTo',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Delilvered'); ?>
		<?php echo $form->textField($model,'Delilvered'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FANo'); ?>
		<?php echo $form->textField($model,'FANo',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ApprovedDateTime'); ?>
		<?php echo $form->textField($model,'ApprovedDateTime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PickedUp'); ?>
		<?php echo $form->textField($model,'PickedUp'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FaxedAsFA'); ?>
		<?php echo $form->textField($model,'FaxedAsFA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Field1'); ?>
		<?php echo $form->textField($model,'Field1',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Field2'); ?>
		<?php echo $form->textField($model,'Field2',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Field3'); ?>
		<?php echo $form->textField($model,'Field3',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Field4'); ?>
		<?php echo $form->textField($model,'Field4',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FA_RGB'); ?>
		<?php echo $form->textField($model,'FA_RGB'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FA_Other1'); ?>
		<?php echo $form->textField($model,'FA_Other1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FA_Other2'); ?>
		<?php echo $form->textField($model,'FA_Other2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RefDocNo'); ?>
		<?php echo $form->textField($model,'RefDocNo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RefInvDtr'); ?>
		<?php echo $form->textField($model,'RefInvDtr',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DateSubmitted'); ?>
		<?php echo $form->textField($model,'DateSubmitted'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->