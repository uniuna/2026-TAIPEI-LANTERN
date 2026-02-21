<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <?php include 'header.php'; ?>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/pages.css">
</head>
<body>
    <?php include 'nav.php'; ?>

    <main class="container events-main">
        <section>
            <h2 class="section-title">精彩活動</h2>
            
            <div class="tab-buttons events-tab-wrapper">
                <!-- <button class="tab-btn active" onclick="openTab(event, 'event1')">開幕式</button> -->
                <button class="tab-btn active" onclick="openTab(event, 'event2')">花博舞台活動</button>
                <button class="tab-btn" onclick="openTab(event, 'event3')">十二行政區活動</button>
                <button class="tab-btn" onclick="openTab(event, 'event4')">小提燈活動</button>
                <button class="tab-btn" onclick="openTab(event, 'event5')">主題日活動</button>
            </div>

<!-- 開幕式 -->
            <div id="event1" class="tab-content">
                <section class="coming-soon-block">
                    <h3 class="coming-soon-title">敬請期待...</h3>
                    <img src="images/comingsoon.jpg" alt="敬請期待" class="coming-soon-img">
                </section>
            </div>
<!-- 花博舞台活動 -->
            <div id="event2" class="tab-content active">
                
                <div class="stage-intro-box">
                    <div class="stage-intro-row">
                        <span class="stage-intro-label">日期：</span>
                        <span>2026/02/27 ~ 03/15 精采演出等你來看!</span>
                    </div>
                    <!-- <div class="stage-intro-row">
                        <span class="stage-intro-label">時間：</span>
                        <span>19:00 - 21:00</span>
                    </div> -->
                    <div class="stage-intro-row">
                        <span class="stage-intro-label">地點：</span>
                        <span>花博展區主舞台</span>
                    </div>
                </div>

                <div class="events-masonry-grid">

                    <div class="day-group-card">
                        <h3 class="event-date-title">2026/02/27 (五)</h3>
                        <div class="event-list">
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">14:05-14:35</div>
                                    <div class="event-details"><h3 class="event-title">張慶琳 Ana</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">14:45-15:15</div>
                                    <div class="event-details"><h3 class="event-title">搖滾童謠</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">15:25-15:55</div>
                                    <div class="event-details"><h3 class="event-title">愛客樂 iColor</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">18:00-18:30</div>
                                    <div class="event-details"><h3 class="event-title">靜岡縣濱松市</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:00-19:03</div>
                                    <div class="event-details"><h3 class="event-title">主燈秀</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:03-19:30</div>
                                    <div class="event-details"><h3 class="event-title">侏羅紀世界 恐龍大冒險</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:30-19:33</div>
                                    <div class="event-details"><h3 class="event-title">主燈秀</h3></div>
                                </div>
                            </div>
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:33-19:45</div>
                                    <div class="event-details"><h3 class="event-title">侏羅紀世界 恐龍大冒險</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:45-20:00</div>
                                    <div class="event-details"><h3 class="event-title">Justin魔術秀</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:00-20:03</div>
                                    <div class="event-details"><h3 class="event-title">主燈秀</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:03-20:20</div>
                                    <div class="event-details"><h3 class="event-title">Justin魔術秀</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:20-20:30</div>
                                    <div class="event-details"><h3 class="event-title">幻光馬戲團</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:30-20:33</div>
                                    <div class="event-details"><h3 class="event-title">主燈秀</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:33-21:00</div>
                                    <div class="event-details"><h3 class="event-title">幻光馬戲團</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="day-group-card">
                        <h3 class="event-date-title">2026/02/28 (六)</h3>
                        <div class="event-list">
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">14:00-14:10</div>
                                    <div class="event-details"><h3 class="event-title">馬太鞍青年團 (祈福、迎賓舞)</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">14:15-14:40</div>
                                    <div class="event-details"><h3 class="event-title">AZ 李孝祖</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">14:50-15:20</div>
                                    <div class="event-details"><h3 class="event-title">創作歌手 少浪</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">15:30-15:50</div>
                                    <div class="event-details"><h3 class="event-title">李明德</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">18:30-18:38</div>
                                    <div class="event-details"><h3 class="event-title">中山商圈-仙氣飄飄甜點秀</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">18:40-19:00</div>
                                    <div class="event-details"><h3 class="event-title">中山商圈-仙氣飄飄甜點秀</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:00-19:03</div>
                                    <div class="event-details"><h3 class="event-title">主燈秀</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:03-19:30</div>
                                    <div class="event-details"><h3 class="event-title">Smile Dash-搖滾樂團</h3></div>
                                </div>
                            </div>
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:30-19:33</div>
                                    <div class="event-details"><h3 class="event-title">主燈秀</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:33-19:40</div>
                                    <div class="event-details"><h3 class="event-title">Smile Dash-搖滾樂團</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:40-20:00</div>
                                    <div class="event-details"><h3 class="event-title">來者何人-台北巷弄的嘻哈樂團</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:00-20:03</div>
                                    <div class="event-details"><h3 class="event-title">主燈秀</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:03-20:20</div>
                                    <div class="event-details"><h3 class="event-title">來者何人-台北巷弄的嘻哈樂團</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:20-20:30</div>
                                    <div class="event-details"><h3 class="event-title">DrunkMonk撞克茫客-<br>硬式搖滾樂團</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:30-20:33</div>
                                    <div class="event-details"><h3 class="event-title">主燈秀</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:33-21:00</div>
                                    <div class="event-details"><h3 class="event-title">DrunkMonk撞克茫客-<br>硬式搖滾樂團</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="day-group-card">
                        <h3 class="event-date-title">2026/03/01 (日)</h3>
                        <div class="event-list">
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">14:00-14:10</div>
                                    <div class="event-details"><h3 class="event-title">樂波太鼓 (開場)</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">14:10-14:50</div>
                                    <div class="event-details"><h3 class="event-title">台北箏樂團</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">15:00-15:45</div>
                                    <div class="event-details"><h3 class="event-title">林語菲</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">15:45-16:00</div>
                                    <div class="event-details"><h3 class="event-title">歌曲接龍</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">16:30-17:00</div>
                                    <div class="event-details"><h3 class="event-title">熊讚和傑米</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:00-19:03</div>
                                    <div class="event-details"><h3 class="event-title">主燈秀</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:03-19:30</div>
                                    <div class="event-details"><h3 class="event-title">超級紅人榜-張嘉芯</h3></div>
                                </div>
                            </div>
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:30-19:33</div>
                                    <div class="event-details"><h3 class="event-title">主燈秀</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:33-20:00</div>
                                    <div class="event-details"><h3 class="event-title">精靈男友-吳胤呈</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:00-20:03</div>
                                    <div class="event-details"><h3 class="event-title">主燈秀</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:03-20:30</div>
                                    <div class="event-details"><h3 class="event-title">張菡&DJ朱全</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:30-20:33</div>
                                    <div class="event-details"><h3 class="event-title">主燈秀</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:33-21:00</div>
                                    <div class="event-details"><h3 class="event-title">知名民歌手-伍浩哲</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="day-group-card">
                        <h3 class="event-date-title">2026/03/02 (一)</h3>
                        <div class="event-list">
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:00-19:30</div>
                                    <div class="event-details"><h3 class="event-title">臺北市大安區<br>金華國民中學七年級合唱團</h3></div>
                                </div>
                            </div>
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:30-20:00</div>
                                    <div class="event-details"><h3 class="event-title">臺北市立內湖高級中學熱音社</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="day-group-card">
                        <h3 class="event-date-title">2026/03/03 (二)</h3>
                        <div class="event-list">
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:00-19:30</div>
                                    <div class="event-details"><h3 class="event-title">臺北市萬華區<br>老松國民小學鼓笛隊</h3></div>
                                </div>
                            </div>
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:30-20:00</div>
                                    <div class="event-details"><h3 class="event-title">臺北市立明湖國民中學學管樂團</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="day-group-card">
                        <h3 class="event-date-title">2026/03/04 (三)</h3>
                        <div class="event-list">
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:00-19:30</div>
                                    <div class="event-details"><h3 class="event-title">臺北市立桃源國民中學扯鈴隊</h3></div>
                                </div>
                            </div>
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:30-20:00</div>
                                    <div class="event-details"><h3 class="event-title">日本島根縣吉祥物</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="day-group-card">
                        <h3 class="event-date-title">2026/03/05 (四)</h3>
                        <div class="event-list">
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:00-19:30</div>
                                    <div class="event-details"><h3 class="event-title">聖克里斯多福及尼維斯大使館</h3></div>
                                </div>
                            </div>
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:30-20:00</div>
                                    <div class="event-details"><h3 class="event-title">臺北市立仁愛國民中學街舞社</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="day-group-card">
                        <h3 class="event-date-title">2026/03/06 (五)</h3>
                        <div class="event-list">
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:00-19:03</div>
                                    <div class="event-details"><h3 class="event-title">主燈秀</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:03-19:30</div>
                                    <div class="event-details"><h3 class="event-title">帕崎拉</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:30-19:33</div>
                                    <div class="event-details"><h3 class="event-title">主燈秀</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:33-19:40</div>
                                    <div class="event-details"><h3 class="event-title">帕崎拉</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:40-20:00</div>
                                    <div class="event-details"><h3 class="event-title">派拉瑞</h3></div>
                                </div>
                            </div>
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">20:00-20:03</div>
                                    <div class="event-details"><h3 class="event-title">主燈秀</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:03-20:20</div>
                                    <div class="event-details"><h3 class="event-title">派拉瑞</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:20-20:30</div>
                                    <div class="event-details"><h3 class="event-title">P!SCO</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:30-20:33</div>
                                    <div class="event-details"><h3 class="event-title">主燈秀</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:33-21:00</div>
                                    <div class="event-details"><h3 class="event-title">P!SCO</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="day-group-card">
                        <h3 class="event-date-title">2026/03/07 (六)</h3>
                        <div class="event-list">
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">14:05-14:35</div>
                                    <div class="event-details"><h3 class="event-title">甜美嗓音 洪宇蕎</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">14:40-15:10</div>
                                    <div class="event-details"><h3 class="event-title">音樂才女 劉恬君</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">15:15-15:35</div>
                                    <div class="event-details"><h3 class="event-title">飛揚歌手 凃佩岑</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">15:35-16:00</div>
                                    <div class="event-details"><h3 class="event-title">金曲雙姝 南方二重唱</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:00-19:03</div>
                                    <div class="event-details"><h3 class="event-title">主燈秀</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:03-19:30</div>
                                    <div class="event-details"><h3 class="event-title">澔客＋陳加洛</h3></div>
                                </div>
                            </div>
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:30-19:33</div>
                                    <div class="event-details"><h3 class="event-title">主燈秀</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:33-20:00</div>
                                    <div class="event-details"><h3 class="event-title">澔客＋陳加洛</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:00-20:03</div>
                                    <div class="event-details"><h3 class="event-title">主燈秀</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:03-20:30</div>
                                    <div class="event-details"><h3 class="event-title">古勝中</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:30-20:33</div>
                                    <div class="event-details"><h3 class="event-title">主燈秀</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:30-21:00</div>
                                    <div class="event-details"><h3 class="event-title">周美蒂</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="day-group-card">
                        <h3 class="event-date-title">2026/03/08 (日)</h3>
                        <div class="event-list">
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">14:00-14:25</div>
                                    <div class="event-details"><h3 class="event-title">教育夥伴新聲宣</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">14:25-14:55</div>
                                    <div class="event-details"><h3 class="event-title">樂齡經典好聲傳</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">14:55-15:30</div>
                                    <div class="event-details"><h3 class="event-title">親子廣播互動歡</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">15:30-16:00</div>
                                    <div class="event-details"><h3 class="event-title">文化展演一起談</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:00-19:03</div>
                                    <div class="event-details"><h3 class="event-title">主燈秀</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:03-19:30</div>
                                    <div class="event-details"><h3 class="event-title">壞胚子</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:30-19:33</div>
                                    <div class="event-details"><h3 class="event-title">主燈秀</h3></div>
                                </div>
                            </div>
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:33-19:40</div>
                                    <div class="event-details"><h3 class="event-title">壞胚子</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:40-20:00</div>
                                    <div class="event-details"><h3 class="event-title">DJ LELE</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:00-20:03</div>
                                    <div class="event-details"><h3 class="event-title">主燈秀</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:03-20:20</div>
                                    <div class="event-details"><h3 class="event-title">DJ LELE</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:20-20:30</div>
                                    <div class="event-details"><h3 class="event-title">榕幫</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:30-20:33</div>
                                    <div class="event-details"><h3 class="event-title">主燈秀</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:33-21:00</div>
                                    <div class="event-details"><h3 class="event-title">榕幫</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="day-group-card">
                        <h3 class="event-date-title">2026/03/09 (一)</h3>
                        <div class="event-list">
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:00-19:30</div>
                                    <div class="event-details"><h3 class="event-title">臺北市立內湖高級中學國樂社</h3></div>
                                </div>
                            </div>
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:30-20:00</div>
                                    <div class="event-details"><h3 class="event-title">日本島根縣吉祥物</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="day-group-card">
                        <h3 class="event-date-title">2026/03/10 (二)</h3>
                        <div class="event-list">
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:00-19:30</div>
                                    <div class="event-details"><h3 class="event-title">臺北市勞動力重建運用處</h3></div>
                                </div>
                            </div>
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:30-20:00</div>
                                    <div class="event-details"><h3 class="event-title">臺北市文山區<br>景美國民小學弦樂團</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="day-group-card">
                        <h3 class="event-date-title">2026/03/11 (三)</h3>
                        <div class="event-list">
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:00-19:30</div>
                                    <div class="event-details"><h3 class="event-title">臺北市內湖區<br>東湖國民小學弦樂團</h3></div>
                                </div>
                            </div>
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:30-20:00</div>
                                    <div class="event-details"><h3 class="event-title">新世紀文化藝術團</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="day-group-card">
                        <h3 class="event-date-title">2026/03/12 (四)</h3>
                        <div class="event-list">
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:00-19:30</div>
                                    <div class="event-details"><h3 class="event-title">臺北市大安區<br>幸安國民小學合唱團</h3></div>
                                </div>
                            </div>
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:30-20:00</div>
                                    <div class="event-details"><h3 class="event-title">臺北市立萬芳高級中學韓研社</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="day-group-card">
                        <h3 class="event-date-title">2026/03/13 (五)</h3>
                        <div class="event-list">
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:00-19:03</div>
                                    <div class="event-details"><h3 class="event-title">主燈秀</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:03-19:30</div>
                                    <div class="event-details"><h3 class="event-title">安妮塔克</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:30-19:33</div>
                                    <div class="event-details"><h3 class="event-title">主燈秀</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:33-19:40</div>
                                    <div class="event-details"><h3 class="event-title">安妮塔克</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:40-20:00</div>
                                    <div class="event-details"><h3 class="event-title">woodywoody</h3></div>
                                </div>
                            </div>
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">20:00-20:03</div>
                                    <div class="event-details"><h3 class="event-title">主燈秀</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:03-20:20</div>
                                    <div class="event-details"><h3 class="event-title">woodywoody</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:20-20:30</div>
                                    <div class="event-details"><h3 class="event-title">PIA</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:30-20:33</div>
                                    <div class="event-details"><h3 class="event-title">主燈秀</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:33-21:00</div>
                                    <div class="event-details"><h3 class="event-title">PIA</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="day-group-card">
                        <h3 class="event-date-title">2026/03/14 (六)</h3>
                        <div class="event-list">
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">14:05-14:30</div>
                                    <div class="event-details"><h3 class="event-title">情歌王子 王瑞瑜</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">14:30-14:50</div>
                                    <div class="event-details"><h3 class="event-title">青春實力歌手 宥賢</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">14:50-15:20</div>
                                    <div class="event-details"><h3 class="event-title">實力新星 鄭馥儀</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">15:20-16:00</div>
                                    <div class="event-details"><h3 class="event-title">織聲製造所 查瑪克</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:00-19:03</div>
                                    <div class="event-details"><h3 class="event-title">主燈秀</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:03-19:30</div>
                                    <div class="event-details"><h3 class="event-title">眠氣</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:30-19:33</div>
                                    <div class="event-details"><h3 class="event-title">主燈秀</h3></div>
                                </div>
                            </div>
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:33-19:50</div>
                                    <div class="event-details"><h3 class="event-title">眠氣</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:50-20:00</div>
                                    <div class="event-details"><h3 class="event-title">晨悠CHENYO</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:00-20:03</div>
                                    <div class="event-details"><h3 class="event-title">主燈秀</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:00-20:30</div>
                                    <div class="event-details"><h3 class="event-title">晨悠CHENYO</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:30-20:33</div>
                                    <div class="event-details"><h3 class="event-title">主燈秀</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:33-21:00</div>
                                    <div class="event-details"><h3 class="event-title">陳忻玥</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="day-group-card">
                        <h3 class="event-date-title">2026/03/15 (日)</h3>
                        <div class="event-list">
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">14:00-14:30</div>
                                    <div class="event-details"><h3 class="event-title">創作才子 徐偉銘</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">14:30-15:00</div>
                                    <div class="event-details"><h3 class="event-title">溫柔女聲 江玉如</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">15:00-15:35</div>
                                    <div class="event-details"><h3 class="event-title">嘹亮暖聲 陳太陽</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">15:35-16:00</div>
                                    <div class="event-details"><h3 class="event-title">實力唱將 李明德</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:00-19:03</div>
                                    <div class="event-details"><h3 class="event-title">主燈秀</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:03-19:30</div>
                                    <div class="event-details"><h3 class="event-title">It’s time to PLAY-<br>互動式瑪利歐劇場</h3></div>
                                </div>
                            </div>
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:30-19:33</div>
                                    <div class="event-details"><h3 class="event-title">主燈秀</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:33-20:00</div>
                                    <div class="event-details"><h3 class="event-title">阿卡貝拉-留聲樂團</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:00-20:03</div>
                                    <div class="event-details"><h3 class="event-title">主燈秀</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:03-20:30</div>
                                    <div class="event-details"><h3 class="event-title">最帥乩童歌手-黃新皓</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:30-20:33</div>
                                    <div class="event-details"><h3 class="event-title">主燈秀</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:33-21:00</div>
                                    <div class="event-details"><h3 class="event-title">清新人氣女歌手-魏嘉瑩</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
