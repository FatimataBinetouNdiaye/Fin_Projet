<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="formulaire">
        <form action="duphp.php" method="post">
            <fieldset>
                <legend><font color="white">IDENTIFICATION</font></legend>
            <div>
                <label for=""></label>
                <input id="attac" placeholder="CODE" type="text"name="codeA">
            </div>
            <br><br><br><br>
            <div>
                <label for=""></label>
                <input id="attac" placeholder="Email" type="text" name="Email">
            </div>
            <br><br><br><br>
            <div>
                <label for=""></label>
                <input id="attac" placeholder="MOT DE PASSE" type="password" name="Motdepasse">
            </div>
            <br><br><br><br>
            <div>
                <button id="bouton" type="submit"name="Envoyer" value="Envoyer">Envoyer</button>
            </div>
        </fieldset>
        </form>

    </div>
</body>
</html>
<?php 
include("indexac.php");
include("Connection.php");
class ADMINISTRATEUR{
    protected $nom;
    protected $prenom;
    protected $email;
    public function __construct($nom, $prenom,$email,){
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->email=$email;
       
    }
    public function getNom(){
        return $this->nom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setNom($nom){
        $this->nom=$nom;
    }
    public function setPrenom($prenom){
        $this->prenom=$prenom;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    
        public function traiterFormulaire() {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_POST['inscription'])) {
                    // Récupérer les informations du formulaire d'inscription
                    $nom = $_POST['nom'];
                    $email = $_POST['email'];
                    $motDePasse = $_POST['mot_de_passe'];
    
                    // Effectuer les opérations d'inscription, par exemple, en appelant une méthode d'inscription
                    $this->inscrireAdministrateur($nom, $email, $motDePasse);
    
                    // Redirection vers une autre page après l'inscription réussie
                    header('Location: inscription_reussie.php');
                    exit();
                } elseif (isset($_POST['identification'])) {
                    // Récupérer les informations du formulaire d'identification
                    $email = $_POST['email'];
                    $motDePasse = $_POST['mot_de_passe'];
    
                    // Effectuer les opérations d'identification, par exemple, en appelant une méthode d'identification
                    $estIdentifie = $this->identifierAdministrateur($email, $motDePasse);
    
                    if ($estIdentifie) {
                        // Redirection vers une autre page après une identification réussie
                        header('Location: accueil_admin.php');
                        exit();
                    } else {
                        // Redirection vers une page d'erreur en cas d'identification invalide
                        header('Location: identification_echec.php');
                        exit();
                    }
                }
            }
        }
    
       
    }
    





?>