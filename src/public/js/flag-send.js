var id = 123; //thanksを送りたい回答の主キー"id"
$("button").click(function() {

    var flag = document.getElementById("flag-input").value;
    if (flag == "hello") {
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
                console.log(res.message)
            })
            .fail((error) => {
                console.log(error.statusText)
            })
        return false;
    } else {
        alert("no")
    }
});