<?php
$databaseResults = array();
$conn = new mysqli("localhost", "root", "root", "projeto");
if ($conn->connect_error) {
    die("ERROR: Unable to connect: " . $conn->connect_error);
}
$result = $conn->query("select projeto.acervo.id, projeto.acervo.titulo, projeto.acervo.autor, projeto.acervo.ano, projeto.acervo.quantidade, projeto.acervo.preco from projeto.acervo;");
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $databaseResults[] = $row;
    }
}
$result->close();
$conn->close();
$show_json = json_encode($databaseResults, JSON_FORCE_OBJECT);
if ($show_json !== false) {
    echo($show_json);
} else {
    die("json_encode fail: " . json_last_error_msg());
}
?>