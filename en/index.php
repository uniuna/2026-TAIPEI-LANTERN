<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header.php'; ?>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/pages.css">
</head>
<body>
    <div id="preloader">
        <div class="festival-loader">
            <div class="lantern-rope"></div>
            
            <div class="lantern-container l1">
                <div class="lantern-body">
                    <div class="lantern-text">Lantern</div>
                </div>
                <div class="lantern-tassel"></div>
            </div>

            <div class="lantern-container l2">
                <div class="lantern-body">
                    <div class="lantern-text">Festival</div>
                </div>
                <div class="lantern-tassel"></div>
            </div>

            <div class="loading-text">Loading...</div>
        </div>
    </div>
    <?php include 'nav.php'; ?>

    <header class="hero-en">
        <a href="#news" class="scroll-down">
            <span></span>
            SCROLL
        </a>
    </header>

    <main style="padding-bottom: 150px;">
        <section id="news" class="news-section">
            <h2 class="section-title">Latest News</h2>
            <div class="news-header">
                <a href="news_list" class="news-more">News Archive ></a>
            </div>
            
            <div class="news-list">
                <a href="news_260209" class="news-item">
                    <span class="news-date">2026.02.09</span>
                    <span class="news-text">Exclusive Collectible! Your Ultimate Guide to the 2026 Taipei Lantern Festival "Optimus Prime" Mini Lantern Distribution ...</span>
                </a>
                <a href="news_260130" class="news-item">
                    <span class="news-date">2026.01.30</span>
                    <span class="news-text">The 2026 Taipei Lantern Festival Ximen Area Partners with POP MART to Debut Six Popular IPs, Unveil Five Lantern Installations, and Reveal an 8 Meter Baby Molly Main Lantern ...</span>
                </a>
                <a href="news_260129" class="news-item">
                    <span class="news-date">2026.01.29</span>
                    <span class="news-text">Mayor Wan-an Chiang Announces Dual Exhibition Zones for the 2026 Taipei Lantern Festival; Ximending Partners with POP MART to Welcome Global Visitors ...</span>
                </a>
                <a href="news_260126" class="news-item">
                    <span class="news-date">2026.01.26</span>
                    <span class="news-text">More Than Just a Night of Lights! "2026 Taipei Lantern Festival" Offers 20 Themed Itineraries and Exclusive Hotel Deals for Easy Savings ...</span>
                </a>
                <a href="news_260116" class="news-item">
                    <span class="news-date">2026.01.16</span>
                    <span class="news-text">The 2026 Taipei Lantern Festival Launches Its First Ever “Two Zones, Two IPs” Experience. Partnering with Global IP “Transformers,” the Expo Park Main Lantern Optimus Prime Makes an Early Reveal ...</span>
                </a>
            </div>
        </section>

        <section id="news" class="container" style="padding-bottom: 20px;">
            <h2 class="section-title">Exhibition Areas</h2>
            <div class="section-intro">
                <p class="section-description">
                    The Lantern Festival, also known as Shangyuan Festival, is a cornerstone of Chinese culture, symbolizing reunion and the seeking of blessings. This tradition dates back to the Han Dynasty. As legend has it, when the Empress Dowager Lu passed away, her clan tried to seize power, and their palace coup was put down. To commemorate the restoration of peace, Emperor Wen declared the 15th day of the first lunar month to be a day of national celebration. In the Eastern Han Dynasty, Emperor Ming promoted lighting lanterns as a way to honor the Buddha. This custom spread from palaces and temples to the general public, eventually evolving into the vibrant festival we enjoy today. Everyone admires the colorful lantern displays, solves riddles, and eats sweet “yuanxiao” dumplings. More than just lighting up the sky at night, it is an expression of our best wishes and hopes for the new year.
                    <br><br>The first Taipei Lantern Festival took place in 1997 at the traffic circle on Ren’ai Road, and since then it has been a beloved part of people’s lives for nearly three decades. In 2026, the festival features two major Lantern Areas: Expo Park and Ximen. It also features collaborations with two world-renowned international character series. With these special themes and the dual locations — at Taipei Expo Park in the district of Yuanshan, where culture and nature blend seamlessly, and in Ximending, where all the latest fashions converge — Taipei's diverse, distinctive urban style really comes to life. In addition to marveling at the lanterns, you can also roam the surrounding commercial districts and scenic spots and sample the local food, for a wide-ranging experience of the city’s vitality and charm. The Lantern Festival is one of the best ways to experience Taipei’s festive atmosphere, metropolitan bustle and warmheartedness.
                    <br><br>This year, the Taipei Lantern Festival welcomes you with open arms. We hope these two spectacular exhibition areas bring everyone double the joy and an abundance of blessings!
                </p>
            </div>
            <div class="map-selection">
                <a href="ximen.php" class="map-card" id="ximen-map">
                    <div class="map-bg"
                        style="background-image: url('../images/links/Link-ximen_1920x1080.jpg');">
                    </div>
                    <div class="map-overlay">
                        <h3 style="letter-spacing:0px;">Ximen Area</h3>
                        <span class="scan-line"></span>
                    </div>
                </a>

                <a href="expo.php" class="map-card" id="expo-map">
                    <div class="map-bg" style="background-image: url('../images/links/Link-expo_1920x1080.jpg');"></div>
                    <div class="map-overlay">
                        <h3 style="letter-spacing:0px;">Taipei Expo Park Area</h3>
                        <span class="scan-line"></span>
                    </div>
                </a>
            </div>
        </section>

        <section class="container">
            <h2 class="section-title">Explore More</h2>
            <div class="nav-grid">

                <a href="events.php" class="nav-card">
                    <div class="nav-bg" style="background-image: url('../images/links/Link-img-01_800x600.jpg');"></div>
                    <div class="nav-text">
                        <h3>Event Program</h3>
                    </div>
                </a>

                <a href="https://www.travel.taipei/en" class="nav-card" target="_blank">
                    <div class="nav-bg" style="background-image: url('../images/links/Link-img-02_800x600.jpg');"></div>
                    <div class="nav-text">
                        <h3>Travel information</h3>
                    </div>
                </a>

                <a href="traffic.php" class="nav-card">
                    <div class="nav-bg" style="background-image: url('../images/links/Link-img-03_800x600.jpg');"></div>
                    <div class="nav-text">
                        <h3>Transportation</h3>
                    </div>
                </a>
            </div>
        </section>

        <section class="container">
            <h2 class="section-title">Audiovisual Area</h2>
            <div class="video-container" style="position:relative; padding-bottom:56.25%; height:0; overflow:hidden;">
                <iframe style="position:absolute; top:0; left:0; width:100%; height:100%;" src="https://www.youtube.com/embed/PnGHH5oSpIM?si=ttaGQ-Fll0N_D1V2" frameborder="0" allowfullscreen></iframe>
            </div>
            <div style="margin-top: 30px; border-radius: 12px; overflow: hidden; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5); border: 1px solid rgba(255, 255, 255, 0.1); background: #000;">
                <video width="100%" controls preload="metadata" style="display: block; aspect-ratio: 16/9; object-fit: cover;">
                    <source src="../videos/lantern_install.mp4" type="video/mp4">
                    Your browser does not support HTML5 video playback. Please update your browser.
                </video>
            </div>
        </section>

        <section style="padding: 80px 0 40px;">
        <h2 class="section-title">Highlights from the Past</h2>
        
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
                        <img src="../images/gallery/2017/001.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2017/002.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2017/003.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2017/004.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2017/005.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2017/006.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2017/007.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2017/008.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
            </div>
        </div>
        
        <div id="year-2018" class="year-content">
            <div class="gallery-grid">
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2018/001.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2018/002.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2018/003.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2018/004.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2018/005.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2018/006.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2018/007.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2018/008.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
            </div>
        </div>         

        <div id="year-2019" class="year-content">
            <div class="gallery-grid">
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2019/001.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2019/002.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2019/003.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2019/004.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2019/005.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2019/006.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2019/007.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2019/008.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
            </div>
        </div>

        <div id="year-2020" class="year-content">
            <div class="gallery-grid">
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2020/001.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2020/002.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2020/003.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2020/004.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2020/005.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2020/006.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2020/007.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2020/008.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
            </div>
        </div>

        <div id="year-2021" class="year-content">
            <div class="gallery-grid">
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2021/001.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2021/002.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2021/003.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2021/004.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2021/005.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2021/006.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2021/007.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2021/008.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
            </div>
        </div>
        
        <div id="year-2022" class="year-content">
            <div class="gallery-grid">
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2022/001.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2022/002.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2022/003.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2022/004.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2022/005.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2022/006.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2022/007.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2022/008.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
            </div>
        </div>

        <div id="year-2023" class="year-content">
            <div class="gallery-grid">
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2023/001.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2023/002.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2023/003.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2023/004.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2023/005.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2023/006.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2023/007.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2023/008.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
            </div>
        </div>

        <div id="year-2024" class="year-content">
            <div class="gallery-grid">
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2024/001.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2024/002.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2024/003.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2024/004.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2024/005.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2024/006.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2024/007.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2024/008.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
            </div>
        </div>
    
        <div id="year-2025" class="year-content active">
            <div class="gallery-grid">
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2025/001.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2025/002.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2025/003.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2025/004.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2025/005.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2025/006.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2025/007.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="../images/gallery/2025/008.jpg" alt="回顧" loading="lazy" decoding="async">
                    </div>
                </div>
            </div>
        </div>
        
        </section>
    </main>

    <!-- <div id="liveModal">
        <div class="live-modal-content">
            <span class="close-live-btn" onclick="closeLiveModal()">&times;</span>
            
            <div class="live-info">
                <h2>2026 Taipei Lantern Festival - Ximen Area Opening Ceremony (Live Broadcast)</h2>
                <p>🕒 02/26 (Thu) 19:00-19:30</p>
            </div>

            <div class="live-video-container">
                <iframe 
                    src="https://www.youtube.com/embed/pLVRHbGABFI?si=cRQQ7VJ-J8CpBatB" 
                    title="YouTube video player" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </div> -->

    <?php include 'footer.php'; ?>
    <script src="../js/script.js"></script>
</body>
</html>