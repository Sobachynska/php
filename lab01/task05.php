<!--Перевірити, чи є в одновимірному числовому масиві хоча б одна пара протилежних чисел.-->

<?php
function hasOppositePair($arr) {
    $oppositePairFound = false; // Змінна, що вказує на те, чи знайдено протилежну пару

    // Перевіряю всі можливі комбінації чисел у масиві, щоб знайти протилежні пари
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = $i + 1; $j < count($arr); $j++) {
            // Перевіряю, чи поточні елементи утворюють протилежну пару
            if ($arr[$i] == -$arr[$j]) {
                $oppositePairFound = true; // Якщо так, то встановлюється прапорець на true
                break 2; // Вихід з обох циклів, коли знайдено протилежну пару
            }
        }
    }
    return $oppositePairFound;
}
$array = [1, -2, 30, 2, -5];

if (hasOppositePair($array)) {
    echo "У масиві є протилежна пара чисел";
} else {
    echo "У масиві немає протилежної пари чисел";
}
?>