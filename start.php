<?php
require 'MatrixWorker.php';

//Двумерные массивы реализующие матрицу для демонстрации работы класса
$matrix1 = [[2, 2, 2, 2], [2, 2, 2, 2], [2, 2, 2, 2]];
$matrix2 = [[3, 3, 3], [3, 3, 3], [3, 3, 3], [3, 3, 3]];
$matrix3 = [[10, 10, 10, 10], [10, 10, 10, 10], [10, 10, 10, 10]];

$matrixWorker = new MatrixWorker($matrix1);
echo $matrixWorker->Multiplication() . PHP_EOL;

$matrixWorker = new MatrixWorker($matrix1, $matrix2); // Создание объекта класса для работы с умножением

echo $matrixWorker->Multiplication() . PHP_EOL; // Перемножение матрицы №1 и матрицы №2
echo $matrixWorker->Multiplication(0.5) . PHP_EOL; // Умножение матрицы №1 на 0.5

$matrixWorker = new MatrixWorker($matrix3, $matrix1); // Создание объекта класса для работы с суммированием

echo $matrixWorker->Sum() . PHP_EOL; // Сумма матрицы #3 и матрицы №1
echo $matrixWorker->Sum(0.5) . PHP_EOL; // Сумма матрицы №3 и 0.5




