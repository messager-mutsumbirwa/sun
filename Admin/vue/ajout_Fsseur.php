    
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

   <center><h1>SI VOUS N AVEZ PAS DE COMPTE S'IL VOUPLAIT !!!VEILLEZ CONCTACTEZ L'ADMINISTRATION DE SUN BUILDING ! </h1></center> 

    <center> <h3><a href="\..\sun\accueil1.php">cliquez ici pour rentrer a la page d'accuille</a></a></center> 

</body>
</html>
    <?php





    
/*
Page: connexion.php
*/
//à mettre tout en haut du fichier .php, cette fonction propre à PHP servira à maintenir la $_SESSION
session_start();
//si le bouton "Connexion" est cliqué
if(isset($_POST['connexion'])){
    // on vérifie que le champ "Pseudo" n'est pas vide
    // empty vérifie à la fois si le champ est vide et si le champ existe belle et bien (is set)
    if(empty($_POST['login'])){
        echo "the champ Pseudo is empty.";
    } else {
        // on vérifie maintenant si le champ "Mot de passe" n'est pas vide"
        if(empty($_POST['pwd'])){
            echo " champ Mot de passe is empty.";
        } else {
            // les champs pseudo & mdp sont bien postés et pas vides, on sécurise les données entrées par l'utilisateur
            //le htmlentities() passera les guillemets en entités HTML, ce qui empêchera en partie, les injections SQL
            $Pseudo = htmlentities($_POST['login'], ENT_QUOTES, "UTF-8"); 
            $MotDePasse = htmlentities($_POST['pwd'], ENT_QUOTES, "UTF-8");
            //on se connecte à la base de données:
            $mysqli = mysqli_connect("localhost", "root", "", "sun");
            //on vérifie que la connexion s'effectue correctement:
            if(!$mysqli){
                echo "Erreur de connexion à la base de données.";
            } else {
                //on fait maintenant la requête dans la base de données pour rechercher si ces données existent et correspondent:
                //si vous avez enregistré le mot de passe en md5() il vous faudra faire la vérification en mettant mdp = '".md5($MotDePasse)."' au lieu de mdp = '".$MotDePasse."'
                $Requete = mysqli_query($mysqli,"SELECT * FROM fournisseurs WHERE login = '".$Pseudo."' AND pwd= '".$MotDePasse."'");
                //si il y a un résultat, mysqli_num_rows() nous donnera alors 1
                //si mysqli_num_rows() retourne 0 c'est qu'il a trouvé aucun résultat
                if(mysqli_num_rows($Requete) == 0) 
                {
                    echo "Thank you for trying to connect your self but your password or email is wrong and is not found in our system please try again later  .";
                } else {
                    //on ouvre la session avec $_SESSION:
                    //la session peut être appelée différemment et son contenu aussi peut être autre chose que le pseudo
                    $_SESSION['login'] = $Pseudo;
                    echo "welcom to your account !".$Pseudo;

                   foreach ($Requete as $user_info) {
                        if ($Pseudo==$_SESSION['login'] || $idfsseur==$_SESSION['idfsseur'] )
                       {
                        
                        
                    
                     $_SESSION['idfsseur'] = $user_info['idfsseur'];
                     $_SESSION['login'] = $user_info['login'];
                     $_SESSION['name'] = $user_info['name'];
                     $_SESSION['siege'] = $user_info['siege'];
                     $_SESSION['other'] = $user_info['other'];
                     header("location:../vue/ajout_Fsseur2.php");
                 }
}
}
                }
            }
        }
    }

// connexion à la base de données:
// on récolt.
?>





