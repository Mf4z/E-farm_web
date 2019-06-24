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
         <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Products<span class="caret"></span></a>
              
              <ul class="dropdown-menu">              
                
                  
             <li><a href="productsadmin.php"><span class="glyphicon glyphicon-user"></span><u> View Products</u></a></li>

        
                  
                </ul>           
              
              </li>
              <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-fw fa-plus"></span> Manage Users</a>
              
              <ul class="dropdown-menu">              
                
                  
             <li><a href="veiwfarmers.php"><span class="glyphicon glyphicon-user"></span> View farmers</a></li>

             <li><a href="veiworg.php"><span class="glyphicon glyphicon-user"></span> View Organisations</a></li>
                  
                </ul>           
              
              </li>
                   <li><a href="registersybtoms.php"><span class="glyphicon glyphicon-user"></span> Register Symptoms</a></li>
           
            <li><a href="#"><span class="glyphicon glyphicon-phone-alt"></span> View contacts</a></li> 
             
             <li><a href="registeradmin.php"><span class=""></span> Register Admin</a></li>
                 <li><a href="logout.php"><span class=""></span> Logout</a></li>
           
        </ul>  