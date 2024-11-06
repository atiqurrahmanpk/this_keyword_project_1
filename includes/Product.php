<?php 

/**
 * 
 */
class produc_t
{
	private $name;
	private $price;
	
	public function __construct($n_ame, $p_rice)
	{
		$this->name = $n_ame;
		$this->price = $p_rice;
	}

	public function getName(){
		return $this->name;
	}
	public function getPrice(){
		return $this->price;
	}
}




?>
