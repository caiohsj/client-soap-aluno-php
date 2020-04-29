<?php
require_once("Service.php");

$nome = $_POST["nome"];
$media = $_POST["media"];
$faltas = $_POST["faltas"];

$aluno = new StdClass();
$aluno->nome = $nome;
$aluno->media = $media;
$aluno->faltas = $faltas;

$service = new Service();
$service->inserir($aluno);

header("Location: index.php");