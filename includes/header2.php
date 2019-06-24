<?php include("includes/session.php");?> 
<?php confirm_logged_in()?>
<DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <title>E-farm</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
    </head>
    <body>
    <div class="header" id="home">
   	<div class="container">
   		<div class="header-top">
		<div class="logo">
            
            <img src="images/logo1.png" class="img-rounded" style="width:140px; height:80px;">
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
              Welcome:<?php echo$_SESSION['username'];?></a></li>
         </ul>
        
         <ul class="nav navbar-nav  navbar-right" >
          <li><a href="index2.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
         <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Trade<span class="caret"></span></a>
              
              <ul class="dropdown-menu">              
                
                  
            

             <li><a href="sale.php">Upload product</a></li>
                  
                </ul>           
              
              </li>
              <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"></span>Storage<span class="caret"></span></a>
              
              <ul class="dropdown-menu">              
                
                  
             <li><a href="mystorage1.php">My storage</a></li>

             <li><a href="storageproviders.php">Storage providers</a></li>
                  
                </ul>           
              
              </li>
           
          
             
             <li><a href="myproducts.php"><span class=""></span>My product</a></li>
                 <li><a href="logout.php"><span class=""></span>Logout</a></li>
           
        </ul>   
        </div>
            
            
        
      
        
      
        <div class="container-fluid">
            
        <div class="row">