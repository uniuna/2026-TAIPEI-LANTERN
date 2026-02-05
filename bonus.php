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
            <button class="main-cat-btn" onclick="switchMainCat('shop', this)">商圈活動</button>
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
                                <li>省城隍廟秉持城隍爺愛民、與民同樂的初衷，於115年2月9日至3月31日期間，在武昌街1段(重慶南路至中華路1段路段)設置美麗的燈海隧道，於天棚式燈廊上方點綴璀璨的星光燈飾，營造夜間美感。</li>
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

            <div class="sub-category-nav">
                <button type="button" class="sub-cat-btn active" onclick="switchSubCat(event, 'shop-1')">台北地下街</button>
                <button type="button" class="sub-cat-btn" onclick="switchSubCat(event, 'shop-2')">榮町商圈</button>
                <button type="button" class="sub-cat-btn" onclick="switchSubCat(event, 'shop-3')">沅陵街商圈</button>
                <button type="button" class="sub-cat-btn" onclick="switchSubCat(event, 'shop-4')">中華路影音街</button>
                <button type="button" class="sub-cat-btn" onclick="switchSubCat(event, 'shop-5')">北門相機商圈</button>
                <button type="button" class="sub-cat-btn" onclick="switchSubCat(event, 'shop-6')">重南書街</button>
                <button type="button" class="sub-cat-btn" onclick="switchSubCat(event, 'shop-7')">中山商圈</button>
            </div>

            <div id="shop-1" class="shop-content-block">
                <div class="featured-event-card">
                    <div class="featured-img-box">
                        <img src="images/events/好運吉馬來.jpg" alt="好運吉馬來">
                    </div>
                    <div class="featured-content">
                        <h3 class="featured-title">歡樂燈節 好運吉馬來 假日快閃送</h3>
                        <div class="featured-info">
                            <p><strong>📅 時間：</strong>115年2/27.28.3/1.7.8.14.15 (每日11:00-21:30)</p>
                            <p><strong>📍 地點：</strong>台北地下街8號廣場服務台 (近Y12U出口ATM旁)</p>
                        </div>
                        <hr class="card-divider">
                        <p class="featured-desc">
                            活動簡述：<br>
                            1. 燈節好運吉馬來，滿888元，吉馬來特製招牌小燈箱(一個)<br>
                            2. 轉來好運馬上到，滿2000元，好運轉盤遊戲(一次)。通通有獎，各式好禮等您帶回家。
                            <span>(數量有限，送完為止，每人/每日/每張發票限參加一次)</span>
                            <br><br>
                            活動報名方式或資格：<br>
                            以下指定日期(2/27.2/28.3/1.7.8.14.15)，憑台北地下街當日消費滿指定金額之發票，<br>
                            即可於活動贈獎處(8號廣場服務台)(近Y12U出口)，參加以下現場贈獎活動。
                        </p>
                    </div>
                </div>
                <div class="featured-event-card">
                    <div class="featured-content">
                        <h3 class="featured-title">乾燥花相框 DIY體驗</h3>
                        <div class="featured-info">
                            <p><strong>📅 時間：</strong>114年3月14日(六) 下午2點起</p>
                            <p><strong>📍 地點：</strong>四號廣場 (近Y19出口)</p>
                        </div>
                        <hr class="card-divider">
                        <p class="featured-desc">
                            "我們的故事，悄悄開成一朵花"<br>讓我們用乾燥花，把與重要的人一起度過的時刻， 在這個相框裡，把回憶永遠珍藏。
                            <br><br>
                            活動報名方式或資格：<br>
                            現場報名：憑本地下街當日消費累積滿500元發票，每人每張發票限參加一次。 (數量有限，額滿為止)
                        </p>
                    </div>
                </div>
            </div>

            <div id="shop-2" class="shop-content-block">
                <div class="featured-event-card">
                    <div class="featured-img-box">
                        <!-- <img src="images/events/shopping_default.jpg" alt="榮町漫市集元宵燈節活動"> -->
                    </div>
                    <div class="featured-content">
                        <h3 class="featured-title">榮町漫市集元宵燈節活動</h3>
                        <div class="featured-info">
                            <p><strong>📅 時間：</strong>115年2月25日至3月15日 平日 17:00~22:00 / 假日 16:00~22:00</p>
                            <p><strong>📍 地點：</strong>永綏街</p>
                        </div>
                        <hr class="card-divider">
                        <p class="featured-desc">
                            「榮町漫市集元宵燈節活動」以傳統節慶文化為核心，結合榮町商圈的歷史街區風貌與當代市集美學，打造一場兼具文化深度與生活溫度的節慶活動。活動以元宵節「團圓、祈福、迎春」的意象出發，透過攤位燈飾佈置、市集展售與互動體驗，讓民眾在城市中重新感受節慶的溫暖與人情。
                             <br>本次活動規劃多元攤位，邀集在地品牌、文創手作、美食小吃與特色選物，共同形塑具地方特色的市集氛圍；同時搭配燈節主題裝置與夜間燈光設計，提升街區夜間活力，吸引不同年齡層民眾前來參與。透過市集串聯商圈店家與居民，促進人流停留與消費動能，進一步帶動商圈整體活絡。
                        </p>
                        <a href="https://rongting.org/" target="_blank" class="btn-main">了解更多 ></a>
                    </div>
                </div>
                <div class="featured-event-card">
                    <div class="featured-img-box">
                        <img src="images/events/wandering.jpg" alt="漢衣相逢、榮町漫遊">
                    </div>
                    <div class="featured-content">
                        <h3 class="featured-title">漢衣相逢、榮町漫遊</h3>
                        <div class="featured-info">
                            <p><strong>📅 時間：</strong>115年3月14日 13:30-19:00</p>
                            <p><strong>📍 地點：</strong>永綏街</p>
                        </div>
                        <hr class="card-divider">
                        <p class="featured-desc">
                            「漢衣相逢、榮町漫遊」為中正區公所115年度基層藝文活動之一，本次活動結合榮町商圈市集資源，於充滿歷史風情的永綏街舉辦，以傳統燈節文化為背景，打造兼具文化體驗與情感交流的特色活動。透過古色古香的街道氛圍與節慶燈飾佈置，讓參與民眾在城市街區中感受榮町獨有的人文魅力。
                            <br>活動以單身聯誼為主軸，結合漢服意象、市集漫遊與互動體驗，鼓勵參與者在輕鬆自在的氛圍中交流互動，拉近彼此距離。藉由燈節象徵團圓與祝福的文化意涵，營造浪漫溫暖的場域，促使更多參與者勇於表達心意，為城市生活注入情感連結。
                            <br><br>
                            活動報名方式或資格：須至臺北市中正區公所網站報名。
                        </p>
                        <a href="https://www.accupass.com/event/2512240135302846817110" target="_blank" class="btn-main">了解更多 ></a>
                    </div>
                </div>
                <div class="featured-event-card">
                    <div class="featured-img-box">
                        <!-- <img src="images/events/shopping_default.jpg" alt="榮町光律動"> -->
                    </div>
                    <div class="featured-content">
                        <h3 class="featured-title">榮町光律動</h3>
                        <div class="featured-info">
                            <p><strong>📍 地點：</strong>永綏街</p>
                        </div>
                        <hr class="card-divider">
                        <p class="featured-desc">榮町商圈位於城中核心街區，融合老城日常與生活風景。此次妝點以「走進街區的日常」為出發，透過溫暖燈光與趣味元素，讓夜晚街道呈現親切又有活力的氛圍。桃源街及永綏街均設置「榮町商圈」字燈，搭配跨街燈條及人行道上方燈光延伸，清楚標示商圈入口並提升辨識度。永綏街段還加入音符造型燈飾與城中 IP「內行仔」，讓光影如旋律般流動於街道之間。引導民眾漫步街區、拍照打卡，感受榮町的生活節奏與獨特街區故事。</p>
                    </div>
                </div>
            </div>

            <div id="shop-3" class="shop-content-block">
                <div class="featured-event-card">
                    <!-- <div class="featured-img-box">
                        <img src="images/events/shopping_default.jpg" alt="2026沅陵街商圈年貨大街">
                    </div> -->
                    <div class="featured-content">
                        <h3 class="featured-title">2026沅陵街商圈年貨大街</h3>
                        <div class="featured-info">
                            <p><strong>📅 時間：</strong>115年2月4日-2月13日 10:00-20:00</p>
                            <p><strong>📍 地點：</strong>沅陵街</p>
                        </div>
                        <hr class="card-divider">
                        <p class="featured-desc">「沅陵街商圈年貨大街」為每年農曆春節前的重點活動，2026年於2月4日起跑，為期10日的活動，展現皮鞋精品生活用品一條街的多元性，活動包含好物市集、財神爺&吉祥物小沅寶不定時快閃和迎春擲骰子發紅包趣味活動，結合城中區周邊店家及提前上檔的街區燈節裝飾及年節氣氛佈置，為民眾春節前採買補給生活用品之好去處。</p>
                    </div>
                </div>
                <div class="featured-event-card">
                    <div class="featured-img-box">
                        <img src="images/events/點亮沅陵彩燈節.jpg" alt="點亮沅陵彩燈節">
                    </div>
                    <div class="featured-content">
                        <h3 class="featured-title">點亮沅陵彩燈節</h3>
                        <div class="featured-info">
                            <p><strong>📅 時間：</strong>115年3月7日-3月13日 10:00-20:00</p>
                            <p><strong>📍 地點：</strong>沅陵街</p>
                        </div>
                        <hr class="card-divider">
                        <p class="featured-desc">
                            台北沅陵商圈每年搭配燈節舉辦「點亮沅陵彩燈節」系列活動，今年邁入第6年，3月7日至3月13日除了沅陵好物市集特賣會之外，還可以跟著沅陵商圈的代言人「小沅寶」一起到沅陵燈區逛街、猜燈謎、拍照打卡抽禮物。3月7日星期六下午將舉辦「沅陵走春台北燈節大遊行」，3月7日到8日更有彩繪小馬、彩繪燈籠、小馬擴香植栽手作活動可以報名，活動也會結合藝文表演在街區推出！
                            <br>
                            期望透過本次活動，增加民眾遊逛沅陵街的機會，2月25日至3月15也搭配台北燈節活動，於沅陵街設有「沅夜星語」燈節燈組一座，吸引民眾遊逛賞玩成為元宵好去處。
                            <br><br>
                            活動報名方式或資格：市集活動無須報名，體驗活動及遊行需報名。
                        </p>
                    </div>
                </div>
                <div class="featured-event-card">
                    <!-- <div class="featured-img-box">
                        <img src="images/events/shopping_default.jpg" alt="霓彩步步昇">
                    </div> -->
                    <div class="featured-content">
                        <h3 class="featured-title">霓彩步步昇</h3>
                        <div class="featured-info">
                            <p><strong>📍 地點：</strong>沅陵街</p>
                        </div>
                        <hr class="card-divider">
                        <p class="featured-desc">沅陵商圈位於城中區熱鬧街道，早期以皮鞋產業聞名，故有「皮鞋街」之稱，是一處充滿活力與節慶氣息的特色商圈。本次妝點以「趣味互動與節慶意象」為主軸，沿街吊掛彩色燈籠與大型天燈，營造熱鬧的街區氛圍；跨街燈條延伸街道，串聯各個妝點，形成完整的街區景觀。特別打造客製化城中 IP「內行仔」燈籠，融合在地文化與趣味元素，為民眾帶來親切的互動感受。</p>
                    </div>
                </div>
            </div>

            <div id="shop-4" class="shop-content-block">
                <div class="featured-event-card">
                    <!-- <div class="featured-img-box">
                        <img src="images/events/shopping_default.jpg" alt="響樂到中華">
                    </div> -->
                    <div class="featured-content">
                        <h3 class="featured-title">響樂到中華</h3>
                        <div class="featured-info">
                            <p><strong>📍 地點：</strong>中華路</p>
                        </div>
                        <hr class="card-divider">
                        <p class="featured-desc">中華路影音街長年以專業影音設備聞名，是音樂與影音愛好者的指標商圈。本次妝點以「影音產業特色」為主題，將音響放大成高逾2米、寬達3米的造型打卡裝置，結合霓虹燈光與亮色線條，融入城中 IP「內行仔」，將聲音能量轉化為光影律動，呈現街區節奏。音響裝置中央置入商圈名稱與 LOGO，強化品牌識別。民眾可拍照打卡、與光影互動，體驗街區特色。邀請大家走訪街區，感受中華路影音街的活力與節奏。</p>
                    </div>
                </div>
            </div>

            <div id="shop-5" class="shop-content-block">
                <div class="featured-event-card">
                    <!-- <div class="featured-img-box">
                        <img src="images/events/shopping_default.jpg" alt="定格老城美">
                    </div> -->
                    <div class="featured-content">
                        <h3 class="featured-title">定格老城美</h3>
                        <div class="featured-info">
                            <p><strong>📍 地點：</strong>博愛路</p>
                        </div>
                        <hr class="card-divider">
                        <p class="featured-desc">北門相機商圈以攝影與影像文化聞名，是拍照迷必訪的街區。本次妝點於北門小公園設置拍立得造型打卡裝置燈，於妝點上加入城中IP「內行仔」，裝置造型趣味十足，不僅提供民眾單人或多人拍照打卡的互動體驗，也呼應街區影像文化特色，增強商圈識別度。引導民眾停留、拍照與互動，讓民眾在拍照與互動中深度感受北門相機街的文化底蘊與影像魅力，留下專屬的街區回憶。</p>
                    </div>
                </div>
            </div>

            <div id="shop-6" class="shop-content-block">
                <div class="featured-event-card">
                    <!-- <div class="featured-img-box">
                        <img src="images/events/shopping_default.jpg" alt="墨香新丰采">
                    </div> -->
                    <div class="featured-content">
                        <h3 class="featured-title">墨香新丰采</h3>
                        <div class="featured-info">
                            <p><strong>📍 地點：</strong>重慶南路</p>
                        </div>
                        <hr class="card-divider">
                        <p class="featured-desc">重南書街位於城中區歷史街廓中，擁有濃厚的書香氛圍。本次妝點於騎樓上懸掛樹葉造型燈，像微風搖曳的樹影，為夜晚的街道增添自然律動。妝點中特別設置燈片，一片呈現重南書街商圈 LOGO，另一片展示城中 IP「內行仔」，結合品牌識別，增添街道特色，讓每個角落都成為夜晚的亮點。燈光沿街道延伸，柔和而有節奏，使來到重南書街的每位民眾都能留下深刻印象。</p>
                    </div>
                </div>
            </div>

            <div id="shop-7" class="shop-content-block">
                <div class="featured-event-card">
                    <div class="featured-img-box">
                        <img src="images/events/慶元宵賞花燈.jpg" alt="慶元宵賞花燈">
                    </div>
                    <div class="featured-content">
                        <h3 class="featured-title">慶元宵賞花燈</h3>
                        <div class="featured-info">
                            <p><strong>📅 時間：</strong>115年2月24日至3月5日 08:00-17:00</p>
                            <p><strong>📍 地點：</strong>圓山花博入口廣場</p>
                        </div>
                        <hr class="card-divider">
                        <p class="featured-desc">「慶元宵賞花燈」活動以傳統元宵燈飾為文化基底，融合現代光影藝術設計，透過層次豐富的燈光語彙，形塑溫暖且具儀式感的年節場域，吸引市民與觀光人潮駐足體驗。現場規劃「花博圓滿」元宵主題美食專區，主打現煮湯圓、元宵及養生暖冬系列美食，以味覺延續節慶溫度；並打造「光之市集」亮化策展，透過攤位燈飾設計與整體氛圍營造，提升市集夜間景觀層次。同時招募多元特色選物攤商，引進優質文創手作與在地伴手禮品牌，結合光影、風味與創意，形塑兼具傳統意涵與當代美感的元宵節慶新樣貌。</p>
                    </div>
                </div>
            </div>

        </div>

