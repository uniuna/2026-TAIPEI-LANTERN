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

        <section>
        <h2 class="section-title">旅程推薦</h2>
    
        <div class="tab-buttons">
            <button class="tab-btn active" onclick="openTab(event, 'trip1')">一日遊</button>
            <button class="tab-btn" onclick="openTab(event, 'trip2')">二日遊</button>
            <button class="tab-btn" onclick="openTab(event, 'trip3')">三日遊</button>
        </div>

        <div id="trip1" class="tab-content active">
            <div class="route-grid">
                
                <div class="route-card">
                    <div class="route-header">
                        <h3>城南歷史之旅</h3>
                        
                    </div>
                    <div class="route-path">
                        中正紀念堂／國立臺灣博物館南門館 <span>⟶</span> 南門市場 <span>⟶</span> 植物園／孫運璿科技•人文紀念館／郵政博物館 <span>⟶</span> 南機場夜市 <span>⟶</span> 西門展區賞燈
                    </div>
                    <div class="route-gallery">
                        <img src="images/route/oneday_1.jpg" alt="景點" loading="lazy" decoding="async">
                    </div>
                </div>

                <div class="route-card">
                    <div class="route-header">
                        <h3>舊城書香之行</h3>
                        
                    </div>
                    <div class="route-path">
                        國立臺灣博物館 <span>⟶</span> 榮町商圈 <span>⟶</span> 重慶南路書店商圈／北門相機商圈 <span>⟶</span> 西門町 <span>⟶</span> 西門展區賞燈
                    </div>
                    <div class="route-gallery">
                        <img src="images/route/oneday_2.jpg" alt="景點" loading="lazy" decoding="async">
                    </div>
                </div>

                <div class="route-card">
                    <div class="route-header">
                        <h3>草山童趣之旅</h3>
                        
                    </div>
                    <div class="route-path">
                        陽明山擎天崗、冷水坑 <span>⟶</span> 捷運士林站周邊 <span>⟶</span> 臺北市立兒童新樂園 <span>⟶</span> 大同酒泉街／花博集食行樂 <span>⟶</span> 花博展區賞燈
                    </div>
                    <div class="route-gallery">
                        <img src="images/route/oneday_3.jpg" alt="景點" loading="lazy" decoding="async">
                    </div>
                </div>

                <div class="route-card">
                    <div class="route-header">
                        <h3>山水花卉之旅</h3>
                        
                    </div>
                    <div class="route-path">
                        白石湖吊橋／碧山露營場天空步道 <span>⟶</span> 美麗華百樂園 <span>⟶</span> 士林官邸 <span>⟶</span> 士林夜市 <span>⟶</span> 花博展區賞燈
                    </div>
                    <div class="route-gallery">
                        <img src="images/route/oneday_4.jpg" alt="景點" loading="lazy" decoding="async">
                    </div>
                </div>

                <div class="route-card">
                    <div class="route-header">
                        <h3>當代文青之行</h3>
                        
                    </div>
                    <div class="route-path">
                        台北當代藝術館 <span>⟶</span> 中山北路／條通商圈 <span>⟶</span> 台北之家／中山赤峰街／誠品南西店 <span>⟶</span> 晴光商圈／中山商圈 <span>⟶</span> 花博展區賞燈
                    </div>
                    <div class="route-gallery">
                        <img src="images/route/oneday_5.jpg" alt="景點" loading="lazy" decoding="async">
                    </div>
                </div>

                <div class="route-card">
                    <div class="route-header">
                        <h3>台北祈福之行</h3>
                        
                    </div>
                    <div class="route-path">
                        霞海城隍廟 <span>⟶</span> 迪化街 <span>⟶</span> 大龍峒保安宮 <span>⟶</span> 大龍街夜市 <span>⟶</span> 花博展區賞燈
                    </div>
                    <div class="route-gallery">
                        <img src="images/route/oneday_6.jpg" alt="景點" loading="lazy" decoding="async">
                    </div>
                </div>

            </div>
        </div>

        <div id="trip2" class="tab-content">
            <div class="route-grid">

                <div class="route-card">
                    <div class="route-header">
                        <h3>文創園區漫遊行</h3>
                        
                    </div>
                    <div class="day-block">
                        <h4 class="day-title">Day 1</h4>
                        <div class="route-path">
                            松山文創園區 <span>⟶</span> 捷運忠孝敦化 - 忠孝復興站周邊/東區商圈 <span>⟶</span> 華山1914文創園區 <span>⟶</span> 西門町 <span>⟶</span> 西門展區賞燈
                        </div>
                    </div>
                    <div class="day-divider"></div>
                    <div class="day-block">
                        <h4 class="day-title">Day 2</h4>
                        <div class="route-path">
                            法鼓山農禪寺 <span>⟶</span> 石牌商圈 <span>⟶</span> 圓山水神社／微風平台／森林方舟 <span>⟶</span> 士林夜市 <span>⟶</span> 花博展區賞燈
                        </div>
                    </div>
                    <div class="route-gallery">
                        <img src="images/route/twodays_1-1.jpg" alt="景點" loading="lazy" decoding="async">
                        <img src="images/route/twodays_1-2.jpg" alt="景點" loading="lazy" decoding="async">
                    </div>
                </div>

                <div class="route-card">
                    <div class="route-header">
                        <h3>漫步台北深度之旅</h3>
                        
                    </div>
                    <div class="day-block">
                        <h4 class="day-title">Day 1</h4>
                        <div class="route-path">
                            大安森林公園 <span>⟶</span> 永康街 <span>⟶</span> 紀州庵文學森林 <span>⟶</span> 師大龍泉商圈 <span>⟶</span> 西門展區賞燈
                        </div>
                    </div>
                    <div class="day-divider"></div>
                    <div class="day-block">
                        <h4 class="day-title">Day 2</h4>
                        <div class="route-path">
                            松山文創園區／臺北大巨蛋 <span>⟶</span> 捷運國父紀念館周邊 <span>⟶</span> 民生社區咖啡館／佛光山台北道場 <span>⟶</span> 饒河夜市 <span>⟶</span> 松山慈祐宮／錫口碼頭彩虹橋
                        </div>
                    </div>
                    <div class="route-gallery">
                        <img src="images/route/twodays_2-1.jpg" alt="景點" loading="lazy" decoding="async">
                        <img src="images/route/twodays_2-2.jpg" alt="景點" loading="lazy" decoding="async">
                    </div>
                </div>

                <div class="route-card">
                    <div class="route-header">
                        <h3>花花世界藝文之旅</h3>
                        
                    </div>
                    <div class="day-block">
                        <h4 class="day-title">Day 1</h4>
                        <div class="route-path">
                            士林官邸 (2/26-3/8鬱金香展) <span>⟶</span> 天母商圈 <span>⟶</span> 故宮博物院<span>⟶</span> 西門町 <span>⟶</span> 西門展區賞燈／光華數位新天地
                        </div>
                    </div>
                    <div class="day-divider"></div>
                    <div class="day-block">
                        <h4 class="day-title">Day 2</h4>
                        <div class="route-path">
                            台北玫瑰園 (3/6-4/6玫瑰展) <span>⟶</span> 行天宮周邊 <span>⟶</span> 袖珍博物館 <span>⟶</span> 吉林路商圈 <span>⟶</span> 三創生活園區
                        </div>
                    </div>
                    <div class="route-gallery">
                        <img src="images/route/twodays_3-1.jpg" alt="景點" loading="lazy" decoding="async">
                        <img src="images/route/twodays_3-2.jpg" alt="景點" loading="lazy" decoding="async">
                    </div>
                </div>

                <div class="route-card">
                    <div class="route-header">
                        <h3>老城古蹟探險</h3>
                        
                    </div>
                    <div class="day-block">
                        <h4 class="day-title">Day 1</h4>
                        <div class="route-path">
                             林安泰古厝 <span>⟶</span> 中山北路／條通商圈 <span>⟶</span> 台北當代藝術館 <span>⟶</span> 迪化街 <span>⟶</span> 大稻埕貨櫃市集
                        </div>
                    </div>
                    <div class="day-divider"></div>
                    <div class="day-block">
                        <h4 class="day-title">Day 2</h4>
                        <div class="route-path">
                             艋舺龍山寺／剝皮寮 <span>⟶</span> 新富町與三水街市場 <span>⟶</span> 台北天后宮／西本願寺／中山堂／台灣省城隍廟 <span>⟶</span> 西門町 <span>⟶</span> 西門展區賞燈
                        </div>
                    </div>
                    <div class="route-gallery">
                        <img src="images/route/twodays_4-1.jpg" alt="景點" loading="lazy" decoding="async">
                        <img src="images/route/twodays_4-2.jpg" alt="景點" loading="lazy" decoding="async">
                    </div>
                </div>

                <div class="route-card">
                    <div class="route-header">
                        <h3>廟宇時尚之行</h3>
                        
                    </div>
                    <div class="day-block">
                        <h4 class="day-title">Day 1</h4>
                        <div class="route-path">
                            台北孔廟／大龍峒保安宮 <span>⟶</span> 大同酒泉街／花博集食行樂 <span>⟶</span> 中山商圈／景福宮 <span>⟶</span> 雙城街夜市 <span>⟶</span> 花博展區賞燈
                        </div>
                    </div>
                    <div class="day-divider"></div>
                    <div class="day-block">
                        <h4 class="day-title">Day 2</h4>
                        <div class="route-path">
                            四四南村 <span>⟶</span> 信義商圈 <span>⟶</span> 台北 101 <span>⟶</span> 信義區百貨公司餐廳 <span>⟶</span> 西門展區賞燈
                        </div>
                    </div>
                    <div class="route-gallery">
                        <img src="images/route/twodays_5-1.jpg" alt="景點" loading="lazy" decoding="async">
                        <img src="images/route/twodays_5-2.jpg" alt="景點" loading="lazy" decoding="async">
                    </div>
                </div>

                <div class="route-card">
                    <div class="route-header">
                        <h3>山與美學之旅</h3>
                        
                    </div>
                    <div class="day-block">
                        <h4 class="day-title">Day 1</h4>
                        <div class="route-path">
                            陽明公園 (2/6-3/16陽明山花季) <span>⟶</span> 美軍宿舍群 <span>⟶</span> 台北兒童新樂園／國立臺灣科學教育館 <span>⟶</span> 圓山大飯店 <span>⟶</span> 微風觀景平台看夜景
                        </div>
                    </div>
                    <div class="day-divider"></div>
                    <div class="day-block">
                        <h4 class="day-title">Day 2</h4>
                        <div class="route-path">
                            士林官邸 (2/26-3/8鬱金香展) <span>⟶</span> 士東市場 <span>⟶</span> 大葉高島屋百貨 <span>⟶</span> 士林夜市 <span>⟶</span> 花博展區賞燈
                        </div>
                    </div>
                    <div class="route-gallery">
                        <img src="images/route/twodays_6-1.jpg" alt="景點" loading="lazy" decoding="async">
                        <img src="images/route/twodays_6-2.jpg" alt="景點" loading="lazy" decoding="async">
                    </div>
                </div>

                <div class="route-card">
                    <div class="route-header">
                        <h3>溫泉瑰寶探索之旅</h3>
                        
                    </div>
                    <div class="day-block">
                        <h4 class="day-title">Day 1</h4>
                        <div class="route-path">
                            自來水博物館 <span>⟶</span> 景美商圈 <span>⟶</span> 寶藏巖國際藝術村 <span>⟶</span> 公館商圈 <span>⟶</span> 公館水岸廣場
                        </div>
                    </div>
                    <div class="day-divider"></div>
                    <div class="day-block">
                        <h4 class="day-title">Day 2</h4>
                        <div class="route-path">
                            北投泡湯時光 <span>⟶</span> 新北投商圈 <span>⟶</span> 中心新村／地熱谷／北投溫泉博物館 <span>⟶</span> 石牌商圈 <span>⟶</span> 花博展區賞燈
                        </div>
                    </div>
                    <div class="route-gallery">
                        <img src="images/route/twodays_7-1.jpg" alt="景點" loading="lazy" decoding="async">
                        <img src="images/route/twodays_7-2.jpg" alt="景點" loading="lazy" decoding="async">
                    </div>
                </div>

                <div class="route-card">
                    <div class="route-header">
                        <h3>都會森呼吸之行</h3>
                        
                    </div>
                    <div class="day-block">
                        <h4 class="day-title">Day 1</h4>
                        <div class="route-path">
                            國父紀念館 <span>⟶</span> 松山文創園區 <span>⟶</span> 台北小巨蛋冰宮 <span>⟶</span> 遼寧街夜市 <span>⟶</span> 捷運南京復興站周邊
                        </div>
                    </div>
                    <div class="day-divider"></div>
                    <div class="day-block">
                        <h4 class="day-title">Day 2</h4>
                        <div class="route-path">
                            大安森林公園 <span>⟶</span> 永康街 <span>⟶</span> 錦町日式宿舍群 <span>⟶</span> 晶華酒店 <span>⟶</span> 花博展區賞燈
                        </div>
                    </div>
                    <div class="route-gallery">
                        <img src="images/route/twodays_8-1.jpg" alt="景點" loading="lazy" decoding="async">
                        <img src="images/route/twodays_8-2.jpg" alt="景點" loading="lazy" decoding="async">
                    </div>
                </div>

            </div>
        </div>

        <div id="trip3" class="tab-content">
            <div class="route-grid">

                <div class="route-card">
                    <div class="route-header">
                        <h3>台北經典全攻略</h3>
                        
                    </div>
                    
                    <div class="day-block">
                        <h4 class="day-title">Day 1</h4>
                        <div class="route-path">
                            北投溫泉區 <span>⟶</span> 新北投商圈 <span>⟶</span> 台北兒童新樂園 <span>⟶</span> 寧夏夜市 <span>⟶</span> 花博展區賞燈 
                        </div>
                    </div>
                    <div class="day-divider"></div>
                    
                    <div class="day-block">
                        <h4 class="day-title">Day 2</h4>
                        <div class="route-path">
                             士林官邸 <span>⟶</span> 捷運士林站周邊 <span>⟶</span> 故宮博物院 <span>⟶</span> 西門町 <span>⟶</span> 西門展區賞燈
                        </div>
                    </div>
                    <div class="day-divider"></div>

                    <div class="day-block">
                        <h4 class="day-title">Day 3</h4>
                        <div class="route-path">
                             大安森林公園 <span>⟶</span> 永康街 <span>⟶</span> 台北101／四四南村／松山文創園區 <span>⟶</span> 信義區百貨公司餐廳 <span>⟶</span> 松山慈惠堂
                        </div>
                    </div>
                    
                    <div class="route-gallery">
                        <img src="images/route/threedays_1-1.jpg" alt="景點" loading="lazy" decoding="async">
                        <img src="images/route/threedays_1-2.jpg" alt="景點" loading="lazy" decoding="async">
                        <img src="images/route/threedays_1-3.jpg" alt="景點" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="route-card">
                    <div class="route-header">
                        <h3>水岸學風之旅</h3>
                        
                    </div>
                    
                    <div class="day-block">
                        <h4 class="day-title">Day 1</h4>
                        <div class="route-path">
                            台北植物園／孫運璿科技•人文紀念館 <span>⟶</span> 南門市場 <span>⟶</span> 中正紀念堂／錦町日式宿舍群／佛光山台北道場 <span>⟶</span> 饒河街夜市 <span>⟶</span> 錫口碼頭與彩虹橋 
                        </div>
                    </div>
                    <div class="day-divider"></div>
                    
                    <div class="day-block">
                        <h4 class="day-title">Day 2</h4>
                        <div class="route-path">
                             台北玫瑰園 (3/6-4/6玫瑰展) <span>⟶</span> 晴光市場 <span>⟶</span> 台北美術館 <span>⟶</span> 中山北路／花博集食行樂 <span>⟶</span> 花博展區賞燈
                        </div>
                    </div>
                    <div class="day-divider"></div>

                    <div class="day-block">
                        <h4 class="day-title">Day 3</h4>
                        <div class="route-path">
                             寶藏巖國際藝術村 <span>⟶</span> 師大龍泉商圈 <span>⟶</span> 紀州庵文學森林 <span>⟶</span> 公館商圈 <span>⟶</span> 自來水博物館
                        </div>
                    </div>

                    <div class="route-gallery">
                        <img src="images/route/threedays_2-1.jpg" alt="景點" loading="lazy" decoding="async">
                        <img src="images/route/threedays_2-2.jpg" alt="景點" loading="lazy" decoding="async">
                        <img src="images/route/threedays_2-3.jpg" alt="景點" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="route-card">
                    <div class="route-header">
                        <h3>自然生態冒險之旅</h3>
                        
                    </div>
                    
                    <div class="day-block">
                        <h4 class="day-title">Day 1</h4>
                        <div class="route-path">
                            陽明山竹子湖 (3/13-6/21海芋季、繡球花季) <span>⟶</span> 陽明山景觀餐廳 <span>⟶</span> 小油坑／擎天崗／冷水坑／二子坪 <span>⟶</span> 美軍宿舍群餐廳 <span>⟶</span> 文化大學後山夜景 
                        </div>
                    </div>
                    <div class="day-divider"></div>
                    
                    <div class="day-block">
                        <h4 class="day-title">Day 2</h4>
                        <div class="route-path">
                             國立台灣博物館／二二八公園 <span>⟶</span> 台北車站周邊／南陽街美食 <span>⟶</span> 國立臺灣博物館鐵道部園區 <span>⟶</span> 西門町 <span>⟶</span> 西門展區賞燈
                        </div>
                    </div>
                    <div class="day-divider"></div>

                    <div class="day-block">
                        <h4 class="day-title">Day 3</h4>
                        <div class="route-path">
                             台北市立動物園 <span>⟶</span> 貓空景觀餐廳 <span>⟶</span> 貓空纜車 <span>⟶</span> 景美夜市 <span>⟶</span> 景美仙跡岩夜景
                        </div>
                    </div>

                    <div class="route-gallery">
                        <img src="images/route/threedays_3-1.jpg" alt="景點" loading="lazy" decoding="async">
                        <img src="images/route/threedays_3-2.jpg" alt="景點" loading="lazy" decoding="async">
                        <img src="images/route/threedays_3-3.jpg" alt="景點" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="route-card">
                    <div class="route-header">
                        <h3>秘境古蹟品味之旅</h3>
                        
                    </div>
                    
                    <div class="day-block">
                        <h4 class="day-title">Day 1</h4>
                        <div class="route-path">
                            台北孔廟／大龍峒保安宮 <span>⟶</span> 大龍峒商圈 <span>⟶</span> 花博公園／臨濟護國禪寺 <span>⟶</span> 花博公園／臨濟護國禪寺 <span>⟶</span> 花博展區賞燈 
                        </div>
                    </div>
                    <div class="day-divider"></div>
                    
                    <div class="day-block">
                        <h4 class="day-title">Day 2</h4>
                        <div class="route-path">
                             白石湖吊橋／碧山露營場天空步道 <span>⟶</span> 捷運內湖站周邊 <span>⟶</span> 大湖公園 <span>⟶</span> 美麗華百樂園 <span>⟶</span> 南港Lalaport
                        </div>
                    </div>
                    <div class="day-divider"></div>

                    <div class="day-block">
                        <h4 class="day-title">Day 3</h4>
                        <div class="route-path">
                             郵政博物館 <span>⟶</span> 牯嶺街商圈 <span>⟶</span> 國立歷史博物館 <span>⟶</span> 南機場夜市 <span>⟶</span> 西門展區賞燈
                        </div>
                    </div>

                    <div class="route-gallery">
                        <img src="images/route/threedays_4-1.jpg" alt="景點" loading="lazy" decoding="async">
                        <img src="images/route/threedays_4-2.jpg" alt="景點" loading="lazy" decoding="async">
                        <img src="images/route/threedays_4-3.jpg" alt="景點" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="route-card">
                    <div class="route-header">
                        <h3>潮流單車輕旅行</h3>
                        
                    </div>
                    
                    <div class="day-block">
                        <h4 class="day-title">Day 1</h4>
                        <div class="route-path">
                            心中山線形公園 <span>⟶</span> 中山商圈 <span>⟶</span> 台北當代藝術館／文昌宮 <span>⟶</span> 寧夏夜市 <span>⟶</span> 花博展區賞燈 
                        </div>
                    </div>
                    <div class="day-divider"></div>
                    
                    <div class="day-block">
                        <h4 class="day-title">Day 2</h4>
                        <div class="route-path">
                             大安森林公園 (3/6-4/6杜鵑花季) <span>⟶</span> 永康街 <span>⟶</span> 建國花市(六日營業)／錦町日式宿舍群 <span>⟶</span> 捷運忠孝新生站周邊 <span>⟶</span> 華山1914文創園區／三創生活園區／光華數位新天地
                        </div>
                    </div>
                    <div class="day-divider"></div>

                    <div class="day-block">
                        <h4 class="day-title">Day 3</h4>
                        <div class="route-path">
                             大湖公園 <span>⟶</span> 西湖商圈 <span>⟶</span> 美麗華百樂園 <span>⟶</span> 萬豪酒店 <span>⟶</span> 大佳河濱公園騎單車
                        </div>
                    </div>

                    <div class="route-gallery">
                        <img src="images/route/threedays_5-1.jpg" alt="景點" loading="lazy" decoding="async">
                        <img src="images/route/threedays_5-2.jpg" alt="景點" loading="lazy" decoding="async">
                        <img src="images/route/threedays_5-3.jpg" alt="景點" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="route-card">
                    <div class="route-header">
                        <h3>圓山之巔與城中歷史沉浸行</h3>
                        
                    </div>
                    
                    <div class="day-block">
                        <h4 class="day-title">Day 1</h4>
                        <div class="route-path">
                            故宮博物院 <span>⟶</span> 捷運士林站周邊 <span>⟶</span> 臺北玫瑰園 (3/6-4/6玫瑰展) <span>⟶</span> 圓山大飯店 <span>⟶</span> 微風觀景平台看夜景 
                        </div>
                    </div>
                    <div class="day-divider"></div>
                    
                    <div class="day-block">
                        <h4 class="day-title">Day 2</h4>
                        <div class="route-path">
                             北投湯屋泡湯／北投溫泉博物館 <span>⟶</span> 新北投商圈 <span>⟶</span> 臺灣戲曲中心 <span>⟶</span> 士林夜市 <span>⟶</span> 花博展區賞燈
                    </div>
                    <div class="day-divider"></div>

                    <div class="day-block">
                        <h4 class="day-title">Day 3</h4>
                        <div class="route-path">
                             二二八公園／臺灣省城隍廟 <span>⟶</span> 城中市場／沅陵街 <span>⟶</span> 西門紅樓16工坊／西門地下街 <span>⟶</span> 西門町 <span>⟶</span> 西門展區賞燈
                        </div>
                    </div>

                    <div class="route-gallery">
                        <img src="images/route/threedays_6-1.jpg" alt="景點" loading="lazy" decoding="async">
                        <img src="images/route/threedays_6-2.jpg" alt="景點" loading="lazy" decoding="async">
                        <img src="images/route/threedays_6-3.jpg" alt="景點" loading="lazy" decoding="async">
                    </div>
                </div>
            </div>
        </div>
    </section>

    </main>

    <?php include 'footer.php'; ?>
    <script src="js/script.js"></script>
</body>
</html>