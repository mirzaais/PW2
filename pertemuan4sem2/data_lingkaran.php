<?php
  require_once 'class_linkaran.php';
   echo "nilai PHI" . Lingkaran::PHI;

   $lingkaran1 = new Lingkaran(7);
   $lingkaran2 = new Lingkaran(60);
   echo '<br>';

   echo '<br>Luas lingkaran 1 = ' . $lingkaran1->getLuas() . 'cm';
   echo '<br>keliling lingkaran 1 = ' . $lingkaran1->getKel() . 'cm';

   echo '<br>';

   echo '<br>keliling lingkaran 2 = ' . $lingkaran2->getLuas() . 'cm';
   echo '<br>keliling lingkaran 2 = ' . $lingkaran2->getKel() . 'cm';


?>