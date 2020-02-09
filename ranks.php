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
            <a class="nav-link" href="./n_search">Search</a>
          </li>
          </ul>
          <form class="form-inline">
            <a href="./login_signup"><button class="btn btn-m btn-outline-secondary" type="button">Login/Sign-up</button></a>
          </form>
        </div>
      </nav>
      <div class="row">
        <div class="col-xl-1 col-md-1 col-1">
        </div>
        <div class="col-xl-10 col-md-10 col-10">
        <blockquote class="blockquote text-center">
        <strong><h1>RANK LIST</h1>
        Approaching Standard Divisions 
        <br>
        <br>STANDARDS </strong>
        <br>Recruit 
        <br>Agent I 
        <br>Agent II 
        <br>Agent III 
        <br>Agent IV 
        <br>Head Agent 
        <br>Elite Officer I 
        <br>Elite Officer II 
        <br>Elite Officer III 
        <br>Elite Officer IV 
        <br>Elite Head Officer <br>
        <br><strong>Advertising</strong>
        <br>Trial Patrol Officer 
        <br>​Patrol Officer I 
        <br>Patrol Officer II 
        <br>Patrol Officer III 
        <br>Patrol Officer IV 
        <br>Head Patrol Officer 
        <br>Elite Patrol Officer I 
        <br>Elite Patrol Officer II 
        <br>Elite Patrol Officer III 
        <br>Elite Patrol Officer IV 
        <br>Head Elite Patrol Officer 
        <br><em>When promoted from Advertising, the selected member must choose either Training or Security.
        </em><br>
        <br><strong>Security </strong>
        <br>Trial Security Member 
        <br>​Security Member I 
        <br>Security Member II 
        <br>Security Member III 
        <br>Security Member IV 
        <br>Head Security 
        <br>Elite Security Officer I 
        <br>Elite Security Officer II 
        <br>Elite Security Officer III 
        <br>Elite Security Officer IV 
        <br>Elite Head Security Officer <br>
        <br><strong>Trainer </strong>
        <br>Trial Training Officer 
        <br>​Training Officer I 
        <br>Training Officer II 
        <br>Training Officer III 
        <br>Training Officer IV 
        <br>Head Training Officer 
        <br>Elite Training Officer I 
        <br>Elite Training Officer II 
        <br>Elite Training Officer III 
        <br>Elite Training Officer IV 
        <br>Elite Head Training Officer 
        <br><strong>Approaching High Rank​ Divisions 
        <br>
        <br>Management </strong>
        <br>Trial Management 
        <br>Novice Manager I 
        <br>​Novice Manager II 
        <br>Novice Manager III 
        <br>Novice Manager IV 
        <br>Junior Manager I 
        <br>Junior Manager II 
        <br>Junior Manager III 
        <br>Junior Manager IV 
        <br>Senior Manager I 
        <br>Senior Manager II 
        <br>Senior Manager III 
        <br>Senior Manager IV 
        <br>Elite High Rank Manager I 
        <br>Elite High Rank Manager II 
        <br>Elite High Rank Manager III 
        <br>Elite High Rank Manager IV 
        <br>Elite Head Manager 
        <br>Junior Commander I 
        <br>Junior Commander II 
        <br>Junior Commander III 
        <br>Junior Commander IV 
        <br>Senior Commander I 
        <br>Senior Commander II 
        <br>Senior Commander III 
        <br>Senior Commander IV 
        <br>Elite Commander I 
        <br>Elite Commander II 
        <br>Elite Commander III 
        <br>Elite Commanding Officer 
        <br>
        <br><strong>Senior Management</strong>
        <br>Trial Senior Management 
        <br>Novice Commissioner 
        <br>Junior Commissioner I 
        <br>Junior Commissioner II 
        <br>Junior Commissioner III 
        <br>Senior Commissioner I 
        <br>Senior Commissioner II 
        <br>Senior Commissioner III 
        <br>Supervising Commissioner I 
        <br>Supervising Commissioner II 
        <br>Supervising Commissioner III 
        <br>Head Commissioner 
        <br>Novice Co-Ordinator 
        <br>Junior Co-Ordinator I 
        <br>Junior Co-Ordinator II 
        <br>Junior Co-Ordinator III 
        <br>Senior Co-Ordinator I 
        <br>Senior Co-Ordinator II 
        <br>Senior Co-Ordinator III 
        <br>Elite Co-Ordinator I 
        <br>Elite Co-Ordinator II 
        <br>Elite Co-Ordinator III 
        <br>Elite Head Senior Manager 
        <br>
        <br><strong>Leadership </strong>
        <br>Trial Leadership 
        <br>Novice Leadership 
        <br>Junior Leadership I 
        <br>Junior Leadership II 
        <br>Junior Leadership III 
        <br>Senior Leadership I 
        <br>Senior Leadership II 
        <br>Senior Leadership III 
        <br>Master Leadership I 
        <br>Master Leadership II 
        <br>Master Leadership III 
        <br>Leadership Officer 
        <br>Leadership Sergeant 
        <br>Leadership Lieutenant 
        <br>Leadership Captain 
        <br>Leadership Lieutenant Colonel 
        <br>Head Leadership 
        <br>Deputy Leadership Chief 
        <br>Elite Leadership Chief 
        <br>
        <br><strong>Approaching Elective Division</strong> 
        <br><em>Members can only be promoted to this rank by applying, running campaign, Members will be selected by the Founders themselves. DO NOT TRANSFER INTO THIS DIVISION. (Those who do will be severely punished). 
        </em><br>
        <br><strong>Elective Division</strong>
        <br>Trial Elective 
        <br>Elective Candidate I 
        <br>Elective Candidate II 
        <br>Elective Candidate III 
        <br>Elective Candidate IV 
        <br>Elite Elective Member 
        <br>​ 
        <br><strong>Internal Affairs (5iC) </strong>
        <br>Trial IA 
        <br>IA Officer I 
        <br>IA Officer II 
        <br>IA Officer III 
        <br>IA Officer IV 
        <br>Head IA Officer 
        <br>IA Inspector 
        <br>IA Manager 
        <br>IA Official 
        <br>IA Commanding Officer 
        <br>
        <br><strong>Head of Departments (4iC)</strong> 
        <br>Trial HoD - N/A 
        <br>Head of Advertising - N/A 
        <br>Head of Security - N/A 
        <br>Head of Training - N/A 
        <br>Head of Events - N/A 
        <br>Head of Internal Affairs - N/A 
        <br>Head of External Affairs - N/A 
        <br>Head of Financial Affairs - N/A 
        <br>Head of Transfers - N/A 
        <br>Head of Junior Executives - N/A 
        <br>​Head of Senior Executives (3iC) - N/A 
        <br><em>Approaching Senior Leadership Team (These members must be respected no less nor unfairly by any ranks). Any one no matter the rank shall be respected at all times.
        <br></em>
        <br><strong>Directors Of NSS (3iC) </strong>
        <br>Trial Directors - N/A 
        <br>Director of Advertising - N/A 
        <br>Director of Security - N/A 
        <br>Director of Training - N/A 
        <br>Director of Events - N/A 
        <br>Director of Internal Affairs - N/A 
        <br>Director of External Affairs - N/A 
        <br>​Director of Financial Affairs - N/A 
        <br>Director of Transfers - N/A 
        <br>Director of Junior Executives - N/A 
        <br>Director of Senior Executives - N/A 
        <br>Assistant Director x2 (2iC) - N/A 
        <br>Head Director (2iC) - N/A 
        <br>
        <br><strong>SUPREME COMMAND of NSS (2iC) </strong>
        <br>Trial SC - N/A 
        <br>Junior Supreme Commander - N/A 
        <br>Senior Supreme Commander - N/A 
        <br>Vice Supreme Commander x2 (1.5iC) - N/A 
        <br>Head Supreme Commander (1.5iC) - N/A 
        <br><em>Founders will select their representatives based on loyalty, activity, respect, responsibility, actions etc. Those who seem to be abusing power or rules will be removed from the list of people to be chosen as a representative. 
        <br>Members of National Security Service will be the ones to vote for a 2 vice-presidents, 1 president and 5 secretaries. The founders will pick one of the people voted for 1 of the 8 positions. Elections will be based on activity, respect, responsibility, etc based on the current members of the division. If they are abusing their power and rank they will be forced to leave NSS. Appointing a new member to be elected. 
        </em><br>
        <br>
        <br><strong>Founder's Representatives (1iC) </strong>
        <br>Tilhanda's Representative - N/A 
        <br>Reapershadow's Representative - N/A 
        <br>Co-Founder's Representative - N/A 
        <br>Senior Founder's Representative - N/A 
        <br>Junior Founder's Representative - N/A 
        <br>
        <br><strong>Presidential Division (1iC)​​ </strong>
        <br>Secretary of Internal Affairs - N/A 
        <br>Secretary of Financial Affairs - N/A 
        <br>Secretary of The Vice-President x2 - N/A 
        <br>Secretary of The President - N/A 
        <br>Vice-President x2 (0.5iC) - N/A 
        <br>President of The NSS (0.5iC) - N/A 
        <br>
        <strong><br>Ownership (0.5iC)</strong>
        <br>Trial Ownership x4 - N/A 
        <br>Junior Owners x2 - N/A 
        <br>Senior Owners x2 -N/A 
        <br>Head Owners x2 - N/A 
        <br>Co-Owners x2 (iC) - N/A 
        <br>Owner (iC)- N/A 
        <br>
        <br><strong>Foundation Cabinet (iC) </strong>
        <br>Trial Founders x2 - N/A 
        <br>Junior Founder - N/A 
        <br>Senior Founder - N/A 
        <br>Co-Founders x2 - N/A 
        <br>
        <br><strong>Main Founders of NSS (iC) </strong>
        <br>Head Founding Father - Tilhanda 
        </blockquote>
        <br><br>
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