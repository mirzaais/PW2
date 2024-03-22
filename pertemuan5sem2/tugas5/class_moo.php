<?php
		class Hewan {
			  protected $nama;
			  protected $makanan;
		
			  public function __construct($nama, $makanan) {
				    $this->nama = $nama;
				    $this->makanan = $makanan;
			  }
		
              protected function getinfo() {
                echo "nama hewan:" . $this->nama . "<br>";
                echo "makanan:" . $this->makanan . "<br>";
                
            }
		}
		
		class Sapi extends Hewan {
            public $suara;

			  public function __construct($nama, $makanan, $suara) {
				    parent:: __construct($nama, $makanan, $suara);
                    $this->suara= $suara;

			  }
              public function getinfosapi(){
                parent:: getinfo();
                echo "suara sapi:" . $this->suara . '<br>';
              }
		}
        class Ikan extends Hewan {
            public $warna;

			  public function __construct($nama, $makanan, $warna) {
				    parent:: __construct($nama, $makanan, $warna);
                    $this->warna= $warna;

			  }
              public function getinfoikan(){
                parent:: getinfo();
                echo "warna ikan:" . $this->warna . '<br>';
              }
            }		
?>