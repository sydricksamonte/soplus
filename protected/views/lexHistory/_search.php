<?php
/* @var $this LexHistoryController */
/* @var $model LexHistory */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'InvoiceNo'); ?>
		<?php echo $form->textField($model,'InvoiceNo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LexDate'); ?>
		<?php echo $form->textField($model,'LexDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'StockOnHand'); ?>
		<?php echo $form->textField($model,'StockOnHand'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'partNo'); ?>
		<?php echo $form->textField($model,'partNo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DocNo'); ?>
		<?php echo $form->textField($model,'DocNo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'QtyIN'); ?>
		<?php echo $form->textField($model,'QtyIN',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'QtyOUT'); ?>
		<?php echo $form->textField($model,'QtyOUT',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AN'); ?>
		<?php echo $form->textField($model,'AN',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Remarks'); ?>
		<?php echo $form->textField($model,'Remarks',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OldDocNo'); ?>
		<?php echo $form->textField($model,'OldDocNo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->