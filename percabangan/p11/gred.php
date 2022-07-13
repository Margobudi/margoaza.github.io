<?php
/**
*gatewan.com
*Wawan Beneran
*PHP Kalkulasi Nilai Mahasiswa
*/

 $nama=$_REQUEST["nama"];
 $tugas=$_REQUEST["tugas"];
 $uts=$_REQUEST["uts"];
 $uas=$_REQUEST["uas"];
 $hasil=($tugas*0.3)+($uas*0.4)+($uts*0.3);

 echo("Nilai ");
 echo($nama);
 echo(" Adalah:");
 echo("<br>");
 if ($hasil>80)
 echo("Hasil : <b>A</b>");
 elseif ($hasil>70)
 echo("Hasil : <b>B</b>");
 elseif ($hasil>60)
 echo("Hasil : <b>C</b>");
 elseif ($hasil>40)
 echo("Hasil : <b>D</b>");
 else
 echo("Hasil : <b>E</b>");

?>