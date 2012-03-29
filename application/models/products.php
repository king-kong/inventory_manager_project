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
		#$data['var1'] = $this->products->get_products();``
		#$this->load->view('home',$data);
		$id = $input['id'];
		$name = $input['name'];
		$cost = $input['cost'];
		
		echo "id: " + $id;
		echo "name: " + $name;
		echo "cost: " + $cost;
		
		$errorMessages = array();
		//check if id is valid
		if(strlen($id) == 0){
			$errorMessages[] = "Product ID: ID blank";
		}
		
		if(strlen($id) != 6){
			throw new InvalidInputException('Product ID: Must have 6 numbers');
		} elseif (!preg_match("/[0-9]{6}/", $id)) {
			throw new InvalidInputException('Product ID: Must be numeric');
		} 
		
		
		
		//need to check if database has id
		$array = array('id' => $id, 'name' => $name, 'cost' => $cost);
        $this->db->set($array);
		$this->db->insert('products');
		
	}
	
	
	
	
	
	
	
}

?>