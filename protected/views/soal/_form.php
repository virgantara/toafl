<?php
/* @var $this SoalController */
/* @var $model Soal */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'soal-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'konten'); ?>
		<?php echo $form->textArea($model,'konten',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'konten'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_aktif'); ?>
		<?php echo $form->textField($model,'is_aktif'); ?>
		<?php echo $form->error($model,'is_aktif'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->