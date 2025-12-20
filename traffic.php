<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <?php include 'header.php'; ?>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/pages.css">
</head>
<body>
    <?php include 'nav.php'; ?>

    <main class="container" style="padding-top: 120px; min-height: 80vh; padding-bottom: 150px;">
            <section>
            <h2 class="section-title">交通資訊</h2>
                <div class="dual-traffic-container">
                    <div class="traffic-card">
                        <div class="traffic-header">
                            <h3>西門展區</h3>
                        </div>
                        
                        <ul class="traffic-details">
                            <li>
                                <span class="t-icon">🚇</span>
                                <div>
                                    <strong style="color:white; font-size:1.1rem;">捷運 MRT</strong>
                                    <p style="color:var(--text-sub); margin-top:5px;">
                                        板南線/松山新店線<br>
                                        <strong>「西門站」</strong> 1號、6號出口
                                    </p>
                                </div>
                            </li>
                            <li>
                                <span class="t-icon">🚌</span>
                                <div>
                                    <strong style="color:white; font-size:1.1rem;">公車 Bus</strong>
                                    <p style="color:var(--text-sub); margin-top:5px;">
                                        站牌：捷運西門站、中華路北站<br>
                                        路線：265, 307, 652, 706, 重慶幹線等
                                    </p>
                                </div>
                            </li>
                            <li>
                                <span class="t-icon">📍</span>
                                <div>
                                    <strong style="color:white; font-size:1.1rem;">主要地標</strong>
                                    <p style="color:var(--text-sub); margin-top:5px;">
                                        西門紅樓、中華路一段、中山堂
                                    </p>
                                </div>
                            </li>
                        </ul>
                        
                        <a href="https://maps.app.goo.gl/MaEAJ51GtdFD6QnWA" target="_blank" class="btn-view-detail" style="margin:15px 10px; padding:15px 30px;">Google Map 導航</a>
                        <a href="" target="_blank" class="btn-main" style="margin:15px 10px; padding:10px 30px;">
                            西門展區簡易地圖
                            <span style="vertical-align: middle;">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                <polyline points="7 10 12 15 17 10"></polyline>
                                <line x1="12" y1="15" x2="12" y2="3"></line>
                            </svg></span>
                        </a>
                    </div>

                    <div class="traffic-card">
                        <div class="traffic-header">
                            <h3>花博展區</h3>
                        </div>
                        
                        <ul class="traffic-details">
                            <li>
                                <span class="t-icon">🚇</span>
                                <div>
                                    <strong style="color:white; font-size:1.1rem;">捷運 MRT</strong>
                                    <p style="color:var(--text-sub); margin-top:5px;">
                                        淡水信義線<br>
                                        <strong>「圓山站」</strong> 1號出口
                                    </p>
                                </div>
                            </li>
                            <li>
                                <span class="t-icon">🚌</span>
                                <div>
                                    <strong style="color:white; font-size:1.1rem;">公車 Bus</strong>
                                    <p style="color:var(--text-sub); margin-top:5px;">
                                        站牌：捷運圓山站、臺北市立美術館<br>
                                        路線：21, 208, 247, 紅2, 內湖幹線等
                                    </p>
                                </div>
                            </li>
                            <li>
                                <span class="t-icon">📍</span>
                                <div>
                                    <strong style="color:white; font-size:1.1rem;">主要地標</strong>
                                    <p style="color:var(--text-sub); margin-top:5px;">
                                        花博公園圓山園區、爭艷館、流行館
                                    </p>
                                </div>
                            </li>
                        </ul>
                    
                        <a href="https://maps.app.goo.gl/qk7E2XTo1zyJpR3h9" target="_blank" class="btn-view-detail" style="margin:15px 10px; padding:15px 30px;">Google Map 導航</a>
                        <a href="" class="btn-main" style="margin:15px 10px; padding:10px 30px;">
                            花博展區簡易地圖
                            <span style="vertical-align: middle;">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                <polyline points="7 10 12 15 17 10"></polyline>
                                <line x1="12" y1="15" x2="12" y2="3"></line>
                            </svg></span>
                        </a>
                    </div>

                </div>
            </section>
    </main>

    <?php include 'footer.php'; ?>
    <script src="js/script.js"></script>
</body>
</html>