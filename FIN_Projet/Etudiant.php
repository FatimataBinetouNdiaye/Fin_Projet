<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 id="rr"><strong><em> LE FORMULAIRE D'INSCRIPTION</em></strong></h1>
    <div id="formulaire">
        
        <form action="" method="post">
            <fieldset>
            <legend><font color="white">INSCRIPTION</font> </legend>
            <div>
                <label for=""></label>
                <input id="attac" placeholder="  CODE" type="int" name="code">
            </div>
            <br>
            <br><br><br>
            <div>
                <label for=""></label>
                <input id="attac" placeholder="  NOM" type="text" name="nom">
            </div>
            <br>
            <br>
            <br><br>
            <div>
                <label for=""> </label>
                <input id="attac" placeholder="  PRENOM"  type="text" name="prenom">
            </div>
           
             <br><br><br><br>
            <div>
                <label for=""></label>
                <input id="attac" placeholder="  Email" type="email" name="email">
            </div>
            
            <br>
             <br><br><br>
            <div>
                <label for=""> </label>
                <input id="attac" placeholder="  AGE" type="int" name="age">
            </div>
            
             <br><br><br><br>
            <div>
                <label for=""></label>
                <input id="attac" placeholder="  MOT DE PASSE" type="password" name="motdepasse">
            </div>
            <br>
            <br><br><br><br>
            >
            <div>
                <button id="bouton" type="submit" name="suivant" value="suivant">SUIVANT</button>
            </div>
            <br>
            <br>
        </fieldset>
            </form>

    </div>
</body>
</html>
<?php
include("indexac.php");
include("Connection.php");
class Etudiant{
    protected $IDE;
    protected $nom;
    protected $prenom;
    protected $emaile;
    protected $mdp;

    public function __construct($IDE,$nom ,$prenom ,$emaile,$mdp ){
        $this->IDE=$IDE;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->emaile=$emaile;
        $this->mdp=$mdp;
    }
    public function getIDE(){
        return $this->IDE;
    }
    public function getNom(){
        return $this->nom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function getEmaile(){
        return $this->emaile;
    }
    public function getMdp(){
        return $this->mdp;
    }
    public function setIDE($IDE){
        $this->IDE=$IDE;
    }
    public function setNom($nom){
        $this->nom=$nom;
    }
    public function setPrenom($prenom){
        $this->prenom=$prenom;
    }
    public function setEmaile($emaile){
        $this->emaile=$emaile;
    }
    public function setMdp($mdp){
        $this->mdp=$mdp;
    }
    



    public function traiterFormulaire() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['inscription'])) {
                // Récupérer les informations du formulaire d'inscription
                $nom = $_POST['nom'];
                $prenom = $_POST['prenom'];
                $email = $_POST['email'];
                $motDePasse = $_POST['mot_de_passe'];

                // Effectuer les opérations d'inscription, par exemple, en appelant une méthode d'inscription
                $this->inscrireEtudiant($nom, $prenom, $email, $motDePasse);

                // Redirection vers une autre page après l'inscription réussie
                header('Location: inscription_reussie.php');
                exit();
            } elseif (isset($_POST['identification'])) {
                // Récupérer les informations du formulaire d'identification
                $email = $_POST['email'];
                $motDePasse = $_POST['mot_de_passe'];

                // Effectuer les opérations d'identification, par exemple, en appelant une méthode d'identification
                $estIdentifie = $this->identifierEtudiant($email, $motDePasse);

                if ($estIdentifie) {
                    // Redirection vers une autre page après une identification réussie
                    header('Location: accueil.php');
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
$Etudiant = new etudiant();

if (isset($_POST['inscription'])) {
    $etudiant->traiterFormulaireInscription();
} elseif (isset($_POST['connexion'])) {
    $etudiant->traiterFormulaireIdentification();
}

