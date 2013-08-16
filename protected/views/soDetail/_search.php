<?php
/* @var $this SoDetailController */
/* @var $model SoDetail */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'DetailNo'); ?>
		<?php echo $form->textField($model,'DetailNo',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DocNo'); ?>
		<?php echo $form->textField($model,'DocNo',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Qty'); ?>
		<?php echo $form->textField($model,'Qty'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UnitMeas'); ?>
		<?php echo $form->textField($model,'UnitMeas',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ItemDesc'); ?>
		<?php echo $form->textArea($model,'ItemDesc',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CurSign'); ?>
		<?php echo $form->textField($model,'CurSign',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UnitPrice'); ?>
		<?php echo $form->textField($model,'UnitPrice'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'InvoiceNo'); ?>
		<?php echo $form->textField($model,'InvoiceNo',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'InvoiceDte'); ?>
		<?php echo $form->textField($model,'InvoiceDte'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PORemarks'); ?>
		<?php echo $form->textArea($model,'PORemarks',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FullComm'); ?>
		<?php echo $form->textField($model,'FullComm'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CommB'); ?>
		<?php echo $form->textField($model,'CommB',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CommC'); ?>
		<?php echo $form->textField($model,'CommC',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'War_Parts'); ?>
		<?php echo $form->textField($model,'War_Parts',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'War_Labor'); ?>
		<?php echo $form->textField($model,'War_Labor',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'War_Onsite'); ?>
		<?php echo $form->textField($model,'War_Onsite',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TransactionNo'); ?>
		<?php echo $form->textField($model,'TransactionNo',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Lexmark'); ?>
		<?php echo $form->textField($model,'Lexmark',array('size'=>10,'maxlength'=>10)); ?>
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
		<?php echo $form->label($model,'chngePrice'); ?>
		<?php echo $form->textField($model,'chngePrice'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'partNo'); ?>
		<?php echo $form->textField($model,'partNo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bold'); ?>
		<?php echo $form->textField($model,'bold'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->