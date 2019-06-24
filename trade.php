 
 <?php include("includes/connection.php");?>
  <?php include("includes/functions.php");?>
 <?php include("includes/header2.php");?>
 
     
            
        <div class="col-md-12">
            <div class="panel panel-default">
                
                <div class="panel-heading"></div>
                <div class="panel-body">
                    <div class="row">
                    

                      <?php
                        
                                
                   $select_sql="SELECT *FROM product ORDER BY RAND() LIMIT 0,9";
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
                     <li class='list-group-item list-group-item-default'>Price<span class='badge'>sh ".$row["product_price"]."</span></li><br>
                     
                     <li class='list-group-item list-group-item-default'>Status<span class='badge'>$pro_status</span></li>

                                 
                    </ul>
                                
                                
                        <p class='form-contral'> See more </p><a href='details2.php?prd_id=$prod_id'><button class='btn btn-default btn-md'>Details</button></a>
                      <a href='buy.php?prd_id=$prod_id'><button class='btn btn-success btn-md' style='float:right;'>Contact Seller</button></a>  
                              
                           </div>
                          </div>
                           
                       
                  </div>";
                                
                  }
               
                  ?>
                           
                        
            </div>
            </div>
            
            
            
        </div>           
        </div>     
        
 <?php include("includes/footer.php");?>
     