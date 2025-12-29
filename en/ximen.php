<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <?php include 'header.php'; ?>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/pages.css">
</head>
<body>
    <?php include 'nav.php'; ?>

    <header class="zone-header-ximen">
        <div>
            <h1 class="zone-title-large">Ximen Area</h1>
        </div>
    </header>

    <main style="padding-bottom: 150px;">
        <div style="text-align: center; max-width: 800px; margin: 0 auto; padding: 0 20px 60px;">
            <p style="color: var(--text-sub); font-size: 1.2rem">
                The Ximen Lantern Area is located in the historic district of Ximending. Here, the dazzling, cutting-edge life of Taipei lights up the night. When centuries-old heritage sites meet lanterns of a thousand magical colors, youthful energy blends with classic culture, leading you on a journey through time.
            </p>
        </div>

        <section class="container">
            <h2 class="section-title">Coming Soon ...</h2>
            <!-- <h2 class="section-title">Ximen Area Map</h2> -->
            <div class="zone-block" style="margin-bottom: 80px;">
                
                <!-- <div id="map-theme-1" class="interactive-map-container">
                    <img src="../images/maps/ximen-zonemap-red.jpg" alt="IP燈組地圖">
                    <div class="map-hotspot" style="top: 66.5%; left: 30.5%; border-color:#FF0055;"
                        onclick="openMapModal('ximen-main')"></div>
                    <div class="map-hotspot" style="top: 60%; left: 37%;border-color:#FF0055;"
                        onclick="openMapModal('ximen-ip1')"></div>
                    <div class="map-hotspot" style="top: 72%; left: 38.5%;border-color:#FF0055;"
                        onclick="openMapModal('ximen-ip2')"></div>
                    <div class="map-hotspot" style="top: 79.5%; left: 36.5%;border-color:#FF0055;"
                        onclick="openMapModal('ximen-ip3')"></div>
                </div> -->

                <!-- <div class="info-section" style="margin-top: 30px; margin-bottom: 0;">
                    <div class="lantern-item" onclick="openMapModal('ximen-main')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">Coming Soon!</h4>
                                <span class="lantern-designer"></span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen-ip1')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">Coming Soon!</h4>
                                <span class="lantern-designer"></span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>
                </div> -->
            </div>



        </section>

        <div class="modal-overlay" id="mapModal" onclick="closeMapModal(event)">
            <div class="modal-content">
                <span class="close-modal" onclick="closeActualModal()">&times;</span>

                <h2 id="modalTitle" style="margin-bottom: 20px">燈飾標題</h2>
                <img id="modalImg" src="" style="width: 100%; max-width:600px; border-radius: 10px; margin:0 auto 20px; display: none;" />
                <div style="line-height: 1.6; font-size: 1rem; text-align: left;">
                     <p id="modalName" style="line-height: 2.4; font-size: 1.2rem; " >設計者名稱</p>
                    <p id="modalSize" style="line-height: 2.4; font-size: 1rem; color: #ccc; " >尺寸</p>
                    <p id="modalType" style="line-height: 2.4; font-size: 1rem; color: #ccc;  " >展演方式</p><br>
                    <p id="modalDesc" style="font-size: 1rem; " >燈飾介紹內容</p>
                </div>
            </div>
        </div>

        <!-- <section class="map-download-section">
            <div class="map-download-content">
                <h3>總覽西門展區</h3>
                <p>將西門展區地圖帶著走，離線也能輕鬆導航。</p>

                <a href="../info/2026-TAIPEI-LANTERN-EXPO.jpg" target="_blank" class="btn-main">
                    西門展區地圖下載
                    <span style="vertical-align: middle;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                        <polyline points="7 10 12 15 17 10"></polyline>
                        <line x1="12" y1="15" x2="12" y2="3"></line>
                    </svg></span>
                </a>
            </div>
        </section> -->
    </main>

    <?php include 'footer.php'; ?>
    <script src="../js/script.js"></script>
</body>
</html>