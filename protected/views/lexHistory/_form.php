<?php
/* @var $this LexHistoryController */
/* @var $model LexHistory */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'lex-history-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'InvoiceNo'); ?>
		<?php echo $form->textField($model,'InvoiceNo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'InvoiceNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LexDate'); ?>
		<?php echo $form->textField($model,'LexDate'); ?>
		<?php echo $form->error($model,'LexDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'StockOnHand'); ?>
		<?php echo $form->textField($model,'StockOnHand'); ?>
		<?php echo $form->error($model,'StockOnHand'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'partNo'); ?>
		<?php echo $form->textField($model,'partNo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'partNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DocNo'); ?>
		<?php echo $form->textField($model,'DocNo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'DocNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'QtyIN'); ?>
		<?php echo $form->textField($model,'QtyIN',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'QtyIN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'QtyOUT'); ?>
		<?php echo $form->textField($model,'QtyOUT',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'QtyOUT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Remarks'); ?>
		<?php echo $form->textField($model,'Remarks',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'Remarks'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OldDocNo'); ?>
		<?php echo $form->textField($model,'OldDocNo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'OldDocNo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->