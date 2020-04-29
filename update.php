<?php
require_once("Service.php");

$id = $_POST["id"];
$nome = $_POST["nome"];
$media = $_POST["media"];
$faltas = $_POST["faltas"];

$aluno = new StdClass();
$aluno->id = $id;
$aluno->nome = $nome;
$aluno->media = $media;
$aluno->faltas = $faltas;

$service = new Service();
$service->alterar($aluno);

header("Location: index.php");