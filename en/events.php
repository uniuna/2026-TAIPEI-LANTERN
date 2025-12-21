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

    <main class="container" style="padding-top: 120px; min-height: 80vh;">
        <section>
            <h2 class="section-title">活動時刻表</h2>
            
            <div class="tab-buttons">
                <button class="tab-btn active" onclick="openTab(event, 'day1')">2/01 開幕日</button>
                <button class="tab-btn" onclick="openTab(event, 'day2')">2/08 週末狂歡</button>
                <button class="tab-btn" onclick="openTab(event, 'day3')">2/16 閉幕式</button>
            </div>

            <div id="day1" class="tab-content active">
                <h3 style="color:white; margin-bottom:20px; border-left:4px solid var(--primary-color); padding-left:10px;">2月01日 (六) 開幕活動</h3>
                <div class="event-list">
                    <div style="display: flex; border-bottom: 1px solid rgba(255,255,255,0.1); padding: 20px 0; align-items: center;">
                        <div style="width: 100px; color: var(--accent-color); font-weight: bold; font-size: 1.2rem;">18:00</div>
                        <div style="flex: 1;">
                            <h3 style="color: white; margin-bottom: 5px;">2026 臺北燈會 開幕點燈儀式</h3>
                            <p style="color: var(--text-sub); font-size: 0.9rem;">地點：市民廣場主舞台</p>
                        </div>
                        <div><span class="tag">必看</span></div>
                    </div>
                    <div style="display: flex; border-bottom: 1px solid rgba(255,255,255,0.1); padding: 20px 0; align-items: center;">
                        <div style="width: 100px; color: var(--accent-color); font-weight: bold; font-size: 1.2rem;">19:00</div>
                        <div style="flex: 1;">
                            <h3 style="color: white; margin-bottom: 5px;">開幕煙火秀 & 無人機展演</h3>
                            <p style="color: var(--text-sub); font-size: 0.9rem;">地點：全區夜空</p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="day2" class="tab-content">
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

            <div id="day3" class="tab-content">
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
        </section>

        <section class="highlights-section">
            <div class="swiper swiper-container highlight-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="https://images.unsplash.com/photo-1533174072545-7a4b6ad7a6c3?q=80&w=600&auto=format&fit=crop" alt="亮點1">
                        <div class="slide-caption">璀璨開幕煙火</div>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://picsum.photos/800/600" alt="亮點2">
                        <div class="slide-caption">城市光影藝術節</div>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?q=80&w=600&auto=format&fit=crop" alt="亮點3">
                        <div class="slide-caption">人氣樂團現場演出</div>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://picsum.photos/600/400" alt="亮點4">
                        <div class="slide-caption">傳統燈藝大師作品</div>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://images.unsplash.com/photo-1550684848-fac1c5b4e853?q=80&w=600&auto=format&fit=crop" alt="亮點5">
                        <div class="slide-caption">水岸夢幻倒影</div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>

    </main>
  
    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>