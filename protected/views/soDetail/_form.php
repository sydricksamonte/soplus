<?php
/* @var $this SoDetailController */
/* @var $model SoDetail */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'so-detail-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'DocNo'); ?>
		<?php echo $form->textField($model,'DocNo',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'DocNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Qty'); ?>
		<?php echo $form->textField($model,'Qty'); ?>
		<?php echo $form->error($model,'Qty'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UnitMeas'); ?>
		<?php echo $form->textField($model,'UnitMeas',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'UnitMeas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ItemDesc'); ?>
		<?php echo $form->textArea($model,'ItemDesc',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ItemDesc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CurSign'); ?>
		<?php echo $form->textField($model,'CurSign',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'CurSign'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UnitPrice'); ?>
		<?php echo $form->textField($model,'UnitPrice'); ?>
		<?php echo $form->error($model,'UnitPrice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'InvoiceNo'); ?>
		<?php echo $form->textField($model,'InvoiceNo',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'InvoiceNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'InvoiceDte'); ?>
		<?php echo $form->textField($model,'InvoiceDte'); ?>
		<?php echo $form->error($model,'InvoiceDte'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PORemarks'); ?>
		<?php echo $form->textArea($model,'PORemarks',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'PORemarks'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FullComm'); ?>
		<?php echo $form->textField($model,'FullComm'); ?>
		<?php echo $form->error($model,'FullComm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CommB'); ?>
		<?php echo $form->textField($model,'CommB',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'CommB'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CommC'); ?>
		<?php echo $form->textField($model,'CommC',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'CommC'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'War_Parts'); ?>
		<?php echo $form->textField($model,'War_Parts',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'War_Parts'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'War_Labor'); ?>
		<?php echo $form->textField($model,'War_Labor',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'War_Labor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'War_Onsite'); ?>
		<?php echo $form->textField($model,'War_Onsite',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'War_Onsite'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TransactionNo'); ?>
		<?php echo $form->textField($model,'TransactionNo',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'TransactionNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Lexmark'); ?>
		<?php echo $form->textField($model,'Lexmark',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Lexmark'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Field1'); ?>
		<?php echo $form->textField($model,'Field1',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Field1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Field2'); ?>
		<?php echo $form->textField($model,'Field2',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Field2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Field3'); ?>
		<?php echo $form->textField($model,'Field3',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Field3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Field4'); ?>
		<?php echo $form->textField($model,'Field4',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Field4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'chngePrice'); ?>
		<?php echo $form->textField($model,'chngePrice'); ?>
		<?php echo $form->error($model,'chngePrice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'partNo'); ?>
		<?php echo $form->textField($model,'partNo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'partNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bold'); ?>
		<?php echo $form->textField($model,'bold'); ?>
		<?php echo $form->error($model,'bold'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->