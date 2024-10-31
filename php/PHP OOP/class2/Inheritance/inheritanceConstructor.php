<?php

 class Father{
   public function __construct()
   {
    echo "Father's Constructor.\n" ;
   }

}
class Son extends Father{
    public function __construct()
   {
    echo "Son's Constructor.\n" ;
   }
    
}



new Father() ;
new Son() ;

?>