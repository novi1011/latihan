<label>Umur</label>
<input type="number" name="umur">
</br>
<input type="submit" value="kirim">

<?php 

$umur= 'umur';	
$status = 'status';

if ($umur <=5) {
	$status = "balita";
}else if ($umur >5) {
	$status = "anak-anak";
}elseif ($umur >12) {
	$status = "remaja";
}else{
	$status = "dewasa";
}

echo "Umur anda : $umur <br>";
echo "Status : $status";

 ?>