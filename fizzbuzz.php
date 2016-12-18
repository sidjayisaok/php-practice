<?php 

#basic fizzbuzz algorithm
function fizzbuzz($param){
    for ($i=1; $i<$param; $i++){
        if($i % 3 == 0 && $i % 5 == 0){
            Print "fizzbuzz \n";
        }
        elseif($i % 3 == 0){
            Print "fizz \n";
        }
        elseif($i % 5 == 0){
            Print "buzz \n";
        }
        else{
            Print "$i \n";
        }
    }
}

#pass a parameter and call it
fizzbuzz(60);

?>