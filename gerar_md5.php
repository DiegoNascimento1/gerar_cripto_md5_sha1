<?php
require_once 'gerar_combinacao.php';
$comb = Combinacao::gerar_maiusculas(10);
print_r($comb);
echo "   ->   ";
print_r(md5($comb));
echo '<br>';
$comb = Combinacao::gerar_todos_caracteres(12);
print_r($comb);
echo "   ->   ";
print_r(md5($comb));