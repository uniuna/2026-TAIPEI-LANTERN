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
        
        <h2 class="section-title">同場加映</h2>

        <div class="main-category-nav">
            <!-- <button class="main-cat-btn" onclick="switchMainCat('market', this)">萬華市集</button> -->
            <button class="main-cat-btn active" onclick="switchMainCat('temple', this)">宮廟活動</button>
            <!-- <button class="main-cat-btn" onclick="switchMainCat('shop', this)">商圈活動</button> -->
            <button class="main-cat-btn" onclick="switchMainCat('venue', this)">場館響應</button>
        </div>

<!-- 萬華市集 -->
        <div id="cat-market" class="main-cat-content">
            <div style="text-align: center; padding: 50px; color: var(--text-sub);">
                <h3>萬華市集精彩活動</h3>
                <p>資料整理中，敬請期待...</p>
            </div>
        </div>

<!-- 宮廟活動 -->
        <div id="cat-temple" class="main-cat-content active">
            
            <div style="text-align: center; margin-bottom: 50px; color: var(--text-sub);">
                <p>各行政區宮廟響應燈節，舉辦祈福、猜燈謎及元宵傳統活動，歡迎民眾共襄盛舉。</p>
            </div>

            <div class="temple-list-container">

                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">士林區</span>
                        <span class="t-name">慈諴宮</span>
                        <span class="t-date"><i class="far fa-calendar-alt"></i> 115年3月3日</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="temple-text-full">
                            <h4>元宵活動</h4>
                            <p>上元節乃天官大帝華誕，故燃燈以慶，於廟埕設置平安燈，隆重莊嚴、承載眾生祈願，規劃元宵節(上元節)當天18時舉辦「弄土地公」活動，由壯漢打赤膊抬著土地公神轎穿梭於炮陣之中，祈求新的一年財運亨通，店家或民家通常會準備大量的鞭炮迎接，相信放得愈多就賺愈多，為上元祈福之百年元宵傳統民俗活動。</p>
                            <p>慈諴宮結合周邊士林夜市人潮，於元宵節19時舉辦「猜燈謎」有獎徵答活動，啟迪智慧也增加節慶熱鬧氣氛。</p>

                            <a href="https://www.google.com/maps/search/?api=1&query=臺北市士林區大南路84號" target="_blank" class="t-location-link">
                                📍 地點：慈諴宮廟埕 (臺北市士林區大南路84號)
                            </a>
                        </div>

                        <div class="temple-gallery">
                            <img src="images/temple/慈諴宮.jpg" alt="活動花絮1" >
                        </div>
                    </div>
                </div>

                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">士林區</span>
                        <span class="t-name">天母三玉宮</span>
                        <span class="t-date"><i class="far fa-calendar-alt"></i> 115年3月3日</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="temple-text-full">
                            <h4>「弄土地公」上元祈福活動</h4>
                            <p>農曆正月十五日為上元節，於當天13時30分舉辦「弄土地公」活動，抬著土地公神轎穿梭於天母地區，祈求新的一年財運亨通，並於19時於廟埕前施放煙火。</p>
                            
                            <a href="https://www.google.com/maps/search/?api=1&query=臺北市士林區天母東路6號" target="_blank" class="t-location-link">
                                📍 地點：天母三玉宮廟埕 (臺北市士林區天母東路6號至天母地區)
                            </a>
                        </div>

                        <div class="temple-gallery">
                            <img src="images/temple/天母三玉宮.jpg" alt="活動花絮1" >
                        </div>
                    </div>
                </div>

                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">士林區</span>
                        <span class="t-name">財團法人台北市士林神農宮</span>
                        <span class="t-date"><i class="far fa-calendar-alt"></i> 115年3月3日</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="temple-text-full">
                            <h4>「弄土地公」上元祈福活動</h4>
                            <p>上元節乃天官大帝華誕，故燃燈以慶，於廟埕設置平安燈，隆重莊嚴、承載眾生祈願，並於上元節舉辦「弄土地公」活動，由壯漢打赤膊抬著土地公神轎穿梭於炮陣之中，祈求新的一年財運亨通，店家或民家通常會準備大量的鞭炮迎接，相信放得愈多就賺愈多，為上元祈福之百年元宵傳統民俗活動。</p>
                            
                            <a href="https://www.google.com/maps/search/?api=1&query=臺北市士林區前街74號" target="_blank" class="t-location-link">
                                📍 地點：神農宮廟埕前至士林舊街範圍 (臺北市士林區前街74號)
                            </a>
                        </div>

                        <div class="temple-gallery">
                            <img src="images/temple/財團法人台北市士林神農宮r.jpg" alt="活動花絮1" >
                        </div>
                        
                    </div>
                </div>

                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">士林區</span>
                        <span class="t-name">芝山巖惠濟宮</span>
                        <span class="t-date"><i class="far fa-calendar-alt"></i> 115年2月28日、3月1日、3月3日</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="temple-text-full">
                            <h4>平安燈籠步道、小提燈發放</h4>
                            <p>農曆新春期間，自山下芝山巖惠濟宮大牌樓沿著登山步道漫步而上，兩側櫻花盛開，伴隨著通向古隘門的平安燈籠，景色優美，是新春走春祈福的最佳去處，於大年初一亮燈，象徵整年平安祈福及濃厚節慶氛圍。</p>
                            <p>元宵節慶期間有行大運小提燈發送(送完為止)，於2月28日、3月2日、3日18時開始發送。另於，土地公的登轎祭典時間為19時，弄土地公時間19時30分、20時。</p>
                            <h4>「元宵暝弄土地公」布袋戲表演</h4>
                            <p>3月3日上元節舉辦「元宵暝 弄土地公」 活動，規劃布袋戲演出時間14時、18時。</p>
                            <h4>「元宵暝弄土地公」土地公登轎祭典及弄土地公活動</h4>
                            <p>3月3日上元節舉辦「元宵暝 弄土地公」 活動，土地公的登轎祭典時間為19時，弄土地公時間19時30分、20時。</p>

                            <a href="https://www.google.com/maps/search/?api=1&query=臺北市士林區至誠路1段326巷26號" target="_blank" class="t-location-link">
                                📍 地點：芝山巖惠濟宮廟埕 (臺北市士林區至誠路一段326巷26號) 

                            </a>
                        </div>

                        <div class="temple-gallery">
                            <img src="images/temple/芝山巖惠濟宮.jpg" alt="活動花絮1" >
                        </div>
                        
                    </div>
                </div>

                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">大同區</span>
                        <span class="t-name">財團法人台北保安宮</span>
                        <span class="t-date"><i class="far fa-calendar-alt"></i> 115年2月21日至3月3日</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="temple-text-full">
                            <h4>馬年主燈展示及元宵燈節活動</h4>
                            <p>為了慶祝元宵佳節，邀請花燈藝師製作以生肖「馬」為設計概念的元宵主題花燈，不論日間或夜間都能看到花燈的藝術之美，並於大年初五及元宵節提供特色小提燈贈與參訪信眾，歡迎民眾扶老攜幼閤家前來保安宮共享新春喜慶！</p>
                            
                            <a href="https://www.google.com/maps/search/?api=1&query=臺北市大同區哈密街61號" target="_blank" class="t-location-link">
                                📍 地點：財團法人台北保安宮 (臺北市大同區哈密街61號)

                            </a>
                        </div>

                        <div class="temple-gallery">
                            <img src="images/temple/財團法人台北保安宮.jpg" alt="活動花絮1" >
                        </div>
                        
                    </div>
                </div>

                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">大同區</span>
                        <span class="t-name">台北霞海城隍廟</span>
                        <span class="t-date"><i class="far fa-calendar-alt"></i> 115年3月3日</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="temple-text-full">
                            <h4>元宵活動</h4>
                            <p>上元時於正月15日（國曆3月3日）子時（約14日23時15分）舉行拜三界公的儀式，特設頂下桌，頂桌有三界公三座、敬獻各種素果鮮花等供品並於敬拜時由管理人率領廟方工作人員及前來祝壽的信眾一同祝禱祈福。</p>
                            <p>此外，為了慶祝元宵節，霞海城隍廟將會舉行一連串的節目與活動，並在元宵節當天發放馬年小提燈給小朋友同樂，歡迎各位信眾前來參觀。</p>
                            
                            <a href="https://maps.app.goo.gl/acWa3PdBiQQnY84W6" target="_blank" class="t-location-link">
                                📍 地點：台北霞海城隍廟 (臺北市大同區迪化街一段61號)

                            </a>
                        </div>

                        <div class="temple-gallery">
                            <img src="images/temple/台北霞海城隍廟.jpg" alt="活動花絮1" >
                        </div>
                        
                    </div>
                </div>

                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">中正區</span>
                        <span class="t-name">財團法人台北市臺灣省城隍廟</span>
                        <span class="t-date"><i class="far fa-calendar-alt"></i> 115年2月9日至3月31日（2月26日、2月28日、3月3日、3月7日燈謎擂台）</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="temple-text-full">
                            <h4>省城隍廟燈海隧道及平安橋及燈謎擂臺</h4>
                            <ul>
                                <li>省城隍廟秉持城隍爺愛民、與民同樂的初衷，請廠商進行設計，於115年2月9日至3月31日期間，在武昌街1段(重慶南路至中華路1段路段)設置美麗的燈海隧道，於天棚式燈廊上方點綴璀璨的星光燈飾，營造夜間美感。</li>
                                <li>廟方特別配合台北燈節期間增設「城隍平安橋」，增加民眾賞燈景點。</li>
                                <li>循例於115/2/26(四)、2/28(六)、3/3(二)、3/7(六)等4日在省城隍廟設置燈謎擂臺，歡迎大家攜家帶眷前來共襄盛舉。</li>
                            </ul>
                            
                            <a href="https://www.google.com/maps/search/?api=1&query=臺北市中正區武昌街一段" target="_blank" class="t-location-link">
                                📍 地點：武昌街一段 (重慶南路至中華路一段路段) 

                            </a>
                        </div>

                        <div class="temple-gallery">
                            <img src="images/temple/財團法人台北市臺灣省城隍廟_v2.jpg" alt="活動花絮1" >
                        </div>
                        
                    </div>
                </div>

                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">內湖區</span>
                        <span class="t-name">梘頭福德祠</span>
                        <span class="t-date"><i class="far fa-calendar-alt"></i> 115年2月3日至3月20日</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="temple-text-full">
                            <h4>內湖老街元宵燈節</h4>
                            <p>配合2026台北燈節於115年2月3日至3月20日辦理「內湖老街元宵燈節」活動，燈區設置區域於擁有百年歷史的「梘頭福德祠」周邊街道；LED牆主燈與內湖老街燈海將以傳統、環保與現代方式相互輝映，搭配色彩繽紛燈海，呈現內湖老街濃濃的年味。</p>
                            
                            <a href="https://www.google.com/maps/search/?api=1&query=臺北市內湖區內湖路2段450號" target="_blank" class="t-location-link">
                                📍 地點：梘頭福德祠前 (內湖區內湖路二段450號) 

                            </a>
                        </div>

                        <div class="temple-gallery">
                            <img src="images/temple/梘頭福德祠.jpg" alt="活動花絮1" >
                        </div>
                        
                    </div>
                </div>

                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">北投區</span>
                        <span class="t-name">財團法人台北市關渡宮</span>
                        <span class="t-date"><i class="far fa-calendar-alt"></i> 115年2月17日至3月15日</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="temple-text-full">
                            <h4>春節及元宵活動</h4>
                            <ul>
                                <li>傳統花燈、電動花燈展示。</li>
                                <li>提供福食。</li>
                                <li>手作DIY活動。</li>
                                <li>捐血活動。</li>
                                <li>董監事發送錢母。</li>
                                <li>發送關渡宮馬年小提燈。</li>
                            </ul>

                            <a href="https://www.google.com/maps/search/?api=1&query=臺北市北投區知行路360號" target="_blank" class="t-location-link">
                                📍 地點：關渡宮 (臺北市北投區知行路360號) 

                            </a>
                        </div>

                        <div class="temple-gallery">
                            <img src="images/temple/財團法人台北市關渡宮.jpg" alt="活動花絮1" >
                        </div>
                        
                    </div>
                </div>

                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">北投區</span>
                        <span class="t-name">石牌福星宮</span>
                        <span class="t-date"><i class="far fa-calendar-alt"></i> 115年2月16日至3月20日</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="temple-text-full">
                            <h4>元宵燈飾</h4>
                            <p>傳燈花燈展示</p>

                            <a href="https://www.google.com/maps/search/?api=1&query=臺北市北投區自強街5巷22號" target="_blank" class="t-location-link">
                                📍 地點：福星宮廟前 (臺北市北投區自強街5巷22號) 

                            </a>
                        </div>

                        <div class="temple-gallery">
                            <img src="images/temple/石牌福星宮.jpg" alt="活動花絮1" >
                        </div>
                        
                    </div>
                </div>

                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">松山區</span>
                        <span class="t-name">財團法人台北市松山慈祐宮</span>
                        <span class="t-date"><i class="far fa-calendar-alt"></i> 114年12月31日至115年5月12日</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="temple-text-full">
                            <h4>「馬躍松山迎新春」元宵花燈展示及猜燈謎晚會活動</h4>
                            <p>2025年松山慈祐宮將展示元宵燈飾，以「馬躍松山迎新春」為主題，並以燈籠海搭配呈現，置於該宮廟前廣場；宮內舉辦學生花燈作品展覽，鼓勵學生傳承花燈製作技藝，由廟方代表評選獎勵得獎作品。另暫定於115年3月3日以元宵民俗文化為主題，結合松山區公所，合作辦理「2026錫口文化節-元宵猜燈謎晚會」活動，規劃舞台表演及猜燈謎晚會。</p>
                            
                            <a href="https://www.google.com/maps/search/?api=1&query=臺北市松山區八德路4段761號" target="_blank" class="t-location-link">
                                📍 地點：松山慈祐宮廟內及宮廟前廣場 (臺北市松山區八德路四段761號) 
                            </a>
                        </div>

                        <div class="temple-gallery">
                            <img src="images/temple/財團法人台北市松山慈祐宮_v2.jpg" alt="活動花絮1" >
                        </div>
                        
                    </div>
                </div>

                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">信義區</span>
                        <span class="t-name">松山奉天宮</span>
                        <span class="t-date"><i class="far fa-calendar-alt"></i> 115年2月14日至3月3日</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="temple-text-full">
                            <h4>春節及元宵燈飾</h4>
                            <p>於農曆年前一週至元宵節此段期間，於宮廟周邊以小燈籠妝點，讓前來松山奉天宮參拜祈福之信眾感受濃厚的新年氣息，農曆「正月初九」玉皇上帝的生日，各地信眾前來為玉皇上帝祝壽，也替自己與家人祈福。</p>
                            
                            <a href="https://www.google.com/maps/search/?api=1&query=臺北市信義區福德街221巷12號" target="_blank" class="t-location-link">
                                📍 地點：松山奉天宮 (臺北市信義區福德街221巷12號) 
                            </a>
                        </div>

                        <div class="temple-gallery">
                            <img src="images/temple/松山奉天宮.jpg" alt="活動花絮1" >
                        </div>
                        
                    </div>
                </div>

                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">信義區</span>
                        <span class="t-name">松山慈惠堂</span>
                        <span class="t-date"><i class="far fa-calendar-alt"></i> 115年2月25日至3月15日</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="temple-text-full">
                            <h4>「馬上有錢」主燈展示</h4>
                            <p>為弘揚傳統民俗技藝，松山慈惠堂每年都會請燈藝師傅製作大型花燈，配合2026台北燈節，於農曆新年期間將主燈設置於西門町，並於該堂周邊飾以小型燈籠，歡迎民眾過年期間至松山慈惠堂賞燈祈福。</p>
                            
                            <a href="https://www.google.com/maps/search/?api=1&query=臺北市信義區福德街251巷33號" target="_blank" class="t-location-link">
                                📍 地點：西門展區中華路東側人行道以及松山慈惠堂 (臺北市信義區福德街251巷33號)
                            </a>
                        </div>

                        <div class="temple-gallery">
                            <img src="images/temple/松山慈惠堂.jpg" alt="活動花絮1" >
                        </div>
                        
                    </div>
                </div>

                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">信義區</span>
                        <span class="t-name">佛光山寺（佛光山台北道場）</span>
                        <span class="t-date"><i class="far fa-calendar-alt"></i> 115年2月7日至3月3日</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="temple-text-full">
                            <h4>「和諧共生，馬到成功」主燈展示</h4>
                            <p>佛光山響應2026台北燈節，展區以「和諧共生，馬到成功」為主軸，規劃祈願祝福區、才藝表演、捐血活動、三好市集，並以新春揮毫墨寶結緣，增添文化喜氣與暖心祝福，帶領大眾一同點亮心燈、光照大千！讓所有市民感受溫暖光明、快樂和諧的新年。</p>
                            
                            <a href="https://www.google.com/maps/search/?api=1&query=臺北市松山區松山路/松隆路交叉口" target="_blank" class="t-location-link">
                                📍 地點：松山火車站南側交4廣場 (臺北市松山區松山路/松隆路交叉口)
                            </a>
                        </div>

                        <div class="temple-gallery">
                            <img src="images/temple/佛光山寺_v2.jpg" alt="活動花絮1" >
                        </div>
                        
                    </div>
                </div>

                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">萬華區</span>
                        <span class="t-name">台北天后宮</span>
                        <span class="t-date"><i class="far fa-calendar-alt"></i> 114年12月25日至115年3月8日</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="temple-text-full">
                            <h4>元宵燈飾</h4>
                            <p>由台北天后宮舉辦的元宵花燈，以手工花燈展現宗教信仰與歷史典故等人文意涵，於台北天后宮樓面展出，另宮廟周邊有妝點小燈籠及流水燈，並於捷運西門站6號出口前設置燈飾。</p>
                            
                            <a href="https://www.google.com/maps/search/?api=1&query=臺北市萬華區成都路51號" target="_blank" class="t-location-link">
                                📍 地點：台北天后宮樓面及其周邊人行道 (臺北市萬華區成都路51號) 
                            </a>
                        </div>

                        <div class="temple-gallery">
                            <img src="images/temple/台北天后宮_v2.jpg" alt="活動花絮1" >
                        </div>
                        
                    </div>
                </div>

                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">萬華區</span>
                        <span class="t-name">財團法人台北市艋舺龍山寺</span>
                        <span class="t-date"><i class="far fa-calendar-alt"></i> 115年2月7日至3月8日</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="temple-text-full">
                            <h4>元宵燈飾</h4>
                            <p>由艋舺龍山寺舉辦的元宵花燈展覽，以手工花燈展現宗教信仰與歷史典故等人文意涵，除了寺內設置平安燈、生肖主燈與瀑布區景觀造景燈外，宮廟周邊亦妝點小燈籠。另於艋舺公園設置值年生肖主燈及周邊光環境。 </p>
                            
                            <a href="https://www.google.com/maps/search/?api=1&query=臺北市萬華區廣州街211號" target="_blank" class="t-location-link">
                                📍 地點：艋舺龍山寺、艋舺公園及其周邊人行道（臺北市萬華區廣州街211號）
                            </a>
                        </div>

                        <div class="temple-gallery">
                            <img src="images/temple/財團法人台北市艋舺龍山寺.jpg" alt="活動花絮1" >
                        </div>
                        
                    </div>
                </div>

                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">萬華區</span>
                        <span class="t-name">艋舺青山宮</span>
                        <span class="t-date"><i class="far fa-calendar-alt"></i> 115年2月9日至3月8日</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="temple-text-full">
                            <h4>元宵燈飾</h4>
                            <p>興建於清咸豐6年(西元1856年)，為市定古蹟，主祀宋朝敕封【靈安尊王】張悃，神格類似城隍爺掌理陰間司法，每年農曆10月20日至23日舉辦【青山王祭典】俗稱艋舺大拜拜，是臺北最有特色的宗教觀光節慶活動。 </p>
                            <p>燈節期間將於宮廟前設置響應主題之主燈，並於周邊路樹妝點燈飾及小燈籠。 </p>

                            <a href="https://www.google.com/maps/search/?api=1&query=臺北市萬華區貴陽街二段218號" target="_blank" class="t-location-link">
                                📍 地點：艋舺青山宮周邊（臺北市萬華區貴陽街二段218號）

                            </a>
                        </div>

                        <div class="temple-gallery">
                            <img src="images/temple/艋舺青山宮.jpg" alt="活動花絮1" >
                        </div>
                        
                    </div>
                </div>

                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">南港區</span>
                        <span class="t-name">玉成公園福德宮</span>
                        <span class="t-date"><i class="far fa-calendar-alt"></i> 115年3月3日 (暫定)</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="temple-text-full">
                            <h4>元宵小提燈發放</h4>
                            <p>為土地公福澤廣被，祝福信眾馬到功成，將發放精美燈籠活動，ㄧ同感受元宵佳節的傳統魅力與氛圍。</p>

                            <a href="https://www.google.com/maps/search/?api=1&query=臺北市南港區中坡南路51號" target="_blank" class="t-location-link">
                                📍 地點：玉成公園福德宮廟埕前（臺北市南港區中坡南路51號）
                            </a>
                        </div>

                        <div class="temple-gallery">
                            <img src="images/temple/玉成公園福德宮.jpg" alt="活動花絮1" >
                        </div>
                        
                    </div>
                </div>

                <div class="temple-item">
                    <div class="temple-header" onclick="toggleTemple(this)">
                        <span class="t-district">南港區</span>
                        <span class="t-name">富南宮</span>
                        <span class="t-date"><i class="far fa-calendar-alt"></i> 115年3月3日</span>
                        <div class="t-arrow"></div>
                    </div>
                    <div class="temple-content">
                        <div class="temple-text-full">
                            <h4>富南宮元宵團圓煮元宵</h4>
                            <p>元宵節當日，富南宮準備熱騰騰的元宵，邀請厝邊鄰里一同歡聚，共享節慶美味與溫馨時光。</p>

                            <a href="https://www.google.com/maps/search/?api=1&query=臺北市南港區研究院路一段112號" target="_blank" class="t-location-link">
                                📍 地點：富南宮土地公殿前 (臺北市南港區研究院路一段112號)
                            </a>
                        </div>

                        <div class="temple-gallery">
                            <img src="images/temple/富南宮.jpg" alt="活動花絮1" >
                        </div>
                        
                    </div>
                </div>





            </div>
        </div>

