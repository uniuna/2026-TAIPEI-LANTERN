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
                                <span class="t-icon">
                                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="5" y="4" width="14" height="14" rx="2" stroke="white" stroke-width="2" stroke-linejoin="round"/>
                                        <path d="M5 10H19" stroke="white" stroke-width="2"/>
                                        <path d="M12 4V10" stroke="white" stroke-width="2"/>
                                        <circle cx="9" cy="14" r="1.5" fill="#00E5FF"/>
                                        <circle cx="15" cy="14" r="1.5" fill="#00E5FF"/>
                                        <path d="M3 21H21" stroke="#00E5FF" stroke-width="2" stroke-linecap="round"/>
                                        <path d="M7 21V18" stroke="#00E5FF" stroke-width="2"/>
                                        <path d="M17 21V18" stroke="#00E5FF" stroke-width="2"/>
                                    </svg>
                                </span>
                                <div>
                                    <p style="color:white; font-size:1.1rem;">捷運 MRT</p>
                                    <p style="color:var(--text-sub); margin-top:5px;">
                                        板南線/松山新店線 - <strong>「西門站」</strong><br>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <span class="t-icon">
                                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22 12L2 12" stroke="white" stroke-width="2" stroke-linecap="round" />
                                        <path d="M12 12L17 4M12 12L17 20" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M5 12L2 6M5 12L2 18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <circle cx="20" cy="12" r="1.5" fill="#00E5FF"/>
                                    </svg>
                                </span>
                                <div>
                                    <p style="color:white; font-size:1.1rem;">機場捷運</p>
                                    <p style="color:var(--text-sub); margin-top:5px;">
                                        1. 機場捷運抵達 <strong>「A1台北車站」</strong><br>
                                        2. 轉乘台北捷運板南線至 <strong>「西門站」</strong>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <span class="t-icon">
                                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 16H2V10C2 6.5 4 5 7 5H17C20 5 22 6.5 22 10V16H20" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M2 11H22" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M17 8H19" stroke="#00E5FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <circle cx="6.5" cy="16.5" r="2.5" stroke="#00E5FF" stroke-width="2"/>
                                        <circle cx="17.5" cy="16.5" r="2.5" stroke="#00E5FF" stroke-width="2"/>
                                    </svg>
                                </span>
                                <div>
                                    <p style="color:white; font-size:1.1rem;">公車</p>
                                    <p style="color:var(--text-sub); margin-top:5px;">
                                        站牌：<strong>捷運西門站 / 中華路北站</strong><br>
                                        路線：12, 202, 205, 212, 218, 223, 260, 265, 302, 304, 307, 310, 601, 706...等
                                    </p>
                                </div>
                            </li>
                            <!-- <li>
                                <span class="t-icon">
                                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.5 12C3.567 12 2 13.567 2 15.5S3.567 19 5.5 19 9 17.433 9 15.5 7.433 12 5.5 12zM18.5 12C16.567 12 15 13.567 15 15.5S16.567 19 18.5 19 22 17.433 22 15.5 20.433 12 18.5 12z" stroke="#00E5FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M15 15.5H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M5.5 15.5L9 9H13L15 15.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M11.5 6L9 9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <circle cx="18.5" cy="15.5" r="1" fill="#00E5FF"/>
                                        <circle cx="5.5" cy="15.5" r="1" fill="#00E5FF"/>
                                    </svg>
                                </span>
                                <div>
                                    <p style="color:white; font-size:1.1rem;">YouBike 微笑單車</p>
                                    <p style="color:var(--text-sub); margin-top:5px;">
                                        • 捷運西門站 3號出口 (遠百旁)<br>
                                        • 捷運西門站 2號出口 (國軍文藝中心)<br>
                                        • 捷運西門站 5號出口 (近中山堂)
                                    </p>
                                </div>
                            </li> -->
                        </ul>
                        
                        <a href="https://maps.app.goo.gl/MaEAJ51GtdFD6QnWA" target="_blank" class="btn-view-detail" style="margin:15px 10px; padding:15px 30px;">Google Map 導航</a>
                        
                        <a href="/info/emap-ximen.jpg" target="_blank" class="btn-view-detail" style="margin:15px 10px; padding:15px 30px;">西門展區簡易地圖</a>
                        <!-- <a href="info/2026-TAIPEI-LANTERN-XIMEN.jpg" target="_blank" class="btn-main" style="margin:15px 10px; padding:10px 30px;">
                            西門展區全地圖
                            <span style="vertical-align: middle;">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                <polyline points="7 10 12 15 17 10"></polyline>
                                <line x1="12" y1="15" x2="12" y2="3"></line>
                            </svg></span>
                        </a> -->
                    </div>

                    <div class="traffic-card">
                        <div class="traffic-header">
                            <h3>花博展區</h3>
                        </div>
                        
                        <ul class="traffic-details">
                            <li>
                                <span class="t-icon">
                                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="5" y="4" width="14" height="14" rx="2" stroke="white" stroke-width="2" stroke-linejoin="round"/>
                                        <path d="M5 10H19" stroke="white" stroke-width="2"/>
                                        <path d="M12 4V10" stroke="white" stroke-width="2"/>
                                        <circle cx="9" cy="14" r="1.5" fill="#00E5FF"/>
                                        <circle cx="15" cy="14" r="1.5" fill="#00E5FF"/>
                                        <path d="M3 21H21" stroke="#00E5FF" stroke-width="2" stroke-linecap="round"/>
                                        <path d="M7 21V18" stroke="#00E5FF" stroke-width="2"/>
                                        <path d="M17 21V18" stroke="#00E5FF" stroke-width="2"/>
                                    </svg>
                                </span>
                                <div>
                                    <p style="color:white; font-size:1.1rem;">捷運 MRT</p>
                                    <p style="color:var(--text-sub); margin-top:5px;">
                                        淡水信義線 - <strong>「圓山站」</strong><br>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <span class="t-icon">
                                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22 12L2 12" stroke="white" stroke-width="2" stroke-linecap="round" />
                                        <path d="M12 12L17 4M12 12L17 20" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M5 12L2 6M5 12L2 18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <circle cx="20" cy="12" r="1.5" fill="#00E5FF"/>
                                    </svg>
                                </span>
                                <div>
                                    <p style="color:white; font-size:1.1rem;">機場捷運</p>
                                    <p style="color:var(--text-sub); margin-top:5px;">
                                        1. 機場捷運抵達 <strong>「A1台北車站」</strong><br>
                                        2. 轉乘台北捷運淡水信義線至 <strong>「圓山站」</strong>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <span class="t-icon">
                                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 16H2V10C2 6.5 4 5 7 5H17C20 5 22 6.5 22 10V16H20" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M2 11H22" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M17 8H19" stroke="#00E5FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <circle cx="6.5" cy="16.5" r="2.5" stroke="#00E5FF" stroke-width="2"/>
                                        <circle cx="17.5" cy="16.5" r="2.5" stroke="#00E5FF" stroke-width="2"/>
                                    </svg>
                                </span>
                                <div>
                                    <p style="color:white; font-size:1.1rem;">公車 Bus</p>
                                    <p style="color:var(--text-sub); margin-top:5px;">
                                        站牌：<strong>捷運圓山站 / 市立美術館</strong><br>
                                        路線：2, 21, 203, 208, 247, 260, 277, 287區, 310, 677, 936, 紅2...等
                                    </p>
                                </div>
                            </li>
                            <!-- <li>
                                <span class="t-icon">
                                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.5 12C3.567 12 2 13.567 2 15.5S3.567 19 5.5 19 9 17.433 9 15.5 7.433 12 5.5 12zM18.5 12C16.567 12 15 13.567 15 15.5S16.567 19 18.5 19 22 17.433 22 15.5 20.433 12 18.5 12z" stroke="#00E5FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M15 15.5H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M5.5 15.5L9 9H13L15 15.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M11.5 6L9 9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <circle cx="18.5" cy="15.5" r="1" fill="#00E5FF"/>
                                        <circle cx="5.5" cy="15.5" r="1" fill="#00E5FF"/>
                                    </svg>
                                </span>
                                <div>
                                    <p style="color:white; font-size:1.1rem;">YouBike 微笑單車</p>
                                    <p style="color:var(--text-sub); margin-top:5px;">
                                        • 捷運圓山站 1號出口旁 (最便利)<br>
                                        • 臺北市立美術館站點<br>
                                        • 圓山線形公園站點
                                    </p>
                                </div>
                            </li> -->
                        </ul>

                        <a href="https://maps.app.goo.gl/qk7E2XTo1zyJpR3h9" target="_blank" class="btn-view-detail" style="margin:15px 10px; padding:15px 30px;">Google Map 導航</a>
                        
                        <a href="/info/emap-expo.jpg" target="_blank" class="btn-view-detail" style="margin:15px 10px; padding:15px 30px;">花博展區簡易地圖</a>
                        <!-- <a href="info/2026-TAIPEI-LANTERN-EXPO.jpg" target="_blank" class="btn-main" style="margin:15px 10px; padding:10px 30px;">
                            花博展區全地圖
                            <span style="vertical-align: middle;">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                <polyline points="7 10 12 15 17 10"></polyline>
                                <line x1="12" y1="15" x2="12" y2="3"></line> 
                            </svg></span> 
                        </a> -->
                    </div>

                </div>

                <div class="traffic-card" style="margin-top: 40px;">
                    <div class="traffic-header">
                        <h3>往返展區交通</h3>
                    </div>
                    <p style="color:var(--text-sub); margin-bottom:40px; font-size:1.1rem;">
                        往返 <strong>花博公園（圓山站）</strong> 與 <strong>西門町（西門站）</strong> 的推薦方式
                    </p>
                    
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
                        
                        <div style="display: flex; align-items: start;">
                            <span class="t-icon">
                                <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 16H2V10C2 6.5 4 5 7 5H17C20 5 22 6.5 22 10V16H20" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M2 11H22" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17 8H19" stroke="#00E5FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <circle cx="6.5" cy="16.5" r="2.5" stroke="#00E5FF" stroke-width="2"/>
                                    <circle cx="17.5" cy="16.5" r="2.5" stroke="#00E5FF" stroke-width="2"/>
                                </svg>
                            </span>
                            <div>
                                <p style="color:white; font-size:1.1rem;">直達公車 (約20-30分)</p>
                                <p style="color:var(--text-sub); margin-top:5px;">
                                    推薦路線：<strong>218, 260, 310, 304(承德), 202</strong><br>
                                    <span style="font-size:0.9rem; opacity:0.8;">※ 於「捷運圓山站」與「捷運西門站/中華路北站」之間往返。</span>
                                </p>
                            </div>
                        </div>

                        <div style="display: flex; align-items: start;">
                            <span class="t-icon">
                                <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="5" y="4" width="14" height="14" rx="2" stroke="white" stroke-width="2" stroke-linejoin="round"/>
                                    <path d="M5 10H19" stroke="white" stroke-width="2"/>
                                    <path d="M12 4V10" stroke="white" stroke-width="2"/>
                                    <circle cx="9" cy="14" r="1.5" fill="#00E5FF"/>
                                    <circle cx="15" cy="14" r="1.5" fill="#00E5FF"/>
                                    <path d="M3 21H21" stroke="#00E5FF" stroke-width="2" stroke-linecap="round"/>
                                    <path d="M7 21V18" stroke="#00E5FF" stroke-width="2"/>
                                    <path d="M17 21V18" stroke="#00E5FF" stroke-width="2"/>
                                </svg>
                            </span>
                            <div>
                                <p style="color:white; font-size:1.1rem;">捷運轉乘 (約20-25分)</p>
                                <p style="color:var(--text-sub); margin-top:5px;">
                                    需於 <strong>台北車站</strong> 轉乘<br>
                                    <span style="color:#FF0055;">● 紅線</span> ↔ <span style="color:#00E5FF;">● 藍線</span>
                                </p>
                            </div>
                        </div>

                        <!-- <div style="display: flex; align-items: start;">
                            <span class="t-icon">
                                <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.5 12C3.567 12 2 13.567 2 15.5S3.567 19 5.5 19 9 17.433 9 15.5 7.433 12 5.5 12zM18.5 12C16.567 12 15 13.567 15 15.5S16.567 19 18.5 19 22 17.433 22 15.5 20.433 12 18.5 12z" stroke="#00E5FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15 15.5H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M5.5 15.5L9 9H13L15 15.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M11.5 6L9 9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <circle cx="18.5" cy="15.5" r="1" fill="#00E5FF"/>
                                    <circle cx="5.5" cy="15.5" r="1" fill="#00E5FF"/>
                                </svg>
                            </span>
                            <div>
                                <p style="color:white; font-size:1.1rem;">YouBike (約20-25分)</p>
                                <p style="color:var(--text-sub); margin-top:5px;">
                                    路線：沿承德路或中山北路往南/北騎行，接中華路即可抵達。<br>
                                    距離：約 4.2 公里
                                </p>
                            </div>
                        </div> -->

                    </div>
                </div>

            </section>
    </main>

    <?php include 'footer.php'; ?>
    <script src="js/script.js"></script>
</body>
</html>