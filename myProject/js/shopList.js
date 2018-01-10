(()=>{
    if (location.search.slice(1))
    {
        var foodId=location.search.slice(1).split("=")[1];
        // console.log(foodId);
    }
    $.ajax({
        type:"get",
        url:"data/routes/cart/getOrderList.php",
        dataType:"json",
        success:function(data){
            console.log(data);
              //console.log($(".cart>tbody").html());
            // var f=data[0];
            // var html=$(".cart>tbody").html();
            // // console.log(data);
            // for(var f of data){
            //         html+=`
            //     <tr class="fmsg" data-fid="${f.fid}">
            //         <td>
            //             <div>
            //
            //                 <a href="#">
            //                     <img src="${f.simg}" alt="">
            //                 </a>
            //             </div>
            //             <div class="ftitle">
            //                 <a href="#">
            //                     ${f.fname}
            //                 </a>
            //             </div>
            //         </td>
            //         <td>
            //             <span>￥ ${f.price}</span>
            //         </td>
            //         <td>
            //             <a href="" class="reduce">-</a>
            //             <input type="text" value="1">
            //             <a href="" class="add">+</a>
            //         </td>
            //         <td>
            //             <span>￥ ${f.price}</span>
            //         </td>
            //        <td>
            //            <a href="#">删除</a>
            //        </td>
            //     </tr>
            //     <hr>
            //     `;
            // }
            // $(".cart>tbody").html(html);
            function loadCart(){
                var html=$(".cart>tbody").html();
                 console.log(data);
                for(var f of data){
                    html+=`
                <tr class="fmsg" data-fid="${f.fid}">
                    <td>
                        <div>
                      
                            <a href="#">
                                <img src="${f.fimg}" alt="">
                            </a>
                        </div>
                        <div class="ftitle">
                            <a href="#">
                                ${f.fname}
                            </a>
                        </div>
                    </td>
                    <td>
                        <span>￥ ${f.price}</span>
                    </td>
                    <td>
                        <a href="" class="reduce">-</a>
                        <input type="text" value="${f.count}">
                        <a href="" class="add">+</a>
                    </td>
                    <td>
                        <span>￥ ${(f.price*f.count).toFixed(2)}</span>
                    </td>
                   <td>
                       <a href="#">删除</a>
                   </td>
                </tr>
                <hr>
                `;
                }
                $(".cart>tbody").html(html);
            }
            loadCart();
            // $(".pay .total").html();
            /***********点击添加食物，并计算************/
            $("td>a").click(function(e){
                e.preventDefault();
                var $tar=$(e.target);
                if($tar.is(".add")||$tar.is(".reduce")){
                    var $input=$tar.parent().children(":nth-child(2)");//商品数量
                    var price=parseFloat($(".fmsg td:nth-child(2)").children().html().slice(1));//单品小计金额
                    var totalprice=parseFloat($(".pay .total"));//选购商品应付总金额
                    // var tprice=$(".fmsg td:last-child").children();
                    var tprice=$tar.parent().next().children();
                    // console.log(tprice.html());
                    var i=$input.val();
                    // console.log($input.val());
                    if($tar.is(".reduce")){
                        // console.log(i);
                        if(i!=1){
                            i--;
                        }
                    }else{
                        i++;
                    }
                    $input.val(i);
                    var pr="￥"+(i*price).toFixed(2);
                    // console.log(pr);
                    tprice.html(pr);
                    getTotalPrice();
                }

            })
            //计算购物清单总金额
            function getTotalPrice(){
                var sum=0;
                for(var i=0;i<data.length;i++){
                    var lists=document.getElementsByClassName("fmsg");
                    // var onePrice=$(".fmsg td:last-child span");
                    var onePrice=parseFloat($(lists[i]).children().last().prev().children().html().slice(1));
                    sum+=onePrice;
                    // console.log(onePrice.html());
                }
                $(".pay .total").html(sum.toFixed(2));
            }
            getTotalPrice();
            //点击删除按钮
            $(".fmsg td:last-child a").click(function(e){
                e.preventDefault();
                var $tar=$(e.target);
                var fid=$tar.parent().parent().data("fid");
                console.log(fid);
                $.ajax({
                    url:"data/routes/cart/deleteFood.php",
                    type:"POST",
                    data:{fid:fid},
                    success:function(){
                        alert("删除成功");
                        // console.log($(".alert").html());
                        location.reload(true);
                        // $(".alert").removeClass("fade");
                        loadCart();
                    },
                    error:function(){
                        alert("网络故障111");
                    }
                })
            })
        },
        error:function(){
            alert("请登录");
        }
    })
})();