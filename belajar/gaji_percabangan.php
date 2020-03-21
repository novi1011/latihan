<label>jumlah jam kerja</label>
<input type="number" name="jam">
<input type="submit" value="kirim">

<?php 
$jam=$_POST['jam'];
if ($jam<=48) {
	$gaji = 2000*$jam;
	echo "Jam kerja anda = $jam jam<br> ";
	echo "Gaji anda adalah = \t Rp.$gaji";
}
else {
	$lembur=$jam-48;
	$jam=$jam-$lembur;
	$gaji1=2000*$jam;
	$gaji2=3000*($lembur);
	$gaji=$gaji1+gaji2;
	echo "Jam kerja anda = $jam jam<br>";
	echo "Jam Lembur anda = $lembur jam<br>";
	echo "Gaji Anda adalah = \t Rp.$gaji";

}

 ?>