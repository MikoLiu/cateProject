(()=>{
	var chief=document.querySelector(".chiefList");
	//console.log(chief);
			var c0=chief.children[0];
		var c1=chief.children[1];
		var c2=chief.children[2];
		var c3=chief.children[3];
		var c4=chief.children[4];
		var c5=chief.children[5];
	// chief.onmouseover=e=>{
	// 	var tar=e.target;
	// 	//console.log(c1);
	// 	if ((tar==c0||tar==c2||tar==c4)&&tar.className=="show")
	// 	{
	// 			tar.className="hide";
	// 			tar.nextElementSibling.className="show";
	// 	}
	// }
	// chief.onmouseout=e=>{
	// 	var tar=e.target;
	// 	if (tar==c1||tar==c3||tar==c5)
	// 	{
	// 		tar.className="hide";
	// 		tar.previousElementSibling.className="show";
	// 	}
	// }
	// $(".chiefList").hover(function(e){
	// 		$(e.target).css("transform","rotateY(180deg)");
	// 		if($(e.target).next().is(".back")){
	// 			$(e.target).next().css("transform","rotateY(-180deg)")
	// 		}
    //
	// })
var flag=true;
var i=1;
    console.log($(".chiefList a"));
    $(".chiefList a").mouseenter(function(e){
		var $tar = $(e.target);

       if(flag==true){
			flag=false;
			$(e.target).next().css("transform","rotateY(-180deg)");
			 // $(e.target).css("transform","rotateY(-180deg)")
			$(e.target).next().next().css("transform","rotateY(0deg)")
		   	flag=true;
	   }
	})
    .mouseout(function(e){
    	console.log(flag);
    	if(flag==true){
		$(e.target).next().css("transform","rotateY(0deg)");
		$(e.target).next().next().css("transform","rotateY(180deg)");
    	}
	})
    // $(".chiefList .back").mouseleave(function(e){
     //    console.log($(e.target).html());
     //    $(e.target).css("transform","rotateY(0deg)");
     //    // if($(e.target).next().is(".show")){
     //    console.log($(e.target).prev());
     //    $(e.target).next().css("transform","rotateY(0deg)");
     //    $(e.target).next().next().css("transform","rotateY(180deg)");
     //    // }
    // })
})();