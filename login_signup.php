<!DOCTYPE html>
<?php include 'variable.php';?>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="./assets/css/loader.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/background.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/font.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<style>
    h1{
    font-size: 50px;
    }  
  </style>

<body>
    <div class="loader">
    <img src="./assets/image/loading.svg" alt="Loading..." />
    </div>
    <!--after loading-->

<!--navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="./index">Home</a>
          </li>
              <!--1-->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Rank
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="./ranks">Ranks</a>
                  <a class="dropdown-item" href="./rankprice">Rank Price</a>
                </div>
              </li>
              <!--2-->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Special Units
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">External Affairs</a>
                  <a class="dropdown-item" href="#">Financial Affairs</a>
                  <a class="dropdown-item" href="#">Internal Affairs</a>
                  <a class="dropdown-item" href="#">Transfer Unit</a>
                </div>
              </li>
              <!--3-->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Importants Links
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Code Of Conduct</a>
                  <a class="dropdown-item" href="#">Pay FAQ</a>
                </div>
            <li class="nav-item">
            <a class="nav-link" href="./n_search">Search</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./alldetail">All Detail</a>
          </li>
              </li>
          </ul>
          <form class="form-inline">
            <a href="./login_signup"><button class="btn btn-m btn-outline-secondary" type="button">Login/Sign-up</button></a>
          </form>
        </div>
      </nav>

    <!--Form-->
    <br><br>
      <div class="row">
        <div class="col-xl-4 col-md-3 col-2">
        </div>
        <div class="col-xl-4 col-md-6 col-8">
    <!--login-->
      <form id="login_form" name="login" method="post" action="./login_signup_connect.php">
      <strong><h1><?php echo $agencyname;?></h1></strong>
        <div class="form-group">
          <input type="text" class="form-control" id="exampleInputText" name="hname" placeholder="Habbo Username">
          <small id="emailHelp" class="form-text text-muted">This is unique for everyone.</small>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" name="login_submit" class="btn btn-primary">Login</button>
      </form>
    <!--signup-->
      <form id="register_form" action="./login_signup_connect.php" method="POST" style="display: none;">
      <strong><h1><?php echo $agencyname;?></h1></strong>
      <div class="form-group">
          <input type="text" class="form-control" id="exampleInputText" name="hname" placeholder="Habbo Username">
        </div>
      <div class="form-group">
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" id="exampleInputPassword1" name="pwd" placeholder="Password">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" id="exampleInputPassword1" name="cpwd" placeholder="Confirm Password">
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" name="signup_submit" class="btn btn-primary">Signup</button>
      </form>
        <a id="switchForm" href="#">
        <p>Not yet a member? Register now!</p></a>

      </div>

    <!--end loading-->
    <script>
    window.addEventListener("load", function () {
    const loader = document.querySelector(".loader");
    loader.className += " hidden"; // class "loader hidden"
    });

    $("#switchForm").click(function(){
    const isLoginVisible = $("#login_form").is(':not(:hidden)');
    if(isLoginVisible) {
        $("#login_form").hide();
        $("#register_form").show();
        $("#switchForm > p").html("<br>Already member? Login now!<br><br>");
    } else {
        $("#login_form").show();
        $("#register_form").hide();
        $("#switchForm > p").html("<br>Not yet a member? Register now!<br><br>");
    }
    })

    </script>

    <!-- Wave SVG Animation -->
  <div class="waves">
    <svg width="100%" height="150px" fill="none" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
      <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
        <stop offset="0%" stop-color="#00B4DB" />
        <stop offset="50%" stop-color="#224488" />
        <stop offset="100%" stop-color="#0083B0" />
      </linearGradient>
      <path 
        fill="url(#grad1)" 
        d="
          M0 67
          C 273,183
            822,-40
            1920.00,106 
          
          V 359 
          H 0 
          V 67
          Z">
        <animate 
          repeatCount="indefinite" 
          fill="url(#grad1)" 
          attributeName="d" 
          dur="15s"
          attributeType="XML"
          values="
            M0 77 
            C 473,283
              822,-40
              1920,116 
            
            V 359 
            H 0 
            V 67 
            Z; 

            M0 77 
            C 473,-40
              1222,283
              1920,136 
            
            V 359 
            H 0 
            V 67 
            Z; 

            M0 77 
            C 973,260
              1722,-53
              1920,120 
            
            V 359 
            H 0 
            V 67 
            Z; 

            M0 77 
            C 473,283
              822,-40
              1920,116 
            
            V 359 
            H 0 
            V 67 
            Z
            ">
        </animate>
      </path>
    </svg>
  </div>
</body>
</html>
