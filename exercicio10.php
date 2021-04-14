<?php

 function vetores ($primeiroVetor,$segundoVetor){

     foreach($primeiroVetor as $elementos){
         if($elementos == $segundoVetor){
             return "true";
         }
     }

    
         return "false";
    
 }


 $primeiroElemento = [1,2,3,4,5,6];

 $segundoElemento = [3,4,7];

 echo vetores($segundoElemento,1,2,3,4,5,6);


?>