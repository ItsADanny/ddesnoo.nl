<?php
    //Import the db functions once
    require_once("../resources/functions/php/db.php");

    session_start();

    try {
        $_SESSION['Logged'];
        $_SESSION['Usr_ID'];
        $_SESSION['Username'];

        echo("<script>console.log('Logged: " . $_SESSION['Logged'] . "');</script>");
        echo("<script>console.log('Usr_ID: " . $_SESSION['Usr_ID'] . "');</script>");
        echo("<script>console.log('Username: " . $_SESSION['Username'] . "');</script>");
    } catch (Exception $exception) {
        echo("<script>console.log('exception: " . $exception . "');</script>");
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ItsDanny - Login</title>

    <link rel="icon" type="image/x-icon" href="../resources/images/ItsD.ico">
        
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="https://kit.fontawesome.com/64093786fd.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../resources/stylesheet/main.css" type="text/css" charset="utf-8"/>
  </head>
  <body>
    <!-- Navbar -->
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <a href="#" class="navbar-brand">
          <img src="../resources/images/ItsD.png" height="28" alt="Its/D">
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav">
            <a href="../" target="_self" class="nav-item nav-link active">Return to the homepage</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->

    <!-- 2 column about section -->
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    <div class="container main-text-color">
      <div class="row featurette">
      <div class="login-page">
  <div class="form">
    <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form">
      <input type="text" placeholder="username"/>
      <input type="password" placeholder="password"/>
      <button>login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>
      </div>
    </div>
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->

          <!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
          <footer id="footer" class="bg-dark text-white d-flex-column text-center">
            <hr class="mt-0">
            <!--Social buttons-->
            <div class="text-center">
              <h4 class="main-text-color">You can find me on</h4>
              <ul class="list-unstyled list-inline">
                <li class="list-inline-item">
                  <a target="_blank" href="https://instagram.com/your_local_classic_driver" class="sbtn btn-large mx-1" title="Instagram">
                    <i class="fab fa-instagram fa-2x"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a target="_blank" href="https://www.linkedin.com/in/ddesnoo/" class="sbtn btn-large mx-1" title="Linkedin">
                    <i class="fab fa-linkedin fa-2x"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a target="_blank" href="https://twitter.com/IDanny92357" class="sbtn btn-large mx-1" title="𝕏 (Twitter)">
                    <i class="fab fa-x-twitter fa-2x"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a target="_blank" href="https://www.youtube.com/channel/UC51nyhVOUTHmiVds8I_ndNg" class="sbtn btn-large mx-1" title="Youtube">
                    <i class="fab fa-youtube fa-2x"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a target="_blank" href="https://github.com/DannyDS-Oakstrong" class="sbtn btn-large mx-1" title="GitHub">
                    <i class="fab fa-github fa-2x"></i>
                  </a>
                </li>
              </ul>
            </div>
            <!--/.Social buttons-->
            <!--Qoute-->
            <div class="main-text-color py-3 text-center">
                <p>“The proper function of man is to live, not to exist. I shall not waste my days in trying to prolong them. I shall use my time.”</p>
	              <h6>― Jack London</h6>
                <p>“Tijd regelt de eeuwigheid”</p>
	              <h6>― Jakob Poot</h6>
              </div>
              <!--/.Copyright-->
            <!--Copyright-->
            <div class="main-text-color py-3 text-center">
              Copyright 2020 -
              <script>
                document.write(new Date().getFullYear())
              </script> <a target="_blank" href="https://holding.oakstrong.nl">Danny de Snoo, Oakstrong Holding</a>
            </div>
            <!--/.Copyright-->
        </footer>
        <!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    </body>
</html>