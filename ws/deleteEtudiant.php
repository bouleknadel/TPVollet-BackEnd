<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once("../racine.php");
    include_once RACINE . '/service/EtudiantService.php';
    include_once RACINE . '/classes/Etudiant.php';  // Assurez-vous que la classe Etudiant est incluse

    if (isset($_GET['id'])) {
        $id = intval($_GET['id']);  // Sécuriser l'ID en le forçant à être un entier
        $etudiantService = new EtudiantService();

        // Récupérer l'étudiant à supprimer à partir de son ID
        $etudiant = $etudiantService->findById($id);

        if ($etudiant) {
            // Si l'étudiant existe, on le passe à la méthode delete()
            $etudiantService->delete($etudiant);

            // Réponse de succès
            echo json_encode(["message" => "Étudiant supprimé avec succès"]);
        } else {
            // Si l'étudiant n'existe pas, retourner une erreur
            echo json_encode(["error" => "Étudiant non trouvé"]);
        }
    } else {
        echo json_encode(["error" => "ID de l'étudiant manquant"]);
    }
}
