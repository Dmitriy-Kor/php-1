<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:
a. Если $a и $b положительные, вывести их разность.
b. Если $а и $b отрицательные, вывести их произведение.
c. Если $а и $b разных знаков, вывести их сумму.
Ноль можно считать положительным числом. -->
    <?php
        $a = -12;
        $b = -3;
        if ($a >= 0 && $b >= 0){
            echo ($a - $b );
        } elseif ($a < 0 && $b < 0) {
            echo ($a * $b);
        } else {
            echo ($a + $b);
        }

    ?>
    <hr>
    
    <!-- Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15. -->
    <?php
    $a = 0;
    switch ($a) {
        case 0: {
            echo $a;
            $a++;
        }
        case 1: {
            echo $a;
            $a++;
        } 
        case 2: {
            echo $a;
            $a++;
        } 
        case 3: {
            echo $a;
            $a++;
        } 
        case 4: {
            echo $a;
            $a++;
        } 
        case 5: {
            echo $a;
            $a++;
        }
        case 6: {
            echo $a;
            $a++;
        }
        case 7: {
            echo $a;
            $a++;
        }
        case 8: {
            echo $a;
            $a++;
        }
        case 9: {
            echo $a;
            $a++;
        }
        case 10: {
            echo $a;
            $a++;
        }
        case 11: {
            echo $a;
            $a++;
        }
        case 12: {
            echo $a;
            $a++;
        }
        case 13: {
            echo $a;
            $a++;
        } 
        case 14: {
            echo $a;
            $a++;
        }  
        case 15: {
            echo $a;
            $a++;
        }                   
    }     
?>
<hr>

<!-- Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return. -->
<?php
    $a = 16;
    $b = 4;
    echo "число a = ". $a . " число b = " . $b ."<br>";
    
    function addition($a, $b) {
        return $a + $b;
    }
    echo addition($a, $b). " прибавление </br>";

    function subtraction($a, $b) {
        return $a - $b;
    }
    echo subtraction($a, $b). " вычитание </br>";
    
    function multiplication($a, $b) {
        return $a * $b;
    }
    echo multiplication($a, $b). " умножение </br>";

    function division($a, $b) {
        return $a / $b;
    }
    echo division($a, $b). " деление </br>";

    // Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции.
    // В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).

    function arithmetic($a, $b, $operation){
        switch ($operation) {
            case "addition": {
               return addition($a, $b);  
            }
            case "subtraction": {
                return subtraction($a, $b);
            } 
            case "multiplication": {
                return multiplication($a, $b);
            } 
            case "division": {
                return division($a, $b);
            }                 
        } 
    }
    echo arithmetic($a, $b, "subtraction")."<br>";
?>
<hr>

<!-- *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень. -->
<?php 
    function power($val, $pow){
        if ($val == 0){
            return 0;
        } elseif ($pow == 1){
            return $val;
        } elseif ($pow < 0){
            return power(1/$val, -$pow);
        } else{
            return $val * power($val, $pow - 1);
        } 
    }
    $val = 4;
    $pow = 3;
    echo "Число ".$val." в степени ".$pow. " равно = ".power($val, $pow);
?>
<hr>

<!-- Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например: 22 часа 15 минут, 21 час 43 минуты -->
<?php
    $hour = date("H");
    //$hour = 13;
    //$minuts = date("i");
    $minuts = 59;
    function writeHour($hour){
        if (($hour > 4 && $hour < 21) || ($hour == 0)){
            echo $hour." Часов ";
        } elseif(($hour > 1 && $hour < 5) || ($hour > 21 && $hour < 24)){
            echo $hour." Часа ";
        } else {
            echo $hour." Час ";
        }
    }

    function writeMinuts($minuts){
        if ((mb_substr($minuts,-1) == 1) && ($minuts != 11)) {
            echo $minuts." минута ";
        } elseif (($minuts > 4 && $minuts < 21) || (mb_substr($minuts,-1) > 4) || (mb_substr($minuts,-1) == 0)) {
            echo $minuts." минут ";
        } else {
            echo $minuts." минуты ";
        }
    }
    
    writeHour($hour);
    writeMinuts($minuts);
?>
<hr>

</body>
</html>