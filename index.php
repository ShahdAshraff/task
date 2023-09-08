<?php 
//1 - Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no hyphen(-) at starting and ending position
for ($i = 1; $i < 10; $i++) {
  echo $i."-";
}
 echo"10";
 echo"<br>";
//2 - Write a PHP program which iterates the integers from 1 to 50. For multiples of three print "Fizz" instead of the number and for the multiples of five print "Buzz". For numbers which are multiples of both three and five print "FizzBuzz" 

for($i=1;$i<=50;$i++){
    if($i%3==0 && $i%5==0)
    echo "fizzbuzz .<br>";
    elseif($i%3==0)
    echo"fizz.<br>";
    elseif($i%5==0)
    echo"buzz.<br>";
}
echo "<br>";
//3 - Create a script using a for loop to add all the integers between 0 and 30 and display the total 
$sum=0;
for($i=0;$i<=30;$i++)
{ $sum+=$i;

}
echo $sum."<br>";

 /*4 - Write a program to calculate and print the factorial of a number using a for loop. The factorial of a number is the product of all integers up to and including that number
 Example : the factorial of 4 is 4*3*2*1= 24 */
 $num=1;
 for($i=4; $i>1;$i--){
    $num*=$i;
 }
 echo $num;
 echo"<br>";
 //5- Write a PHP program that prints the odd numbers from 1 to 15 using a while loop.
 $i=1;
 while($i<=15){
    if($i%2 !=0){
        echo $i." ";
    }
    $i++;

 }
 echo"<br>";
 //6 - Write a PHP program that prints the even numbers from 1 to 15 using a while loop.
  $i=1;
 while($i<=15){
    if($i%2 ==0){
        echo $i." ";
    }
    $i++;

 }
 echo"<br>";
 //7 - Write a PHP program that prints all the numbers between 1 and 100 that are divisible by 3 using a do while loop.
$i=1;
do{
    if($i%3==0){
    echo $i." ";}
    $i++;
}
while($i<=100);
echo"<br>";
/*
8-Make a calculator with these operations using if and else if
o Submission 
o Subtraction 
o Multiplication 
o Division 
o Power 
o Modulus */
$operation="+";
$num1=2;
$num2=3;
$result=0;
if($operation=="+"){
    $result=$num1+$num2;
}
elseif($operation=="-"){
    $result=$num1-$num2;
}
elseif($operation=="*"){
    $result=$num1*$num2;
}
elseif($operation=="/"){
    $result=$num1/$num2;
}
elseif($operation=="power"){
    $result=$num1*$num1;
}
elseif($operation=="%"){
    $result=$num1 % $num2;
}
echo"$result";







