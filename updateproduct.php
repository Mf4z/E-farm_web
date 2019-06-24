
<?php include("includes/functions.php");?> 
<?php include("includes/connection.php");?> 
 <?php include("includes/header2.php");?>
  <?php
  //the global varibale gets the productid throught the url
            if (isset($_GET["proid"])) {

                $product_id=$_GET["proid"];


     //variable that holds all products by id
        $select_product=get_product_by_id($product_id);

 }
 ?>
      
   <?php

   if(isset($_POST["btnsbm"]))
 {  

    // Path to store the uploaded image
    $target="images/".basename($_FILES["image"]["name"]);
    //get all submitted data from the form
    
 
    $pro_name=$_POST["txt_name"];
     $pro_type=$_POST["txt_protype"];
    $img=$_FILES["image"]["name"];
    
    $price=$_POST["txt_price"];
    $quantity=$_POST["txt_qty"];
    $status=$_POST["txtstatus"];
    $description=$_POST["txt_description"];
    $userid=$_SESSION['username'];
    
    $sql="UPDATE product SET  product_name='$pro_name',product_type='$pro_type',product_quantity= $quantity,product_price=$price,product_description='$description',product_photo='$img',status= '$status',username='$userid'  WHERE _id='$product_id'";   
    $query=mysql_query($sql);
    if(move_uploaded_file($_FILES["image"]["tmp_name"],$target))
    {
        echo '<div class="alert alert-d=default">Successfully Updated</div>';

        //method  called redirect_to and it is defined in functions page
        redirect_to("myproducts.php");
    }
    else{
       echo '<div class="alert alert-success">Faild ! please try again</div>';
       exit();
    }
}

   ?>


            <div class="col-md-2">

       
     
     </div>
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel panel-heading">Update product</div>
                <div class="panel panel-body">
               
                 <form role="form" method="post" enctype="multipart/form-data">
                <div class="row">
                <div class="col-md-6">                  
                
                <input type="text" name="txt_name"  value="<?php echo $select_product['product_name'] ?>" id="txt_name" 
                class="form-control" placeholder="Your ad's title" required="">
                     
                
                </div>
                
                
                </div>
                <br>
                 <div class="row">
                
                <div class="col-md-6">                  
                
                <div class="control-group">
                <label class="control-label">Product type</label>
                    <select name="txt_protype" class="control" value="<?php echo $select_product['product_type'] ?>"  style="width:200px  height:200px;padding:5px;" required=""><br>

                   <option>Select...</option>
                  <option>Preshibale</option>
                  <option>Non-preshibale</option>
                                  
                 </select></div>
                
                </div>
                
                
                </div>
                    <br>
                 

                <div class="row">
                
                <div class="col-md-6"> 

                <?php  
                //i made new row that is displayed the photo for that particular product
                $img=$select_product['product_photo'];               
                   echo"<img src='images/$img' style=width:150px; height:150px;>";

                  ?>
                
                </div>
                
                
                </div>
                    <br>
                <div class="row">
                
                <div class="col-md-2">                
                
                <input type="file" name="image" value="<?php echo $select_product['product_photo'] ?>">
                   
                
                </div>
                
                
                </div>
                    <br>
                 <div class="row">
                
                <div class="col-md-6">                  
                
                <input type="text" name="txt_price" value="<?php echo $select_product['product_price'] ?>" class="form-control" placeholder="Product Price" required="">
                     
                
                </div>
                
                
                </div>
                    <br>
                    
                    
                 <div class="row">
                
                <div class="col-md-6">                  
                
                <input  type="number" name="txt_qty" value="<?php echo $select_product['product_quantity'] ?>"  class="form-control" placeholder="Quantity" required="">
                     
                
                </div>
                
                
                </div>
                    <br>
                    <div class="row">
                
                <div class="col-md-6">                  
                
                <div class="control-group">
                <label class="control-label">Status</label>
                    <select name="txtstatus" class="control" value="<?php echo $select_product['status'] ?>"  style="width:200px  height:200px;padding:5px;" required=""><br>

                   <option>Select...</option>
                  <option>Available</option>
                  <option>Not Available</option>
                                  
                 </select></div>
                
                </div>
                
                
                </div>
                    <br>
                    
                <textarea   name="txt_description"  class="form-control" style="width:375px; height:100px"
                  required=""><?php echo $select_product['product_description'] ?>"</textarea>
                    <br>
                <div class="row">
                 
                <div class="col-md-4">
                    
                     <button class="btn btn-primary" id="btnsbm" name="btnsbm">Update</button>
                </div>
                
                 
                <div class="col-md-">
                    
                     <button class="btn btn-warning">Cancel</button>
                </div>
                </div>
                    <br>
                    <!--validation side---->
                   <!-- <div class="alert alert-danger">Registration faild</div>-->
                
              
                
            </div>
                </div>
            </div>
             </form>


             
<?php include("includes/footer.php");?>
            
       
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    