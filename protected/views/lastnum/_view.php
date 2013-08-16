<?php
/* @var $this LastnumController */
/* @var $data Lastnum */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LN_Counter')); ?>:</b>
	<?php echo CHtml::encode($data->LN_Counter); ?>
	<br />


</div>