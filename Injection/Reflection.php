<?php
abstract class Profile {
   /**
    * //this program is just for testing how it is working
    * @return string
    */

    
   public function getUserName()
   {
      return 'Foo';
   }
}
$reflectionClass = new ReflectionClass('Profile');
echo ($reflectionClass->getName());
var_dump($reflectionClass->getDocComment());
var_dump($reflectionClass->getEndLine());
?>