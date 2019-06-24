<?php

  // method that return all products by id
    function get_product_by_id($product_id)
    {
   

    	$query="SELECT *FROM product WHERE _id='$product_id' LIMIT 1";
    	$result=mysql_query($query);
    	confirm_query($result);
    	//REMEMBER 
    	//if no row returned,fetch array wii return false
    	if ($product=mysql_fetch_array($result)) {

    		return $product;
    	}
    	else
    	{

    		return null;
    	}
    }
         // method that redirect pages
		function redirect_to($location=null)
		{
            if ($location!=null){
            	header("location: $location");
            	exit();
            
            }
		}
	

function confirm_query($result)
{


 if (!$result) {
                     
   die("Databse query Faild".mysql_error());
   }

}
//methos that returns a particular product info  selected by  a farmer

function product_selected($product_id)
{

 $sql="SELECT first_name,product_name,product_price,location,contact_no,product_photo,product_description,status 
              FROM farmer JOIN(SELECT product.username, product_name,product_price,product_photo,product_description,status
                    FROM product WHERE _id='$product_id') AS pro ON farmer.username=pro.username";
                      
                      $result=mysql_query($sql) or die("Error! ".mysql_error());
                      confirm_query($result);
                      if ($product=mysql_fetch_array($result))
         {

            return $product;
        }
        else
        {

            return null;
        }
                      


}
?>