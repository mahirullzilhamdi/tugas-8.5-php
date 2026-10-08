<?php

$matriksA = [
    [1, 2],
    [3, 4]
];

$matriksB = [
    [5, 6],
    [7, 8]
];

$hasil = [
    [
        $matriksA[0][0] + $matriksB[0][0],
        $matriksA[0][1] + $matriksB[0][1]
    ],
    [
        $matriksA[1][0] + $matriksB[1][0],
        $matriksA[1][1] + $matriksB[1][1]
    ]
];

echo "Hasil penjumlahan matriks:<br><br>";

echo $hasil[0][0] . " " . $hasil[0][1];
echo "<br>";
echo $hasil[1][0] . " " . $hasil[1][1];

?>