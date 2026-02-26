<!DOCTYPE html>
<html lang="en">
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
        <div class="zone-summary">
            <p>
                <strong>Ximen Lantern Area</strong> is located in Ximending, where historic character and subcultures intersect. In 2026, the entire trendsetting district is transformed into a large-scale immersive light corridor, where iconic urban landmarks and avant-garde light installations illuminate one another, creating a perfect fusion of city memory and creative innovation. As century-old streets meet dazzling lantern displays, youthful energy and historical depth come alive under the glow of light, guiding visitors through a visual experience that transcends time.
                <br><br>
                As you stroll through the area, you will encounter powerful audiovisual effects and the vibrant pulse of street art. Every alleyway holds a surprise, showcasing Taipei’s inclusive creative energy while allowing classic culture to be reborn through light. We invite you and your friends to explore the streets of Ximen and capture the most radiant moments of the festival.
            </p>
        </div>

        <section class="container">
            <h2 class="section-title">Ximen Area Map</h2>
            <div class="zone-block" style="margin-bottom: 80px;">
                
                <div id="map-theme-1" class="interactive-map-container">
                    <img src="../images/maps/map-ximen-en.jpg" onclick="openImageModal('../images/maps/map-ximen-en.jpg')" style="cursor: pointer;" alt="西門展區地圖" >
                </div>
                <div id="imageLightbox" onclick="closeImageModal(event)">
                    <div class="modal-content-img">
                        <span class="close-modal" onclick="closeImageModalBox()">&times;</span>
                        <img id="lightboxImg" src=" " alt=''>
                    </div>
                </div>

                <div class="info-section" style="max-width: 900px; margin-top: 30px; margin-bottom: 0;">
                    
                    <div class="lantern-item" onclick="openMapModal('ximen_A1')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">A1  Baby Molly</h4>
                                <span class="lantern-designer">Taipei Lantern Festival Design Team</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_A2')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">A2  Twinkle Twinkle</h4>
                                <span class="lantern-designer">Taipei Lantern Festival Design Team</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_A3')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">A3  LABUBU</h4>
                                <span class="lantern-designer">Taipei Lantern Festival Design Team</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_A4')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">A4 Hirono</h4>
                                <span class="lantern-designer">Taipei Lantern Festival Design Team</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_A5')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">A5 SKULLPANDA & DIMOO</h4>
                                <span class="lantern-designer">Taipei Lantern Festival Design Team</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B1')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B1  Instant Fortune</h4>
                                <span class="lantern-designer">Songshan Cihui Temple Design Team</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B2')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B2  Far Eastern Department Stores - Galloping into the New Spring</h4>
                                <span class="lantern-designer">Far Eastern Department Stores Taipei Lantern Festival Design Team</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B3')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B3  Eight Steeds Charging Forward toward a Grand Future</h4>
                                <span class="lantern-designer">Taipei Lantern Festival Design Team</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B4')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B4  We are Dragons! Red Pride. City Ride.</h4>
                                <span class="lantern-designer">Ting Hsin Taipei Lantern Festival Design Team</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B5')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B5  Taipei Water</h4>
                                <span class="lantern-designer">Taipei Lantern Festival Design Team</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B6')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B6  Home Run for Dreams</h4>
                                <span class="lantern-designer">Taipei Lantern Festival Design Team</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B7')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B7  Taipei Bravo</h4>
                                <span class="lantern-designer">Taipei Lantern Festival Design Team</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B8')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B8  City God Lantern Tunnel</h4>
                                <span class="lantern-designer">Taiwan Provincial City God Temple Design Team</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B9')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B9  Lantern Bridge of Blessings</h4>
                                <span class="lantern-designer">Taiwan Provincial City God Temple Design Team</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B10')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B10  Resonance in Zhonghua</h4>
                                <!-- <span class="lantern-designer"></span> -->
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B11')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B11  City Spectrum</h4>
                                <span class="lantern-designer">Hsu Yu-lun, Shu Tzu-hua</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B12')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B12  Residual Light Beyond the Gate</h4>
                                <span class="lantern-designer">Chih-Chuan, Teng, 
