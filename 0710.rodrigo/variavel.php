<?php
// arquivo variáveis.php

# isso também é um comentário de uma linha

/*
Esse é um comentário de várias linhas
*/

$a = 3; // valor inteiro 'dinâmica'
$b = 1.3;
$c ="IFSC";
$d = 'Garopaba';
$e = $c . $d; # concatenação

echo '<h1>'.$c.''.$d.'</h1>';
echo "<h1>$c $d</h1>"; # interpreta variável
echo '<h1>$c $d</h1>'; # não interpreta

$ifsc = "Eu estudo no IFSC Garopaba";
$x = 'ifsc';
echo $$x;
$verdadeiro = true;
$falso = false;

# operadores matemáticos
# + - / *

# operadores lógicos
# e &&
# ou ||
echo '<hr>';
echo 4 + '123abc';

