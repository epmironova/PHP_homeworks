<?php
	class Target{
		public function request(){
			echo "Called Target request().<br/>";
		}
	}
	
	class Adaptee{
		public function specificRequest(){
			echo "Called specificRequest().<br/>";
		}
	}
	
	class Adapter extends Target{
		private $adaptee;
		
		public function request(){
			$this->adaptee=new Adaptee();
			$this->adaptee->specificRequest();
		}
	}
	
	
	
	$target=new Adapter();
	$target->request();
?>