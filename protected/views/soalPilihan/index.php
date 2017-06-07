<?php
/* @var $this SoalPilihanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Soal Pilihans',
);

$this->menu=array(
	array('label'=>'Create SoalPilihan', 'url'=>array('create')),
	array('label'=>'Manage SoalPilihan', 'url'=>array('admin')),
);
?>

<h1>Soal Pilihans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
