<?php
$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1>Login</h1>

<p>Please fill out the following form with your login credentials:</p>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<div class="row">
		<?php echo $form->labelEx($model,'Emp_Code'); ?>
		<?php echo $form->textField($model,'Emp_Code'); ?>
		<?php echo $form->error($model,'Emp_Code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Passwrd'); ?>
		<?php echo $form->passwordField($model,'Passwrd'); ?>
		<?php echo $form->error($model,'Passwrd'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Login'); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
