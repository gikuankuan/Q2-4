<fieldset>
    <legend>忘記密碼</legend>

    <table>
        <tr>
            <td>請輸入信箱以查詢密碼</td>
        </tr>
        <tr>
            <td><input type="text" name="mail" id="mail"></td>
        </tr>
        <tr>
            <td id="res"></td>
        </tr>
        <tr>
            <td><input type="button" value="尋找" onclick="find()"></td>
        </tr>
    </table>

</fieldset>

<script>
    function find() {
        let mail = $('#mail').val();
        $.get("../api/forgot.php", {
            mail
        }, function(res) {
            $('#res').html(res);
        })
    }
</script>