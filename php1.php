<?php 
	class laptop
	{
		public $merk;

		public function nyalakan()
		{
			return 'Hidupkan laptop '.$this->merk;
 		}
	}

	$laptop1 = new laptop();
	$laptop1->merk = 'asus';
	echo $laptop1->nyalakan();
 ?>