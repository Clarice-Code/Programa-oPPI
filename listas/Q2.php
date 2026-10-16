<?php
/*Questão 2 — Pares e ímpares
Utilizando for, percorra os números de 1 até 30.
Para cada número, exiba se ele é par ou ímpar.*/

for($num = 1; $num <= 30; $num++){
    if($num %2 === 0){
       echo"par  ";
    }else{
        echo"impar ";
    }
}




?>