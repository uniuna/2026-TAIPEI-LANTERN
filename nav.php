<?php
// 1. 取得目前網址的檔案名稱 (例如: ximen.php)
$current_page = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar">
    <div class="logo">
        <a href="index.php">
            <img src="images/Logo.svg" alt="2026台北燈節" class="logo-img">
        </a>
    </div>
    <div class="hamburger" onclick="toggleMenu()">☰</div>
    
    <ul class="nav-links" id="navLinks">
        
        <li class="dropdown <?php if(in_array($current_page, ['ximen.php', 'expo.php', 'reminder.php'])) echo 'active'; ?>">
            <a class="dropbtn">展區介紹 ▾</a>
            <ul class="dropdown-content">
                <li><a href="ximen.php">西門展區</a></li>
                <li><a href="expo.php">花博展區</a></li>
                <li><a href="reminder.php">貼心提醒</a></li>
            </ul>
        </li>

        <li class="dropdown <?php if(in_array($current_page, ['events.php', 'bonus.php'])) echo 'active'; ?>">
            <a class="dropbtn">精彩活動 ▾</a>
            <ul class="dropdown-content">
                <li><a href="events.php">台北燈節</a></li>
                <li><a href="bonus.php">同場加映</a></li>
            </ul>
        </li>

        <li class="dropdown <?php if(in_array($current_page, ['travel.php', 'accommodation.php', 'itinerary.php'])) echo 'active'; ?>">
            <a class="dropbtn">旅遊資訊 ▾</a>
            <ul class="dropdown-content">
                <li><a href="travel.php">周邊商圈/景點</a></li>
                <li><a href="accommodation.php">旅宿資訊/優惠</a></li>
                <li><a href="itinerary.php">遊程推薦</a></li>
            </ul>
        </li>

        <li class="dropdown <?php if(in_array($current_page, ['traffic.php', 'measures.php'])) echo 'active'; ?>">
            <a class="dropbtn">交通方式 ▾</a> 
            <ul class="dropdown-content">
                <li><a href="traffic.php">如何抵達</a></li>
                <li><a href="measures.php">交管措施</a></li>
            </ul>
        </li>

        <li>
            <a href="en/index.php" class="lang-btn">EN</a>
        </li>
        <li>
            <a href="https://www.travel.taipei/zh-tw" target="_blank" class="t-travel">台北旅遊網</a>
        </li>
    </ul>
</nav>