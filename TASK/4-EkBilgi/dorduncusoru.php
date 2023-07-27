<?php
// KEY değerleri olan array
$keyArray = array(
    'anahtar1' => 'Değer 1',
    'anahtar2' => 'Değer 2',
    'anahtar3' => 'Değer 3'
);

// KEY değerleri olmayan array
$dataArray = array(
    'Değer 4',
    'Değer 5',
    'Değer 6'
);

// Yeni array oluşturarak birleştirme işlemi
$newArray = array_merge($keyArray, $dataArray);

print_r($newArray);
