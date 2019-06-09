<?php
error_reporting(0);
include 'dyp.php';
$dypuser1=$_SESSION["dypuser"];
$userid=$_SESSION["USERID"];
//echo $userid.$flockuser1;
//$gender=$_SESSION["GENDER"];
$obj=new user;
if($obj->loggedin()==""){
 $obj->url("index.php");
}
?>
<?php 
include_once('header.php');
?>

<!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="https://mdbootstrap.com/material-design-for-bootstrap/" target="_blank">
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
            <a class="nav-link" href="https://mdbootstrap.com/material-design-for-bootstrap/" target="_blank">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://mdbootstrap.com/getting-started/" target="_blank"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://mdbootstrap.com/bootstrap-tutorial/" target="_blank"></a>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://mdbootstrap.com/bootstrap-tutorial/" target="_blank">Help</a>
          </li>
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a href="https://www.facebook.com/mdbootstrap" class="nav-link" target="_blank">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://twitter.com/MDBootstrap" class="nav-link" target="_blank">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="logout.php?msg=run" class="nav-link border border-light rounded"
              data-toggle="modal" data-target="#fluidModalRightSuccessDemo">
              <i class="fa fa-github mr-2"></i>LogOut &nbsp;&nbsp; 
            </a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->


  <!--Main layout-->
    <main class="pt-5 mx-lg-5">
        <div class="container-fluid mt-5">

            <!-- Heading -->
            <div class="card mb-4 wow fadeIn">
					
                <!--Card content-->
                <div class="card-body d-sm-flex justify-content-between">

                    <h4 class="mb-2 mb-sm-0 pt-1">
                        <a href="https://mdbootstrap.com/material-design-for-bootstrap/" target="_blank">Home Page</a>
                        <span>/</span>
                        <span>Dashboard</span>
                    </h4>

                    <form class="d-flex justify-content-center">
                        <!-- Default input -->
                        <input type="search" placeholder="Type your query" aria-label="Search" class="form-control">
                        <button class="btn btn-primary btn-sm my-0 p" type="submit">
                            <i class="fa fa-search"></i>
                        </button>

                    </form>

                </div>

            </div>
						<h2><b>MCA 1st Year</b></h2>
            <!--Grid row-->
            <div class="row wow fadeIn">
                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4">

                    <!--Card-->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header">C Programming Language</div>
                        <!--Card content-->
                        <div class="card-body">
						<center> <img src="bookphoto/C/c1.jpg" height="150" width="150"/> </center>
                        </div>
                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">
                    <!--Card-->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header">Fundamental of computer</div>
                        <!--Card content-->
                        <div class="card-body">
						
						<center> <img src="bookphoto/FC/fc.jpg" height="150" width="150"/> </center>
                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                    <!--Card-->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header">Software Engineering</div>

                        <!--Card content-->
                        <div class="card-body">
						<center> <img src="bookphoto/SE/c1.jpg" height="150" width="150"/> </center>
                            

                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->



            </div>
            <!--Grid row-->
				
				
				
		 <!--Grid row-->
            <div class="row wow fadeIn">
                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4">

                    <!--Card-->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header">Database Management System</div>
                        <!--Card content-->
                        <div class="card-body">
                        </div>
                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">
                    <!--Card-->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header">Principle and practices of
						Management and Orgnizational Behaviour</div>
                        <!--Card content-->
                        <div class="card-body">
                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                    <!--Card-->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header">Business Process Domains</div>

                        <!--Card content-->
                        <div class="card-body">

                            

                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->
			
			
			 <!--Grid row-->
            <div class="row wow fadeIn">
                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4">

                    <!--Card-->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header">C and DS Lab</div>
                        <!--Card content-->
                        <div class="card-body">
                        </div>
                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

                <!--Grid colum
				n-->
                <div class="col-lg-4 col-md-6 mb-4">
                    <!--Card-->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header">DBMS Lab</div>
                        <!--Card content-->
                        <div class="card-body">
                        </div>

                    </div>
                
				<!--/.Card-->

                </div>
                <!--Grid column-->


                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                    <!--Card-->

                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header">Word Power</div>


                        <!--Card content-->
                        <div class="card-body">

                            

							
                        </div>

                    </div>
                    <!--/.Card-->

					
                </div>
                <!--Grid column-->

            </div>
            <!--Grid
			row-->
			
			
			 <!--Grid row-->
            <div class="row wow fadeIn">

			<!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4">

                    <!--Card-->
                    <div class="card">


					<!-- Card header -->
                        <div class="card-header">Essential Of Operating System</div>
                        <!--Card content-->
                        <div class="card-body">

                        </div>
                    </div>
                    <!--/.Card-->


					</div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">
                    <!--Card-->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header">Web Technologies</div>
                        <!--Card content-->
                        <div class="card-body">
                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                    <!--Card-->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header">Core Java</div>

                        <!--Card content-->
                        <div class="card-body">
                        	<center> <img src="bookphoto/Java/images(13).jpg" height="150" width="150"/> 
                        	</center>
                            

                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->
			
			
			
			 <!--Grid row-->
            <div class="row wow fadeIn">
                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4">

                    <!--Card-->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header">Essential Of Networking</div>
                        <!--Card content-->
                        <div class="card-body">
                        </div>
                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">
                    <!--Card-->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header">Descrete Mathematics</div>
                        <!--Card content-->
                        <div class="card-body">
                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                    <!--Card-->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header">Essential Of Marketing</div>

                        <!--Card content-->
                        <div class="card-body">

                            

                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->
			
			
			
			 <!--Grid row-->
            <div class="row wow fadeIn">
                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4">

                    <!--Card-->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header">Oral Communication</div>
                        <!--Card content-->
                        <div class="card-body">
                        </div>
                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">
                    <!--Card-->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header">Probability and Combinatorics</div>
                        <!--Card content-->
                        <div class="card-body">
                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                    <!--Card-->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header">Core Java</div>

                        <!--Card content-->
                        <div class="card-body">

                            

                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->
			
			
			
			 <!--Grid row-->
            <div class="row wow fadeIn">
                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4">

                    <!--Card-->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header">C Programming Language</div>
                        <!--Card content-->
                        <div class="card-body">
                        </div>
                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">
                    <!--Card-->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header">C++</div>
                        <!--Card content-->
                        <div class="card-body">
                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                    <!--Card-->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header">Core Java</div>

                        <!--Card content-->
                        <div class="card-body">

                            

                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->
			
			
			 <!--Grid row-->
            <div class="row wow fadeIn">
                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4">

                    <!--Card-->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header">C Programming Language</div>
                        <!--Card content-->
                        <div class="card-body">
                        </div>
                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">
                    <!--Card-->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header">C++</div>
                        <!--Card content-->
                        <div class="card-body">
                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                    <!--Card-->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header">Core Java</div>

                        <!--Card content-->
                        <div class="card-body">

                            

                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->
        </div>
    </main>
    <!--Main layout-->