<?php 
class people{
   var $name="sai khant kyaw";
   var $age=45;
	function setName($name){
		$this->name=$name;
	}
	function setAge($age){
		$this->age=$age;
	}
	function getName(){
		echo $this->name;
	}
	function getAge(){
		echo $this->age;
	}
	private function jj(){
		echo "this is private";
	}
	protected function pp(){
		echo "this is protected";
	}
}

  $people =new people();
 // $people->setName('saisai');
 // $people->getName();

 // $people->setAge(45);
 // $people->getAge();
 

  class drink{

  	function __construct($name,$color){
  		$this->name=$name;
  		$this->color=$color;
  	}
  	function __destruct(){
  		echo "this is the last";
  	}

  	function name(){
  		echo $this->name;
  	}

  	function color(){
  		echo $this->color;
  	}
  }

class name extends people{
 function oo(){
 	$this->pp();
 }

};

class car {
  const constant="this is constant";
  function staticfunction(){
  	echo self::constant;
  }
  public static $name="toyota";

  public static function color(){
  	echo "this is the final";
  }

}
 trait gigi{
 	public function bubu(){
 		echo "you are";
 	}
 }
 trait babe{
 public function gogo(){
 	echo "my sunshine";
 }
 }

 class child{
 	use gigi;
 	use babe;
 }
 $child=new child();
 $child->bubu();
 $child->gogo();


 ?>