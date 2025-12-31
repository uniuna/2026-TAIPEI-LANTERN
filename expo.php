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
        </div>
    </header>

    <main style="padding-bottom: 150px;">
        <div style="text-align: justify; max-width: 800px; margin: 0 auto; padding: 30px 20px 60px;">
            <p style="color: var(--text-sub); font-size: 1.1rem;">
                <strong style="color: white;">花博展區</strong> 
                位於廣闊的圓山園區，我們將自然景觀轉化為地景藝術的畫布，利用得天獨厚的植栽與起伏地形，結合大型燈光藝術，打造出一座彷彿從童話中走出的奇幻森林。
                這裡擁有充足的腹地與平緩的步道，是全家大小在夜間漫步的最佳選擇。<br><br>
                您可以放慢腳步，在晚風吹拂下欣賞光影在草木間輕盈躍動，享受遠離喧囂的愜意時刻。從適合親子互動到氣勢磅礴的燈組，
                我們將光影美學融入大地，為您留下最溫馨的佳節回憶。
            </p>
        </div>

        <section class="container">
            <h2 class="section-title">花博展區地圖</h2>
            <div class="zone-block" style="margin-bottom: 80px;">
                
                <!-- <div id="map-theme-1" class="interactive-map-container">
                    <img src="images/maps/map-expo.jpg" alt="花博展區地圖">
                    <div class="map-hotspot" style="top: 66.5%; left: 30.5%; border-color:#FF0055;"
                        onclick="openMapModal('ximen-main')"></div>
                    <div class="map-hotspot" style="top: 60%; left: 37%;border-color:#FF0055;"
                        onclick="openMapModal('ximen-ip1')"></div>
                    <div class="map-hotspot" style="top: 72%; left: 38.5%;border-color:#FF0055;"
                        onclick="openMapModal('ximen-ip2')"></div>
                    <div class="map-hotspot" style="top: 79.5%; left: 36.5%;border-color:#FF0055;"
                        onclick="openMapModal('ximen-ip3')"></div>
                </div> -->

                <div class="info-section" style="margin-top: 30px; margin-bottom: 0;">

                    <div class="lantern-item" onclick="openMapModal('expo_01')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.01  敬請期待！</h4>
                                <span class="lantern-designer"></span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                    <div class="lantern-item" onclick="openMapModal('expo_02')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.02  敬請期待！</h4>
                                <span class="lantern-designer"></span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                    <div class="lantern-item" onclick="openMapModal('expo_03')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.03  敬請期待！</h4>
                                <span class="lantern-designer"></span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                    <div class="lantern-item" onclick="openMapModal('expo_04')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.04  敬請期待！</h4>
                                <span class="lantern-designer"></span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                    <div class="lantern-item" onclick="openMapModal('expo_05')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.05  記憶圓山</h4>
                                <span class="lantern-designer">徐于倫</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                    <div class="lantern-item" onclick="openMapModal('expo_06')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.06  體操男爵</h4>
                                <span class="lantern-designer">張育嘉</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                    <div class="lantern-item" onclick="openMapModal('expo_07')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.07  靜語花境</h4>
                                <span class="lantern-designer">陳楷葳</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                    <div class="lantern-item" onclick="openMapModal('expo_08')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.08  敬請期待！</h4>
                                <span class="lantern-designer"></span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                    <div class="lantern-item" onclick="openMapModal('expo_09')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.09  生之源</h4>
                                <span class="lantern-designer">徐于倫，舒次華</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                    <div class="lantern-item" onclick="openMapModal('expo_10')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.10  星樹之門</h4>
                                <span class="lantern-designer">徐志銘</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                    <div class="lantern-item" onclick="openMapModal('expo_11')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.11  花漾銀河</h4>
                                <span class="lantern-designer">陳楷葳</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                    <div class="lantern-item" onclick="openMapModal('expo_12')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.12  城市樓閣</h4>
                                <span class="lantern-designer">邱杰森</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                    <div class="lantern-item" onclick="openMapModal('expo_13')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.13  SPACE TAIPEI</h4>
                                <span class="lantern-designer">莫珊嵐</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                    <div class="lantern-item" onclick="openMapModal('expo_14')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.14  四時之環</h4>
                                <span class="lantern-designer">莫珊嵐 MARGOT GUILLEMOT</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                    <div class="lantern-item" onclick="openMapModal('expo_15')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.15  城光樹語 </h4>
                                <span class="lantern-designer">陳楷葳</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                    <div class="lantern-item" onclick="openMapModal('expo_16')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.16  敬請期待！</h4>
                                <span class="lantern-designer"></span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                    <div class="lantern-item" onclick="openMapModal('expo_17')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.17  敬請期待！</h4>
                                <span class="lantern-designer"></span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                    <div class="lantern-item" onclick="openMapModal('expo_18')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.18  奇幻動物園</h4>
                                <span class="lantern-designer">穀造音樂</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                    <!-- <div class="lantern-item" onclick="openMapModal('expo_19')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.19  12熊讚公仔燈組</h4>
                                <span class="lantern-designer"></span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div> -->

                </div>   
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
                <h3>總覽花博展區</h3>
                <p>將花博展區地圖帶著走，離線也能輕鬆導航。</p>

                <a href="info/2026-TAIPEI-LANTERN-EXPO.jpg" target="_blank" class="btn-main">
                    花博展區地圖下載
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
    <script src="js/script.js"></script>
</body>
</html>