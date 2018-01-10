<?php
require_once("../../init.php");
function getFoods(){
	global $conn;
	$output=[
		"count"=>0,//总个数
		"pageSize"=>12,//每页存放的食品个数
		"pageNo"=>0,//当前页号
		"pageCount"=>0,//总共的页数
		"data"=>[],
//		"imgs"=>[]
	];
	$pno=$_REQUEST["pno"];
	if($pno){
		$output["pageNo"]=$_REQUEST["pno"];
	}
	$sql="select * from food";
//select img from food_pic where foodid =
//$sql="select food.*,food_pic.img from food left join food_pic on food.fid=food_pic.foodid";
	$result=mysqli_query($conn,$sql);
	//echo json_encode(mysqli_fetch_all($result,MYSQLI_ASSOC)[0]);
	$output["count"]=count(mysqli_fetch_all($result,1));
	$output["pageCount"]=ceil($output["count"]/$output["pageSize"]);
	
	$sql.=" limit ".$output["pageNo"]*$output["pageSize"].", ".$output["pageSize"];
	$result=mysqli_query($conn,$sql);
	$output["data"]=mysqli_fetch_all($result,1);//将当前页面的数据取出来放在output["data"]中
	echo json_encode($output);
	//var_dump($output["data"]);
	//var_dump($output["data"]);
}
//getFoods();
function getFoodById(){
	global $conn;
	$fid=$_REQUEST['fid'];
//	$sql="select * from food where fid=$fid";
    $sql="select food.* ,food_pic.img,food_pic.pid from food left join food_pic on food.fid=food_pic.foodid WHERE food.fid=$fid";
	$result=mysqli_query($conn,$sql);
	echo json_encode(mysqli_fetch_all($result,1));
//	echo $sql;
}
//getFoodById();
