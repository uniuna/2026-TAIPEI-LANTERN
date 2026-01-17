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
        <section id="news" class="news-section">
            <h2 class="section-title">最新消息</h2>
            <div class="news-header">
                <a href="news_list" class="news-more">新聞總覽 ></a>
            </div>
            
            <div class="news-list">
                <a href="news_260104" class="news-item">
                    <span class="news-date">2026.01.04</span>
                    <span class="news-text">台北道場響應「2026台北燈節」 以光影傳遞和諧共生與祝福 ...</span>
                </a>
                <a href="news_260116" class="news-item">
                    <span class="news-date">2026.01.16</span>
                    <span class="news-text">2026台北燈節首度推出「雙展區、雙IP」 攜手國際IP「變形金剛」花博主燈柯博文搶先曝光 ...</span>
                </a>
            </div>
        </section>

        <section class="container" style="padding-bottom: 20px;">
            <h2 class="section-title">展區介紹</h2>
            <div class="section-intro">
                <p class="section-description">
                    元宵節又稱上元節，是華人文化中象徵團圓與祈福的重要節日。這項傳統可追溯至漢代，相傳漢文帝為慶祝平定「諸呂之亂」，將農曆正月十五訂為全民同樂之日；到了東漢，漢明帝提倡燃燈敬佛，宮廷與寺廟點燈的習俗逐漸流傳至民間，發展成為今日熱鬧繽紛的燈節文化。賞花燈、猜燈謎、吃元宵，不僅是點亮夜空的歡慶活動，更寄託著人們對新年的美好祝福與期待。
                    <br><br>
                    台北燈節自 1997 年於仁愛圓環首次點燈以來，已陪伴市民走過近三十年的時光。2026年台北燈節同步於「花博展區」與「西門展區」盛大登場，透過雙展區串聯及兩大國際知名 IP 合作燈組，分別在文化與自然交融的圓山花博園區，以及潮流匯聚的西門町，展現台北多元且獨具魅力的城市風貌。民眾在賞燈之餘，亦可漫遊周邊商圈與景點、品嚐在地美食，於台北燈節期間深度感受台北的城市活力與多元魅力，讓台北燈節成為最具節慶氛圍與城市情感溫度的觀光亮點。
                    <br><br>
                    今年，台北燈節雙展區展開雙臂歡迎您一起來賞燈，祈願熱鬧繽紛的雙展區為大家帶來加倍的歡樂與祝福。
                </p>
            </div>
            <div class="map-selection">
                <a href="ximen" class="map-card" id="ximen-map">
                    <div class="map-bg"
                        style="background-image: url('images/links/Link-ximen_1920x1080.jpg');">
                    </div>
                    <div class="map-overlay">
                        <h3>西門展區</h3>
                        <span class="scan-line"></span>
                    </div>
                </a>

                <a href="expo" class="map-card" id="expo-map">
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

                <a href="events" class="nav-card">
                    <div class="nav-bg" style="background-image: url('images/links/Link-img-01_800x600.jpg');"></div>
                    <div class="nav-text">
                        <h3>精彩活動</h3>
                    </div>
                </a>

                <a href="travel" class="nav-card">
                    <div class="nav-bg" style="background-image: url('images/links/Link-img-02_800x600.jpg');"></div>
                    <div class="nav-text">
                        <h3>旅遊資訊</h3>
                    </div>
                </a>

                <a href="traffic" class="nav-card">
                    <div class="nav-bg" style="background-image: url('images/links/Link-img-03_800x600.jpg');"></div>
                    <div class="nav-text">
                        <h3>交通方式</h3>
                    </div>
                </a>
            </div>
        </section>

        <section class="container">
            <h2 class="section-title">影音專區</h2>
            <div class="video-container" style="position:relative; padding-bottom:56.25%; height:0; overflow:hidden;">
                <iframe style="position:absolute; top:0; left:0; width:100%; height:100%;" src="https://www.youtube.com/embed/PnGHH5oSpIM?si=ttaGQ-Fll0N_D1V2" frameborder="0" allowfullscreen></iframe>
                
            </div>
        </section>

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