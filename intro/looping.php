<?php
  //for looping
  for($i=0; $i<10; $i++){
    echo "Bhakti Ganteng $i <br>";
  }

  echo "=================";
  echo "<br>";


  //while looping
  $i = 10;
  while($i!=0){
    echo "selamat datang $i <br>";
    $i--;
    //$i = $i - 1;
    //$i -= 1;
    //tiga variabel diatas sama atau ekuivalen
  }
  echo "=================";
  echo "<br>";

  //do while looping
  $j = 1;
  do{
    echo "selamat makan $j <br>";
    $j++;
  } while($j <= 10);

  echo "=================";
  echo "<br>";

  //foreach looping for array
  $books = ["mtk","kamus","novel","indonesia"];
  foreach($books as $book){
    echo $book."<br>";
  }

  echo "=================";
  echo "<br>";
  //for looping with array
  for ($i=0; $i<count($books); $i++){
    echo $books[$i]."<br>";
  }

  echo "=================";
  echo "<br>";

  //foreach looping with arary
  $manusia = [
    "nama"=>"Bhakti",
    "umur"=>20,
    "alamat"=>"jalan raya"
  ];
  echo "biodata : <br>";
  foreach($manusia as $key=>$data){
    echo $key.": ".$data."<br>";
  }
  
?>