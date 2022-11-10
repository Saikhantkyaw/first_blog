<?php 
namespace country;

Class country{
 private $name;
 private $pop;
 public $goodbye;

    public function __construct($name,$pop){
 	$this->name=$name;
 	$this->pop=$pop;
    }
    public function getName(){
		echo $this->name;
		
	}
	public function getpop(){
		echo $this->pop;
		
	}
	public function setgoodbye(string $goodbye){
       $this->goodbye=$goodbye;
	}
	public function getpeep(){
		echo $this->goodbye;
		
	}
}
?>