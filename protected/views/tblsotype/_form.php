<?php
/* @var $this TblsotypeController */
/* @var $model Tblsotype */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tblsotype-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Type1'); ?>
		<?php echo $form->textField($model,'Type1',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'Type1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Description'); ?>
		<?php echo $form->textField($model,'Description',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->