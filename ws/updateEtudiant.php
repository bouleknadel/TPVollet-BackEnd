<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once("../racine.php");
    include_once RACINE . '/service/EtudiantService.php';

    if (isset($_GET['id']) && isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['ville']) && isset($_GET['sexe'])) {
        $id = intval($_GET['id']);
        $nom = $_GET['nom'];
        $prenom = $_GET['prenom'];
        $ville = $_GET['ville'];
        $sexe = $_GET['sexe'];

        $etudiantService = new EtudiantService();
        $etudiant = $etudiantService->findById($id);

        if ($etudiant) {
            // Mettre à jour les attributs
            $etudiant->setNom($nom);
            $etudiant->setPrenom($prenom);
            $etudiant->setVille($ville);
            $etudiant->setSexe($sexe);

            // Vérifier si une image a été fournie
            if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
                // Récupérer l'image
                $image = file_get_contents($_FILES['image']['tmp_name']);
                $etudiant->setImage('data:image/jpeg;base64,' . base64_encode($image)); // Encode l'image en base64
            }

            // Mettre à jour l'étudiant
            $etudiantService->update($etudiant);
            echo json_encode(["message" => "Étudiant mis à jour avec succès"]);
        } else {
            echo json_encode(["error" => "Étudiant non trouvé"]);
        }
    } else {
        echo json_encode(["error" => "Données manquantes"]);
    }
}
