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
            <h2 class="section-title">西門展區地圖</h2>
            <div class="zone-block" style="margin-bottom: 80px;">
                
                <div id="map-theme-1" class="interactive-map-container">
                    <img src="images/maps/map-ximen-v2.jpg" onclick="openImageModal('images/maps/map-ximen-v2.jpg')" style="cursor: pointer;" alt="西門展區地圖" >
                </div>
                <div id="imageLightbox" onclick="closeImageModal(event)">
                    <div class="modal-content-img">
                        <span class="close-modal" onclick="closeImageModalBox()">&times;</span>
                        <img id="lightboxImg" src=" " alt=''>
                    </div>
                </div>

                <div class="info-section" style="margin-top: 30px; margin-bottom: 0;">
                    
                    <div class="lantern-item" onclick="openMapModal('ximen_A1')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">A1  Baby Molly 金運搖來</h4>
                                <span class="lantern-designer">泡泡瑪特設計團隊</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_A2')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">A2  Twinkle Twinkle 星夢迎春</h4>
                                <span class="lantern-designer">泡泡瑪特設計團隊</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_A3')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">A3  LABUBU 小馬歡騰</h4>
                                <span class="lantern-designer">泡泡瑪特設計團隊</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_A4')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">A4  Hirono小野 馬上福到</h4>
                                <span class="lantern-designer">泡泡瑪特設計團隊</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_A5')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">A5  臺北雙面畫卷</h4>
                                <span class="lantern-designer">泡泡瑪特設計團隊</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                    <div class="lantern-item" onclick="openMapModal('ximen_B1')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B1  馬上有錢</h4>
                                <span class="lantern-designer">松山慈惠堂設計團隊</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B2')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B2  遠東百貨・馬躍新春</h4>
                                <span class="lantern-designer">遠東百貨台北燈節設計團隊</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B3')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B3  八駿揚蹄展鴻圖</h4>
                                <span class="lantern-designer">台北燈節設計團隊</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B4')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B4  台北主場・奔龍而上</h4>
                                <span class="lantern-designer">味全龍 DRAGONS</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B5')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B5  台北好水</h4>
                                <span class="lantern-designer">台北燈節設計團隊</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B6')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B6  揮出夢想經典熊讚</h4>
                                <span class="lantern-designer">台北燈節設計團隊</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B7')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B7  今馬熊讚</h4>
                                <span class="lantern-designer">台北燈節設計團隊</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B8')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B8  城隍燈海隧道</h4>
                                <span class="lantern-designer">臺灣省城隍廟設計團隊</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B9')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B9  燈映昇福平安橋</h4>
                                <span class="lantern-designer">臺灣省城隍廟設計團隊</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>
                    <!-- <div class="lantern-item" onclick="openMapModal('ximen_B10')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B10  響樂到中華</h4>
                                <span class="lantern-designer"></span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div> -->
                    <div class="lantern-item" onclick="openMapModal('ximen_B11')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B11  城市光譜</h4>
                                <span class="lantern-designer">徐于倫、舒次華</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B12')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B12  城門之後</h4>
                                <span class="lantern-designer">鄧志權、吳宗益</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B13')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B13  Queen 女力星願</h4>
                                <span class="lantern-designer">聯利媒體股份有限公司</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B14')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B14  食尚星光派對</h4>
                                <span class="lantern-designer">聯利媒體股份有限公司</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B15')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B15  歡盛豐年讚財神</h4>
                                <span class="lantern-designer">聯利媒體股份有限公司</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B16')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B16  反界</h4>
                                <span class="lantern-designer">hellobastworkshop</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B17')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B17  燈波</h4>
                                <span class="lantern-designer">林芷彤</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B18')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B18  Sounds</h4>
                                <span class="lantern-designer">莫珊嵐</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B19')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B19  J!NS小馬看視界</h4>
                                <span class="lantern-designer">睛姿臺北燈節設計團隊</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B20')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B20  台北晝夜</h4>
                                <span class="lantern-designer">成如潔</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B21')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B21  奔向永續 生森不息</h4>
                                <span class="lantern-designer">富邦臺北燈節設計團隊</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B22')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B22  天后．祈福光橋</h4>
                                <span class="lantern-designer">台北天后宮及于容創意有限公司</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B23')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B23  金福氣</h4>
                                <span class="lantern-designer">台北燈節設計團隊</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B24')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B24  沅夜星語</h4>
                                <span class="lantern-designer">沅陵設計團隊</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B25')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B25  金彩萬華 (萬華車站)</h4>
                                <span class="lantern-designer">台北燈節設計團隊</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B26')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B26  光行小馬 (剝皮寮)</h4>
                                <span class="lantern-designer">萬華街區發展協會、小腸絨毛、ckc_toys</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">查看詳情</div>
                    </div>

                </div>
            </div>

        </section>

        <div id="mapModal" class="modal-overlay" onclick="closeMapModal(event)">
            <div class="modal-content">
                <span class="close-modal" onclick="closeMapModal()">&times;</span>

                <h2 id="modalTitle" style="margin-bottom: 20px">燈飾標題</h2>
                <img id="modalImg" src="" style="width: 100%; max-width:600px; border-radius: 10px; margin:0 auto 20px; display: none;" />
                <div style="line-height: 1.6; font-size: 1rem; text-align: left;">
                     <p id="modalName" style="line-height: 2.4; font-size: 1.2rem; " >設計者名稱</p>
                    <p id="modalType" style="line-height: 2.4; font-size: 1rem; color: #ccc;  " >展演方式</p><br>
                    <p id="modalDesc" style="font-size: 1rem; " >燈飾介紹內容</p>
                </div>
            </div>
        </div>

        <section class="map-download-section">
            <div class="map-download-content">
                <h3>總覽西門展區</h3>
                <p>將西門展區地圖帶著走，離線也能輕鬆導航。</p>

                <a href="images/maps/map-ximen-download-v2.jpg" target="_blank" class="btn-main">
                    西門展區地圖下載
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