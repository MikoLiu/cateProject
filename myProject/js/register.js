(()=>{

		//console.log($("ul li:first>p>span").attr({class:"vali_success"}));
		//console.log($("ul li:first>p>span").html());
		//当鼠标离开uname控件时判断用户名是否已经存在
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
		var nResult=false,wResult=false,cResult=false,eResult=false,pResult=false;
		upwd.onblur=function(){
			wResult=vail(this,/^\w{1,6}$/);
		}
		cpwd.onblur=function(){

		if (cpwd.value!=""&&upwd.value==cpwd.value)
		{
			cpwd.previousElementSibling.firstElementChild.className="vali_success";
			cResult=true;
		}else{
			cpwd.previousElementSibling.firstElementChild.className="vali_fail";
			cResult=false;
		}
	}
	email.onblur=function(){
		eResult=vail(this,/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/);
	}
	phone.onblur=function(){
	//	console.log(this);
		//var reg ="";
		pResult=vail(this,/^(\+86)?\s*1[34578]\d{9}$/);
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



		$("input[name='uname']").blur(e=>{
			checkName($("input[name='uname']").val());
			//console.log($("input[name='uname']").val());
			//console.log("nResult"+nResult);
		})
		//判断用户名是否存在
		function checkName(txt){
			//	return new Promise(callback=>{
				//var flag=false;
					ajax({
					type:"get",
					url:"data/routes/users/checkName.php",
					data:"uname="+txt.trim(),
					dataType:"text"
				}).then(text=>{
					var msg=document.querySelector("ul li:first-child>p>span");
					var reg=/^\w{1,10}$/;
					
					if (text=="true")
					{
						msg.style.display="block";
						msg.innerHTML="用户名已存在";
						//console.log("flag:"+flag);
						nResult=false;
						//console.log($("ul li:first>p>span").html());
					//	console.log(document.querySelector("ul li:first-child>p>span").innerHTML);
					}else{
						if (reg.test($("input[name='uname']").val())&&($("input[name='uname']").val())!="")
						{
							
							msg.className="vali_success";
							nResult=true;
							//console.log("flag2:"+flag);
						}else{
							msg.className="vali_fail";
							nResult=false;
						}
					//	callback();
						
					}
					//将flag的赋值写在此处，调用checkName方法时并没有得到返回值，为undefined
//						if (flag==true)
//					{
//						console.log("flag3:"+flag);
//						return true;
//					}else{
//						console.log("flag4:"+flag);
//						return false;
//					}
				})
			//})
				
			//	return flag;//异步验证用户名还没返回数据，此方法已经返回了值为最初flag的值false
				
		}
			document.querySelector("ul li:last-child>a").onclick=(()=>{
			//获取表单控件上的值
			var uname=$("input[name='uname']").val();
			var upwd=$("input[name='upwd']").val();
			var email=$("input[name='email']").val();
			var phone=$("input[name='phone']").val();
				//var =checkName(uname);
				//用AJAX发送异步请求
					console.log(nResult,wResult,cResult,eResult,pResult);
					if (nResult&&wResult&&cResult&&eResult&&pResult)
				{
					console.log(nResult,wResult,cResult,eResult,pResult);
					ajax({
					type:"get",
					url:"data/routes/users/register.php",
					data:"uname="+uname+"&upwd="+upwd+"&email="+email+"&phone="+phone,
					dataType:"text"
				}).then(()=>{
					location="login.html";
				})
			}
		});

})();