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

        // 根據佈告編號查詢佈告資料
        $result = mysqli_query($conn, "select * from bulletin where bid={$_GET["bid"]}");
        $row = mysqli_fetch_array($result);

        // 根據佈告類型設置對應的 radio 按鈕為選中狀態
        $checked1 = "";
        $checked2 = "";
        $checked3 = "";
        if ($row['type'] == 1) $checked1 = "checked";
        if ($row['type'] == 2) $checked2 = "checked";
        if ($row['type'] == 3) $checked3 = "checked";

        // 顯示佈告修改表單
        echo "
        <html>
            <head><title>修改佈告</title></head> <!-- 頁面標題 -->
            <body>
                <form method=post action=27.bulletin_edit.php>
                    佈告編號：{$row['bid']}<input type=hidden name=bid value={$row['bid']}><br> <!-- 佈告編號，隱藏欄位存放 -->
                    標    題：<input type=text name=title value={$row['title']}><br> <!-- 標題輸入框，預設值為原標題 -->
                    內    容：<br><textarea name=content rows=20 cols=20>{$row['content']}</textarea><br> <!-- 內容輸入區，預設值為原內容 -->
                    佈告類型：<input type=radio name=type value=1 {$checked1}>系上公告 
                            <input type=radio name=type value=2 {$checked2}>獲獎資訊
                            <input type=radio name=type value=3 {$checked3}>徵才資訊<br> <!-- 類型選擇，根據原類型設置預設選中 -->
                    發布時間：<input type=date name=time value={$row['time']}><p></p> <!-- 發布時間輸入框，預設值為原發布時間 -->
                    <input type=submit value=修改佈告> <input type=reset value=清除> <!-- 提交與重設按鈕 -->
                </form>
            </body>
        </html>
        ";
    }
?>
