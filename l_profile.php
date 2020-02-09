<!DOCTYPE html>
<?php $habboname=$_GET['username']; include 'profileconnect.php?hname=$habboname';?>
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
  .text1 h1{
    font-size: 60px;
  }  
  .text2 h2{  
    font-size: 40px;
  }
  .text3 h3{  
    font-size: 30px;
  }
  .wrapperbtn{
    text-align: center;
  }
  @media only screen and (max-width: 768px) {
    .text1 h1{
    font-size: 40px;
    }  
    .text2 h2{  
      font-size: 25px;
    }
    .text3 h3{  
      font-size: 20px;
    }
    
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
              </li>
          <li class="nav-item">
            <a class="nav-link" href="./l_search">Search</a>
          </li>
          </ul>
          <form class="form-inline">
            <a href="./login_signup"><button class="btn btn-m btn-outline-secondary" type="button">Logout</button></a>
          </form>
        </div>
              <ul class="nav-item">
              <a href="./profile?hname=tilhanda"><img src="https://www.habbo.com/habbo-imaging/avatarimage?direction=4&head_direction=2&gesture=sml&size=m&user=tilhanda" class="rounded float-right" alt="tilhanda" height="50px" width="50px" style="border-radius: 50%;"></a>
              </ul>
      </nav>

      <!--image-->
    <div class="row">
        <div class="col-xl-10 col-md-10 col-10">
        </div>
        <div class="col-xl-1 col-md-1 col-1">
     <div class="habboavatar">
      <img src="https://www.habbo.com/habbo-imaging/avatarimage?direction=4&head_direction=3&gesture=sml&size=m&user=tilhanda" class="rounded float-right" alt="tilhanda"><br>
      </div>
      </div>
    </div>

    <div class="row">
        <div class="col-xl-3 col-md-2 col-2">
        </div>
        <div class="col-xl-6 col-md-8 col-8">
    <table class="table">
  <tbody>
    <?php //if ($result_profile = $mysqli->query($query)) { ?>
        <?php //while ($row = $result->fetch_assoc()) { ?>
             <?php 
                    $field1name = "tilhanda";
                    $field2name = "til@gmail.com";
                    $field3name = "Founder";
                    $field4name = "Admin";
                    $field5name = "01-01-2020";
                    //$field1name = $row["hanme"];
                    //$field2name = $row["email"];
                    //$field3name = $row["rank"];
                    //$field4name = $row["updatedby"];
                    //$field5name = $row["updatedate"];
                     ?>
    <tr>
      <td>Habbo Username: </td>
      <td><?php echo '<b>'.$field1name.'</b>';?></td>
    </tr>
    <tr>
      <td>E-mail: </td>
      <td><?php echo '<b>'.$field2name.'</b>';?></td>
    </tr>
    <tr>
      <td>Rank: </td>
      <td><?php echo '<b>'.$field3name.'</b>';?></td>
    </tr>
    <tr>
      <td>Updated By: </td>
      <td><?php echo '<b>'.$field4name.'</b>';?></td>
    </tr>
    <tr>
      <td>Update Date: </td>
      <td><?php echo '<b>'.$field5name.'</b>';?></td>
    </tr>
          <?php //} ?>
        <?php //} ?>
  </tbody>
</table>
<!--promotion logs of user-->
<h3>Promotion Logs</h3>
<div class="table-responsive">
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Habbo Username</th>
      <th scope="col">Division</th>
      <th scope="col">Rank</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
    <?php //if ($result_promotion = $mysqli->query($query)) { ?>
        <?php //while ($row = $result->fetch_assoc()) { ?>
             <?php 
                    $field1proname = "_ANKIT_";
                    $field2proname = "1ic";
                    $field3proname = "Junior Founder";
                    $field4proname = "01-01-2020";
                    //$field1proname = $row["hname"];
                    //$field2proname = $row["div"];
                    //$field3proname = $row["updatedate"];
                    //$field4proname = $row["reason"];
                     ?>
      <tr>
        <td><?php echo '<b>'.$field1proname.'</b>';?></td>
        <td><?php echo '<b>'.$field2proname.'</b>';?></td>
        <td><?php echo '<b>'.$field3proname.'</b>';?></td>
        <td><?php echo '<b>'.$field4proname.'</b>';?></td>
      </tr>
        <?php //} ?>
        <?php //} ?>
  </tbody>
</table>
</div>
<!--Demotion logs of user-->
<h3>Demotion Logs</h3>
<div class="table-responsive">
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Habbo Username</th>
      <th scope="col">Rank</th>
      <th scope="col">Date</th>
      <th scope="col">Reason</th>
    </tr>
  </thead>
  <tbody>
        <?php //if ($result_demotion = $mysqli->query($query)) { ?>
        <?php //while ($row = $result->fetch_assoc()) { ?>
             <?php 
                    $field1demname = "ntyx";
                    $field2demname = "non staff";
                    $field3demname = "01-01-2020";
                    $field4demname = "Trolling";
                    //$field1demname = $row["hname"];
                    //$field2demname = $row["rank"];
                    //$field3demname = $row["updatedate"];
                    //$field4demname = $row["reason"];
                     ?>
      <tr>
        <td><?php echo '<b>'.$field1demname.'</b>';?></td>
        <td><?php echo '<b>'.$field2demname.'</b>';?></td>
        <td><?php echo '<b>'.$field3demname.'</b>';?></td>
        <td><?php echo '<b>'.$field4demname.'</b>';?></td>
      </tr>
        <?php //} ?>
        <?php //} ?>
  </tbody>
</table>
</div>

<br><br><br><br><br><br>
</div>
</div>


      <!--end loading-->
    <script>
    window.addEventListener("load", function () {
    const loader = document.querySelector(".loader");
    loader.className += " hidden"; // class "loader hidden"
    });
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
