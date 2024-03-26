<?php

$idade = 21; 

$salario = 1000; // não se sinaliza numeros decimais com virgula e sim com ponto (numero de ponto flutuante/decimal)
                // o php sinaliza como como "Double" numeros decimais ex: 1000.30 / e sinaliza como "Integer" numeros inteiros ex: 1000

//echo gettype($salario); // a função gettype sinaliza se o valor da variavel é inteiro

$divisao = 10/3; // o php descobre o tipo de dado que sexra exibido de acordo com o seu valor, sem precisar informar no cod

$texto = "Ola mundo"; // para texto ele exibe "string"

$verdadeiro = true; // o php chama as variaveis false e true de Boolean 
$falso = false;

echo gettype($falso);
