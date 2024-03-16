<?php 
    require_once 'balok_class.php';
    
    $balok1 = new Balok(12,16,8);
    $balok2 = new Balok(21,15,5);
    $balok3 = new Balok(30,18,5);
    $balok4 = new Balok(39,17,7);

    echo '<br>Luas Balok 1 = ' . $balok1->getLuas() . ' cm^2';
    echo '<br>Keliling Balok 1 = '. $balok1->getKeliling() . ' cm^2';
    echo '<br>Volume Balok 1 = '. $balok1->getVolume() . ' cm^3';
    echo '<br><br>';

    echo '<br>Luas Balok 2 = ' . $balok2->getLuas() . ' cm^2';
    echo '<br>Keliling Balok 2 = '. $balok2->getKeliling() . ' cm^2';
    echo '<br>Volume Balok 2 = '. $balok2->getVolume() . ' cm^3';
    echo '<br><br>';

    echo '<br>Luas Balok 3 = ' . $balok3->getLuas() . ' cm^2';
    echo '<br>Keliling Balok 3 = '. $balok3->getKeliling() . ' cm^2';
    echo '<br>Volume Balok 3 = '. $balok3->getVolume() . ' cm^3';
    echo '<br><br>';
    
    echo '<br>Luas Balok 4 = ' . $balok4->getLuas() . ' cm^2';
    echo '<br>Keliling Balok 4 = '. $balok4->getKeliling() . ' cm^2';
    echo '<br>Volume Balok 4 = '. $balok4->getVolume() . ' cm^3';
    ?>