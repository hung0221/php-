<?php
    // 啟動 session
    session_start();
    
    // 解除設定名為 "id" 的 session 變數
    unset($_SESSION["id"]);
    
    // 向使用者顯示成功登出的訊息
    echo "登出成功...."; // 登出成功訊息
    
    // 在3秒後將使用者重新導向至登入頁面
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>"; // 重新導向至登入頁面
?>
