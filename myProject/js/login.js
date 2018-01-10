(()=>{
var uname=document.querySelector("[name=username]");
var upwd=document.querySelector("[name=upwd]");
var umsg=document.querySelector("ul li:first-child>p>span");
	uname.onfocus=e=>{
		//var uMsg=e.target.previousElementSibling.firstElementChild;
		e.target.className="txt_focus";
		umsg.className="";
		umsg.innerHTML="请输入正确的用户名";
	}
uname.onblur=e=>{
	umsg.className="vali_info";
}
/*upwd.onfocus=e=>{
		e.target.className="txt_focus";
		//e.target.previousElementSibling.firstElementChild.className="";
	//	console.log(e.target.previousElementSibling.lastElementChild);
	}
	uname.onblur=e=>{
		vail(e.target,/^\w{1,10}$/);
	}
//	upwd.onblur=e=>{
//		vail(e.target,/^\w{1,6}$/);
//	}
	function vail(box,reg){
	box.className="";
	if (reg.test(box.value))
	{
		box.previousElementSibling.firstElementChild.className="vali_success";
		return true;
	}else{
		box.previousElementSibling.firstElementChild.className="vali_fail";
		return false;
	}
}*/
document.querySelector("ul li:last-child>a").onclick=(()=>{

	ajax({
		type:"get",
		url:"data/routes/users/login.php",
		data:"uname="+uname.value+"&upwd="+upwd.value,
		dataType:"text"
	}).then(text=>{
		if (text=="true"){
			//document.querySelector("ul li:first-child>p>span").className="vali_success";
			location="index.html";
		}else if(text=="false"){
			//var msgSpan=document.querySelector("ul li:first-child>p>span");
			umsg.className="vali_fail";
			umsg.innerHTML="用户名或密码错误";
		}
	})

});
	
})();