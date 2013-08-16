<?php
/* @var $this LexmarkItemsController */
/* @var $model LexmarkItems */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'lexmark-items-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'partNo'); ?>
		<?php echo $form->textField($model,'partNo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'partNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dealersprice'); ?>
		<?php echo $form->textField($model,'dealersprice'); ?>
		<?php echo $form->error($model,'dealersprice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'retailerprice'); ?>
		<?php echo $form->textField($model,'retailerprice'); ?>
		<?php echo $form->error($model,'retailerprice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stockOnHand'); ?>
		<?php echo $form->textField($model,'stockOnHand'); ?>
		<?php echo $form->error($model,'stockOnHand'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'consignment'); ?>
		<?php echo $form->textField($model,'consignment'); ?>
		<?php echo $form->error($model,'consignment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'demo'); ?>
		<?php echo $form->textField($model,'demo'); ?>
		<?php echo $form->error($model,'demo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updatedBy'); ?>
		<?php echo $form->textField($model,'updatedBy',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'updatedBy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastUpdate'); ?>
		<?php echo $form->textField($model,'lastUpdate'); ?>
		<?php echo $form->error($model,'lastUpdate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->