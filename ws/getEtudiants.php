<?php
include_once './racine.php';
include_once RACINE . '/service/EtudiantService.php';

$es = new EtudiantService();
$etudiants = $es->findAll();

header('Content-Type: application/json');
echo json_encode($etudiants);
