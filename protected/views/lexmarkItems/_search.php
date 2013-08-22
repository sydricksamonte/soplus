<?php
/* @var $this LexmarkItemsController */
/* @var $model LexmarkItems */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'partNo'); ?>
		<?php echo $form->textField($model,'partNo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dealersprice'); ?>
		<?php echo $form->textField($model,'dealersprice'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'retailerprice'); ?>
		<?php echo $form->textField($model,'retailerprice'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stockOnHand'); ?>
		<?php echo $form->textField($model,'stockOnHand'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'consignment'); ?>
		<?php echo $form->textField($model,'consignment'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'demo'); ?>
		<?php echo $form->textField($model,'demo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updatedBy'); ?>
		<?php echo $form->textField($model,'updatedBy',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lastUpdate'); ?>
		<?php echo $form->textField($model,'lastUpdate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->