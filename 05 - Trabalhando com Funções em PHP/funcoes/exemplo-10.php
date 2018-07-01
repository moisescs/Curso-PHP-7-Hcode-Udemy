<?php

function test($callback){
    
      //Proceso lento
      $callback();
}

test(function(){
   
   echo "Terminou";
    
});

?>