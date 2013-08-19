<?php
/* @var $this SoprptController */
/* @var $model Soprpt */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'RptNo'); ?>
		<?php echo $form->textField($model,'RptNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RptName'); ?>
		<?php echo $form->textField($model,'RptName',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RptDesc'); ?>
		<?php echo $form->textField($model,'RptDesc',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SQLComm'); ?>
		<?php echo $form->textArea($model,'SQLComm',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AccessRptName'); ?>
		<?php echo $form->textField($model,'AccessRptName',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ORDERBYclause'); ?>
		<?php echo $form->textField($model,'ORDERBYclause',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->