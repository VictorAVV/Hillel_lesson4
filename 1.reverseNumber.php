<?php
//Написать функцию нахождения числа, полученное выписыванием в обратном порядке цифр данного трехзначного натурального числа.

$myNumber = 456;

echo "Original number: $myNumber";
echo "<br/>";
echo "1. strrev() / Reversed number: ".strrev($myNumber);

function myStrlen($string) {
    $position = 0;
    while (isset($string[$position])) {
        $position++;
    }
    return $position;
}

function myReverse1($number) {
    //если мы знаем, что в аргумент передается натуральное трехзначное число 
    $number = (string)$number;
    return $number[2].$number[1].$number[0];
}

function myReverse2($number) {
    //более универсальная функция реверса чисел или строк с латинскими символами
    if (!is_numeric($number) && !is_string($number)) {
        return null;
    }
    
    $position = 0;
    $reversed = "";
    $number = (string)$number;
    
    while (isset($number[$position])) {
        $reversed = $number[$position].$reversed;
        $position++;
    }
    
    return $reversed;
}

echo "<br/>"; 
echo "2. myReverse1() / Reversed number: ".myReverse1($myNumber);
echo "<br/>"; 
echo "3. myReverse2() / Reversed number: ".myReverse2($myNumber);

$myNumber = 'Русскиe символы';
function myReverseRu($string) {
    //для реверса строк с русскими символами
    if (!is_numeric($string) && !is_string($string)) {
        return null;
    }
    
    $position = 0;
    $reversed = "";
    $strLength = mb_strlen($string);
    
    while ($position < $strLength) { 
        $reversed = mb_substr($string, $position, 1).$reversed;
        $position++;
    }
    
    return $reversed;
}
echo "<br/>"; 
echo "4. myReverseRu() / Reversed number: ".myReverseRu($myNumber);

?>