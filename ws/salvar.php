<?php

require_once "../model/Conexao.php";
$nome = $_GET["txt_livro"];

$sql = "INSERT INTO book (nome, paginas, autor) VALUES ('$nome', '???', '???');";

if(!Conexao::exec($sql)){
    echo Conexao::getErro();
    exit(1);
}
header("Location: ../");