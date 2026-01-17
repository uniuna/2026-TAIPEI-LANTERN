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
        <div style="text-align: justify; max-width: 800px; margin: 0 auto; padding: 30px 20px 60px;">
            <p style="color: var(--text-sub); font-size: 1.1rem">
                <strong style="color: white">西門展區</strong> 
                坐落於歷史情懷與次文化交織的西門町。2026年，我們將整座潮流街區轉化為大型沉浸式光廊，讓經典的地景建築與前衛燈飾
                交相輝映，呈現城市記憶與創新力的完美融合。當百年街道遇上幻彩燈飾，年輕活力與歷史底蘊在燈光下激盪，帶領您穿梭於跨越時空
                的視覺饗宴。<br><br>
                漫步於此，您將感受強烈的影音衝擊與街頭藝術生命力。這裡的每一條巷弄都藏著驚喜，不僅展現了台北兼容並蓄的潮流能量，更讓經
                典文化在燈飾照射下再次重生。邀請您與好友一同前來，在西門街頭捕捉那抹最耀眼的光芒。
            </p>
        </div>

        <section class="container">
            <h2 class="section-title">敬請期待</h2>
            <div class="zone-block" style="margin-bottom: 80px;"></div>
        </section>

        <!-- <section class="container">
            <h2 class="section-title">西門展區地圖</h2>
            <div class="zone-block" style="margin-bottom: 80px;">
                
                <div id="map-theme-1" class="interactive-map-container">
                    <img src="images/maps/map-ximen.jpg" alt="西門展區地圖">
                    <div class="map-hotspot" style="top: 66.5%; left: 30.5%; border-color:#FF0055;"
                        onclick="openMapModal('ximen-main')"></div>
                    <div class="map-hotspot" style="top: 60%; left: 37%;border-color:#FF0055;"
                        onclick="openMapModal('ximen-ip1')"></div>
                    <div class="map-hotspot" style="top: 72%; left: 38.5%;border-color:#FF0055;"
                        onclick="openMapModal('ximen-ip2')"></div>
                    <div class="map-hotspot" style="top: 79.5%; left: 36.5%;border-color:#FF0055;"
                        onclick="openMapModal('ximen-ip3')"></div>
                </div>

                <div class="info-section" style="margin-top: 30px; margin-bottom: 0;">
                    
                    <div class="lantern-item" onclick="openMapModal('ximen_01')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.01  敬請期待！</h4>
                                <span class="lantern-designer"></span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                    <div class="lantern-item" onclick="openMapModal('ximen_02')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.02  敬請期待！</h4>
                                <span class="lantern-designer"></span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                    <div class="lantern-item" onclick="openMapModal('ximen_03')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.03  敬請期待！</h4>
                                <span class="lantern-designer"></span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                    <div class="lantern-item" onclick="openMapModal('ximen_04')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.04  敬請期待！</h4>
                                <span class="lantern-designer"></span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                    <div class="lantern-item" onclick="openMapModal('ximen_05')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.05  敬請期待！</h4>
                                <span class="lantern-designer"></span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                    <div class="lantern-item" onclick="openMapModal('ximen_06')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.06  敬請期待！</h4>
                                <span class="lantern-designer"></span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                    <div class="lantern-item" onclick="openMapModal('ximen_07')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.07  敬請期待！</h4>
                                <span class="lantern-designer"></span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                    <div class="lantern-item" onclick="openMapModal('ximen_08')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.08  敬請期待！</h4>
                                <span class="lantern-designer"></span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                    <div class="lantern-item" onclick="openMapModal('ximen_09')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.09  敬請期待！</h4>
                                <span class="lantern-designer"></span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                    <div class="lantern-item" onclick="openMapModal('ximen_10')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.10  敬請期待！</h4>
                                <span class="lantern-designer"></span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                    <div class="lantern-item" onclick="openMapModal('ximen_11')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.11  揮出夢想經典熊讚</h4>
                                <span class="lantern-designer">台北燈節設計團隊</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                    <div class="lantern-item" onclick="openMapModal('ximen_12')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.12  敬請期待！</h4>
                                <span class="lantern-designer"></span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                    <div class="lantern-item" onclick="openMapModal('ximen_13')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.13  敬請期待！</h4>
                                <span class="lantern-designer"></span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                    <div class="lantern-item" onclick="openMapModal('ximen_14')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.14  敬請期待！</h4>
                                <span class="lantern-designer"></span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                    <div class="lantern-item" onclick="openMapModal('ximen_15')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.15  城門之後</h4>
                                <span class="lantern-designer">吳宗益</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                    <div class="lantern-item" onclick="openMapModal('ximen_16')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.16  敬請期待！</h4>
                                <span class="lantern-designer"></span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                    <div class="lantern-item" onclick="openMapModal('ximen_17')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.17  敬請期待！</h4>
                                <span class="lantern-designer"></span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                    <div class="lantern-item" onclick="openMapModal('ximen_18')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.18  反界</h4>
                                <span class="lantern-designer">hello bast workshop</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                    <div class="lantern-item" onclick="openMapModal('ximen_19')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.19  敬請期待！</h4>
                                <span class="lantern-designer"></span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                    <div class="lantern-item" onclick="openMapModal('ximen_20')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.20  燈波</h4>
                                <span class="lantern-designer">林芷彤</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                    <div class="lantern-item" onclick="openMapModal('ximen_21')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.21  敬請期待！</h4>
                                <span class="lantern-designer"></span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                    <div class="lantern-item" onclick="openMapModal('ximen_22')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.22  敬請期待！</h4>
                                <span class="lantern-designer"></span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                    <div class="lantern-item" onclick="openMapModal('ximen_23')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.23  台北晝夜</h4>
                                <span class="lantern-designer">成如潔</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                    <div class="lantern-item" onclick="openMapModal('ximen_24')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.24  敬請期待！</h4>
                                <span class="lantern-designer"></span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                    <div class="lantern-item" onclick="openMapModal('ximen_25')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.25  敬請期待！</h4>
                                <span class="lantern-designer"></span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                    <div class="lantern-item" onclick="openMapModal('ximen_26')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">No.26  敬請期待！</h4>
                                <span class="lantern-designer"></span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                </div>
            </div>

        </section> -->

        <!-- <div class="modal-overlay" id="mapModal" onclick="closeMapModal(event)">
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
        </div> -->

        <!-- <section class="map-download-section">
            <div class="map-download-content">
                <h3>總覽西門展區</h3>
                <p>將西門展區地圖帶著走，離線也能輕鬆導航。</p>

                <a href="info/2026-TAIPEI-LANTERN-EXPO.jpg" target="_blank" class="btn-main">
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
    <script src="js/script.js"></script>
</body>
</html>