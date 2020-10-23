<?php
$databaseResults = array();
$conn = new mysqli("localhost", "root", "root", "projeto");
if ($conn->connect_error) {
    die("ERROR: Unable to connect: " . $conn->connect_error);
}
$titulo = $_GET['titulo'];
$autor = $_GET['autor'];
$ano = intval($_GET['ano']);
$quantidade = $_GET['quantidade'];
$editora = $_GET['editora'];
$preco = floatval($_GET['preco']);
$quantidade = intval($_GET['quantidade']);
$querySelectEditora = "select projeto.editora.nome from projeto.editora where nome='{$editora}'";
$querySelectIdEditora = "select projeto.editora.id from projeto.editora where nome='{$editora}'";
$queryInsertEditora = "insert into projeto.editora (nome) VALUES ('{$editora}');";
$result = $conn->query($querySelectEditora);
$queryInsertLivro = "insert into projeto.acervo (idEditora, titulo, autor, ano, preco, quantidade, tipo) VALUES (" . '(' . $querySelectIdEditora . ')' . ",'" . $titulo . "','" . $autor . "'," . $ano . "," . $preco . "," . $quantidade . ",'1');";

if ($result->num_rows == 0) {
    if ($conn->query($queryInsertEditora) === TRUE) {
        if ($conn->query($queryInsertLivro) === TRUE) {
            echo TRUE;
        }
    }
} else {
    if ($conn->query($queryInsertLivro)) {
        echo TRUE;
    }
}
$result->close();
$conn->close();
?>