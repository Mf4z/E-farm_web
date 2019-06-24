<?php include("includes/session.php");?> 
<?php confirm_logged_in()?>
<DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <title>E-farm</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
    </head>
    <body>
        
    <div class="header" id="home">
   	<div class="container">
   		<div class="header-top">
		<div class="logo">
            
            <img src="images/logo1.png" class="img-rounded" style="width:80px; height:80px;">
   			<a href="index.html">E-farm</a>
            <br>
            <br>
   			<p>Farm with the technological edge</p>
   			</div>
   
        </div>
        
         </div>
        
         </div>
           
         <div class="navbar navbar-default nabar-fixed-top">
         <ul>
           
            <li><a href="login.php"><span class="glyphicon glyphicon-user"></span>
              Welcome: <?php echo$_SESSION['username'];?></a></li>
         </ul>
        
         <ul class="nav navbar-nav  navbar-right" >
          <li><a href="index3.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
          <li><a href="myservice.php">My Services</a></li>
              <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-fw fa-plus"></span>Storage <span class="caret"></span></a>
              
              <ul class="dropdown-menu">              
                
                  
             <li><a href="storage_service.php">Register Storage Service</a></li>

             <li><a href="mystorage_clients.php">My Clients</a></li>
                  
                </ul>           
              
              </li>
        
           
             
             <li><a href="logout.php"><span class=""></span>logout</a></li>
           
        </ul>   
        </div>
            
            
        
        
         <!-----Navigation closed here----->
        
        <!-----content----->
        <div class="container-fluid">
            
        <div class="row">