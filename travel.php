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
        
        <div class="travel-hero-grid">
            <div class="travel-hero-img" onclick="openImageModal('images/maps/emap-ximen.jpg')" style="cursor: pointer;">
                <img src="images/maps/emap-ximen.jpg" alt="西門">
            </div>
            
            <div class="travel-hero-img" onclick="openImageModal('images/maps/emap-expo-v2.jpg')" style="cursor: pointer;">
                <img src="images/maps/emap-expo-v2.jpg" alt="花博" >
            </div>
        </div>
        <div id="imageLightbox" onclick="closeImageModal(event)">
            <div class="modal-content-img">
                <span class="close-modal" onclick="closeImageModalBox()">&times;</span>
                <img id="lightboxImg" src=" " alt=''>
            </div>
        </div>

        <section>
            <h2 class="section-title">周邊商圈</h2>
            
            <div class="district-container">

                <article class="district-card">
                    <div class="district-img-box">
                        <img src="images/sites/Dist_Monga.jpg" alt="艋舺商圈" loading="lazy" decoding="async">
                        <div class="district-overlay">
                            <span class="zone-badge">西門展區</span>
                        </div>
                    </div>
                    <div class="district-content">
                        <h3>艋舺商圈</h3>
                        <p>探訪台北百年風華，參拜龍山寺、大啖華西街美食，感受最道地的老城人情味。</p>
                        <a href="https://www.travel.taipei/zh-tw/attraction/all-regions?page=1&sortby=location&location=14" class="btn-more" target="_blank">了解更多</a>
                    </div>
                </article>

                <article class="district-card">
                    <div class="district-img-box">
                        <img src="images/sites/Dist_Ximen.jpg" alt="西門町商圈" loading="lazy" decoding="async">
                        <div class="district-overlay">
                            <span class="zone-badge">西門展區</span>
                        </div>
                    </div>
                    <div class="district-content">
                        <h3>西門町商圈</h3>
                        <p>融合歷史與潮流的娛樂商圈，電影、購物與街頭文化匯聚的西區地標。</p>
                        <a href="https://www.travel.taipei/zh-tw/attraction/all-regions/night-markets%2cthemed-shopping-areas?page=1&sortby=location&location=4" class="btn-more" target="_blank">了解更多</a>
                    </div>
                </article>

                <article class="district-card">
                    <div class="district-img-box">
                        <img src="images/sites/RongTing.jpg" alt="榮町商圈" loading="lazy" decoding="async">
                        <div class="district-overlay">
                            <span class="zone-badge">西門展區</span>
                        </div>
                    </div>
                    <div class="district-content">
                        <h3>榮町商圈</h3>
                        <p>融合日式歷史風情與潮流店家，適合漫步拍照與輕鬆購物的特色街區。</p>
                        <a href="https://rongting.org/" class="btn-more" target="_blank">了解更多</a>
                    </div>
                </article>

                <article class="district-card">
                    <div class="district-img-box">
                        <img src="images/sites/NorthGate.jpg" alt="北門相機商圈" loading="lazy" decoding="async">
                        <div class="district-overlay">
                            <span class="zone-badge">西門展區</span>
                        </div>
                    </div>
                    <div class="district-content">
                        <h3>北門相機商圈</h3>
                        <p>聚集眾多相機與攝影器材老店，是攝影愛好者尋寶與交流的專業商圈。</p>
                        <a href="https://www.travel.taipei/zh-tw/media/audio-guide/details/346" class="btn-more" target="_blank">了解更多</a>
                    </div>
                </article>

                <article class="district-card">
                    <div class="district-img-box">
                        <img src="images/sites/ZhonghuaRoad.jpg" alt="中華路影音街" loading="lazy" decoding="async">
                        <div class="district-overlay">
                            <span class="zone-badge">西門展區</span>
                        </div>
                    </div>
                    <div class="district-content">
                        <h3>中華路影音街</h3>
                        <p>影音設備、電玩與娛樂商品集中，展現台北早期科技消費文化。</p>
                        <a href="https://zhonghuavideo.org.tw/" class="btn-more" target="_blank">了解更多</a>
                    </div>
                </article>

                <article class="district-card">
                    <div class="district-img-box">
                        <img src="images/sites/Yuanling.jpg" alt="沅陵街商圈" loading="lazy" decoding="async">
                        <div class="district-overlay">
                            <span class="zone-badge">西門展區</span>
                        </div>
                    </div>
                    <div class="district-content">
                        <h3>沅陵街商圈</h3>
                        <p>位於台北城中核心地區，日治時期為「台北銀座」商業區範圍，不僅是台北著名的皮鞋街，也因聚集許多服飾精品，又稱為「台版女人街」。</p>
                        <a href="https://www.travel.taipei/zh-tw/attraction/details/1548" class="btn-more" target="_blank">了解更多</a>
                    </div>
                </article>

                <article class="district-card">
                    <div class="district-img-box">
                        <img src="images/sites/TaipeiUndergroundMall.jpg" alt="台北地下街" loading="lazy" decoding="async">
                        <div class="district-overlay">
                            <span class="zone-badge">西門展區</span>
                        </div>
                    </div>
                    <div class="district-content">
                        <h3>台北地下街</h3>
                        <p>串聯捷運與車站的地下購物空間，集結餐飲、服飾與動漫商品。</p>
                        <a href="https://www.travel.taipei/zh-tw/attraction/details/1591" class="btn-more" target="_blank">了解更多</a>
                    </div>
                </article>

