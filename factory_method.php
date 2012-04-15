<?php
	abstract class Product{}
	
	class ConcreteProductA extends Product{}
	class ConcreteProductB extends Product{}
	
	abstract class Creator{
		abstract public function factoryMethod();
	}
	
	class ConcreteCreatorA extends Creator{
		public function factoryMethod(){
			return new ConcreteProductA();
		}
	}
	class ConcreteCreatorB extends Creator{
		public function factoryMethod(){
			return new ConcreteProductB();
		}
	}
	
	$arr=array();
	$arr[]=new ConcreteCreatorA();
	$arr[]=new ConcreteCreatorB();
	foreach($arr as $value){
		$product=$value->factoryMethod();
		echo "Created ",get_class($product), ".<br/>";
	}
?>