<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <?php include 'header.php'; ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/pages.css">
</head>
<body>
    <div id="preloader">
        <div class="loader-content">
            <div class="loader-circle"></div>
            <!-- <div class="loader-text">LOADING...</div> -->
        </div>
    </div>
    <?php include 'nav.php'; ?>

    <header class="hero">
        <a href="#news" class="scroll-down">
            <span></span>
            SCROLL
        </a>
    </header>

    <main>
    <section id="news" class="news-section">
        <h2 class="section-title">最新消息</h2>
        <div class="news-header">
            <a href="#" class="news-more">MORE +</a>
        </div>
        
        <div class="news-list">
            <a href="#" class="news-item">
                <span class="news-date">2026.02.10</span>
                <span class="news-text">【公告】因應天候狀況，今晚無人機展演時間延後至 20:30。</span>
            </a>
            <a href="#" class="news-item">
                <span class="news-date">2026.02.08</span>
                <span class="news-text">西門主燈「光之巨人」每晚 18:00 起，每半小時展演一場。</span>
            </a>
            <a href="#" class="news-item">
                <span class="news-date">2026.02.01</span>
                <span class="news-text">交通管制提醒：市民廣場周邊路段將於每日 17:00 進行封路。</span>
            </a>
        </div>
    </section>

    <section class="container" style="padding-bottom: 20px;">
        <h2 class="section-title">展區介紹</h2>
        <div class="section-intro">
            <p class="section-description">
                漫步於燈區，民眾將體驗到虛實共生的奇幻場景：古老的瑞獸圖騰透過 AR 擴增實境在空中飛躍，傳統的燈謎轉化為手機上的即時互動競技。2026 台北燈節，不僅是慶祝元宵的慶典，更是一場關於光影的實驗，讓世界看見台北在傳統與科技的光譜中，最耀眼的交會點。
            </p>
        </div>
        <div class="map-selection">
            <a href="ximen.php" class="map-card" id="ximen-map">
                <div class="map-bg"
                    style="background-image: url('images/img-link/Link-ximen_1920x1080.jpg');">
                </div>
                <div class="map-overlay">
                    <h3>西門展區</h3>
                    <span class="scan-line"></span>
                </div>
            </a>

            <a href="expo.php" class="map-card" id="expo-map">
                <div class="map-bg" style="background-image: url('images/img-link/Link-expo_1920x1080.jpg');"></div>
                <div class="map-overlay">
                    <h3>花博展區</h3>
                    <span class="scan-line"></span>
                </div>
            </a>
        </div>
    </section>

    <section class="container">
        <h2 class="section-title">探索更多</h2>
        <div class="nav-grid">

            <a href="events.php" class="nav-card">
                <div class="nav-bg" style="background-image: url('images/img-link/Link-img-01_800x600.jpg');"></div>
                <div class="nav-text">
                    <h3>精彩活動</h3>
                </div>
            </a>

            <a href="travel.php" class="nav-card">
                <div class="nav-bg" style="background-image: url('images/img-link/Link-img-02_800x600.jpg');"></div>
                <div class="nav-text">
                    <h3>旅遊資訊</h3>
                </div>
            </a>

            <a href="traffic.php" class="nav-card">
                <div class="nav-bg" style="background-image: url('images/img-link/Link-img-03_800x600.jpg');"></div>
                <div class="nav-text">
                    <h3>交通方式</h3>
                </div>
            </a>
        </div>
    </section>

    <section class="container">
        <h2 class="section-title">影音專區</h2>
        <div class="video-container" style="position:relative; padding-bottom:56.25%; height:0; overflow:hidden;">
            <iframe style="position:absolute; top:0; left:0; width:100%; height:100%;" src="https://www.youtube.com/embed/gp7V4k_gLGc?si=lhhiHCpnIOEjL3Rg" frameborder="0" allowfullscreen></iframe>
        </div>
    </section>

    <section style="padding: 80px 0 40px;">
        <h2 class="section-title">精彩回顧</h2>
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