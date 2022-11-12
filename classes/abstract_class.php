<?php 
//abstract class example
  abstract Class country{
     public function getName(){
     	echo "abstract";
     	
     }
     public abstract function getwork();

  }

  class person extends country{
  	public function getwork(){
  		 $this->getName();
  	}
  }
 $person= new person();
 $person->getwork();

//anonymous class

 
$obj=new fighting() {

 	public function getpoo(){
 		echo "this is anonymous class";
 	}
 };
 $obj->getpoo();
 ?>