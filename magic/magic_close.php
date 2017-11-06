<?php
class String{
 
   public function __call($name, $arguments){
      if (strpos($name,'upper') !== false) {
        return strtoupper($arguments[0]);
      }
   }
 
   public static function __callStatic($name, $arguments){
      if (strpos($name,'upper') !== false) {
        return strtoupper($arguments[0]);
      }      
   }
}
 
$string = new String();
 
echo $string->upper("minha string");
echo String::upper("minha string");