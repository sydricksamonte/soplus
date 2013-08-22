<?php
/* @var $this FaxprintHeadController */
/* @var $model FaxprintHead */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Customer'); ?>
		<?php echo $form->textField($model,'Customer',array('size'=>60,'maxlength'=>75)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ContactPerson'); ?>
		<?php echo $form->textField($model,'ContactPerson',array('size'=>60,'maxlength'=>75)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TelNo'); ?>
		<?php echo $form->textField($model,'TelNo',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Address'); ?>
		<?php echo $form->textField($model,'Address',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DocNo'); ?>
		<?php echo $form->textField($model,'DocNo',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FANo'); ?>
		<?php echo $form->textField($model,'FANo',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DatePlaced'); ?>
		<?php echo $form->textField($model,'DatePlaced'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Terms'); ?>
		<?php echo $form->textField($model,'Terms',array('size'=>35,'maxlength'=>35)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PayMode'); ?>
		<?php echo $form->textField($model,'PayMode',array('size'=>35,'maxlength'=>35)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Instruction'); ?>
		<?php echo $form->textArea($model,'Instruction',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IssueDte'); ?>
		<?php echo $form->textField($model,'IssueDte'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DeliverDte'); ?>
		<?php echo $form->textField($model,'DeliverDte',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ApprovedBy'); ?>
		<?php echo $form->textField($model,'ApprovedBy',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Classification'); ?>
		<?php echo $form->textField($model,'Classification',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UserID'); ?>
		<?php echo $form->textField($model,'UserID',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TradeIn'); ?>
		<?php echo $form->textField($model,'TradeIn',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DeliverTo2'); ?>
		<?php echo $form->textField($model,'DeliverTo2',array('size'=>60,'maxlength'=>263)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Acct'); ?>
		<?php echo $form->textField($model,'Acct',array('size'=>31,'maxlength'=>31)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DRPeriod2'); ?>
		<?php echo $form->textField($model,'DRPeriod2',array('size'=>60,'maxlength'=>67)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'soDescription'); ?>
		<?php echo $form->textField($model,'soDescription',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Cancel1'); ?>
		<?php echo $form->textField($model,'Cancel1',array('size'=>31,'maxlength'=>31)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Cancel2'); ?>
		<?php echo $form->textField($model,'Cancel2',array('size'=>60,'maxlength'=>292)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Delivered2'); ?>
		<?php echo $form->textField($model,'Delivered2',array('size'=>23,'maxlength'=>23)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PickedUp2'); ?>
		<?php echo $form->textField($model,'PickedUp2',array('size'=>23,'maxlength'=>23)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FaxedAsFA2'); ?>
		<?php echo $form->textField($model,'FaxedAsFA2',array('size'=>43,'maxlength'=>43)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Approved2'); ?>
		<?php echo $form->textField($model,'Approved2',array('size'=>60,'maxlength'=>81)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UCS_Company'); ?>
		<?php echo $form->textField($model,'UCS_Company',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'qty'); ?>
		<?php echo $form->textField($model,'qty'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'unitmeas'); ?>
		<?php echo $form->textField($model,'unitmeas',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'itemdesc1'); ?>
		<?php echo $form->textArea($model,'itemdesc1',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cursign'); ?>
		<?php echo $form->textField($model,'cursign',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'unitPrice'); ?>
		<?php echo $form->textField($model,'unitPrice'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TotalAmt'); ?>
		<?php echo $form->textField($model,'TotalAmt'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FullComm'); ?>
		<?php echo $form->textField($model,'FullComm'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'poremarks'); ?>
		<?php echo $form->textArea($model,'poremarks',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->