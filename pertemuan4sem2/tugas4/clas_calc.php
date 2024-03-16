<?php
    class Calculator {
        public $bil1;
        public $bil2;

        public function __construct($bilangan1, $bilangan2) {
            $this->bil1 = $bilangan1;
            $this->bil2 = $bilangan2;
        }

        public function getPluss(){
           return $this->bil1 + $this->bil2; 
        }

        public function getMines(){
            return $this->bil1 - $this->bil2;
        }

        public function getBagi(){
            return $this->bil1 / $this->bil2;
        }

        public function getKali(){
            return $this->bil1 * $this->bil2;
        }

    }

    
    $calculator = new Calculator(10, 2);

    echo '<br> Calculator';
    echo '<br>';
    echo '<br> 10 + 2 = ' . $calculator->getPluss();
    echo '<br> 10 - 2 = ' . $calculator->getMines();
    echo '<br> 10 : 2 = ' . $calculator->getBagi();
    echo '<br> 10 * 2 = ' . $calculator->getKali();

    
?>