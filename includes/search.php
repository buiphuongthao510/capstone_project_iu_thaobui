
<script src="https://cgi.luddy.indiana.edu/~team21/includes/jquery.js"></script>


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
    // ajax no refresh form submit
    function search() {
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "../includes/dosearch.php",//use url to submit
            data: $('#form').serialize(),
            //data for returning
            success: function (data) {
                //search out data using jquery to work ajax and turn on website 
                $.each(data, function(i, n){
                    $(".content").prepend("<br><a href='?id=+n.oid' style='color: #FFFFFF;'>Name: "+n.name+" email: "+n.email+" phone: "+n.phone+"</a><br><br>")
                })

            },
        });
    }
</script>