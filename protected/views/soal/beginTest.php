<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<style type="text/css">
	div.soal,div.petunjuk{
		font-family: 'Lateef';
		font-size: 36px;
		color: black;
		text-align: right
	}

	div.jawaban{
		font-family: 'Lateef';
		font-size: 28px;
		color: black;
		text-align: right;

	}

	label.options{
		border-top: 1px solid;
		border-bottom: 1px solid;
		border-right: 1px solid;
		border-left: 1px solid;
		/*padding : 2px 3px;*/
	}

	label.options{
		 cursor: pointer; 
	}
</style>

<div class="petunjuk">
<?php 

foreach($petunjuk as $p)
{
	
	if($p->urutan == 3)
		echo '<strong>'.$p->isi.'</strong><br>';
	else
		echo $p->isi.'<br>';
}
?>
</div>



<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'soal-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
<?php
$i=1;
foreach($model as $soal)
{


?>

<div class="view">
<div class="soal">	

<?php 
echo $i.'.&nbsp;';	
echo CHtml::encode($soal->konten); 

?>
</div>
<div class="jawaban">	

<?php

if(!empty($soal->soalPilihans))
{
	echo '<br>';
	
	$j = 0;
	foreach($soal->soalPilihans as $pil)
	{
		if($j == 2)
			echo '<br><br>';
		
		?>
		<label class="options">
		<input type="radio" name="opsi_<?php echo $i;?>" value="<?php echo $pil->is_right;?>"/>
		<?php
		echo $pil->pilihan.'&nbsp;&nbsp;&nbsp;';
		
		?>

</label>&nbsp;&nbsp;
		<?php
		$j++;
	}
}


?>

</div>	

</div>

<?php 

$i++;
}
?>
<input type="submit" value="Submit" name="btnSubmit"/>
<?php $this->endWidget(); ?>