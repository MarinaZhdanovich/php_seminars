<?php
/*
Написать функцию, которая принимает на вход число, а затем возвращает
булевский ответ – простое ли оно.

Для всех i от 1 до 10 {
    проверить, делится ли число i на какое-либо из чисел до него
 если делится, то это i не подходит, берём следующее
 если не делится, то i - простое число
}
*/

function isPrime( int $number): bool {
    if ($number <= 1) {
        return false;
    }
    // Проверяем делимость от 2 до квадратного корня числа
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false; // Если делится, то не простое
        }
    }
    return true; // Если ни на одно не делится, значит простое
}


for ($i = 1; $i <= 10; $i++) {
    if (isPrime($i)) {
        echo "$i - простое число\n";
    } else {
        echo "$i - не простое число\n";
    }
}