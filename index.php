<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <?php include 'header.php'; ?>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/pages.css">
</head>
<body>
    <div id="preloader">
        <div class="festival-loader">
            <div class="lantern-rope"></div>
            
            <div class="lantern-container l1">
                <div class="lantern-body">
                    <div class="lantern-text">台北</div>
                </div>
                <div class="lantern-tassel"></div>
            </div>

            <div class="lantern-container l2">
                <div class="lantern-body">
                    <div class="lantern-text">燈節</div>
                </div>
                <div class="lantern-tassel"></div>
            </div>

            <div class="loading-text">Loading...</div>
        </div>
    </div>
    <?php include 'nav.php'; ?>

    <header class="hero">
        <a href="#news" class="scroll-down">
            <span></span>
            SCROLL
        </a>
    </header>

    <main style="padding-bottom: 150px;">
        <!-- <section id="news" class="news-section">
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
        </section> -->

        <section id="news" class="container" style="padding-bottom: 20px; margin-top: -250px; position: relative; z-index: 10;">
            <h2 class="section-title">展區介紹</h2>
            <div class="section-intro">
                <p class="section-description">
                    台北燈節自 1997 年首度於仁愛圓環點亮，開啟了台北與光影長達近三十年的約定。從早期中正紀念堂的定點匯演，到後來移師
                    國父紀念館與花博公園，燈節始終是市民心中最重要的元宵印記。關鍵的轉折出現在 2017 年，燈節正式「走出公園，進入街
                    頭」，移師西門町與北門區域，成功讓傳統燈藝走入百年歷史紋理與潮流地景中。<br><br>
                    2026 台北燈節邁入了轉型後的重要里程。回望這十幾年來，燈節從特定的場域跨足到台北的各個角落，從單點的賞燈活動，演
                    變成一場深入街廓、與民眾生活共鳴的城市慶典。近年的光影旅程，不僅記錄了台北的發展脈絡，更在每一位市民心中留下了溫
                    暖的足跡。<br><br>
                    今年，這份感性與創意將同步在「西門展區」與「花博展區」盛大登場。我們以雙主燈、雙展區的規模，將台北西區的繁華歷史
                    與圓山公園的愜意自然相互串聯。透過光影的導引，民眾在賞燈之餘，也能穿梭於鄰近商圈，深度體驗臺北在地的美食與人文魅
                    力，讓燈節成為推動城市觀光的亮點。
                </p>
            </div>
            <div class="map-selection">
                <a href="ximen.php" class="map-card" id="ximen-map">
                    <div class="map-bg"
                        style="background-image: url('images/links/Link-ximen_1920x1080.jpg');">
                    </div>
                    <div class="map-overlay">
                        <h3>西門展區</h3>
                        <span class="scan-line"></span>
                    </div>
                </a>

                <a href="expo.php" class="map-card" id="expo-map">
                    <div class="map-bg" style="background-image: url('images/links/Link-expo_1920x1080.jpg');"></div>
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
                    <div class="nav-bg" style="background-image: url('images/links/Link-img-01_800x600.jpg');"></div>
                    <div class="nav-text">
                        <h3>精彩活動</h3>
                    </div>
                </a>

                <a href="travel.php" class="nav-card">
                    <div class="nav-bg" style="background-image: url('images/links/Link-img-02_800x600.jpg');"></div>
                    <div class="nav-text">
                        <h3>旅遊資訊</h3>
                    </div>
                </a>

                <a href="traffic.php" class="nav-card">
                    <div class="nav-bg" style="background-image: url('images/links/Link-img-03_800x600.jpg');"></div>
                    <div class="nav-text">
                        <h3>交通方式</h3>
                    </div>
                </a>
            </div>
        </section>

        <!-- <section class="container">
            <h2 class="section-title">影音專區</h2>
            <div class="video-container" style="position:relative; padding-bottom:56.25%; height:0; overflow:hidden;">
                <iframe style="position:absolute; top:0; left:0; width:100%; height:100%;" src="https://www.youtube.com/embed/gp7V4k_gLGc?si=lhhiHCpnIOEjL3Rg" frameborder="0" allowfullscreen></iframe>
            </div>
        </section> -->

        <section style="padding: 80px 0 40px;">
        <h2 class="section-title">精彩回顧</h2>
        
        <div class="tab-buttons year-tabs">
            <button class="tab-btn" onclick="openYearTab(event, 'year-2017')">2017</button>
            <button class="tab-btn" onclick="openYearTab(event, 'year-2018')">2018</button>
            <button class="tab-btn" onclick="openYearTab(event, 'year-2019')">2019</button>
            <button class="tab-btn" onclick="openYearTab(event, 'year-2020')">2020</button>
            <button class="tab-btn" onclick="openYearTab(event, 'year-2021')">2021</button>
            <button class="tab-btn" onclick="openYearTab(event, 'year-2022')">2022</button>
            <button class="tab-btn" onclick="openYearTab(event, 'year-2023')">2023</button>
            <button class="tab-btn" onclick="openYearTab(event, 'year-2024')">2024</button>
            <button class="tab-btn active" onclick="openYearTab(event, 'year-2025')">2025</button>
        </div>

        <div id="year-2017" class="year-content">
            <div class="gallery-grid">
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2017/001.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2017/002.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2017/003.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2017/004.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2017/005.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2017/006.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2017/007.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2017/008.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
            </div>
        </div>
        
        <div id="year-2018" class="year-content">
            <div class="gallery-grid">
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2018/001.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2018/002.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2018/003.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2018/004.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2018/005.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2018/006.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2018/007.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2018/008.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
            </div>
        </div>         

        <div id="year-2019" class="year-content">
            <div class="gallery-grid">
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2019/001.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2019/002.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2019/003.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2019/004.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2019/005.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2019/006.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2019/007.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2019/008.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
            </div>
        </div>

        <div id="year-2020" class="year-content">
            <div class="gallery-grid">
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2020/001.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2020/002.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2020/003.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2020/004.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2020/005.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2020/006.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2020/007.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2020/008.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
            </div>
        </div>

        <div id="year-2021" class="year-content">
            <div class="gallery-grid">
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2021/001.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2021/002.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2021/003.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2021/004.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2021/005.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2021/006.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2021/007.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2021/008.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
            </div>
        </div>
        
        <div id="year-2022" class="year-content">
            <div class="gallery-grid">
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2022/001.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2022/002.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2022/003.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2022/004.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2022/005.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2022/006.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2022/007.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2022/008.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
            </div>
        </div>

        <div id="year-2023" class="year-content">
            <div class="gallery-grid">
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2023/001.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2023/002.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2023/003.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2023/004.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2023/005.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2023/006.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2023/007.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2023/008.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
            </div>
        </div>

        <div id="year-2024" class="year-content">
            <div class="gallery-grid">
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2024/001.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2024/002.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2024/003.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2024/004.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2024/005.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2024/006.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2024/007.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2024/008.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
            </div>
        </div>
    
        <div id="year-2025" class="year-content active">
            <div class="gallery-grid">
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2025/001.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2025/002.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2025/003.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2025/004.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2025/005.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2025/006.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2025/007.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="images/gallery/2025/008.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
            </div>
        </div>
        
        </section>
    </main>

    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>