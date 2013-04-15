<?php
 class Model extends SqlQuery
 {
	//Fields
	protected $_model;
	protected $_table;
	
	//Constructor
	public function __construct()
	{
		$this->connect(DB_HOST, DB_USER, PASSWORD, DB_NAME);
		$this->_model = get_class($this);
		$this->_table = strtolower($this->_model).'s';	
	} 
 }
?>