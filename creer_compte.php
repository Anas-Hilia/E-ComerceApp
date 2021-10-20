<?php
require('connexion.php');
session_start();

if(isset($_SESSION["id"]))
{
    header('Location: index.php');
}



?>

<?php
$code="0";
if(isset($_POST["submit"]))
{
if($_POST["type"]=="Gestionnaire")
{
    if($_POST["code"]="123456gestionnaire" )
    {
        $code="1";
    }

}
elseif($_POST["type"]=="Livreur")
{

    if($_POST["code"]="123456livreur" )
    {
        $code="1";
    }
}
if($code="0" || $code="1")
{
    
    $pseudo=$_POST["pseudo"]  ;
    $nom=$_POST["nom"]  ;
    $prenom=$_POST["prenom"]  ;
    $tele=$_POST["tele"];
    $pass=$_POST["pass"]  ;
    $type=$_POST["type"]  ;
    $photo=$_POST["photo"]  ;
    $etat=0;
    $ville_id=1;/* $_POST["ville"] */
    if($code=="0")
    {
        $type="Utilisateur" ;
    }
    
    $sql = "INSERT INTO user (login ,	mdp,	nom,	prenom ,	tel,type ,	photo ,	etat ,	ville_id)
    VALUES ( '$pseudo' , '$pass' , '$nom','$prenom','$tele' ,'$type', '$photo', '$etat' ,'$ville_id')";
                            
    if ($conn->query($sql) ==TRUE)
    {
       
        header('Location: authentification.php');            
    } 
    else 
    {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>S'inscrire</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main"  style="padding-top:20px">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form" style="margin-top:-60px">
                        <h2 class="form-title">S'inscrire</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" required name="nom" id="lname" placeholder="Votre Nom"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" required name="prenom" id="fname" placeholder="Votre Prenom"/>
                            </div>
                            <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-face"></i></label>
                            <input type="text" required name="pseudo" id="Pseudo" placeholder="Votre Pseudo"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" required name="pass" id="pass" placeholder="Mot de passe"/>
                            </div>
                            
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-phone"></i></label>
                                <input type="number" required name="tele"  id="tele" placeholder="Votre numero de telephone"/>
                            </div>
                        

                            

                             <!--type -->
                            <div class="form-group">
                            <label for="ville"><i class="zmdi zmdi-badge-check"></i></label>  
                             <div class="col-md-4">
                              <select name="type" required style="width:250px;border:none;border-bottom: 1px solid;border-radius:0px ;" class="form-control input-md " >
                              
                            <option value="" disabled selected>Choisir le type</option>
                                <option selected value="Utilisateur">Utilisateur </option>
                                <option value="Gestionnaire"> Gestionnaire</option>
                                <option value="Livreur">Livreur </option>
                             </select>
    
                         </div>
                        </div>


                        <article>
  <div>
    <h6> Veriffiez Vous (si vous n'etes pas utilisateur simple )....</h6>
    <button type="button" style="size:30px"  class="btn-sm" onclick="toggle_div(this,'test-3');" title="Afficher la suite">veriffier</button>
  </div>
  <div id="test-3" style="display:none">
  <input type="text"  name="code" id="code" placeholder="Le code de veriffication"/>
  </div>
</article>
<script>
function toggle_div( btn, id_div )
{
  btn.innerHTML = (btn.innerHTML == '+')? '-' : '+';
  btn.title = (btn.title == 'Afficher la suite')? 'Masquer la suite' : 'Afficher la suite';
  document.getElementById( id_div ).style.display = (document.getElementById( id_div ).style.display == 'none')? 'block' : 'none';
}
</script>
                            <!--type -->


<br>
                            <div class="form-group">
                            <label for="ville"><i class="zmdi zmdi-city"></i></label>  
                             <div class="col-md-4">
                              <select name="ville"  style="width:250px;border:none;border-bottom: 1px solid;border-radius:0px ;" class="form-control input-md " >
                              
                            <option value="" disabled selected>Choisir votre ville</option>
  
                     <?php 
                        $reponse=$conn->query('SELECT * FROM ville ');
                         while( $donnees = $reponse->fetch_assoc() ) 
                         { ?>    
                                <option value="<?php echo $donnees['id'] ;?>"> <?php echo $donnees['libelle'] ;?></option>
                        <?php } ?>
                        
                     </select>
    
                         </div>
                        </div>

                            <div class="form-group">
                                <label for="photo"><i class="zmdi zmdi-file"></i></label>
                                <input type="file" required name="photo" id="file" placeholder="Mot de passe"/>
                            </div>
                            
                            <script>// Material Select Initialization
                                $(document).ready(function() {
                                $('.mdb-select').materialSelect(); });
                            </script>
                                                                        


                            <div class="form-group form-button">
                                
                                <button type="submit" name="submit" id="signup" class="btn form-submit">
                                    Enregistrer
                                </button>
                            
                            </div>
                            
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="authentification.php" class="signup-image-link">j'ai déja un compte</a>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>


    
  

 


</body>
</html>