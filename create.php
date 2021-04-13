<!--this is the html file for the create page of our Jeopardy! Game Creator website-->
<!DOCTYPE html>

<!--Some of this code was retrieved from the code provided by Professor Upsorn-->
<!--the meta tag ensures proper rendering and touch zooming -->
<meta charset="UTF-8">
<meta name="create page" content="this is the create game page for our website">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Mariah (mwt9dc)" content="created this page">

<!--the following links bootstrap and enables its usage-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
  integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<!--the CSS is included below and is not stored in an external CSS file-->
<style>
  body {
    background: rgba(255, 240, 156, 0.788);
  }

  .navbar {
    /* customizes the nav bar */
    top: 0xp;
    background: midnightblue;
    position: fixed;
    width: 100%;
    text-align: center;
    z-index: 300;
    /*got this z-index from this source: https://stackoverflow.com/questions/45967303/how-to-get-image-to-scroll-behind-navbar*/
  }

  .header {
    position: relative;
    height: 100%;
    width: 100%;
  }


  .page-footer {
    /* customizes the footer */
    background-color: midnightblue;
    color: white;
    padding: 40px 0px 20 px 0 px;
    position: static;
    height: 30px;
    width: 100%;
    bottom: 0pt;
    left: 0pt;
    text-align: center;
  }

  /* got the below code from this resource: https://www.w3schools.com/html/html_forms.asp (edited the code to fit our design) */

  /* Style the counter cards */
  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    /* this adds the "card" effect */
    padding: 16px;
    text-align: center;
    background-color: midnightblue;
    color: white;
  }

  input[type=text],
  select,
  textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid rgb(0, 0, 0);
    border-radius: 4px;
    resize: vertical;
  }

  label {
    padding: 12px 12px 12px 0;
    display: inline-block;
  }

  .container {
    border-radius: 5px;
    background-color: #99b4fc;
    padding: 20px;
  }

  .col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
  }

  .col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
  }

  input[type=button] { /* button customizations */ 
    background-color: midnightblue;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
  }

  input[type=button]:hover { /* when you hover, it is a darker color */ 
    background-color: rgb(16, 16, 70);
  }
</style>

<body>
  <header>
    <nav class="navbar navbar-expand-md navbar-dark">
      <!--creates the nav bar-->
      <a class="navbar-brand" href="home.php">Jeopardy! Online Game Creator</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="browse.html">Browse</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="create.php">Create</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="play.html">Play</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profile.html">Profile</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <br>
  <br>
  <br>
  <!-- got the below gridding code format inspiration from a w3schools sample form -->
  <div class="container">
    <input type="button" id="clear" onclick="clearGame()" value="Clear">
    <p id="welcome"></p>
    <!--button that clears the form-->
    <h1><strong>Create </strong></h1>
    <br>
    <br>
    <form action="createdform.php" method="post" id="game" autocomplete="off"> 
      <!--goes to the created form page-->
      <div class="row">
        <div class="col-25">
          <label for="title"><strong>Title</strong></label>
        </div>
        <div class="col-75">
          <input type="text" id="title" name="title" required>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="description"><strong>Description</strong></label>
        </div>
        <div class="col-75">
          <textarea id="description" name="description" style="height:200px" required></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="category1"><strong> Category 1 </strong></label>
        </div>
        <div class="col-75">
          <input type="text" name="category1">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="question1"> $200 Question </label>
        </div>
        <div class="col-75">
          <input type="text" name="question1">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="question2"> $400 Question </label>
        </div>
        <div class="col-75">
          <input type="text" name="question2">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="question3"> $800 Question </label>
        </div>
        <div class="col-75">
          <input type="text" name="question3">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="question4"> $1000 Question </label>
        </div>
        <div class="col-75">
          <input type="text" name="question4">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="category2"><strong> Category 2 </strong></label>
        </div>
        <div class="col-75">
          <input type="text" name="category2">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="question12"> $200 Question </label>
        </div>
        <div class="col-75">
          <input type="text" name="question12">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="question22"> $400 Question </label>
        </div>
        <div class="col-75">
          <input type="text" name="question22">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="question32"> $800 Question </label>
        </div>
        <div class="col-75">
          <input type="text" name="question32">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="question42"> $1000 Question </label>
        </div>
        <div class="col-75">
          <input type="text" name="question42">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="category3"><strong> Category 3 </strong></label>
        </div>
        <div class="col-75">
          <input type="text" name="category3">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="question13"> $200 Question </label>
        </div>
        <div class="col-75">
          <input type="text" name="question13">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="question23"> $400 Question </label>
        </div>
        <div class="col-75">
          <input type="text" name="question23">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="question33"> $800 Question </label>
        </div>
        <div class="col-75">
          <input type="text" name="question33">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="question43"> $1000 Question </label>
        </div>
        <div class="col-75">
          <input type="text" name="question43">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="category4"><strong> Category 4 </strong></label>
        </div>
        <div class="col-75">
          <input type="text" name="category4">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="question14"> $200 Question </label>
        </div>
        <div class="col-75">
          <input type="text" name="question14">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="question24"> $400 Question </label>
        </div>
        <div class="col-75">
          <input type="text" name="question24">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="question34"> $800 Question </label>
        </div>
        <div class="col-75">
          <input type="text" name="question34">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="question44"> $1000 Question </label>
        </div>
        <div class="col-75">
          <input type="text" name="question44">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="category5"><strong> Category 5 </strong></label>
        </div>
        <div class="col-75">
          <input type="text" name="category5">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="question15"> $200 Question </label>
        </div>
        <div class="col-75">
          <input type="text" name="question15">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="question25"> $400 Question </label>
        </div>
        <div class="col-75">
          <input type="text" name="question25">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="question35"> $800 Question </label>
        </div>
        <div class="col-75">
          <input type="text" name="question35">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="question45"> $1000 Question </label>
        </div>
        <div class="col-75">
          <input type="text" name="question45">
        </div>
      </div>
      <input class="btn btn-primary btn-block" id="submitbtn" type="submit" value="Create" />
      <br>
      <br>
      <br>
    </form>

  </div>

  <script>
    function createGame() { //creates a game (work in progress)
      document.getElementById("game").submit();
    }
    function clearGame() { //clears the data in the form (allows users to restart the form)
      document.getElementById("game").reset();
    }
    var welcome = function () { return "Welcome to the create a game form! Fill it out and click submit to create your game." }; //this is an anonymous function! :)
    document.getElementById("welcome").innerHTML = welcome();

  </script>

  <br>

  <footer class="page-footer">
    <!--creates the footer-->
    <p>
      <strong>Copyright &#169; 2021, Jeopardy! Online Game Creator. All Rights Reserved</strong>
    </p>
  </footer>

  <!--code provided by professor upsorn-->
  <!-- CDN for JS bootstrap -->
  <!--speeds up the website-->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
    crossorigin="anonymous"></script>


</body>

</html>