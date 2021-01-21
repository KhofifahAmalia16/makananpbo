<?php

class makanan{

    public $name;
    public $food = array("soto", "rawon", "nasicampur");

    public function daftarmakanan() {
    echo "**Menu Makanan** : "."\n";
    echo "Soto 20000"."\n";
    echo "Rawon 15000"."\n";
    echo "Nasi campur 20000"."\n";
    

        $this->name = "makanan :";
        $this->addmakanan("daftar ");
        
        $random = array_rand($this->food);
            echo $this->food[$random];
            
    }

    function addmakanan($s){
        $s.= " " . $this->name;

       
    }

}

$makanan = new makanan;
$makanan->daftarmakanan();

?>