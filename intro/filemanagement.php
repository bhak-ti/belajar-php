<?php
  $folder_name = "data";

  if(is_dir($folder_name)){
    echo "folder sudah ada";
  }
  else{
    mkdir("$folder_name");
  }

  echo "<br>";
  $file_location = "data/test.txt";

  // r = read only || w = write (menimpa text) || a = menambah dibelakang
  $file = fopen($file_location,"w");
  fwrite($file, " ganteng ");

  echo file_get_contents($file_location);

  echo "<br>";
  if(file_exists($file_location)){
    echo "file $file_location sudah ada";
  }
  else{
    echo "file $file_location tidak ada";
  }

  echo "<br>";
  $files = scandir($folder_name);
  // var_dump($files);

  foreach($files as $file){
    if ($file != "." && $file != ".."){
      echo $file."<br>";
    }
  
  }

?>
