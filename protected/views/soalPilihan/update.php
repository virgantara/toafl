<?php
/* @var $this SoalPilihanController */
/* @var $model SoalPilihan */

$this->breadcrumbs=array(
	'Soal Pilihans'=>array('index'),
	$model->id_pilihan=>array('view','id'=>$model->id_pilihan),
	'Update',
);

$this->menu=array(
	array('label'=>'List SoalPilihan', 'url'=>array('index')),
	array('label'=>'Create SoalPilihan', 'url'=>array('create')),
	array('label'=>'View SoalPilihan', 'url'=>array('view', 'id'=>$model->id_pilihan)),
	array('label'=>'Manage SoalPilihan', 'url'=>array('admin')),
);
?>

<h1>Update SoalPilihan <?php echo $model->id_pilihan; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>