<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <?php include 'header.php'; ?>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/pages.css">
</head>
<body>
    <?php include 'nav.php'; ?>

    <main class="container" style="padding-top: 120px; min-height: 80vh; padding-bottom: 100px;">
        <section>
            <h2 class="section-title">新聞總覽</h2>
            <p style="text-align: center; color: var(--text-sub); margin-bottom: 40px;">
                掌握 2026 台北燈節第一手活動資訊與精彩亮點
            </p>

            <div class="news-grid">
                
                <article class="news-card">
                    <div class="news-img-box">
                        <img src="images/news/n260104_01.jpg" alt="佛光山台北道場">
                    </div>
                    <div class="news-content">
                        <div class="news-list-date">2026.01.04</div>
                        <h3 class="news-list-title">佛光山台北道場響應「2026台北燈節」 以光影傳遞和諧共生與祝福</h3>
                        <p class="news-excerpt">
                            以「傳燈六十・百年仰望」為主題，佛光山台北道場舉辦彩繪燈籠比賽，透過燈光與畫筆交織，展現佛法與藝術融合之美...
                        </p>
                        <a href="news_260104.php" class="btn-more">閱讀更多</a>
                    </div>
                </article>

                

            </div>
            <div style="text-align: center; margin-top: 60px;">
                <a href="index.php" class="btn-back">返回首頁</a>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>
    <script src="js/script.js"></script>
</body>
</html>