<?php

  class Car {
      public $brand;
      public $color;
     
         function getName() {

            return $this->brand;
            
         }

       function getColor() {
         return $this->color;
       }

  }

  $brumm = new Car();
  $bum = new Car ();

   $brumm ->brand = "xpander";
   $brumm ->color = "biru";
   
  $bum ->brand = "minicooper";
  $bum ->color = "mauve";

  echo $brumm->getName();
  echo "<br>";
  echo $bum->getName();
  echo $bum->getColor();


?>