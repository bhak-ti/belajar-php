<?php
  $nama_depan = "Dwi";
  $nama_belakang = "Bhakti";

  echo $nama_depan." ".$nama_belakang;
  echo "<br>";
  echo "jumlah Karakter = ".strlen("Dwi Bhakti");
  echo "<br>";

  echo "mencari posisi karakter(index dimulai dari 0)";  
  echo "<br>";
  echo "Dwi Bhakti";
  echo "<br>";
  echo "lokasi index Bhakti = ".strpos("Dwi Bhakti","Bhakti");

  echo "<br>";
  echo "<br>";
  echo "mengecilkan huruf dan mengkapitalkan huruf (strtolower & strtoupper)";
  echo "<br>";
  echo strtolower("DWI BHAKTI");
  echo "<br>";
  echo strtoupper("dwi bhakti");

  echo "<br>";
  echo "<br>";
  echo "penggunaan (substring 4,6)";
  echo "<br>";
  echo "Dwi Bhakti";
  echo "<br>";
  $nama = "Dwi Bhakti";
  echo substr($nama,4,6);

  echo "<br>";
  echo "<br>";
  echo "membalikkan string dengan (strrev)";
  echo "<br>";
  echo "Dwi";
  echo "<br>";
  echo strrev("Dwi");

  echo "<br>";
  echo "<br>";
  echo "Penggunaan (str_replace) untuk mengganti/menimpa string";
  $salam = "Selamat Pagi";
  echo "<br>";
  echo $salam;
  echo "<br>";
  echo str_replace("Pagi","Malam",$salam);

?>
