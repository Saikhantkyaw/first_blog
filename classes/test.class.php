<?php 
  class person{
     protected static $name="sai khant kyaw";
  	const hobby= "coding and sovling problem";
    public static function gethobby(){
    	echo self::hobby;
    }
  }
 class work extends person {

 	public static function getwork(){
 		echo parent::hobby;
 		echo parent::$name;
 	}
 }

   echo person::hobby;
 work::getwork();
 ?>
