<?php

// Path: sudoku.php
function sudoku(){
    $sudoku = array(
        array(0,0,0,0,0,0,0,0,0),
        array(0,0,0,0,0,0,0,0,0),
        array(0,0,0,0,0,0,0,0,0),
        array(0,0,0,0,0,0,0,0,0),
        array(0,0,0,0,0,0,0,0,0),
        array(0,0,0,0,0,0,0,0,0),
        array(0,0,0,0,0,0,0,0,0),
        array(0,0,0,0,0,0,0,0,0),
        array(0,0,0,0,0,0,0,0,0)
    );
    return $sudoku;
}


function encaja($sudoku, $fila, $columna, $numero){
    $encaja = true;
    for($i = 0; $i < 9; $i++){
        if($sudoku[$fila][$i] == $numero){
            $encaja = false;
        }
    }
    for($i = 0; $i < 9; $i++){
        if($sudoku[$i][$columna] == $numero){
            $encaja = false;
        }
    }
    $fila = floor($fila / 3) * 3;
    $columna = floor($columna / 3) * 3;
    for($i = 0; $i < 3; $i++){
        for($j = 0; $j < 3; $j++){
            if($sudoku[$fila + $i][$columna + $j] == $numero){
                $encaja = false;
            }
        }
    }
    return $encaja;
}

function resolver(){
    $sudoku = sudoku();
    $fila = 0;
    $columna = 0;
    $numero = 1;
    $encaja = false;
    while($fila < 9){
        while($columna < 9){
            while($numero < 10){
                if(encaja($sudoku, $fila, $columna, $numero)){
                    $sudoku[$fila][$columna] = $numero;
                    $encaja = true;
                    break;
                }
                $numero++;
            }
            if($encaja){
                $encaja = false;
                $columna++;
                $numero = 1;
            }else{
                $sudoku[$fila][$columna] = 0;
                $columna--;
                $numero = $sudoku[$fila][$columna] + 1;
                $sudoku[$fila][$columna] = 0;
            }
        }
        $fila++;
        $columna = 0;
    }
    return $sudoku;
?>