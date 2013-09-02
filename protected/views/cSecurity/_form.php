<?php
/* @var $this CSecurityController */
/* @var $model CSecurity */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'csecurity-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Emp_Code'); ?>
		<?php echo $form->textField($model,'Emp_Code',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Emp_Code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FirstName'); ?>
		<?php echo $form->textField($model,'FirstName',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'FirstName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MI'); ?>
		<?php echo $form->textField($model,'MI',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'MI'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LastName'); ?>
		<?php echo $form->textField($model,'LastName',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'LastName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Level'); ?>
		<?php echo $form->textField($model,'Level',array('size'=>36,'maxlength'=>36)); ?>
		<?php echo $form->error($model,'Level'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Passwrd'); ?>
		<?php echo $form->textField($model,'Passwrd',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Passwrd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AcctName'); ?>
		<?php echo $form->textField($model,'AcctName',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'AcctName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Bday'); ?>
		<?php echo $form->textField($model,'Bday',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'Bday'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LocalNo'); ?>
		<?php echo $form->textField($model,'LocalNo',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'LocalNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CellPhone'); ?>
		<?php echo $form->textField($model,'CellPhone',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'CellPhone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Email'); ?>
		<?php echo $form->textField($model,'Email',array('size'=>60,'maxlength'=>75)); ?>
		<?php echo $form->error($model,'Email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TermsConditions'); ?>
		<?php echo $form->textArea($model,'TermsConditions',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'TermsConditions'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Position'); ?>
		<?php echo $form->textField($model,'Position',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Position'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Resigned'); ?>
		<?php echo $form->textField($model,'Resigned'); ?>
		<?php echo $form->error($model,'Resigned'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PRFPLUS'); ?>
		<?php echo $form->textField($model,'PRFPLUS'); ?>
		<?php echo $form->error($model,'PRFPLUS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Optimal'); ?>
		<?php echo $form->textField($model,'Optimal'); ?>
		<?php echo $form->error($model,'Optimal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ServiceCtr'); ?>
		<?php echo $form->textField($model,'ServiceCtr'); ?>
		<?php echo $form->error($model,'ServiceCtr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Unison'); ?>
		<?php echo $form->textField($model,'Unison'); ?>
		<?php echo $form->error($model,'Unison'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LogIn'); ?>
		<?php echo $form->textField($model,'LogIn'); ?>
		<?php echo $form->error($model,'LogIn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LastLog'); ?>
		<?php echo $form->textField($model,'LastLog'); ?>
		<?php echo $form->error($model,'LastLog'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Sex'); ?>
		<?php echo $form->textField($model,'Sex',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Sex'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'religion'); ?>
		<?php echo $form->textField($model,'religion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'religion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'citizenship'); ?>
		<?php echo $form->textField($model,'citizenship',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'citizenship'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'civilstatus'); ?>
		<?php echo $form->textField($model,'civilstatus',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'civilstatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'completeaddress'); ?>
		<?php echo $form->textField($model,'completeaddress',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'completeaddress'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->