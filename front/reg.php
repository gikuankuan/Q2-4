<fieldset>
    <legend>建置會員</legend>
<form>
    <table>

        <tr>
            <td>*請設定你要註冊的帳號及密碼(最長12字元)</td>
        </tr>
        <tr>
            <td>step1 登入帳號</td>
            <td><input type="text" name="acc" id="acc"></td>
        </tr>
        <tr>
        <td>step2 登入密碼</td>
            <td><input type="password" name="pw" id="pw"></td>
        </tr>
        <tr>
        <td>step3 再次確認密碼</td>
            <td><input type="password" name="pw1" id="pw1"></td>
        </tr>
        <tr>
        <td>step4 信箱(忘記密碼使用)</td>
            <td><input type="text" name="mail" id="mail"></td>
        </tr>
        <tr>
            <td><input type="submit" value="註冊" onclick="reg()"><input type="reset" value="清除"></td>
        </tr>
    </table>
    </form>
</fieldset>
<script>
function reg(){
    let acc = $("#acc").val();
    let pw = $("#pw").val();
    let pw2 = $("#pw1").val();
    let email = $("#mail").val();

    if(acc!="" && pw!="" && pw2!="" && email!=""){
        if(pw==pw2){
            $.get("api/acc.php",{acc},function(res){
                if(res=='1'){
                    alert("帳號重複")
                }else{
                    $.post("api/reg.php",{acc,pw,email},function(){
                        alert("註冊完成，歡迎加入")
                        // location.href="index.php"
                    })
                }
            })
        }else{
            alert("密碼錯誤")
        }
    }else{
        alert("不可空白")
    }
}





</script>

