(()=>{
	//向header.html发送ajax get请求
	ajax({type:"get",url:"header.html",dataType:"html"})
		.then(html=>{
			var header=document.getElementById("header");
			header.innerHTML=html;
	}).then(()=>{
        var header=document.getElementById("header");
        var about=document.querySelector(".rnav>ul>li:nth-child(3)");
        var welAbout=document.querySelector(".WelcomeList>li:nth-child(3)");
        var aBox=header.lastElementChild.lastElementChild;
//		console.log(about);
//		console.log(aBox);
        welAbout.onmouseover=about.onmouseover=aBox.onmouseover=()=>{
            aBox.style.display="block";
        }
        welAbout.onmouseout=about.onmouseout=aBox.onmouseout=()=>{
            aBox.style.display="none";
        }
    })
})();
//注销
// console.log(document.querySelector("#logout"));
