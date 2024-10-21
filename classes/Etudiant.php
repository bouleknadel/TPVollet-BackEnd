<?php
class Etudiant
{
    private $id;
    private $nom;
    private $prenom;
    private $ville;
    private $sexe;
    private $image;

    function __construct($id, $nom, $prenom, $ville, $sexe, $image = null) // Ajouter photo dans le constructeur
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->ville = $ville;
        $this->sexe = $sexe;
        $this->image = $image;
    }

    function getId()
    {
        return $this->id;
    }

    function getNom()
    {
        return $this->nom;
    }

    function getPrenom()
    {
        return $this->prenom;
    }

    function getVille()
    {
        return $this->ville;
    }

    function getSexe()
    {
        return $this->sexe;
    }

    function getImage() // Méthode pour obtenir la photo
    {
        return $this->image;
    }

    function setId($id)
    {
        $this->id = $id;
    }

    function setNom($nom)
    {
        $this->nom = $nom;
    }

    function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    function setVille($ville)
    {
        $this->ville = $ville;
    }

    function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }

    function setImage($image) // Méthode pour définir la photo
    {
        $this->image = $image;
    }

    public function __toString()
    {
        return $this->nom . " " . $this->prenom;
    }
}
