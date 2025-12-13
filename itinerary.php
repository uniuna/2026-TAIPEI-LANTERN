<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <?php include 'header.php'; ?>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/pages.css">
</head>
<body>
    <?php include 'nav.php'; ?>

    <main class="container" style="padding-top: 120px; min-height: 80vh;">

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
                        <h3>萬華時光漫步</h3>
                        <span class="tag">懷舊之旅</span>
                    </div>
                    <div class="route-path">
                        日善（防空洞）公園 <span>⟶</span> 糖廊文化園區 <span>⟶</span> 龍山文創基地 <span>⟶</span> 剝皮寮歷史街區 <span>⟶</span> 新富町文化市場 <span>⟶</span> 台北燈節西門展區 <span>⟶</span> 西門町萬年商業大樓
                    </div>
                </div>

                <div class="route-card">
                    <div class="route-header">
                        <h3>在地美食圖鑑</h3>
                        <span class="tag">吃貨必收</span>
                    </div>
                    <div class="route-path">
                        二二八公園 <span>⟶</span> 國立臺灣博物館 <span>⟶</span> 公園號酸梅湯 <span>⟶</span> 桃源街牛肉麵 <span>⟶</span> 劉山東小吃店 <span>⟶</span> 雪王冰淇淋 <span>⟶</span> 主燈區（中山堂） <span>⟶</span> 天天利美食坊 <span>⟶</span> 阿宗麵線 <span>⟶</span> 西門町美食 <span>⟶</span> 台北燈節西門展區
                    </div>
                </div>

                <div class="route-card">
                    <div class="route-header">
                        <h3>悠遊藝文角落</h3>
                        <span class="tag">文青散策</span>
                    </div>
                    <div class="route-path">
                        捷運中山站 <span>⟶</span> 赤峰街咖啡廳／選品店 <span>⟶</span> 光點台北（台北之家） <span>⟶</span> 新中山線形公園 <span>⟶</span> 中山地下街誠品書店 <span>⟶</span> 順益台灣美術館 <span>⟶</span> 台北燈節西門展區
                    </div>
                </div>
            </div>
        </div>

        <div id="trip2" class="tab-content">
            <div class="route-grid">
                <div class="route-card multi-day">
                    <div class="route-header">
                        <h3>台北順遊行 (經典二日遊)</h3>
                        <span class="tag">推薦行程</span>
                    </div>
                    
                    <div class="day-block">
                        <h4 class="day-title">Day 1：萬華時光漫步</h4>
                        <div class="route-path">
                            日善（防空洞）公園 <span>⟶</span> 糖廊文化園區 <span>⟶</span> 龍山文創基地 <span>⟶</span> 剝皮寮歷史街區 <span>⟶</span> 新富町文化市場 <span>⟶</span> 台北燈節西門展區 <span>⟶</span> 西門町萬年商業大樓
                        </div>
                    </div>

                    <div class="day-divider"></div>

                    <div class="day-block">
                        <h4 class="day-title">Day 2：在地美食圖鑑</h4>
                        <div class="route-path">
                            二二八公園 <span>⟶</span> 國立臺灣博物館 <span>⟶</span> 公園號酸梅湯 <span>⟶</span> 桃源街牛肉麵 <span>⟶</span> 劉山東小吃店 <span>⟶</span> 雪王冰淇淋 <span>⟶</span> 主燈區（中山堂） <span>⟶</span> 天天利美食坊 <span>⟶</span> 阿宗麵線 <span>⟶</span> 西門町美食 <span>⟶</span> 台北燈節西門展區
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="trip3" class="tab-content">
            <div class="route-grid">
                <div class="route-card multi-day">
                    <div class="route-header">
                        <h3>台北順遊行 (深度三日遊)</h3>
                        <span class="tag">全攻略</span>
                    </div>

                    <div class="day-block">
                        <h4 class="day-title">Day 1：萬華時光漫步</h4>
                        <div class="route-path">
                            日善（防空洞）公園 <span>⟶</span> 糖廊文化園區 <span>⟶</span> 龍山文創基地 <span>⟶</span> 剝皮寮歷史街區 <span>⟶</span> 新富町文化市場 <span>⟶</span> 台北燈節西門展區 <span>⟶</span> 西門町萬年商業大樓
                        </div>
                    </div>

                    <div class="day-divider"></div>

                    <div class="day-block">
                        <h4 class="day-title">Day 2：在地美食圖鑑</h4>
                        <div class="route-path">
                            二二八公園 <span>⟶</span> 國立臺灣博物館 <span>⟶</span> 公園號酸梅湯 <span>⟶</span> 桃源街牛肉麵 <span>⟶</span> 劉山東小吃店 <span>⟶</span> 雪王冰淇淋 <span>⟶</span> 主燈區（中山堂） <span>⟶</span> 天天利美食坊 <span>⟶</span> 阿宗麵線 <span>⟶</span> 西門町美食 <span>⟶</span> 台北燈節西門展區
                        </div>
                    </div>

                    <div class="day-divider"></div>

                    <div class="day-block">
                        <h4 class="day-title">Day 3：悠遊藝文角落</h4>
                        <div class="route-path">
                            捷運中山站 <span>⟶</span> 赤峰街咖啡廳／選品店 <span>⟶</span> 光點台北（台北之家） <span>⟶</span> 新中山線形公園 <span>⟶</span> 中山地下街誠品書店 <span>⟶</span> 順益台灣美術館 <span>⟶</span> 台北燈節西門展區
                        </div>
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