<?php

require_once "./calc.php";

echo "Hello!<br>";
echo "Shalom<br>";
echo "Sali!<br>";
echo "Hoi!<br>";

echo getSum(1, 2, 3);

echo "<br>";

echo "This is the average of the numbers:" . getAverage(10, 10, 10);

$firstName = "Bart";
$lastName = "Simpson";
$age = 12;

echo "<br>";

echo $firstName ." " . $lastName ." ". $age;

echo "<br>";

echo "first Name : $firstName Last Name:  $lastName Age: $age";

echo "<br>";

positiveNegative(-23);

echo "<br>";

positiveNegative(23);

echo "<br>";

echo getMax(1,2) . " - this is the max num!";

echo "<br>";

displayMsg("Hi, this is PHP talking!", 2);

echo "<br>";

// while
$count = 1;
while($count<=10){
    echo "*" . $count . " ";
    $count++;
}

echo "<br>";

$certainArr = array(10,20,30);
for($i=0; $i<count($certainArr);$i ++){
    echo $certainArr[$i] . " ";
}

echo "<br>";

foreach($certainArr as $value){
    echo $value . " ";
}

echo "<br>";

foreach($certainArr as $value){
    echo "value of foreach:  " . $value . " <br>";
}

$employee = new stdClass();
$employee->salary = 1000;
$employee->name = "Moshe"; //object (Literal Object) field-name WITHOUT $!!!
$employee->rank = "senior";

echo "Employee Name: $employee->name, Salary: $employee->salary, rank: $employee->rank ";