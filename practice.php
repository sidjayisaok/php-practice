<?php

#remember PHP is synchronous so the order matters here 
#variables in PHP use the $ symbol

#local versus global scoping
$var = 4;

#function example
function switchVar (){
    $var = 0;
    #this will return zero
    print "\$var is $var in this case.\n";
}
#call variable
switchVar();
#this will return 4
print "\$var here is $var however.\n";

#to use global variable, use the GLOBAL keyword
function dontSwitch (){
    GLOBAL $var;
    $var++;
    print "Now \$var is $var.\n";
}
#call variable
dontSwitch();

#to make variable keep count in next function call, use the STATIC keyword
#static appears to need to be assigned to a value first
function tallyNumber (){
    STATIC $var = 0;
    $var++;
    print "Here \$var will be \n";
    print $var;
    print "\n";
}
#every call will return $var + 1 like a loop
tallyNumber();
tallyNumber();
tallyNumber();

#function to return number by constant amount
function mult ($number){
    $number = $number * 2;
    return $number;        
}
#call the function
$myResult = mult (11);
#print on screen
Print "My result is $myResult.\n";
    #basic conditional
    if ($myResult > 20)
        echo "this is greater than 20.\n";
    elseif ($myResult < 20)
        echo "this is less than 20. \n";
    else
        echo "this is exactly 20. \n";

#constants work a bit different than their ES6 counterpart
define("myConstant", 2.75);
print constant("myConstant");
print "\n";

#loops again are similar to javascript
for ($i=0; $i<5; $i++){
   $var += 10;
}

Print ("Our loop made \$var = $var here.\n");

#basic while loop
$start = 0;
$tally = 30;
#countdown tally to 20 while start counts up to 10
while($start < 10){
    $tally--;
    $start++;
}

Print ("When the loop for \$start reaches $start the \$tally will reach $tally. \n");

#iterate over an array using the foreach operator
function loopArray($array){
    foreach($array as $value){
        #basic conditional in the foreach iteration
        #the continue placeholder skips over an iteration
        if($value % 3 == 0)continue;
        Print "This is now worth $value. \n";
    }
}
#this is one way to write an array in PHP
$myarray = array(2,3,5,8,13,21,34,55,89);
#call the function
loopArray($myarray);

#another array type, this one is nested
$newArray = array(
    "Donald Duck" => 10,
    "Mickey Mouse" => 20,
    "Goofy" => 5,
    "Bluto" => 50
);
#call array elements using . $var['element'] . format
Print "Donald Duck has a power rating of ". $newArray['Donald Duck'] . "\n";
Print "Mickey Mouse has a magic rating of ". $newArray['Mickey Mouse'] . "\n";
Print "Goofy has an intelligence rating of ". $newArray['Goofy'] . "\n";
Print "Bluto has a resistance rating of ". $newArray['Bluto'] . "\n";


#using single quotes will ignore the variable value. Use it for literal quotes
$exampleA = '$var is just $var here.';
$exampleB = "\n Now it is $var. \n";
Print($exampleA);
Print($exampleB);

#basic function 
function addStuff($num1, $num2){
    $newNum = $num1**$num2 + $num2**$num1;
    return $newNum;
}

$testTotal = addStuff(2,4);
Print "You now have $testTotal as a value \n";

#testing out ereg() function to detect string
function testEreg($param){
    $retval = ereg("(\.)(com$)", $param);

    if($retval == true){
        Print "This string contains a .com \n";
    }
    else{
        Print "There was no .com detected \n";
    }
}
#test variables
$testString1 = "myface.com";
$testString2 = "myfacecom";
#calling test functions for ereg
testEreg($testString1);
testEreg($testString2);

#use ereg_replace() to swap one set of string with another
function replaceString($param){
    $swapval = ereg_replace("(\.)(com$)", ".co.uk", $param);

    Print "The web address is now $swapval \n";
}

#call function
replaceString($testString1);

#use split() to split into array based on string 
function splitString($param){
    $thisString = split("\.", $param);

    Print "$thisString[0] \n";
    Print "$thisString[1] \n";
}

#call function
splitString($testString1);

?>