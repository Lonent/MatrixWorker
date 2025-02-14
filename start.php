<?php
require 'MatrixWorker.php';

$matrix1 = [[2, 2, 2, 2], [2, 2, 2, 2], [2, 2, 2, 2]];

$matrix2 = [[3, 3, 3], [3, 3, 3], [3, 3, 3], [3, 3, 3]];


$matrixWorker = new MatrixWorker($matrix1, $matrix2);


echo $matrixWorker->Multiplication();




