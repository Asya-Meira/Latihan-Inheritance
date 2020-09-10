<?php
class sepatu{
	public $merk, $warna, $ukuran ;

	public function gantiMerk(){
		return "Merk Diganti";
	}
}
class sepatuNike extends sepatu{
	public $data = true;

	public function mengubahData(){
		$this->data = false;
		return "Data Diubah";
	}
}

$sepatu1 = new sepatuNike();
echo $sepatu1->gantiMerk();
echo "<br>";
echo $sepatu1->mengubahData();