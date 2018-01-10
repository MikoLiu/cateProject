<?php
require_once("../../init.php");
function register(){
	global $conn;
	@$uname=$_REQUEST["uname"];
	@$upwd=$_REQUEST["upwd"];
	@$email=$_REQUEST["email"];
	@$phone=$_REQUEST["phone"];
	
	if($uname&&$upwd){
		$sql="INSERT INTO user (uid,uname,upwd,email,phone) VALUES (null,'$uname','$upwd','$email','$phone') ";
		mysqli_query($conn,$sql);
		//echo "插入成功".$sql;
	}
}
//register();
function checkName(){
	global $conn;
	@$uname=$_REQUEST["uname"];
	if($uname){
		$sql="select * from user where uname='$uname'";
		$result=mysqli_query($conn,$sql);
		$user=mysqli_fetch_all($result,1);
		if(count($user)){
			//echo "uname存在";
			echo "true";
		}else{
			//echo "uname不存在";
			echo "false";
		}
	}
}
//checkName();
function login(){
	global $conn;
	@$uname=$_REQUEST["uname"];
	@$upwd=$_REQUEST["upwd"];
	$sql="select * from user where uname='$uname' and upwd='$upwd'";
	$result=mysqli_query($conn,$sql);
	$user=mysqli_fetch_all($result,1);
	if(count($user)){
		session_start();
		$_SESSION["uid"]=$user[0]["uid"];
		
		echo "true";
	}else{
		echo "false";
	}
}
//login();

function logout(){
	session_start();
	$_SESSION["uid"]=null;
}

function islogin(){
	global $conn;
	session_start();
	$uid=$_SESSION["uid"];
	//$_SESSION["uid"]=$user[0]["uname"];
	if($uid){
		$sql="select uname from user where uid=$uid";
		$result=mysqli_query($conn,$sql);
		$user=mysqli_fetch_all($result,1);
		//var_dump($user);
		//echo $user[0]["uname"];
		echo json_encode(["ok"=>1,"uname"=>$user[0]["uname"]]);
		//var_dump(json_encode(["ok"=>1,"uname"=>$user[0]["uname"]]));
	}else{
		echo json_encode(["ok"=>0]);
	}
}
//islogin();
function getUser(){
    global $conn;
    session_start();
    $uid=$_SESSION["uid"];
    if($uid){
        $sql="select * from user where uid=$uid";
        $result=mysqli_query($conn,$sql);
        $user=mysqli_fetch_all($result,1);
        echo json_encode($user);
    }
}
//getUser();
//function upload(){
//    $picname=$_FILES["userImg"]["name"];
//    $picSize=ceil($_FILES["userImg"]["size"]/1000);
//    if($picSize>512){
//        echo '{"code":-1,"msg":"上传图像不能超过512k"}';
//        exit;
//    }
//    $type=strstr($picname,".");
//    if($type!=".gif" && $type!=".jpg" && $type!=".png"){
//        echo '{"code":-2,"msg":"上传文件只能为图片"}';
//        exit;
//    }
//    $pics=time().rand(1,9999).$type;
//
//    $tmp=$_FILES["userImg"]["tmpImg"];
//    $new="upload/".$pics;
//    move_uploaded_file($tmp,$new);
//    echo '{"code":1,"pic":$new}';
//}
//upload();
function addImg(){
    global $conn;
    session_start();
    $uid=$_SESSION["uid"];
    $pic=$_REQUEST["pic"];
//    echo $uid;
    if($uid){
        $sql="update user set avatar='$pic' where uid=$uid";
        $result=mysqli_query($conn,$sql);
//        var_dump($result);
        if($result){
            echo '{"code":1,"msg":"上传成功"}';
        }
    }
}
//addImg();