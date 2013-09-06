<?php echo CHtml::link('Unison',array('somain/nextuni','docno'=>'aaa','prf'=>0,'opt'=>0,'srv'=>0,'uni'=>1,'comm'=>'firstr','type'=>'unison')); ?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php echo CHtml::link('Service Center',array('somain/nextuni','docno'=>'aaa','prf'=>0,'opt'=>0,'srv'=>1,'uni'=>0,'comm'=>'firstr','type'=>'service')); ?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php echo CHtml::link('Optimal',array('somain/nextuni','docno'=>'aaa','prf'=>0,'opt'=>1,'srv'=>0,'uni'=>0,'comm'=>'firstr','type'=>'optimal')); ?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php echo CHtml::link('Lex Manage',array('somain/nextuni','docno'=>'aaa','prf'=>1,'opt'=>0,'srv'=>0,'uni'=>1,'comm'=>'firstr','type'=>'lexmanage')); ?>
<?php $approver = Yii::app()->user->id;?>
<pre><?php #print_r($remp);?></pre>
<pre><?php #print_r($rsomain);?></pre>
<pre><?php #print_r($rdetails);?></pre>
<style>
p, .table table, .table tr, .table td{
border:1px solid #8F8B8B;padding:5px;
}
p {
display:inline !important;padding:2px;line-height:200%;}
</style>
<?php echo CHtml::beginForm(); ?>
<?php
					
		foreach($somain as $somain):
			if($somain['DocNo']==$remp){
		?>
		Status: <?php $status=$somain['Approved']; $docno=$somain['DocNo'];
			if($status==null){echo $status="PENDING";}else if($status=="NO"){echo "DISAPPROVED";}else if($status=="YES"){echo "APPROVED";}else{echo "PENDING";}
		?>
		<br>
					  <?php echo CHtml::textField('Somain[DocNo]',$somain['DocNo'],array('size'=>25));?>
					  <?php #echo $somain['DocNo']; 
					  ?>
					  Sales Exec: <?php 
							$model = new CSecurity;
							$records = CSecurity::model()->findAll();                 
							$data = array();                 
							foreach ($records as $m)                 
							$data[$m->Emp_Code] = $m->Emp_Code;                                      
							echo CHtml::activeDropDownList($model,'Emp_Code', $data, array('value' => $somain['AcctOf1'],'prompt' => $somain['AcctOf1']));
							?>
					  This Transaction is for:
					  <?php echo CHtml::textField('Somain[AcctOf2]',$somain['AcctOf2']);?>
					<hr>
					 Date:
					 <?php echo CHtml::textField('Somain[DatePlaced]',$somain['DatePlaced']); ?>
					 Type: <?php $model=new Sotype; echo CHtml::activeDropDownList($model, 'soType', $list,array('value'=>$somain['Classification'],'prompt'=>$somain['Classification']));?>
					




					 Reason if Disapprove: <?php echo CHtml::textField('Somain[CancelReason]',$somain['CancelReason']); ?>
					 <hr>
					Customer: <?php echo CHtml::textField('Somain[Customer]',$somain['Customer']); ?>
					Contact Person : <?php echo CHtml::textField('Somain[ContactPerson]',$somain['ContactPerson']); ?>			
					Demo/Rental Period: <?php echo CHtml::textField('Somain[DRPeriod]',$somain['DRPeriod']); ?>
					 <hr>
					Address: <?php echo CHtml::textField('Somain[Address]',$somain['Address'],array('size'=>80)); ?>
					Telephone No.: <?php echo CHtml::textField('Somain[TelNo]',$somain['TelNo']); ?></td>
					 <br><br>
					



					<div class="form2" id="vi">
					<?php 
					$mod = new SoDetail;
					$dn = $docno;

					$this->widget('zii.widgets.grid.CGridView', array(
						'id'=>'so-detail-grid',
						'dataProvider'=>$mod->getAllRelDocNo($dn),
						'filter'=>$mod,
						'columns'=>array(
							'Qty',
							'UnitMeas',
							'ItemDesc',
							'CurSign',
							'UnitPrice',
							array('name'=>'.Total.','header'=>'Total','value'=>'$data->Qty*$data->UnitPrice'),
							'War_Parts',
							'War_Labor',
							'War_Onsite',
							#'Qty'*'ItemDesc',
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

					<input type="button" value="Insert Line" id="hides">
					<br><br>
					Total Comm.: <p>0</p> &nbsp;&nbsp;&nbsp;Total <p><?php ?>0</p>
					<br>

					Instruction
					<table>
					<tr>
					<td style="width:60%">
					<?php echo CHtml::textArea('Somain[Instruction]',$somain['Instruction'],array('maxlength' => 300, 'rows' => 6, 'cols' => 50)); ?></td>
					<td style="width:40%"><div align="right">
					Exp. Date of Del. : <?php echo CHtml::textField('Somain[DeliverDte]',$somain['DeliverDte']); ?>
					<br>
					Terms of Payment : <?php echo CHtml::textField('Somain[Terms]',$somain['Terms']); ?>
					<br>
					Mode of Payment : <?php echo CHtml::textField('Somain[PayMode]',$somain['PayMode']); ?>
					<br>
					Deliver to : <?php echo CHtml::textField('Somain[DeliverTo]',$somain['DeliverTo']); ?></div>
					</td>
					</tr>
					</table>
					</tr>
					</table>


					<?php }endforeach;?>

<?php 
if($type=='unison'){
	$prfn=0;$optn=0;$srvn=0;$unin=1;
}
else if($type=='service'){
	$prfn=0;$optn=0;$srvn=1;$unin=0;
}
else if($type=='optimal'){
	$prfn=0;$optn=1;$srvn=0;$unin=0;
}
else if($type=='lexmanage'){
	$prfn=1;$optn=0;$srvn=0;$unin=1;
}
else{
	$prfn=0;$optn=0;$srvn=0;$unin=0;
}
echo CHtml::button('First Record', array('submit'=>array('nextuni','docno'=>$remp,'prf'=>$prfn,'opt'=>$optn,'srv'=>$srvn,'uni'=>$unin,'comm'=>'firstr','type'=>$type)));
echo CHtml::button('Previous', array('submit'=>array('nextuni','docno'=>$remp,'prf'=>$prfn,'opt'=>$optn,'srv'=>$srvn,'uni'=>$unin,'comm'=>'prevr','type'=>$type))); 
echo CHtml::button('Next', array('submit'=>array('nextuni','docno'=>$remp,'prf'=>$prfn,'opt'=>$optn,'srv'=>$srvn,'uni'=>$unin,'comm'=>'nextr','type'=>$type)));
echo CHtml::button('Last Record', array('submit'=>array('nextuni','docno'=>$remp,'prf'=>$prfn,'opt'=>$optn,'srv'=>$srvn,'uni'=>$unin,'comm'=>'lastr','type'=>$type)));

?>
<?php #echo ' of '.$count;?>
<br><br>
<?php echo CHtml::htmlButton ('Refresh', array('onClick'=>'window.location="'.Yii::app()->getRequest()->getUrl().'"')); ?>
<?php echo CHtml::button('Approve', array('submit'=>array('approve','id'=>$docno,'status'=>$status,'approver'=>$approver,'app'=>'approveyes'))); ?>
<?php echo CHtml::button('Disapprove', array('submit'=>array('approve','id'=>$docno,'status'=>$status,'approver'=>$approver,'app'=>'approveno'))); ?>
<?php echo CHtml::button('Print Preview', array('submit'=>array('viewapp','id'=>$remp))); ?>
<?php echo CHtml::button('Search', array('submit'=>array('somain/adminsearch'))); ?>
<?php #echo CHtml::button('Create New', array('submit'=>array('somain/createapp'))); ?>
<?php #echo CHtml::button('View', array('submit'=>array('approval','approver'=>$approver))); ?>
<?php echo CHtml::endForm(); ?>

<div class="form1" id="vis">
<?php $mod = new SoDetail; ?>
    <h2>ADD ITEM(S) to <?php echo $dn; ?> <button id="cancel" style="float:right">Close</button></h2>
    <?php $form1=$this->beginWidget('CActiveForm', array('id'=>'so-detail-form','enableAjaxValidation'=>true, 'clientOptions' => array(
                            'validateOnType'=>false,
        'validateOnSubmit'=>true,
        'validateOnChange'=>false,)));?>  
    <?php $mod = new SoDetail; ?>   
        <div class="row">  
            <?php echo 'Doc No.: '. $form1->labelEx($mod,'DocNo',array('label'=>$docno)); ?>
            <?php echo $form1->hiddenField($mod,'DocNo', array('value'=>$docno)); ?>
            <?php echo $form1->error($mod,'DocNo'); ?>
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
       
       
    });
</script>
