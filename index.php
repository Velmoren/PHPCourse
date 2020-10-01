<?

foreach ([1, 2, 3, 4, 5, 6, 7, 8, 9] as $idx => $firstVal) {
    foreach ([1, 2, 3, 4, 5, 6, 7, 8, 9] as $val) {
        $pro = $val * ($idx + 1);
        echo "<span style='width: 30px; display: inline-block; text-align: center; line-height: 30px'>$pro</span>";
    }
    echo "<br>";
}