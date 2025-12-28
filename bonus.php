<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <?php include 'header.php'; ?>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/pages.css">
</head>
<body>
    <?php include 'nav.php'; ?>

    <main class="container events-main">
        <section>
            <h2 class="section-title">同場加映</h2>
            
            <div class="tab-buttons events-tab-wrapper">
                <button class="tab-btn active" onclick="openTab(event, 'event1')">漢衣相逢．榮町漫遊</button>
                <button class="tab-btn" onclick="openTab(event, 'event2')">來台北有購嗨</button>
                </div>

            <div id="event1" class="tab-content active">
                <div class="featured-event-card">
                    
                    <div class="featured-img-box">
                        <img src="images/events/wandering.jpg" alt="漢衣相逢．榮町漫遊">
                    </div>

                    <div class="featured-content">
                        <h3 class="featured-title">漢衣相逢．榮町漫遊</h3>
                        
                        <p class="featured-desc">
                            結合2026台北燈節中山堂燈區，及榮町商圈的漢服文化，以漢服妝扮復古漫遊榮町，體驗沉浸式賞燈。透過以「有情境的交流」為核心設計，安排單身男女攜手走入榮町商圈街道與榮町漫市集、周邊古蹟等，結合燈節期間的榮町漫市集、街區景觀走逛、美食品嘗、傳統文化體驗，讓單身男女在參與活動的同時，也能深入感受台北燈節、中正區與榮町商圈的城市魅力及特色。
                        </p>
                        
                        <ul class="featured-info-list">
                            <li>
                                <span class="info-label">報名時間</span>
                                <span class="info-text">（預計 115年 1月中旬前 公布報名資訊）</span>
                            </li>
                            <li>
                                <span class="info-label">報名資格</span>
                                <span class="info-text">年滿25歲(含)以上，設籍、居住、工作或就學於臺北市之單身男、女。<br>（未曾參加本區單身聯誼者優先錄取）</span>
                            </li>
                        </ul>

                        <div class="featured-action">
                             <a href="https://www.accupass.com/event/2512240135302846817110" target="_blank" class="btn-main">
                                立即報名 >
                             </a>
                             <span class="info-note">（詳細報名資訊陸續建置中）</span>
                        </div>
                    </div>
                </div>
            </div>

            <div id="event2" class="tab-content">
                <div class="featured-event-card">
                    
                    <div class="featured-img-box">
                        <img src="images/events/gohigh.jpg" alt="來台北有購嗨">
                    </div>

                    <div class="featured-content">
                        <h3 class="featured-title">來台北有購嗨</h3>
                        
                        <p class="featured-desc">
                            臺北市商業處為配合中央普發現金政策，辦理「來台北有購嗨 消費歡樂抽」消費登錄抽獎活動，活動自114年12月1日開始登錄，可登錄114年11月至115年3月的發票，並規劃推出週週抽iPhone 17 Pro、月月抽台積電、市民專屬加碼抽 及總抽大獎1,000萬現金等 活動，總計抽出超過萬名得獎者，總獎值超過新臺幣3,000萬元，消費200元即可獲得1次抽獎機會，單筆最高100次抽獎機會，友好特店消費抽獎機會再翻倍，消費越多中獎機會越高！
                        </p>

                        <div class="featured-action">
                             <a href="https://2026newyear.taipei/event-05" target="_blank" class="btn-main">
                                了解更多 >
                             </a>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </main>

    <?php include 'footer.php'; ?>
    <script src="js/script.js"></script>
</body>
</html>