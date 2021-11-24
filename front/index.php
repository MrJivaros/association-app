<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script
   src="https://kit.fontawesome.com/64d58efce2.js"   crossorigin="anonymous" ></script>
  <link rel="stylesheet" href="styles.css" />
  <title>Se connecter</title>
  <meta name="apple-mobile-web-app-status-bar" content="white">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="theme-color" content="white">
 </head>

 <body>
    
  <div class="container">
   <div class="forms-container">
    <div class="signin-signup">
     <form action="./utils/Login.php" class="sign-in-form">
      <h2 class="title">Connexion</h2>
      <div class="input-field">
       <i class="fas fa-user"></i>
       <input type="text" placeholder="Identifiant" />
      </div>
      <div class="input-field">
       <i class="fas fa-lock"></i>
       <input type="password" placeholder="Mot de Passe" />
      </div>
      <input class="btn solid" type="submit" value="Se conecter" />
      <p class="social-text">Connectez vous avec les réseaux sociaux</p>
      <div class="social-media">
       <a href="#" class="social-icon">
        <i class="fab fa-facebook-f"></i>
       </a>
       <a href="#" class="social-icon">
        <i class="fab fa-twitter"></i>
       </a>
       <a href="#" class="social-icon">
        <i class="fab fa-google"></i>
       </a>
       <a href="#" class="social-icon">
        <i class="fab fa-linkedin-in"></i>
       </a>
      </div>
     </form>
     <form action="./utils/Register.php" class="sign-up-form">
      <h2 class="title">Inscription</h2>
      <div class="input-field">
       <i class="fas fa-user"></i>
       <input type="text" placeholder="Nom et Prénoms" />
      </div>
       <div class="input-field">
        <i class="fas fa-envelope"></i>
        <input type="email" placeholder="Fonction" />
       </div>
      <div class="input-field">
       <i class="fas fa-envelope"></i>
       <input type="email" placeholder="Email" />
      </div>
      <div class="input-field">
       <i class="fas fa-lock"></i>
       <input type="password" placeholder="Mot de passe" />
      </div>
      <input type="submit" class="btn" value="S'inscrire" />
      <p class="social-text">Inscrivez vous avec les réseaux sociaux</p>
      <div class="social-media">
       <a href="#" class="social-icon">
        <i class="fab fa-facebook-f"></i>
       </a>
       <a href="#" class="social-icon">
        <i class="fab fa-twitter"></i>
       </a>
       <a href="#" class="social-icon">
        <i class="fab fa-google"></i>
       </a>
       <a href="#" class="social-icon">
        <i class="fab fa-linkedin-in"></i>
       </a>
      </div>
     </form>
    </div>
   </div>

   <div class="panels-container">
    <div class="panel left-panel">
     <div class="content">
      <h3>Nouveau ?</h3>
      <p>
       Souhaitez-vous faire parti de notre équipe et participer à nos travaux aux quotidiens ? Cliquez ci-dessous
      </p>
      <br>
      <button class="btn transparent" id="sign-up-btn">S'inscrire</button>
     </div>
     <img src="img/log.svg" class="image" alt="" />
    </div>
    <div class="panel right-panel">
     <div class="content">
      <h3>Déjà parmi nous ?</h3>
      <p>
       Cliquez ci-dessous pour vous connecter
      </p>
      <button class="btn transparent" id="sign-in-btn">Se connecter</button>
     </div>
     <img src="img/register.svg" class="image" alt="" />
    </div>
   </div>
  </div>
  <script src="app.js"></script>
 </body>
</html>
