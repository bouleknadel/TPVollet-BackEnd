<?php
include_once '../racine.php';
include_once RACINE . '/service/EtudiantService.php';
extract($_GET); // Assurez-vous que les paramètres GET incluent aussi 'image'

// Vérifiez si l'image est fournie dans les paramètres GET
$image = isset($_GET['image']) ? $_GET['image'] : null; // Récupérez l'image depuis l'URL (GET)

// Créez une instance de EtudiantService
$es = new EtudiantService();

// Créez un nouvel étudiant avec l'image
$es->create(new Etudiant(1, $nom, $prenom, $ville, $sexe, $image));

// Redirigez vers la page d'index après la création
header("location:../index.php");
