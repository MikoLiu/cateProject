(()=>{
//获取页面上元素内容
var username=document.querySelector("[name=uname]");
var upwd=document.querySelector("[name=upwd]");
var cpwd=document.querySelector("[name=cpwd]");
var email=document.querySelector("[name=email]");
var phone=document.querySelector("[name=phone]");
//console.log(username,upwd,cpwd,email,phone);
username.onfocus=upwd.onfocus=cpwd.onfocus=email.onfocus=phone.onfocus=e=>{
	var box=e.target;
	box.className="txt_focus";
	box.previousElementSibling.firstElementChild.className="";
	//console.log(box.previousElementSibling.firstElementChild);
}
/*username.onblur=function(){
	vail(this,/^\w{1,10}$/);
}*/
upwd.onblur=function(){
	vail(this,/^\w{1,6}$/);
}
cpwd.onblur=function(){
	if (cpwd.value!=""&&upwd.value==cpwd.value)
	{
		cpwd.previousElementSibling.firstElementChild.className="vali_success";
	}else{
		cpwd.previousElementSibling.firstElementChild.className="vali_fail";
	}
}
email.onblur=function(){
	vail(this,/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/);
}
phone.onblur=function(){
//	console.log(this);
	//var reg ="";
	vail(this,/^(\+86)?\s*1[34578]\d{9}$/);
}
function vail(box,reg){
	//console.log(box);
	box.className="";
	if (reg.test(box.value))
	{
		box.previousElementSibling.firstElementChild.className="vali_success";
		return true;
	}else{
		box.previousElementSibling.firstElementChild.className="vali_fail";
		return false;
	}
}
//点击注册按钮，提交数据到数据库

})();