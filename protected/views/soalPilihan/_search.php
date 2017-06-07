<?php
/* @var $this SoalPilihanController */
/* @var $model SoalPilihan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_pilihan'); ?>
		<?php echo $form->textField($model,'id_pilihan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_soal'); ?>
		<?php echo $form->textField($model,'id_soal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_right'); ?>
		<?php echo $form->textField($model,'is_right'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pilihan'); ?>
		<?php echo $form->textArea($model,'pilihan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->