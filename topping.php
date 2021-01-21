<?php

class topping{

    public $name;
    public $topping = Array ("krupuk" => 500, "selada" => 50, "garam" => 3, "gula" => 1, "AyamSuwir" => 3000,  "Daging" => 1000) ;
   
    public $random;

    public function daftartopping() {

        echo "***Daftar Topping***"."\n";
        $this->name = "topping :";

        $this->addtopping("Daftar ");

        $this->random = array_rand($this->topping,6);
            echo ($this->random[0])." : ". $this->topping[$this->random[0]]. "\n";
            echo ($this->random[1])." : ". $this->topping[$this->random[1]]. "\n";
            echo ($this->random[2])." : ". $this->topping[$this->random[2]];
            echo ($this->random[3])." : ". $this->topping[$this->random[3]]. "\n";
            echo ($this->random[4])." : ". $this->topping[$this->random[4]]. "\n";
            echo ($this->random[5])." : ". $this->topping[$this->random[5]];
            
            
           
    }

    public function addtopping($s){
        $s.= " " . $this->name;
        echo "$s \n";
    }

}

$topping = new topping;
$topping->daftartopping();

?>