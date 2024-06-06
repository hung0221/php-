<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <title>明新科技大學資訊管理系</title>
    <!-- 匯入 CSS 樣式表 -->
    <link href="https://cdn.bootcss.com/flexslider/2.6.3/flexslider.min.css" rel="stylesheet">
    <!-- 匯入 jQuery JavaScript 函式庫 -->
    <script src="https://cdn.bootcss.com/jquery/2.2.2/jquery.min.js"></script>
    <!-- 匯入 FlexSlider JavaScript 函式庫 -->
    <script src="https://cdn.bootcss.com/flexslider/2.6.3/jquery.flexslider-min.js"></script>        
    <!-- JavaScript 代碼，初始化 FlexSlider 輪播圖 -->
    <script>
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",  // 設定輪播動畫效果為滑動
                rtl: true            // 設定從右至左顯示（因為中文頁面）
            });
        });
    </script>
    <!-- CSS 樣式表 -->
    <style>
        /* CSS 樣式設定 */

        /* 全局樣式 */
        *{
            margin:0;
            color:gray;
            text-align:center;
        }

        /* 頁面頂部 */
        .top{
            background-color: white;
        }
        .top .container{
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding:10px;
        }
        .top .logo{
            font-size: 35px;
            font-weight: bold;
        }
        .top .logo img{
            width: 100px;
            vertical-align: middle;
        }
        .top .top-nav{
            font-size: 25px;
            font-weight: bold;       
        }
        .top .top-nav a{
            text-decoration: none;
        }

        /* 導覽欄 */
        .nav {
            background-color:#333;
            display: flex;
            justify-content: center;
        }
        .nav ul {
            list-style-type: none;  
            margin: 0; 
            padding: 0; 
            overflow: hidden; 
            background-color: #333; 
        }
        .nav li {
            float: left; 
        }
        .nav li a {    
            display: block;  
            color: white;  
            text-align: center;  
            padding: 14px 16px;  
            text-decoration: none;  
        }
        .nav li a:hover {
            background-color: #111; 
        }

        /* 下拉式選單 */
        .dropdown:hover .dropdown-content {
            display: block;   
        }
        li.dropdown:hover{
            background-color: #333; 
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #333;
            min-width: 160px;
            z-index: 1;
        }
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        /* 輪播圖 */
        .slider{
            background-color: black;
        }

        /* Banner */
        .banner{
            background-image: linear-gradient(#ABDCFF,#0396FF);
            padding:30px;
        }
        .banner h1{
            padding: 20px;
        }        

        /* 師資介紹 */
        .faculty {
            display: block;
            justify-content: center;
            background-color:white;
            padding:40px;
        }
        .faculty h2 {
            font-size: 25px;
            color: rgb(50,51,52);
            padding-bottom:40px;
        }
        .faculty .container {
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        .faculty .teacher{
            display:block;
            text-decoration: none;
        }
        .faculty .teacher img{
            height: 200px;
            width: 200px;
        }
        .faculty .teacher h3{
            color: White;
            background-color: rgba(
