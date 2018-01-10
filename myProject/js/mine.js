(()=>{
    $.ajax({
        url:"data/routes/users/getUser.php",
        type:"GET",
        dataType:"json",
        success:function(data){
            $(".userMsg span").html(data[0].uname.toUpperCase());
            var html="";
            html+=`
                <li>姓名：<span>${data[0].uname}</span></li>
                <li>电话：<span>${data[0].phone}</span></li>
                <li>E-mail：<span>${data[0].email}</span></li>
                <li>喜好：<span>${data[0].favorite}</span></li>
            `;
            $(".userMsg ul").html(html);

            $(".content svg").click(function(){
                $("#btn-file").click();
                // $.ajax({
                //     type:"GET",
                //     url:"data/routes/users/upload.php",
                //     dataType:"json",
                //     success:function(data){
                //         console.log(data);
                //     },
                //     error:function(data){
                //         alert("报错了");
                //     }
                //
                // })
                // function changImg(e){
                //     for (var i = 0; i < e.target.userImg.length; i++) {
                //         var file = e.target.userImg.item(i);
                //         if (!(/^image\/.*$/i.test(file.type))) {
                //             continue; //不是图片 就跳出这一次循环
                //         }
                //         //实例化FileReader API
                //         var freader = new FileReader();
                //         freader.readAsDataURL(file);
                //         freader.onload = function(e) {
                //             $("#myImg").attr("src",e.target.result);
                //         }
                //     }
                // }
                // $(function() {
                    $("#btn-file").change(function() {
                        var $file = $(this);
                        var fileObj = $file[0];
                        var windowURL = window.URL || window.webkitURL;
                        var dataURL;
                        var $img = $("#myImg");
                        console.log( $file);
                        if(fileObj && fileObj.files && fileObj.files[0]){
                            dataURL = windowURL.createObjectURL(fileObj.files[0]);
                            $img.attr('src',dataURL);
                            console.log( $img.attr("src"));
                            if($img.attr("src")!=""){
                                $(".mask").css("display","none");
                            }else{
                                $(".mask").css("display","block");
                            }
                            /***********************start******************************/
                                $.ajax({
                                    type: "GET",
                                    url: "data/routes/users/addImg.php",
                                     dataType: "json",
                                    data:{pic: $img.attr("src").slice(5)},
                                    success:function (data) {
                                         console.log(data);
                                    },
                                    error: function () {
                                        alert("wrong");
                                    }
                                })
                            /*********************end********************************/
                        }else{
                            dataURL = $file.val();
                            var imgObj = document.getElementById("myImg");
                        // 两个坑:
                        // 1、在设置filter属性时，元素必须已经存在在DOM树中，动态创建的Node，也需要在设置属性前加入到DOM中，先设置属性在加入，无效；
                        // 2、src属性需要像下面的方式添加，上面的两种方式添加，无效；
                            imgObj.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale)";
                            imgObj.filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = dataURL;

                        }
                    });
                    $(".updImg").click(function(e){
                        e.preventDefault();
                        var hasImg=$("#myImg").attr("src");
                        if(hasImg){
                            $("#myImg").attr("src","");
                            $(".mask").css("display","block");
                        }
                    })
                // });
            });
        },
        error:function(){
            alert("something wrong");
        }
    })
})();