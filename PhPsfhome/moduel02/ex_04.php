<?php
// //khai báo
$age=30.5;
// var_dump($age);
// // ép kiểu
$age = (int)$age;
// //check kieu so nguyen
$check = is_int($age);
$check = is_integer($age);

// var_dump($check);
// kieu boolean
$check = 1;
$check = (bool)$check;
//$checkbool = is_bool($check);
//var_dump($check);
//kieu so thuc
// $fee = 10;
// $fee = (float)$fee;
// var_dump($fee);
// echo '<br/>';
// var_dump(is_float($fee));
// $message = 10;
// $message = (string)$message;
// $checkString = is_string($message);
// var_dump($message);
// echo '<br/>';
// var_dump($checkString);
//kiểu mảng
// $carArray = [];
// $carArray =(array)$carArray;
// $checAarray = is_array($carArray);
// var_dump($carArray);
// echo '<br/>';
// var_dump($checAarray);
//kiểu dữ liệu
$dataCustomer = [
    'Hoang Tan'
];
//$dataCustomer = (object)$dataCustomer; //ép kiểu
$checkObject = is_object($dataCustomer);
var_dump($dataCustomer);
echo '<br/>';
var_dump($checkObject);
/*
 */