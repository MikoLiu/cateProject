<?php
require_once("../../init.php");
function addOrder(){
    global $conn;
    session_start();
    $uid=$_SESSION["uid"];
    $fid=$_REQUEST["fid"];
    $count=$_REQUEST["count"];
    if($uid){
        $sql="select * from user_order where fid=$fid and uid=$uid";
       $result=mysqli_query($conn,$sql);
        if(count(mysqli_fetch_all($result,1))){
            $sql="update user_order set count =count+$count where fid=$fid and uid=$uid";
        }else{
            $sql="insert into user_order values (null,$fid,$uid,0,$count)";
        }
        //echo $sql;
        mysqli_query($conn,$sql);

    }
}
//addOrder();
function getOrderList(){
    global $conn;
    session_start();
    $uid=$_SESSION["uid"];
//    $sql="select * from food f INNER JOIN user_order u on u.fid=f.fid where uid=$uid";
    $sql="select * from user_order u INNER JOIN food f on u.fid=f.fid where uid=$uid";
    $result=mysqli_query($conn,$sql);//
    //$msg=mysqli_fetch_assoc($result);//array(5) { ["order_id"]=> string(1) "1" ["fid"]=> string(1) "7" ["uid"]=> string(1) "5" ["is_checked"]=> string(1) "0" ["count"]=> string(1) "8" }
    $msg=mysqli_fetch_all($result,1);//
    echo json_encode($msg);
}
//getOrderList();
function deleteFood(){
    global $conn;
    $fid=$_REQUEST["fid"];
    session_start();
    $uid=$_SESSION["uid"];
    $sql="delete from user_order where fid=$fid and uid=$uid";
    $result=mysqli_query($conn,$sql);
}
//deleteFood();