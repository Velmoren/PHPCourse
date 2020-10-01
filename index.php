<?

foreach ([1, 2, 3, 4, 5, 6, 7, 8, 9] as $idx => $firstVal) {
    foreach ([1, 2, 3, 4, 5, 6, 7, 8, 9] as $val) {
        $pro = $val * ($idx + 1);
        echo "<span style='width: 30px; display: inline-block; text-align: center; line-height: 30px'>$pro</span>";
    }
    echo "<br>";
}

echo "<br>";

$x = 1;
do {
    $xy = $x * $x;
    $x++;
    if($x*$x > 100) {
        goto next;
    }
    echo $xy . "<br>";
}while($x*$x <= 100);
next: echo "Все";


function myFunc($a, $b, $c=-5) {
    echo "Произведение равно: " . $a * $b * $c . "<br>";
}

echo "<br>";
echo "<br>";

myFunc(1,2,3);
