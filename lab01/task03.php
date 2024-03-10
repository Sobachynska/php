<!--Знайти добуток цифр даного натурального числа-->
<?php
function searchProduct($number){
    $result=1;
    while ($number>0){
        $tsyfra=$number%10;
        $result*=$tsyfra;
        $number=(int)($number/10);
    }
    return $result;
}
$number = 29122004;
$result=searchProduct($number);
echo "Добуток цифр числа $number: $result";
?>