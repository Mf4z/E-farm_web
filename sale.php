
 <?php include("includes/connection.php");?> 
 <?php include("includes/header2.php");?>



            <div class="col-md-2">
     
     
     </div>
        <div class="col-md-10">
            <div class="panel panel-default">

             <?php
    
if(isset($_POST["btnsbm"]))
 {  

    // Path to store the uploaded image
    $target="images/".basename($_FILES["image"]["name"]);
    //get all submitted data from the form
    
 
    $pro_name=$_POST["txt_name"];
    $img=$_FILES["image"]["name"];
     $price=$_POST["txt_price"];
    
    $pro_type=$_POST["txtproduct_type"];
    $quantity=$_POST["txt_qty"];
    $status=$_POST["txtstatus"];
    $description=$_POST["txt_description"];
    $userid=$_SESSION['username'];
    
    $sql="INSERT INTO product (product_name,product_type,product_quantity,product_price,product_description,product_photo,status,username)
     VALUES('$pro_name',
       '$pro_type',
       '$quantity',
      '$price',
    '$description',
    '$img',
    '$status',
    '$userid')";
    $query=mysql_query($sql);
    if(move_uploaded_file($_FILES["image"]["tmp_name"],$target))
    {
        echo '<div class="alert alert-success" style=width:250px; padding:5px;>Successfully Uploaded</div>';
    }
    else{
       echo '<div class="alert alert-warning">Faild ! please try again</div>';
       exit();
    }
}

 ?>
                <div class="panel panel-heading">Upload your product</div>
                <div class="panel panel-body">
                
                 <form role="form"  action="sale.php" method="post" enctype="multipart/form-data">
                 <div class="row">
                <div class="col-md-6">                  
                
                <input type="text" name="txt_name"  class="form-control" placeholder="Your ad's title" required="">
                     
                
                </div>
                
                
                </div>
                <br>
                <div class="row">
                
                <div class="col-md-6">                  
                
                <div class="control-group">
                <label class="control-label">Product Type</label>
                    <select name="txtproduct_type" class="control"  style="width:200px  height:200px;padding:5px;" required=""><br>
                   
                  <option>Preshibale</option>
                  <option>Non-preshibale</option>
                                  
                 </select></div>
                
                </div>
                
                
                </div>
                    <br>

                <div class="row">
                
                <div class="col-md-2">                
                
                <input type="file" name="image" required="">
                   
                
                </div>
                
                
                </div>
                    <br>
                 <div class="row">
                
                <div class="col-md-6">                  
                
                <input type="text" name="txt_price"  class="form-control" placeholder="Product Price" required="">
                     
                
                </div>
                
                
                </div>
                    <br>
                    
                 <div class="row">
                
                <div class="col-md-6">                  
                
                <input  type="number" name="txt_qty"  class="form-control" placeholder="Quantity" required="">
                     
                
                </div>
                
                
                </div>
                    <br>
                    <div class="row">
                
                <div class="col-md-6">                  
                
                <div class="control-group">
                <label class="control-label">Status</label>
                <select name="txtstatus" class="control"  style="width:200px  height:200px;padding:5px;" required=""><br>
                  
                  <option>Available</option>
                  <option>Not Available</option>
                                  
                 </select></div>
                
                </div>
                
                
                </div>
                    <br>
                    
                <textarea  name="txt_description"class="form-control" style="width:375px; height:100px" placeholder="Describe you products" required=""></textarea>
                    <br>
                <div class="row">
                 
                <div class="col-md-4">
                    
                     <button class="btn btn-primary" id="btnsbm" name="btnsbm">Submit</button>
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
            
       
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    