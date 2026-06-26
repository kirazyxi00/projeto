<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Perfil criado</title>
</head>
<body>

<?php

$nome = trim($_POST["nome"]);
$turma = trim($_POST["turma"]);
$idade = $_POST["idade"];
$tipoMidia = $_POST["tipo_midia"];
$obra = trim($_POST["obra"]);
$nota = $_POST["nota"];
$comentario = trim($_POST["comentario"]);

$erro = false;

if ($erro == false) {
    echo "<h1>Perfil de $nome</h1>";
    echo "<p><strong>Turma:</strong> $turma</p>";
    echo "<p><strong>Idade:</strong> $idade anos</p>";
    echo "<p><strong>Tipo de midia favorita:</strong> $tipoMidia</p>";
    echo "<p><strong>Obra favorita:</strong> $obra</p>";
    echo "<p><strong>Nota:</strong> $nota/10</p>";
    echo "<p><strong>Comentario:</strong> $comentario</p>";

    if ($nota >= 8) {
        echo "<p>Essa parece ser uma forte recomendacao!</p>";
    } else {
        echo "<p>Essa obra ficou na lista de observacao.</p>";
    }

} else {
    echo "<p>Volte ao formulario e corrija as informacoes.</p>";
}

?>

<p><a href="perfil.html">Voltar ao formulario</a></p>

</body>
</html>