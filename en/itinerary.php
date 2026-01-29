<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <?php include 'header.php'; ?>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/pages.css">
</head>
<body>
    <?php include 'nav.php'; ?>

    <main class="container" style="padding-top: 120px; min-height: 80vh; padding-bottom: 150px;">

        <section>
        <h2 class="section-title">旅程推薦</h2>
    
        <div class="tab-buttons">
            <button class="tab-btn active" onclick="openTab(event, 'trip1')">One-Day Tours</button>
            <button class="tab-btn" onclick="openTab(event, 'trip2')">Two-Day Tours</button>
            <button class="tab-btn" onclick="openTab(event, 'trip3')">Three-Day Tours</button>
        </div>

        <div id="trip1" class="tab-content active">
            <div class="route-grid">
                
                <div class="route-card">
                    <div class="route-header">
                        <h3>History & Heritage</h3>
                        
                    </div>
                    <div class="route-path">
                        Chiang Kai-shek Memorial Hall / National Taiwan Museum <span>⟶</span> Nanmen Market <span>⟶</span> Taipei Botanical Garden / Sun Yun-suan Memorial Museum / Postal Museum <span>⟶</span> South Airport Night Market <span>⟶</span> Lantern Festival Ximen Area
                    </div>
                    <div class="route-gallery">
                        <img src="../images/route/oneday_1.jpg" alt="景點" loading="lazy" decoding="async">
                    </div>
                </div>

                <div class="route-card">
                    <div class="route-header">
                        <h3>Books, Cameras & Old Town Vibes</h3>
                        
                    </div>
                    <div class="route-path">
                        National Taiwan Museum <span>⟶</span> Rong Ting Shopping District <span>⟶</span> Chongqing South Road — Bookstore Street / Camera Street <span>⟶</span> Ximending <span>⟶</span> Lantern Festival Ximen Area
                    </div>
                    <div class="route-gallery">
                        <img src="../images/route/oneday_2.jpg" alt="景點" loading="lazy" decoding="async">
                    </div>
                </div>

                <div class="route-card">
                    <div class="route-header">
                        <h3>Mountain Peaks & Theme Park Fun</h3>
                        
                    </div>
                    <div class="route-path">
                        Lengshuikeng hot spring area / Qingtiangang Grassland <span>⟶</span> MRT Shilin Station Area <span>⟶</span> Taipei Children's Amusement Park <span>⟶</span> Datong Jiuquan St. / MAJI Square <span>⟶</span> Lantern Festival Taipei Expo Park Area
                    </div>
                    <div class="route-gallery">
                        <img src="../images/route/oneday_3.jpg" alt="景點" loading="lazy" decoding="async">
                    </div>
                </div>

                <div class="route-card">
                    <div class="route-header">
                        <h3>Flowers, Bridges & Night Markets</h3>
                        
                    </div>
                    <div class="route-path">
                        Baishihu Suspension Bridge / Bishan Campground Skywalk <span>⟶</span> Miramar Entertainment Park <span>⟶</span> Shilin Official Residence <span>⟶</span> Shilin Night Market <span>⟶</span> Lantern Festival Taipei Expo Park Area
                    </div>
                    <div class="route-gallery">
                        <img src="../images/route/oneday_4.jpg" alt="景點" loading="lazy" decoding="async">
                    </div>
                </div>

                <div class="route-card">
                    <div class="route-header">
                        <h3>Hipster Hangouts & Trendy Alleys</h3>
                        
                    </div>
                    <div class="route-path">
                        Museum of Contemporary Art Taipei <span>⟶</span> Zhongshan N. Rd. / Tiaotong Commercial District <span>⟶</span> SPOT-Taipei Film House / Chifeng Street / Eslite Spectrum Nanxi <span>⟶</span> Qingguang Shopping District / MRT Zhongshan Station Area <span>⟶</span> Lantern Festival Taipei Expo Park Area
                    </div>
                    <div class="route-gallery">
                        <img src="../images/route/oneday_5.jpg" alt="景點" loading="lazy" decoding="async">
                    </div>
                </div>

                <div class="route-card">
                    <div class="route-header">
                        <h3>Blessings & Old Temples</h3>
                        
                    </div>
                    <div class="route-path">
                        Xia-Hai City God Temple <span>⟶</span> Dihua Street <span>⟶</span> Dalongdong Baoan Temple <span>⟶</span> Dalong Street Night Market <span>⟶</span> Lantern Festival Taipei Expo Park Area
                    </div>
                    <div class="route-gallery">
                        <img src="../images/route/oneday_6.jpg" alt="景點" loading="lazy" decoding="async">
                    </div>
                </div>

            </div>
        </div>

        <div id="trip2" class="tab-content">
            <div class="route-grid">

                <div class="route-card">
                    <div class="route-header">
                        <h3>A stroll through the cultural park</h3>
                        
                    </div>
                    <div class="day-block">
                        <h4 class="day-title">Day 1</h4>
                        <div class="route-path">
                        Songshan Cultural and Creative Park <span>⟶</span> MRT Zhongshan Dunhua-Fuxing Area / Eastern District <span>⟶</span> Huashan 1914 Creative Park <span>⟶</span> Ximending <span>⟶</span> Lantern Festival Ximen Area
                        </div>
                    </div>
                    <div class="day-divider"></div>
                    <div class="day-block">
                        <h4 class="day-title">Day 2</h4>
                        <div class="route-path">
                        Nung Chan Monastery <span>⟶</span> Shipai Shopping District <span>⟶</span> Yuanshan Water Shrine / Breeze Platform <span>⟶</span> Shilin Night Market <span>⟶</span> Lantern Festival Taipei Expo Park Area
                        </div>
                    </div>
                    <div class="route-gallery">
                        <img src="../images/route/twodays_1-1.jpg" alt="景點" loading="lazy" decoding="async">
                        <img src="../images/route/twodays_1-2.jpg" alt="景點" loading="lazy" decoding="async">
                    </div>
                </div>

                <div class="route-card">
                    <div class="route-header">
                        <h3>Taipei Deep Travel</h3>
                        
                    </div>
                    <div class="day-block">
                        <h4 class="day-title">Day 1</h4>
                        <div class="route-path">
                        Daan Park <span>⟶</span> Yongkang Street Area <span>⟶</span> The Kishu An Forest of Literature <span>⟶</span> Longquan Street Shopping Area <span>⟶</span> Lantern Festival Ximen Area
                        </div>
                    </div>
                    <div class="day-divider"></div>
                    <div class="day-block">
                        <h4 class="day-title">Day 2</h4>
                        <div class="route-path">
                        Songshan Cultural and Creative Park / Taipei Dome <span>⟶</span> MRT Sun Yat-sen Memorial Hall Area / Cafes <span>⟶</span> Minsheng Community / Fo Guang Shan Taipei Vihara <span>⟶</span> Raohe Street Tourist Night Market <span>⟶</span> Songshan Ciyou Temple / Rainbow Bridge
                        </div>
                    </div>
                    <div class="route-gallery">
                        <img src="../images/route/twodays_2-1.jpg" alt="景點" loading="lazy" decoding="async">
                        <img src="../images/route/twodays_2-2.jpg" alt="景點" loading="lazy" decoding="async">
                    </div>
                </div>

                <div class="route-card">
                    <div class="route-header">
                        <h3>Arts, Blooms & Gardens</h3>
                        
                    </div>
                    <div class="day-block">
                        <h4 class="day-title">Day 1</h4>
                        <div class="route-path">
                        Shilin Official Residence (2/26-3/8 Tulip Show) <span>⟶</span> Tianmu Shopping District <span>⟶</span> National Palace Museum <span>⟶</span> Ximending <span>⟶</span> Lantern Festival Ximen Area
                        </div>
                    </div>
                    <div class="day-divider"></div>
                    <div class="day-block">
                        <h4 class="day-title">Day 2</h4>
                        <div class="route-path">
                        Taipei Rose Garden (3/6-4/6 Taipei Rose Festival) <span>⟶</span> Xingtian Temple Area / Jilin Rd. Gourmet District <span>⟶</span> Miniatures Museum of Taiwan <span>⟶</span> Guang Hua Digital Plaza and Syntrend Creative Park
                        </div>
                    </div>
                    <div class="route-gallery">
                        <img src="../images/route/twodays_3-1.jpg" alt="景點" loading="lazy" decoding="async">
                        <img src="../images/route/twodays_3-2.jpg" alt="景點" loading="lazy" decoding="async">
                    </div>
                </div>

                <div class="route-card">
                    <div class="route-header">
                        <h3>Step Back in Old City</h3>
                        
                    </div>
                    <div class="day-block">
                        <h4 class="day-title">Day 1</h4>
                        <div class="route-path">
                        Lin An-tai Historical House & Museum <span>⟶</span> Zhongshan N. Rd. / Tiaotong Commercial District <span>⟶</span> Museum of Contemporary Art Taipei <span>⟶</span> Dihua Street <span>⟶</span> Dadaocheng Wharf Container Market
                        </div>
                    </div>
                    <div class="day-divider"></div>
                    <div class="day-block">
                        <h4 class="day-title">Day 2</h4>
                        <div class="route-path">
                        Lungshan Temple / The Historic Bopiliao Area <span>⟶</span> Xinfu Market and Dongsanshui Street Market <span>⟶</span> Taipei Tianhou Temple / Nishi Honganji Square <span>⟶</span> Zhongshan Hall / City God Temple of Taipei City <span>⟶</span> Ximending / Lantern Festival Ximen Area
                        </div>
                    </div>
                    <div class="route-gallery">
                        <img src="../images/route/twodays_4-1.jpg" alt="景點" loading="lazy" decoding="async">
                        <img src="../images/route/twodays_4-2.jpg" alt="景點" loading="lazy" decoding="async">
                    </div>
                </div>

                <div class="route-card">
                    <div class="route-header">
                        <h3>When Temples Meets Fashion</h3>
                        
                    </div>
                    <div class="day-block">
                        <h4 class="day-title">Day 1</h4>
                        <div class="route-path">
                        Confucius Temple / Dalongdong Baoan Temple <span>⟶</span> Datong Jiuquan St. / MAJI Square <span>⟶</span> MRT Zhongshan Station Area / Ching-Fu Temple <span>⟶</span> Shuangcheng Street Night Market <span>⟶</span> Lantern Festival Taipei Expo Park Area
                        </div>
                    </div>
                    <div class="day-divider"></div>
                    <div class="day-block">
                        <h4 class="day-title">Day 2</h4>
                        <div class="route-path">
                        Xinyi Public Assembly Hall <span>⟶</span> Xinyi Shopping District <span>⟶</span> Taipei 101 <span>⟶</span> Xinyi Shopping District <span>⟶</span> Lantern Festival Ximen Area
                        </div>
                    </div>
                    <div class="route-gallery">
                        <img src="../images/route/twodays_5-1.jpg" alt="景點" loading="lazy" decoding="async">
                        <img src="../images/route/twodays_5-2.jpg" alt="景點" loading="lazy" decoding="async">
                    </div>
                </div>

                <div class="route-card">
                    <div class="route-header">
                        <h3>Grand Views & Nature’s Beauty</h3>
                        
                    </div>
                    <div class="day-block">
                        <h4 class="day-title">Day 1</h4>
                        <div class="route-path">
                        Yangming Park (2/6- 3/16 Yangmingshan Flower Festival) <span>⟶</span> The US Military's Cold War Housing <span>⟶</span> Taipei Children's Amusement Park / National Taiwan Science Education Center <span>⟶</span> The Grand Hotel Taipei <span>⟶</span> Breeze Platform (Night View)
                        </div>
                    </div>
                    <div class="day-divider"></div>
                    <div class="day-block">
                        <h4 class="day-title">Day 2</h4>
                        <div class="route-path">
                        Shilin Official Residence (2/26-3/8 Tulip Show) <span>⟶</span> Shidong Market <span>⟶</span> Dayeh Takashimaya Department Store <span>⟶</span> Shilin Night Market <span>⟶</span> Lantern Festival Taipei Expo Park Area
                        </div>
                    </div>
                    <div class="route-gallery">
                        <img src="../images/route/twodays_6-1.jpg" alt="景點" loading="lazy" decoding="async">
                        <img src="../images/route/twodays_6-2.jpg" alt="景點" loading="lazy" decoding="async">
                    </div>
                </div>

                <div class="route-card">
                    <div class="route-header">
                        <h3>Hot Springs & Artistic Villages</h3>
                        
                    </div>
                    <div class="day-block">
                        <h4 class="day-title">Day 1</h4>
                        <div class="route-path">
                        Museum of Drinking Water <span>⟶</span> Jingmei Shopping District <span>⟶</span> Treasure Hill Artist Village <span>⟶</span> Gongguan Shopping District <span>⟶</span> Gongguan Riverside Plaza
                        </div>
                    </div>
                    <div class="day-divider"></div>
                    <div class="day-block">
                        <h4 class="day-title">Day 2</h4>
                        <div class="route-path">
                        Xinbeitou Hot Spring Area / Beitou Heart Village / Taipei Beitou Geothermal Valley / Beitou Hot Spring Museum <span>⟶</span> Xinbeitou Shopping District <span>⟶</span> Shipai Shopping District <span>⟶</span> Lantern Festival Taipei Expo Park Area
                        </div>
                    </div>
                    <div class="route-gallery">
                        <img src="../images/route/twodays_7-1.jpg" alt="景點" loading="lazy" decoding="async">
                        <img src="../images/route/twodays_7-2.jpg" alt="景點" loading="lazy" decoding="async">
                    </div>
                </div>

                <div class="route-card">
                    <div class="route-header">
                        <h3>Urban Forest Breathing Trip</h3>
                        
                    </div>
                    <div class="day-block">
                        <h4 class="day-title">Day 1</h4>
                        <div class="route-path">
                        National Sun Yat-sen Memorial Hall <span>⟶</span> Songshan Cultural and Creative Park <span>⟶</span> Taipei Arena Ice Land <span>⟶</span> Liaoning Street Night Market <span>⟶</span> MRT Nanjing Fuxing Station Area
                        </div>
                    </div>
                    <div class="day-divider"></div>
                    <div class="day-block">
                        <h4 class="day-title">Day 2</h4>
                        <div class="route-path">
                        Daan Park <span>⟶</span> Yongkang Street Area <span>⟶</span> Nishiki-Cho Japanese-style dormitories <span>⟶</span> Regent Taipei <span>⟶</span> Lantern Festival Taipei Expo Park Area
                        </div>
                    </div>
                    <div class="route-gallery">
                        <img src="../images/route/twodays_8-1.jpg" alt="景點" loading="lazy" decoding="async">
                        <img src="../images/route/twodays_8-2.jpg" alt="景點" loading="lazy" decoding="async">
                    </div>
                </div>

            </div>
        </div>

        <div id="trip3" class="tab-content">
            <div class="route-grid">

                <div class="route-card">
                    <div class="route-header">
                        <h3>Taipei Classic Travel</h3>
                        
                    </div>
                    
                    <div class="day-block">
                        <h4 class="day-title">Day 1</h4>
                        <div class="route-path">
                        Xinbeitou Hot Spring Area <span>⟶</span> Xinbeitou Shopping District <span>⟶</span> Taipei Children's Amusement Park <span>⟶</span> Ningxia Road Night Market <span>⟶</span> Lantern Festival Taipei Expo Park Area
                        </div>
                    </div>
                    <div class="day-divider"></div>
                    
                    <div class="day-block">
                        <h4 class="day-title">Day 2</h4>
                        <div class="route-path">
                        Shilin Official Residence <span>⟶</span> MRT Shilin Station Area <span>⟶</span> National Palace Museum <span>⟶</span> Ximending <span>⟶</span> Lantern Festival Ximen Area
                        </div>
                    </div>
                    <div class="day-divider"></div>

                    <div class="day-block">
                        <h4 class="day-title">Day 3</h4>
                        <div class="route-path">
                        Daan Park <span>⟶</span> Yongkang Street Area <span>⟶</span> Taipei 101 / Xinyi Public Assembly Hall / Songshan Cultural and Creative Park <span>⟶</span> Xinyi Shopping District <span>⟶</span> Songshan Cihui Temple
                        </div>
                    </div>
                    
                    <div class="route-gallery">
                        <img src="../images/route/threedays_1-1.jpg" alt="景點" loading="lazy" decoding="async">
                        <img src="../images/route/threedays_1-2.jpg" alt="景點" loading="lazy" decoding="async">
                        <img src="../images/route/threedays_1-3.jpg" alt="景點" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="route-card">
                    <div class="route-header">
                        <h3>Artistic Waters & Scholarly Walks</h3>
                        
                    </div>
                    
                    <div class="day-block">
                        <h4 class="day-title">Day 1</h4>
                        <div class="route-path">
                        Taipei Botanical Garden / Sun Yun-suan Memorial Museum <span>⟶</span> Nanmen Market <span>⟶</span> Chiang Kai-shek Memorial Hall / Nishiki-Cho Japanese-style dormitories / Fo Guang Shan Taipei Vihara <span>⟶</span> Raohe Street Tourist Night Market <span>⟶</span> Xikou Wharf and Rainbow Bridge
                        </div>
                    </div>
                    <div class="day-divider"></div>
                    
                    <div class="day-block">
                        <h4 class="day-title">Day 2</h4>
                        <div class="route-path">
                        Taipei Rose Garden (3/6-4/6 Taipei Rose Festival) <span>⟶</span> Qingguang Shopping District <span>⟶</span> Taipei Fine Arts Museum <span>⟶</span> Zhongshan N. Rd. / MAJI Square <span>⟶</span> Lantern Festival Taipei Expo Park Area
                        </div>
                    </div>
                    <div class="day-divider"></div>

                    <div class="day-block">
                        <h4 class="day-title">Day 3</h4>
                        <div class="route-path">
                        Treasure Hill Artist Village <span>⟶</span> Longquan Street Shopping Area <span>⟶</span> The Kishu An Forest of Literature <span>⟶</span> Gongguan Shopping District <span>⟶</span> Museum of Drinking Water
                        </div>
                    </div>

                    <div class="route-gallery">
                        <img src="../images/route/threedays_2-1.jpg" alt="景點" loading="lazy" decoding="async">
                        <img src="../images/route/threedays_2-2.jpg" alt="景點" loading="lazy" decoding="async">
                        <img src="../images/route/threedays_2-3.jpg" alt="景點" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="route-card">
                    <div class="route-header">
                        <h3>Eco-Adventures & Wildlife Wonders</h3>
                        
                    </div>
                    
                    <div class="day-block">
                        <h4 class="day-title">Day 1</h4>
                        <div class="route-path">
                        Zhuzihu (3/13-6/21 Zhuzihu Calla Lily & Hydrangea Festival) <span>⟶</span> Yangmingshan Scenic Restaurants <span>⟶</span> Xiaoyoukeng / Qingtiangang Grassland / Lengshuikeng hot spring area / Erziping Trail <span>⟶</span> The US Military's Cold War Housing Restaurants <span>⟶</span> Nightscape-viewing from Yangmingshan
                        </div>
                    </div>
                    <div class="day-divider"></div>
                    
                    <div class="day-block">
                        <h4 class="day-title">Day 2</h4>
                        <div class="route-path">
                        National Taiwan Museum / 228 Peace Park <span>⟶</span> Taipei Station Area / Nanyang Food Street <span>⟶</span> National Taiwan Museum Railway Department Park <span>⟶</span> Ximending <span>⟶</span> Lantern Festival Ximen Area
                        </div>
                    </div>
                    <div class="day-divider"></div>

                    <div class="day-block">
                        <h4 class="day-title">Day 3</h4>
                        <div class="route-path">
                        Taipei Zoo <span>⟶</span> Maokong Restaurants <span>⟶</span> Maokong Gondola <span>⟶</span> Jingmei Night Market <span>⟶</span> Xianjiyan Hiking Trail (Night View)
                        </div>
                    </div>

                    <div class="route-gallery">
                        <img src="../images/route/threedays_3-1.jpg" alt="景點" loading="lazy" decoding="async">
                        <img src="../images/route/threedays_3-2.jpg" alt="景點" loading="lazy" decoding="async">
                        <img src="../images/route/threedays_3-3.jpg" alt="景點" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="route-card">
                    <div class="route-header">
                        <h3>Hidden Gems & Secret Sanctuaries</h3>
                        
                    </div>
                    
                    <div class="day-block">
                        <h4 class="day-title">Day 1</h4>
                        <div class="route-path">
                        Xinzhongshan Linear Park <span>⟶</span> MRT Zhongshan Station Area <span>⟶</span> Museum of Contemporary Art Taipei/ Wenchang Temple <span>⟶</span> Ningxia Road Night Market <span>⟶</span> Lantern Festival Taipei Expo Park Area
                        </div>
                    </div>
                    <div class="day-divider"></div>
                    
                    <div class="day-block">
                        <h4 class="day-title">Day 2</h4>
                        <div class="route-path">
                        Daan Park (3/6-4/6 Taipei Azalea Festival) <span>⟶</span> Yongkang Street Area <span>⟶</span> Jianguo Holiday Flower Market / Nishiki-Cho Japanese-style dormitories <span>⟶</span> MRT Zhongshan Xinsheng Area <span>⟶</span> Huashan 1914 Creative Park / Guang Hua Digital Plaza and Syntrend Creative Park
                        </div>
                    </div>
                    <div class="day-divider"></div>

                    <div class="day-block">
                        <h4 class="day-title">Day 3</h4>
                        <div class="route-path">
                        Dahu Park <span>⟶</span> Xihu Shopping District <span>⟶</span> Miramar Entertainment Park <span>⟶</span> Marriott Taipei <span>⟶</span> Dajia Riverside Park
                        </div>
                    </div>

                    <div class="route-gallery">
                        <img src="../images/route/threedays_4-1.jpg" alt="景點" loading="lazy" decoding="async">
                        <img src="../images/route/threedays_4-2.jpg" alt="景點" loading="lazy" decoding="async">
                        <img src="../images/route/threedays_4-3.jpg" alt="景點" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="route-card">
                    <div class="route-header">
                        <h3>Trendy Wheels & Riverside Cycling</h3>
                        
                    </div>
                    
                    <div class="day-block">
                        <h4 class="day-title">Day 1</h4>
                        <div class="route-path">
                        National Palace Museum <span>⟶</span> MRT Shilin Station Area <span>⟶</span> Taipei Rose Garden (3/6-4/6 Taipei Rose Festival) <span>⟶</span> The Grand Hotel Taipei <span>⟶</span> Breeze Platform (Night View)
                        </div>
                    </div>
                    <div class="day-divider"></div>
                    
                    <div class="day-block">
                        <h4 class="day-title">Day 2</h4>
                        <div class="route-path">
                        Xinbeitou Hot Spring Area / Beitou Hot Spring Museum <span>⟶</span> Xinbeitou Shopping District <span>⟶</span> Taiwan Traditional Theatre Center <span>⟶</span> Shilin Night Market <span>⟶</span> Lantern Festival Taipei Expo Park Area
                        </div>
                    </div>
                    <div class="day-divider"></div>

                    <div class="day-block">
                        <h4 class="day-title">Day 3</h4>
                        <div class="route-path">
                        228 Peace Park / Taiwan Provincial City God Temple <span>⟶</span> Chengzhong Market / Yuanling Street <span>⟶</span> The Red House 16 Creative Boutique / Ximen Metro Mall <span>⟶</span> Ximending <span>⟶</span> Lantern Festival Ximen Area
                        </div>
                    </div>

                    <div class="route-gallery">
                        <img src="../images/route/threedays_5-1.jpg" alt="景點" loading="lazy" decoding="async">
                        <img src="../images/route/threedays_5-2.jpg" alt="景點" loading="lazy" decoding="async">
                        <img src="../images/route/threedays_5-3.jpg" alt="景點" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="route-card">
                    <div class="route-header">
                        <h3>Yuanshan Mountain & Ancient Alleys</h3>
                        
                    </div>
                    
                    <div class="day-block">
                        <h4 class="day-title">Day 1</h4>
                        <div class="route-path">
                        Baishihu Suspension Bridge / Bishan Campground Skywalk <span>⟶</span> MRT Neihu Station Area <span>⟶</span> Dahu Park <span>⟶</span> Miramar Entertainment Park <span>⟶</span> Mitsui Shopping Park LaLaport Nangang
                        </div>
                    </div>
                    <div class="day-divider"></div>
                    
                    <div class="day-block">
                        <h4 class="day-title">Day 2</h4>
                        <div class="route-path">
                        Taipei Music Center <span>⟶</span> Nangang Software Park <span>⟶</span> Songshan Cultural and Creative Park <span>⟶</span> Eastern District <span>⟶</span> Raohe Street Tourist Night Market / Rainbow Bridge
                        </div>
                    </div>
                    <div class="day-divider"></div>

                    <div class="day-block">
                        <h4 class="day-title">Day 3</h4>
                        <div class="route-path">
                        Postal Museum <span>⟶</span> Guling Street <span>⟶</span> National Museum of History <span>⟶</span> South Airport Night Market <span>⟶</span> Lantern Festival Ximen Area
                        </div>
                    </div>

                    <div class="route-gallery">
                        <img src="../images/route/threedays_6-1.jpg" alt="景點" loading="lazy" decoding="async">
                        <img src="../images/route/threedays_6-2.jpg" alt="景點" loading="lazy" decoding="async">
                        <img src="../images/route/threedays_6-3.jpg" alt="景點" loading="lazy" decoding="async">
                    </div>
                </div>

            </div>
        </div>

    </section>
        
    </main>

    <?php include 'footer.php'; ?>
    <script src="../js/script.js"></script>
</body>
</html>