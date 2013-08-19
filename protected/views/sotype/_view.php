<?php
/* @var $this SotypeController */
/* @var $data Sotype */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('soType')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->soType), array('view', 'id'=>$data->soType)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('soDescription')); ?>:</b>
	<?php echo CHtml::encode($data->soDescription); ?>
	<br />


</div>