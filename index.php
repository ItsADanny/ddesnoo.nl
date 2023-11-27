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
    <title>ItsDanny - Home</title>

    <link rel="icon" type="image/x-icon" href="resources/images/ItsD.ico">
        
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="https://kit.fontawesome.com/64093786fd.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="resources/stylesheet/main.css" type="text/css" charset="utf-8"/>
  </head>
  <body>
    <!-- Navbar -->
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <a href="#" class="navbar-brand">
          <img src="resources/images/ItsD.png" height="28" alt="Its/D">
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav">
            <a href="" target="_self" class="nav-item nav-link active">Home</a>
            <a href="blog/" class="nav-item nav-link disabled">Blog</a>
            <a href="career/" class="nav-item nav-link">Career</a>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Projects</a>
              <div class="dropdown-menu">
                <h6 class="dropdown-header white-text-color">Web projects</h6>
                <a href="projects/website/" class="dropdown-item white-text-color"><i class="fa-solid fa-globe"></i> ddesnoo.nl - website</a>
                <a href="projects/webtools/" class="dropdown-item white-text-color"><i class="fa-solid fa-globe"></i> ddesnoo.nl - web tools</a>
                <a href="projects/henksautopoets/" class="dropdown-item white-text-color"><i class="fa-solid fa-globe"></i> henksautopoets.nl</a>
                <h6 class="dropdown-header white-text-color">Car projects</h6>
                <a href="projects/jagdroid_interface/" class="dropdown-item white-text-color"><i class="fa-solid fa-car"></i> JagDroid - Custom Car Infotainment Interface</a>
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
            <?php
              // Does a check if the webpage user has been logged in. if so, show the logout button instead of the login button
              if ($_SESSION['Logged'] == 1) {
                echo('<a href="logout/" class="nav-item nav-link">Logout <i class="fa-solid fa-circle-user"></i></a>');
              } else {
                echo('<a href="login/" class="nav-item nav-link">Login <i class="fa-regular fa-circle-user"></i></a>');
              }
            ?>
          </div>
        </div>
      </div>
    </nav>
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->

    <!-- Fullpage hero -->
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    <div class="px-4 pt-5 my-5 text-center border-bottom hero">
      <div class="align-items-center hero-box">
        <h1 class="display-4 hero-text">Danny de Snoo</h1>
        <div class="col-lg-6 mx-auto">
          <p class="lead mb-4 hero-text">Software developer</p>
          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
            <button type="button" class="btn btn-outline-dark btn-lg px-4 me-sm-3 hero-text">Who am i?</button>
            <button type="button" class="btn btn-outline-dark btn-lg px-4 me-sm-3 hero-text">Career</button>
            <!-- <button type="button" class="btn btn-outline-dark btn-lg px-4 me-sm-3 hero-text">My businesses</button> -->
          </div>
        </div>
      </div>
    </div>
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->

    <!-- 2 column about section -->
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    <div class="container main-text-color">
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1" id="WhoAmI">Hi! i am Danny</h2>
          <p class="lead">I am a Software developer from the Rotterdam area in the Netherlands<br><br>I'm a nice fun and friendly person, with a passion for software development and classic cars.<br>I work well in teams but can also work on my own.<br>I am always up for a challange and willing to learn.<br><br>I am currently employed at Odin Warehousing & Logistics B.V. as a IT Specialist<br><br>For more information about my career, please go the career page on this website or go to my <a href="https://www.linkedin.com/in/ddesnoo/" target="_blank">Linkedin <i class="fa-brands fa-linkedin"></i></a><br>If you want direct contact via e-mail you can use: <a href="mailto:danny.desnoo@ddesnoo.nl">danny.desnoo@ddesnoo.nl <i class="fa-solid fa-square-envelope"></i></a> or via the contact button on the navigation bar.</p>
        </div>
        <div class="col-md-5">
          <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="https://media.licdn.com/dms/image/C4E03AQEsWMXULcoDqw/profile-displayphoto-shrink_400_400/0/1659312154160?e=1701302400&v=beta&t=zQDG46jEKsF8zwxwIeZ5BMSZJmfm70GO8ULtKt8h_cI" role="img" aria-label="Placeholder: " preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></rect><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text></img>
        </div>
      </div>
    </div>
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->

    <!-- 3 column career list -->
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    <section class="pt-5 pb-5 shadow-sm">
      <div class="container" id="Career">
        <div class="row">
          <div class="col-lg-4 mb-3 d-flex align-items-stretch">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="https://dudokrealestate.com/content/3-portfolio/1-logistiek-vastgoed/6-makassarstraat-1/37_dudok_groep_ossip.jpg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="10%" y="15%" fill="#eceeef" dy=".3em">Odin Warehousing & Logistics B.V.</text></svg>
              <div class="card-body">
                <h5 class="card-text"><i class="fa-solid fa-code"></i> IT Specialist</h5>
                <table>
                  <tr>
                    <th><i class="fa-solid fa-earth-europe"></i></th>
                    <td> </td>
                    <td>Hoogvliet / Maasvlakte, The Netherlands 🇳🇱</td>
                  </tr>
                  <tr>
                    <th><i class="fa-solid fa-calendar-days"></i></th>
                    <td> </td>
                    <td>August 2022 - Present</td>
                  </tr>
                </table>
                <hr>
                <br>
                <p class="card-text">Odin Warehousing & Logistics B.V. is a service provider for Solar panels and Solar panel connectors.<br><br>During my time at Odin warehousing & Logistics B.V. i was responsible for setting up the Intranet web infrastructur with Sharepoint, Creating the internal-program for generating ECMR files , Creating in Company tooling and the setup and prototyping of the EDI sytem<br><br><hr>At Odin Warehousing i worked with the following languages/databases/tools:<br><br>NodeJS, HTML, CSS, Javascript, MySQL, Visual Studio Code, Microsoft Sharepoint, Microsoft Office Admin, SoftPak, GitHub, Teamviewer, Postman, MySQLWorkshop and DB Browser for SQLLite</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-3 d-flex align-items-stretch">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="https://www.jorr-itsolutions.nl/wp-content/uploads/2018/04/cropped-cropped-DEF-LOGOS-LOS-01-1.png" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="10%" y="15%" fill="#eceeef" dy=".3em">Jorr-IT Solutions B.V.</text></svg>
              <div class="card-body">
                <h5 class="card-text"><i class="fa-solid fa-code"></i> Software developer</h5>
                <table>
                  <tr>
                    <th><i class="fa-solid fa-earth-europe"></i></th>
                    <td> </td>
                    <td>Spijkenisse, The Netherlands 🇳🇱</td>
                  </tr>
                  <tr>
                    <th><i class="fa-solid fa-calendar-days"></i></th>
                    <td> </td>
                    <td>May 2021 - November 2022</td>
                  </tr>
                </table>
                <hr>
                <h5 class="card-text"><i class="fa-solid fa-code"></i> Intern Software developer</h5>
                <table>
                  <tr>
                    <th><i class="fa-solid fa-earth-europe"></i></th>
                    <td> </td>
                    <td>Spijkenisse, The Netherlands 🇳🇱</td>
                  </tr>
                  <tr>
                    <th><i class="fa-solid fa-calendar-days"></i></th>
                    <td> </td>
                    <td>September 2020 - May 2021</td>
                  </tr>
                </table>
                <hr>
                <br>
                <p class="card-text">Jorr-IT Solutions B.V. is a software development company which develops customer specific software for a veriaty of industries.<br><br>During my time at Jorr-IT Solutions i was responsible for Full-stack developement of customer specific applications.<br><br><hr>At Jorr-IT Solutions i worked with the following languages/databases/tools:<br><br>NodeJS, Java, Python, PL/SQL, Android Studio, SQLLite , Visual Studio Code, Oracle Databases, Visual Studio Code, GitHub, Atlassian JIRA and Atlassian Confluenence</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-3 d-flex align-items-stretch">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="https://www.google.com/url?sa=i&url=https%3A%2F%2Fm.facebook.com%2Fp%2FMobiele-autopoetsbedrijf-Henks-Autopoets-100083107573460%2F&psig=AOvVaw0qqsvzYFdKzo1rnz4IlMlk&ust=1695898844529000&source=images&cd=vfe&opi=89978449&ved=0CBAQjRxqFwoTCMCwtNPRyoEDFQAAAAAdAAAAABAR" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="10%" y="15%" fill="#eceeef" dy=".3em">Henk's Autopoets</text></svg>
              <div class="card-body">
                <h5 class="card-text"><i class="fa-solid fa-car"></i> Car detailer</h5>
                <table>
                  <tr>
                    <th><i class="fa-solid fa-earth-europe"></i></th>
                    <td> </td>
                    <td>Hellevoetsluis, The Netherlands 🇳🇱</td>
                  </tr>
                  <tr>
                    <th><i class="fa-solid fa-calendar-days"></i></th>
                    <td> </td>
                    <td>October 2017 - April 2018</td>
                  </tr>
                </table>
                <hr>
                <br>
                <p class="card-text">Henk's Autopoets is a Car detailing company for consumers and businesses who expect their car(s) to be as beatifull as the day they picked up their car(s) from dealer.<br><br>During my time at Henk's Autopoets i was a Car detailer with the following responsibilitys:<br>Polishing Cars, Restoring Headlights, Restoring Chrome, Complete interior Cleaning and Detailing and Leather restoration</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->

    <!-- 3 column my business section -->
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    <!-- <div class="album py-5 bg-body-tertiary">
      <div class="container">
        <h2 class="main-text-color">My businesses</h2>
        <div class="row row-cols-1 row-cols-sm-3 row-cols-md-3 g-3">
          <div class="col">
            <div class="card card-main-color shadow-sm h-100">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Oakstrong Holding</title><rect width="100%" height="100%" fill="#222529"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
              <div class="card-body">
                <p class="card-text"><h5 style="text-decoration: underline;">Oakstrong detailing</h5>Oakstrong detailing, is focused on providing executive level car detailing to consumers and companies who only want the best in car detailing.<br><br>Oakstrong detailing provides the services such as: Full detailing services, Full car polishing and applying protective coatings such as Glass and Ceramic coatings</p>
                <div class="card-footer align-bottom">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-dark">View</button>
                    </div>
                    <small class="text-body-dark">Est. 2023</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card-main-color shadow-sm h-100">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Oakstrong IT consultancy</title><rect width="100%" height="100%" fill="#222529"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
              <div class="card-body">
                <p class="card-text"><h5 style="text-decoration: underline;">Oakstrong IT consultancy</h5>Oakstrong IT consultancy is focused on providing companies with the tools and expertice for setting up IT departments within organizations<br><br>We also provided a startup service for new IT startup companies so that they can access pre-check companies to deal with when starting up</p>
                <div class="card-footer align-bottom">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-dark">View</button>
                    </div>
                    <small class="text-body-dark">Est. 2023</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card-main-color shadow-sm h-100">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Oakstrong Holding</title><rect width="100%" height="100%" fill="#222529"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
                <div class="card-body">
                  <p class="card-text"><h5 style="text-decoration: underline;">Oakstrong Holding</h5>Oakstrong Holding, is a holding company with who is the current full-owner and controlling body of Oakstrong IT consultancy.<br><br>Oakstrong Holding is a family owned holding company based in the Netherlands.</p>
                    <div class="card-footer align-bottom">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-outline-dark">View</button>
                        </div>
                        <small class="text-body-dark">Est. 2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->
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

<!-- contact modal -->
<!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
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
            <input type="text" class="form-control" id="recipient-name" placeholder="e-mailadres">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text" placeholder="message"></textarea>
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
<!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    </body>
</html>