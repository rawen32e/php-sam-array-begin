<!-- Вариант 1 -->
<!-- Ярославов Сашенька -->
<?php

//задание 1, создатьь массив рандом
for($i=0; $i<10; $i++){
    $arrRandom[$i] = rand(35,42);
}

echo '<pre>';
print_r($arrRandom);
echo '</pre>';

//задание 2, вывод в строку через ; 
var_dump(implode("; ", $arrRandom));

//задание 3, оставить в массиве только уникальные значения
$arrUnuque = array_unique($arrRandom);
echo '<pre>';
print_r($arrUnuque);
echo '</pre>';

//задание 4, увеличить каждый элемент массива в 3 раза
for($i=0; $i<count($arrRandom); $i++){
    $x3[$i] = $arrRandom[$i] * 3;
}
echo '<pre>';
print_r($x3);
echo '</pre>';

//задание 5, создать новый массив arrRange, от -50 до 50 с шагом в 8
$arrRange = range(-50, 50, 8);
echo '<pre>';
print_r($arrRange);
echo '</pre>';

//задание 6, определить сумму положительных четных элементов массива arrRange

// $arrRange = array_filter($arrRange, function($item){
//     if ($item>0 && $item%2==0){
//         return $item;
//     }
//         },
//     );
// $sum = array_sum($arrRange);
//     echo '<pre>';
//     print_r($sum);
//     echo '</pre>';   

//задание 7, определить произведение элементов массива arrRange кратных 3 и 5  

// $arrRange = array_filter($arrRange, function($item){
//     if ($item%3==0 && $item%5==0){
//         return $item;
//     }
//         },
//     );
//     $product = array_product($arrRange);
//     echo '<pre>';
//     print_r($product);
//     echo '</pre>';   

//задание 8, объединить массивы arrRange и arrRandom двумя способами

//способ 1
$arrSl = array_merge($arrRandom, $arrRange);

//способ 2
$arrSl2 = [...$arrRandom, ...$arrRange];

echo '<pre>';
print_r($arrSl);
echo '</pre>';  

echo '<pre>';
print_r($arrSl2);
echo '</pre>';  

//задание 10, в массивве arrRandom вместо 5 и 6 элементов разместит элементты 1000, 2000, 3000
echo '<pre>';
print_r($arrRandom);
echo '</pre>';  

array_splice($arrRandom, 5, 2, [1000, 2000, 3000]);
echo '<pre>';
print_r($arrRandom);
echo '</pre>';



// задание 11 имеется строка вида: «А роза упала на лапу Азора». Сформируйте массив, элементами которого станут слова этой строки

$str = "А роза упала на лапу Азора";
$arr = explode(' ', $str);
echo '<pre>';
print_r($arr);
echo '</pre>';

// задание 12 удалите последний элемент массива arrRandom
echo '<pre>';
print_r($arrRandom);
echo '</pre>';

array_pop($arrRandom);

echo '<pre>';
print_r($arrRandom);
echo '</pre>';


//задание 9 вывод мин элементов полученого в задании 8 
echo '<pre>';
print_r($arrSl2);
echo '</pre>';  
$min = min($arrSl2);
echo $min;

//задание 14

$arr1 = [
    "white" =>"белый",
    "yellow" => "желтый",
    "red" => "красный",
    "green" => "зеленый" 
];

//способ 1
["white" => $white, "yellow"=> $yellow, "red"=> $red, "green"=> $green] = $arr1;
[$white, $yellow, $red, $green] = [$green, $red, $yellow, $white];



//способ 1
$color = $arr1['yellow'];


echo '<pre>';
print_r($white);
echo '</pre>';

$arr15 = [
    [
        "berry"=>"виноград",
        "color"=>"зеленый",
        "weight" => 1.5
    ],
    [
        "berry"=>"земляника",
        "color"=>"красный",
        "weight" => 0.7
    ],
    [
        "berry"=>"blueberry",
        "color"=>"фиолетовый",
        "weight" => 0.3
    ],
    
    
];

// function cmd($a,$b){
//     if ($a["weight"] < $b["weight"]) return -1;
//     if ($a["weight"] == $b["weight"]) return 0;
//     if ($a["weight"] < $b["weight"]) return 1;

// }

// usort($arr3, "cmd");


