<?php
	class Singleton {	
		private static $instance;

		private function __construct(){}

		public static function getInstance()
		{
			if (!isset(self::$instance)) {
				echo 'Creating new instance.';
				$className = __CLASS__;
				self::$instance = new $className;
			}
			return self::$instance;
		}	
	}
	
	$inst=Singleton::getInstance();
?>