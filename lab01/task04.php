<!--Задано натуральне число n, дійсні числа r, a1, a2, K, an (n≥ 2). Скільки серед точок (a1, an),-->
<!--(a2, an−1), K, (an, a1) таких, що належать колу радіусом r з центром у початку координат?-->

<?php
function kpointsoncircle($n, $r, ... $points){
    $k=0;
    $r2=$r*$r;

    for($i=0; $i<$n/2;$i++){
        //координати першої точки
        $x1=$points[$i];
        //координати другої точки в парі
        $y1=$points[$n-$i-1];
        $distance2=$x1*$x1+$y1*$y1; //квадрат відстані
        if ($distance2<=$r2){
            $k++;
        }
    }
return $k;
}
$n=4;
$r=5;
//координати точок:
$a1=3;
$a2=4;
$a3=1;
$a4=2;

$result=kpointsoncircle($n, $r, $a1, $a2, $a3, $a4);
echo "Кількість точок, які належать колу: $result";
?>