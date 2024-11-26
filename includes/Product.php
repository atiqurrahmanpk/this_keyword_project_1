<?php 

/**
 * 
 */
class produc_t
{
	private $name;
	private $price;
	private $image;
	
	public function __construct($n_ame, $p_rice, $i_mage)	
	{
		$this->name = $n_ame;
		$this->price = $p_rice;
		$this->image = $i_mage;
	}

	public function getName(){
		return $this->name;
	}
	public function getPrice(){
		return $this->price;
	}
	public function getImage(){
		return $this->image;
	}
}




?>
