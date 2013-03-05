<?php
	class Controller
	{
		//Fields
		protected $_model;
		protected $_controller;
		protected $_action;
		
		//Constructor
		public function __construct($model, $controller, $action)
		{
			$this->_model = $model;
			$this->_controller = $controller;
			$this->_action = $action;
		}	
	}
?>