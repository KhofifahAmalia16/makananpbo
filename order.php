<?php  

require 'food.php'; 
echo "\n";

require 'topping.php';
echo "\n";

class Payment extends topping{

    public $name;
    public $pricefood = 20000;
    public $topping;
    public $total;

    public function getData ($pricefood,$jumlah,$total){
        
        $this->pricefood = $pricefood;
        $this->topping = $topping;
        $this->total = $total;
        return $this->Pembayaran;

    }

    public function addnametostring($s){
        $s.= " " . $this->name;
        echo "$s \n";
    }
    
    public function hasil() {
     
        $this->addnametostring(" Total pembayaran");
        
        if ($this->$food['soto'] && $this->$toping['ayam suwir dan daging']){

            $this->jumlah = ($this->pricefood) + ($this->food['soto']) + ($this->topping['ayam suwir dan daging']);      
        } 
       
        else {
            $this->total = $this->pricefood + $this->topping;
            
        }
        return $this->total;

    }

}

$pay = new Payment;
echo $pay->hasil();


?>