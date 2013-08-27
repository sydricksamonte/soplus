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
        <?php
            $records = Unit::model()->findAll();
            $list = CHtml::listData($records, 'id', 'name');
            echo $form->dropDownList($model,'UnitMeas', $list, array('empty' => '(Select Unit)'));
        ?>
		<?php echo $form->error($model,'UnitMeas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ItemDesc'); ?>
		<?php echo $form->textArea($model,'ItemDesc',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ItemDesc'); ?>
	</div>
    <div class="row">
		<?php echo $form->labelEx($model,'bold'); ?>
		<?php echo $form->checkBox($model,'bold'); ?>
		<?php echo $form->error($model,'bold'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Warranty Parts'); ?>
		<?php echo $form->textField($model,'War_Parts',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'War_Parts'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Warranty Labor'); ?>
		<?php echo $form->textField($model,'War_Labor',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'War_Labor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Warranty Onsite'); ?>
		<?php echo $form->textField($model,'War_Onsite',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'War_Onsite'); ?>
	</div>
    
    
    <div class="row">
		<?php echo $form->labelEx($model,'CurSign'); ?>
		<?php echo $form->dropDownList($model,'CurSign', array('PhP'=>'Php','US$'=>'Usd'), array('empty' => '(Select Unit)')); ?>
		<?php echo $form->error($model,'CurSign'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UnitPrice'); ?>
		<?php echo $form->textField($model,'UnitPrice'); ?>
		<?php echo $form->error($model,'UnitPrice'); ?>
	</div>

    <div class="row">
		<?php echo $form->labelEx($model,'Commission'); ?>
		<?php echo $form->textField($model,'FullComm'); ?>
		<?php echo $form->error($model,'FullComm'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->