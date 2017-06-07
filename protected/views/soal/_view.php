<?php
/* @var $this SoalController */
/* @var $data Soal */
?>


<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_soal')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_soal), array('view', 'id'=>$data->id_soal)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('konten')); ?>:</b>
	<h1 style="font-family: 'Lateef';font-size: 48px"><?php echo CHtml::encode($data->konten); ?></h1>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_aktif')); ?>:</b>
	<?php echo CHtml::encode($data->is_aktif); ?>
	<br />


</div>