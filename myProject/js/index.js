// var show=document.querySelector(".index>img:first-child");
// function change(){
// 	show.className="";
//
// 	if (show.nextElementSibling)
// 	{
// 		//console.log(show);
// 		show.nextElementSibling.className="show";
// 		show=show.nextElementSibling;
// 	}else{
// 		show.parentNode.firstElementChild.className="show";
// 		show=show.parentNode.firstElementChild;
// 	}
// }
// setInterval(change,2000);
//change();
/**********轮播***************/
/*(()=>{
	//获取当前屏幕显示的div(index)的宽度，并将宽度赋值给container下的放图片的div
	// var index=document.querySelector(".index");
	var w=getComputedStyle(document.querySelector(".index")).width;
	var sdiv=document.querySelectorAll("#container div");
	for(var i=0;i<sdiv.length;i++){
		sdiv[i].style.width=w;
	}
	//将container宽度设为4*sdiv的宽度
	var container=document.querySelector("#container");
    container.style.width=3*w;
	//将每个小div的宽度放入常量中
	var DWIDTH=parseInt(w),INTERVAL=1000,WAIT=3000,moved=0;
    setInterval(function(){
     //  console.log(-DWIDTH*moved);
       if(moved==3){
    		moved=0;
           container.style.cssText="transition:all 0 linear;left:0;";
        }else{
           container.style.cssText="transition:all 0.5s linear;left:"+(-DWIDTH*moved)+"px;";
           moved++;
    	}
    },INTERVAL);
    // console.log(w,DWIDTH);


})();*/
(()=>{
    var w=getComputedStyle(document.querySelector(".index")).width;
    var getP=w.indexOf("p");//获取字符串中px所在位置
    var WIDTH=parseFloat(w.slice(0,getP));
		// parseInt()
    console.log(WIDTH);
    $("#container div:nth-child(2) p").css("left",WIDTH+WIDTH/5);
    $("#container div:nth-child(3) p").css("left",2*WIDTH+WIDTH/5);
    var sdiv=$("#container div");
    for(var i=0;i<sdiv.length;i++){
        sdiv[i].style.width=w;
    }
    var moved=0,INTERVAL=1000,WAIT=1500;
	 $("#container").css("width",WIDTH*4);

	function move(){
		var x=0;
		setTimeout(()=>{
			if(moved==3){
				moved=0;
				$("#container div:nth-child(2) p").css("top",0);
				$("#container div:nth-child(3) p").css("top",0);
				$("#container").css("left",0);
			}
            moved++;
            $("#container").animate({
                //新的left位置永远等于-LIWIDTH*moved
                left:-WIDTH*moved
            },INTERVAL,move);
            if(moved==1){
                $("#container div:nth-child(2) p").animate({
                    top:300
                },1500)
            }else if(moved==2){
                $("#container div:nth-child(3) p").animate({
                    top:300
                },1500)
            }
		},WAIT);

        // setInterval(()=>{
        //     if(moved==1){
        //         $("#container div:nth-child(2) p").animate({
        //             top:300
        //         },1000)
        //     }else if(moved==2){
        //         $("#container div:nth-child(3) p").animate({
        //             top:300
        //         },1000)
        //     }
        // },INTERVAL*2);
	}
	move();


})();
