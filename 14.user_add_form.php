<html>
<head><title>新增使用者</title></head>
<body>
<?php        
    // 關閉錯誤報告
    error_reporting(0);
    
    // 啟動 session
    session_start();
    
    // 如果未登入，顯示請登入帳號的訊息並重新導向至登入頁面
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    // 如果已登入，顯示新增使用者的表單
    else{    
        echo "
            <form action=15.user_add.php method=post>
                帳號：<input type=text name=id><br>
                密碼：<input type=text name=pwd><p></p>
                <input type=submit value=新增> <input type=reset value=清除>
            </form>
        ";
    }
?>
</body>
</html>
