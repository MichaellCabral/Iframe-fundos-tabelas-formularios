<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome = $_POST["nome"];
  $sobrenome = $_POST["sobrenome"];

  // Aqui você pode armazenar os dados — por exemplo, salvar num banco de dados ou arquivo
  echo "<p>Nome: $nome</p>";
  echo "<p>Sobrenome: $sobrenome</p>";

  // Exemplo de salvar em arquivo txt
  $linha = "$nome $sobrenome\n";
  file_put_contents("usuarios.txt", $linha, FILE_APPEND);

  // Ou apenas exibir os dados como teste
}
?>