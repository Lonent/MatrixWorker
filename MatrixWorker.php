<?php

class MatrixWorker
{

    public $matrix1;
    public $matrix2;


    public function __construct($matrix1, $matrix2 = null)
    {
        $this->matrix1 = $matrix1;
        $this->matrix2 = $matrix2;
    }

    /**
     * Суммирует две матрицы или матрицу и число
     *
     * @param float $num число для сложения с матрицей.
     * @return string Возвращает матрицу в читабельном формате.
     */
    public function Sum(float $num = null): string
    {
        if ($num) {
            for ($i = 0; $i < count($this->matrix1); $i++) {
                for ($j = 0; $j < count($this->matrix1[$i]); $j++) {
                    $row[] = $this->matrix1[$i][$j] + $num;
                }
                $sum[] = $row;
                unset($row);
            }
            return $this->Printer($sum);
        }
        if ($this->matrix2 && count($this->matrix1) == count($this->matrix2) && count($this->matrix1[0]) == count($this->matrix2[0])) {
            for ($i = 0; $i < count($this->matrix1); $i++) {
                for ($j = 0; $j < count($this->matrix1[$i]); $j++) {
                    $row[] = $this->matrix1[$i][$j] + $this->matrix2[$i][$j];
                }
                $sum[] = $row;
                unset($row);
            }
            return $this->Printer($sum);
        }
        return 'Matrix\'s doesn\'t match';
    }

    /**
     * Перемножает две матрицы или матрицу и число
     *
     * @param float $num число для перемножения матрицы.
     * @return string Возвращает матрицу в читабельном формате.
     */
    public function Multiplication(float $num = null): string
    {
        if ($num) {
            for ($i = 0; $i < count($this->matrix1); $i++) {
                for ($j = 0; $j < count($this->matrix1[$i]); $j++) {
                    $row[] = $this->matrix1[$i][$j] * $num;
                }
                $mult[] = $row;
                unset($row);
            }
            return $this->Printer($mult);
        }

        if ($this->matrix2 && count($this->matrix1[0]) == count($this->matrix2) && count($this->matrix1) == count($this->matrix2[0])) {
            for ($i = 0; $i < count($this->matrix1); $i++) {
                for ($j = 0; $j < count($this->matrix1[$i]); $j++) {
                    $row[] = $this->matrix1[$i][$j] * $this->matrix2[$j][$i];
                }
                $mult[] = $row;
                unset($row);
            }
            return $this->Printer($mult);
        }
        return 'Matrix\'s doesn\'t match';
    }


    private function Printer($matrix): string
    {
        $string = '';
        for ($i = 0; $i < count($matrix); $i++) {
            $row = '';
            $row = implode(' ', $matrix[$i]);
            $string .= "$row\n";
        }
        return $string;
    }


}