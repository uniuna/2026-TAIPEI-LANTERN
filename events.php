<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <?php include 'header.php'; ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/pages.css">
</head>
<body>
    <?php include 'nav.php'; ?>

    <main class="container" style="padding-top: 120px; padding-bottom: 160px; min-height: 80vh;">
        <section>
            <h2 class="section-title">精彩活動列表</h2>
            
            <div class="tab-buttons" style="margin-bottom: 80px;">
                <button class="tab-btn active" onclick="openTab(event, 'event1')">開幕日</button>
                <button class="tab-btn" onclick="openTab(event, 'event2')">舞台活動</button>
                <button class="tab-btn" onclick="openTab(event, 'event3')">主題日</button>
                <button class="tab-btn" onclick="openTab(event, 'event4')">十二行政區活動</button>
                <button class="tab-btn" onclick="openTab(event, 'event5')">小提燈活動</button>
            </div>

            <div id="event1" class="tab-content active">
                <section>
                    <h3 style="color:white; margin:60px auto; text-align: center; font-size:30px; ">敬請期待...</h3>
                    <img src="images/comingsoon.jpg" alt="敬請期待" style="width: 65%; display: block; margin: 20px auto;">
                    
                </section>
            </div>

            <div id="event2" class="tab-content">
                <h3 style="color:white; margin-bottom:20px; border-left:4px solid var(--primary-color); padding-left:10px;">2月08日 (六) 週末特別企劃</h3>
                <div class="event-list">
                    <div style="display: flex; border-bottom: 1px solid rgba(255,255,255,0.1); padding: 20px 0; align-items: center;">
                        <div style="width: 100px; color: var(--accent-color); font-weight: bold; font-size: 1.2rem;">15:00</div>
                        <div style="flex: 1;">
                            <h3 style="color: white; margin-bottom: 5px;">花燈彩繪 DIY 親子工作坊</h3>
                            <p style="color: var(--text-sub); font-size: 0.9rem;">地點：花博公園展區</p>
                        </div>
                        <div><span class="tag" style="border-color:var(--accent-color); color:var(--accent-color);">報名</span></div>
                    </div>
                    <div style="display: flex; border-bottom: 1px solid rgba(255,255,255,0.1); padding: 20px 0; align-items: center;">
                        <div style="width: 100px; color: var(--accent-color); font-weight: bold; font-size: 1.2rem;">20:00</div>
                        <div style="flex: 1;">
                            <h3 style="color: white; margin-bottom: 5px;">告五人 城市星空演唱會</h3>
                            <p style="color: var(--text-sub); font-size: 0.9rem;">地點：西門紅樓廣場</p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="event3" class="tab-content">
                <h3 style="color:white; margin-bottom:20px; border-left:4px solid var(--primary-color); padding-left:10px;">2月16日 (日) 閉幕感恩夜</h3>
                <div class="event-list">
                    <div style="display: flex; border-bottom: 1px solid rgba(255,255,255,0.1); padding: 20px 0; align-items: center;">
                        <div style="width: 100px; color: var(--accent-color); font-weight: bold; font-size: 1.2rem;">21:00</div>
                        <div style="flex: 1;">
                            <h3 style="color: white; margin-bottom: 5px;">光之未來 熄燈儀式</h3>
                            <p style="color: var(--text-sub); font-size: 0.9rem;">地點：市民廣場</p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="event4" class="tab-content">
                <section>
                    <h3 style="color:white; margin:60px auto; text-align: center; font-size:30px; ">敬請期待...</h3>
                    <img src="images/comingsoon.jpg" alt="敬請期待" style="width: 65%; display: block; margin: 20px auto;">
                    
                </section>
            </div>

            <div id="event5" class="tab-content">
                <section>
                    <h3 style="color:white; margin:60px auto; text-align: center; font-size:30px; ">敬請期待...</h3>
                    <img src="images/comingsoon.jpg" alt="敬請期待" style="width: 65%; display: block; margin: 20px auto;">
                    
                </section>
            </div>
        </section>


    </main>
  
    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>