<?php
  $nilai = 55;
  if($nilai > 60){
    echo "anda lulus";
  }
  elseif($nilai == 0){
    echo "anda tidak mengerjakan ujian";
  }
  else{
    echo "anda belum lulus";
  }


  echo "<br>";

  $warna_lampu = "merah";

  switch($warna_lampu){
    case "merah" : echo "berhenti";
        break;
    case "kuning" : echo "hati-hati";
        break;
    case "hijau" : echo "jalan";
        break;
    default      : echo "warna tidak ada";
  } 

?>