Wu Tsung-yi</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B13')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B13 Queen - A Star Wish of Female Power</h4>
                                <span class="lantern-designer">TVBS Media Inc.</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B14')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B14  Gourmet Starlight Party</h4>
                                <span class="lantern-designer">TVBS Media Inc.</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B15')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B15  Prosperous Harvest, Praise to the God of Wealth Bravo</h4>
                                <span class="lantern-designer">TVBS Media Inc.</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B16')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B16  Focal</h4>
                                <span class="lantern-designer">hellobastworkshop</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B17')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B17  Undulating Light</h4>
                                <span class="lantern-designer">Lin Zhi-tong</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B18')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B18  Sounds</h4>
                                <span class="lantern-designer">Margot Guillemot</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B19')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B19 JINS Rocking Horse Sees the World</h4>
                                <span class="lantern-designer">JINS Taipei Lantern Festival Design Team</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B20')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B20  Taipei in Light</h4>
                                <span class="lantern-designer">Cheng Ju-chieh</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B21')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B21  Running Toward Sustainability, Life in Continuous Growth</h4>
                                <span class="lantern-designer">Fubon Taipei Lantern Festival Design Team</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B22')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B22  The Empress of Heaven and the Bridge of Blessings</h4>
                                <span class="lantern-designer">Taipei Tianhou Temple & YOUGO creative</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B23')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B23  Golden Luck Pavilion</h4>
                                <span class="lantern-designer">Taipei Lantern Festival Design Team</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B24')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B24  Genpo's Starry Night</h4>
                                <span class="lantern-designer">Yuanling Design Team</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B25')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B25  Radiant Wanhua</h4>
                                <span class="lantern-designer">Taipei Lantern Festival Design Team</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>
                    <div class="lantern-item" onclick="openMapModal('ximen_B26')">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name">B26  Luminous Little Pony</h4>
                                <span class="lantern-designer">Wanhua Neighborhood Development Association、ckc_toys</span>
                            </div>
                        </div>
                        <div class="btn-view-detail">More Details</div>
                    </div>

                    <div class="lantern-item" style="cursor: default;">
                        <div class="lantern-content">
                            <div class="lantern-header-row">
                                <h4 class="lantern-name" style="color:#b2e152;">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"></path>
                                        <path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"></path>
                                        <path d="M18 4H6v4.5c0 3.04 2.69 5.5 6 5.5s6-2.46 6-5.5V4z"></path>
                                        <path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"></path>
                                        <path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"></path>
                                        <path d="M4 22h16"></path>
                                    </svg>
                                    Competition Lantern Display Area</h4>
                            </div>
                        </div>
                        <a href="../pdf/Competition-Lantern-Display-Area.pdf" target="_blank" class="btn-view-detail-g">
                            Competition Lantern Display Area Registry Download
                            <span style="vertical-align: middle; margin-left: 5px;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                    <polyline points="7 10 12 15 17 10"></polyline>
                                    <line x1="12" y1="15" x2="12" y2="3"></line>
                                </svg>
                            </span>
                        </a>
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
                    <p id="modalDesc" style="font-size: 1rem; text-align: left; text-justify: inter-word; word-break: break-word;">燈飾介紹內容</p>
                </div>
            </div>
        </div>

        <section class="map-download-section">
            <div class="map-download-content">
                <h3>Ximen Area Overview</h3>
                <p>Take the Ximen Area Map with You, Explore Anytime, Even Offline.</p>

                <a href="../images/maps/map-ximen-download-en.jpg" target="_blank" class="btn-main">
                    Download Ximen Area Map
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
    <script src="../js/script.js"></script>
</body>
</html>