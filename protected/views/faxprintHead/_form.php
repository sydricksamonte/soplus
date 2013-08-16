<?php
/* @var $this FaxprintHeadController */
/* @var $model FaxprintHead */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'faxprint-head-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Customer'); ?>
		<?php echo $form->textField($model,'Customer',array('size'=>60,'maxlength'=>75)); ?>
		<?php echo $form->error($model,'Customer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ContactPerson'); ?>
		<?php echo $form->textField($model,'ContactPerson',array('size'=>60,'maxlength'=>75)); ?>
		<?php echo $form->error($model,'ContactPerson'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TelNo'); ?>
		<?php echo $form->textField($model,'TelNo',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'TelNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Address'); ?>
		<?php echo $form->textField($model,'Address',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DocNo'); ?>
		<?php echo $form->textField($model,'DocNo',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'DocNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FANo'); ?>
		<?php echo $form->textField($model,'FANo',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'FANo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DatePlaced'); ?>
		<?php echo $form->textField($model,'DatePlaced'); ?>
		<?php echo $form->error($model,'DatePlaced'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Terms'); ?>
		<?php echo $form->textField($model,'Terms',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'Terms'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PayMode'); ?>
		<?php echo $form->textField($model,'PayMode',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'PayMode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Instruction'); ?>
		<?php echo $form->textArea($model,'Instruction',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Instruction'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IssueDte'); ?>
		<?php echo $form->textField($model,'IssueDte'); ?>
		<?php echo $form->error($model,'IssueDte'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DeliverDte'); ?>
		<?php echo $form->textField($model,'DeliverDte',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'DeliverDte'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ApprovedBy'); ?>
		<?php echo $form->textField($model,'ApprovedBy',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'ApprovedBy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Classification'); ?>
		<?php echo $form->textField($model,'Classification',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'Classification'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UserID'); ?>
		<?php echo $form->textField($model,'UserID',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'UserID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TradeIn'); ?>
		<?php echo $form->textField($model,'TradeIn',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'TradeIn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DeliverTo2'); ?>
		<?php echo $form->textField($model,'DeliverTo2',array('size'=>60,'maxlength'=>263)); ?>
		<?php echo $form->error($model,'DeliverTo2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Acct'); ?>
		<?php echo $form->textField($model,'Acct',array('size'=>31,'maxlength'=>31)); ?>
		<?php echo $form->error($model,'Acct'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DRPeriod2'); ?>
		<?php echo $form->textField($model,'DRPeriod2',array('size'=>60,'maxlength'=>67)); ?>
		<?php echo $form->error($model,'DRPeriod2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'soDescription'); ?>
		<?php echo $form->textField($model,'soDescription',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'soDescription'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cancel1'); ?>
		<?php echo $form->textField($model,'Cancel1',array('size'=>31,'maxlength'=>31)); ?>
		<?php echo $form->error($model,'Cancel1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cancel2'); ?>
		<?php echo $form->textField($model,'Cancel2',array('size'=>60,'maxlength'=>292)); ?>
		<?php echo $form->error($model,'Cancel2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Delivered2'); ?>
		<?php echo $form->textField($model,'Delivered2',array('size'=>23,'maxlength'=>23)); ?>
		<?php echo $form->error($model,'Delivered2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PickedUp2'); ?>
		<?php echo $form->textField($model,'PickedUp2',array('size'=>23,'maxlength'=>23)); ?>
		<?php echo $form->error($model,'PickedUp2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FaxedAsFA2'); ?>
		<?php echo $form->textField($model,'FaxedAsFA2',array('size'=>43,'maxlength'=>43)); ?>
		<?php echo $form->error($model,'FaxedAsFA2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Approved2'); ?>
		<?php echo $form->textField($model,'Approved2',array('size'=>60,'maxlength'=>81)); ?>
		<?php echo $form->error($model,'Approved2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UCS_Company'); ?>
		<?php echo $form->textField($model,'UCS_Company',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'UCS_Company'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'qty'); ?>
		<?php echo $form->textField($model,'qty'); ?>
		<?php echo $form->error($model,'qty'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unitmeas'); ?>
		<?php echo $form->textField($model,'unitmeas',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'unitmeas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'itemdesc1'); ?>
		<?php echo $form->textArea($model,'itemdesc1',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'itemdesc1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cursign'); ?>
		<?php echo $form->textField($model,'cursign',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'cursign'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unitPrice'); ?>
		<?php echo $form->textField($model,'unitPrice'); ?>
		<?php echo $form->error($model,'unitPrice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TotalAmt'); ?>
		<?php echo $form->textField($model,'TotalAmt'); ?>
		<?php echo $form->error($model,'TotalAmt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FullComm'); ?>
		<?php echo $form->textField($model,'FullComm'); ?>
		<?php echo $form->error($model,'FullComm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'poremarks'); ?>
		<?php echo $form->textArea($model,'poremarks',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'poremarks'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->