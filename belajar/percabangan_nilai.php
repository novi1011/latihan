<label>NIlai Siswa</label>
<input type="number" name="nilai">



<?php 

$nilai = 85;


if ($nilai > 85) {
	$grade = "A";
}elseif ($nilai < 80) {
	$grade = "B";
}else{
	$grade = "C";
}

echo "Nilai anda : $nilai<br>";
echo "grade : $grade";

 ?>