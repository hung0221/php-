<html>
    <head>
        <title>修改使用者</title> <!-- 頁面標題 -->
    </head>
    <body>
    <?php
        // 關閉錯誤報告
        error_reporting(0);
        // 啟動 session
        session_start();

        // 檢查是否已經登入
        if (!$_SESSION["id"]) {
            // 如果沒有登入，顯示請登入訊息並在3秒後跳轉到登入頁面
            echo "請登入帳號";
            echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
        } else {
            // 連接資料庫
            $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

            // 根據使用者ID查詢使用者資料
            $result = mysqli_query($conn, "select * from user where id='{$_GET['id']}'");
            $row = mysqli_fetch_array($result);

            // 顯示使用者資料並提供修改表單
            echo "
            <form method=post action=20.user_edit.php>
                <input type=hidden name=id value={$row['id']}> <!-- 隱藏欄位存放使用者ID -->
                帳號：{$row['id']}<br> 
                密碼：<input type=text name=pwd value={$row['pwd']}><p></p> <!-- 顯示並可修改密碼 -->
                <input type=submit value=修改> <!-- 提交按鈕 -->
            </form>
            ";
        }
    ?>
    </body>
</html>
