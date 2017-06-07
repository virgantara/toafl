<?php
/* @var $this SoalController */
/* @var $model Soal */

$this->breadcrumbs=array(
	'Soals'=>array('index'),
	$model->id_soal=>array('view','id'=>$model->id_soal),
	'Update',
);

$this->menu=array(
	array('label'=>'List Soal', 'url'=>array('index')),
	array('label'=>'Create Soal', 'url'=>array('create')),
	array('label'=>'View Soal', 'url'=>array('view', 'id'=>$model->id_soal)),
	array('label'=>'Manage Soal', 'url'=>array('admin')),
);
?>

<h1>Update Soal <?php echo $model->id_soal; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>