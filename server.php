<?php
// OBJETIVO: Mostrar informações do servidor e da requisição
// CARACTERÍSTICAS:
//   - Traz informações sobre o servidor e ambiente
//   - Mostra método usado (GET ou POST), IP, arquivo atual
//   - Útil para debug e monitoramento

echo "Arquivo atual: " . $_SERVER['PHP_SELF'] . "<br>";       // Nome do arquivo executado
echo "Nome do servidor: " . $_SERVER['SERVER_NAME'] . "<br>"; // Nome do servidor (ex: localhost)
echo "Método usado: " . $_SERVER['REQUEST_METHOD'] . "<br>";  // GET ou POST
?>
