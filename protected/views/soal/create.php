<?php
/* @var $this SoalController */
/* @var $model Soal */

$this->breadcrumbs=array(
	'Soals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Soal', 'url'=>array('index')),
	array('label'=>'Manage Soal', 'url'=>array('admin')),
);
?>

<h1>Create Soal</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>