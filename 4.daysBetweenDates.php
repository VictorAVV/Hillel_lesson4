<?php
//В двух строках содержатся даты вида День-Месяц-Год (например, 10-02-2015). 
//Определите количество дней между датами.

$myDate1 = "10-02-2015";
$myDate2 = "22-12-2018";

function daysBetweenDates1($date1, $date2) {
    
    $days = round(abs((strtotime($date1) - strtotime($date2))) / 86400);
    return $days;
}
function daysBetweenDates2($date1, $date2) {
    
    $datetime1 = new DateTime($date1);
    $datetime2 = new DateTime($date2);

    return $difference = $datetime1->diff($datetime2)->days;
}

echo "First date: $myDate1. Second date: $myDate2";
echo "<br/>";
echo "Number of days between dates (strtotime): ".daysBetweenDates1($myDate1, $myDate2);
echo "<br/>";
echo "Number of days between dates (DateTime) : ".daysBetweenDates2($myDate1, $myDate2);
echo "<br/>";

?>