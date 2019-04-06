<html>
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Donors</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <style type="text/css">
    html,
    body,
    header,
    .view {
      height: 100%;
    }

    @media (max-width: 740px) {
      html,
      body,
      header,
      .view {
        height: 1000px;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      html,
      body,
      header,
      .view {
        height: 650px;
      }
    }
    @media (min-width: 800px) and (max-width: 850px) {
              .navbar:not(.top-nav-collapse) {
                  background: #1C2331!important;
              }
          }
  </style>
</head>
<body style="background:url(https://griffithmedicalcentre.com.au/wp-content/uploads/2016/08/cropped-header-3.jpg)">
  <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark elegant-color-dark">
      <div class="container">

        <!-- Brand -->
        <a class="navbar-brand" href="home.html" target="_blank">
          <strong>Upchaar</strong>
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Left -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link" href="home.html">Home         
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="tips.html" >Health Tips<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="emergency.html" >Emergency<span class="badge badge-danger ml-2">!</span></a>
            </li>
   
            <li class="nav-item">
              <a class="nav-link" href="consultation.html" >Consult</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="nearby.html" >Nearby</a>
            </li>
          </ul>

          <!-- Right -->
          <ul class="navbar-nav nav-flex-icons">

            <li class="nav-item">
              <a href="accept.html" class="nav-link border border-light rounded"
                target="_blank">
                <i class="fas fa-syringe blue-text pr-3"></i> Need Blood
              </a>
            </li>
            <li class="nav-item">
              <a href="donate.html" class="nav-link border border-light rounded"
                target="_blank">
                <i class="fas fa-tint red-text pr-3"></i> Donate Blood
              </a>
            </li>
          </ul>

        </div>

      </div>
    </nav>
    <!-- Navbar -->


<br><br><br>
<div style="background: blue"></div>
  <?php  
  $dbhost = "localhost";
  $port='8080';
  $server=$dbhost . ':' . $port;
  $dbuser = 'root';
  $dbpass = '';
  $link=count($t_tmp = explode(':',$server)) > 1 ? mysqli_connect($t_tmp[0], $dbuser, $dbpass,'',$t_tmp[1]) : mysqli_connect($server,$dbuser,$dbpass);
   if(!$link)
   {
     die('Error: Could not connect: ' . mysqli_error($link));

   }

  $dbname = 'Hospital';
  //Select Database
  mysqli_select_db($link,$dbname);
  $search ="p";
  if(isset($_POST['submit']))
  {
    $search = isset($_REQUEST['search']) ? $_REQUEST['search'] : 'p';
  }

  $sql = "select * from Donate_Blood where Blood_Group = '$search' ";
    $result = $link->query($sql);
    $v = 1;
    if ( $result->num_rows>0) {
      
            while($row = $result->fetch_assoc()){
              $p =1;
            echo "<p ><h2 style='color:red'>Person".$v."</h2>";
            echo "<p ><h4 style='color:black'>".$p.' Name:  '.$row['Name']."</h4>";$p +=1;
            echo "<p ><h4 style='color:black'>".$p.' Blood_Group:  '.$row['Blood_Group']."</h4>";$p +=1; 
            echo "<p ><h4 style='color:black'>".$p.' Mobile_No:  '.$row['Phone_Number']."</h4>";$p +=1;
            echo "<p ><h4 style='color:black'>".$p.' Age:  '.$row['Age']."</h4>";$p +=1; 
            echo "<p ><h4 style='color:black'>".$p.' Sex:  '.$row['Sex']."</h4>";$p +=1; 
            echo "<p ><h4 style='color:black'>".$p.' Chronic Disease:  '.$row['Diseases']."</h4>";$p +=1; 
            echo "<p ><h4 style='color:black'>".$p.' City:  '.$row['Nearest_City']."</h4>"; 
            $v +=1;
        }
  
    } 
  if($v==1) 
  {
      echo "<h2>No Person Found . Join our live chat</h2>";
  }
  ?>
   <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn ">

    <!--Call to action-->
    <div class="pt-4">
      
      <a class="btn btn-outline-white" href="aboutus.html" target="_blank" role="button">About us 
        <i class="fas fa-temperature-low blue-text pr-3"></i>
      </a>
    </div>
    <!--/.Call to action-->

    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
      <a href="https://www.facebook.com/mdbootstrap" target="_blank">
        <i class="fab fa-facebook-f mr-3"></i>
      </a>

      <a href="https://twitter.com/MDBootstrap" target="_blank">
        <i class="fab fa-twitter mr-3"></i>
      </a>

      <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
        <i class="fab fa-youtube mr-3"></i>
      </a>

      <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
        <i class="fab fa-google-plus-g mr-3"></i>
      </a>

      <a href="https://dribbble.com/mdbootstrap" target="_blank">
        <i class="fab fa-dribbble mr-3"></i>
      </a>

      <a href="https://pinterest.com/mdbootstrap" target="_blank">
        <i class="fab fa-pinterest mr-3"></i>
      </a>

      <a href="https://github.com/mdbootstrap/bootstrap-material-design" target="_blank">
        <i class="fab fa-github mr-3"></i>
      </a>

      <a href="http://codepen.io/mdbootstrap/" target="_blank">
        <i class="fab fa-codepen mr-3"></i>
      </a>
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2019 Copyright:
      <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> thunder_buddies </a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>
  </body>
  </html>