<!-- 十二行政區活動 -->
            <div id="event3" class="tab-content">
                
                <div class="featured-event-card">
                    
                    <div class="featured-img-box">
                        <img src="images/events/十二行政區熊讚.jpg" alt="十二行政區熊讚">
                    </div>

                    <div class="featured-content">
                        <h3 class="featured-title">十二行政區串聯活動</h3>
                        
                        <ul class="featured-info-list" style="padding: 20px;">
                            <li>
                                <span class="info-label">活動地點：</span>
                                <span class="info-text">花博展區</span>
                            </li>
                            <li>
                                <span class="info-label">活動時間：</span>
                                <span class="info-text">即日起至 2/24 (二) 23:59 止</span>
                            </li>
                            <li>
                                <span class="info-label">活動方式：</span>
                                <span class="info-text">於熊讚臉書粉絲專頁指定貼文下方留言，並猜中各區正確的名稱，就有機會把<br> <strong>限量版熊讚徽章組</strong> 帶回家！</span>
                            </li>
                            <li>
                                <span class="info-label">抽獎辦法：</span>
                                <span class="info-text" style="line-height: 1.8;">
                                    ➊ 追蹤「熊讚 Bravo」Facebook 粉絲專頁<br>
                                    ➋ 按讚本篇貼文並公開分享<br>
                                    ➌ 留言回答，圖中的讚讚代表哪三個行政區 (行政區順序不限)
                                </span>
                            </li>
                            <li>
                                <span class="info-label">活動獎勵：</span>
                                <span class="info-text" style="font-weight: bold;">熊讚徽章組 (共 5 名)</span>
                            </li>
                            <li>
                                <span class="info-label">得獎公布：</span>
                                <span class="info-text">2/25 抽出幸運得主</span>
                            </li>
                        </ul>
                        
                        <p class="info-note" style="text-align: center; max-width: 800px; line-height: 1.6;">
                            主辦單位保有最終修改、變更、活動解釋及取消本活動之權利，若有相關異動將公告於粉絲專頁，恕不另行通知。
                        </p>

                    </div>
                </div>

            </div>
