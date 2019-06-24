
 <?php include("includes/connection.php");?> 
 <?php include("includes/header.php");?>
      
 
         

        <div class="col-md-12">
          
     <div id="the-slider" class="carousel" data-ride="carousel">

     <ol class="carousel-indicators">
       <li data-target="#the-slider" data-slide-to="0" class="active"></li>
        <li data-target="#the-slider" data-slide-to="1"></li>
         <li data-target="#the-slider" data-slide-to="2"></li>   </ol>
       
          <div class="carousel-inner">
            <div class="item active ">
            <img src="images/1.jpg">              
            </div>
            <div class="item">
             <img src="images/2.jpg">              
            </div>
               <div class="item">
             <img src="images/3.jpg">              
            </div>              
            </div>
            <a class="left carousel-control" href="#the-slider" role="button" data-slide="prev">              
              <span class="glyphicon glyphicon-chevron-left"></span>   </a>
               <a class="right carousel-control" href="#the-slider" role="button" data-slide="next">              
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>              
            </div>         </div>
      
        <div class="col-md-12">
            <div class="panel panel-default">
                
                <div class="panel-heading">Products</div>
                <div class="panel-body">
                 <div class="row">
                    
                    <?php
                        
                                
                   $select_sql="SELECT *FROM product ORDER BY RAND() LIMIT 0,8";
                $display=mysql_query($select_sql) or die("Error! ".mysql_error());
                            while($row=mysql_fetch_array($display,MYSQL_ASSOC))
                   {
                                $prod_id=$row["_id"];
                                
                                $pro_name=$row["product_name"];
                                
                                $pro_img=$row["product_photo"];
                                 $pro_status=$row["status"];
                       
                       echo"<div class='col-md-3'>
                        
                       <div class='panel panel-info'>
                            
                        <div class='panel-body'>
                       <a href='trade.php' class='img-thumbnail'>
                            
                            
                    
                            
                      <p>$pro_name</p>
                        <img src='images/$pro_img' style='width:175px; height:100px;'/>
                            </a>
                            
                   <br>
                    <br>
                    <ul class='list-group'>
                     
                     <li class='list-group-item list-group-item-default'>Status<span class='badge'>$pro_status</span></li>

                                 
                    </ul>
                                
                                
                   
                    <a href='details1.php?prd_id=$prod_id'><p class='form-contral'> See more </p>
                    <br></a> 

                      <a href='login.php?prd_id=$prod_id'><button class='btn btn-success btn-md' style='float:right;'>Contact Seller</button></a>  
                              
                           </div>
                          </div>
                           
                       
                  </div>";
                                
                  }
               
                  ?>
                        
                        
                </div>
            
            
            
        </div>           
        </div>     
        
 <?php include("includes/footer.php");?>
     