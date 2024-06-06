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
        // 如果已經登入，顯示新增佈告表單
        echo "
        <html>
            <head><title>新增佈告</title></head> <!-- 頁面標題 -->
            <body>
                <form method=post action=23.bulletin_add.php>
                    標    題：<input type=text name=title><br> <!-- 標題輸入框 -->
                    內    容：<br><textarea name=content rows=20 cols=20></textarea><br> <!-- 內容輸入區 -->
                    佈告類型：<input type=radio name=type value=1>系上公告 
                            <input type=radio name=type value=2>獲獎資訊
                            <input type=radio name=type value=3>徵才資訊<br> <!-- 類型選擇 -->
                    發布時間：<input type=date name=time><p></p> <!-- 發布時間輸入框 -->
                    <input type=submit value=新增佈告> <input type=reset value=清除> <!-- 提交與重設按鈕 -->
                </form>
            </body>
        </html>
        ";
    }
?>
