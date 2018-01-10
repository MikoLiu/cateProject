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
		console.log(aBox);
        welAbout.onmouseover=about.onmouseover=aBox.onmouseover=()=>{
            aBox.style.display="block";
        }
        welAbout.onmouseout=about.onmouseout=aBox.onmouseout=()=>{
            aBox.style.display="none";
        }
    function loadStatus(){
        ajax({
            type:"get",
            url:"data/routes/users/islogin.php",
            dataType:"json"
        }).then(data=>{
            //console.log(data.ok);
            var loginList=document.querySelector(".loginList");
            var WelcomeList=document.querySelector(".WelcomeList");
            var name=document.querySelector(".WelcomeList #uname");
            var adiv=document.querySelector(".nav>div:last-child");
            var welUser=document.querySelector(".WelcomeList li:nth-child(4)");//welcome user对应的li
            var mine=document.querySelector(".mine");//我的主页
            console.log(welUser);
            //console.log(loginList,WelcomeList,name,data.uname);
            if (data.ok==1)
            {
                console.log(adiv);
                loginList.style.display="none";
                WelcomeList.style.display="block";
                adiv.className="welAbout";
                name.innerHTML=data.uname;
                welUser.onmouseover=mine.onmouseover=()=>{
                    mine.style.display="block";
                }
                welUser.onmouseout=mine.onmouseout=()=>{
                    mine.style.display="none";
                }
            }else{
                loginList.style.display="block";
                WelcomeList.style.display="none";

            }
        })
    }
    loadStatus();
    // console.log(document.getElementById("logout").innerHTML);
    document.getElementById("logout").onclick=()=>{
        ajax({
            type:"get",
            url:"data/routes/users/logout.php",
            dataType:"text"
        }).then(()=>{
            location.href="index.html";
            // location.reload();
        })
    }
    })
})();
