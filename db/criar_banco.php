<div class="titulo">Criar Banco</div>

<?php
require_once "conexao.php";

$conexao = novaConexao(null);
$sql = 'CREATE DATABASE bd_php';

$conexao->query($sql);

$conexao->close();