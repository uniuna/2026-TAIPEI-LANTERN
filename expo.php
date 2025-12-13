<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <?php include 'header.php'; ?>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/pages.css">
</head>
<body>
    <?php include 'nav.php'; ?>

    <header class="zone-header-expo">
        <div>
            <h1 class="zone-title-large">花博展區</h1>
            <p style="font-size:1.5rem; color:var(--accent-color); margin-top:10px; letter-spacing:5px;">CLASSIC EXPO</p>
        </div>
    </header>

    <main class="container">
        <div style="text-align: center; max-width: 800px; margin: 0 auto 60px;">
            <h2 class="section-title">經典光之苑</h2>
            <p style="color: var(--text-sub); font-size: 1.1rem;">
                花博展區回歸燈會初心，邀請國寶級藝師打造千盞 <strong style="color:white;">手繪燈籠海</strong>。
                結合美術公園的自然地景，創造出如夢似幻的夜間植物園，最適合闔家漫步。
            </p>
            <!-- <div style="margin-top: 30px;">
                <span class="tag" style="border-color:var(--primary-color); color:var(--primary-color);">捷運圓山站</span>
                <span class="tag" style="border-color:var(--primary-color); color:var(--primary-color);">傳統工藝</span>
                <span class="tag" style="border-color:var(--primary-color); color:var(--primary-color);">親子共遊</span>
            </div> -->
        </div>

        <section class="container">
            <h2 class="section-title">花博展區地圖</h2>
            
            <div class="tab-buttons">
                <button class="map-tab-btn active" onclick="switchMapLayer(event, 'map-theme-1', 'info-theme-1')">🔴 主燈與主題燈</button>
                <button class="map-tab-btn" onclick="switchMapLayer(event, 'map-theme-2', 'info-theme-2')">🟡 國內外藝術家</button>
                <button class="map-tab-btn" onclick="switchMapLayer(event, 'map-theme-3', 'info-theme-3')">🟣 宮廟燈區</button>
            </div>

            <div id="map-theme-1" class="interactive-map-container map-layer active">
                <img src="images/map_ximen_main.jpg" alt="主燈地圖">
                
                <div class="map-hotspot" style="top: 73%; left: 23%;border-color:#FF0055;" onclick="openMapModal('expo-main')"></div>
                <div class="map-hotspot" style="top: 65%; left: 33%; border-color:#FF0055;" onclick="openMapModal('expo-ip1')"></div>
            </div>

            <div id="map-theme-2" class="interactive-map-container map-layer">
                <img src="images/map_ximen_main.jpg" alt="藝術家地圖">

                <div class="map-hotspot" style="top: 53%; left: 48%; border-color:#FFD700;" onclick="openMapModal('artist-1')"></div>
                <div class="map-hotspot" style="top: 25%; left: 60%; border-color:#FFD700;" onclick="openMapModal('artist-2')"></div>
            </div>

            <div id="map-theme-3" class="interactive-map-container map-layer">
                <img src="images/map_ximen_main.jpg" alt="宮廟地圖">

                <div class="map-hotspot" style="top: 60%; left: 80%; border-color:#C000FF;" onclick="openMapModal('temple-1')"></div>
            </div>

            <div class="info-section">
                <h3 style="color:white; margin-bottom:20px; border-left:5px solid var(--accent-color); padding-left:15px;">燈組簡介 Introduction</h3>

                <div id="info-theme-1" class="info-layer active">
                    <div class="lantern-item" onclick="openMapModal('expo-main')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.01 光之巨人</h4>
                                <span class="lantern-designer">李小明 Studio</span>
                            </div>
                            <p class="lantern-desc">位於紅樓廣場的核心地標。高達 10 公尺的巨型燈飾，結合機械手臂與 LED 螢幕...</p>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                    <div class="lantern-item" onclick="openMapModal('expo-ip1')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.02 萌虎下山</h4>
                                <span class="lantern-designer">IP 聯名團隊</span>
                            </div>
                            <p class="lantern-desc">與知名插畫家合作，打造高 5 公尺的充氣燈組，表情呆萌可愛...</p>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>
                </div>

                <div id="info-theme-2" class="info-layer">
                    <div class="lantern-item" onclick="openMapModal('artist-1')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.03 城市縮影</h4>
                                <span class="lantern-designer">Tom Dixon</span>
                            </div>
                            <p class="lantern-desc">利用廢棄建材重新組裝而成的環保燈飾...</p>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                    <div class="lantern-item" onclick="openMapModal('artist-2')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.04 萌虎下山</h4>
                                <span class="lantern-designer">IP 聯名團隊</span>
                            </div>
                            <p class="lantern-desc">與知名插畫家合作，打造高 5 公尺的充氣燈組，表情呆萌可愛...</p>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>
                </div>

                <div id="info-theme-3" class="info-layer">
                    <div class="lantern-item" onclick="openMapModal('temple-1')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.05 城市縮影</h4>
                                <span class="lantern-designer">Tom Dixon</span>
                            </div>
                            <p class="lantern-desc">利用廢棄建材重新組裝而成的環保燈飾...</p>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>
                </div>
            </div>
        </section>

        <div class="modal-overlay" id="mapModal" onclick="closeMapModal(event)">
            <div class="modal-content">
                <span class="close-modal" onclick="closeActualModal()">&times;</span>

                <h2 id="modalTitle" style="color: var(--primary-color); margin-bottom: 15px">
                    燈飾標題
                </h2>
                <img id="modalImg" src=""
                    style="width: 100%; border-radius: 10px; margin-bottom: 20px; display: none;" />
                <p id="modalDesc" style="color: var(--text-sub); line-height: 1.6">
                    燈飾介紹內容...
                </p>
            </div>
        </div>

        <section class="map-download-section">
            <div class="map-download-content">
                <h3>總覽全區 Map Download</h3>
                <p>將完整的 2026 臺北燈會地圖帶著走，離線也能輕鬆導航。</p>
                
                <a href="info/map-all.pdf" target="_blank" class="btn-main">
                    下載全展區地圖
                    <span style="vertical-align: middle;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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