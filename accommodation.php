<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <?php include 'header.php'; ?>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/pages.css">
</head>
<body>
    <?php include 'nav.php'; ?>

    <main class="container" style="padding-top: 120px; min-height: 80vh; padding-bottom: 180px;">
        
        <h2 class="section-title">旅宿資訊｜優惠</h2>

        <div class="main-category-nav">
            <button class="main-cat-btn active" onclick="switchMainCat('accommod', this)">台北燈節旅宿</button>
            <button class="main-cat-btn" onclick="switchMainCat('THoliday', this)">高鐵假期</button>
        </div>

<!-- 台北燈節旅宿 -->
        <div id="cat-accommod" class="main-cat-content active">
            
            <div style="text-align: center; margin-bottom: 50px; color: var(--text-sub);">
                <p>攜手北市優質旅宿推出燈節限定優惠，讓您舒適入住、輕鬆賞燈，盡享台北璀璨時刻。</p>
            </div>

            <div class="temple-list-container">

                <!-- 萬華區 -->
                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">萬華區</span>
                        <span class="t-name">華麗大飯店</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">持有票根(如火車票、巴士票、高鐵票)，皆有85折優惠。</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info">1. 訂房專線：02-2381-8111
    2. <a href="http://bailee.lakehotel.com.tw/zh-tw" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市萬華區康定路41號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市萬華區康定路41號
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">萬華區</span>
                        <span class="t-name">福泰桔子商務旅館西門漢中店</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">超值優惠住房專案。</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info"><a href="https://www.orangehotels.com.tw/" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市萬華區漢中街170號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市萬華區漢中街170號1-14樓
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">萬華區</span>
                        <span class="t-name">福泰桔子商旅西門店</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">超值優惠專案，每晚折扣200元。</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info">1. 訂房專線：02-2719-2199
    2. <a href="https://www.orangehotels.com.tw/store/" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市萬華區中華路1段166-2號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市萬華區中華路1段166-2號
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">萬華區</span>
                        <span class="t-name">力歐時尚旅館西門館</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">力歐時尚旅館-西門館 邀請您一同點亮 2026 臺北燈節！2026年2月25日至 2026年3月15日 (週一至週四)，只要出示「打卡#2026臺北燈節」與「5星好評」，雙人房現場價立即折抵100 元<br>**請主動告知並出示畫面，未出示者恕無法享有此折扣。</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info">訂房專線：02-2388-9855</p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市萬華區康定路25巷36弄4,6號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市萬華區康定路25巷36弄4,6號2-4樓
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">萬華區</span>
                        <span class="t-name">儷夏商旅</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">加入飯店LINE@(@muzik-click)於對話框上輸入【專屬好康】即可獲得優惠折扣碼，獲得折扣碼後再至飯店官網訂房即可享房價最優惠</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info"><a href="https://www.muzikhotel.com.tw/" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市萬華區中華路1段90號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市萬華區中華路1段90號6樓
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">萬華區</span>
                        <span class="t-name">儷夏旅館-西寧館</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">加入飯店LINE@(@muzik-click)於對話框上輸入【專屬好康】即可獲得優惠折扣碼，獲得折扣碼後再至飯店官網訂房即可享房價最優惠。</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info"><a href="https://www.muzikhotel.com.tw/" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市萬華區西寧南路30號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市萬華區西寧南路30號3樓
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">萬華區</span>
                        <span class="t-name">洛碁大飯店新仕界</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">洛碁官網預訂輸入折扣碼 : TPE95 ，享期間內平日及假日房價95折優惠，全館店適用。</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info"><a href="https://www.gobooking.com.tw/zh-TW/GreenWorld" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市萬華區昆明街139號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市萬華區昆明街139號2樓、141號3至9樓、7樓之1至13、8樓之1至8
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">萬華區</span>
                        <span class="t-name">凱達大飯店</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">入住即贈送美津濃中筒襪毛巾底運動襪2雙，房客再享館內用餐優惠85折起。</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info">1. 訂房專線：02-2383-6796 
    2. <a href="https://tlathena.ec-hotel.net/webhotel-v4/0877/index?_rand=2g8d1e9dtfh" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市萬華區艋舺大道167號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市萬華區艋舺大道167號
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">萬華區</span>
                        <span class="t-name">WESTGATE HOTEL 永安棧</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">於2026年2月26日至2026年3月15日期間入住，透過官方網站預訂【2026台北燈節・城市夜色】住房專案，即贈臺北捷運24小時票（依入住人數提供），輕鬆往返西門町展區與圓山展區，並享延後退房至13:00，讓夜遊的餘韻在舒適中慢慢沉澱、充分休息。<br>**不適用日期：2026年2月27日至2026年3月2日 二二八假期</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info"><a href="https://book-directonline.com/properties/westgatehoteldirect?locale=en&checkInDate=2025-12-23&checkOutDate=2025-12-24&items[0][adults]=1&items[0][children]=0&items[0][infants]=0&currency=TWD&trackPage=yes" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市萬華區中華路1段150號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市萬華區中華路1段150號
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">萬華區</span>
                        <span class="t-name">台北西門町意舍酒店</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">★與臺北意舍酒店一起體驗2026台北燈節，立即預訂西門町意舍酒店的「台北燈節意舍燈籠住宿專案」，遊樂西門町與花博公園雙主燈，更可獲得點亮幸福平安的意舍LED燈籠, 再享受大人小孩都喜歡的甜甜如意費列羅金莎巧克力。  <br>★ 此專案贈送獨家意舍LED燈籠禮盒每房1組，每次連續入住之訂房僅贈送1次， 續住之訂房視同連續入住整段僅贈送1次。<br>★本優惠僅適用本酒店官方網站訂房系統之訂房<br>★本優惠專案僅適用於住宿日3天(含)前預定 <br>★本優惠專案內容與每日開放間數將以酒店最新公告與説明為主<br>★本優惠專案需視實際房況而定, 僅適用部份指定房型, 恕不適用於特殊日期 (相關日期依酒店公告為主) <br>★本優惠專案為彈性之訂房變更與取消條款，房費基準依據客房內實際入住人數計算 <br>★本優惠專案恕不適用8間或以上團體訂房 <br>★本優惠專案恕不得與其他優惠活動或專案合併使用</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info">1. 訂房專線：02-2525-2828 
    2. <a href="https://www.amba-hotels.com/tc/ximending/" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市萬華區武昌街2段77號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市萬華區武昌街2段77號
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 中正區 -->
                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">中正區</span>
                        <span class="t-name">台北天成大飯店</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">2026/2/25-2026/3/15燈節活動期間提供官網9折</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info"><a href="https://www.book-secure.com/index.php?s=results&property=twtai23742" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=台北市中正區忠孝西路一段43號" target="_blank" class="t-location-link">
                                    📍 地點：台北市中正區忠孝西路一段43號
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">中正區</span>
                        <span class="t-name">台北花園大酒店</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">2026/2/25-2026/3/15燈節活動期間提供官網9折</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info"><a href="https://www.book-secure.com/index.php?s=results&property=twtai17118" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=台北市中正區中華路二段1號" target="_blank" class="t-location-link">
                                    📍 地點：台北市中正區中華路二段1號
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">中正區</span>
                        <span class="t-name">天成文旅-華山町</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">2026/2/25-2026/3/15燈節活動期間提供官網9折</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info"><a href="https://www.book-secure.com/index.php?s=results&property=twtai31405" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=台北市中正區忠孝東路二段79號" target="_blank" class="t-location-link">
                                    📍 地點：台北市中正區忠孝東路二段79號
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">中正區</span>
                        <span class="t-name">相鐵飯店台北西門</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">相鐵飯店俱樂部會員官網優惠再9折</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info"><a href="https://grandfresa-taipeiximen.sotetsu-hotels.com/tw/" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市中正區中華路1段57號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市中正區中華路1段57號
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">中正區</span>
                        <span class="t-name">美亞商旅</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">凡燈節活動期間享來電訂房9折優惠，或官網訂房</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info">1. 訂房專線：02-2331-3001
    2. <a href="https://www.mayerinn.com/" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市中正區忠孝西路1段50號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市中正區忠孝西路1段50號3樓至5樓及3樓之1至5樓之1
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">中正區</span>
                        <span class="t-name">力歐時尚旅館</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">力歐時尚旅館-站前館 邀請您一同點亮 2026 台北燈節！ 2026年2月25日至 2026年3月15日 (週一至週四)，只要出示「打卡#2026台北燈節」與「5星好評」，雙人房現場價立即折抵 100 元。<br>**請主動告知並出示畫面，未出示者恕無法享有此折扣</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info">訂房專線：02-2314-5296</p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市中正區延平南路9號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市中正區延平南路9號1-9樓
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">中正區</span>
                        <span class="t-name">儷客旅店-站前店</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">加入飯店LINE@(@muzik-click)於對話框上輸入【專屬好康】即可獲得優惠折扣碼，獲得折扣碼後再至飯店官網訂房即可享房價最優惠。</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info"><a href="https://www.muzikhotel.com.tw/" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市中正區忠孝西路1段72號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市中正區忠孝西路1段72號5樓
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">中正區</span>
                        <span class="t-name">洛碁大飯店驛</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">洛碁官網預訂輸入折扣碼 : TPE95 ，享期間內平日及假日房價95折優惠，全館店適用。</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info"><a href="https://www.gobooking.com.tw/zh-TW/GreenWorld" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市中正區重慶南路1段21號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市中正區重慶南路1段21號1至10樓及15號2至10樓
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">中正區</span>
                        <span class="t-name">洛碁大飯店中華館</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">洛碁官網預訂輸入折扣碼 : TPE95 ，享期間內平日及假日房價95折優惠，全館店適用。</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info"><a href="https://www.gobooking.com.tw/zh-TW/GreenWorld" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市中正區中華路1段41號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市中正區中華路1段41號2樓、3樓、10樓至14樓
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">中正區</span>
                        <span class="t-name">洛碁大飯店花華分館</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">洛碁官網預訂輸入折扣碼 : TPE95 ，享期間內平日及假日房價95折優惠，全館店適用。</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info"><a href="https://www.gobooking.com.tw/zh-TW/GreenWorld" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市中正區漢口街1段36號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市中正區漢口街1段36號1至8樓
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">中正區</span>
                        <span class="t-name">新驛旅店西門捷運店</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">透過官網預訂可享晚退1小時</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info">1. 訂房專線：02-7725-2288
    2. <a href="https://c4.cityinn.com.tw/tw/" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市中正區衡陽路124號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市中正區衡陽路124號1、2、4、6、7樓,寶慶路63號
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">中正區</span>
                        <span class="t-name">雀客旅館台北站前</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">輸入折扣碼可享100元優惠</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info">1. 訂房專線：02-2312-0522
    2. <a href="https://taipeimainstation.hexa.tw/hexa/booking?start=2025-12-18&end=2025-12-19&room=1&adults=2&children=0&active-room=390&tab=roomsEl&duration=1" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市中正區襄路4號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市中正區襄路4號1至10樓
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">中正區</span>
                        <span class="t-name">雀客快捷台北永康</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">輸入折扣碼可享100元優惠</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info">1. 訂房專線：02-2321-2721
    2. <a href="https://yongkang.hexa.tw/hexa/booking?start=2025-12-18&end=2025-12-19&room=1&adults=2&children=0&active-room=235&tab=roomsEl&duration=1" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市中正區信義路2段73號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市中正區信義路2段73號(1至7樓、1樓夾層、公共使用)
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">中正區</span>
                        <span class="t-name">路徒PLUS行旅-站前館</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">★優惠方案 - 連住3晚以上  <br>於官網訂房連住3晚以上，享標準房價8折優惠。 <br>★優惠方案 - 連住5晚以上  <br>於官網訂房連住5晚以上，享標準房價75折優惠。<br>★優惠方案 - 指定房型享行政貴賓廳、共享辦公室使用權</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info"><a href="https://roadersplushotel.com" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市中正區忠孝西路1段80號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市中正區忠孝西路1段80號4樓、24樓-35樓
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">中正區</span>
                        <span class="t-name">路徒PLUS行旅-主題館</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">★優惠方案 - 連住2晚以上  <br>於官網訂房連住2晚以上，享標準房價8折優惠。 <br>★優惠方案 - 連住4晚以上  <br>於官網訂房連住4晚以上，享標準房價75折優惠。<br>★優惠方案 - 連住3晚以上  <br>於官網訂房連住3晚以上，享標準房價8折優惠。 <br>★優惠方案 - 連住5晚以上  <br>於官網訂房連住5晚以上，享標準房價75折優惠。<br>★優惠方案 - 指定房型享行政貴賓廳、共享辦公室使用權</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info"><a href="https://roadersplushotel.com" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市中正區忠孝西路1段80號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市中正區忠孝西路1段80號5樓-12樓
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">中正區</span>
                        <span class="t-name">路徒行旅-中華館</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">★優惠方案 - 連住3晚以上  <br>於官網訂房連住3晚以上，享標準房價75折優惠。</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info"><a href="https://zhonghua.roadershotel.com/" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市中正區延平南路68號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市中正區延平南路68號
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">中正區</span>
                        <span class="t-name">路境行旅-府前館</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">★優惠方案 - 連住2晚以上<br>於官網訂房連住2晚以上，享標準房價8折優惠。 <br>★優惠方案 - 連住3晚以上<br>於官網訂房連住3晚以上，享標準房價75折優惠。<br>★優惠方案 - 指定房型含早專案，詳情請洽官網訂房</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info"><a href="https://www.findershotel.com/" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市中正區重慶南路1段86號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市中正區重慶南路1段86號
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">中正區</span>
                        <span class="t-name">謙商旅-東門館</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">★優惠方案 - 連住2晚以上<br>於官網訂房連住2晚以上，享標準房價8折優惠。 <br>★優惠方案 - 連住3晚以上<br>於官網訂房連住3晚以上，享標準房價75折優惠。<br>★優惠方案 - 指定房型含早專案，詳情請洽官網訂房</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info"><a href="http://www.chaiinhotel.com.tw/" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市中正區信義路2段163號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市中正區信義路2段163號
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">中正區</span>
                        <span class="t-name">捷絲旅西門町店</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">★販售日期：2026年1月19日 至 2026年3月30日 <br>★住宿日期：2026年1月19日 至 2026年3月31日<br>★專案內容： (1)住宿1晚含早餐 (2)專案贈禮春遊微醺組，每房每晚贈送1份</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info"><a href="https://member.silkshotelgroup.com/JSXMD" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市中正區中華路1段41號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市中正區中華路1段41號5-9樓
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">中正區</span>
                        <span class="t-name">台北凱撒大飯店</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">
                                蛇馬都有 吃喝玩樂住房專案<br>
                                入住期間：2026.01.01~2026.03.15<br>
                                台北凱撒 歲末迎新 吃喝玩樂 蛇馬都有~<br>
                                每晚不含早，只要3799元起<br>
                                ✧✧ 每房贈送 吃喝玩樂三重好禮 ✧✧<br>
                                (1) 台北經典名店點心組<br>
                                (2) 三創VIVELAND VR遊戲體驗券<br>
                                (3) Drink Bar飲品兌換券  <br>連續入住2晚以上，享9折優惠 再加贈第四重好禮<br>
                                (4) Checkers早餐一次  <br>官網訂房加購高鐵聯票，享78折起優惠&飯店加碼禮</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info"><a href="https://apq.hihotel.asia/zhtw.v3.0.0.78.0D6D7D/page/" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市中正區忠孝西路1段38號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市中正區忠孝西路1段38號
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 中山區 -->
                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">中山區</span>
                        <span class="t-name">圓山大飯店</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">燈會期間預訂官網圓山假期住房每房贈圓山大飯店小提燈2個</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info">1. 訂房專線：02-2886-8888<br>2. <a href="https://www.grand-hotel.org" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://maps.app.goo.gl/Xyzjjfegwz81axSU8" target="_blank" class="t-location-link">
                                    📍 地點：臺北市中山區中山北路4段1巷1號
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">中山區</span>
                        <span class="t-name">晶華酒店</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">觀光巴士輕旅行｜入住晶華酒店享85折優惠，加碼送觀光巴士買一送一<br><br>2026台北燈節期間，入住市中心飯店，輕鬆走入城市最耀眼的夜晚。今年燈節首度橫跨西門與花博雙展區，並攜手全球知名 IP《變形金剛 TRANSFORMERS》，以柯博文主燈與沉浸式光影展演，點亮台北充滿未來感的夜色。入住期間，特別安排雙人四小時日間雙層觀光巴士體驗，以從容步調飽覽城市風景；翌日清晨，於栢麗廳享用雙人「CNN 唯一推薦台北必吃自助式早餐」，為這段被悉心款待的城市假期畫下完美句點。</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info"><a href="https://member.silkshotelgroup.com/RT/Package/Details/IKOTHCPM_LAN" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://maps.app.goo.gl/8kRue6JoLDQGRGyB7" target="_blank" class="t-location-link">
                                    📍 地點：臺北市中山區中山北路2段39巷3號
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">中山區</span>
                        <span class="t-name">台北中山雅樂軒酒店</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">加入萬豪會員，即可享有會員之福利及優惠</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info">1. 訂房專線：02-7743-9999<br>2. <a href="https://www.marriott.com" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市中山區雙城街1號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市中山區雙城街1號
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">中山區</span>
                        <span class="t-name">雲富大飯店</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">官網訂房9折</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info">1. 訂房專線：02-2531-6767<br>2. <a href="https://cloud.hotelcloud.com.tw/" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市中山區長春路24號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市中山區長春路24號
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">中山區</span>
                        <span class="t-name">第一大飯店</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">優惠期間2026年2月25日至2026年3月15日  標準單雙人房：每房/夜2,000元 （1位客人贈早餐1客；2位客人贈早餐2客） PS:以上房價皆含稅及服務費</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info"><a href="https://firsthoteltaipei.ezhotel.com.tw/1?lang=tw" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市中山區南京東路2段63號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市中山區南京東路2段63號
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">中山區</span>
                        <span class="t-name">洛碁大飯店南京館</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">洛碁官網預訂輸入折扣碼 : TPE95 ，享期間內平日及假日房價95折優惠，全館店適用</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info"><a href="https://www.gobooking.com.tw/zh-TW/GreenWorld" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市中山區南京東路3段8號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市中山區南京東路3段8號1樓至14樓
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">中山區</span>
                        <span class="t-name">洛碁大飯店建北館</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">洛碁官網預訂輸入折扣碼 : TPE95 ，享期間內平日及假日房價95折優惠，全館店適用</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info"><a href="https://www.gobooking.com.tw/zh-TW/GreenWorld" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市中山區建國北路1段138巷1號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市中山區建國北路1段138巷1號、140號、140號2至11樓、142號、144號
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">中山區</span>
                        <span class="t-name">洛碁大飯店舞衣南京館</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">洛碁官網預訂輸入折扣碼 : TPE95 ，享期間內平日及假日房價95折優惠，全館店適用</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info"><a href="https://www.gobooking.com.tw/zh-TW/GreenWorld" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市中山區南京東路2段163號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市中山區南京東路2段163號1-8樓
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">中山區</span>
                        <span class="t-name">洛碁大飯店林森館</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">洛碁官網預訂輸入折扣碼 : TPE95 ，享期間內平日及假日房價95折優惠，全館店適用</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info"><a href="https://www.gobooking.com.tw/zh-TW/GreenWorld" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市中山區林森北路617號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市中山區林森北路617號1至10樓
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">中山區</span>
                        <span class="t-name">洛碁大飯店慶天閣</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">洛碁官網預訂輸入折扣碼 : TPE95 ，享期間內平日及假日房價95折優惠，全館店適用</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info"><a href="https://www.gobooking.com.tw/zh-TW/GreenWorld" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市中山區中山北路2段181號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市中山區中山北路2段181號7-9樓
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">中山區</span>
                        <span class="t-name">洛碁大飯店協美</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">洛碁官網預訂輸入折扣碼 : TPE95 ，享期間內平日及假日房價95折優惠，全館店適用。</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info"><a href="https://www.gobooking.com.tw/zh-TW/GreenWorld" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市中山區中山北路2段181號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市中山區中山北路2段181號10-12樓
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">中山區</span>
                        <span class="t-name">洛碁大飯店山水閣</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">洛碁官網預訂輸入折扣碼 : TPE95 ，享期間內平日及假日房價95折優惠，全館店適用。</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info"><a href="https://www.gobooking.com.tw/zh-TW/GreenWorld" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市中山區中山北路2段181號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市中山區中山北路2段181號1-5樓
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">中山區</span>
                        <span class="t-name">京都商務旅館</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">官方LINE、電話訂房住宿95折、官網限定訂房贈送人氣伴手禮折價券。</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info">1. 訂房專線：02-2567-3366 
    2. <a href="https://booking.taiwantravelmap.com/user/booking.aspx?m=1208" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市中山區長春路38號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市中山區長春路38號3-10樓
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">中山區</span>
                        <span class="t-name">台北發現青年旅舍</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">凡於燈會期間，來參與燈會活動並連續入住2晚即可享會員優惠價。</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info">訂房專線：02-2598-0209</p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市中山區民權東路2段21號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市中山區民權東路2段21號5樓
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">中山區</span>
                        <span class="t-name">歐華酒店</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">指定房型入住一間客房送金桔大福(每位2粒)+鳳梨酥1盒(6粒)。須入住前3天訂房，大福需當天現做，請提早下單。</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info"><a href="https://www.rivierataipei.com/" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市中山區林森北路646號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市中山區林森北路646號
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">中山區</span>
                        <span class="t-name">同一大飯店</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">輸入折扣碼可享100元優惠</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info">1. 訂房專線：02-2592-3977
    2. <a href="https://doitsu.hexa.tw/hexa/booking?start=2025-12-18&end=2025-12-19&adults=2&children=0&room=1&tab=roomsEl&duration=1" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市中山區農安街36號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市中山區農安街36號3-10樓
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">中山區</span>
                        <span class="t-name">雀客旅館</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">輸入折扣碼可享100元優惠</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info">1. 訂房專線：02-7726-6277
    2. <a href="https://songjiang.hexa.tw/hexa/booking?start=2025-12-18&end=2025-12-19&room=1&adults=2&children=0&active-room=378&tab=roomsEl&duration=1" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市中山區松江路253號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市中山區松江路253號1至13樓
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">中山區</span>
                        <span class="t-name">甲山林湯旅JSL hotel</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">2026年3月3日 元宵節入住，打卡5星送旅行萬用充電頭。</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info">訂房專線：02-2501-2222</p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市中山區興安街60號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市中山區興安街60號
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">中山區</span>
                        <span class="t-name">神旺商務酒店</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">★【燈城漫步】-神旺商務酒店一泊一食住房專案<br>最低4,999元起，含銀柏廳雙人套餐<br>入住預訂早餐再享買一送一優惠(原價550元+10%/1人)<br>★【異國風情】-銀柏廳用餐優惠<br>單人套餐極致6品760元+10%起，3人同行打卡再享專屬85折優惠</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info"><a href="https://www.swresidences.com/" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市中山區南京東路1段128號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市中山區南京東路1段128號
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">中山區</span>
                        <span class="t-name">台北中山意舍酒店</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">★與臺北意舍酒店一起體驗2026台北燈節，立即預訂中山意舍酒店的「台北燈節意舍燈籠住宿專案」，遊樂西門町與花博公園雙主燈，更可獲得點亮幸福平安的意舍LED燈籠, 再享受大人小孩都喜歡的甜甜如意費列羅金莎巧克力 <br>★此專案贈送獨家意舍LED燈籠禮盒每房1組, 每次連續入住之訂房僅贈送1次, 續住之訂房視同連續入住整段僅贈送1次<br>★本優惠僅適用本酒店官方網站訂房系統之訂房<br>★本優惠專案僅適用於住宿日3天(含)前預定 <br>★本優惠專案內容與每日開放間數將以酒店最新公告與説明為主<br>★本優惠專案需視實際房況而定, 僅適用部份指定房型, 恕不適用於特殊日期 (相關日期依酒店公告為主) <br>★本優惠專案為彈性之訂房變更與取消條款，房費基準依據客房內實際入住人數計算 <br>★本優惠專案恕不適用8間或以上團體訂房 <br>★本優惠專案恕不得與其他優惠活動或專案合併使用</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info">1. 訂房專線：02-2525-2828 
    2. <a href="https://www.amba-hotels.com/tc/zhongshan/" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市中山區中山北路2段57之1號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市中山區中山北路2段57之1號
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 大同/大安/松山區 -->
                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">大同區</span>
                        <span class="t-name">天成文旅-蜂巢</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">2026/2/25-2026/3/15燈節活動期間提供官網9折</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info"><a href="https://www.book-secure.com/index.php?s=results&property=twtai25784" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=台北市大同區太原路57號" target="_blank" class="t-location-link">
                                    📍 地點：台北市大同區太原路57號
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">大安區</span>
                        <span class="t-name">捷絲旅臺大尊賢館</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">★販售日期：2026年1月19日 至 2026年3月30日 <br>★住宿日期：2026年1月19日 至 2026年3月31日<br>★專案內容： (1)住宿1晚含早餐 (2)專案贈禮春遊微醺組，每房每晚贈送1份</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info"><a href="https://member.silkshotelgroup.com/JSNTU" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市大安區羅斯福路4段83號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市大安區羅斯福路4段83號1-10樓
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">大安區</span>
                        <span class="t-name">洛碁大飯店忠孝館</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">洛碁官網預訂輸入折扣碼 : TPE95 <br>享期間內平日及假日房價95折優惠，全館店適用。</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info"><a href="https://www.gobooking.com.tw/zh-TW/GreenWorld" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市大安區忠孝東路4段180號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市大安區忠孝東路4段180號1樓、4樓至14樓
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">大安區</span>
                        <span class="t-name">福容大飯店 台北一館</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">
                                    ★台北燈節期間獨家 3天2夜 8,599元、2天1夜 4,999元超值行
                                    <br>★依入住人數提供豐富精緻早餐，再贈大廳酒吧現點現煮「臺北國際牛肉麵節-得獎紅燒牛肉麵」
                                    <br>★專案獨家搭配「台北及新北共用捷運 24小時票」2張，讓旅客自由暢遊燈會雙展區
                                </p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info"><a href="https://www.fullon-hotels.com.tw/tp/tw/news-detail/2026ROOM-MOONLIGHT/" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市大安區建國南路1段266號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市大安區建國南路1段266號
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">大安區</span>
                        <span class="t-name">華弘怡亨酒店</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">官網預訂加贈Happy Hours 免費飲料券，依照預定人數贈送。</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info"><a href="https://www.eclathotels.com/zt/taipei" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市大安區敦化南路1段370號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市大安區敦化南路1段370號
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">大安區</span>
                        <span class="t-name">謙商旅(谷墨商旅-師大館)</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">★優惠方案 - 連住2晚以上 <br>於官網訂房連住2晚以上，享標準房價8折優惠。 <br>★優惠方案 - 連住3晚以上 <br>於官網訂房連住3晚以上，享標準房價75折優惠。</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info"><a href="https://www.goodmorehotel.com/" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市大安區和平東路1段147號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市大安區和平東路1段147號
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">大安區</span>
                        <span class="t-name">國聯大飯店</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">★2026年2月25日至2026年3月15日期間週一至週三入住，精緻客房4,320元起含2客早餐，住客享延後退房至15:00，24小時住好住滿<br>★專案內容：精緻客房4,320元起、豪華客房 4,720元起、行政客房5,280元起(含稅、服務費)，含2客早餐。<br>**優惠不適用日期：2026年3月7日，優惠不與其他住房優惠合併使用。飯店保有專案變更、修改與最終解釋之權利</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info">1. 訂房專線：02-2773-1515#187
    2. <a href="https://www.unitedhotel.com.tw/" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市大安區光復南路200號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市大安區光復南路200號
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">松山區</span>
                        <span class="t-name">洛碁三貝茲</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">洛碁官網預訂輸入折扣碼 : TPE95 <br>享期間內平日及假日房價95折優惠，全館店適用。</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info"><a href="https://www.gobooking.com.tw/zh-TW/GreenWorld" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市松山區八德路4段16號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市松山區八德路4段16號1-7樓
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 南港北投區 -->
                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">南港區</span>
                        <span class="t-name">台北六福萬怡酒店</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">【飯店指定專案X高鐵聯票】<br>★官網訂購指定專案加購高鐵車票享78折起優惠<br>★台北燈節期間入住【台北六福萬怡酒店X高鐵聯票住宿專案】加碼再贈台北六福萬怡酒店全館餐飲滿2,000元折500元優惠券</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info">1. 訂房專線：02-6615-6560
    2. <a href="https://apq.hihotel.asia/zhtw.v3.16.43.38.29DOQ3/page" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市南港區忠孝東路7段359號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市南港區忠孝東路7段359號7-30樓
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">南港區</span>
                        <span class="t-name">洛碁大飯店南港館</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">洛碁官網預訂輸入折扣碼 : TPE95 <br>享期間內平日及假日房價95折優惠，全館店適用。</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info"><a href="https://www.gobooking.com.tw/zh-TW/GreenWorld" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市南港區忠孝東路7段526號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市南港區忠孝東路7段526號1-14樓、528號2-14樓
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">南港區</span>
                        <span class="t-name">洛碁大飯店松山館</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">洛碁官網預訂輸入折扣碼 : TPE95 <br>享期間內平日及假日房價95折優惠，全館店適用。</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info"><a href="https://www.gobooking.com.tw/zh-TW/GreenWorld" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市南港區玉成街149號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市南港區玉成街149號
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">南港區</span>
                        <span class="t-name">台北松山意舍酒店</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">★與臺北意舍酒店一起體驗2026台北燈節，立即預訂松山意舍酒店的「台北燈節意舍燈籠住宿專案」，遊樂西門町與花博公園雙主燈，更可獲得點亮幸福平安的意舍LED燈籠, 再享受大人小孩都喜歡的甜甜如意費列羅金莎巧克力<br>★此專案贈送獨家意舍LED燈籠禮盒每房1組, 每次連續入住之訂房僅贈送1次, 續住之訂房視同連續入住整段僅贈送1次<br>★本優惠僅適用本酒店官方網站訂房系統之訂房<br>★本優惠專案僅適用於住宿日3天(含)前預定 <br>★本優惠專案內容與每日開放間數將以酒店最新公告與説明為主<br>★本優惠專案需視實際房況而定, 僅適用部份指定房型, 恕不適用於特殊日期 (相關日期依酒店公告為主) <br>★本優惠專案為彈性之訂房變更與取消條款，房費基準依據客房內實際入住人數計算 <br>★本優惠專案恕不適用8間或以上團體訂房 <br>★本優惠專案恕不得與其他優惠活動或專案合併使用</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info">1. 訂房專線：02-2525-2828 
    2. <a href="https://www.amba-hotels.com/tc/songshan/" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市南港區市民大道7段8號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市南港區市民大道7段8號
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">北投區</span>
                        <span class="t-name">水美溫泉會館</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">★一泊二食住宿優惠折價500元<br>★泡湯9折優惠<br>★水美食府免1成服務費</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info">1. 訂房專線：02-2898-3838
    2. <a href="https://www.sweetme.com.tw/tw/index.html" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市北投區光明路224號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市北投區光明路224號
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">北投區</span>
                        <span class="t-name">北投晶泉丰旅</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">晶泉丰旅春季從心澄淨2天1夜住房專案，入住加贈國際金獎清酒，於開課日期內可以免費體驗酒粕手作皂課程。</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info">1. 訂房專線：02-7735-5000
    2. <a href="https://member.silkshotelgroup.com/SPBT" target="_blank">前往官網 ➔ </a> </p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市北投區泉源路19號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市北投區泉源路19號
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 士林區 -->
                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">士林區</span>
                        <span class="t-name">台北士林萬麗酒店</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="hotel-info-flex">
                            <div class="hotel-offer-col">
                                <h4>住宿優惠方案 ✨</h4>
                                <p style="color:#fff;">加入萬豪會員，即可享有會員之福利及優惠。</p>
                            </div>
                            <div class="hotel-contact-col">
                                <h4>訂房資訊</h4>
                                <p class="booking-info"><a href="https://www.renaissancetaipei.com/" target="_blank">前往官網 ➔ </a></p>
                                <a href="https://www.google.com/maps/search/?api=1&query=臺北市士林區中山北路五段470巷8號" target="_blank" class="t-location-link">
                                    📍 地點：臺北市士林區中山北路五段470巷8號
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end of temple-list-container -->
        </div>

