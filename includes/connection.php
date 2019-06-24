  <?php
    // 1. Creating Database Connection
@mysql_connect("localhost","root","") or die("Error! ".mysql_error());

    // 2. Select Database Connection
@mysql_select_db("e_farmdb_demo") or die("Error! ".mysql_error());;
?>