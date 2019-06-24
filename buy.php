
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
            <div class="col-md-2"></div>
        <div class="col-md-10">
            <div class="panel panel-default">
               <div class="panel panel-heading">Buy Product</div>
                <div class="panel panel-body">
              <div class="row">
              <div class="col-md-8">
                
                
                  <div class="panel panel-default">
  <img src="images/<?php echo $select_product['product_photo'] ?>" width="550px" height="300px" class="img-rounded" ></div>
  <ul>
        <li class="list-group-item">Description:</li><br>
      <p><?php echo $select_product['product_description'] ?></p>
      
      </ul>
    

   
  </div>
   <div class="col-md-4">
    <ul>
      <li class="list-group-item">Name: <?php echo $select_product['first_name'] ?></li><br>
      <li class="list-group-item">Address:<?php echo $select_product['location'] ?></li><br>
      <li class="list-group-item">Contact: <?php echo $select_product['contact_no'] ?></li><br>

      <li class="list-group-item">Product: <?php echo $select_product['product_name'] ?></li><br>
      <li class="list-group-item">price: <?php echo $select_product['product_price'] ?></li><br><br>
      <textarea  class="form-control" style="width:250px; height:200px;" placeholder="Contact the seller"></textarea><br>
      <button class="btn btn-success">Send Massege</button>


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
           
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    