<!-- 小提燈活動 -->
            <div id="event4" class="tab-content">

                <div style="background: rgba(0, 229, 255, 0.1); border-left: 4px solid var(--accent-color); padding: 15px; margin-bottom: 50px; border-radius: 4px;">
                    <h3 style="margin-bottom: 10px; color: white; font-size: 1.5rem;">
                        <strong>台北燈節活動現場 雙展區發放處</strong>
                    </h3>
                    <p style="margin: 0; color: white; font-size: 1.1rem;">
                        <strong>🕒 雙展區發放時間：</strong>3月1日(日)、3月2日(一)、3月3日(二) 15:00 起
                    </p>
                </div>

                <div class="event-gallery" style="margin-bottom: 100px;">
                    <div class="event-gallery-item">
                        <img src="images/events/Installation-02.jpg" alt="小提燈資訊" onclick="openImageModal('images/events/Installation-02.jpg')" style="cursor: pointer;">
                    </div>
                    <div class="event-gallery-item">
                        <img src="images/events/Installation-03.jpg" alt="小提燈資訊" onclick="openImageModal('images/events/Installation-03.jpg')" style="cursor: pointer;">
                    </div>
                    <div class="event-gallery-item">
                        <img src="images/events/Installation-05.jpg" alt="小提燈資訊" onclick="openImageModal('images/events/Installation-05.jpg')" style="cursor: pointer;">
                    </div>
                </div>
                <div id="imageLightbox" onclick="closeImageModal(event)">
                    <div class="modal-content-img">
                        <span class="close-modal" onclick="closeImageModalBox()">&times;</span>
                        <img id="lightboxImg" src=" " alt=''>
                    </div>
                </div>

                <div class="lantern-table-section">
                    
                    <div style="background: rgba(0, 229, 255, 0.1); border-left: 4px solid var(--accent-color); padding: 15px; margin-bottom: 30px; border-radius: 4px;">
                        <h3 style="margin-bottom: 10px; color: white; font-size: 1.5rem;">
                            <strong>台北市各行政區 小提燈發放處</strong>
                        </h3>
                        <p style="margin: 0; color: white; font-size: 1.1rem;">
                            <strong>🕒 統一發放時間：</strong>3月1日(日)、3月2日(一) 14:00 起 
                        </p>
                    </div>

                    <div class="lantern-table-container">
                        <table class="lantern-table">
                            <thead>
                                <tr>
                                    <th width="15%">行政區</th>
                                    <th width="35%">發送地點</th>
                                    <th width="50%">詳細地址</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="district-col">大安區</td>
                                    <td>大安森林公園8號出入口</td>
                                    <td>大安區行政中心正門 <br>(新生南路2段86號)對面</td>
                                </tr>
                                <tr>
                                    <td class="district-col">內湖區</td>
                                    <td>內湖公民會館</td>
                                    <td>內湖區內湖路二段342號</td>
                                </tr>
                                <tr>
                                    <td class="district-col">士林區</td>
                                    <td>士林區行政中心</td>
                                    <td>士林區中正路439號</td>
                                </tr>
                                <tr>
                                    <td class="district-col">文山區</td>
                                    <td>文山行政中心前廣場</td>
                                    <td>文山區木柵路3段220號</td>
                                </tr>
                                <tr>
                                    <td class="district-col">北投區</td>
                                    <td>北投慈后宮</td>
                                    <td>北投區清江路169號</td>
                                </tr>
                                <tr>
                                    <td class="district-col">中山區</td>
                                    <td>中山區行政中心</td>
                                    <td>中山區松江路367號</td>
                                </tr>
                                <tr>
                                    <td class="district-col">信義區</td>
                                    <td>信義區行政中心南側大門</td>
                                    <td>信義區福德街86號</td>
                                </tr>
                                <tr>
                                    <td class="district-col">松山區</td>
                                    <td>松山區行政中心</td>
                                    <td>松山區八德路4段692號</td>
                                </tr>
                                <tr>
                                    <td class="district-col">萬華區</td>
                                    <td>剝皮寮歷史街區</td>
                                    <td>萬華區廣州街145號</td>
                                </tr>
                                <tr>
                                    <td class="district-col">中正區</td>
                                    <td>中正紀念堂大孝門旁</td>
                                    <td>臨愛國東路</td>
                                </tr>
                                <tr>
                                    <td class="district-col">大同區</td>
                                    <td>大同區行政中心</td>
                                    <td>大同區昌吉街57號</td>
                                </tr>
                                <tr>
                                    <td class="district-col">南港區</td>
                                    <td>南港車站City Link廣場</td>
                                    <td>南港區忠孝東路七段369號</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
