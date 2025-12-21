<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <?php include 'header.php'; ?>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/pages.css">
</head>
<body>
    <?php include 'nav.php'; ?>

    <header class="zone-header-ximen">
        <div>
            <h1 class="zone-title-large">西門展區</h1>
        </div>
    </header>

    <main style="padding-bottom: 150px;">
        <div style="text-align: center; max-width: 800px; margin: 0 auto; padding: 0 20px 60px;">
            <!-- <h2 class="section-title">未來實驗室</h2> -->
            <p style="color: var(--text-sub); font-size: 1.2rem">
                <strong style="color: white">西門展區</strong> 位於歷史悠久的西門町，這裡將展現臺北的潮流生命力。當百年古蹟遇上幻彩燈飾，讓年輕活力與經典文化在燈光下交融，帶您穿梭於時空的廊道。
            </p>
        </div>

        <section class="container">
            <h2 class="section-title">西門展區地圖</h2>

            <div class="tab-buttons">
                <button class="map-tab-btn active" onclick="switchMapLayer(event, 'map-theme-1', 'info-theme-1')">🔴
                    IP主題燈組</button>
                <button class="map-tab-btn" onclick="switchMapLayer(event, 'map-theme-2', 'info-theme-2')">🟠
                    藝術燈組</button>
                <button class="map-tab-btn" onclick="switchMapLayer(event, 'map-theme-3', 'info-theme-3')">🔵
                    企業燈組</button>
                <button class="map-tab-btn" onclick="switchMapLayer(event, 'map-theme-3', 'info-theme-3')">🟣
                    廟宇燈組</button>
                <button class="map-tab-btn" onclick="switchMapLayer(event, 'map-theme-3', 'info-theme-3')">🟢
                    競賽燈區</button>
                <button class="map-tab-btn" onclick="switchMapLayer(event, 'map-theme-3', 'info-theme-3')">⚪
                    熊讚燈組</button>
            </div>

            <div id="map-theme-1" class="interactive-map-container map-layer active">
                <img src="images/maps/ximen-zonemap-red.jpg" alt="IP燈組地圖">

                <div class="map-hotspot" style="top: 66.5%; left: 30.5%; border-color:#FF0055;"
                    onclick="openMapModal('ximen-main')"></div>
                <div class="map-hotspot" style="top: 60%; left: 37%;border-color:#FF0055;"
                    onclick="openMapModal('ximen-ip1')"></div>
                <div class="map-hotspot" style="top: 72%; left: 38.5%;border-color:#FF0055;"
                    onclick="openMapModal('ximen-ip2')"></div>
                <div class="map-hotspot" style="top: 79.5%; left: 36.5%;border-color:#FF0055;"
                    onclick="openMapModal('ximen-ip3')"></div>
            </div>

            <div id="map-theme-2" class="interactive-map-container map-layer">
                <img src="images/maps/ximen-zonemap-yellow.jpg" alt="藝術燈組地圖">

                <div class="map-hotspot" style="top: 38%; left: 47.5%; border-color:#FFD700;"
                    onclick="openMapModal('artist-1')"></div>
                <div class="map-hotspot" style="top: 45.5%; left: 45.5%; border-color:#FFD700;"
                    onclick="openMapModal('artist-2')"></div>
                <div class="map-hotspot" style="top: 52.5%; left: 44%; border-color:#FFD700;"
                    onclick="openMapModal('artist-3')"></div>
                <div class="map-hotspot" style="top: 59%; left: 42%; border-color:#FFD700;"
                    onclick="openMapModal('artist-4')"></div>
                <div class="map-hotspot" style="top: 83%; left: 36%; border-color:#FFD700;"
                    onclick="openMapModal('artist-5')"></div>
            </div>
            </div>
            </div>

            <div id="map-theme-3" class="interactive-map-container map-layer">
                <img src="images/maps/ximen-zonemap-blue.jpg" alt="企業燈組地圖">

                <div class="map-hotspot" style="top: 41.5%; left:46%; border-color:#00bae9;"
                    onclick="openMapModal('enterprise-1')"></div>
                <div class="map-hotspot" style="top: 48.5%; left: 44.5%; border-color:#00bae9;"
                    onclick="openMapModal('enterprise-2')"></div>
                <div class="map-hotspot" style="top: 56%; left: 42.5%; border-color:#00bae9;"
                    onclick="openMapModal('enterprise-3')"></div>
                <div class="map-hotspot" style="top: 66.5%; left: 37%; border-color:#00bae9;"
                    onclick="openMapModal('enterprise-4')"></div>
                <div class="map-hotspot" style="top: 75.5%; left: 37.5%; border-color:#00bae9;"
                    onclick="openMapModal('enterprise-5')"></div>
                <div class="map-hotspot" style="top: 56.5%; left: 52%; border-color:#00bae9;"
                    onclick="openMapModal('enterprise-6')"></div>
                <div class="map-hotspot" style="top: 62.5%; left: 50.5%; border-color:#00bae9;"
                    onclick="openMapModal('enterprise-7')"></div> 
            </div>

            <div class="info-section">
                <div id="info-theme-1" class="info-layer active">
                    <h3 style="color:white; margin-bottom:20px; border-left:5px solid var(--accent-color); padding-left:15px;">
                    IP主題燈組列表</h3>

                    <div class="lantern-item" onclick="openMapModal('ximen-main')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">Coming Soon! 敬請期待！</h4>
                                <span class="lantern-designer"></span>
                            </div>
                            <!-- <p class="lantern-desc">位於紅樓廣場的核心地標。高達 10 公尺的巨型燈飾，結合機械手臂與 LED 螢幕...</p> -->
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen-ip1')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">Coming Soon! 敬請期待！</h4>
                                <span class="lantern-designer"></span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>
                    
                </div>

                <div id="info-theme-2" class="info-layer">
                    <h3 style="color:white; margin-bottom:20px; border-left:5px solid var(--accent-color); padding-left:15px;">
                    藝術燈組列表</h3>

                    <div class="lantern-item" onclick="openMapModal('artist-1')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.01 城市縮影</h4>
                                <span class="lantern-designer"></span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                    <div class="lantern-item" onclick="openMapModal('artist-2')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.02 萌虎下山</h4>
                                <span class="lantern-designer"></span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>
                </div>

                <div id="info-theme-3" class="info-layer">
                    <h3 style="color:white; margin-bottom:20px; border-left:5px solid var(--accent-color); padding-left:15px;">
                    企業燈組列表</h3>

                    <div class="lantern-item" onclick="openMapModal('temple-1')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.01 城市縮影</h4>
                                <span class="lantern-designer"></span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>
                </div>
            </div>
        </section>

        <div class="modal-overlay" id="mapModal" onclick="closeMapModal(event)">
            <div class="modal-content">
                <span class="close-modal" onclick="closeActualModal()">&times;</span>

                <h2 id="modalTitle" style="margin-bottom: 20px">
                    燈飾標題
                </h2>
                <img id="modalImg" src=""
                    style="width: 100%; max-width:600px; border-radius: 10px; margin:0 auto 20px; display: none;" />
                <div style="line-height: 1.6; font-size: 1rem; text-align: left;">
                    <p id="modalName" style="line-height: 2.4; font-size: 1.2rem; " >設計者名稱...
                    </p>
                    <p id="modalDesc" >燈飾介紹內容...
                    </p>
                </div>
            </div>
        </div>

        <section class="map-download-section">
            <div class="map-download-content">
                <h3>總覽西門展區 Map Download</h3>
                <p>將完整的2026台北燈節地圖帶著走，離線也能輕鬆導航。</p>

                <a href="info/2026-TAIPEI-LANTERN-XIMEN.jpg" target="_blank" class="btn-main">
                    下載 西門展區 全區導覽圖
                    <span style="vertical-align: middle;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" y1="15" x2="12" y2="3"></line>
                        </svg></span>
                </a>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>
    <script src="js/script.js"></script>
</body>

</html>