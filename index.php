<form method="GET">
    <p>Введите число: <input type="text" name="x"></p>
    <p><input type="submit"></p>
</form>
<?php
$x = $_GET['x'];
echo "Число ".$x."<br>";

$a = 1;
$b = 1;

while ($a <= $x) {
    if ($a == $x) {
        echo "Задуманное число входит в числовой ряд";
        break;
    }
    else {
        $c = $a;
        $a = $a + $b;
        $b = $c;
    }
    if ($a > $x) {
        echo "Задуманное число НЕ входит в числовой ряд";
        break;
    }
}
?>