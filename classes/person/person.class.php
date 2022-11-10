<?php 
namespace person;
Class person{

	public $name;
	public $age;
	public static $drinking_age;
    public function __construct($name,$age){

    	$this->name=$name;
    	$this->age=$age;
    }
	
	public function getName(){
		echo $this->name;
		
	}
	public function getAge(){
		echo $this->age;
		
	}
	public static function NewDrinkingAge($DNA){
        self::$drinking_age = $DNA;
	}


}
 ?>