<!-- 主題日活動 -->
            <div id="event5" class="tab-content">
                
                <h3 class="event-date-title">元宵節猜燈謎</h3>
                <div class="event-list" style="display: block;">
                    <div class="event-item">
                        <div class="event-time minw-300">3/3 (二) 19:00-21:00</div>
                        <div class="event-details">
                            <h3 class="event-title">轉輪盤猜燈謎</h3>
                            <p class="event-desc"><strong>地點：</strong>花博展區服務台旁攤位、西門展區1號服務台旁攤位（近捷運6號出口後側）</p>
                            <p class="event-desc"><strong>活動方式：</strong>現場排隊轉輪盤猜燈謎，答對即可獲得超商商品卡。</p>
                            <p class="event-desc" style="color: var(--accent-color); font-size: 0.9rem;">備註：限量發送，送完為止。</p>
                        </div>
                        <!-- <div><span class="tag-blue">現場排隊</span></div> -->
                    </div>
                </div>

                <!-- <div class="event-gallery">
                    <div class="event-gallery-item">
                        <img src="images/theme_lantern_riddle.jpg" alt="猜燈謎活動示意圖">
                    </div>
                    <div class="event-gallery-item">
                        <img src="images/theme_wheel.jpg" alt="轉輪盤活動示意圖">
                    </div>
                </div> -->


                <h3 class="event-date-title">WBC世界棒球經典賽應援中華隊</h3>
                <div class="event-list" style="display: block;">
                    <div class="event-item">
                        <div class="event-time minw-300" >3/5 (四)-3/6 (五) 17:00-22:00<br>3/7 (六)-3/8 (日) 14:00-22:00</div>
                        <div class="event-details">
                            <h3 class="event-title">WBC中華隊應援加油牆</h3>
                            <p class="event-desc"><strong>地點：</strong>西門展區《揮出夢想經典熊讚》燈組旁</p>
                            <p class="event-desc"><strong>活動方式：</strong>現場提供便條紙，邀請大家寫下對中華隊的祝福與應援。</p>
                        </div>
                    </div>
                    <div class="event-item">
                        <div class="event-time minw-300" >3/6 (五) 18:00 至轉播結束</div>
                        <div class="event-details">
                            <h3 class="event-title">北藝中心戶外轉播WBC應援抽大獎</h3>
                            <p class="event-desc"><strong>地點：</strong>北藝中心戶外廣場賽會轉播區＋燈節花博展區</p>
                            <p class="event-desc"><strong>活動方式：</strong>3/6(五)在北藝中心轉播WBC現場，到服務台旁領取台北燈節抽獎券，且在3/15(日)前到燈節花博展區賞燈，並到大會服務台(花博公園花牆前)憑券摸彩。</p>
                            <p class="event-desc" style="color: var(--accent-color); font-size: 0.9rem;">備註：限量發送，送完為止。</p>
                        </div>
                    </div>
                </div>

                <!-- <div class="event-gallery">
                    <div class="event-gallery-item">
                        <img src="images/theme_wbc_wall.jpg" alt="應援牆示意圖">
                    </div>
                    <div class="event-gallery-item">
                        <img src="images/theme_wbc_broadcast.jpg" alt="戶外轉播示意圖">
                    </div>
                    <div class="event-gallery-item">
                        <img src="images/theme_iphone.jpg" alt="抽獎獎品示意圖">
                    </div>
                </div> -->


                <h3 class="event-date-title">白色情人節</h3>
                <div class="event-list" style="display: block;">
                    <div class="event-item">
                        <div class="event-time minw-300" >3/13 (五)-3/15 (日) 18:00-21:00</div>
                        <div class="event-details">
                            <h3 class="event-title">甜蜜印相 & 金莎傳情</h3>
                            <p class="event-desc"><strong>地點：</strong>花博展區變形金剛主燈旁攤位、西門展區1號服務台旁攤位（近捷運6號出口後側）</p>
                            <p class="event-desc">1. <strong>印相體驗：</strong>上傳與燈組合照，即可免費列印燈節限定相片。</p>
                            <p class="event-desc" style="color: var(--accent-color); font-size: 0.9rem;">備註：免費列印限定相片，每人限 1張。</p>
                            <p class="event-desc">2. <strong>送金莎花束：</strong>將印出的照片上傳社群並 #2026台北燈節，經工作人員確認後即贈金莎花束。</p>
                            <p class="event-desc" style="color: var(--accent-color); font-size: 0.9rem;">備註：金莎花束每人限 1束，限量發送，送完為止。</p>
                        </div>
                    </div>
                </div>

                <!-- <div class="event-gallery">
                    <div class="event-gallery-item">
                        <img src="images/theme_photobooth.jpg" alt="印相機體驗示意圖">
                    </div>
                    <div class="event-gallery-item">
                        <img src="images/theme_chocolate_flower.jpg" alt="金莎花束示意圖">
                    </div>
                </div> -->

            </div>

        </section>
    </main>

    <?php include 'footer.php'; ?>
    <script src="js/script.js"></script>
</body>
</html>