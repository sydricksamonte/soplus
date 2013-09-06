<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

$csec = new SoDetail;
?>
<?php if (Yii::app()->user->id != NULL){?>
<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p><b>Hello <?php echo $csec->getFullName(Yii::app()->user->id);?>!</b></p>

<p>Please select an operation</p>
<ul>
    <li><?php echo CHtml::link('Manage Entries','index.php?r=somain/admin'); ?>
	<li><?php echo CHtml::link('Create an Entry','index.php?r=somain/create'); ?>
</ul>
<?php }
else {?>
<h1>Welcome to So Plus!</h1>

<?php }?>
