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
                setTimeout(function(){
                    $("#overlay").fadeOut(0);
                    alert("正解です！");
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