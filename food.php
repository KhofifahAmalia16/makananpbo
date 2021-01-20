<?php


// Class Parent 
class makanan{

	public $nama;
	
	

	public function nama_makanan($nama)
	{
		echo $this->nama = $nama;
	}
}


// Class Child 
class food extends makanan{

	public $nama;


	public function nama_makanan($nama)
	{
		echo $this->nama = $nama;
	}

}

$object1 = new makanan();
$object2 = new food();
$object3 = new food();

echo $object1->nama_makanan("soto");
echo $object2->nama_makanan("\n rawon");
echo $object2->nama_makanan("\n Nasi campur");

/*
Output :
soto rawon Nasi campur
*/