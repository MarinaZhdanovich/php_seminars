<?php
/* Даны два упорядоченных массива, например,
[1, 4, 6, 6, 8]
[2, 5, 7, 9]
Нужно написать логику, которая сольёт массивы в один упорядоченный по
возрастанию значений
[1, 2, 4, 5, 6, 6, 7, 8, 9]
Важно учесть граничные условия:
- элементы могут повторяться
- массивы могут быть произвольной длины
*/
$array1 = [1, 4, 6, 6, 8];
$array2 = [2, 5, 7, 9];

//$merge = array_merge($array1, $array2);
//
//sort($merge);
//
//print_r($merge);
//echo json_encode($merge);

$result = [];

$count1 = 0;
$count2 = 0;

while ($count1 < count($array1) && $count2 < count($array2)) {
    if ($array1[$count1] < $array2[$count2]) {
        $result[] = $array1[$count1];
        $count1++;
    } else {
        $result[] = $array2[$count2];
        $count2++;
    }
}

if ($count1 < count($array1)) {
    for (; $count1 < count($array1); $count1++) { //Если после основного цикла в первом массиве остались элементы
         $result[] = $array1[$count1];
    }
}

if ($count2 < count($array2)) {
    for (; $count2 < count($array2); $count2++) { //инициализация пропущена переменная $count2 уже была объявлена ранее и её значение уже определено.
        $result[] = $array2[$count2];
    }
}

echo "<pre>";
print_r($result);
