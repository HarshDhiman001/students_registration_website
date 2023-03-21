<?php
include '../database/data.php';
if(isset($_GET['deleteid']))
{
    $id =$_GET['deleteid'];
    $sql = "delete from `data` where id = $id";
    $result = mysqli_query($con,$sql);
    if($result)
    {
        echo "deleted successfully";
    }
    else{
        echo "error";
    }
}
?>