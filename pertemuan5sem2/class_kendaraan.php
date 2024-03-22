<?php

class vehicle {
    protected $type;
    protected $fuel;
    

    protected function __construct($type, $fuel,) {
        $this->type = $type;
        $this->fuel = $fuel;
        
    }

    protected function getinfo() {
        echo "jenis kendaraan:" . $this->type . "<br>";
        echo "jenis bahan bakar:" . $this->fuel . "<br>";
        
    }
}

  class motor extends vehicle {

    public $wheels;

    public function __construct($type, $fuel, $wheels)
    {
        parent::__construct($type, $fuel, $wheels);
        $this->wheels = $wheels;
    }
    public function getinfomotor() {
        parent::getinfo();
        echo "jumlah roda:" . $this->wheels . "<br>";
    }
  }

  class submarine extends vehicle {
    public $max_depth;

    public function __construct($type, $fuel, $max_depth)
    {
        parent::__construct($type, $fuel, $max_depth );
        $this->max_depth = $max_depth;
    }
    public function getinfosubmarine() {
        parent::getinfo();
        echo "kedalaman maksimal:" . $this->max_depth . "<br>";
  }
  }
?>