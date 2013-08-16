<?php
/* @var $this SotypeController */
/* @var $model Sotype */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sotype-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'soType'); ?>
		<?php echo $form->textField($model,'soType',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'soType'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'soDescription'); ?>
		<?php echo $form->textField($model,'soDescription',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'soDescription'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->