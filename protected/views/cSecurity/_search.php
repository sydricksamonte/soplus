<?php
/* @var $this CSecurityController */
/* @var $model CSecurity */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Emp_Code'); ?>
		<?php echo $form->textField($model,'Emp_Code',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FirstName'); ?>
		<?php echo $form->textField($model,'FirstName',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MI'); ?>
		<?php echo $form->textField($model,'MI',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LastName'); ?>
		<?php echo $form->textField($model,'LastName',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Level'); ?>
		<?php echo $form->textField($model,'Level',array('size'=>36,'maxlength'=>36)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Passwrd'); ?>
		<?php echo $form->textField($model,'Passwrd',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AcctName'); ?>
		<?php echo $form->textField($model,'AcctName',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Bday'); ?>
		<?php echo $form->textField($model,'Bday',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LocalNo'); ?>
		<?php echo $form->textField($model,'LocalNo',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CellPhone'); ?>
		<?php echo $form->textField($model,'CellPhone',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Email'); ?>
		<?php echo $form->textField($model,'Email',array('size'=>60,'maxlength'=>75)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TermsConditions'); ?>
		<?php echo $form->textArea($model,'TermsConditions',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Position'); ?>
		<?php echo $form->textField($model,'Position',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Resigned'); ?>
		<?php echo $form->textField($model,'Resigned'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PRFPLUS'); ?>
		<?php echo $form->textField($model,'PRFPLUS'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Optimal'); ?>
		<?php echo $form->textField($model,'Optimal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ServiceCtr'); ?>
		<?php echo $form->textField($model,'ServiceCtr'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Unison'); ?>
		<?php echo $form->textField($model,'Unison'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LogIn'); ?>
		<?php echo $form->textField($model,'LogIn'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LastLog'); ?>
		<?php echo $form->textField($model,'LastLog'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Sex'); ?>
		<?php echo $form->textField($model,'Sex',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'religion'); ?>
		<?php echo $form->textField($model,'religion',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'citizenship'); ?>
		<?php echo $form->textField($model,'citizenship',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'civilstatus'); ?>
		<?php echo $form->textField($model,'civilstatus',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'completeaddress'); ?>
		<?php echo $form->textField($model,'completeaddress',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->