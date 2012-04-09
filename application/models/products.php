<?php


class InvalidInputException extends Exception{};
class Products extends CI_Model {

    var $id  = 0;
    var $name = '';
	var $cost = 0;
	
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		//$this->load->database('onzenit');
   		$this->load->database('default'); 
	}
	
	function get_products()
	{
		$query = $this->db->get('products');
		return $query->result_array();

	}
	
	function delete_product($id)
	{
		//check if id is valid
		if(strlen($id) != 6){
			throw new InvalidInputException('Product ID: Must have 6 numbers');
		} elseif (!preg_match("/[0-9]{6}/", $id)) {
			throw new InvalidInputException('Product ID: Must be numeric');
		}
		
		//need to check if database has id
		$query = $this->db->get_where('products', array('id'=>$id));
		
		if($query->num_rows() == 0)
		{
			throw new InvalidInputException('Product ID: Must exist in database');
		}
	}
	
	public function add_product($input) {
		$id = $input['id'];
		$name = $input['name'];
		$quantity = $input['quantity'];
		$cost = $input['cost'];
			
		//check if id is valid
		if(strlen($id) == 0)
		{
			throw new InvalidInputException('Product ID: Must input');
		}
		elseif(strlen($id) != 6){
			throw new InvalidInputException('Product ID: Must have 6 numbers');
		}
		elseif (!preg_match('/^[0-9]{6}$/', $id)) {
			throw new InvalidInputException('Product ID: Must input numeric');
		}
		else
		{
			$query = $this->db->get_where('products', array('id'=>$id));
			if($query->num_rows() > 0)
			{
				throw new InvalidInputException('Product ID: Already exists in Products table');	
			}
		} 	
		
		//check if name is valid
		if(strlen($name) == 0)
		{
			throw new InvalidInputException('Product Name: Must input');
		}
		elseif(strlen($name) > 50)
		{	
			throw new InvalidInputException('Product Name: Must be less than 50');
		}
		
		//check if quantity is valid
		if(strlen($quantity) == 0) 
		{
			throw new InvalidInputException('Product Quantity: Must input ');
		}
		elseif(strlen($quantity) > 4)
		{
			throw new InvalidInputException('Product Quantity: Must be less than 4');
		}
		elseif (!preg_match('/^[0-9]+$/', $quantity)) 
		{
			throw new InvalidInputException('Product Quantity: Must be a +ve number and fractional qty not allowed');
		} 
		
		//check if cost is valid
		if(strlen($cost) == 0)
		{
			$errorMessages[] = "Product Cost: Must input Cost";
			throw new InvalidInputException('Product Cost: Must input numeric');
		}
		elseif (preg_match('/^[0-9]+$/', $cost))
		{
			$cost = $cost.".00";
		}
		elseif (preg_match('/^[0-9]+[.][0-9]$/', $cost))
		{
			$cost = $cost.".0";		
		}
		elseif (!preg_match('/[.][0-9]{2}$/', $cost)) 
		{
			throw new InvalidInputException('Product Cost: Must input a +ve number with 2 decimals');
		} 
		
		//insert new record
		$array = array('id' => $id, 'name' => $name, 'cost' => $cost, 'quantity'=> $quantity);
        $this->db->set($array);
		$result = $this->db->insert('products');
		
		//insert validation check
		if(!$result)
		{
			throw new InvalidInputException('Error in adding record');
		}
		else
		{
			throw new InvalidInputException("Record for ID [".$id."] added successfully!");
		}
	
	}
	
}

?>