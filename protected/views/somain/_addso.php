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
      <div style="border:1px solid green; width:25%;padding:2px; float:right; padding: 0 25px 25px 0;">
		    <?php $dn = $model->DocNo; ?>
            <?php echo 'Doc No.: '.$form->labelEx($model,'DocNo',array('label'=>$model->DocNo)); ?>
            <?php echo $form->hiddenField($model,'DocNo', array('value'=>$model->DocNo)); ?>
		    <?php echo $form->error($model,'DocNo'); ?>
        <br>
            <?php echo 'Class: '.$form->labelEx($model,'Classification',array('label'=>$model->Classification)); ?>
            <?php echo $form->hiddenField($model,'Classification', array('value'=>$model->Classification)); ?>
			<?php echo $form->error($model,'Classification'); ?>
       <br> 
            <?php echo 'User: '.$form->labelEx($model,'AcctOf1',array('label'=>$model->AcctOf1)); ?>
            <?php echo $form->hiddenField($model,'AcctOf1', array('value'=>$model->AcctOf1)); ?>
			<?php echo $form->error($model,'AcctOf1'); ?>
        <br>
            <?php echo 'Date Placed: '.$form->labelEx($model,'DatePlaced',array('label'=>$model->DatePlaced)); ?>
            <?php echo $form->hiddenField($model,'DatePlaced', array('value'=>$model->DatePlaced)); ?>
			<?php echo $form->error($model,'DatePlaced'); ?>
	</div>
    
    <div style="border:1px solid green; width:55%;padding:2px;" align="right">
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
		<?php echo $form->textArea($model,'Instruction',array('rows'=>4, 'cols'=>40)); ?>
		<?php echo $form->error($model,'Instruction'); ?>
	</div>
    <br/>
    
    <div style="border:1px solid green; width:324px;padding:2px;" align="right">
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
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>


<?php $this->endWidget(); ?>

<!--                                     SO DETAIL                                      

<?php echo CHtml::link('Add Item(s)','#', array('rel' => 'popuprel', 'class' => 'popup' )); ?>
    -->
<button id="hides">Add Item</button>
    
    <?php #echo Yii::trace(CVarDumper::dumpAsString($model),'vardump');?>
<div class="form1" id="vis">
    <h2>ADD ITEM(S) to <?php echo $dn; ?> <button id="cancel" style="float:right">Close</button></h2>
    <?php $form1=$this->beginWidget('CActiveForm', array('id'=>'so-detail-form','enableAjaxValidation'=>true, 'clientOptions' => array(
                            'validateOnType'=>false,
        'validateOnSubmit'=>true,
        'validateOnChange'=>false,)));?>  
    <?php $mod = new SoDetail; ?>   
        <div class="row">  
            <?php echo 'Doc No.: '. $form->labelEx($mod,'DocNo',array('label'=>$model->DocNo)); ?>
            <?php echo $form1->hiddenField($mod,'DocNo', array('value'=>$model->DocNo)); ?>
            <?php echo $form1->error($model,'DocNo'); ?>
        </div>

        <div class="column">
            <?php echo $form1->labelEx($mod,'Qty'); ?>
            <?php echo $form1->textField($mod,'Qty',array('size'=>10,'maxlength'=>6)); ?>
            <?php echo $form1->error($mod,'Qty'); ?>
        </div>

        <div class="row">
            <?php echo $form1->labelEx($mod,'UnitMeas'); ?>
            <?php
                $records = Unit::model()->findAll();
                $list = CHtml::listData($records, 'name', 'name');
                echo $form1->dropDownList($mod,'UnitMeas', $list, array('empty' => '(Select Unit)'));
            ?>
            <?php echo $form1->error($mod,'UnitMeas'); ?>
        </div>

        <div class="row">
            <?php echo $form1->labelEx($mod,'ItemDesc'); ?>
            <?php echo $form1->textArea($mod,'ItemDesc',array('rows'=>3, 'cols'=>50)); ?>
            <?php echo $form1->error($mod,'ItemDesc'); ?>
        </div>
        <div class="row">
            <?php echo $form1->labelEx($mod,'bold'); ?>
            <?php echo $form1->checkBox($mod,'bold'); ?>
            <?php echo $form1->error($mod,'bold'); ?>
        </div>

        <div class="row">
            <?php echo $form1->labelEx($mod,'Warranty Parts'); ?>
            <?php echo $form1->textField($mod,'War_Parts',array('size'=>40,'maxlength'=>40)); ?>
            <?php echo $form1->error($mod,'War_Parts'); ?>
        </div>

        <div class="row">
            <?php echo $form1->labelEx($mod,'Warranty Labor'); ?>
            <?php echo $form1->textField($mod,'War_Labor',array('size'=>40,'maxlength'=>40)); ?>
            <?php echo $form1->error($mod,'War_Labor'); ?>
        </div>

        <div class="row">
            <?php echo $form1->labelEx($mod,'Warranty Onsite'); ?>
            <?php echo $form1->textField($mod,'War_Onsite',array('size'=>40,'maxlength'=>40)); ?>
            <?php echo $form1->error($mod,'War_Onsite'); ?>
        </div>
    
        <div class="column">
            <?php echo $form1->labelEx($mod,'UnitPrice'); ?>
            <?php echo $form1->textField($mod,'UnitPrice'); ?>
            <?php echo $form1->error($mod,'UnitPrice'); ?>
        </div>
    
        <div class="column">
            <?php echo $form1->labelEx($mod,'CurSign'); ?>
            <?php echo $form1->dropDownList($mod,'CurSign', array('PhP'=>'Php','US$'=>'Usd'), array('empty' => '(Select Unit)')); ?>
            <?php echo $form1->error($mod,'CurSign'); ?>
        </div>

        <div class="row">
            <?php echo $form1->labelEx($mod,'Commission'); ?>
            <?php echo $form1->textField($mod,'FullComm'); ?>
            <?php echo $form1->error($mod,'FullComm'); ?>
        </div>
        <div class="column buttons">
            <?php echo CHtml::submitButton($mod->isNewRecord ? 'Create' : 'Save',array('id'=>'test')); ?>
        </div> 
 
        <?php $this->endWidget(); ?>
     
    </div><!-- form --> 
<div id="fade"></div>
<!-- form -->



<div class="form2" id="vi">
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'so-detail-grid',
	'dataProvider'=>$mod->getAllRelDocNo($dn),
	'filter'=>$mod,
	'columns'=>array(
		'Qty',
		'UnitMeas',
		'ItemDesc',
		'CurSign',
        'UnitPrice',
        'War_Parts',
		'War_Labor',
		'War_Onsite',
		/*
        'DetailNo',
		'DocNo',
		'InvoiceNo',
		'InvoiceDte',
		'PORemarks',	
		'CommB',
		'CommC',
        'FullComm'
		*/
		array(
          'class'=>'CButtonColumn',
          'viewButtonUrl'=>'Yii::app()->createUrl(\'sodetail/view&id=\'. $data->DetailNo)',
          'updateButtonUrl'=>'Yii::app()->createUrl(\'sodetail/update&id=\'. $data->DetailNo)',
          'deleteButtonUrl'=>'Yii::app()->createUrl(\'sodetail/delete&id=\'. $data->DetailNo)',
        ),
	),
)); ?>

</div>
<script>
    $(document).ready(function ()
    {
        $(".form1").hide();
        
        var friend = $('div').data('show');
        var friendDiv = $('#' + friend);
        $("#hides").click(function ()
        {
            $(".form1").fadeToggle('slow');
        });
        $("#cancel").click(function ()
        {
            $(".form1").fadeToggle('slow');
        });
       
    });
</script>