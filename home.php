<?php session_start() ?>
<!--this is the html file for the home page of our Jeopardy! Game Creator website-->
<!DOCTYPE html>
<html>

<head>
  <!--Some of this code was retrieved from the code provided by Professor Upsorn-->
  <meta charset="UTF-8">

  <!--the meta tag ensures proper rendering and touch zooming -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="Mariah (mwt9dc)" content="created this page">
  <meta name="home screen" content="page for the home screen">


  <!--the following links bootstrap and enables its usage-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


  <!--the CSS sytlesheet is linked below-->
  <link rel="stylesheet" href="home.css" />

</head>

<body>
  <header>
    <!--the following sets up the nav bar that will be present on all pages-->
    <!--in the future, we plan on putting this header in an html file and using php to add it to every page-->
    <nav class="navbar navbar-expand-md navbar-dark">
      <a class="navbar-brand" href="home.php">Jeopardy! Online Game Creator</a>
      <!--links the title in the left hand corner of the nav bar back to the home page-->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <!--makes the nav bar collapsible when the screen is not full screen or large enough to support the full horizaontal bar-->
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
        <!--the content of the nav bar-->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
            <!--links to the about page-->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="browse.html">Browse</a>
            <!--links to the browse page-->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="create.php">Create</a>
            <!--links to the create page-->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="play.html">Play</a>
            <!--links to the play page-->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profile.html">Profile</a>
            <!--links to the profile page-->
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <div class="jumbotron">
    <!--header image in a jumbotron-->
    <div class="header container-fluid">
      <div class="container">
        <div class="description">
          <!--puts text on the jumbotron-->
          <h1>Jeopardy!</h1>
          <p>Online Game Creator</p>
        </div>
      </div>
    </div>
  </div>
  <div class="container" ALIGN="center">
  <?php
          function welcomeUser($uname){ // user defined function
              echo "Welcome $uname!"; // find username variable 
          }
          welcomeUser("Ethan"); 
          ?>
    <br> 
    <br>
    <div class="row">
      <div class="col-md-4">
        <!--organizes the containers into smaller subsections-->
        <h3>Want to be on actual Jeopardy!?</h3>
        <div class="icons">
          <!--the below allows the user to click on images and be directed to the actual Jeopardy website-->
          <!--referenced this resource for the following code: https://www.tutorialspoint.com/How-to-use-an-image-as-a-link-in-HTML-->
          <a href="https://www.jeopardy.com/be-on-j">
            <img alt="Be on Jeopardy!"
              src="https://www.jeopardy.com/sites/default/files/styles/cta/public/2021-01/anytime_logo.png?itok=Ba_3M8gZ"
              width="150" height="70" class="responsive">
          </a>
        </div>
        <div class="hide">Click to see if you qualify!</div>
        <!--this shows up when the user hovers over an image-->
      </div>
      <div class="col-md-4">
        <!--organizes the containers into smaller subsections-->
        <h3>Latest Jeopardy! News</h3>
        <div class="icons">
          <!--the below allows the user to click on images and be directed to the actual Jeopardy website-->
          <!--referenced this resource for the following code: https://www.tutorialspoint.com/How-to-use-an-image-as-a-link-in-HTML-->
          <a href="https://www.jeopardy.com/jbuzz">
            <img alt="Be on Jeopardy!"
              src="https://www.jeopardy.com/sites/default/files/styles/article_image_960_/public/2021-02/Jeopardy_AdditionalGuestHosts_Announced_16x9.jpg?itok=XtgoIH_z"
              width="250" height="120" class="responsive">
          </a>
        </div>
        <div class="hide">Click for the latest news!</div>
        <!--this shows up when the user hovers over an image-->
      </div>
      <div class="col-md-4">
        <h3>Contact Us!</h3>
        <form action="contactform.php" method="post" autocomplete="on"> <!--found this html tag here https://www.w3schools.com/tags/att_input_autocomplete.asp-->
        <!--creates the contact form-->
        <!--got this code / referenced it from two POTDs that Professor Upsorn provided & this source: https://getbootstrap.com/docs/4.3/components/forms/?-->
        <div class="form-group">
        <input class="form-control" type="text" placeholder="Name" name="name" required/>
        </div>
        <div class="form-group">
        <input class="form-control" input type="email" placeholder="Email address" name="email" required/>
        </div>
        <div class="form-group">
          <textarea class="form-control" rows="4" cols="15" name="comment" required></textarea>
          </div>
        <div class="form group">
          <input class="btn btn-primary btn-block" id="submitbtn" type="submit" value="Send" />
        </div>
        </div>
        </div>
        </form>
  </div>


  <!--the following JS uses an event listener to send a message to the user that their message has been sucessfully sent-->
  <!--referenced the following resource for creating this code: https://www.w3schools.com/js/js_htmldom_eventlistener.asp-->
  <script>
    document.getElementById("submitbtn").addEventListener("click", function () {
      alert("Processing your submission! Please wait.");
    });

  </script>

  <br>
  <!--line break that is a carriage return-->

  <!--the following sets up the page footer present on all pages of our site-->
  <!--in the future, we plan on putting this in a separate file and using php to put it on every page-->
  <footer class="page-footer">
    <p>
      <strong>Copyright &#169; 2021, Jeopardy! Online Game Creator. All Rights Reserved</strong>
      <!--strong makes the font bold-->
      <!--the &#169 is the c in a circle symbol and we got this from a past project one of us collaborated on-->
    </p>
  </footer>

  <!-- this was provided by Professor Upsorn-->
  <!--speeds up our pages loading-->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
    crossorigin="anonymous"></script>

</body>
</html>