(()=>{
    $.ajax({
        url:"ask.html",
        dataType:"html",
        success:function(data){
            $(".ask").html(data);

            $(".ask span").click(function(e){
                $(".ask").css("bottom",-200);
                setTimeout(function(){
                    $(".ask").css("bottom",20);
                },2000)
            })
        }
    });
})();