<?php
// OBJETIVO: Classificar a nota em conceitos diferentes
$nota = 90;   // Cria a variável $nota com valor 75
if ($nota >= 90) {           // Se nota for maior ou igual a 90
    echo "Conceito A";       // Imprime "Conceito A"
} elseif ($nota >= 70) {     // Se não passou no if, mas nota >= 70
    echo "Conceito B";       // Imprime "Conceito B"
} else {
    echo "Conceito C";       // Caso contrário, imprime "Conceito C"
}
?>
