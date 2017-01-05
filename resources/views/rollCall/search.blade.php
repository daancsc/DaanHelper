<form id="search">
    <input type="text" name="input" placeholder="輸入學生email或暱稱">
    <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
    <input type="submit" name="search" value="搜尋">
</form>
<p id="err"></p>
<table id="list">
    <thead>
        <tr>
            <th>暱稱</th>
            <th>信箱</th>
            <th>操作</th>
        </tr>
    </thead>
</table>
<script>
    $(function () {
        $("#list thead").hide();
        $("#err").text('');
        $('#search').submit(function (e) {
            $("#list thead").hide();
            $("#list tbody").remove();
            $("#err").text('');
            $.ajax({
                url: '../search',
                data: $('#search').serialize(),
                type: 'POST',
                dataType: 'text',
                success: function (msg) {
                    console.log(msg);
                    if (msg == "[]") {
                        $("#err").text("查無此人");
                    } else {
                        var table = "<tbody>";
                        var data = $.parseJSON(msg);
                        console.log(data);
                        $.each(data, function (i, value) {
                            table += "<tr><td>" + value.nick + "</td>";
                            table += "<td>" + value.email + "</td>";
                            table += "<td><a href='../add/" + value.email + "'>新增此人</a></td></tr>";
                        });
                        $("#list").append(table + "</tbody>");
                        $("#list thead").show();
                    }
                },
            })
            e.preventDefault();
        })
    })
</script>