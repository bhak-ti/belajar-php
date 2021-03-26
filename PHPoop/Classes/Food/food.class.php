<?php

namespace Food;

class Food
{
    private $foodName;
    private $foodOrigin;

    function __construct($aFoodName,$aFoodOrigin)
    {
        $this -> foodName = $aFoodName;
        $this -> foodOrigin = $aFoodOrigin;
    }

    function setFoodName($newFoodName)
    {
        $this -> foodName = $newFoodName;
    }

    function getFoodName()
    {
        return $this -> foodName;
    }

    function setFoodOrigin($newFoodOrigin)
    {
        $this -> foodOrigin = $newFoodOrigin;
    }
    function getFoodOrigin()
    {
        return $this -> foodOrigin;
    }
}