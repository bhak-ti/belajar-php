<?php

namespace House;

class House{
        private $houseName;
        private $address;

        function __construct($aHouseName,$aAddress)
        {
                $this -> houseName = $aHouseName;
                $this -> address   = $aAddress;
        }

        function setHouseName($aNewHouseName){
                $this -> houseName = $aNewHouseName;
        }

        function getHouseName(){
                return $this -> houseName;
        }

        function setAddress($aNewAddress){
                $this -> address = $aNewAddress;
        }

        function getAddress(){
                return $this -> address;
        }
}
