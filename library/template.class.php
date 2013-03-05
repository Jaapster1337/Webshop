<?php
	class Template
	{
		//Fields
		protected $_controller;
		protected $_action;
		
		//Constructor
		public function __construct($controller, $action)
		{
			$this->_controller = $controller; 	//users
			$this->_action = $action; 			//viewall
		}
		
		public function render()
		{
			if (file_exists(ROOT.DS.'application'.DS.'views'.DS.$this->_controller.DS.$this->_action.'.php'))
			{
				require_once(ROOT.DS.'application'.DS.'views'.DS.$this->_controller.DS.$this->_action.'.php');
			}
			else
			{
				echo 'De view behorende bij de method: '.$this->_action.' bestaat nog niet';
			}
		}
	}
?>