<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once("../racine.php");
    include_once RACINE . '/service/EtudiantService.php';
    create();
}
function create()
{
    extract($_POST);
    $image = $_POST['image'] ?? null; // Récupérer l'image à partir de la requête POST

    $es = new EtudiantService();
    // Insertion d’un étudiant avec l'image
    $es->create(new Etudiant(1, $nom, $prenom, $ville, $sexe, $image));
    // Chargement de la liste des étudiants sous format JSON
    header('Content-type: application/json');
    echo json_encode($es->findAllApi());
}
