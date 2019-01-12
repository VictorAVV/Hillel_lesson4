<?php
//Дан номер месяца. Написать функцию вывода названия поры года (весна, лето и так далее) 
//или слово 'Ошибка', если месяца с таким номером не существует.

$myMonth = 3;

function timeOfYear($month) {
   
    if (!is_int($month) || $month < 1 || $month > 12) {
        return "Ошибка";
    }

    $timeOfYearArr[12] = $timeOfYearArr[1] = $timeOfYearArr[2] = "зима";
    //$timeOfYearArr[3] = $timeOfYearArr[4] = $timeOfYearArr[5] = "весна";
    //$timeOfYearArr[6] = $timeOfYearArr[7] = $timeOfYearArr[8] = "лето";
    //$timeOfYearArr[9] = $timeOfYearArr[10] = $timeOfYearArr[11] = "осень";
    
    $timeOfYearArr += array_fill(3, 3, 'весна');
    $timeOfYearArr += array_fill(6, 3, 'лето');
    $timeOfYearArr += array_fill(9, 3, 'осень');

    return $timeOfYearArr[$month];
}

echo "Номер месяца: $myMonth";
echo "<br/>";
echo "Пора года: ".timeOfYear($myMonth);
