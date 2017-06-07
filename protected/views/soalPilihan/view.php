<?php
/* @var $this SoalPilihanController */
/* @var $model SoalPilihan */

$this->breadcrumbs=array(
	'Soal Pilihans'=>array('index'),
	$model->id_pilihan,
);

$this->menu=array(
	array('label'=>'List SoalPilihan', 'url'=>array('index')),
	array('label'=>'Create SoalPilihan', 'url'=>array('create')),
	array('label'=>'Update SoalPilihan', 'url'=>array('update', 'id'=>$model->id_pilihan)),
	array('label'=>'Delete SoalPilihan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pilihan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SoalPilihan', 'url'=>array('admin')),
);
?>

<h1>View SoalPilihan #<?php echo $model->id_pilihan; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_pilihan',
		'id_soal',
		'is_right',
		'pilihan',
	),
)); ?>
