<?php
/* @var $this SomainController */
/* @var $model Somain */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'somain-form',
	'enableAjaxValidation'=>false,
)); ?>
    <div style="border:1px solid green; width:65%;padding:2px;" align="left">
		    <?php $dn = 'FA-'.date('ym'); ?>
            <?php echo 'Doc No.: '. $form->labelEx($model,'DocNo',array('label'=>$dn)); ?>
            <?php echo $form->hiddenField($model,'DocNo', array('value'=>$dn)); ?>
		    <?php echo $form->error($model,'DocNo'); ?>
        <br>
            <?php echo 'Class: '.$form->labelEx($model,'Classification'); ?>
            <?php echo $form->hiddenField($model,'Classification', array('value'=>'NA')); ?>
			<?php echo $form->error($model,'Classification'); ?>
       <br>     
            <?php echo 'User: '.$form->labelEx($model,'AcctOf1'); ?>
            <?php echo $form->hiddenField($model,'AcctOf1', array('value'=>'USR')); ?>
			<?php echo $form->error($model,'AcctOf1'); ?>
        <br>
            <?php $dd = date('Y-m-d'); ?>
            <?php echo 'Date Placed: '.$form->labelEx($model,'DatePlaced',array('label'=>$dd)); ?>
            <?php echo $form->hiddenField($model,'DatePlaced', array('value'=>date('Y-m-d H:i:s'))); ?>
			<?php echo $form->error($model,'DatePlaced'); ?>
		</div>
	</div>
    <br/><br/>
    <div style="border:1px solid green; width:65%;padding:2px;" align="right">
		<div class="row">
		<!--    <?php echo 'Reason if Disapproved: '.$form->textField($model,'AcctOf2',array('size'=>30,'maxlength'=>200)); ?>
		    <?php echo $form->error($model,'AcctOf2'); ?>
        <br>
            -->
            <?php echo 'For Approval '.$form->checkBox($model,'ForApproval'); ?>
			<?php echo $form->error($model,'ForApproval'); ?>
        <br>
			<?php echo 'If not your account, this is for: '.$form->textField($model,'AcctOf2',array('size'=>30,'maxlength'=>25)); ?>
			<?php echo $form->error($model,'AcctOf2'); ?>
        <br>
			<?php echo 'Expected Date of Delivery '.$form->dateField($model,'DeliverDte',array('size'=>30,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'DeliverDte'); ?>
        <br>
			<?php echo 'Period Covered '.$form->textField($model,'DRPeriod',array('size'=>30,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'DRPeriod'); ?>
        <br>
			<?php echo 'Pay Mode '.$form->textField($model,'PayMode',array('size'=>30,'maxlength'=>35)); ?>
			<?php echo $form->error($model,'PayMode'); ?>
        <br>
			<?php echo 'Terms '.$form->textField($model,'Terms',array('size'=>30,'maxlength'=>35)); ?>
			<?php echo $form->error($model,'Terms'); ?>
        <br>
		<!-- 	<?php echo 'Faxed '.$form->textField($model,'Faxed',array('size'=>30,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'Faxed'); ?>
        <br> -->
            <?php echo 'Deliver To(If different address) '.$form->textField($model,'DeliverTo',array('size'=>30,'maxlength'=>250)); ?>
			<?php echo $form->error($model,'DeliverTo'); ?>
        <br>
		</div>
	</div>
    <br/>
    <div style="border:1px solid green; width:65%;padding:2px;" align="right">
		<div class="row">
			<?php #echo $form->labelEx($model,'Customer'); ?>
			<?php echo 'Customer: '.$form->textField($model,'Customer',array('size'=>30,'maxlength'=>75)); ?>
			<?php echo $form->error($model,'Customer'); ?>
        <br>
			<?php #echo $form->labelEx($model,'ContactPerson'); ?>
			<?php echo 'Contact Person: '.$form->textField($model,'ContactPerson',array('size'=>30,'maxlength'=>75)); ?>
			<?php echo $form->error($model,'ContactPerson'); ?>
        <br>
			<?php #echo $form->labelEx($model,'Address'); ?>
			<?php echo 'Address: '.$form->textField($model,'Address',array('size'=>30,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'Address'); ?>
        <br>
			<?php #echo $form->labelEx($model,'TelNo'); ?>
			<?php echo 'Tel.No.: '.$form->textField($model,'TelNo',array('size'=>30,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'TelNo'); ?>
        <br>
		</div>
	</div>

    <div class="row">
		<?php echo $form->labelEx($model,'Special Requirements/ Other Instructions'); ?>
		<?php echo $form->textArea($model,'Instruction',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Instruction'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->