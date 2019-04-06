<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Thank You</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
    <style type="text/css">
      @media (min-width: 800px) and (max-width: 850px) {
              .navbar:not(.top-nav-collapse) {
                  background: #1C2331!important;
              }
          }
    </style>
</head>

<body>

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
            <li class="nav-item active">
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
$name = $phone = $city = $age = $gender = $bloodgroup = $disease = "";
if(isset($_POST['submit']))
{

 $name = $_REQUEST['Name'];
 $phone = $_REQUEST['Phone'];
 $city = $_REQUEST['City'];
 $age = $_REQUEST['Age'];
 $gender = $_REQUEST['Gender'];
 $bloodgroup = $_REQUEST['Bloodgroup'];
 $disease = $_REQUEST['Disease'];
}

$sql = "INSERT INTO Donate_Blood (Name,Blood_Group,Phone_Number,Age,Sex,Diseases,Nearest_City)
VALUES ('$name','$bloodgroup','$phone','$age','$gender','$disease','$city')";

if ($link->query($sql) === TRUE) {

} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}

 mysqli_close($link);
 ?>



  <!--Main layout-->
  <main>
    <!--Main layout-->
    <br> <br> <br> <br> <br> <br>  <br> <br> <br> <br> <br>

        <div class="container">
            <!--First row-->
            <div class="row wow fadeIn" data-wow-delay="0.2s">
                <div class="col-md-12">
                    <div class="jumbotron">
                        <h2 class="h2-responsive">Thank You dear, you are saving lives and doing good work keep it up.</h2>
                        <br>
                    </div>
                </div>
            </div>
            <!--/.First row-->
        </div>


  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn fixed-bottom">

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
