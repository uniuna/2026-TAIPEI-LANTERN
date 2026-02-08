<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <?php include 'header.php'; ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
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
                <!-- <button class="tab-btn" onclick="openTab(event, 'event2')">花博舞台活動</button> -->
                <button class="tab-btn active" onclick="openTab(event, 'event3')">十二行政區活動</button>
                <button class="tab-btn" onclick="openTab(event, 'event4')">小提燈活動</button>
                <button class="tab-btn" onclick="openTab(event, 'event5')">主題日活動</button>
            </div>

            <div id="event1" class="tab-content">
                <section class="coming-soon-block">
                    <h3 class="coming-soon-title">敬請期待...</h3>
                    <img src="images/comingsoon.jpg" alt="敬請期待" class="coming-soon-img">
                </section>
            </div>

            <div id="event2" class="tab-content">
                
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
                                    <div class="event-time">14:00-16:00</div>
                                    <div class="event-details"><h3 class="event-title">講客電台</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">18:00-18:30</div>
                                    <div class="event-details"><h3 class="event-title">友好城市-濱松市</h3></div>
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
                                <div class="event-item">
                                    <div class="event-time">19:33-19:45</div>
                                    <div class="event-details"><h3 class="event-title">侏羅紀世界 恐龍大冒險</h3></div>
                                </div>
                            </div>
                            <div class="event-list-col">
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
                                    <div class="event-time">14:00-16:00</div>
                                    <div class="event-details"><h3 class="event-title">台北電台</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:00-19:03</div>
                                    <div class="event-details"><h3 class="event-title">主燈秀</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:03-19:30</div>
                                    <div class="event-details"><h3 class="event-title">Smile Dash-搖滾樂團</h3></div>
                                </div>
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
                            </div>
                            <div class="event-list-col">
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
                                    <div class="event-details"><h3 class="event-title">DrunkMonk 撞克茫客-硬式搖滾樂團</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:30-20:33</div>
                                    <div class="event-details"><h3 class="event-title">主燈秀</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:33-21:00</div>
                                    <div class="event-details"><h3 class="event-title">DrunkMonk 撞克茫客-硬式搖滾樂團</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="day-group-card">
                        <h3 class="event-date-title">2026/03/01 (日)</h3>
                        <div class="event-list">
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">14:00-16:00</div>
                                    <div class="event-details"><h3 class="event-title">復興電台</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:00-19:03</div>
                                    <div class="event-details"><h3 class="event-title">主燈秀</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:03-19:30</div>
                                    <div class="event-details"><h3 class="event-title">張嘉芯-超級紅人榜</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:30-19:33</div>
                                    <div class="event-details"><h3 class="event-title">主燈秀</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:33-20:00</div>
                                    <div class="event-details"><h3 class="event-title">吳胤呈-精靈男友</h3></div>
                                </div>
                            </div>
                            <div class="event-list-col">
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
                                    <div class="event-details"><h3 class="event-title">伍浩哲-知名民歌手</h3></div>
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
                                    <div class="event-details"><h3 class="event-title">臺北市大安區金華國民中學七年級合唱團</h3></div>
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
                                    <div class="event-details"><h3 class="event-title">臺北市萬華區老松國民小學鼓笛隊</h3></div>
                                </div>
                            </div>
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:30-20:00</div>
                                    <div class="event-details"><h3 class="event-title">臺北市立明湖國民中學管樂團</h3></div>
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
                                    <div class="event-time">14:00-16:00</div>
                                    <div class="event-details"><h3 class="event-title">台北電台</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:00-19:03</div>
                                    <div class="event-details"><h3 class="event-title">主燈秀</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:03-19:30</div>
                                    <div class="event-details"><h3 class="event-title">澔客＋陳加洛</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:30-19:33</div>
                                    <div class="event-details"><h3 class="event-title">主燈秀</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:33-20:00</div>
                                    <div class="event-details"><h3 class="event-title">澔客＋陳加洛</h3></div>
                                </div>
                            </div>
                            <div class="event-list-col">
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
                                    <div class="event-time">20:33-21:00</div>
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
                                    <div class="event-time">14:00-16:00</div>
                                    <div class="event-details"><h3 class="event-title">教育電台</h3></div>
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
                                <div class="event-item">
                                    <div class="event-time">19:33-19:40</div>
                                    <div class="event-details"><h3 class="event-title">壞胚子</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:40-20:00</div>
                                    <div class="event-details"><h3 class="event-title">DJ LELE</h3></div>
                                </div>
                            </div>
                            <div class="event-list-col">
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
                                    <div class="event-details"><h3 class="event-title">臺北市文山區景美國民小學弦樂團</h3></div>
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
                                    <div class="event-details"><h3 class="event-title">臺北市內湖區東湖國民小學弦樂團</h3></div>
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
                                    <div class="event-details"><h3 class="event-title">臺北市大安區幸安國民小學合唱團</h3></div>
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
                                    <div class="event-time">14:00-16:00</div>
                                    <div class="event-details"><h3 class="event-title">台北電台</h3></div>
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
                                <div class="event-item">
                                    <div class="event-time">19:33-19:50</div>
                                    <div class="event-details"><h3 class="event-title">眠氣</h3></div>
                                </div>
                            </div>
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:50-20:00</div>
                                    <div class="event-details"><h3 class="event-title">晨悠CHENYO</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:00-20:03</div>
                                    <div class="event-details"><h3 class="event-title">主燈秀</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:03-20:30</div>
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
                                    <div class="event-time">19:00-19:03</div>
                                    <div class="event-details"><h3 class="event-title">主燈秀</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:03-19:30</div>
                                    <div class="event-details"><h3 class="event-title">It’s time to PLAY - 互動式瑪利歐劇場</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:30-19:33</div>
                                    <div class="event-details"><h3 class="event-title">主燈秀</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:33-20:00</div>
                                    <div class="event-details"><h3 class="event-title">阿卡貝拉-留聲樂團</h3></div>
                                </div>
                            </div>
                            <div class="event-list-col">
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

            <div id="event3" class="tab-content active">
                
                <h3 class="event-date-title">2/25（三）～ 3/15（日）12行政區串聯活動</h3>
                
                <div class="event-list" style="display: block;">
                    <div class="event-item">
                        <div class="event-time">全天開放</div>
                        <div class="event-details">
                            <h3 class="event-title">熊讚公仔拍照抽好禮</h3>

                            <p class="event-desc">
                                地點：花博展區 12區熊讚公仔 <br>
                                活動方式：<br>
                                1. 於花博展區找到代表各行政區的熊讚公仔。<br>
                                2. 與公仔合照，並上傳至「熊讚臉書粉絲頁」指定貼文。<br>
                                3. 留言推薦該行政區的美食或景點，即可參加網路抽獎。
                            </p>
                            <br>
                            <p class="event-desc" style="color: var(--accent-color);">
                                <strong>活動獎品：</strong><br>
                                法布甜熊讚禮盒 (每一行政區各抽一份，共 12 份)
                            </p>
                        </div>
                        <div><span class="tag-blue">網路抽獎</span></div>
                    </div>
                </div>

                <div class="event-gallery">
                    <div class="event-gallery-item">
                        <img src="images/bravo_bears_group.jpg" alt="12行政區熊讚公仔">
                    </div>
                    <div class="event-gallery-item">
                        <img src="images/gift_box.jpg" alt="法布甜熊讚禮盒">
                    </div>
                    <div class="event-gallery-item">
                        <img src="images/bravo_event_poster.jpg" alt="活動宣傳海報">
                    </div>
                </div>
            </div>

            <div id="event4" class="tab-content">
                
                <!-- <h3 class="event-date-title">小提燈組裝說明</h3>
                
                <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; margin-bottom: 40px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.1); box-shadow: 0 5px 15px rgba(0,0,0,0.3);">
                    <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" 
                            src="https://www.youtube.com/embed/VIDEO_ID_HERE" 
                            title="小提燈安裝教學影片" frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen>
                    </iframe>
                </div> -->

                <h3 class="event-date-title">小提燈活動</h3>

                <div class="event-gallery">
                    <div class="event-gallery-item">
                        <img src="images/events/Installation-01.jpg" alt="小提燈資訊" onclick="openImageModal('images/events/Installation-01.jpg')" style="cursor: pointer;">
                    </div>
                    <div class="event-gallery-item">
                        <img src="images/events/Installation-02.jpg" alt="小提燈資訊" onclick="openImageModal('images/events/Installation-02.jpg')" style="cursor: pointer;">
                    </div>
                    <div class="event-gallery-item">
                        <img src="images/events/Installation-03.jpg" alt="小提燈資訊" onclick="openImageModal('images/events/Installation-03.jpg')" style="cursor: pointer;">
                    </div>
                    <div class="event-gallery-item">
                        <img src="images/events/Installation-04.jpg" alt="小提燈資訊" onclick="openImageModal('images/events/Installation-04.jpg')" style="cursor: pointer;">
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

                <!-- <div class="event-list" style="display: block;">
                    <div class="event-item">
                        <div class="event-time">貼心提醒</div>
                        <div class="event-details">
                            <p class="event-desc">
                                1. 請依照影片或圖片順序進行組裝。<br>
                                2. 小提燈內含細小零件，兒童組裝時請由家長陪同。<br>
                                3. 建議自行準備小工具（如膠帶）輔助固定，成品更穩固。
                            </p>
                        </div>
                    </div>
                </div> -->
            </div>

            <div id="event5" class="tab-content">
                
                <h3 class="event-date-title">3/3（二）元宵節主題日</h3>
                <div class="event-list" style="display: block;">
                    <div class="event-item">
                        <div class="event-time">19:00 ～ 21:00</div>
                        <div class="event-details">
                            <h3 class="event-title">轉輪盤猜燈謎</h3>
                            <p class="event-desc">地點：花博展區及西門展區（服務台旁攤位）</p>
                            <p class="event-desc">活動方式：現場排隊轉輪盤答題，答對即送50元超商商品卡。</p>
                            <p class="event-desc" style="color: var(--accent-color); font-size: 0.9rem;">備註：每展區限量 500 份，送完為止。</p>
                        </div>
                        <div><span class="tag-blue">現場排隊</span></div>
                    </div>
                </div>

                <div class="event-gallery">
                    <div class="event-gallery-item">
                        <img src="images/theme_lantern_riddle.jpg" alt="猜燈謎活動示意圖">
                    </div>
                    <div class="event-gallery-item">
                        <img src="images/theme_wheel.jpg" alt="轉輪盤活動示意圖">
                    </div>
                </div>


                <h3 class="event-date-title">3/5（四）～ 3/8（日）WBC世界棒球經典賽主題日</h3>
                <div class="event-list" style="display: block;">
                    <div class="event-item">
                        <div class="event-time">全天開放</div>
                        <div class="event-details">
                            <h3 class="event-title">中華隊應援留言牆</h3>
                            <p class="event-desc">地點：西門展區</p>
                            <p class="event-desc">活動方式：現場提供便條紙，邀請民眾寫下對中華隊的祝福與應援。</p>
                        </div>
                        <div><span class="tag-blue">自由參加</span></div>
                    </div>
                    
                    <div class="event-item">
                        <div class="event-time">依賽程<br>轉播時間</div>
                        <div class="event-details">
                            <h3 class="event-title">大型戶外轉播 & 應援抽大獎</h3>
                            <p class="event-desc">地點：北藝中心戶外廣場（近花博展區）</p>
                            <p class="event-desc">場次：鎖定「中韓大戰」與「中日大戰」</p>
                            <p class="event-desc">活動方式：現場觀賽並領取抽獎卡，有機會抽中 iPhone 17、超商禮券等大獎。</p>
                        </div>
                        <div><span class="tag-blue">iPhone 17</span></div>
                    </div>
                </div>

                <div class="event-gallery">
                    <div class="event-gallery-item">
                        <img src="images/theme_wbc_wall.jpg" alt="應援牆示意圖">
                    </div>
                    <div class="event-gallery-item">
                        <img src="images/theme_wbc_broadcast.jpg" alt="戶外轉播示意圖">
                    </div>
                    <div class="event-gallery-item">
                        <img src="images/theme_iphone.jpg" alt="抽獎獎品示意圖">
                    </div>
                </div>


                <h3 class="event-date-title">3/13（五）～ 3/15（日）白色情人節主題日</h3>
                <div class="event-list" style="display: block;">
                    <div class="event-item">
                        <div class="event-time">18:00 ～ 21:00</div>
                        <div class="event-details">
                            <h3 class="event-title">甜蜜印相 & 金莎傳情</h3>
                            <p class="event-desc">地點：花博展區（靜語花境旁）、西門展區（服務台旁）</p>
                            <p class="event-desc">1. <strong>印相機體驗：</strong>上傳與燈組合照，免費列印燈節限定邊框相片（每人限 1 張）。</p>
                            <p class="event-desc">2. <strong>送金莎花束：</strong>將印出的照片上傳社群 #2026台北燈節，經工作人員確認即贈金莎花束。</p>
                            <p class="event-desc" style="color: var(--accent-color); font-size: 0.9rem;">備註：金莎花束每日每區限量 100 份。</p>
                        </div>
                        <div><span class="tag-blue">限量發送</span></div>
                    </div>
                </div>

                <div class="event-gallery">
                    <div class="event-gallery-item">
                        <img src="images/theme_photobooth.jpg" alt="印相機體驗示意圖">
                    </div>
                    <div class="event-gallery-item">
                        <img src="images/theme_chocolate_flower.jpg" alt="金莎花束示意圖">
                    </div>
                </div>

            </div>

        </section>
    </main>

    <?php include 'footer.php'; ?>
    <script src="js/script.js"></script>
</body>
</html>