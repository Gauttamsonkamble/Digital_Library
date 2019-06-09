<?php
error_reporting(0);
session_unset();
include 'dyp.php';
?> 

<?php
if($_POST['login']){
function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
              }
$uemail=$_POST['uname'];

$upassword1=$_POST['upass'];

              
               $email=test_input($uemail);
               
                $upass=test_input($upassword1);
                $sql = "SELECT * FROM user where username='$email' && password='$upass'";
                  $obj=new user;
                  if($obj->login($sql)){
                    if($_SESSION["ADMIN"]=="1")
                    {
                      $_SESSION["dypuser"]=$email;
                     // $obj->url("admin/dashboard.php"); 
                     echo '<script>window.location="admin/dashboard.php";</script>';
                    }else{
                     $_SESSION["dypuser"]=$email;
                //    $obj->url("user/dashboard.php");
                echo '<script>window.location="user/dashboard.php";</script>';
                    }
                    
                  }else{
                  $obj->url("index.php?err=error");
                }
}
?>


<?php
if($_POST['register']){
function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
              }
             
 
 $fname=$_POST['fname'];
$mobileno=$_POST['mobileno'];
 $email1=$_POST['email1'];
$pwd1=$_POST['pwd1'];
 $course1=$_POST['course1'];

   
   $added_date=date('Y-m-d');
  $sql="INSERT INTO user (`id`,`name`,`username`,`password`,`mobile_no`,`Course`,`added_date`) values(NULL,'$fname','$email1','$pwd1','$mobileno','$course1','$added_date')";

               $obj=new user;
                  if($obj->insert($sql)){
                    
                  $obj->url("index.php");   
                  }else{
                  $obj->url("index.php?err=error");
                }
}
?>

<?php
error_reporting(0);
if($_POST['register1'])
{

  $servername="localhost";
    $username="root";
    $password="";
    $dbname="dyp_lab";

    $conn=new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error){
      die('connection failed:'.$conn->connect_error);
    }else{
      return true;
    }
  echo  $fname=$_POST['fname'];
   echo $mobileno=$_POST['mobileno'];
   echo $email1=$_POST['email1'];
   echo $pwd1=$_POST['pwd1'];
   echo $course1=$_POST['course1'];
   
   $added_date=date('Y-m-d');
  $sql="INSERT INTO `dyp_lab`.`user` (`id`,`name`,`username`,`password`,`mobile_no`,`Course`,`added_date`) values(NULL,'$fname','$email1','$pwd1','$mobileno','$course1','$added_date')";
//echo $sql;exit;
//echo $conn->last_query();exit;
if($conn->query($sql)===TRUE)
{
  echo "record added successfully";
}else{
  echo "failed  to insert record";
}
$conn->close();

}
?>
<?php 
include_once('header.php');
?>

 <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="#">
        <strong>DYP Digital Library</strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#aboutus">About Us</a>
          </li>
         
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          
          <li class="nav-item">
            <a href="#" class="nav-link border border-light rounded"
              data-toggle="modal" data-target="#fluidModalRightSuccessDemo">
              <i class="fa fa-github mr-2"></i>Signup &nbsp;&nbsp; 
            </a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->


     <form action="index.php" method="post">              
<!-- Full Height Modal Right Success Demo-->
<div class="modal fade right" id="fluidModalRightSuccessDemo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
aria-hidden="true" data-backdrop="false">
<div class="modal-dialog modal-full-height modal-right modal-notify modal-success" role="document">
<!--Content-->
<div class="modal-content">
<!--Header-->
<div class="modal-header">
<p class="heading lead">Signup</p>

<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true" class="white-text">&times;</span>
</button>
</div>

<!--Body-->
<div class="modal-body">
                                           
      <div id="Signup" style="display: block;">
 
          <!-- Form -->
       
                  <!-- Heading -->
                  <h3 class="dark-grey-text text-center">
                    <strong>Signup</strong>
                  </h3>
                  <hr>
                  <div class="md-form">
                    <i class="fa fa-user prefix grey-text"></i>
                         <input type="text" id="form3" class="form-control" name="fname">
                    <label for="form3">Enter name</label>
                  </div>
                  <div class="md-form">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <br>
                    <input type="text" id="form3" class="form-control" name="mobileno">
                    <label for="form3">Enter Mobile Number</label>
                  </div>
                  <div class="md-form">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <br>
                    <input type="email" id="form2" class="form-control" name="email1">
                    <label for="form2">Enter Email</label>
                  </div>
                  <div class="md-form">
                    <i class="fa fa-user prefix grey-text"></i>
                   <br>
                    <input type="password" id="form3" class="form-control" name="pwd1">
                    <label for="form3">Enter password</label>
                  </div>
                  <div class="md-form">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <label for="form4">Select Course</label>
                    <br><br>
                    <select class="form-control" id="form4" name="course1">
                      <option value="1">MCA</option>
                      <option value="2">MBA</option>
                      <option value="3">BCA</option>
                      <option value="4">BBA</option>
                    </select>
                    
                  </div>
               
     </div>
