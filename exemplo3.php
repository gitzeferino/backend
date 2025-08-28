<?php
// OBJETIVO: Verificar condições com operadores lógicos (E, OU, NÃO)
// CARACTERÍSTICAS: Permitem combinar condições booleanas.

$idade = 18;          // Cria a variável $idade com valor 18
$temCarteira = false;  // Cria a variável $temCarteira com valor verdadeiro

// Se idade for maior ou igual a 18 E a pessoa tiver carteira, entra no if
if ($idade >= 18 && $temCarteira) {
    echo "Pode dirigir!"; // Imprime essa mensagem
}
?>