<!-- 高鐵假期 -->
        <div id="cat-THoliday" class="main-cat-content" style="max-width: 1200px;">
            
            <div class="tholiday-intro">
                <h3>【高鐵假期】2026 台北燈節專案</h3>
                <p>搭高鐵遊台北燈節，享受舒適便捷的旅程。精選優質飯店，加贈專屬好禮，讓您的賞燈之旅更加完美。</p>
                
                <a href="https://tholiday.thsrc.com.tw/cities/taipei?utm_source=taipeigov&utm_medium=link&utm_campaign=lantern_festival" target="_blank" class="btn-hsr">
                    前往高鐵假期官網訂購 <i class="fas fa-external-link-alt" style="margin-left:8px; font-size:0.9em;"></i>
                </a>
                <p style="font-size: 0.9rem; margin-top: 15px; color: rgba(255,255,255,0.5);">* 實際價格與房況請依高鐵假期官網公告為準</p>
            </div>

            <div class="hotel-grid">

                <div class="hotel-card">
                    <span class="hotel-tag">2026台北燈節</span>
                    <h3 class="hotel-name">台北太平洋商旅<br>2日自由行</h3>
                    <div class="hotel-offer">
                        <p><strong>✨ 專案獨享禮遇：</strong></p>
                        <ul>
                            <li>每房加贈限量盥洗包乙個</li>
                        </ul>
                    </div>
                    <div class="hotel-price-box">
                        <span class="price-note">(含高鐵來回票＋飯店住宿一晚)</span>
                        <span class="price-label">高雄出發 / 每人</span>
                        <span class="price-val">$3,810 <small>起</small></span>
                    </div>
                </div>
                <div class="hotel-card">
                    <span class="hotel-tag">2026台北燈節</span>
                    <h3 class="hotel-name">台北互舍酒店<br>2日自由行</h3>
                    <div class="hotel-offer">
                        <p><strong>✨ 專案獨享禮遇：</strong></p>
                        <ul>
                            <li>每房依房型人數加贈迎賓飲料乙次</li>
                        </ul>
                    </div>
                    <div class="hotel-price-box">
                        <span class="price-note">(含高鐵來回票＋飯店住宿一晚)</span>
                        <span class="price-label">高雄出發 / 每人</span>
                        <span class="price-val">$3,310 <small>起</small></span>
                    </div>
                </div>
                <div class="hotel-card">
                    <span class="hotel-tag">2026台北燈節</span>
                    <h3 class="hotel-name">台北六福萬怡酒店<br>2日自由行</h3>
                    <div class="hotel-offer">
                        <p><strong>✨ 專案獨享禮遇：</strong></p>
                        <ul>
                            <li>每房提供飯店餐飲消費<br>滿NT$2000折NT$500乙次</li>
                        </ul>
                    </div>
                    <div class="hotel-price-box">
                        <span class="price-note">(含高鐵來回票＋飯店住宿一晚)</span>
                        <span class="price-label">高雄出發 / 每人</span>
                        <span class="price-val">$4,560 <small>起</small></span>
                    </div>
                </div>
                <div class="hotel-card">
                    <span class="hotel-tag">2026台北燈節</span>
                    <h3 class="hotel-name">台北君悅酒店<br>2日自由行</h3>
                    <div class="hotel-offer">
                        <p><strong>✨ 專案獨享禮遇：</strong></p>
                        <ul>
                            <li>凱菲屋平日周一至周四午、晚餐及下午茶時段，消費入房帳享8折優惠。</li>
                            <li>館內餐廳用餐及禮品烘培坊消費入房帳享85折優惠。</li>
                            <li>*優惠不可同時使用，服務費仍以原價10%收取。</li>
                        </ul>
                    </div>
                    <div class="hotel-price-box">
                        <span class="price-note">(含高鐵來回票＋飯店住宿一晚)</span>
                        <span class="price-label">高雄出發 / 每人</span>
                        <span class="price-val">$5,310 <small>起</small></span>
                    </div>
                </div>
                <div class="hotel-card">
                    <span class="hotel-tag">2026台北燈節</span>
                    <h3 class="hotel-name">台北凱撒大飯店<br>2日自由行</h3>
                    <div class="hotel-offer">
                        <p><strong>✨ 專案獨享禮遇：</strong></p>
                        <ul>
                            <li>每房Drink Bar 120 元飲品兌換券2張。</li>
                            <li>每房加贈Caesar SPA 500元抵用券乙張。</li>
                        </ul>
                    </div>
                    <div class="hotel-price-box">
                        <span class="price-note">(含高鐵來回票＋飯店住宿一晚)</span>
                        <span class="price-label">高雄出發 / 每人</span>
                        <span class="price-val">$4,410 <small>起</small></span>
                    </div>
                </div>
                <div class="hotel-card">
                    <span class="hotel-tag">2026台北燈節</span>
                    <h3 class="hotel-name">台北松山意舍酒店<br>2日自由行</h3>
                    <div class="hotel-offer">
                        <p><strong>✨ 專案獨享禮遇：</strong></p>
                        <ul>
                            <li>每房提供飯店餐飲消額度300元乙次</li>
                        </ul>
                    </div>
                    <div class="hotel-price-box">
                        <span class="price-note">(含高鐵來回票＋飯店住宿一晚)</span>
                        <span class="price-label">高雄出發 / 每人</span>
                        <span class="price-val">$3,910 <small>起</small></span>
                    </div>
                </div>
                <div class="hotel-card">
                    <span class="hotel-tag">2026台北燈節</span>
                    <h3 class="hotel-name">台北西門町意舍酒店<br>2日自由行</h3>
                    <div class="hotel-offer">
                        <p><strong>✨ 專案獨享禮遇：</strong></p>
                        <ul>
                            <li>每房提供飯店餐飲消額度300元乙次</li>
                        </ul>
                    </div>
                    <div class="hotel-price-box">
                        <span class="price-note">(含高鐵來回票＋飯店住宿一晚)</span>
                        <span class="price-label">高雄出發 / 每人</span>
                        <span class="price-val">$3,860 <small>起</small></span>
                    </div>
                </div>
                <div class="hotel-card">
                    <span class="hotel-tag">2026台北燈節</span>
                    <h3 class="hotel-name">台北中山意舍酒店<br>2日自由行</h3>
                    <div class="hotel-offer">
                        <p><strong>✨ 專案獨享禮遇：</strong></p>
                        <ul>
                            <li>每房提供飯店餐飲消額度300元乙次</li>
                        </ul>
                    </div>
                    <div class="hotel-price-box">
                        <span class="price-note">(含高鐵來回票＋飯店住宿一晚)</span>
                        <span class="price-label">高雄出發 / 每人</span>
                        <span class="price-val">$3,910 <small>起</small></span>
                    </div>
                </div>
                <div class="hotel-card">
                    <span class="hotel-tag">2026台北燈節</span>
                    <h3 class="hotel-name">和逸飯店．台北民生館<br>2日自由行</h3>
                    <div class="hotel-offer">
                        <p><strong>✨ 專案獨享禮遇：</strong></p>
                        <ul>
                            <li>每房加贈Cozzi 行李束帶乙條</li>
                        </ul>
                    </div>
                    <div class="hotel-price-box">
                        <span class="price-note">(含高鐵來回票＋飯店住宿一晚)</span>
                        <span class="price-label">高雄出發 / 每人</span>
                        <span class="price-val">$4,210 <small>起</small></span>
                    </div>
                </div>
                <div class="hotel-card">
                    <span class="hotel-tag">2026台北燈節</span>
                    <h3 class="hotel-name">和逸飯店．台北忠孝館<br>2日自由行</h3>
                    <div class="hotel-offer">
                        <p><strong>✨ 專案獨享禮遇：</strong></p>
                        <ul>
                            <li>每房加贈Cozzi 行李束帶乙條</li>
                        </ul>
                    </div>
                    <div class="hotel-price-box">
                        <span class="price-note">(含高鐵來回票＋飯店住宿一晚)</span>
                        <span class="price-label">高雄出發 / 每人</span>
                        <span class="price-val">$4,510 <small>起</small></span>
                    </div>
                </div>
                <div class="hotel-card">
                    <span class="hotel-tag">2026台北燈節</span>
                    <h3 class="hotel-name">皇家季節酒店台北南西館<br>2日自由行</h3>
                    <div class="hotel-offer">
                        <p><strong>✨ 專案獨享禮遇：</strong></p>
                        <ul>
                            <li>每房加贈旅行組合包(內含地中海橄欖洗髮精、潤髮乳等共4瓶)乙組。</li>
                        </ul>
                    </div>
                    <div class="hotel-price-box">
                        <span class="price-note">(含高鐵來回票＋飯店住宿一晚)</span>
                        <span class="price-label">高雄出發 / 每人</span>
                        <span class="price-val">$3,360 <small>起</small></span>
                    </div>
                </div>
                <div class="hotel-card">
                    <span class="hotel-tag">2026台北燈節</span>
                    <h3 class="hotel-name">台北漢來大飯店<br>2日自由行</h3>
                    <div class="hotel-offer">
                        <p><strong>✨ 專案獨享禮遇：</strong></p>
                        <ul>
                            <li>每房加贈漢來熊造型提燈乙個。</li>
                        </ul>
                    </div>
                    <div class="hotel-price-box">
                        <span class="price-note">(含高鐵來回票＋飯店住宿一晚)</span>
                        <span class="price-label">高雄出發 / 每人</span>
                        <span class="price-val">$4,910 <small>起</small></span>
                    </div>
                </div>
                <div class="hotel-card">
                    <span class="hotel-tag">2026台北燈節</span>
                    <h3 class="hotel-name">柯達大飯店台北一店<br>2日自由行</h3>
                    <div class="hotel-offer">
                        <p><strong>✨ 專案獨享禮遇：</strong></p>
                        <ul>
                            <li>每房依房型人數加贈台北捷運24小時卡</li>
                        </ul>
                    </div>
                    <div class="hotel-price-box">
                        <span class="price-note">(含高鐵來回票＋飯店住宿一晚)</span>
                        <span class="price-label">高雄出發 / 每人</span>
                        <span class="price-val">$3,585 <small>起</small></span>
                    </div>
                </div>
                <div class="hotel-card">
                    <span class="hotel-tag">2026台北燈節</span>
                    <h3 class="hotel-name">台北柯達大飯店林森館<br>2日自由行</h3>
                    <div class="hotel-offer">
                        <p><strong>✨ 專案獨享禮遇：</strong></p>
                        <ul>
                            <li>每房依房型人數加贈台北捷運24小時卡</li>
                        </ul>
                    </div>
                    <div class="hotel-price-box">
                        <span class="price-note">(含高鐵來回票＋飯店住宿一晚)</span>
                        <span class="price-label">高雄出發 / 每人</span>
                        <span class="price-val">$3,635 <small>起</small></span>
                    </div>
                </div>
                <div class="hotel-card">
                    <span class="hotel-tag">2026台北燈節</span>
                    <h3 class="hotel-name">台北柯達大飯店南京館<br>2日自由行</h3>
                    <div class="hotel-offer">
                        <p><strong>✨ 專案獨享禮遇：</strong></p>
                        <ul>
                            <li>每房依房型人數加贈台北捷運24小時卡</li>
                        </ul>
                    </div>
                    <div class="hotel-price-box">
                        <span class="price-note">(含高鐵來回票＋飯店住宿一晚)</span>
                        <span class="price-label">高雄出發 / 每人</span>
                        <span class="price-val">$3,860 <small>起</small></span>
                    </div>
                </div>
                <div class="hotel-card">
                    <span class="hotel-tag">2026台北燈節</span>
                    <h3 class="hotel-name">柯達大飯店台北二店<br>2日自由行</h3>
                    <div class="hotel-offer">
                        <p><strong>✨ 專案獨享禮遇：</strong></p>
                        <ul>
                            <li>每房依房型人數加贈台北捷運24小時卡</li>
                        </ul>
                    </div>
                    <div class="hotel-price-box">
                        <span class="price-note">(含高鐵來回票＋飯店住宿一晚)</span>
                        <span class="price-label">高雄出發 / 每人</span>
                        <span class="price-val">$3,885 <small>起</small></span>
                    </div>
                </div>
                <div class="hotel-card">
                    <span class="hotel-tag">2026台北燈節</span>
                    <h3 class="hotel-name">台北柯達大飯店松江館<br>2日自由行</h3>
                    <div class="hotel-offer">
                        <p><strong>✨ 專案獨享禮遇：</strong></p>
                        <ul>
                            <li>每房依房型人數加贈台北捷運24小時卡</li>
                        </ul>
                    </div>
                    <div class="hotel-price-box">
                        <span class="price-note">(含高鐵來回票＋飯店住宿一晚)</span>
                        <span class="price-label">高雄出發 / 每人</span>
                        <span class="price-val">$4,035 <small>起</small></span>
                    </div>
                </div>
                <div class="hotel-card">
                    <span class="hotel-tag">2026台北燈節</span>
                    <h3 class="hotel-name">台北柯達大飯店長安旗艦店<br>2日自由行</h3>
                    <div class="hotel-offer">
                        <p><strong>✨ 專案獨享禮遇：</strong></p>
                        <ul>
                            <li>每房依房型人數加贈台北捷運24小時卡</li>
                        </ul>
                    </div>
                    <div class="hotel-price-box">
                        <span class="price-note">(含高鐵來回票＋飯店住宿一晚)</span>
                        <span class="price-label">高雄出發 / 每人</span>
                        <span class="price-val">$4,135 <small>起</small></span>
                    </div>
                </div>

            </div> 
        </div>
        
    </main>

    <?php include 'footer.php'; ?>
    <script src="js/script.js"></script>
</body>
</html>