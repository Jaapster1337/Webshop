<?php
	class Model extends SqlQuery
	{
		//Fields
		protected $_model;
		
		//Constructor
		public function __construct()
		{
			$this->connect(DB_HOST, DB_USER, PASSWORD, DB_NAME);
			$this->_model = get_class($this);
			//echo "Ik wordt aangeroepen door: ".$this->_model;
			$this->_table = strtolower($this->_model).'s';
			//echo "De tabel is".$this->_table;
		}	
	}
?>