<?php
        include("unit_2_connection.php");
        $pro_id=$_GET["pid"];//this pid from pro_rec2.php
        if(!empty($pro_id))
        {
                $del_qry="delete from product where Pro_Id=$pro_id";
                if(mysqli_query($con,$del_qry))
                {
                        header("location:pro_rec2.php");        
                }
        }
        else
        {
                header("location:07.php?msg=Please Try Again");
        }
?>