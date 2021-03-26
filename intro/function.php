<?php
  function salam($name = "bhakti"){
    echo "selmat masuk budha, $name! ";
  }
  salam();
  echo "<br>";
  salam("bro");

  echo "<br>";
  function pangkat2($angka){
    return $angka * $angka;
  }
  echo "hasil dari 10 pangkat dua adalah ".pangkat2(10);

  echo "<br>";
  echo "hasil dari 10 pangkat tiga adalah ".pow(10,3);

?>