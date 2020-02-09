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
            <a class="nav-link" href="./l_search">Search</a>
          </li>
         <li class="nav-item">
            <a class="nav-link" href="./search">Entry Form</a>
          </li>
         <li class="nav-item">
            <a class="nav-link" href="./search">Update Status</a>
          </li>
          </ul>
          <form class="form-inline">
            <a href="./login_signup"><button class="btn btn-m btn-outline-secondary" type="button">Logout</button></a>
          </form>
        </div>
              <ul class="nav-item">
              <a href="./l_profile?username=tilhanda"><img src="https://www.habbo.com/habbo-imaging/avatarimage?direction=4&head_direction=2&gesture=sml&size=m&user=tilhanda" class="rounded float-right" alt="tilhanda" height="50px" width="50px" style="border-radius: 50%;"></a>
              </ul>
      </nav>

      <!--Agency name-->
      <br><br>
      <div class="row">
        <div class="col-xl-1 col-md-1 col-1">
        </div>
        <div class="col-xl-10 col-md-10 col-10">
        <blockquote class="blockquote text-center display-1">
          <div class="text1">
            <h1><strong><?php echo $agencyfullname; ?></strong></h1>
          </div>
        </blockquote>
       </div>
      </div>
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
    <!--greeting name-->
    <div class="row">
        <div class="col-xl-9 col-md-9 col-9">
        </div>
        <div class="col-xl-2 col-md-2 col-2">
    <div class="float-right">
      <cite title="Source Title">Hello, tilhanda</cite>
      <footer class="blockquote-footer"><cite title="Source Title">Founder of National Security Service</cite></footer>
    </div>
    </div>
    </div>
    <!--which panel?-->
    <div class="row">
        <div class="col-xl-1 col-md-1 col-1">
        </div>
        <div class="col-xl-10 col-md-10 col-10">
        <blockquote class="blockquote text-center display-1">
          <div class="text2">
            <h2><strong>(Senior Panel)</strong></h2>
          </div>
        </blockquote>
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
