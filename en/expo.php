<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header.php'; ?>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/pages.css">
</head>
<body>
    <?php include 'nav.php'; ?>

    <header class="zone-header-expo">
        <div>
            <h1 class="zone-title-large">Taipei Expo Park Area</h1>
        </div>
    </header>

    <main style="padding-bottom: 150px;">
        <div style="text-align: justify; text-justify: inter-word; word-break: break-word; max-width: 800px; margin: 0 auto; padding: 0 20px 60px;">
            <p style="color: var(--text-sub); font-size: 1.2rem;">
                <strong>Expo Park Lantern Area</strong> is located within the expansive Yuanshan Expo Park, where the natural landscape is transformed into a canvas for land art, drawing on lush greenery and gently rolling terrain and combining them with large-scale light installations to create a fantastical forest that feels as if it has emerged from a storybook. With generous open spaces and smooth walking paths, the area is an ideal setting for families to enjoy an evening stroll.
                <br><br>
                You can slow your pace and, under the evening breeze, watch light and shadow dance lightly among the trees, savoring a peaceful moment away from the city bustle. From lantern displays designed for family interaction to grand, awe-inspiring installations, light aesthetics are woven into the landscape, leaving you with the warmest memories of the festive season.
            </p>
        </div>

        <section class="container">
            <h2 class="section-title">Taipei Expo Park Area Map</h2>
            <div class="zone-block" style="margin-bottom: 80px;">
                
                <div id="map-theme-1" class="interactive-map-container">
                    <img src="../images/maps/map-expo-v2.jpg" onclick="openImageModal('../images/maps/map-expo-v2.jpg')" style="cursor: pointer;" alt="西門展區地圖" >
                </div>
                <div id="imageLightbox" onclick="closeImageModal(event)">
                    <div class="modal-content-img">
                        <span class="close-modal" onclick="closeImageModalBox()">&times;</span>
                        <img id="lightboxImg" src=" " alt=''>
                    </div>
                </div>

                <div class="info-section" style="margin-top: 30px; margin-bottom: 0;">

                    <div class="lantern-item" onclick="openMapModal('expo_A1')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">A1 Optimus Prime</h4>
                                <span class="lantern-designer">Transformers Design Team</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('expo_A2')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">A2 Bumblebee</h4>
                                <span class="lantern-designer">Transformers Design Team</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('expo_A3')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">A3  Megatron</h4>
                                <span class="lantern-designer">Transformers Design Team</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('expo_A4')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">A4  Optimus Prime vs Megatron</h4>
                                <span class="lantern-designer">Transformers Design Team</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('expo_B1')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B1 Yuanshan Memories</h4>
                                <span class="lantern-designer">Hsu Yu-lun</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('expo_B2')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B2  Gymnastics Baron</h4>
                                <span class="lantern-designer">Chang Yu-chia</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('expo_B3')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B3  Serenity Flora Realm</h4>
                                <span class="lantern-designer">Chen Kai-wei</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('expo_B4')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B4  Forest Light Pathway</h4>
                                <span class="lantern-designer">Hsu Chih-ming</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('expo_B5')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B5  Fountain of Life</h4>
                                <span class="lantern-designer">Hsu Yu-lun, Shu Tzu-hua</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('expo_B6')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B6 Gate of Light</h4>
                                <span class="lantern-designer">Hsu Chih-ming</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('expo_B7')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B7  Blooming Galaxy</h4>
                                <span class="lantern-designer">Chen Kai-wei</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('expo_B8')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B8  Base</h4>
                                <span class="lantern-designer">Chiu Chieh-sen</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('expo_B9')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B9  SPACE TAIPEI</h4>
                                <span class="lantern-designer">Margot Guillemot</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('expo_B10')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B10  The Circle of Seasons</h4>
                                <span class="lantern-designer">Margot Guillemot</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('expo_B11')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B11  TreeLink</h4>
                                <span class="lantern-designer">Chen Kai-wei</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('expo_B12')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B12 Taipei Water - Azalea</h4>
                                <span class="lantern-designer">Taipei Lantern Festival Design Team</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('expo_B13')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B13  Whimsy Fizzy Rhapsody</h4>
                                <span class="lantern-designer">Ku-Tsao Music</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('expo_B14')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B14  Team Taipei Bravo</h4>
                                <span class="lantern-designer">Taipei Lantern Festival Design Team</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <!-- <div class="lantern-item" onclick="openMapModal('expo_B15')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B15 景福宮燈區</h4>
                                <span class="lantern-designer"></span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div> -->
                    <div class="lantern-item" onclick="openMapModal('expo_B16')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B16 Dazzling in Zhongshan</h4>
                                <!-- <span class="lantern-designer">台北市中山商圈發展協會</span> -->
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
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
                    <p id="modalDesc" style="font-size: 1rem; text-align: justify; text-justify: inter-word; word-break: break-word;">燈飾介紹內容</p>
                </div>
            </div>
        </div>

        <!-- <section class="map-download-section">
            <div class="map-download-content">
                <h3>總覽花博展區</h3>
                <p>將花博展區地圖帶著走，離線也能輕鬆導航。</p>

                <a href="../images/maps/map-expo-download-v2.jpg" target="_blank" class="btn-main">
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
    <script src="../js/script.js"></script>
</body>
</html>