<?php
  $nama = null;
  if(isset($nama)){
    echo "isi variabel nama adalah  : ".$nama;
  }
  else{
    echo "isset belum terisi";
  }
//===================================

  echo "<br>";
  if(!empty($nama)){
    echo "isi variabel nama adalah ".$nama;
  }
  else{
    echo "nama masih kosong";
  }

  echo "<br>";
  if(is_null($nama)){
    echo "variabel berisi null";
  }{
    echo "isi variabel nama adalah ".$nama;
  }

  echo "<br>";
  $alamat = "jalan kebenaran";
  if(strlen($alamat) < 5 || strpos($alamat, "jalan") !== 0 ){
    echo "Alamat Tidak Valid";
  }
  else {
    echo "Alamat Valid!";
  }
  
  echo "<br>";

  $angka = 17;
  if (is_numeric($angka)){
    echo "ini adalah angka";
  }
  else{
    echo "ini bukan angka";
  }
?>