<?php
ob_start();
include("config.php");

if(isset($_POST['update'])){

    $sql =  "insert into transfer(`user1`, `credits`, `user2`) values('".$_POST['usr1']."','".$_POST['credit']."','".$_POST['usr2']."')";;
    $a=$_POST['credit'];
    $rs = mysqli_query($con,$sql);
    $sql1 = " update user set credit = credit-'$a' where email = '".$_POST['usr1']."'";
    $sql2 = " update user set credit = credit+'$a' where email = '".$_POST['usr2']."'";
    $rs1 = mysqli_query($con,$sql1);
    $rs2 = mysqli_query($con,$sql2);
    if($rs){
       header("location:index.php?up=updated");
    } else {
       header("location:maketrans.php?fl=nosuccess");
    }

} else {



}
?>
