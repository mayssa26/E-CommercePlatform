<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ASCII 2018</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">
    <style>
        .m-t-10 {
    margin-top: 10px;
    }
        </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">ASCII 18 </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html">EVENTS</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html">ABOUT ASCII</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html">SPONSORS</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="regs.php"> REGISTRATION</a>
                    </li>
					
					<li>
					   <a class="page-scroll" href="amblist.php">AMBASSADORS</a>
					</li>
					
					
					<li>
					   <a class="page-scroll" href="vol.php">VOLUNTEER</a>
					</li>
					
                    <li>
                        <a class="page-scroll" href="#contact">contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To ACII 18!</div>
                <div class="intro-heading"> An activity based learning </div>
                <a href="#Services" class="page-scroll btn btn-xl">Tell Me More</a>
            </div>
        </div>
    </header>
    <!-- Registration  -->
    <div class="container">
        <div class="row" style="margin: 1cm;">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">VOLUNTEER REGISTRATION</div>
                    <div class="panel-body">
                        
                        <form role="form" method="post" action="vol.php" accept-charset="UTF-8">
                        
                            <label for="fname">Name</label>
                            <input type="text" id="name" class="form-control input-md" required="" name="name" placeholder="Example: Ali">
                            
                            <label for="fname">Reg No:</label>
                            <input type="text" id="name" class="form-control input-md" required="" name="RegNo" placeholder="Example: 2038-FBAS/BSCS/F14">
                            

                            <label for="email" class="m-t-10">Email Address</label>
                            <input type="text" id="email" class="form-control input-md" required="" name="email" placeholder="Example: ali@gmail.com">
                            
                            <label for="lname">Phone</label>
                            <input type="text" id="phone" class="form-control" name="phone" placeholder="Example: 923**********">
                            
                            
                            
                            <label for="gender" class="m-t-10">Your Gender</label>
                            <select id="gender" class="form-control" name="gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="unknown">Other</option>
                            </select>
                            
    
                            
                            <center><input type="submit" class="btn btn-primary m-t-10" id="submitbtn" name="submit" value="Submit"></center>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

</body>

</html>

<?php 
require 'dbConn.php';
$conn = Connect();
if(isset($_POST['name']) &&isset($_POST['phone'])&& isset($_POST['email'])&& isset($_POST['gender'])&& isset($_POST['RegNo'])){
$name = $_POST["name"];
$contact = $_POST["phone"];
$regno = $_POST["RegNo"];
$email = $_POST["email"];
$gender = $_POST["gender"];
$query   = "INSERT into vol (vName,vReg,vPhone, vEmail,vGender ) VALUES('" . $name . "','" . $regno. "','" . $contact . "','" . $email . "','" . $gender . "')";
$success = $conn->query($query);
if(!$success){
    die("Couldn't enter data " .$conn->error);
}
echo "<script> alert('Thank you for registration.');  </script>";
$conn->close();
}
else{
   // echo 'Please Enter All Fields';
}
?>