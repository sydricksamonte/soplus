<?php
/* @var $this SoDetailController */
/* @var $model SoDetail */
/* @var $form CActiveForm */
?>

<div class="form" id="Itm">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'so-detail-form',
	'enableAjaxValidation'=>false,
    
)); $message = '';?>
	<?php echo $form->errorSummary($model); ?>

	<div class="row">  
        <?php echo 'Doc No.: '. $form->labelEx($model,'DocNo',array('label'=>$message)); ?>
        <?php echo $form->hiddenField($model,'DocNo', array('value'=>$message)); ?>
        <?php echo $form->error($model,'DocNo'); ?>
	</div>

	<div class="column">
		<?php echo $form->labelEx($model,'Qty'); ?>
		<?php echo $form->textField($model,'Qty',array('size'=>10,'maxlength'=>6)); ?>
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
    
    
    <div class="column">
		<?php echo $form->labelEx($model,'UnitPrice'); ?>
		<?php echo $form->textField($model,'UnitPrice'); ?>
		<?php echo $form->error($model,'UnitPrice'); ?>
	</div>
    
    <div class="row">
		<?php echo $form->labelEx($model,'CurSign'); ?>
		<?php echo $form->dropDownList($model,'CurSign', array('PhP'=>'Php','US$'=>'Usd'), array('empty' => '(Select Unit)')); ?>
		<?php echo $form->error($model,'CurSign'); ?>
	</div>

	

    <div class="row">
		<?php echo $form->labelEx($model,'Commission'); ?>
		<?php echo $form->textField($model,'FullComm'); ?>
		<?php echo $form->error($model,'FullComm'); ?>
	</div>

	<!-- <div class="row">
		<?php echo $form->labelEx($model,'InvoiceNo'); ?>
		<?php echo $form->textField($model,'InvoiceNo',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'InvoiceNo'); ?>
	</div>



	<div class="row">
		<?php echo $form->labelEx($model,'InvoiceDte'); ?>
		<?php echo $form->textField($model,'InvoiceDte'); ?>
		<?php echo $form->error($model,'InvoiceDte'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PORemarks'); ?>
		<?php echo $form->textArea($model,'PORemarks',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'PORemarks'); ?>
	</div>

	

	<div class="row">
		<?php echo $form->labelEx($model,'CommB'); ?>
		<?php echo $form->textField($model,'CommB',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'CommB'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CommC'); ?>
		<?php echo $form->textField($model,'CommC',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'CommC'); ?>
	</div>

	

	<div class="row">
		<?php echo $form->labelEx($model,'TransactionNo'); ?>
		<?php echo $form->textField($model,'TransactionNo',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'TransactionNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Lexmark'); ?>
		<?php echo $form->textField($model,'Lexmark',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Lexmark'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Field1'); ?>
		<?php echo $form->textField($model,'Field1',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Field1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Field2'); ?>
		<?php echo $form->textField($model,'Field2',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Field2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Field3'); ?>
		<?php echo $form->textField($model,'Field3',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Field3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Field4'); ?>
		<?php echo $form->textField($model,'Field4',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Field4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'chngePrice'); ?>
		<?php echo $form->textField($model,'chngePrice'); ?>
		<?php echo $form->error($model,'chngePrice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'partNo'); ?>
		<?php echo $form->textField($model,'partNo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'partNo'); ?>
	</div> -->

 
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('id'=>'test')); ?>
	</div>

<?php $this->endWidget(); ?>
    <div id="fade"></div>
</div><!-- form -->