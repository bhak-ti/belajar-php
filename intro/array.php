<?php
//array berguna untuk menyimpan beberapa data dalam variabel sekaligus
  //product A, product B, product C

  $products = ["buku","meja","lemari",15];
  echo $products[2];
  
  echo "<br>";
  //menghapus arry dengan unset()
  unset($products[1]);
  echo "jumlah data produk = ".count($products);

  //mengisi / menambah array
  $products[1] = "hp";
  echo "<br>";
  echo $products[1];
  //menambah pada index terakhir [] array kosong
  $products[] = "pensil";

  echo "<br>";
  echo $products[4];
  echo "<br>";
  var_dump($products);
  echo "<br>";

  //associative array
  $manusia = [
    "nama" => "Bhakti",
    "umur" => 20,
    "alamat" => "jalan raya"
  ];
  echo $manusia["nama"];

  $manusia["uang"] = "20K";

  echo "<br>";
  var_dump($manusia);


?>