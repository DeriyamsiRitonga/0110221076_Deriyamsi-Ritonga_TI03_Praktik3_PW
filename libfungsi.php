<?php
// Menangkap Data User
$proses = $_POST["proses"];
$nama = $_POST["nama"];
$matkul = $_POST["matkul"];
$nilai_uts = $_POST["nilai_uts"];
$nilai_uas = $_POST["nilai_uas"];
$nilai_tugas = $_POST["nilai_tugas"];
$nilai_total =  (0.35*$nilai_uts) + (0.35*$nilai_uas) + (0.35*$nilai_tugas);



// If Else

if ($nilai_total >= 85 && $nilai_total <= 100 ) {
  $grade = "A";
} elseif ($nilai_total >= 74 && $nilai_total <= 84 ) {
  $grade = "B";
} elseif ($nilai_total >= 56 && $nilai_total <= 69 ) {
  $grade = "C";
} elseif ($nilai_total >= 36 && $nilai_total <= 55 ) {
  $grade = "D";
} elseif ($nilai_total >= 0 && $nilai_total <= 35 ) {
  $grade = "E";
} else {
  $grade = "I";
}

// switch
switch ($grade){
  case "A";
    $predikat = "Sangat Memuaskan";
      break;
  case "B";
    $predikat = "Memuaskan";
      break;   
  case "C";
$predikat = "Cukup";
  break;
  case "D";
    $predikat = "Kurang";
      break;
  case "E";
    $predikat = "Sangat kurang";
      break;
  default:
    $predikat = "Tidak Ada";
      break;
}


echo '<br> Nama :' . $nama;
echo '<br> Mata Kuliah :' . $matkul;
echo '<br> Nilai UTS :' . $nilai_uts;
echo '<br> Nilai UAS :' . $nilai_uas;
echo '<br> Nilai Tugas :' . $nilai_tugas;
echo '<br> Nilai Total :' . $nilai_total = (0.35*$nilai_uts) + (0.35*$nilai_uas) + (0.35*$nilai_tugas);
echo '<br> Grade :' . $grade;
echo '<br> Predikat :' . $predikat;

?>