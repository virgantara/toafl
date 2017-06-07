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
		text-align: right
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
			echo '<br>';
		
		?>
		<label>
		<input type="radio" name="opsi_<?php echo $i;?>" value="<?php echo $pil->is_right;?>"/>
		<?php
		echo $pil->pilihan.'&nbsp;&nbsp;&nbsp;';
		
		?>

</label>
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