<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <?php include 'header.php'; ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/pages.css">
</head>
<body>
    <?php include 'nav.php'; ?>

    <main class="container events-main">
        <section>
            <h2 class="section-title">精彩活動列表</h2>
            
            <div class="tab-buttons events-tab-wrapper">
                <!-- <button class="tab-btn" onclick="openTab(event, 'event1')">開幕日</button> -->
                <button class="tab-btn active" onclick="openTab(event, 'event2')">舞台活動</button>
                <button class="tab-btn" onclick="openTab(event, 'event3')">主題日</button>
                </div>

            <div id="event1" class="tab-content">
                <section class="coming-soon-block">
                    <h3 class="coming-soon-title">敬請期待...</h3>
                    <img src="../images/comingsoon.jpg" alt="敬請期待" class="coming-soon-img">
                </section>
            </div>

            <div id="event2" class="tab-content active">
                
                <div class="stage-intro-box">
                    <div class="stage-intro-row">
                        <span class="stage-intro-label">日期：</span>
                        <span>2026/02/27 ~ 03/15 每周五、六、日，精采演出等你來看!</span>
                    </div>
                    <div class="stage-intro-row">
                        <span class="stage-intro-label">時間：</span>
                        <span>19:00 - 21:00</span>
                    </div>
                    <div class="stage-intro-row">
                        <span class="stage-intro-label">地點：</span>
                        <span>花博展區主舞台</span>
                    </div>
                </div>

                <h3 class="event-date-title">2026/02/27 (五) 馬戲娛樂之夜</h3>
                <div class="event-list">
                    <div class="event-item">
                        <div class="event-time">19:00-19:40</div>
                        <div class="event-details">
                            <h3 class="event-title">侏羅紀世界 恐龍大冒險</h3>
                        </div>
                    </div>
                    <div class="event-item">
                        <div class="event-time">19:40-20:20</div>
                        <div class="event-details">
                            <h3 class="event-title">Justin 魔術秀</h3>
                        </div>
                    </div>
                    <div class="event-item">
                        <div class="event-time">20:20-21:00</div>
                        <div class="event-details">
                            <h3 class="event-title">幻 光 馬 戲 團</h3>
                        </div>
                    </div>
                </div>

                <h3 class="event-date-title">2026/02/28 (六) 新生代樂團</h3>
                <div class="event-list">
                    <div class="event-item">
                        <div class="event-time">19:00-19:40</div>
                        <div class="event-details">
                            <h3 class="event-title">來者何人</h3>
                            <p class="event-desc">台北巷弄的嘻哈樂團</p>
                        </div>
                    </div>
                    <div class="event-item">
                        <div class="event-time">19:40-20:20</div>
                        <div class="event-details">
                            <h3 class="event-title">帕拉斯</h3>
                            <p class="event-desc">搖滾樂團</p>
                        </div>
                    </div>
                    <div class="event-item">
                        <div class="event-time">20:20-21:00</div>
                        <div class="event-details">
                            <h3 class="event-title">DrunkMonk 撞克茫客</h3>
                            <p class="event-desc">硬式搖滾樂團</p>
                        </div>
                    </div>
                </div>

                <h3 class="event-date-title">2026/03/01 (日) 全民好聲音</h3>
                <div class="event-list">
                    <div class="event-item">
                        <div class="event-time">19:00-19:30</div>
                        <div class="event-details">
                            <h3 class="event-title">張嘉芯</h3>
                            <p class="event-desc">超級紅人榜</p>
                        </div>
                    </div>
                    <div class="event-item">
                        <div class="event-time">19:30-20:00</div>
                        <div class="event-details">
                            <h3 class="event-title">吳胤呈</h3>
                            <p class="event-desc">精靈男友</p>
                        </div>
                    </div>
                    <div class="event-item">
                        <div class="event-time">20:00-20:30</div>
                        <div class="event-details">
                            <h3 class="event-title">張菡 & DJ朱全</h3>
                        </div>
                    </div>
                    <div class="event-item">
                        <div class="event-time">20:30-21:00</div>
                        <div class="event-details">
                            <h3 class="event-title">伍浩哲</h3>
                            <p class="event-desc">知名民歌手</p>
                        </div>
                    </div>
                </div>

                <h3 class="event-date-title">2026/03/06 (五) 搖滾方程式</h3>
                <div class="event-list">
                    <div class="event-item">
                        <div class="event-time">19:00-19:40</div>
                        <div class="event-details">
                            <h3 class="event-title">派拉瑞</h3>
                        </div>
                    </div>
                    <div class="event-item">
                        <div class="event-time">19:40-20:20</div>
                        <div class="event-details">
                            <h3 class="event-title">帕崎拉</h3>
                        </div>
                    </div>
                    <div class="event-item">
                        <div class="event-time">20:20-21:00</div>
                        <div class="event-details">
                            <h3 class="event-title">P!SCO</h3>
                        </div>
                    </div>
                </div>

                <h3 class="event-date-title">2026/03/07 (六) 民歌西餐廳</h3>
                <div class="event-list">
                    <div class="event-item">
                        <div class="event-time">19:00-19:30</div>
                        <div class="event-details">
                            <h3 class="event-title">黃晨富</h3>
                        </div>
                    </div>
                    <div class="event-item">
                        <div class="event-time">19:30-20:00</div>
                        <div class="event-details">
                            <h3 class="event-title">陳加洛</h3>
                        </div>
                    </div>
                    <div class="event-item">
                        <div class="event-time">20:00-20:30</div>
                        <div class="event-details">
                            <h3 class="event-title">古勝中</h3>
                        </div>
                    </div>
                    <div class="event-item">
                        <div class="event-time">20:30-21:00</div>
                        <div class="event-details">
                            <h3 class="event-title">周美蒂</h3>
                        </div>
                    </div>
                </div>

                <h3 class="event-date-title">2026/03/08 (日) 嘻哈之夜</h3>
                <div class="event-list">
                    <div class="event-item">
                        <div class="event-time">19:00-19:40</div>
                        <div class="event-details">
                            <h3 class="event-title">壞胚子</h3>
                        </div>
                    </div>
                    <div class="event-item">
                        <div class="event-time">19:40-20:20</div>
                        <div class="event-details">
                            <h3 class="event-title">DJ LELE</h3>
                        </div>
                    </div>
                    <div class="event-item">
                        <div class="event-time">20:20-21:00</div>
                        <div class="event-details">
                            <h3 class="event-title">榕幫</h3>
                        </div>
                    </div>
                </div>

                <h3 class="event-date-title">2026/03/13 (五) 小清新之夜</h3>
                <div class="event-list">
                    <div class="event-item">
                        <div class="event-time">19:00-19:30</div>
                        <div class="event-details">
                            <h3 class="event-title">安妮塔克</h3>
                        </div>
                    </div>
                    <div class="event-item">
                        <div class="event-time">19:30-20:00</div>
                        <div class="event-details">
                            <h3 class="event-title">woodywoody</h3>
                        </div>
                    </div>
                    <div class="event-item">
                        <div class="event-time">20:00-20:30</div>
                        <div class="event-details">
                            <h3 class="event-title">PIA</h3>
                        </div>
                    </div>
                </div>

                <h3 class="event-date-title">2026/03/14 (六) 情人之夜</h3>
                <div class="event-list">
                    <div class="event-item">
                        <div class="event-time">19:00-19:50</div>
                        <div class="event-details">
                            <h3 class="event-title">眠氣</h3>
                        </div>
                    </div>
                    <div class="event-item">
                        <div class="event-time">19:50-20:30</div>
                        <div class="event-details">
                            <h3 class="event-title">晨悠CHENYO</h3>
                        </div>
                    </div>
                    <div class="event-item">
                        <div class="event-time">20:30-21:00</div>
                        <div class="event-details">
                            <h3 class="event-title">陳忻玥</h3>
                        </div>
                    </div>
                </div>

                <h3 class="event-date-title">2026/03/15 (日) 閉幕之夜</h3>
                <div class="event-list">
                    <div class="event-item">
                        <div class="event-time">19:00-19:30</div>
                        <div class="event-details">
                            <h3 class="event-title">Mario Game Time</h3>
                        </div>
                    </div>
                    <div class="event-item">
                        <div class="event-time">19:30-20:00</div>
                        <div class="event-details">
                            <h3 class="event-title">阿卡貝拉-留聲樂團</h3>
                        </div>
                    </div>
                    <div class="event-item">
                        <div class="event-time">20:00-20:30</div>
                        <div class="event-details">
                            <h3 class="event-title">Yoyo唱跳秀</h3>
                        </div>
                    </div>
                    <div class="event-item">
                        <div class="event-time">20:30-21:00</div>
                        <div class="event-details">
                            <h3 class="event-title">身聲劇場</h3>
                        </div>
                    </div>
                </div>

            </div>

            <div id="event3" class="tab-content">
                <h3 class="event-date-title">3月3日（二）元宵節主題日</h3>
                <div class="event-list" style="grid-template-columns:none;">
                    <div class="event-item">
                        <div class="event-time">16:30 ～ 20:40</div>
                        <div class="event-details">
                            <h3 class="event-title">猜燈謎挑戰賽</h3>
                            <p class="event-desc">地點：圓山花博舞台</p>
                            <p class="event-desc">場次：16:30-17:40、18:00-19:10、19:30-20:40（共三場次）</p>
                        </div>
                        <div><span class="tag-blue">現場報名</span></div>
                    </div>
                </div>

                <h3 class="event-date-title">3/13（五）～ 3/15（日）白色情人節主題日</h3>
                <div class="event-list" style="grid-template-columns:none;">
                    <div class="event-item">
                        <div class="event-time">16:30 ～ 20:40</div>
                        <div class="event-details">
                            <h3 class="event-title">快閃巧克力攤位</h3>
                            <p class="event-desc">地點：西門展區服務台旁搭設攤位</p>
                            <p class="event-desc">打卡發送 520 份巧克力！</p>
                        </div>
                        <div><span class="tag-blue">打卡發送</span></div>
                    </div>
                </div>

                <h3 class="event-date-title">3/2（一）～ 3/17（二）WBC主題日</h3>
                <div class="event-list">
                    <div class="event-item">
                        <div class="event-time">17:00 ～ 21:00</div>
                        <div class="event-details">
                            <h3 class="event-title">應援活動</h3>
                            <p class="event-desc">地點：西門展區</p>
                            <p class="event-desc">為中華隊應援加油 !</p>
                        </div>
                        </div>
                </div>
            </div>

            <div id="event4" class="tab-content">
                <section class="coming-soon-block">
                    <h3 class="coming-soon-title">敬請期待...</h3>
                    <img src="../images/comingsoon.jpg" alt="敬請期待" class="coming-soon-img">
                </section>
            </div>

            <div id="event5" class="tab-content">
                <section class="coming-soon-block">
                    <h3 class="coming-soon-title">敬請期待...</h3>
                    <img src="../images/comingsoon.jpg" alt="敬請期待" class="coming-soon-img">
                </section>
            </div>
        </section>

    </main>
  
    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>