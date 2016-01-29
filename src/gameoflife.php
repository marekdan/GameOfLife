<?php

class GameOfLife{
    private $board;
    private $boardSize;

    private function getNextStepForCell($row, $column){
        $lifeNeighbours = 0;
        for($i = $row -1 ; $i <= $row +1; $i++){
            for($j = $column -1; $j <= $column +1; $j++){
                if(!($i === $row && $j === $column)){
                    if($i >= 0 && $j >= 0 && $i < $this->boardSize && $j < $this->boardSize){
                        if($this->board[$i][$j]){
                            $lifeNeighbours++;
                        }
                    }
                }
            }
        }

        if($this->board[$row][$column] === true){
            if($lifeNeighbours === 2 || $lifeNeighbours === 3){
                return true;
            }
            else{
                return false;
            }
        }
        else{
            if($lifeNeighbours === 3){
                return true;
            }
            else{
                return false;
            }
        }
    }

    public function __construct($newSize) {
        if(is_int($newSize)){
            $this->boardSize = $newSize;
        }
        else{
            $this->boardSize = 10;
        }

        $this->board = [];
        for($i = 0; $i < $this->boardSize; $i++){
            $this->board[$i] = [];
            for($j = 0; $j < $this->boardSize; $j++){
                $this->board[$i][$j] =false;
            }
        }
    }

    public function printBoard(){
        echo("<table>");
        for($i = 0; $i < $this->boardSize; $i++){
            echo ("<tr>");
            for($j = 0; $j < $this->boardSize; $j++){
                if($this->board[$i][$j] === true){
                    echo ("<td class='alive'> </td>");
                }
                else{
                    echo ("<td></td>");
                }
            }
            echo ("</tr>");
        }
        echo ("</table>");
    }

    public function setCell($row, $column, $value){
        if(is_int($row) === false ||
            is_int($column) === false ||
            is_bool($value) === false ||
            $row < 0 ||
            $column < 0 ||
            $row >= $this->boardSize ||
            $column >= $this->boardSize){

            return;
        }
        $this->board[$row][$column] = $value;
    }

    public function computeNextStep(){
        $tempBoard = [];
        for($i = 0; $i < $this->boardSize; $i++){
            $tempBoard[$i] = [];
            for($j = 0; $j < $this->boardSize; $j++){
                $tempBoard[$i][$j] = $this->getNextStepForCell($i, $j);
            }
        }
        $this->board = $tempBoard;
    }
}