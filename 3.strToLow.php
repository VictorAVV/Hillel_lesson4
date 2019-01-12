<?php
//Дана строка. 
//Преобразовать все символы кроме первого 
//в нижний регистр (без использования готовой функции).

$myString = "Apache HTTP-сервер — свободный веб-сервер. Apache является кроссплатформенным ПО, поддерживает операционные системы Linux, BSD, Mac OS, Microsoft Windows, Novell NetWare, BeOS. В январе 2016 года он работал на 33,56 % всех веб-серверов, то есть более чем на 304 млн сайтов!";
//echo $myString[15];
//echo mb_substr($myString, 15, 1);
//из-за русских символов в строке необходимо использовать mb_substr

function twoStrToArray($string1, $string2) {
    
    $position = 0;
    $strLength = mb_strlen($string1);
    
    while ($position < $strLength) { 
        $symbolArray[mb_substr($string1, $position, 1)] = mb_substr($string2, $position, 1);
        $position++;
    }
    
    return $symbolArray;
}

function strToLow($string) {

    $symbolArray = twoStrToArray("АБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯ", "абвгдеёжзийклмнопрстуфхцчшщъыьэюя");
    $symbolArray += twoStrToArray("ABCDEFGHIJKLMNOPQRSTUVWXYZ", "abcdefghijklmnopqrstuvwxyz");

    $position = 1;
    $newString = mb_substr($string, 0, 1);
    $strLength = mb_strlen($string);
    
    while ($position < $strLength) { 
        $currentSymbol = mb_substr($string, $position, 1);
        if (isset($symbolArray[$currentSymbol])) {
            $newString .= $symbolArray[$currentSymbol];
        } else {
            $newString .= $currentSymbol;
        }
        $position++;
    }
    
    return $newString;
}

echo $myString;
echo "<br>";
echo strToLow($myString);
