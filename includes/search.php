
<script src="./jquery.js"></script>
这个是服务器

<span>
        <form style="float: right;margin-top: -10px"  id="form" onsubmit="return false" action="##" method="post">
        <input type="text" style="height: 30px;padding-left: 10px" value="" placeholder="search name" name="name">
            <button style="height: 35px;border:0;background-color: #990000;color: #FFFFFF;border-radius: 10px;padding-left: 20px;padding-right: 20px" onclick="search()">search</button>
    </form>
</span>
<div id="app" style="position: absolute;top: 50px;background-color: #990000;color:#FFFFFF;width: 70%;text-align: center;z-index: 99999">
    <div class="content">

    </div>
</div>
<script>
    function search() {
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "../includes/dosearch.php",
            data: $('#form').serialize(),
            success: function (data) {
                $.each(data, function(i, n){
                    $(".content").prepend("<br><a style='color: #FFFFFF;'>Name: "+n.name+" email: "+n.email+" phone: "+n.phone+"</a><br><br>")
                })

            },
        });
    }
</script>