<!--Grid row-->

</div>
<!--Footer-->
<div class="modal-footer justify-content-center">
  <input type="submit" name="register" class="btn btn-indigo">

<a role="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">Already Account Login</a>
</div>

</div>
<!--/.Content-->
</div>
</div>
</form>
<!-- Full Height Modal Right Success Demo-->


                            

  <!-- Full Page Intro -->
  <div class="view full-page-intro" style="background-image: url('photos/1.jpg'); background-repeat: no-repeat; background-size: cover;">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

      <!-- Content -->
      <div class="container">

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-md-6 mb-4 white-text text-center text-md-left">

           <h1 class="font-weight-bold">"Knowledge+Action" ="Success"</h1>
    
        

            <p class="mb-4 d-none d-md-block">
              <strong></strong>
            </p>
          </div>
          <!--Grid column-->
          <!--Grid column-->
          <div class="col-md-6 col-xl-5 mb-4">
            <!--Card-->
            <div class="card">
              <!--Card content-->
              <div class="card-body">
                <!-- Form -->
                <form action="index.php" method="post">
                <div id="Login" style="display: block;">
                  <!-- Heading -->
                  <h3 class="dark-grey-text text-center">
                    <strong>Login</strong>
                  </h3>
                  <hr>

                  <div class="md-form">
                    <i class="fa fa-user prefix grey-text"></i>
                    <input type="email" id="form3" class="form-control" name="uname">
                    <label for="form3">User name</label>
                  </div>
                  <div class="md-form">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <input type="password" id="form2" class="form-control" name="upass">
                    <label for="form2">Password</label>
                  </div>

                  <div class="text-center">
                     <input  type="submit" name="login" class="btn btn-indigo" value="Login">
                    <a href="#" onclick="showSignup1()" data-toggle="modal" data-target="#fluidModalRightSuccessDemo">Don't have account Signup Now!</a>
                    <hr>
                   
                  </div>
                  </div>

               </form>
                <!-- Form -->

              </div>

            </div>
            <!--/.Card-->

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </div>
      <!-- Content -->

    </div>
    <!-- Mask & flexbox options-->

  </div>
  <!-- Full Page Intro -->

  <!--Main layout-->
  <main>
    <div class="container">

      <!--Section: Main info-->
      <section class="mt-5 wow fadeIn">

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-6 mb-4">
                <center>
            <img src="college/college_img.png" class="img-fluid" style="padding: 1px;">
</center>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 mb-4" id="aboutus">
          <style type="text/css">
            #intro{
              padding: 10px;
              color: white;
              background-color:grey;
              transition: 2s; 
            }

            #intro:hover{
              color: white;
              background-color:purple;
              transition: 2s; 
            }
          </style>
            <!-- Main heading -->
            <h3 class="h3 mb-3"><u><b><i>DYP Digital library</i></b></u></h3>
            <h4><b>About Us</b></h4>
            <div id="intro">
            Dr. D. Y. Patil Institute of Master of Computer Applications is one of the premier institutes of Computer Application established during 2002 by Dr. D. Y. Patil Pratishthan. This institute has carved-out a special niche for imparting quality education to cater to the needs of community at large. Since its inception, the institute is striving in the pursuit of academic excellence and good governance. The institute is situated on the green and scenic campus of D. Y. Patil Pratishthan’s Educational Complex, Akurdi, Pune.
            </div>
            <hr>
          <!-- CTA -->
          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">
    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2018 Copyright:
      <a href="https://mdbootstrap.com/bootstrap-tutorial/" target="_blank">DYP Lab Developed By : Gauttam Sonkamble</a>
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
</div>
      <!-- Content -->

    </div>
    <!-- Mask & flexbox options-->

  </div>
  </div>

</body>
 </html>
