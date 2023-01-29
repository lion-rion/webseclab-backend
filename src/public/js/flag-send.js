var id = 123; //thanksを送りたい回答の主キー"id"
$("button").click(function() {
    $(document).ajaxSend(function() {
        $("#overlay").fadeIn(300);
    });
    
    var flag = document.getElementById("flag-input").value;
    var url = location.href + "/check"
    // console.log(url)
    $.ajax({
            url: url,
            type: "POST", //①
            dataType: "json", //②
            data: {
                //③
                id: id,
                flag: flag,
            },
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"), //④
            },
        })
        .done((res) => {
            if(res == "true") {
                setTimeout(function(){
                    
                    $("#overlay").fadeOut(0);
                    alert("正解です！");
                },1000);
            } else{
                //#overlayの中身を置換
                setTimeout(function(){         
                    $(".cv-spinner").replaceWith('<div class="clear-menu-wrap"><div class="clear-img-wrap"><img class="clear-img" src="/img/header.png" alt=""></div><div class="flex clear-menu-button"><div class="button008"><a href="#" class="btn btn--orange">PUSH</a></div><div class="button008"><a href="#" class="button008">PUSH</a></div></div></div>');
                },1000);
                
            }
            setTimeout(function(){
                
            },1000);
            console.log(res)
        })
        .fail((error) => {
            console.log(error.statusText)
        })
});