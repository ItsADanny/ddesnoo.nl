<?php 
  

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ItsDanny</title>

        <link rel="icon" type="image/x-icon" href="../../resources/images/ItsD.ico">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/js/bootstrap.bundle.min.js"></script>
    
        <script src="https://kit.fontawesome.com/64093786fd.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="../../resources/stylesheet/main.css" type="text/css" charset="utf-8"/>
    </head>
    <body style="overflow: hidden;">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">
                    <img src="../../resources/images/ItsD.png" height="28" alt="Its/D">
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="" target="_self" class="nav-item nav-link active">Home</a>
                        <a href="/blog/" class="nav-item nav-link disabled">Blog</a>
                        <a href="/career/" class="nav-item nav-link">Career</a>
                        <div class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Projects</a>
                          <div class="dropdown-menu">
                            <h6 class="dropdown-header white-text-color">Web projects</h6>
                              <a href="/projects/website/" class="dropdown-item white-text-color"><i class="fa-solid fa-globe"></i> ddesnoo.nl - website</a>
                              <a href="/projects/webtools/" class="dropdown-item white-text-color"><i class="fa-solid fa-globe"></i> ddesnoo.nl - web tools</a>
                              <a href="/projects/henksautopoets/" class="dropdown-item white-text-color"><i class="fa-solid fa-globe"></i> henksautopoets.nl</a>
                            <h6 class="dropdown-header white-text-color">Car projects</h6>
                              <a href="/projects/jagdroid_interface/" class="dropdown-item white-text-color"><i class="fa-solid fa-car"></i> JagDroid - Custom Car Infotainment Interface</a>
                            <h6 class="dropdown-header white-text-color">Product development projects</h6>
                              <a href="https://ticketmeister.eu" target="_blank" class="dropdown-item white-text-color"><i class="fa-regular fa-address-card"></i> TicketMeister - Easy to use, Ticket system with chat system integrations</a>
                              <a href="https://digibcard.eu" target="_blank" class="dropdown-item white-text-color"><i class="fa-regular fa-address-card"></i> Digi B Card - NFC Business Card with a easy to use web business card builder</a>
                          </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tools</a>
                            <div class="dropdown-menu">
                              <h6 class="dropdown-header white-text-color">Web tools</h6>
                                <a href="/webtools/whatsmyip/" class="dropdown-item white-text-color"><i class="fa-solid fa-globe"></i> What's my IP</a>
                                <a href="/webtools/whois/" class="dropdown-item disabled"><i class="fa-solid fa-question"></i> WhoIs - <i class="fa-solid fa-hammer"></i></a>
                                <a href="/webtools/password_generator/" class="dropdown-item white-text-color"><i class="fa-solid fa-key"></i> Password Generator</a>
                              <h6 class="dropdown-header white-text-color">Encoding / Decoding</h6>
                                <a href="/webtools/base64/encoder/" class="dropdown-item white-text-color"><i class="fa-solid fa-file-code"></i> Base64 Encoder</a>
                                <a href="/webtools/base64/decoder/" class="dropdown-item white-text-color"><i class="fa-regular fa-file-code"></i> Base64 Decoder</a>
                              <h6 class="dropdown-header white-text-color">Encryptor</h6>
                                <a href="/webtools/file/encryptor/" class="dropdown-item disabled"><i class="fa-solid fa-file"></i> File Encryptor - <i class="fa-solid fa-hammer"></i></a>
                                <a href="/webtools/file/decryptor/" class="dropdown-item disabled"><i class="fa-regular fa-file"></i> File Decryptor - <i class="fa-solid fa-hammer"></i></a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Downloads</a>
                          <div class="dropdown-menu">
                              <!-- <a href="#" class="dropdown-item white-text-color"><i class="fa-regular fa-file-lines"></i> Resume - EN</a>
                              <a href="#" class="dropdown-item white-text-color"><i class="fa-regular fa-file-lines"></i> Resume - NL</a> -->
                          </div>
                        </div>
                        <a href="#" class="nav-item nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Contact</a>
                    </div>
                    <div class="navbar-nav ms-auto">
                        <a href="#" class="nav-item nav-link">Login <i class="fa-regular fa-circle-user"></i></a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container">
          <h1></h1>
        </div>

        <div class="px-4 pt-5 my-5 text-center border-bottom banner">
            <div class="align-items-center">
            <h4 class="display-4 hero-text">Danny de Snoo</h4>
            <div class="col-lg-6 mx-auto">
              <p class="lead mb-4 hero-text">Software developer</p>
            </div>
            </div>
        </div>

        <div class="container main-text-color">
          <h4>Select the options you want to use for password generation:</h4>
          <br>
          <div class="container align-items-center">
          <form action="/">
            

            <div class="wrap">
              <div class="search">
                <input type="text" class="searchTerm" placeholder="What are you looking for?">
                <button type="submit" class="searchButton">
                  <i class="fa-solid fa-arrow-rotate-right"></i>
                </button>
              </div>
              <div class="container col-3 align-items-center"></div>
                <ul class="list-unstyled list-inline">
                  <li class="list-inline-item">
                    <p><input type="checkbox" id="Alpha" checked> Use alpha characters</p>
                  </li>
                  <li class="list-inline-item">
                    <p><input type="checkbox" id="Numberic" checked> Use numberic characters</p>
                  </li>
                  <li class="list-inline-item">
                    <p><input type="checkbox" id="Special" checked> Use special characters</p>
                  </li>
                </ul>
              </div>
            </div>
          </form>
          </div>
          <br><br>
          <hr>
          <h6>Disclaimer:<br>This tool is free to use, non of the generated passwords are stored by ddesnoo.nl</h6>
        </div>

          <footer id="footer" class="bg-dark text-white d-flex-column text-center fixed-bottom">
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