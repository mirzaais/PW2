<?php

// array biasa

//   $Animals = ['gajah','jerapah','koala'];
//   foreach ($Animals as $Animal ) {
//      echo $Animal . "   ";
//   }

//asociative array

//   $dinoss =['dinoname' => 'tricera',
//   'dinoAge' => 300,
//   'isMarried' => 'false'];

//   foreach ($dinoss as $dino) {
//     echo $dino . "  ";
//   }

  // multidimensi array

   $dinos = [
    [
      "dinoName" => "tricera",
      "dinoAge" => 600
    ],
  
 [
    "dinoName" => "rex",
    "dinoAge" => 450
 ],

[
    "dinoName" => "ptera",
    "dinoAge" => 500
],
 
];

  foreach ($dinos as $dino){
    echo $dino["dinoName"] . " = " .$dino["dinoAge"] . "tahun";
    echo "<br>";
  }

?>