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
    <p class="note">Fields with <span class="required">*</span> are required.</p>
        
    <table class="detail-view" id="yw0"> 
        <tbody>
            <tr class="odd">
                <th >No.</th>
                <?php $dn = 'FA-'.date('ym'); ?>
                <td><?php echo $form->labelEx($model,$dn); ?></td>
                <?php echo $form->error($model,'DocNo'); ?>
            </tr>
            <tr class="even">
                <th> <?php echo $form->labelEx($model,'DatePlaced'); ?></th>
                 <?php $dd = date('m/d/Y'); ?>
                <td><?php echo $form->labelEx($model,$dd); ?></td>
                 <?php echo $form->error($model,'DatePlaced'); ?>
            </tr>
            <tr class="odd">
                <th><?php echo $form->labelEx($model,'Classification'); ?></th>
                <td> <?php echo $form->labelEx($model,'NA'); ?>
                <?php echo $form->error($model,'Classification'); ?></td>
                
            </tr>
            <tr class="even">
                <th> <?php echo $form->labelEx($model,'UserID'); ?></th>
                <td> <?php echo $form->labelEx($model,'NA'); ?></td>
                 <?php echo $form->error($model,'UserID'); ?>
            </tr>
            <tr class="odd">
                <th ><?php echo $form->labelEx($model,'ApprovedDateTime'); ?></th>
                <td><?php echo $form->labelEx($model,'NA'); ?></td>
            <?php echo $form->error($model,'ApprovedDateTime'); ?>
            </tr>
        </tbody>
    </table>
    <table class="detail-view" id="yw0"> 
        <tbody>
            <tr class="even">
                <th><?php echo $form->labelEx($model,'Cancelled'); ?></th>
                <td><?php echo $form->labelEx($model,'NA'); ?></td>
                <?php echo $form->error($model,'Cancelled'); ?>
            </tr>
            <tr class="odd">
                <th><?php echo $form->labelEx($model,'CancelReason'); ?></th>
                <td><?php echo $form->labelEx($model,'CancelReason'); ?></td>
                <?php echo $form->error($model,'CancelReason'); ?>
            </tr>
            <tr class="even">
                <th><?php echo $form->labelEx($model,'CancelDateFax'); ?></th>
                <td><?php echo $form->labelEx($model,'CancelDateFax'); ?></td>
                <?php echo $form->error($model,'CancelDateFax'); ?>
            </tr>
        </tbody>
    </table>
    <table class="detail-view" id="yw0"> 
        <tbody>
            <tr class="even">
                <th> <?php echo $form->labelEx($model,'ForApproval'); ?></th>
                <td> <?php echo $form->checkBox($model,'ForApproval'); ?></td>
                 <?php echo $form->error($model,'ForApproval'); ?>
            </tr>
        </tbody>
    </table>
 
	

	<?php echo $form->errorSummary($model); ?>
	<br>
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




	<div class="row">
		<?php echo $form->labelEx($model,'Terms'); ?>
		<?php echo $form->textField($model,'Terms',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'Terms'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PayMode'); ?>
		<?php echo $form->textField($model,'PayMode',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'PayMode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DeliverDte'); ?>
		<?php echo $form->textField($model,'DeliverDte',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'DeliverDte'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AcctOf1'); ?>
		<?php echo $form->textField($model,'AcctOf1',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'AcctOf1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AcctOf2'); ?>
		<?php echo $form->textField($model,'AcctOf2',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'AcctOf2'); ?>
	</div>

	

	<div class="row">
		<?php echo $form->labelEx($model,'IssueDte'); ?>
		<?php echo $form->textField($model,'IssueDte'); ?>
		<?php echo $form->error($model,'IssueDte'); ?>
	</div>

	<div class="row">

	</div>

	<div class="row">

	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Approved'); ?>
		<?php echo $form->textField($model,'Approved',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Approved'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Faxed'); ?>
		<?php echo $form->textField($model,'Faxed'); ?>
		<?php echo $form->error($model,'Faxed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Emailed'); ?>
		<?php echo $form->textField($model,'Emailed'); ?>
		<?php echo $form->error($model,'Emailed'); ?>
	</div>

	

	

	<div class="row">
		<?php echo $form->labelEx($model,'ApprovedBy'); ?>
		<?php echo $form->textField($model,'ApprovedBy',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'ApprovedBy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DRPeriod'); ?>
		<?php echo $form->textField($model,'DRPeriod',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'DRPeriod'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Remarks'); ?>
		<?php echo $form->textField($model,'Remarks',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Remarks'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PODetails'); ?>
		<?php echo $form->textField($model,'PODetails',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'PODetails'); ?>
	</div>

	

	<div class="row">
		<?php echo $form->labelEx($model,'Currency'); ?>
		<?php echo $form->textField($model,'Currency',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'Currency'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DeliverTo'); ?>
		<?php echo $form->textField($model,'DeliverTo',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'DeliverTo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Delilvered'); ?>
		<?php echo $form->textField($model,'Delilvered'); ?>
		<?php echo $form->error($model,'Delilvered'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FANo'); ?>
		<?php echo $form->textField($model,'FANo',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'FANo'); ?>
	</div>



	<div class="row">
		<?php echo $form->labelEx($model,'PickedUp'); ?>
		<?php echo $form->textField($model,'PickedUp'); ?>
		<?php echo $form->error($model,'PickedUp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FaxedAsFA'); ?>
		<?php echo $form->textField($model,'FaxedAsFA'); ?>
		<?php echo $form->error($model,'FaxedAsFA'); ?>
	</div>

	<!--<div class="row">
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
    -->
	<div class="row">
		<?php echo $form->labelEx($model,'FA_RGB'); ?>
		<?php echo $form->textField($model,'FA_RGB'); ?>
		<?php echo $form->error($model,'FA_RGB'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FA_Other1'); ?>
		<?php echo $form->textField($model,'FA_Other1'); ?>
		<?php echo $form->error($model,'FA_Other1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FA_Other2'); ?>
		<?php echo $form->textField($model,'FA_Other2'); ?>
		<?php echo $form->error($model,'FA_Other2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RefDocNo'); ?>
		<?php echo $form->textField($model,'RefDocNo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'RefDocNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RefInvDtr'); ?>
		<?php echo $form->textField($model,'RefInvDtr',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'RefInvDtr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DateSubmitted'); ?>
		<?php echo $form->textField($model,'DateSubmitted'); ?>
		<?php echo $form->error($model,'DateSubmitted'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->