<!-- 商圈活動 -->
        <div id="cat-shop" class="main-cat-content">
            <div style="text-align: center; padding: 50px; color: var(--text-sub);">
                <h3>商圈優惠與活動</h3>
                <p>資料整理中，敬請期待...</p>
            </div>
        </div>

<!-- 場館響應 -->
        <div id="cat-venue" class="main-cat-content">
            
            <div class="sub-category-nav">
                <button class="sub-cat-btn active" onclick="switchSubCat(event, 'event1')">漢衣相逢</button>
                <button class="sub-cat-btn" onclick="switchSubCat(event, 'event2')">來台北有購嗨</button>
                <button class="sub-cat-btn" onclick="switchSubCat(event, 'event3')">2025 閃耀！捷運光聚落</button>
                <button class="sub-cat-btn" onclick="switchSubCat(event, 'event4')">2026 花IN台北</button>
            </div>

            <div id="event1" class="tab-content active">
                <div class="featured-event-card">
                    
                    <div class="featured-img-box">
                        <img src="images/events/wandering.jpg" alt="漢衣相逢．榮町漫遊">
                    </div>

                    <div class="featured-content">
                        <h3 class="featured-title">漢衣相逢．榮町漫遊</h3>
                        
                        <p class="featured-desc">
                            結合2026台北燈節中山堂燈區，及榮町商圈的漢服文化，以漢服妝扮復古漫遊榮町，體驗沉浸式賞燈。透過以「有情境的交流」為核心設計，安排單身男女攜手走入榮町商圈街道與榮町漫市集、周邊古蹟等，結合燈節期間的榮町漫市集、街區景觀走逛、美食品嘗、傳統文化體驗，讓單身男女在參與活動的同時，也能深入感受台北燈節、中正區與榮町商圈的城市魅力及特色。
                        </p>
                        
                        <ul class="featured-info-list">
                            <li>
                                <span class="info-label">報名時間</span>
                                <span class="info-text">115年1月23日至115年2月28日或額滿為止。</span>
                            </li>
                            <li>
                                <span class="info-label">報名資格</span>
                                <span class="info-text">年滿25歲(含)以上，設籍、居住、工作或就學於臺北市之單身男、女。<br>（未曾參加本區單身聯誼者優先錄取）</span>
                            </li>
                        </ul>

                        <div class="featured-action">
                             <a href="https://www.accupass.com/event/2512240135302846817110" target="_blank" class="btn-main">
                                立即報名 >
                             </a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="event2" class="tab-content">
                <div class="featured-event-card">
                    
                    <div class="featured-img-box">
                        <img src="images/events/gohigh.jpg" alt="來台北有購嗨">
                    </div>

                    <div class="featured-content">
                        <h3 class="featured-title">來台北有購嗨</h3>
                        
                        <p class="featured-desc">
                            臺北市商業處為配合中央普發現金政策，辦理「來台北有購嗨 消費歡樂抽」消費登錄抽獎活動，活動自114年12月1日開始，可登錄114年11月至115年3月的發票，並規劃推出週週抽iPhone 17 Pro、月月抽台積電、市民專屬加碼抽及總抽大獎1,000萬現金等活動，總計抽出超過萬名得獎者，總獎值超過新臺幣3,000萬元，消費200元即可獲得1次抽獎機會，單筆最高100次抽獎機會，友好特店消費抽獎機會再翻倍，消費越多中獎機會越高！
                        </p>

                        <div class="featured-action">
                             <a href="https://2026newyear.taipei/event-05" target="_blank" class="btn-main">
                                了解更多 >
                             </a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="event3" class="tab-content">
                <div class="featured-event-card">
                    
                    <div class="featured-img-box">
                        <img src="images/events/metro-taipei.jpg" alt="2025閃耀! 捷運光聚落 立在光年">
                    </div>

                    <div class="featured-content">
                        <h3 class="featured-title">2025閃耀! 捷運光聚落 立在光年</h3>
                        
                        <p class="featured-desc">
                            「2025閃耀!捷運光聚落」再度點亮歲末的臺北！即日起至3月15日，臺北捷運公司打造全長近1公里的夢幻光廊，串聯心中山線形公園、心雙連線形公園，更首度將展區延伸至心中山線形公園南段。
                        </p>

                        <div class="featured-action">
                             <a href="https://www.metro.taipei/News_Content.aspx?n=30CCEFD2A45592BF&sms=72544237BBE4C5F6&s=BB44EF7BD7079631" target="_blank" class="btn-main">
                                了解更多 >
                             </a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="event4" class="tab-content">
                <div class="featured-event-card">
                    
                    <div class="featured-img-box">
                        <img src="images/events/flowers-taipei.jpg" alt="2026 花IN台北">
                    </div>

                    <div class="featured-content">
                        <h3 class="featured-title">2026 花IN台北</h3>
                        
                        <p class="featured-desc">
                            115年度陽明山花季以「春光花語」為主題，特別攜手與臺灣最大香氛製造單位-亞洲香研所跨界聯名合作，打造低碳、永續、自然主題，透過專業製香技術進行客製化調香，形塑專屬於陽明山花季的季節氣味，更展現獨一無二的季節感與文化意涵。除此之外，今年持續邀請近年活躍於國內外藝文與設計領域的臺灣竹工藝藝術家林靖格老師參與創作，致力於傳統技藝及深耕竹編工藝的當代表現，以天然材料為基礎之竹編藝術裝置。並於假日活動時間舉辦清山淨水活動、在地學校與社區鄰里合作辦理湖山光影暨學校表演活動，讓民眾可以賞櫻花、亦可觀賞藝術文物展，享受悠閒的賞花時光，活動預計吸引超過百萬遊客入園參觀。歡迎民眾賞燈前一起先前往走春賞花。
                        </p>

                        <div class="featured-action">
                             <a href="https://www.flowersfestival.taipei/" target="_blank" class="btn-main">
                                了解更多 >
                             </a>
                        </div>
                    </div>
                </div>
            </div>

        </div> </main>

    <?php include 'footer.php'; ?>
    <script src="js/script.js"></script>
</body>
</html>