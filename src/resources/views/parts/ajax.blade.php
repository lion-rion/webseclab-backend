<div class="check-ajax">
    <meta name="csrf-token" content="{{ csrf_token() }}">
            <button id="btn">これがボタン！</button>
            <script>
            var id = 123;//thanksを送りたい回答の主キー"id"
            var messege = "test";

            $("button").click(function () {
            console.log("送信")
            var url = location.href + "/check"
            // console.log(url)
                $.ajax({
                    url: url,
                    type: "POST", //①
                    dataType: "json", //②
                    data: {
                        //③
                        id: id,
                        messege: messege,
                    },
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"), //④
                    },
                })
                
                .done((res)=>{
                    console.log(res.message)
                })
                    .fail((error)=>{
                    console.log(error.statusText)
                    })
            });
    </script>
</div>