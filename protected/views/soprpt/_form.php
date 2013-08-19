<?php
/* @var $this SoprptController */
/* @var $model Soprpt */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'soprpt-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'RptName'); ?>
		<?php echo $form->textField($model,'RptName',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'RptName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RptDesc'); ?>
		<?php echo $form->textField($model,'RptDesc',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'RptDesc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SQLComm'); ?>
		<?php echo $form->textArea($model,'SQLComm',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'SQLComm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AccessRptName'); ?>
		<?php echo $form->textField($model,'AccessRptName',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'AccessRptName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ORDERBYclause'); ?>
		<?php echo $form->textField($model,'ORDERBYclause',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ORDERBYclause'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->