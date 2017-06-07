<?php
/* @var $this SoalPilihanController */
/* @var $model SoalPilihan */

$this->breadcrumbs=array(
	'Soal Pilihans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SoalPilihan', 'url'=>array('index')),
	array('label'=>'Manage SoalPilihan', 'url'=>array('admin')),
);
?>

<h1>Create SoalPilihan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>