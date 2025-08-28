<?php
// OBJETIVO: Identificar a cor escolhida
$cor = "verde"; // Cria a variável $cor com valor "verde"
switch ($cor) {                 // Verifica o valor de $cor
    case "vermelho":            // Se $cor for "vermelho"
        echo "A cor é vermelha";
        break;
    case "azul":                // Se $cor for "azul"
        echo "A cor é azul";
        break;
    default:                    // Se não for nenhum dos casos acima
        echo $cor;
}
?>
