<?php
require('connexion.php');
session_start();
if(isset($_SESSION["id"]))
{
    header('Location: index.php');
}
?>

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connecter</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

 
    <div class="main" style="padding-top:20px">

 <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                        
                        <?php

if(isset($_POST['submit']))
{   
    $reponse=$conn->query('SELECT * FROM user ');
    while( $donnees = $reponse->fetch_assoc())
    {   
        
        if($donnees['login']==$_POST['pseudo'] && $donnees['mdp']==$_POST['pass'] )
        {
            $_SESSION["pseudo"]=$donnees["login"];
            $_SESSION["id"]=$donnees["id"];
            $_SESSION["nom"]=$donnees["nom"];
            $_SESSION["prenom"]=$donnees["prenom"];
            header('Location: index.php');
            
        }
    }
    echo "<strong style='color:red;' >Login ou mot de passe sont incorrectes .</strong>";



}?>
                   <a href="creer_compte.php" class="signup-image-link">Creer un compte</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Connecter</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="pseudo" id="pseudo" placeholder="Votre pseudo"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Mot de passe"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        
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