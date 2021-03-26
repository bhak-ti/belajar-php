<?php
  declare(strict_types = 1); 
 include "includes/autoloader.inc.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
<h1>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
</head>
<body>

  <?php
    $person1 = new Person\Person("Bambang",10,"blue");
    
    
    try
    {
      $person1 -> setName("Wawan");
      echo $person1 -> getName()."<br>";
    }
    catch (TypeError $e)
    {
      echo "error dude! <br>" . $e -> getMessage();
    }

    $house1  = new House\House("","");
    echo $house1 -> getHouseName()."<br>";
    echo $house1 -> getAddress()."<br>";

    $food1 = new Food\Food("Nasi Goreng", "Indonesia");
    echo $food1 -> getFoodName()."<br>";
    $food1 -> setFoodOrigin("Surabaya")."<br>";
    echo $food1 -> getFoodOrigin();


    

  ?>
</h1>
</body>
</html>
