<?php
/* @var $this SoalPilihanController */
/* @var $data SoalPilihan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pilihan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_pilihan), array('view', 'id'=>$data->id_pilihan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_soal')); ?>:</b>
	<?php echo CHtml::encode($data->id_soal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_right')); ?>:</b>
	<?php echo CHtml::encode($data->is_right); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pilihan')); ?>:</b>
	<?php echo CHtml::encode($data->pilihan); ?>
	<br />


</div>