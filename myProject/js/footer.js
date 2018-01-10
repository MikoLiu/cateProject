(()=>{
ajax({type:"get",url:"footer.html",dataType:"html"})
	.then(html=>{
		var footer=document.getElementById("footer");
		footer.innerHTML=html;
	})
})();

