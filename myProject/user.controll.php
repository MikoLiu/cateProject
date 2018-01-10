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
	$user=mysqli_fetch_all($result,1);
	if(count($user)){
		session_start();
		$_SESSION["uid"]=$user[0]["uid"];
		return true;
	}else{
		return false;
	}
}

function logout(){
	session_start();
	$_SESSION["uid"]=null;
}

function islogin(){
	global $conn;
	session_start();
	$uid=$_SESSION["uid"];
	if($uid){
		$sql="select uname from user where uid=$uid";
		$result=mysqli_query($conn,$sql);
		$user=mysqli_fetch_all($result,1);
		//var_dump($user);
		return ["ok"=>1,"uname"=>$user[0]["uname"]];
	}else{
		return ["ok"=>0];
	}
}
//islogin();