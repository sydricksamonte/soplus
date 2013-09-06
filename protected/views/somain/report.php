<?php
/* @var $this SomainController */
/* @var $model Somain */

$this->breadcrumbs=array(
	'Somains'=>array('index'),
	'Create',
);

if (Yii::app()->user->getState('role') != 1)
{
$this->menu=array(
	array('label'=>'List Entries', 'url'=>array('index')),
	array('label'=>'Create Entry', 'url'=>array('create')),
    array('label'=>'Show Forms For Approval', 'url'=>array('nextuni', 'docno'=>'aaa', 'prf'=>'0', 'opt'=>'0', 'srv'=>'0', 'uni'=>'0', 'comm'=>'firstr', 'type'=>'all')),
);
}
else{
    $this->menu=array(
	array('label'=>'List Entries', 'url'=>array('index')),
	array('label'=>'Create Entry', 'url'=>array('create')),
    
);
}
?>

<div class="report" id="theForm">
<h2>Filter fields to generate sales report</h2>  
    <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'somain-report-form',
    #'htmlOptions' => array("name"=>"somain-form"),
	'enableAjaxValidation'=>true, 
    'clientOptions' => array('validateOnSubmit' => true)));
    
    $so = new Somain();
    $so->DocNo = 'Service_Center';
    ?>
    <div>
    <?php $accountStatus = array('Unison'=>'Unison', 'Optimal'=>'Optimal', 'Service_Center'=>'Service Center');
        echo $form->radioButtonList($so,'DocNo', $accountStatus, array('name'=>'type','separator'=>'<br>', 'labelOptions'=>array('style'=>'float:left;'), 'style'=>'float:left;'));
    ?>
     </div>    
    <br><br> 
    <div class="con">
    <h2>Other details</h2>
        <div class="row">
        <?php echo 'Transaction'; ?>
        <?php echo $form->textField($so,'Classification',array('name'=>'classification','size'=>30,'maxlength'=>255)); ?>
            <br>
            &nbsp;&nbsp;&nbsp;<i> For transaction, please type the classification type in two letters. e.g. [SO]</i>
            <br>
            &nbsp;&nbsp;&nbsp;<i> You may add [,] for multiple classification types. e.g. [SO,FA]</i>
            <br>
            &nbsp;&nbsp;&nbsp;<i> Leave blank to search for all.</i>
        </div>
        <br>
        <div class="row">
        <?php echo 'Customer'; ?>&nbsp;&nbsp;&nbsp;
        <?php echo $form->textField($so,'Classification',array('name'=>'customer','size'=>30,'maxlength'=>255)); ?>
        </div>
        <br>
     </div>  

    <br><br> 
    <div class="con">
    <h2>Date Covered</h2>
        <div class="row">
        <?php echo 'From'; ?>&nbsp;
        <?php $this->widget('zii.widgets.jui.CJuiDatePicker',
            array(
                'attribute'=>'Classification',
                'model'=>$so,
                'options' => array(
                      'mode'=>'focus',
                      'dateFormat'=>'yy-mm-dd',
                      'showAnim' => 'toggle',
                      'changeYear'=> 'true',
                      'changeMonth'=> 'true',
                      'yearRange' => '2009:2100',
                      ),
                    'htmlOptions'=>array('name'=>'from','size'=>30,'class'=>'date', 'value'=>date("2011-m-d")),
                    )
                );
        ?>
        </div>
        <br>
        <div class="row">
       
        <?php echo 'To'; ?>&nbsp;&nbsp;&nbsp;&nbsp;
        <?php $this->widget('zii.widgets.jui.CJuiDatePicker',
            array(
                'attribute'=>'Classification',
                'model'=>$so,
                'options' => array(
                      'mode'=>'focus',
                      'dateFormat'=>'yy-mm-dd',
                      'showAnim' => 'toggle',
                      'changeYear'=> 'true',
                      'changeMonth'=> 'true',
                      'yearRange' => '2009:2100',
                      ),
                    'htmlOptions'=>array('name'=>'to','size'=>30,'class'=>'date', 'value'=>date("Y-m-d")),
                    )
                );
        ?>
        </div>
        <br>
            &nbsp;&nbsp;&nbsp;<i> Please avoid long date ranges as it may take a while.</i>
        <br>
     </div> 
     <br>        

    <div class="row buttons">
		<?php echo CHtml::submitButton(); ?>
	</div>

     <?php $this->endWidget(); ?>

</div>