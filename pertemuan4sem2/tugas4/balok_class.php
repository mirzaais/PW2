<?php
		

    class Balok {
        private $Panjang;
        private $Lebar;
        private $Tinggi;
    
        public function __construct($p, $l, $t) {
		        $this->Panjang = $p;
                $this->Lebar = $l;
                $this->Tinggi = $t;
        }
    
        public function getLuas() {
					 return 2 * (
                        ($this->Panjang * $this->Lebar) + ($this->Panjang * $this->Tinggi) + ($this->Lebar * $this->Tinggi)
                     );
		}
    
        public function getKeliling() {
                      return 4 * ($this->Panjang + $this->Lebar + $this->Tinggi);

        }
    
        public function getVolume() {
                     return $this->Panjang * $this->Lebar * $this->Tinggi;  
        }
    }
?>