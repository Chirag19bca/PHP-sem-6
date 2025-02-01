<?php
	include("unit_2_connection.php");
        
        $pro_id=$_GET["pid"];//this pid from pro_rec.php
        $sel_product="select * from product where Pro_Id=$pro_id";
        $res_product=mysqli_query($con,$sel_product);
        $row_product=mysqli_fetch_array($res_product);
        $pid=$row_product["Pro_Id"];
        $qty=$row_product["QOH"];
        if(isset($_GET["msg"]))
        {
                echo $_GET["msg"];
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>u2p6</title>
</head>
<body>
        <form action="pro_upt.php" method="post">
             <table>
                <caption><b>Product update</b></caption>
                <tr>
                        <td>Product Name</td>
                        <td><select name="Pro_Id">
                                <option value="">Please Select</option>
                                <?php 
                                        $sel_product="select * from product order by Pro_name ASC";
                                        $qry=mysqli_query($con,$sel_product);
                                        while($row_search=mysqli_fetch_array($qry))
                                        {
                                                ?>
                                                <option value="<?php echo $row_search["Pro_Id"];?>"<?php if($row_search["Pro_Id"==$pid]){echo "Selected";}else{echo " ";} ?>>
                                                        <?php  echo $row_search["Pro_name"]; ?>
                                                </option>
                                                <?php
                                        }
                                ?>
                        </select></td>
                </tr>
                <tr>
                        <td>Quantity</td>
                        <td><input type="number" name="QOH" value="<?php echo $qty;?>"></td>
                </tr>
                <tr>
                        <td colspan="2">
                                <input type="submit" value="Submit" name="Sumbit">
                                <input type="reset" value="reset" name="reset">
                        </td>
                </tr>
             </table>   
        </form>
</body>
</html>