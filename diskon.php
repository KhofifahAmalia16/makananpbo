<?php
require __DIR__ . "/food.php";
require __DIR__ ."/topping.php";

 class Discount{
   public $bill;

   public function __construct($bill)
   {
      $this->bill = $bill;
   }
   public function Count(){

   foreach ($this->Menu as $pricetag) {
}
    foreach ($this->AToping as $Aprice) {

}foreach ($this->BToping as $Bprice) {

}
if ($this->Menu['nasicampur'] && $this->AToping && $this->BToping){
    $bill = (($pricetag) + ($Aprice) + ($Bprice));
    echo $bill;
}

//if ($this->Menu['rawon'] OR $this->Menu['soto'] && ($AAA * $this->AToping) && ($BBBB * $this->BToping){
   //$bill = (($pricetag) + ($AAA * $APrice) + ($BBBB * $BPrice));
   // echo $bill;
//}
 }
}

?>