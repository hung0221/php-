<html>
    <head>
        <title>使用者管理</title> <!-- 頁面標題 -->
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
            // 如果已經登入，顯示使用者管理頁面
            echo "<h1>使用者管理</h1>
                [<a href=14.user_add_form.php>新增使用者</a>] 
                [<a href=11.bulletin.php>回佈告欄列表</a>]<br>
                <table border=1>
                    <tr><td></td><td>帳號</td><td>密碼</td></tr>";

            // 連接資料庫
            $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

            // 查詢使用者資料
            $result = mysqli_query($conn, "select * from user");

            // 迴圈顯示每一個使用者的資料
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr><td>
                    <a href=19.user_edit_form.php?id={$row['id']}>修改</a> ||
                    <a href=17.user_delete.php?id={$row['id']}>刪除</a>
                    </td><td>{$row['id']}</td><td>{$row['pwd']}</td></tr>";
            }
            echo "</table>";
        }
    ?> 
    </body>
</html>
