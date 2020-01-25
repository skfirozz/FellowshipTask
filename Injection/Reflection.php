<?php
abstract class Profile {
   /**
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