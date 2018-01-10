(()=>{
	if (location.search.slice(1))
	{
		var foodId=location.search.slice(1).split("=")[1];
		console.log(foodId);
	}
	$.ajax({
		type:"get",
		url:"data/routes/foods/getFoodById.php",
		dataType:"json",
		data:{fid:foodId},
		success:function(data){
			console.log(data);
			var f=data[0];
			document.querySelector(".preview>img").src=f.fimg;
			document.querySelector(".show>h1").innerHTML=f.fname;
			document.querySelector(".show h3").innerHTML=f.fdetail;
			document.querySelector(".show .intro").innerHTML=f.intro;
			console.log(f.intro);
			//console.log($(".preview").children().first());
		/*************添加购物车*********/
			//获取数量的input值
			//获取+，-按钮，并添加click事件
			$(".show>p").click(function(e){
				var $tar=$(e.target);
				//获取input元素
				var $input=$tar.parent().children(":nth-child(2)");
                console.log($tar);
					if($tar.is(".add")||$tar.is(".reduce")){
						var value=$input.val();
						//console.log(value);
						if($tar.is(".add")){
							value++;
						}else if(value>1){
							value--;

						}
                        $input.val(value);
					}
			});
			//添加购物车
			var sum=0;
			$.ajax({
				type:"get",
				url:"data/routes/cart/getOrderList.php",
				success:function(data){
					console.log(data);
					for(var item of data){
						sum+=parseInt(item.count);
					}
					$(".cCount").html(sum);
				},
				error:function(){
					alert("添加错误");
				}
			})
			$(".shop").click(function(e){

				var $tar=$(e.target);
                var $input=$tar.parent().prev().children(":nth-child(2)");
                sum+=parseInt($input.val());
                $(".cCount").html(sum);
                $.post(
                    "data/routes/cart/addOrder.php",
                    "fid="+f.fid+"&count="+$input.val()
                )
				//如果是立即购买跳转到购物清单页面
				if($tar.is(".buy-now")){
					$tar.attr("href","shopList.html");
				}else{
                    e.preventDefault();
				}
				// if($tar==$(".buy-now")){
                	// location="shopList.html";
				// }
			})
			//点击立即购买跳转
			$(".shop a:first-child").click(function(e){
				location="food_details.html?lid="+foodId;
			});
			/*********食物小图片列表*******/
			var html="";
			for(var food of data){
				console.log(data);
				html+=`
					<li>
						<img src="${food.img}" data-pid="food.pid" alt="">
					</li>
				`
			}
			$(".fList").html(html);
            var pid='';//获取当前点击图片的id值
            var bigDiv=document.getElementById("largeDiv");

			$(".fList").on("click","li",function(){
				// console.log($(this).html());
				// var $tar=$(e.target);
				var img=$(this).children().attr("src");
				var pid=$(this).children().data("pid");
				 $(".preview>img").attr("src",img);
                bigDiv.style.background="url("+img+")";
				 // $("#largeDiv").css("background","url(img)");
				// f.fimg=img;
			})
			/**********放大镜**********/
            //获取大图片div
            // var bigDiv=document.getElementById("largeDiv");
            bigDiv.style.background="url("+f.fimg+")";

			var mask=document.getElementById("mask");
			// $("#superMask").on("mouseover",function(){
			// 	// mask.css=({"display":"block"});
			// 	mask.style.display="block";
			// });
            //给覆盖在图片上的div（superMask）设置hover事件控制鼠标移入和移出superMask时触发的事件
			$("#superMask").hover(
				function(){
					mask.style.display="block";
                    bigDiv.style.display="block";},
				function(){mask.style.display="none";
                    bigDiv.style.display="none";}
			);
			//给放大镜(mask)设置MouseMove事件
			$("#superMask").on("mousemove",function(e){
				//鼠标位置在mask小方块的中心，获取鼠标的(x,y)坐标
				var x=e.offsetX,y=e.offsetY;
				var MAXSIZE=225;//mask的宽度
                //console.log(x,y);
				//mask小方块的左边框和上边框距离superMask左边和上边的距离为left，top
				var left=x-MAXSIZE/2,top=y-MAXSIZE/2;
				if(left<0){
					left=0;
				}else if(left>225){
					left=225;
				}
				if(top<0){
					top=0;
				}else if(top>225){
					top=225;
				}
				// $tar.css({"top":});
				mask.style.left=left+"px";
                mask.style.top=top+"px";
                bigDiv.style.backgroundPosition= -16/9*left+"px "+(-51/45)*top+"px";
			});
		}

	})


	
})();