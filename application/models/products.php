<?php


class InvalidInputException extends Exception{};
class Products extends CI_Model {

    var $id   = 0;
    var $name = '';
	var $cost = 0;
	
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->database();
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
		
		
		//
	}
	
	
	
}

?>