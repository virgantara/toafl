<?php
/* @var $this SoalController */
/* @var $model Soal */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_soal'); ?>
		<?php echo $form->textField($model,'id_soal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'konten'); ?>
		<?php echo $form->textArea($model,'konten',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_aktif'); ?>
		<?php echo $form->textField($model,'is_aktif'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->