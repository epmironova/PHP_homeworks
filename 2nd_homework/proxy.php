<?php
/* Proxy Pattern:
Sometimes we need the ability to control the access to an object. 
For example if we need to use only a few methods of some costly objects we'll 
initialize those objects when we need them entirely. Until that point we can use 
some light objects exposing the same interface as the heavy objects. These light objects 
are called proxies and they will instantiate those heavy objects when they are really 
need and by then we'll use some light objects instead.
*/

	abstract class Subject{
		abstract public function Request();
	}
	
	class RealSubject extends Subject{
		public function Request(){
			echo "Called RealSubject->Request()";
		}
	}
	
	class Proxy extends Subject{
		private $realSubject;
		
		public function Request(){
			if($this->realSubject==null){
				$this->realSubject=new RealSubject();
			}
			$this->realSubject->Request();
		}
	}
	
	$proxy=new Proxy();
	$proxy->Request();
?>