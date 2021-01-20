<?php

 class topping {

   public $TopingA = Array ("krupuk" => 500, 
                            "selada" => 50, 
                            "garam" => 3, 
                            "gula" => 1);

   public $toppingB = Array ("AyamSuwir" => 3000, 
                            "Daging" => 1000) ;
   
   

   public function __construct ($toppingA , $toppingB)
   {
      $this->toppingA = $toppingA;
      $this->toppingB = $toppingB; 
      
   }

   public function tampil(){
   foreach ($toppingA as $price); {

  
}
    foreach ($toppingB as  $price); {


}

if ($toppingA['kerupuk'] and $price){
    $tampil= (($toppingA) + ($price));
    echo "kerupuk 300";
}

}
}

?>