<!-- 補充 -->
                <article class="district-card">
                    <div class="district-img-box">
                        <img src="images/sites/TaipeiUndergroundMall.jpg" alt="西門地下街" loading="lazy" decoding="async">
                        <div class="district-overlay">
                            <span class="zone-badge">西門展區</span>
                        </div>
                    </div>
                    <div class="district-content">
                        <h3>西門地下街</h3>
                        <p>連結交通樞紐的地下商場，匯集購物、餐飲與流行文化元素。</p>
                        <a href=" " class="btn-more" target="_blank">了解更多</a>
                    </div>
                </article>


                
                <article class="district-card">
                    <div class="district-img-box">
                        <img src="images/sites/Dist_Dadaocheng.jpg" alt="大稻埕商圈" loading="lazy" decoding="async">
                        <div class="district-overlay">
                            <span class="zone-badge">花博展區</span>
                        </div>
                    </div>
                    <div class="district-content">
                        <h3>大稻埕商圈</h3>
                        <p>漫步在百年前的繁華街頭，欣賞巴洛克建築，品味傳統乾貨與現代文創的衝擊。</p>
                        <a href="https://www.travel.taipei/zh-tw/attraction/all-regions?page=1&sortby=location&location=9" class="btn-more" target="_blank">了解更多</a>
                    </div>
                </article>

                <article class="district-card">
                    <div class="district-img-box">
                        <img src="images/sites/Dist_Zhongshan_v2.jpg" alt="中山商圈" loading="lazy" decoding="async">
                        <div class="district-overlay">
                            <span class="zone-badge">花博展區</span>
                        </div>
                    </div>
                    <div class="district-content">
                        <h3>中山商圈</h3>
                        <p>林蔭大道名店林立，咖啡香氣與生活美學交織，感受時光與格調共構的悠閒漫遊氛圍。</p>
                        <a href="https://zsdda.org/%E9%A6%96%E9%A0%81/" class="btn-more" target="_blank">了解更多</a>
                    </div>
                </article>

                <article class="district-card">
                    <div class="district-img-box">
                        <img src="images/sites/Yuanshan.jpg" alt="圓山商圈" loading="lazy" decoding="async">
                        <div class="district-overlay">
                            <span class="zone-badge">花博展區</span>
                        </div>
                    </div>
                    <div class="district-content">
                        <h3>圓山商圈</h3>
                        <p>鄰近歷史建築與綠地景點，融合文化觀光與休閒散策氛圍。</p>
                        <a href="https://www.tcooc.gov.taipei/cp.aspx?n=D6636C188A8ADC8E&s=5C92A65B34ECDB21#District_15 " class="btn-more" target="_blank">了解更多</a>
                    </div>
                </article>

                <article class="district-card">
                    <div class="district-img-box">
                        <img src="images/sites/ZhishengExpo.jpg" alt="至聖花博商圈" loading="lazy" decoding="async">
                        <div class="district-overlay">
                            <span class="zone-badge">花博展區</span>
                        </div>
                    </div>
                    <div class="district-content">
                        <h3>至聖花博商圈</h3>
                        <p>結合花博園區、市集與展演活動，適合親子休閒與假日遊逛。</p>
                        <a href="https://www.tcooc.gov.taipei/cp.aspx?n=D6636C188A8ADC8E&s=5C92A65B34ECDB21#District_60" class="btn-more" target="_blank">了解更多</a>
                    </div>
                </article>

                <article class="district-card">
                    <div class="district-img-box">
                        <img src="images/sites/Dalongdong.jpg" alt="大龍峒商圈" loading="lazy" decoding="async">
                        <div class="district-overlay">
                            <span class="zone-badge">花博展區</span>
                        </div>
                    </div>
                    <div class="district-content">
                        <h3>大龍峒商圈</h3>
                        <p>以廟宇文化與傳統小吃為特色，展現濃厚的台北在地生活樣貌。</p>
                        <a href="https://www.tcooc.gov.taipei/cp.aspx?n=D6636C188A8ADC8E&s=5C92A65B34ECDB21#District_12" class="btn-more" target="_blank">了解更多</a>
                    </div>
                </article>

            </div>
        </section>

        <section style="margin-top: 80px; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 50px;">
            <h2 class="section-title">周邊景點</h2>
            
            <div class="district-container">

                <article class="district-card">
                    <div class="district-img-box">
                        <img src="images/sites/Dist_Longshan.jpg" alt="龍山寺" loading="lazy" decoding="async">
                        <div class="district-overlay">
                            <span class="zone-badge ximen">西門展區</span>
                        </div>
                    </div>
                    <div class="district-content">
                        <h3>龍山寺</h3>
                        <p>艋舺信仰中心，數百年歷史國家古蹟。香火鼎盛、建築華麗，祈求平安最靈驗。</p>
                        <a href="" class="btn-more" target="_blank">了解更多</a>
                    </div>
                </article>

                <article class="district-card">
                    <div class="district-img-box">
                        <img src="images/sites/Nanjichang.jpg" alt="南機場夜市" loading="lazy" decoding="async">
                        <div class="district-overlay">
                            <span class="zone-badge">西門展區</span>
                        </div>
                    </div>
                    <div class="district-content">
                        <h3>南機場夜市</h3>
                        <p>以在地美食聞名的庶民夜市，小吃種類豐富、人氣歷久不衰。</p>
                        <a href="https://www.travel.taipei/zh-tw/attraction/details/1564" class="btn-more" target="_blank">了解更多</a>
                    </div>
                </article>

                <article class="district-card">
                    <div class="district-img-box">
                        <img src="images/sites/HuaxiStreet.jpg" alt="華西街夜市" loading="lazy" decoding="async">
                        <div class="district-overlay">
                            <span class="zone-badge">西門展區</span>
                        </div>
                    </div>
                    <div class="district-content">
                        <h3>華西街夜市</h3>
                        <p>結合傳統小吃、老店與文化特色，展現台北早期夜市風貌。</p>
                        <a href="https://www.travel.taipei/zh-tw/attraction/details/1535" class="btn-more" target="_blank">了解更多</a>
                    </div>
                </article>

                <article class="district-card">
                    <div class="district-img-box">
                        <img src="images/sites/Dist_Shilin.jpg" alt="士林觀光夜市" loading="lazy" decoding="async">
                        <div class="district-overlay">
                            <span class="zone-badge">花博展區</span>
                        </div>
                    </div>
                    <div class="district-content">
                        <h3>士林觀光夜市</h3>
                        <p>台北規模最大夜市，豪大雞排、藥燉排骨必吃！吃喝玩樂一站滿足，夜遊首選。</p>
                        <a href="https://www.travel.taipei/zh-tw/attraction/all-regions?page=1&sortby=location&location=7" class="btn-more" target="_blank">了解更多</a>
                    </div>
                </article>

                <article class="district-card">
                    <div class="district-img-box">
                        <img src="images/sites/Dist_Dihua.jpg" alt="迪化街年貨大街" loading="lazy" decoding="async">
                        <div class="district-overlay">
                            <span class="zone-badge ximen">花博展區</span>
                        </div>
                    </div>
                    <div class="district-content">
                        <h3>迪化街年貨大街</h3>
                        <p>全台最有年味！紅燈籠高掛大稻埕，乾貨糖果試吃買不完，感受濃濃春節喜氣。</p>
                        <a href="" class="btn-more" target="_blank">了解更多</a>
                    </div>
                </article>

            </div>
        </section>
    </main>


    <?php include 'footer.php'; ?>
    <script src="js/script.js"></script>
</body>
</html>