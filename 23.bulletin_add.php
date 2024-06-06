<?php
    // 關閉錯誤報告
    error_reporting(0);
    // 啟動 session
    session_start();

    // 檢查是否已經登入
    if (!$_SESSION["id"]) {
        // 如果沒有登入，顯示請先登入訊息並在3秒後跳轉到登入頁面
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    } else {
        // 連接資料庫
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        // 構建插入佈告的 SQL 語句
        $sql = "insert into bulletin(title, content, type, time) 
                values('{$_POST['title']}', '{$_POST['content']}', {$_POST['type']}, '{$_POST['time']}')";

        // 執行 SQL 語句
        if (!mysqli_query($conn, $sql)) {
            // 如果插入失敗，顯示錯誤訊息
            echo "新增命令錯誤";
        } else {
            // 如果插入成功，顯示成功訊息並在3秒後跳轉到佈告列表頁面
            echo "新增佈告成功，三秒鐘後回到網頁";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
        }
    }
?>
