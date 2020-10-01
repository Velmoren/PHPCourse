<?

$arr = [];

//вывод простых чисел
for ($i = 2; $i <= 100; $i++) {
    $numberEach = 0;
    for ($j = 1; $j <= $i; $j++) {
        if ($i % $j == 0) {
            $numberEach++;
        }
    }

    if($numberEach == 2) {
        //запись в массив $arr
        array_push($arr, $i);
    }
}

//вывод на экран с новой строки
foreach ($arr as $val) {
    echo "Это простое число №: " . $val . "<br>";
}

//функция определения високосного года
function isLeap($year) {
    return date('L', mktime(0, 0, 0, 1, 1, $year));
}

echo isLeap(2000);



