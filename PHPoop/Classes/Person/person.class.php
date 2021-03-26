<?php
  namespace Person;

  class Person 
  {
    private $name;
    public $age;
    public $haircolor;

    function __construct($aName, $aAge, $aHaircolor)
    {
      $this -> name = $aName;
      $this -> age  = $aAge;
      $this -> haircolor = $aHaircolor;
    }
    
    function __destruct()
    {
      
    }

    function setName(String $aNewname)
    {
      $this -> name = $aNewname;
    }

    function getName()
    {
      return $this -> name;
    }
  }