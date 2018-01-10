(()=>{
	/*var title=document.querySelector(".title>ul");
	title.onclick=e=>{
		var total=title.children[0].firstElementChild;
		var main=title.children[1].firstElementChild;
		var soup=title.children[2].firstElementChild;
		var sweet=title.children[3].firstElementChild;
		var drink=title.children[4].firstElementChild;
		//不同菜品对应的列表
		var mainList=document.querySelector(".content>ul:first-child")
		var soupList=document.querySelector(".content>ul:nth-child(2)")
		var sweetList=document.querySelector(".content>ul:nth-child(3)")
		var drinkList=document.querySelector(".content>ul:nth-child(4)")
		console.log(main);
		
		if (e.target==main)
		{
			console.log(e.target);
			mainList.style.display="flex";
			soupList.style.display=sweetList.style.display=drinkList.style.display="none";
		}else if(e.target==soup){
			soupList.style.display="flex";
			mainList.style.display=sweetList.style.display=drinkList.style.display="none";
		}else if(e.target==sweet){
			sweetList.style.display="flex";
			mainList.style.display=soupList.style.display=drinkList.style.display="none";
		}else if(e.target==drink){
			drinkList.style.display="flex";
			mainList.style.display=soupList.style.display=sweetList.style.display="none";
		}else{
			mainList.style.display=soupList.style.display=
			sweetList.style.display=drinkList.style.display="flex";
		}
	}*/
	function loadPage(pno=0){
		var fList=document.querySelector(".content>ul");
		var html="";
		ajax({
			type:"get",
			url:"data/routes/foods/getFoods.php",
			data:"pno="+pno
		}).then(output=>{
			//	console.log(output.data);
				for (var f of output.data)
				{
					html+=`
						<li><a href='food_details.html?fid=${f.fid}'><img src=${f.fimg}>
							<p>${f.fname}</p>
							<span>${f.fdetail}</span>
 							</a>
						</li>	
					`;
				}
				fList.innerHTML=html;
			//	console.log(output);
				var pageCount=output.pageCount,pageNo=output.pageNo;
				//console.log(pageCount);
				html=`<a href='javascript:;'>上一页</a>`;
					for (var i=1;i<=pageCount;i++)
					{
						html+=`<a href='javascript:;'>${i}</a>`;
					}
				html+=`<a href='javascript:;'>下一页</a>`;
				var pages=document.getElementById("pages");
					pages.innerHTML=html;
				//		console.log(pages.pageNo);
				//	console.log(pageNo);
				//	console.log(pages.children[3]);
					var aa = parseInt(pageNo)+1;
				//	console.log(pages.children[aa]);
					
					pages.children[aa].className="current";
					console.log(pages.children[aa].innerHTML);
				checkpage(pages,pageCount,pageNo);
				
			/*	pages.onclick=e=>{
					if (e.target.nodeName="A")
					{
						var a=e.target;
						if (a!=pages.firstElementChild&&a!=pages.lastElementChild)
						{
							
							if (a.className!="current")
							{
							//	console.log(a.innerHTML);
								loadPage(a.innerHTML-1);
							}
						}else{
							if (!a.className.endsWith("disabled"))
							{
								var curr=document.querySelector(".current");
								if (a.className.startsWith("next"))
								{
									loadPage(curr.innerHTML-1);
									console.log("按下next："+curr.innerHTML);
								}else{
									loadPage(curr.innerHTML-2);
									console.log(a.innerHTML);
								}
							}
						}
					}
				}*/
			})
		}
	loadPage();
		pages.onclick=e=>{
					if (e.target.nodeName="A")
					{
						var a=e.target;
						if (a!=pages.firstElementChild&&a!=pages.lastElementChild)
						{
							
							if (a.className!="current")
							{
							//	console.log(a.innerHTML);
								loadPage(a.innerHTML-1);

							}
						}else{
							if (!a.className.endsWith("disabled"))
							{
								var curr=document.querySelector(".current");
								//console.log(a.className.startsWith("next"));
//								if (a.className.startsWith("next"))
								if(a==pages.lastElementChild)
								{
									loadPage(curr.innerHTML);
									console.log("按下next："+curr.innerHTML);
								}else{
									loadPage(curr.innerHTML-2);
									console.log("按下previous："+a.innerHTML);
								}
							}
						}
					}
				}

	
	function checkpage(pages,pageCount,pageNo){
		var prevBtn=pages.firstElementChild;
		var nextBtn=pages.lastElementChild;
		if (pageNo!=0&&pageNo!=pageCount-1)
		{
			console.log("pageNo:"+pageNo,"pageCount-1:"+(pageCount-1));
			prevBtn.className="previous";
			nextBtn.className="next";
		}else{
			if(pageNo==0)
			prevBtn.className="previous disabled";
			if(pageNo==pageCount-1)
				nextBtn.className="next disabled";
			}
	}
})();