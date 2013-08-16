<?php
/* @var $this TblsotypeController */
/* @var $data Tblsotype */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Type1')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Type1), array('view', 'id'=>$data->Type1)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Description')); ?>:</b>
	<?php echo CHtml::encode($data->Description); ?>
	<br />


</div>