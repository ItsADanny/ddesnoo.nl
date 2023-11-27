<?php 
    //Load the database functions for php once.
  require_once("resources/functions/php/db.php");

  session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ItsDanny - Projects</title>

        <link rel="icon" type="image/x-icon" href="../resources/images/ItsD.ico">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/js/bootstrap.bundle.min.js"></script>
    
        <script src="https://kit.fontawesome.com/64093786fd.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="../resources/stylesheet/main.css" type="text/css" charset="utf-8"/>
    </head>
    <body>
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
                        <a href="../" class="nav-item nav-link">Home</a>
                        <a href="#" class="nav-item nav-link disabled">Blog</a>
                        <a href="../career/" class="nav-item nav-link">Career</a>
                        <div class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Projects</a>
                          <div class="dropdown-menu">
<!--
                            <h6 class="dropdown-header white-text-color">Web projects</h6>
                            <a href="#" class="dropdown-item white-text-color"><i class="fa-solid fa-globe"></i> ddesnoo.nl - website</a>
                            <a href="#" class="dropdown-item white-text-color"><i class="fa-solid fa-globe"></i> ddesnoo.nl - web tools</a>
                            <a href="" class="dropdown-item white-text-color"><i class="fa-solid fa-globe"></i> henksautopoets.nl</a>
                            <hr>
                            <h6 class="dropdown-header white-text-color">Car projects</h6>
                            <a href="#" class="dropdown-item white-text-color"><i class="fa-solid fa-car"></i> JagDroid - Custom Car Infotainment Interface</a>
                            <hr>
                            <h6 class="dropdown-header white-text-color">Product development projects</h6>
                            <a href="#" class="dropdown-item white-text-color"><i class="fa-regular fa-address-card"></i> NFCard - NFC Business Card</a>
                            <a href="#" class="dropdown-item white-text-color"><i class="fa-regular fa-address-card"></i> NFCard 2.0 - NFC Business Card with a easy to use web business card builder</a>
-->
                              
<!--                              This will be generated automaticly-->
                              
                          </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tools</a>
                            <div class="dropdown-menu dropdown-fullop">
                              <h6 class="dropdown-header white-text-color">Web tools</h6>
                              <a href="#" class="dropdown-item white-text-color"><i class="fa-solid fa-globe"></i> What's my IP</a>
                              <a href="#" class="dropdown-item disabled"><i class="fa-solid fa-question"></i> WhoIs - <i class="fa-solid fa-hammer"></i></a>
                              <a href="#" class="dropdown-item white-text-color"><i class="fa-solid fa-key"></i> Password Generator</a>
                              <hr>
                              <h6 class="dropdown-header white-text-color">Encoding / Decoding</h6>
                              <a href="#" class="dropdown-item white-text-color"><i class="fa-solid fa-file-code"></i> Base64 Encoder</a>
                              <a href="#" class="dropdown-item white-text-color"><i class="fa-regular fa-file-code"></i> Base64 Decoder</a>
                              <hr>
                              <h6 class="dropdown-header white-text-color">Encryptor</h6>
                              <a href="#" class="dropdown-item disabled"><i class="fa-solid fa-file"></i> File Encryptor - <i class="fa-solid fa-hammer"></i></a>
                              <a href="#" class="dropdown-item disabled"><i class="fa-regular fa-file"></i> File Decryptor - <i class="fa-solid fa-hammer"></i></a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Downloads</a>
                          <div class="dropdown-menu">
                            <a href="#" class="dropdown-item white-text-color disabled"><i class="fa-regular fa-file-lines"></i> Resume - EN</a>
                            <a href="#" class="dropdown-item white-text-color disabled"><i class="fa-regular fa-file-lines"></i> Resume - NL</a>
                          </div>
                        </div>
                        <a href="#" class="nav-item nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Contact</a>
                    </div>
                    <div class="navbar-nav ms-auto">
                        if ($_SESSION['Logged'] == 1) {
                            echo('<a href="../logout/" class="nav-item nav-link">Logout <i class="fa-solid fa-circle-user"></i></a>');
                        } else {
                            echo('<a href="../login/" class="nav-item nav-link">Login <i class="fa-regular fa-circle-user"></i></a>');
                        }
                    </div>
                </div>
            </div>
        </nav>
        <br>
            <section class="pt-5 pb-5 shadow-sm">
              <div class="container" id="Project">
<!--                A list with all the projects will be generated here-->
              </div>
            </section>

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
              Copyright 1993-
              <script>
                document.write(new Date().getFullYear())
              </script> <a target="_blank" href="https://holding.oakstrong.nl">Danny de Snoo, Oakstrong Holding</a>
            </div>
            <!--/.Copyright-->
        </footer>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-dark white-text-color">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Contact</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">From:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
          <div class="mb-3">
            <h6>Your e-mail shall only be used to notify the recipient that you have sent him an e-mail, it will not be used for any other reason and will be forgotten immediately by the website when the message has been sent</h6>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Send message</button>
      </div>
    </div>
  </div>
</div>
    </body>
</html>