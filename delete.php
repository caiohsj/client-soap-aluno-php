<?php
require_once("Service.php");

$id = intval($_GET["id"]);

$service = new Service();
$service->remover($id);

header("Location: index.php");