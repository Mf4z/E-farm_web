
  <?php include("includes/connection.php");?> 
 <?php include("includes/functions.php");?> 
 <?php include("includes/header4.php");?>
 
  
      
            <div class="row">


       <div class="col-md-12"></div>
       
                                


           </div>
        <div class="col-md-12">
            <div class="panel panel-default">
            <?php

if(isset($_GET["proid"]))

{
  $product_id=$_GET["proid"];

  $query="DELETE FROM product WHERE _id=$product_id";
  $result=mysql_query($query) or die(mysql_error());
  if ($result) {
    echo'<div class="alert alert-default" style=width:250px; padding:5px;>Product is deleted</div>';
    redirect_to("myproducts.php");
     

  }
  else
  {
    echo "Error";
  }

}
 ?>

                
                <div class="panel-heading">All Products</div>
                <div class="panel-body">
                 <div class="row">
                    
                   <table class="table table-striped table-bordered table-hover">
                     <thead class="alert alert-warning">
                      <tr >
                                            <th>Image</th>
                                            <th>Product</th>
                                            <th>Product type</th>
                                            <th>Price</th>
                                             <th>Quantity</th>
                                            <th>Details</th> 
                                             <th>Status</th>  
                                             <th>Username</th>                                      
                                          
                                        
                                            <th>Delete</th>
                                             
                                            
                                             
                                             </tr>
                  
                     </thead>
                    <?php

                      $userid=$_SESSION['username'];
                      $sql="SELECT *FROM product ORDER BY RAND() LIMIT 0,9";
                      $result=mysql_query($sql) or die("Error! ".mysql_error());
                      while($row=mysql_fetch_array($result,MYSQL_ASSOC))
                      {
                                $prod_id=$row["_id"];
                                
                                $pro_name=$row["product_name"];
                                 $pro_typ=$row["product_type"];
                                
                                $pro_img=$row["product_photo"];
                                 $pro_price=$row["product_price"];
                                  $pro_qty=$row["product_quantity"];
                                  $pro_desc=$row["product_description"];
                                 $pro_status=$row["status"];
                                 $pro_user=$row["username"];

                       echo"<tbody>

                      <tr  class='odd-gradex'>
                      
                        <td><img src='images/$pro_img' style width=100px height=100px></td>
                        <td> $pro_name</td>
                         <td>$pro_typ</td>
                        <td>$pro_price</td>
                        <td>$pro_qty</td>
                         <td>$pro_desc</td> 
                        <td>$pro_status</td>
                         <td>$pro_user</td>
                       
                      

                       
                        
                        <td><a href='productsadmin.php?proid=$prod_id'><span class='fa fa-trash-o'> Delete</span></a></td>
                        
                        
                        
                                                

                        
                        
                        </tr>
                    </tbody>";
                      }



                    ?>
                    

                   </table>
                        
                </div>
            
            
            
        </div>           
        </div>     
        
 <?php include("includes/footer.php");?>
     