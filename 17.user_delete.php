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
    }
    else {   
        // 連接資料庫
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        // 刪除使用者的 SQL 語句
        $sql = "delete from user where id='{$_GET["id"]}'";

        // 執行 SQL 語句
        if (!mysqli_query($conn, $sql)) {
            // 如果刪除失敗，顯示錯誤訊息
            echo "使用者刪除錯誤";
        } else {
            // 如果刪除成功，顯示成功訊息
            echo "使用者刪除成功";
        }

        // 在3秒後跳轉到使用者管理頁面
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
    }
?>