<!-- 場館響應 -->
        <div id="cat-venue" class="main-cat-content">
            
            <div class="sub-category-nav">
                <button type="button" class="sub-cat-btn active" onclick="switchSubCat(event, 'venue-1')">漢衣相逢</button>
                <button type="button" class="sub-cat-btn" onclick="switchSubCat(event, 'venue-2')">來台北有購嗨</button>
                <button type="button" class="sub-cat-btn" onclick="switchSubCat(event, 'venue-3')">2025 閃耀！捷運光聚落</button>
                <button type="button" class="sub-cat-btn" onclick="switchSubCat(event, 'venue-4')">2026 花IN台北</button>
                <button type="button" class="sub-cat-btn" onclick="switchSubCat(event, 'venue-5')">紅樓選品 X 2026台北燈節</button> 
            </div>

            <div id="venue-1" class="tab-content active">
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

            <div id="venue-2" class="tab-content">
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

            <div id="venue-3" class="tab-content">
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

            <div id="venue-4" class="tab-content">
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

            <div id="venue-5" class="tab-content">
                <div class="featured-event-card">
                    
                    <div class="featured-img-box">
                        <img src="images/events/RedHouseSelect.jpg" alt="紅樓選品 X 2026台北燈節">
                    </div>

                    <div class="featured-content">
                        <h3 class="featured-title">紅樓選品 X 2026台北燈節</h3>
                        
                        <p class="featured-desc">
                            西門紅樓選品文創賣店集結臺灣26家品牌進駐，以臺灣美學、紀念禮品以及臺灣IP圖文，呈現臺灣文創魅力給國際觀光客！今年響應2026台北燈節，凡於2/17-3/17至紅樓選品消費滿500元即贈來店好禮乙份，同場新春加碼，於指定品牌消費滿還可享品牌專屬小禮物，數量有限換送完為止。
                        </p>

                        <ul class="featured-info-list">
                            <li>
                                <span class="info-label">活動期間：</span>
                                <span class="info-text">2/17 - 3/17</span>
                            </li>
                            <li>
                                <span class="info-label">合作品牌：</span>
                                <span class="info-text">dtto friends、猴子設計、遊木時光、券券文化、幽默之星、查高插畫、HEY SUN、陸陸參陸、獨木設計、游於藝-我愛台灣、你好創意設計</span>
                            </li>
                        </ul>

                        <!-- <div class="featured-action">
                             <a href="https://www.flowersfestival.taipei/" target="_blank" class="btn-main">
                                了解更多 >
                             </a>
                        </div> -->
                    </div>
                </div>
            </div>

        </div> </main>

    <?php include 'footer.php'; ?>
    <script src="js/script.js"></script>
</body>
</html>