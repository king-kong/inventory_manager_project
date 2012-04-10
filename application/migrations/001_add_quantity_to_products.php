<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_Quantity_To_Products extends CI_Migration {

	public function up()
	{
		$fields = array('quantity' => array('type'=> 'VARCHAR(255)', 'null' => TRUE));
		
		$this->dbforge->add_column('products', $fields);
	}

	public function down()
	{	
		$this->dbforge->drop_column('products', $fields);
	}
}

?>