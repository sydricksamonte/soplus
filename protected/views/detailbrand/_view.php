<?php
/* @var $this DetailbrandController */
/* @var $data Detailbrand */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Code')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Code), array('view', 'id'=>$data->Code)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Description')); ?>:</b>
	<?php echo CHtml::encode($data->Description); ?>
	<br />


</div>