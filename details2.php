
<?php
include("includes/functions.php");?>

<?php include("includes/connection.php");?>
<?php include("includes/header2.php");?>

 <?php
  //the global varibale gets the productid throught the url
            if (isset($_GET["prd_id"])) {

                $product_id=$_GET["prd_id"];


     //variable that holds all products by id
        $select_product=product_selected($product_id);

 }
 ?>
             <div class="row">
            
        <div class="col-md-10">
            <div class="panel panel-default">
               <div class="panel panel-heading">Details</div>
                <div class="panel panel-body">
              <div class="row">
              <div class="col-md-8">
                
                
                  <div class="panel panel-default">
  <img src="images/<?php echo $select_product['product_photo'] ?>" width="550px" height="300px" class="img-rounded" ></div>
  <ul>
        <li class="list-group-item">Description: </li><br>
      <p><?php echo $select_product['product_description'] ?></p>
      
      </ul>
    

   
  </div>
   <div class="col-md-4">
    <ul>
      <li class="list-group-item">Seller Name: <span class='badge'><?php echo $select_product['first_name'] ?></span></li><br>
      <li class="list-group-item">Address: <span class='badge'><?php echo $select_product['location'] ?></span></li><br>
      <li class="list-group-item">Contact: <span class='badge'><?php echo $select_product['contact_no'] ?></span></li><br>

      <li class="list-group-item">Product: <span class='badge'><?php echo $select_product['product_name'] ?></span></li><br>
      <li class="list-group-item">price: <span class='badge'><?php echo $select_product['product_price'] ?></span></li><br><br>
            <li class="list-group-item">Status: <span class='badge'><?php echo $select_product['status'] ?></span></li><br><br>
    
    <?php
  echo"<a href='buy.php?prd_id=$product_id'><button class='btn btn-success'>Contact seller</button></a>";

    ?>
     


    </ul></div>
                
  
  




  

</div>
               </div>     

              </div>
                  
                  
                    
                    
                    </div>              
                    </div>
                    </div>
                </div>
        <?php include("includes/footer.php");
?>
           
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    