
/* --------- 手機版選單切換腳本 --------- */

// 手機版選單切換腳本
function toggleMenu() {
    const nav = document.getElementById('navLinks');
    nav.classList.toggle('active');
}

/* 解決 iOS 手機版選單需要點兩次的問題 */
document.addEventListener("DOMContentLoaded", function() {
    // 偵測是否為觸控裝置
    const isTouch = 'ontouchstart' in window || navigator.maxTouchPoints > 0;

    if (isTouch) {
        // 針對選單內的連結，綁定 touchend 事件直接觸發跳轉
        const navLinks = document.querySelectorAll('.nav-links a');
        
        navLinks.forEach(link => {
            link.addEventListener('touchend', function(e) {
                // 如果這個連結有 href 且不是空連結
                if (this.href && this.href !== '#' && this.href !== 'javascript:void(0)') {
                    // 稍微延遲一點點，讓視覺回饋跑完 (可選)
                    // window.location.href = this.href; 
                }
            });
        });
    }
});



/* --------- Tab 頁籤切換功能 (index) --------- */

function openYearTab(evt, tabId) {
    // 1. 隱藏所有年份內容
    const contents = document.getElementsByClassName("year-content");
    for (let i = 0; i < contents.length; i++) {
        contents[i].classList.remove("active");
        contents[i].style.display = "none";
    }

    // 2. 移除所有按鈕 active 狀態
    const buttons = document.querySelectorAll(".year-tabs .tab-btn");
    buttons.forEach(btn => btn.classList.remove("active"));

    // 3. 顯示選中的年份
    const target = document.getElementById(tabId);
    if (target) {
        target.style.display = "block";
        setTimeout(() => {
            target.classList.add("active");
        }, 10);
    }

    // 4. 按鈕設為 active
    evt.currentTarget.classList.add("active");
}



/* --------- Tab 頁籤切換功能 (event) --------- */

function openTab(evt, tabName) {
    var i, tabContent, tabBtns;

    // 1. 隱藏所有內容區塊
    tabContent = document.getElementsByClassName("tab-content");
    for (i = 0; i < tabContent.length; i++) {
        tabContent[i].style.display = "none";
        tabContent[i].classList.remove("active");
    }

    // 2. 移除所有按鈕的 "active" 樣式
    // [修改] 改用 classList.remove，不用管字串空白問題
    tabBtns = document.getElementsByClassName("tab-btn");
    for (i = 0; i < tabBtns.length; i++) {
        tabBtns[i].classList.remove("active");
    }

    // 3. 顯示被點擊的區塊
    document.getElementById(tabName).style.display = "block";
    setTimeout(() => {
        document.getElementById(tabName).classList.add("active");
    }, 10);
    
    // [修改] 改用 classList.add 來新增樣式
    evt.currentTarget.classList.add("active");
}



/* --------- 場館響應：雙層 Tab 頁籤切換功能 (bonus) --------- */

// --- 第一層：主分類切換 ---
function switchMainCat(catId, btnElement) {
    // 1. 隱藏所有主內容區塊
    const contents = document.getElementsByClassName('main-cat-content');
    for (let i = 0; i < contents.length; i++) {
        contents[i].classList.remove('active');
    }

    // 2. 移除所有主按鈕的 active 狀態
    const btns = document.getElementsByClassName('main-cat-btn');
    for (let i = 0; i < btns.length; i++) {
        btns[i].classList.remove('active');
    }

    // 3. 顯示目標區塊
    document.getElementById('cat-' + catId).classList.add('active');

    // 4. 設定當前按鈕為 active
    btnElement.classList.add('active');
}

// --- 第二層：原本的 Tab 切換 (通用版) ---
function switchSubCat(evt, contentId) {
    // 1. 防止連結預設跳轉
    if(evt) evt.preventDefault();
    
    // 2. 取得點擊按鈕的「父層容器」(.sub-category-nav)
    var btn = evt.currentTarget;
    var navContainer = btn.parentElement;
    
    // 3. 找到這個次選單控制的「主要內容區域」(.main-cat-content)
    var mainContainer = navContainer.closest('.main-cat-content');
    
    // 4. 【關鍵修正】同時抓取 "tab-content" (舊版/場館) 和 "shop-content-block" (新版/商圈)
    // 這樣兩個區塊都能被正確隱藏
    var contents = mainContainer.querySelectorAll('.tab-content, .shop-content-block');
    
    contents.forEach(function(div) {
        div.style.display = "none";
        div.classList.remove("active"); // 移除 active 確保樣式重置
    });

    // 5. 移除該導覽列中所有按鈕的 active 狀態
    var buttons = navContainer.querySelectorAll('.sub-cat-btn');
    buttons.forEach(function(b) {
        b.classList.remove("active");
    });

    // 6. 顯示目標內容
    var targetDiv = document.getElementById(contentId);
    if (targetDiv) {
        targetDiv.style.display = "block";
        targetDiv.classList.add("active");
        
        // 觸發淡入動畫 (重置 animation)
        targetDiv.style.animation = 'none';
        targetDiv.offsetHeight; /* trigger reflow */
        targetDiv.style.animation = 'fadeIn 0.5s ease-in-out';
    }
    
    // 7. 將點擊的按鈕設為 active
    btn.classList.add("active");
}



/* --------- 宮廟活動：手風琴列表切換 (bonus）--------- */

function toggleTemple(header) {
    // 取得點擊的項目的父容器 (.temple-item)
    const item = header.parentElement;
    
    // 取得該項目裡面的內容區塊
    const content = item.querySelector('.temple-content');

    // 切換 active class
    if (item.classList.contains('active')) {
        // 如果已經打開，就關閉
        item.classList.remove('active');
        content.style.display = 'none';
    } else {
        // 如果還沒打開，就打開
        
        // (選擇性) 如果希望一次只能開一個，請保留下面這段迴圈：
        /*
        const allItems = document.querySelectorAll('.temple-item');
        allItems.forEach(el => {
            el.classList.remove('active');
            el.querySelector('.temple-content').style.display = 'none';
        });
        */

        item.classList.add('active');
        content.style.display = 'block';
    }
}



/* --------- 地圖點擊彈窗 (Travel）--------- */

// 開啟圖片彈窗
function openImageModal(src) {
    const modal = document.getElementById('imageLightbox');
    const img = document.getElementById('lightboxImg');
    
    img.src = src;
    modal.style.display = 'flex';
    
    setTimeout(() => {
        modal.classList.add('active');
    }, 10);
}

// 點擊背景關閉
function closeImageModal(event) {
    if (event.target.id === 'imageLightbox') {
        closeImageModalBox();
    }
}

// 執行關閉動作
function closeImageModalBox() {
    const modal = document.getElementById('imageLightbox');
    modal.classList.remove('active');
    setTimeout(() => {
        modal.style.display = 'none';
    }, 300);
}



/* --------- Footer 背景變色偵測 (Intersection Observer) --------- */

document.addEventListener("DOMContentLoaded", function() {
    
    const footer = document.querySelector('footer');
    
    // 如果頁面上有 footer 才執行
    if(footer) {
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                // entry.isIntersecting 代表「是否進入畫面」
                if (entry.isIntersecting) {
                    footer.classList.add('active-mode'); // 進入畫面 -> 變淺灰
                } else {
                    footer.classList.remove('active-mode'); // 離開畫面 -> 變回深色
                }
            });
        }, { 
            threshold: 0.4 // 設定門檻：當 Footer 出現 40% 的面積時觸發
        });

        observer.observe(footer);
    }
});



/* --------- 首頁 Loading 動畫控制腳本 (index) --------- */

window.addEventListener('load', function() {
    const preloader = document.getElementById('preloader');
    
    // 設定一個小延遲 (例如 0.5秒)，讓動畫至少跑一下，避免閃爍
    // 如果想要載入完立刻消失，可以把 setTimeout 去掉，直接執行內部的 code
    setTimeout(() => {
        if(preloader) {
            preloader.classList.add('hide');
        }
    }, 800); // 800毫秒後消失
});



/* --------- 首頁 直播公告彈窗 (index) --------- */

// 1. 先獲取元素
const liveModal = document.getElementById('liveModal');

// 2. 只有在元素存在時，才執行相關邏輯
if (liveModal) {
    window.addEventListener('load', function() {
        if (!sessionStorage.getItem('liveModalClosed')) {
            setTimeout(() => {
                openLiveModal();
            }, 1000); 
        }
    });

    // 點擊背景關閉的監聽器也要放在 if 判斷內
    liveModal.addEventListener('click', function(e) {
        if (e.target === this) {
            closeLiveModal();
        }
    });
}

function openLiveModal() {
    const modal = document.getElementById('liveModal');
    if(modal) {
        modal.style.display = 'flex';
        setTimeout(() => { modal.classList.add('show'); }, 10);
    }
}

function closeLiveModal() {
    const modal = document.getElementById('liveModal');
    if(modal) {
        // --- 新增這段：停止 YouTube 影片播放 ---
        const iframe = modal.querySelector('iframe');
        if (iframe) {
            const tempSrc = iframe.src;
            iframe.src = tempSrc; // 重新賦值 src，這樣影片就會瞬間重置並停止播放
        }
        // ----------------------------------------

        modal.classList.remove('show');
        setTimeout(() => { modal.style.display = 'none'; }, 500);
        sessionStorage.setItem('liveModalClosed', 'true');
    }
}



/* ------------------------------------------------------------------------ */
/* --------- 展區地圖彈窗資料庫 (ximen / expo) --------- */

/* --- 1. 先定義資料庫 --- */
const mapData = {

    // --- 西門展區的資料 ------------ //
    'ximen_A1': {
        title: 'A1  Baby Molly 金運搖來',
        name: '泡泡瑪特設計團隊',
        type: '靜態展出',
        desc: 'Baby Molly 以「搖擺」的俏皮形態現身，象徵好運與驚喜隨之而來，為大家帶來滿滿的喜悅和祝福。這份祝福化為一座「巨型音樂盒」，Baby Molly位於360度的動態核心，上方環繞著 LED新年光環，打造專屬的夢幻燈藝場景。隨著裝置緩慢轉動，在不同角度展現細膩光影變化，邀請觀眾在流動的光影中，感受童心、想像力與迎向新年的美好期待。每20分鐘展演一次。',
        img: '../images/items/ximen_A1.jpg'
    },
    'ximen_A2': {
        title: 'A2  Twinkle Twinkle 星夢迎春',
        name: '泡泡瑪特設計團隊',
        type: '靜態展出',
        desc: '星星人以青花瓷為靈感，將幽藍紋飾與璀璨星芒交織於身，俏皮又勇敢無畏。這份古典與潮流的碰撞，是一場關於「遇見」的設計——6公尺米高的巨大星星人佇立於捷運站6號出口上方頂端，利用西門町特有的空間高度，將傳統文化的雅緻與潮流玩具的童趣結合，讓大家踏出捷運站的那一刻，便能感受滿天星光的感動。',
        img: '../images/items/ximen_A2.jpg'
    },
    'ximen_A3': {
        title: 'A3  LABUBU 小馬歡騰',
        name: '泡泡瑪特設計團隊',
        type: '靜態展出',
        desc: 'LABUBU抱著精靈天團特別製作的小馬，在春節展現俏皮舞姿。這不僅是一場舞蹈，更是帶著童心勇敢向前奔騰的象徵。我們將這場舞蹈搬到了雲端之上。視覺主軸是一座巨大的粉紅色溜滑梯，滑梯的流暢的曲線從雲端延伸而下，取「溜」的諧音「六」，象徵2026年運勢「六六大順」。邀請大家揮別過去，感受純粹的快樂與希望。',
        img: '../images/items/ximen_A3.jpg'
    },
    'ximen_A4': {
        title: 'A4  Hirono小野 馬上福到',
        name: '泡泡瑪特設計團隊',
        type: '靜態展出',
        desc: 'Hirono小野執鞭前行，他像是一盞在夜色中堅持閃耀的「倔強之光」，不論前路如何，都要將好運「馬上」送到大家手中。在熱鬧喧囂的燈會中，這組燈飾是城市裡的「情緒避風港」。Hirono小野背後環繞著金色流雲，燈組運用了綠色仿真竹林與暖黃色球形燈籠，營造出靜謐感。邀請大家在狂歡的節慶中停下腳步，與內心的自己進行一場寧靜對話。',
        img: '../images/items/ximen_A4.jpg'
    },
    'ximen_A5': {
        title: 'A5  臺北雙面畫卷',
        name: '泡泡瑪特設計團隊',
        type: '靜態展出',
        desc: '台北是充滿魅力的城市，我們以「展開的卷軸」為舞台，象徵正在書寫的城市故事。透過雙面觀賞，呈現出台北的兩面，無論是誰都能在臺北這座城市裡，找到屬於自己的共鳴。<br><br>・SKULLPANDA 馭長風 Wind RiderSKULLPANDA以書法「馬」字為發想，用毛筆勾勒出飄逸灑脫的形象。<br>SKULLPANDA 化意為馬，在夕陽與寒雪間隨心而行。<br><br>・DIMOO 逐雲而行 Chasing the Clouds<br>DIMOO靜坐馬背，手執玉笛，燕影隨風穿梭，傳遞春回大地的訊息。<br><br>這座燈組以紅、金色調的雲朵營造出如夢似幻的氛圍，並運用剪紙風格呈現臺北盆地的山景，展現城市與自然的和諧共生。燈組設計結合了士林地標「臺北表演藝術中心」的球體元素，上方懸掛的「貓空纜車」在軌道上滑行，更還原了「大湖公園錦帶橋」的拱橋美學，而左側轉動的「兒童新樂園彩色摩天輪」則是臺北童心未泯的指標。',
        img: '../images/items/ximen_A5.jpg'
    },
    'ximen_B1': {
        title: 'B1  馬上有錢',
        name: '松山慈惠堂設計團隊',
        type: '靜態展出',
        desc: '燈組以傳統燈籠工藝為創作核心，結合民俗吉祥寓意，傳遞新春納福、財運即來的祝福意象，造型以雙馬奔騰為主體，象徵財運迅速到位、「馬上」得財；聚財主體穩立其間，寓意財庫充盈、福氣匯聚。<br>整體運用溫暖光色與層次燈法，展現傳統燈藝的細緻線條與立體結構，在夜間營造祥瑞喜慶的節慶氛圍，透過熟悉的文化符號與燈光語言，讓民眾在燈節的城市場域中，感受祝福被看見、被點亮，也被溫暖地傳遞。',
        img: '../images/items/ximen_B1.jpg'
    },
    'ximen_B2': {
        title: 'B2  遠東百貨・馬躍新春',
        name: '遠東百貨台北燈節設計團隊',
        type: '旋轉馬達結構輔以燈飾工程',
        desc: '在春節家族團聚、共享幸福的美好時刻，遠東百貨以象徵奔放、進取與希望的「馬」為核心意象，<br>創作六隻祝福寓意的吉祥馬，為新春揭開喜慶序幕，一同奔向幸福、豐收與美好的願景：<br><br>「永續活力馬」綠色環保護地球，永續生活向前跑。<br>「福氣歡喜馬」好事連連笑開懷，福氣歡喜一起來。<br>「豐衣足食馬」吃得好、買得巧，生活樣樣都剛好。<br>「平安吉利馬」出入平安、萬事順利，心安好福氣。<br>「智慧領航馬」智慧數位向前行，創新科技領先贏。<br>「招財進寶馬」財運到、好運來，年年錢財滾滾來。<br><br>遠東百貨傳遞新春心意，陪伴大家迎接嶄新一年，攜手邁向「永續創造美好生活」的品牌願景，共享璀璨未來。',
        img: '../images/items/ximen_B2.jpg'
    },
    'ximen_B3': {
        title: 'B3  八駿揚蹄展鴻圖',
        name: '台北燈節設計團隊',
        type: '靜態展出',
        desc: '以奔騰向前的八駿馬為主視覺，象徵台新新光金控在穩健基礎上持續突破、開創新局。設計採對稱構圖，八匹駿馬環繞主體立柱揚蹄而出，展現團隊動能匯聚的力量感，而主體造型向上延伸，呼應台新新光金控長遠視野與持續成長的品牌精神。<br>燈組燈光以金紅色調為核心，透過點狀與流動光效交錯呈現，營造節慶喜氣與前進節奏，同時結合東方吉祥意涵傳達台新新光金控對民眾新春的祝福，也象徵台新新光金控將攜手民眾邁向嶄新、光明的未來。<br>台新新光金控以這份象徵希望與能量的作品，為民眾獻上滿滿的祝福，祈願大家在新的一年八方順遂、馬到成功！',
        img: '../images/items/ximen_B3.jpg'
    },
    'ximen_B4': {
        title: 'B4  台北主場・奔龍而上',
        name: '味全龍 DRAGONS',
        type: '靜態展出',
        desc: '以「台北主場•奔龍而上」為核心概念，將職棒精神轉化為具代表性的城市燈會地標。作品以棒球選手昂首進場的瞬間為主視覺，象徵每一位站上主場的選手及市民，都是為榮耀而拚的主角。透過溫潤內發光的花燈工法，呈現熱血與親和並存的形象，邀請市民一起上場。整體設計呼應台北燈會「全民參與、城市共感」的節慶清神，讓球迷、家庭與遊客都能在光影中感受城市主場的凝聚力，共同創造屬於你我的榮耀時刻。',
        img: '../images/items/ximen_B4_v2.jpg'
    },
    'ximen_B5': {
        title: 'B5  台北好水',
        name: '台北燈節設計團隊',
        type: '靜態展出',
        desc: '北水處為展現臺北城共融特色，且考量不同年齡層使用者需求，設計時尚木紋造型TAIPEI WATER直飲台，讓民眾看到就知道有乾淨的水可飲用，每個字體都有不同的飲水體驗，營造不僅好玩、好看，更具有安心、友善的飲水環境，一起為生活減塑。為方便民眾使用直飲台，民眾掃描臺北好水直飲地圖QRcode，透過智慧手機即可輕鬆搜尋鄰近直飲台，讓市民朋友能夠暢飲好水、減少購買瓶裝水，環保愛地球！',
        img: '../images/items/ximen_B5.jpg'
    },
    'ximen_B6': {
        title: 'B6  揮出夢想經典熊讚',
        name: '台北燈節設計團隊',
        type: '靜態展出',
        desc: '2026年即將再次迎來WBC世界棒球經典賽，由台北市吉祥物「熊讚」，身著中華隊球衣，手握球棒、英姿煥發，象徵全民一心為中華隊加油的熱情與凝聚力，打造結合運動激情與榮耀的特別款燈組，象徵追求勝利與榮耀的決心。整體設計融合了「燈節美學」與「體育精神」，讓民眾在台北燈節期間也能共同感受棒球經典賽的熱血與自豪，為中華隊加油！',
        img: '../images/items/ximen_B6.jpg'
    },
    'ximen_B7': {
        title: 'B7  今馬熊讚',
        name: '台北燈節設計團隊',
        type: '靜態展出',
        desc: '臺北市吉祥物「熊讚」眼神閃耀的光芒，是馬年限定「一馬當先眼神」；為了和大家開心合照，熊讚也特地換上「今馬熊讚」喜氣新裝，祝賀大家滿滿正能量樂活當下、喜迎新年。',
        img: ''
    },
    'ximen_B8': {
        title: 'B8  城隍燈海隧道',
        name: '臺灣省城隍廟設計團隊',
        type: '靜態展出',
        desc: '臺灣省城隍廟秉持城隍爺愛民、與民同樂的初衷，於115年2月9日至3月31日期間，在武昌街1段(重慶南路至中華路1段路段)設置美麗的燈海隧道，於天棚式燈廊上方點綴璀璨的星光燈飾，營造夜間美感。115/2/26(四)、2/28(六)、3/3(二)、3/7(六)等4日在省城隍廟設置燈謎擂臺，歡迎大家攜家帶眷前來共襄盛舉。',
        img: '../images/items/ximen_B8.jpg'
    },
    'ximen_B9': {
        title: 'B9  城隍昇福平安橋',
        name: '臺灣省城隍廟設計團隊',
        type: '靜態展出',
        desc: '平安橋源自民間信仰造橋過限科儀，旨在北斗七星神力加持，過橋度厄逢凶化吉運勢順遂。通常在春節、元霄或廟會慶典時舉辦，臺灣省城隍廟與台北市觀光傳播局，於台北燈節期間特別定製象徵平安幸福的燈橋，當民眾走過燈光爍爍的燈橋時，誠心祈願  省城隍爺昇福明靈王護祐災厄消除、平安順遂、前途光明、諸事圓滿、福氣相伴、閤眷安康、馬到成功、降大吉祥。',
        img: '../images/items/ximen_B9.jpg'
    },
    'ximen_B10': {
        title: 'B10  響樂到中華',
        name: '',
        type: '',
        desc: '',
        img: '../images/items/ximen_B10.jpg'
    },
    'ximen_B11': {
        title: 'B11  城市光譜',
        name: '徐于倫、舒次華',
        type: '靜態展出',
        desc: '以「光是臺北的節奏」為核心理念，將多層次拱形光環化為象徵臺北城市能量的動態光譜通道，整體造型取材自臺北的都會天際線、捷運路網與繁華夜景，並以變色光流呈現城市24 小時的律動。每一圈光環代表臺北的不同城市符號包括淡水河與基隆河的城市水脈、大安森林、陽明山與城市中的綠帶、西門町、東區、信義商圈的潮流能量、臺北夜景的霓虹文化與藝文場景，燈光會沿著拱形向前流動變色，如同捷運穿梭城區、河道水光律動、夜景霓虹閃爍，形成獨一無二的「臺北光脈」視覺語彙，當民眾行走其中，能感受到臺北城市脈動的變化，象徵城市不斷前進的生命力，更是對臺北多元文化、城市節奏與夜間魅力的沉浸式詮釋。',
        img: '../images/items/ximen_B11.jpg'
    },
    'ximen_B12': {
        title: 'B12  城門之後',
        name: '鄧志權、吳宗益',
        type: '靜態展出+感應變化燈光',
        desc: '重現已被拆除的臺北府城西門 ——「寶成門」，於清朝完工，位處艋舺通往城內的交通要衝，原為分界與防禦之用的城門，如今轉化為開放與流動的象徵，呼應水運、商業與文化在此交會，又隨都市變遷而重組的過程。塑膠與竹的並置運用，對比全球化工業製品與在地自然材質，構築出一種跨時代、跨文化的空間語言，呈現傳統與當代、手工與工業、地方與全球的交會。我們所留下的，是對歷史的再想像，是對城市邊界的重新提問。當人們經過作品時，會使作品產生光譜色溫的變化，象徵民眾穿越時空，來到古城，又像是科幻片一般，讓空間產生不同層次的閱讀方式。',
        img: '../images/items/ximen_B12.jpg'
    },
    'ximen_B13': {
        title: 'B13  Queen 女力星願',
        name: '聯利媒體股份有限公司',
        type: '靜態展出',
        desc: '本裝置以「女性力量與時尚魅力」為核心概念，結合精品禮盒、粉色光球與柔和曲線造型，象徵每一位女性都是值得被珍視的主角。透過層次光效與夢幻色彩，營造如星空般的浪漫氛圍，傳達自信、溫柔與勇敢並存的女力精神，邀請民眾走入燈光之中，感受屬於「她」的高光時刻，展現城市對多元與美好的祝福。',
        img: '../images/items/ximen_B13.jpg'
    },
    'ximen_B14': {
        title: 'B14  食尚星光派對',
        name: '聯利媒體股份有限公司',
        type: '靜態展出',
        desc: '本裝置以「美食 × 音樂 × 星光舞台」為核心概念，結合星形燈構、吉他意象與可愛小馬，加上Q版表現的漢堡甜甜圈等美食視覺，象徵城市夜晚中最具魅力的食尚文化能量。透過明亮色彩與層次光效，打造如演唱會般的熱鬧氛圍，邀請民眾走入燈光舞台，感受味蕾與節奏交織的歡樂體驗，展現城市夜生活的活力與創意魅力。',
        img: '../images/items/ximen_B14.jpg'
    },
    'ximen_B15': {
        title: 'B15  歡盛豐年讚財神',
        name: '聯利媒體股份有限公司',
        type: '靜態展出',
        desc: '燈組以臺北市吉祥物「熊讚」為主角，穿戴華麗的財神冠服，雙手虔誠捧握象徵財富的巨型金元寶，寓意新的一年招財進寶、萬象更新。「讚財神」象徵著「真實力量與豐盛生活的連結」。底座點綴象徵富貴的牡丹與閃耀星辰，也希望將 TVBS 致力於多元媒體管道傳遞希望與正能量的核心概念表現出來。這不僅是一尊財神，更象徵著「精彩生活，由我綻放」的媒體初衷，祝福全台觀眾與市民，在 2026 年能如熊讚雙眼展現出的星光般，眼界開闊、財源廣進。',
        img: '../images/items/ximen_B15.jpg'
    },
    'ximen_B16': {
        title: 'B16  反界',
        name: 'hellobastworkshop',
        type: '靜態展出+感應互動',
        desc: '《反界》是一座融合鏡面結構與燈光語言的裝置藝術作品。整體造型為半開放式的橢圓形光之殼體，略呈拱形曲面，如同一個被橫向拉伸的圓柱體或膠囊狀的光影環室。外殼由多片鏡面不鏽鋼板組成，依流線型排列，圍繞中央核心，打造出極具包覆感、雕塑感與未來感的沉浸空間。從上方俯視，如同一座開放式的光之穹頂，充滿科技感與空間張力。<br>觀眾站在弧形內焦點位置，作品感應後將呈現不同光感變化；視覺上則呈現出萬花筒般的反射錯置效果，觀者的影像從不同角度同時浮現。作品邀請觀眾觀看世界的同時也回望自我，面對自身在數位與現實交錯之中的多重樣貌。',
        img: '../images/items/ximen_B16.jpg'
    },
    'ximen_B17': {
        title: 'B17  燈波',
        name: '林芷彤',
        type: '靜態展出+感應變化燈光',
        desc: '燈籠在臺北歷史場景中擁有鮮明而深厚的文化意涵。此創作取材自大稻埕的百年燈籠老店，以其歷經世代傳承的職人工藝與人文故事為靈感根基，突破對傳統紙燈籠的既定印象，透過材質與光的重新詮釋，探索傳統意象在當代語境中的延伸可能，讓歷史記憶在現代設計中持續發光。<br>因此主體以玻璃透光材質構成，表現出虛實之間、懸浮不定的視覺語境。玻璃的透明與反射特性，使燈籠的輪廓在環境光中隨時間與視角變化，創造具動態性的觀看體驗。作品內部搭配七彩LED光源，透過程式控制，依照周遭環境音量切換燈光色彩與強度，呈現時間與文化記憶交錯的流動性。',
        img: '../images/items/ximen_B17.jpg'
    },
    'ximen_B18': {
        title: 'B18  Sounds',
        name: '莫珊嵐',
        type: '靜態展出',
        desc: '透過一系列街燈，喚起了台灣的聲音景觀。這些燈柱以不同高度散佈在空間中，運用色彩繽紛的擬聲字，形象地呈現外國作者眼中台北的城市聲音。每個詞彙都視覺化地代表了一次聲響爆發、一次城市喧囂或是一個日常生活的片刻，捕捉出台北日常生活中的能量與多樣聲音。<br>此作品模糊了圖像與聲音之間的界線，其靈感來自漫畫、漫畫書和圖像小說的視覺語言，邀請觀眾想像這些視覺爆炸背後所隱含的聲音。這是一種既富玩味又詩意的方式，讓一個地方的聲音身分鮮活地呈現出來。',
        img: '../images/items/ximen_B18.jpg'
    },
    'ximen_B19': {
        title: 'B19  J!NS小馬看視界',
        name: '睛姿臺北燈節設計團隊',
        type: '靜態展出',
        desc: '作品透過搖搖馬將童趣記憶轉化為一座能與城市對話的品牌燈組，設計靈感來自 JINS 對「視界」的重新定義——透過設計，讓人們重新看見生活中被忽略的美好細節，在熱鬧的台北燈節中形成一處輕鬆停留的風景。<br>燈光設計是本作品的靈魂，底部配置左右來回的流動燈效，創造出搖搖馬前後擺動的視覺感，使靜態裝置產生節奏感與生命力，希望透過光的律動，讓民眾在行走之間感受視覺被放大的瞬間，重新連結生活與感受。',
        img: '../images/items/ximen_B19.jpg'
    },
    'ximen_B20': {
        title: 'B20  台北晝夜',
        name: '成如潔',
        type: '靜態展出',
        desc: '作品以日與月交融的雙圓造型為主軸，象徵台北 24 小時不停歇的城市能量，透過剪紙似的堆疊所形成的層次光影，呈現台北多元文化、歷史底蘊與生活風景。<br>正面以「白日台北」為主題，收錄中正紀念堂、國父紀念館、北門、總統府、紅樓、故宮等具代表性的地標建築象徵台北從傳統走向現代的歷史軌跡，也展現城市在陽光下清晰而自信的樣貌。<br>背面則轉換為「夜幕台北」，以貓空、陽明山海芋、杜鵑花等自然素材搭配小籠包、珍珠奶茶等人氣美食，體現台北夜生活的豐富與溫度。<br>《台北晝夜》是一幅以時間為筆，描繪台北獨特生命力的光影畫卷，呈現這座城市無論白晝或夜晚都同樣耀眼動人。',
        img: '../images/items/ximen_B20.jpg'
    },
    'ximen_B21': {
        title: 'B21  奔向永續 生森不息',
        name: '富邦臺北燈節設計團隊',
        type: '民眾踏上跑道前行，腳下光能隨步伐光源由底部向上流動，逐一喚醒樹冠光瓣，最終點亮燈籠並產生柔和變色效果',
        desc: '以象徵成長與守護的光之樹為核心，作品以木材質結構呈現，樹冠由24片光瓣構成，代表一天24小時不間斷的守護與循環，呼應富邦金控及台灣大哥大對永續發展的長期承諾。<br>燈組結合跑步互動設計，當民眾踏上跑道前行，腳下光能隨步伐由底部向上流動，逐一喚醒樹冠光瓣，最終點亮燈籠並產生柔和變色效果，象徵行動帶動改變、能量持續傳遞。<br>作品透過時間、光與人的參與，形塑「全時運轉的永續未來」，展現富邦集團與城市共生、與環境共好的品牌願景。',
        img: '../images/items/ximen_B21.jpg'
    },
    'ximen_B22': {
        title: 'B22  天后．祈福光橋',
        name: '台北天后宮及于容創意有限公司',
        type: '靜態展出',
        desc: '傳統文化信仰，創新設計製作，用台北天后宮媽祖信仰為核心意象，結合傳統「平安橋」與「鑽轎底」祈福文化，轉化為一座可行走、可體驗的祈福燈組。民眾循階而上，穿越橋體與轎底空間，象徵跨越關卡、消災解厄，在行進之間完成一場向天后祈願的儀式旅程。<br>整體燈光設計結合動態感應與色彩變化，隨著步伐流動、明暗轉換，彷彿媽祖庇佑之光一路相隨，傳遞安定與祝福的力量。透過傳統信仰與現代燈光藝術的融合，邀請民眾在光影之中祈願2026年一路長紅、平安順遂，讓祝福在城市夜色中持續流轉。',
        img: '../images/items/ximen_B22_v2.jpg'
    },
    'ximen_B23': {
        title: 'B23  金福氣',
        name: '台北燈節設計團隊',
        type: '靜態展出',
        desc: '以「福運自台北而生、向城市四方擴散」為設計理念，透過象徵迎賓門的東方結構與燈節的光影語彙，打造一座屬於台北的祝福之門，主體以傳統色框架象徵富足與繁榮，紅色燈籠則象徵節慶喜氣，兩者共同構築出台北在節慶氛圍中最具代表性的城市溫度。<br>作品設計屋簷採用層層向外延伸的造型，如同台北城市脈動：艋舺廟埕的屋脊、城門的形象皆隱含其中，象徵歷史與現代交會的城市輪廓，中央圓形主燈結合吉祥語和視覺設計，象徵城市核心精神的聚光點，將來自各地的福氣凝聚在此，再透過四方燈箱像光芒般向城市散播。願市民步入燈光之中時，感受幸福環繞、好運盈門。此外，開展期間作品周邊設有祈福卡活動，民眾寫下心願、掛上燈籠祈福牆，留下專屬心願。',
        img: '../images/items/ximen_B23.jpg'
    },
    'ximen_B24': {
        title: 'B24  沅夜星語',
        name: '沅陵設計團隊',
        type: '靜態展出',
        desc: '以沅陵街-「鞋街」為靈感，將夜晚的街道轉化為一座承載夢想與想像的星空舞台。商圈吉祥物小沅寶（鸚鵡）如灰姑娘般，乘坐象徵希望與奇幻的南瓜車，穿梭於星光與雲層之間，展開一段屬於夜晚的童話旅程；與夢幻神馬佇立雲端，代表陪伴、守護與溫柔的情感連結。透過星空與層疊雲朵的視覺元素，營造靜謐而浪漫的夜間氛圍，讓熟悉的沅陵街在夜色中化為低聲呢喃故事的場域，邀請每一位走入街區的人，傾聽屬於夜晚的星語。',
        img: '../images/items/ximen_B24.jpg'
    },
    'ximen_B25': {
        title: 'B25  金彩萬華 (萬華車站)',
        name: '台北燈節設計團隊',
        type: '靜態展出',
        desc: '以萬華在地文化為核心，將區域內的代表性地標與人文特色化為一盞盞象徵祝福的燈籠。運用金紅色系呈現喜慶與富足，寓意萬華長久以來蓬勃、多元又充滿生命力的街區精神。燈組中央以大幅燈籠群構成文化地圖，讓燈組不僅是一件視覺裝置，更像是一扇回望土地故事的窗口，喚起居民與遊客對艋舺文化的情感連結，讓萬華的街巷、人情、信仰與歷史再度亮起，用光彩說出屬於這個城市的深厚底蘊。',
        img: '../images/items/ximen_B25.jpg'
    },
    'ximen_B26': {
        title: 'B26  光行小馬 (剝皮寮)',
        name: '萬華街區發展協會、小腸絨毛、ckc_toys',
        type: '靜態展出',
        desc: '光行小馬來到艋舺老城，陪大家一起過元宵。光行小馬以「尋光」為核心意象，牠循著光前行，穿梭在龍山寺與西門之間的街道，也停留在人們的笑聲與腳步裡。艋舺是臺北最早熱鬧起來的地方，水運、信仰與市集交織出城市的起點。如今，小馬以溫暖的燈光佇立在老城之中，為節慶添上一份可愛與祝福。跟著光行小馬，一起在老城尋光、拍照、留下屬於自己的節日記憶。',
        img: ''
    },

    // --- 花博展區的資料 ------------ //
    'expo_A1': {
        title: 'A1  台北燈節主燈｜柯博文',
        name: '變形金剛設計團隊',
        type: '靜態展出',
        desc: '本組燈飾以博派金剛領袖「柯博文」為主體，結合大型立體結構與科技感光影設計，打造高達 10公尺的主燈。燈組透過層次分明的機械造型與動態燈效，展現未來科技美學，為台北燈節揭開最具代表性的科技光影序章。每30分鐘展演一次。',
        img: '../images/items/expo_A1.jpg'
    },
    'expo_A2': {
        title: 'A4  兩派雙雄對決・街機巨人｜柯博文 vs 密卡登',
        name: '變形金剛設計團隊',
        type: '靜態展出',
        desc: '此燈組以經典對戰為主題，將博派與狂派的 衝突轉化為大型街機造型燈飾。設計捨棄數位螢幕，改以多層次動態燈箱、 LED 跑馬燈與序列控制技術，重現 8-bit 電玩風格的視覺暫留效果。展現燈節結合創意、科技與玩心的多元樣貌。',
        img: '../images/items/expo_A4.jpg'
    },
    'expo_A3': {
        title: 'A3  霸氣破界｜密卡登時空傳送門',
        name: '變形金剛設計團隊',
        type: '靜態展出',
        desc: '本燈組以狂派首領密卡登穿越時空的瞬間為主題，圓形傳送門結合藍色光效，營造強烈的未來科技氛圍。中央卡布燈箱精準捕捉能量聚集與空間撕裂的畫面，塑造電影級的臨場張力。密卡登攜帶加農 炮 踏出傳送門，展現震懾人心的氣勢，使整座燈組成為充滿力量與戲劇張力的視覺焦點。',
        img: '../images/items/expo_A3.jpg'
    },
    'expo_A4': {
        title: 'A2  蜂芒畢露・無限之鏡｜大黃蜂',
        name: '變形金剛設計團隊',
        type: '靜態展出',
        desc: '本燈組以大黃蜂靈活敏捷的形象為設計核心，背景結合「無限鏡Infinity Mirror）」光學技術，透過多層次反射，營造出彷彿無限延伸的光影空間。平面燈座轉化為深邃的視覺隧道，象徵速度、穿梭與無限可能。',
        img: '../images/items/expo_A2.jpg'
    },
    'expo_B1': {
        title: 'B1  記憶圓山',
        name: '徐于倫',
        type: '靜態展出',
        desc: '以巨型足球為造型，帶出曾為中山足球場的過往歷史，透過球體切割出的多面光結構，使燈組成為盛載故事的「記憶容器」。在不同角度看見網格中呈現的圓山文化符號：象徵圓山動物園歲月的大象爺爺、代表東方建築精神的圓山大飯店、城市花卉美學的臺北花博、以及承載童年的兒童樂園，讓圓山的歷史化為城市印記。',
        img: '../images/items/expo_B1.jpg'
    },
    'expo_B2': {
        title: 'B2  體操男爵',
        name: '張育嘉',
        type: '靜態展出',
        desc: '《體操男爵》安放於花博園區這片城市綠洲，一處介於繁忙街廓、基隆河谷與松山機場航道之間的獨特場域。這裡的天空永遠充滿動態：飛機掠過的軌跡、城市光的反射、轉換季節的雲層，以及夜晚清晰可見的星群。正因如此，是台北最接近「天空」的地景之一。<br>作品以一位巨大的「旅者」像剛結束一段跨越星際的旅程，也像在等待下一次飛行。這種半休息、半觀測的姿態，呼應鄰近松山機場的城市節奏：每天都有離開與抵達、分離與重逢，而作品以種靜止的方式回應這股流動，讓人終於有機會停下來，重新仰望天空。花博園區提供了這種近似「大地臥鋪」的空間，作品便在此與地景自然結合。',
        img: '../images/items/expo_B2.jpg'
    },
    'expo_B3': {
        title: 'B3  靜語花境',
        name: '陳楷葳',
        type: '互動展出',
        desc: '作品以台北最具代表性的花卉為創作靈感，將城市的繽紛轉化為一座可沉浸、可停留的光影花園，而花朵取材自台北花季常見的杜鵑、海芋、玫瑰等花卉，以光纖與透光材質重構其盛開姿態，透過柔粉、雅白與淡紫色光芒展現春日綻放的細膩層次，每朵花皆以立體方式在夜空綻放，象徵台北城市中蘊含的生機與浪漫。<br>中央的長椅象徵城市間隱藏的休憩角落，邀請人們走入花叢，感受屬於台北夜晚的靜謐氣息。民眾可坐上椅子，花朵燈光將會產生變化喔。<br>《靜語花境》希望在繁忙城市中創造一個能短暫喘息的光之花園，讓人們在靜謐光影裡重新連結自我，並感受自然帶來的療癒力量。',
        img: '../images/items/expo_B3.jpg'
    },
    'expo_B4': {
        title: 'B4  森光行道',
        name: '徐志銘',
        type: '靜態展出',
        desc: '藝術家作品以 台北自然意象為本，透過光雕演繹四段能量旅程，讓觀者走入一條由自然力量建構的光之路徑。在自然與城市交界之處，光與風、雲與水交織成一條循環的能量之道。<br>作品整體視覺概念構成以陽明山暮色雲帶象徵大地與天空之間的呼吸，夕陽餘暉化為旋轉雲絲，彷彿山嵐在傍晚升騰，帶出沈靜卻仍持續脈動的生命力。另搭配淡水河水流曲線河水以溫柔而堅定的姿態自遠方匯聚，水脈延伸至作品外環，如森中幽徑，引導民眾進入能量核心。《森光行道》將色彩與動態呈現如呼吸般平衡、流動，透過步伐感應或緩慢的節奏變化，讓光影能與民眾同步，成為一段「共感式」體驗。',
        img: '../images/items/expo_B4.jpg'
    },
    'expo_B5': {
        title: 'B5  生之源',
        name: '徐于倫，舒次華',
        type: '靜態展出+定時燈光變化',
        desc: '作品以樹木作為生命最純粹的象徵，透過光線與能量流動的視覺語彙，展現大自然永不枯竭的生命循環。以現地樹幹為主體，透過向上攀升的生命光條能量自大地湧起，沿著樹脈向外擴散，如同脈搏跳動般持續輸送活力形成向外擴張的光之網絡，象徵生命彼此相連、交織成共同的宇宙。夜間點亮後，整棵樹化為一個光之生命體，脈動柔和卻充滿力量，引導民眾能在光影中感受到自然的呼吸，「生之源」意在傳達生命孕育、循環與成長的哲學寓意，提醒人們生命的源頭從未遠離，它就在我們身邊、在每一次能量流動裡持續綻放，在光影之間重新感受自然的力量與生命自身的美好。',
        img: '../images/items/expo_B5.jpg'
    },
    'expo_B6': {
        title: 'B6 星樹之門',
        name: '徐志銘',
        type: '靜態展出',
        desc: '本系列以台北文化為核心，將森林、夜空與建築轉化為能量視覺語彙，形成四座台北具有象徵性的光之門，以圓形構圖、樹影拱門與星軌能量構成沉浸式場域，象徵自然與文明的交會，也引導觀者進入一種穿越的經驗。<br>藝術家以台北建築擬畫抽象圖形，台北 101 象徵科技與城市的未來能量柱；穿越北門，如同踏入城市記憶深處，回望台北的文化源頭；中正紀念堂牌樓承載公共精神與價值，是城市的儀式入口；圓山大飯店的山頭文化能量彷彿是一座文化能量殿堂，遠離喧囂，靜靜守望著城市。<br>系列作品以森林為結界、夜空為能量、建築為文化精神，當光與樹相遇，城市被重新觀看感受，一座座「星樹之門」不只是建築的符號，更是一種穿越；穿越了歷史、文明、空間與自然的邊界。',
        img: '../images/items/expo_B6.jpg'
    },
    'expo_B7': {
        title: 'B7  花漾銀河',
        name: '陳楷葳',
        type: '靜態展出+定時燈光變化',
        desc: '作品以奇幻生態與宇宙想像為主題核心，透過花卉、光影與外星元素的融合，打造一座彷彿從星際降臨的生命體，以盛放的花束作為主體呈現一個超越現實、充滿未知生命形態環繞的奇幻場景，象徵無盡的生命能量,而頂端以充滿宇宙能量的飛碟裝置作為視覺焦點，營造整體被宇宙能量喚醒、綻放的生命張力。燈光以柔和粉藍、幻紫交織呈現，形成如銀河般的流動色彩，使裝置在夜間呈現溫暖又神秘的氣息。《花漾銀河》希望帶領觀者跳脫日常視角，在快速變動的世界中，生命依然以多彩姿態蓬勃成長，並邀請每位來訪者一同探索屬於自己的星際花境。',
        img: '../images/items/expo_B7.jpg'
    },
    'expo_B8': {
        title: 'B8  城市樓閣',
        name: '邱杰森',
        type: '靜態展出',
        desc: '《城市樓閣》以台北市的天際線為設計核心，從都市獨特的立面輪廓與山海交錯的地景中汲取靈感。作品結合主要都會區的區域地圖，將城市脈絡以線條化、抽象化的方式轉譯到鋼板之中，透過精密的金屬雕刻呈現出台北多層次的空間結構。鋼板上的刻線如同城市的呼吸與流動，象徵道路、建築與人群之間不斷生成的關係；透過材質的反射性與光影變化，作品呈現白天與夜晚不同的城市面貌，彷彿一座凝縮的都市樓閣。這是一件將地景、建築與日常生活重新編織的金屬地景作品，亦是對台北城市特質的抽象詮釋。',
        img: '../images/items/expo_B8.jpg'
    },
    'expo_B9': {
        title: 'B9  SPACE TAIPEI',
        name: '莫珊嵐',
        type: '靜態展出+定時燈光變化',
        desc: '燈組以紙飛機作為象徵台北未來想像力的圖騰，透過光線構成的立體飛行軌跡，展現城市蓄勢待發、勇於突破的精神，作品以多架不同角度、不同高度的光紙飛機組成，宛如準備從草地上起飛，帶領大家進入一段關於夢想、科技與未來的飛行旅程。<br>夜間亮起時，光線彷彿在空中描繪航道，每一架紙飛機都像是一個正在啟動的未來計畫，指向更開闊的城市想像，提醒人們：無論時代如何變動，台北始終是承載夢想的城市，是讓理想啟航、讓創意落地的地方，如同一封寄向未來的訊息，《SPACE TAIPEI》邀請每位路過的市民朋友一同啟航，讓夢想從這片光的跑道上，飛向世界、飛向未來。',
        img: '../images/items/expo_B9.jpg'
    },
    'expo_B10': {
        title: 'B10  四時之環',
        name: '莫珊嵐',
        type: '靜態展出+呼吸光變化',
        desc: '這件圓形裝置融合了台北的自然地貌與城市特徵，呈現出一座象徵性的微型風景模型。透過燈光色彩的變化，作品呼應四季更迭——春之繁花、夏之繁茂、秋之繽紛、冬之寧靜——猶如一扇通往城市氣候循環的詩意之窗。從正面觀賞，如同凝視一個持續變化的內在世界；側面則可見「台北市」及多個地標名稱的雕刻，象徵這片縮影自然牢牢地嵌入真實都市的脈絡中。在台北，人們經常於同一段通勤路線中，在短短數分鐘內穿梭於鬧區與山林之間。這種自然與城市無縫接軌的空間特質，正是本作品試圖傳達的核心經驗。',
        img: '../images/items/expo_B10.jpg'
    },
    'expo_B11': {
        title: 'B11  城光樹語',
        name: '陳楷葳',
        type: '靜態展出+定時燈光變化',
        desc: '「城光樹語」以臺北市多綠蔭的城市意象以及最具代表性的榕樹為發想核心，是臺北街景中最具生命力的城市符號，本燈組以此為靈感，將榕樹以幾何形象化作一座能向世界發聲的光之樹，象徵台北作為國際城市的開放姿態與交流精神。樹上的城市意象燈箱，以台北與全球友好城市的文化符號、特色圖像與代表色彩呈現，象徵城市之間透過光影展開的文化對話與情感交流。「城光樹語」呈現的是一座城市之間的互動地圖，以榕樹為起點，以光為語言，將台北與世界的連結具象化，讓每位走近的人都能看見台北城市精神的溫度與向外延伸的國際視野。',
        img: '../images/items/expo_B11.jpg'
    },
    'expo_B12': {
        title: 'B12  台北好水-杜鵑花',
        name: '台北燈節設計團隊',
        type: '靜態展出',
        desc: '北水處結合臺北市市花設計出「杜鵑花直飲台」，象徵臺北的美麗、繁榮與幸福。花朵的生命來自於水，當民眾在此座直飲台飲水時，可以同時解渴、滋潤身心，同時象徵性的灌溉了這座花朵，傳達生生不息、花繁葉茂的精神。杜鵑花直飲台採取通用設計，結合不同高度的飲水龍頭，無論是大人、小孩、身障朋友，甚至是毛小孩都能輕鬆使用，打造出臺北市獨具魅力的環境友善共融空間；閃亮繽紛的LED花蕊與花瓣的巧思，讓飲水者如同蜜蜂採蜜般地互動，充滿趣味性；花瓣上嵌入太陽能板，融入綠能、減碳、永續元素，展現節能減塑愛地球行動。中央圓形燈飾搭配新年燈節氣息，歡樂活潑，提升市容設計感。',
        img: '../images/items/expo_B12.jpg'
    },
    'expo_B13': {
        title: 'B13  奇幻動物園',
        name: '穀造音樂',
        type: '互動展出',
        desc: '以奇特的動物造型為意象和台北多元文化為特色出發，並運當代科技的互動藝術，重新詮釋首都在新一年的期許與展望。作品「嘟嘟獸」、「吐兔馬」、「吼吼龍」、「珍奇怪」的外觀都融合豐富的色彩和活潑的造型，並透過燈光與互動技術，象徵台北蓬勃的生命力與創造力。<br>當觀眾觸碰或擠壓作品時，燈光會隨之變化，彷彿映照這座多元城市的絢爛景貌，與觀眾展開一場感官對話。同時，頂部吹出的一顆顆泡泡，增添了輕盈與夢幻的氛圍，也象徵在這座城市有無限可能，人們勇於懷抱夢想，實踐理想，祝福參與的民眾都能「馬到成功」。',
        img: '../images/items/expo_B13.jpg'
    },
    'expo_B14': {
        title: 'B14  臺北隊熊讚',
        name: '台北燈節設計團隊',
        type: '靜態展出',
        desc: '「2026台北燈節」串聯臺北市12個行政區，特別打造12款各具特色的熊讚公仔，展現各行政區獨具魅力的特色風貌，包含時尚信義、和雅大安、潮流南港、縱走內湖、薈萃士林、旅行松山、茶香文山、探索中正、戲說大同、古城萬華、藝文中山及溫泉北投。熊讚化身為各區代表，成為臺北隊的一分子，完美代言台北的多元與精彩，區區都讚！臺北隊熊讚！',
        img: '../images/items/expo_B14_v2.jpg'
    },
    'expo_B15': {
        title: 'B15  景福宮燈區',
        name: '台北市景福宮',
        type: '靜態展出',
        desc: '台北景福宮首次響應台北燈節，將自捷運中山國小站一路串連燈飾點亮中山商圈周邊，為民眾營造溫馨喜氣的賞燈氛圍，台北市的景福宮是位於中山區牛埔地區的傳統福德正神土地公廟，有一百五十年歷史、三層樓中式建築、宏偉山門與綠意廣場，是香火鼎盛且信徒常來參拜的都市信仰中心。',
        img: ''
    },
    'expo_B16': {
        title: 'B16  璀璨中山',
        name: '台北市中山商圈發展協會',
        type: '靜態展出',
        desc: '《璀璨中山》融合中山商圈代表性地標「圓山花博」、中山區花「蝴蝶花」，結合傳統建築與現代城市風貌，透過專屬設計的花束、在夜晚綻放光影與繽紛色彩、今晚一起來中山發光✨',
        img: '../images/items/expo_B16.jpg'
    },

    'expo_C1': {
        title: '輝映自由．共譜繁榮',
        name: '林玉珠、李冠毅、李青芸',
        type: '',
        desc: '美國將在2026年7月4日迎來建國250週年的璀璨時刻。為歡慶這個深具意義的里程碑，美國在台協會（AIT）很榮幸在2026台北燈節隆重獻上AIT主題燈，以藝術光影致敬美國的文化傳承，以及美台之間歷久彌新的深厚情誼。\n今年的AIT主題燈由台灣知名燈藝師林玉珠、李冠毅與李青芸精心設計、巧手製作，作品融合多項經典美國意象，象徵引領美國走過兩個半世紀的核心理想。自由女神像 高舉火炬，照亮自由與機會的道路；國會大廈象徵民主精神與公民參與；棒球致敬傳統與團隊精神；金門大橋代表巧思、雄心與不斷前行的步伐；白頭鷹 傳達主權與力量；太空梭乘載啟發與創新；而星條旗則凝聚團結合一與犧牲奉獻的精神。\n作品的核心主題「 輝映自由‧共譜繁榮 」在燈座基底綻放光芒，彷彿提醒世人：自由、機會與進步是美國立國以來始終持守的根基。如今，書寫下一個篇章的歷史之筆就握在你我手中，AIT誠摯邀請台灣各地的朋友，與我們一同紀念250年來塑造美國的立國理想，攜手邁向合作緊密、共享繁榮的光明未來。',
        img: '../images/items/expo_C1.jpg'
    },
    'expo_C2': {
        title: '充滿活力的民俗文化',
        name: '黃文全',
        type: '',
        desc: '聖克里斯多福及尼維斯的民俗團體展現了結合非洲遺產與歐洲影響的文化傳承。快來看看如何在這場充滿活力的燈組展示中，一同感受我們獨特的文化遊行從左到右分別為：\n•木高蹺（ Moko Jumbie ）：這些踩高蹺的表演者象徵著非洲神話中的巨人。\n•小丑（ The Clown ）：這身服裝模仿了歐洲宮廷小丑的造型。\n•演員（ The Actors ）：由一組雜技表演者用園藝叉進行驚險的特技表演。\n•公牛（ The Bull ）：傳說中的主要角色，一頭兇猛的公牛被刺傷後不但存活下來，反而變得更加兇悍。\n•化裝舞會（ The Masquerade ）：身著色彩繽紛的服裝、頭戴孔雀羽毛頭飾，假面舞者隨著笛樂隊的節奏進行精心編排的舞蹈表演。',
        img: '../images/items/expo_C2.jpg'
    },
    'expo_C3': {
        title: '跟著吉祥物一同暢遊福島！',
        name: '藍永旗花燈藝術工房',
        type: '',
        desc: '福島縣位於日本東北地區，是日本面積第三大的縣市，擁有豐富的自然資源與多樣化的風景。一年四季各有不同魅力，無論何時造訪，都能欣賞到令人心動的美景。\n本次花燈以福島縣會津地區具代表性的鄉土玩具「紅牛」與「不倒翁小法師」為主題，兩者皆是象徵驅除疫病、闔家平安的開運吉祥物。希望透過花燈，讓大家感受到福島獨特的文化魅力。\n目前台灣虎航每週二、五皆有直飛福島的航班，交通便利，誠摯邀請大家親自走進福島，感受這片土地在四季變換中所帶來的感動與無限魅力。',
        img: '../images/items/expo_C3.jpg'
    },
    'expo_C4': {
        title: '雅音繞濱松，香車載繁花',
        name: '藍永旗',
        type: '',
        desc: '濱松市位於東京與大阪之間，從東京或大阪搭乘新幹線約90分鐘即可抵達，且從中部國際機場前往也相當便利，是一座融合了豐富自然環境的城市。濱松的特色包括「 歷史」、「花卉」、「濱名湖」以及「音樂與製造工藝」。\n德川家康青壯年時期曾居住過的濱松城、櫻花與鬱金香盛開、景色宜人的濱松花卉公園，以及可體驗纜車、自行車、溫泉與品嚐鰻魚料理的濱名湖，還有SUZUKI、YAMAHA等世界級製造商的企業博物館等，濱松擁有眾多值得一訪的景點。\n誠摯邀請您親自走訪濱松，實際感受這座城市的獨特魅力。',
        img: '../images/items/expo_C4.jpg'
    },
    'expo_C5': {
        title: '活力大邱',
        name: '陳祖榮',
        type: '',
        desc: '花燈主題為「活力大邱— POWERFUL DAEGU 」，由台灣國寶級燈藝大師陳祖榮老師打造，除了大邱市各式各樣的著名觀光景點，特別以大邱最有人氣的吉祥物—水獺寶寶作為主題，向台灣民眾展現大邱充滿活力又可愛的一面。',
        img: '../images/items/expo_C5.jpg'
    },
    'expo_C6': {
        title: '歡迎來到松山',
        name: '陳祖榮',
        type: '',
        desc: '日本愛媛縣松山市擁有許多迷人的旅遊景點。\n道後溫泉據說是日本最古老的溫泉之一，自神話時代就已流傳至今，以其優質的溫泉水而聞名。道後溫泉本館也被評為米其林綠色指南三星級旅遊設施。\n松山城在松山市的任何地方都能看到，這座擁有400多年 歷史的城堡雄踞山頂。其天守閣矗立在132公尺高的山峰之上，是日本僅有的12座天守閣之一，堪稱珍品。此外，松山市還擁有許多其他重要文化遺產。\n這裡還有「少爺列車」，這是一輛仿照大約130年前運行的火車建造的電車。\n松山與台灣之間有直飛航班使前往松山變得十分便捷。歡迎您來到松山這座充滿歷史與文化的城市。',
        img: '../images/items/expo_C6.jpg'
    },
    'expo_C7': {
        title: '關島查莫洛文化之光',
        name: '陳祖榮',
        type: '',
        desc: '《關島．查莫洛精神之燈》以光影呈現關島原住民族查莫洛文化的核心精神，象徵對祖先、土地與生活方式的敬意。作品融合自然與文化意象，展現關島獨有的歷史脈絡與島嶼生命力。燈體設計融入多項關鍵文化符號：象徵堅韌與根基的拉提石（Latte Stone），承載查莫洛祖先家屋的結構記憶；以女神芙烏娜（Fu\'una）犧牲化身而成的島嶼輪廓，訴說關島誕生的神話；展現航海智慧的傳統獨木舟Proa，連結關島與台灣共享的南島文化根源；僅棲息於關島、正積極復育的關島特有鳥類可可鳥（Ko\'ko\' bird），象徵守護自然與希望重生；以及被譽為「生命之樹」的椰子樹，代表島民世代相依的生活資源。\n整體作品以傳統查莫洛表演藝術為靈感核心，透過舞蹈、吟唱與敘事的精神，點亮文化傳承之光，傳達關島持續守護自身文化、並與世界分享其島嶼靈魂的願景。',
        img: '../images/items/expo_C7.jpg'
    },
    'expo_C8': {
        title: '茨城縣笠間市～充滿魅力的城鎮～',
        name: '陳祖榮',
        type: '',
        desc: '擁有豐富自然和悠久歷史文化的茨城縣笠間市，是日本以陶器「笠間燒」和花崗岩產地而發展的知名古鎮。市區內有多處名勝古蹟及歷史深遠的神社寺廟，春天舉辦杜鵑花節、秋天則有菊花節，一年四季五彩繽紛的山村情景，加上燃紅天空的陶窯火焰及眾多充滿特色的美術館，更在日本第一產地享用栗子及相關產品，都使到訪笠間的旅人感受其獨特的魅力。笠間市隨時歡迎您的到訪！',
        img: '../images/items/expo_C8.jpg'
    },
    'expo_C9': {
        title: '燈映秋田・文化巡禮',
        name: '藍永旗花燈藝術工房',
        type: '',
        desc: '秋田縣位於日本本州東北地區是忠犬八公秋田犬故鄉。秋田縣四季分明清新的空氣與純淨的水質孕育出聞名的美食與美酒。\n除了自然美景更擁有獨特的文化祭典。繼去年展出的神秘「男鹿生剝NAMAHAGE」、溫馨的「橫手雪屋」、典雅的「湯澤七夕繪燈籠」及台灣虎航吉祥物「虎將」，今年特別追加夢幻天燈「上檜木內紙風傳」；以及「能代七夕天空不夜城」這座城郭燈籠擁有日本第一的高度（24.1公尺），於2013年時隔約一世紀復活，為衰退城市重拾活力，都將透過花燈一一呈現。\n本次出展希望透過這些精彩花燈在您心中點燃對秋田的嚮往。現在台灣虎航每週四、日提供直飛秋田國際機場航班交通便利誠摯邀請您親自走訪秋田感受獨特的文化魅力與四季風情期待在秋田與您相見！',
        img: '../images/items/expo_C9.jpg'
    },
    'expo_C10': {
        title: '台北市・松江市友好行燈',
        name: '吟遊詩人：Kota、Pori、Satoshi、Tabuchi',
        type: '',
        desc: '松江市秋季風物詩「水燈路」活動中，松江城下町將陳列眾多手工燈籠。今年適逢松江市與台北市以牡丹為契機展開交流二十週年紀念。本次特別展出臺北市立大學視覺藝術系學生與松江市創作者聯手打造的燈籠，作為兩市友誼的象徵。',
        img: '../images/items/expo_C10.jpg'
    },
    'expo_C11': {
        title: '燈映風華～和歌山物語',
        name: '藍永旗花燈藝術工房',
        type: '',
        desc: '和歌山縣，位於日本本州南端，是自然與文化完美交織的寶地，擁有壯麗的海岸線、青翠的山脈，以及高野山與熊野古道等世界遺產。本次燈展以四盞精緻的花燈，帶您深入了解這片土地的多彩魅力。\n金秋的「有田橘」象徵豐收的喜悅，散發著和歌山柑橘之鄉的濃厚香氣；人氣十足的小玉「貓咪站長」以可愛的身影重現和歌山電鐵的暖心故事；吉祥物紀伊醬身著「平安時代服飾」，為您展現千年歷史的華麗篇章；而高聳於高野山的「根本大塔」則彰顯了和歌山縣深厚的宗教文化底蘊。\n透過這四盞花燈，和歌山的自然之美與文化故事在光影之間流轉，邀您探索這片充滿歷史厚度與活力魅力的心靈旅遊勝地。',
        img: '../images/items/expo_C11.jpg'
    },
    'expo_C12': {
        title: '鏡畫（正面）「馬超奮戰圖」｜送行畫（背面）「唐美人」',
        name: '川村 麗巴',
        type: '',
        desc: '本作品為日本青森縣弘前市每年夏天舉行的傳統祭典 「弘前餒菩噠祭」裡實際使用山車的縮小版。\n「睡魔」燈籠的形狀一般為扇形底座的部分是武士繪和代表天之川的雲漢文字底座上的花紋則是牡丹花。扇形燈籠的部分大多使用 《 三國志 》 人物為題材描繪 這次展示的「睡魔」燈籠則是以「馬超」奮戰時的英勇意象為主題繪製而成。',
        img: '../images/items/expo_C12.jpg'
    },
    'expo_C13': {
        title: '這裡是上海',
        name: '王兆卿',
        type: '',
        desc: '主體造型用「天馬展翅」的傳說，採用PP幻彩綠色環保材質，打造一匹「穿越時空的宇宙駿馬」，足踏「星軌銀河」，周身環繞上海標誌性建築、黃浦江與蘇州河。燈光流動變幻，底部繁星繚繞，模擬星河色澤，營造 Futuristic 科幻意境。\n躍馬奔騰之姿帶來上海市繁花簇擁的祝褔，寓意花開富貴、春日祥和，恭祝各位馬年吉祥如意！ ',
        img: '../images/items/expo_C13.jpg'
    },

};


/* --- 英文版資料庫 --- */
const mapDataEn = {

    // --- 西門展區的資料 ------------ //
    'ximen_A1': {
        title: 'A1  Baby Molly  Fortune Rolling in',
        name: 'Taipei Lantern Festival Design Team',
        type: 'Static display',
        desc: 'Baby Molly appears in a playful rocking pose, symbolizing the arrival of good fortune and surprises, bringing abundant joy and blessings to everyone.\nThis blessing takes the form of a giant music box with Baby Molly at its heart, framed by a dynamic 360-degree setting. An LED New Year halo glows above, creating a dreamlike light art scene.\nAs the installation slowly rotates, the character reveals delicate shifts in light from different angles, inviting viewers to experience childlike wonder, imagination, and the joyful anticipation of the New Year through the flowing light.\nThe performance takes place every 20 minutes.',
        img: '../images/items/ximen_A1.jpg'
    },
    'ximen_A2': {
        title: 'A2  Twinkle Twinkle  Starry Arrival',
        name: 'Taipei Lantern Festival Design Team',
        type: 'Static display',
        desc: 'Inspired by classic blue-and-white porcelain, Twinkle Twinkle blends deep blue patterns with shimmering starlight, capturing a spirit that is both playful and brave.\nThis collision of classical elegance and contemporary trends represents a design about “encounter.” Standing six meters tall above the top of MRT Ximen Station Exit 6, Twinkle Twinkle takes advantage of the area’s unique vertical space, blending the elegance of traditional culture with the playful charm of trendy toys, so that from the moment visitors step out of the station, they can feel the wonder of a sky full of starlight.',
        img: '../images/items/ximen_A2.jpg'
    },
    'ximen_A3': {
        title: 'A3  LABUBU Pony Dance',
        name: 'Taipei Lantern Festival Design Team',
        type: 'Static display',
        desc: 'For LABUBU, the playful spirit of the season comes alive through a special pony created by the Elf Troupe exclusively for this performance. Holding the pony close, LABUBU performs a lively New Year dance, symbolizing not only joy, but also the courage to gallop forward with childlike innocence.\nThis cheerful scene is set high among the clouds. A giant pink slide forms the visual centerpiece, its smooth, flowing curves extending downward from the clouds, with a wordplay in Chinese, where the sound of the word “slide” echoes the number six, symbolizing “six-six smooth fortune” for 2026. Visitors are invited to wave goodbye to the past and follow the stream of light, experiencing pure happiness and hope as they move forward together within the glow of the lanterns.',
        img: '../images/items/ximen_A3.jpg'
    },
    'ximen_A4': {
        title: 'A4 Hirono Luck on the Way',
        name: 'Taipei Lantern Festival Design Team',
        type: 'Static display',
        desc: 'Hirono takes the form of a Year-of-the-Horse lantern, moving forward with quiet determination. Like a stubborn yet glowing light in the night, Hirono carries the message that good fortune will arrive—delivered “immediately,” no matter how the road ahead unfolds.\nAmid the lively festival atmosphere, this lantern becomes an emotional haven within the city. Golden flowing clouds encircle Hirono from behind, while green simulated bamboo groves and warm yellow spherical lanterns are used to create a tranquil atmosphere. Visitors are invited to pause amid the festive revelry and enter into a quiet dialogue with their inner selves.',
        img: '../images/items/ximen_A4.jpg'
    },
    'ximen_A5': {
        title: 'A5 Taipei: A Dual-Sided Scroll',
        name: 'Taipei Lantern Festival Design Team',
        type: 'Static display',
        desc: 'Taipei is a city rich in charm. Set upon an unfolding scroll, the installation symbolizes an urban story that continues to be written. Designed for viewing from both sides, it reveals two facets of Taipei, inviting audiences to experience the city through different rhythms and sensibilities. No matter which frequency you resonate with, you can always find your own rhythm and sense of belonging in the city of Taipei.\nSKULLPANDA Wind Rider draws inspiration from the calligraphic form of the Chinese character for “horse,” using brushstroke-like flowing lines to express freedom and elegance. SKULLPANDA embodies the spirit of the horse itself, traveling effortlessly between glowing sunsets and drifting winter snow, moving with instinct and ease.\nDIMOO sits quietly atop a horse, holding a jade flute as swallow silhouettes weave through the breeze, delivering the message of spring’s return.\nThe work\'s architectural elements are mainly inspired by the Taipei Performing Arts Center, Maokong Gondola, Dahu Park’s Jindai Bridge, Taipei Children’s Amusement Park. Layered, paper-cut-style mountains form the backdrop, expressing the harmony between Taipei’s urban landscape and its natural environment, while red and gold clouds create a dreamlike atmosphere.',
        img: '../images/items/ximen_A5.jpg'
    },
    'ximen_B1': {
        title: 'B1  Instant Fortune',
        name: ' Songshan Cihui Temple Design Team',
        type: 'Static display',
        desc: 'Design Unit | Songshan Cihui Temple Design Team\nCentered on traditional lantern craftsmanship and folk auspicious symbolism, this installation conveys blessings of prosperity and immediate fortune for the New Year. The form features two galloping horses as the main motif, symbolizing wealth arriving swiftly and fortune gained “at once.” A central treasure form stands firmly between them, representing full coffers and gathered blessings.',
        img: '../images/items/ximen_B1.jpg'
    },
    'ximen_B2': {
        title: 'B2  Far Eastern Department Stores - Galloping into the New Spring',
        name: 'Far Eastern Department Stores Taipei Lantern Festival Design Team',
        type: '',
        desc: 'During the Lunar New Year, a season of family reunions and shared joy, Far Eastern Department Stores presents the horse as a symbol of freedom, ambition, and hope.\nSix auspicious horses, each carrying a unique blessing, usher in the festive spirit of the New Year and race together toward happiness, abundance, and a brighter future:\n“The Sustainable Vitality Horse”: Green living and environmental care, running forward toward a sustainable future.\n“The Joyful Fortune Horse”: Good news keeps coming, smiles grow wider, happiness and luck arrive together.\n“The Abundance Horse”: Eating well, shopping smart, and enjoying a life that feels just right.\n“The Peace and Prosperity Horse”: Safe travels, smooth days, and a heart at ease filled with blessings.\n“The Wisdom Navigator Horse”: Digital intelligence leading the way, innovation and technology at the forefront.\n“The Wealth Bringer Horse”: Fortune arrives, luck follows, prosperity flowing year after year.\nFar Eastern Department Stores shares its New Year wishes with everyone, walking alongside the public into a brand new year\nand advancing together toward its vision of “creating a better life through sustainability,” while embracing a brilliant future ahead.',
        img: '../images/items/ximen_B2.jpg'
    },
    'ximen_B3': {
        title: 'B3  Eight Steeds Charging Forward toward a Grand Future',
        name: 'Taipei Lantern Festival Design Team',
        type: 'Static display',
        desc: 'Centering on eight galloping steeds, the visual symbolizes Taishin Shinkong Financial Holding\'s drive to break new ground from a foundation of stability. Through a symmetrical design, the eight horses leap from a central pillar, embodying the collective power and synergy of the team. The upward-reaching structure mirrors our long-term vision and unwavering commitment to growth.\nBathed in festive gold and crimson, the rhythmic lighting blends Eastern auspiciousness with a sense of forward motion. This work conveys our blessings for the New Year, symbolizing a shared journey toward a bright and prosperous future. We wish you unhindered success and triumph in every endeavor!',
        img: '../images/items/ximen_B3.jpg'
    },
    'ximen_B4': {
        title: 'B4  Taipei Home Field, Dragon Charging Forward',
        name: ' Ting Hsin Taipei Lantern Festival Design Team',
        type: 'Static display',
        desc: 'We are Dragons! Red Pride. City Ride.\nBuilt around the core concept of “Red Pride. City Ride. ” this installation transforms the spirit of professional baseball into an iconic lantern landmark for the city. \nThe main visual captures the moment a player strides proudly onto the field, symbolizing that every athlete and every citizen stepping onto their home ground is a central figure striving for glory.\nUsing warm, internally illuminated lantern craftsmanship, the work balances passion with approachability, inviting everyone to step onto the field together.\nThe overall design echoes the Taipei Lantern Festival’s spirit of “citywide participation and shared experience,” allowing fans, families, and visitors to feel the unity of the city’s home field through light and shadow, and to create moments of shared glory together.',
        img: '../images/items/ximen_B4_v2.jpg'
    },
    'ximen_B5': {
        title: 'B5  Taipei Water',
        name: 'Taipei Lantern Festival Design Team',
        type: 'Static display',
        desc: 'To highlight Taipei’s inclusive urban character and meet the needs of users of different age groups, the Taipei Water Department designed a stylish, wood grain TAIPEI WATER direct drinking station. Its clear visual identity lets people instantly recognize a source of clean drinking water. Each letter offers a slightly different drinking experience, creating an environment that is not only fun and visually appealing, but also safe, friendly, and reassuring, while encouraging plastic reduction in daily life. For easier access, visitors can scan the Taipei Water Direct Drinking Map QR code with their smartphones to quickly locate nearby drinking stations. This helps residents and visitors to enjoy clean water anytime, reduce the purchase of bottled water, and helps protect the environment. ',
        img: '../images/items/ximen_B5.jpg'
    },
    'ximen_B6': {
        title: 'B6  Home Run for Dreams',
        name: 'Taipei Lantern Festival Design Team',
        type: 'Static display',
        desc: 'With the World Baseball Classic returning in 2026, Taipei’s mascot Bravo the Bear appears wearing the team uniform, bat in hand and full of heroic spirit. The design symbolizes the collective passion and unity of fans cheering for Team Chinese Taipei. This special lantern installation combines athletic excitement with a sense of honor, representing determination in the pursuit of victory and glory. Blending Lantern Festival aesthetics with the spirit of sports, it allows visitors to share in the pride and excitement of the baseball classic during the Taipei Lantern Festival. Let’s cheer together for the our team.',
        img: '../images/items/ximen_B6.jpg'
    },
    'ximen_B7': {
        title: 'B7  Taipei Bravo',
        name: 'Taipei Lantern Festival Design Team',
        type: 'Static display',
        desc: 'Taipei’s mascot Bravo the Bear shines with a special “leading the charge” gaze created exclusively for the Year of the Horse. To celebrate the New Year and invite joyful photo moments, Bravo also appears in festive new attire known as “Today’s Horse Bravo,” sending wishes of positive energy, joyful living, and a bright start to the year.',
        img: ''
    },
    'ximen_B8': {
        title: 'B8  City God Sea of Lights Tunnel ',
        name: 'Taiwan Provincial City God Temple Design Team',
        type: 'Static display',
        desc: 'Upholding the City God’s spirit of caring for the people and celebrating together with the community, the Taiwan Provincial City God Temple will present a beautiful tunnel of lights from February 9 to March 31, 2026, along Section 1 of Wuchang Street (from Chongqing South Road to Section 1 of Zhonghua Road). A canopy-style light corridor adorned with dazzling star-like fixtures will illuminate the street, creating a captivating nighttime atmosphere.\nOn February 26 (Thu), February 28 (Sat), March 3 (Tue), and March 7 (Sat), a traditional lantern riddle stage will be set up at the temple. Families are warmly invited to participate and celebrate together.',
        img: '../images/items/ximen_B8.jpg'
    },
    'ximen_B9': {
        title: 'B9  City God’s Rising Blessings Peace Bridge',
        name: 'Taiwan Provincial City God Temple Design Team',
        type: 'Static display',
        desc: 'The Peace Bridge originates from the traditional bridge-crossing ceremony folk ritual, invoking the protective power of the Big Dipper to dispel misfortune and ensure good fortune ahead.\nCommonly held during Lunar New Year, Lantern Festival, or temple celebrations, the Taiwan Provincial City God Temple, in collaboration with the Department of Information and Tourism, has specially created a symbolic illuminated bridge for the Taipei Lantern Festival. As visitors walk across the shimmering bridge of lights, they may offer sincere prayers to the City God for protection from disaster, safety and well-being, bright prospects, fulfillment in all endeavors, blessings for the whole family, swift success, and great auspicious fortune.',
        img: '../images/items/ximen_B9.jpg'
    },
    'ximen_B10': {
        title: 'B10  響樂到中華',
        name: '',
        type: '',
        desc: '',
        img: '../images/items/ximen_B10.jpg'
    },
    'ximen_B11': {
        title: 'B11  City Spectrum',
        name: 'Hsu Yu-lun, Shu Tzu-hua',
        type: 'Static display',
        desc: 'With the core idea that light is the rhythm of Taipei, this work transforms layered arched rings of light into a dynamic passage that symbolizes the city’s energy spectrum. The overall form draws inspiration from Taipei’s urban skyline. Set against the seasonal backdrop of Lunar New Year, the surface is finished in gold and red, colors associated with auspiciousness and blessing. Gold represents Taipei’s historical textures and cultural depth, while red conveys the energy, warmth, and emotional intensity of the festive season. As visitors walk through the installation, they experience the shifting pulse of the city, symbolizing its continuous vitality and forward momentum. The work offers an immersive interpretation of Taipei’s multicultural character, urban rhythm, and nighttime charm.',
        img: '../images/items/ximen_B11.jpg'
    },
    'ximen_B12': {
        title: 'B12  Residual Light Beyond the Gate',
        name: 'Chih-Chuan, Teng, \nWu Tsung-yi',
        type: 'Static display with sensor activated lighting variations',
        desc: 'Installed along Zhonghua Road in Ximending, this work reconstructs the long demolished West Gate of Taipei City, once known as Baocheng Gate(寶成門). Originally a structure of defense and division, the gate is reimagined as a symbol of openness and flow, reflecting how water transport, commerce, and culture once converged here and evolved with the city. Recycled plastics and bamboo are placed side by side, contrasting global industrial materials with local natural elements. The result is a cross era, cross cultural spatial language where tradition meets the contemporary, craftsmanship meets industry, and the local connects with the global.',
        img: '../images/items/ximen_B12.jpg'
    },
    'ximen_B13': {
        title: 'B13 Queen - A Star Wish of Female Power',
        name: 'TVBS Media Inc.',
        type: 'Static display',
        desc: 'This installation centers on the theme of “female strength and fashion appeal.” Luxury gift box imagery, pink glowing orbs, and softly curved forms come together to express the idea that every woman is a leading character worthy of appreciation. With layered lighting and dreamlike colors, the work creates a romantic, starry sky atmosphere that conveys confidence, gentleness, and courage existing side by side. Visitors are invited to step into the light and experience a shining moment that belongs to “her,” while the city extends its blessings for diversity and beauty.',
        img: '../images/items/ximen_B13.jpg'
    },
    'ximen_B14': {
        title: 'B14  Gourmet Starlight Party',
        name: 'TVBS Media Inc.',
        type: 'Static display',
        desc: 'This installation is built around the core concept of “food × music × a starlit stage.” It brings together star shaped lighting structures, guitar inspired elements, and an adorable pony, along with cute, stylized visuals of burgers, donuts, and other foods. Together, these elements symbolize the vibrant energy of urban food and lifestyle culture at night. Through bright colors and layered lighting effects, the work creates a lively, concert-like atmosphere that invites visitors to step onto a luminous stage. Here, flavors and rhythms intertwine, offering a joyful sensory experience while showcasing the vitality and creative charm of the city’s nightlife.',
        img: '../images/items/ximen_B14.jpg'
    },
    'ximen_B15': {
        title: 'B15  Prosperous Harvest, Praise to the God of Wealth Bravo',
        name: 'TVBS Media Inc.',
        type: 'Static display',
        desc: 'This lantern installation features Taipei City’s mascot, Bravo the Bear, as its central figure. Dressed in an ornate God of Wealth crown and robe, Bravo holds a massive golden ingot with both hands in a gesture of reverence, symbolizing prosperity, renewed fortune, and abundance in the coming year.\nThe “God of Wealth Bravo” represents the “connection between genuine strength and a life of abundance.” The base is adorned with peonies, symbols of wealth and honor, and sparkling stars, while also expressing TVBS’s core vision of delivering hope and positive energy through diverse media platforms. This work is not merely a depiction of the God of Wealth. It also embodies the media philosophy of “a brilliant life, blooming from within,” and offers blessings to audiences and citizens across Taiwan. In 2026, may everyone enjoy broader horizons and growing prosperity, just like the starlight shining in Bravo the Bear’s eyes.',
        img: '../images/items/ximen_B15.jpg'
    },
    'ximen_B16': {
        title: 'B16  Focal',
        name: 'hellobastworkshop',
        type: 'Static display with sensor activated lighting variations',
        desc: 'This installation art piece merges mirrored structures with a language of light. The overall form is a semi open elliptical shell of light with a gently arched surface, resembling a horizontally stretched cylinder or capsule shaped chamber. The exterior consists of multiple mirrored stainless steel panels. When visitors stand at the focal point inside, their reflections multiply like a kaleidoscope. At night, sound responsive interaction allows the mirrored LEDs to shift and transform, conveying a deeper reflection on identity, reality, and change in contemporary society.',
        img: '../images/items/ximen_B16.jpg'
    },
    'ximen_B17': {
        title: 'B17  Undulating Light',
        name: 'Lin Zhi-tong',
        type: 'Static display with sensor activated lighting variations',
        desc: 'Lanterns hold a vivid and deeply rooted cultural significance within Taipei’s historical landscape. This work draws inspiration from century-old lantern workshops in Dadaocheng, grounding itself in the craftsmanship passed down through generations and the human stories carried with it. By moving beyond the established image of traditional paper lanterns, the piece reinterprets material and light to explore how traditional imagery can extend and transform within a contemporary context, allowing historical memory to continue shining through modern design.\nThe main structure is composed of translucent glass materials, creating a visual state that hovers between presence and absence, as if suspended and unstable. Integrated sensor devices respond to ambient sound, altering the brightness of the work in real time and creating a dynamic viewing experience that shifts with its surroundings.',
        img: '../images/items/ximen_B17.jpg'
    },
    'ximen_B18': {
        title: 'B18  Sounds',
        name: 'Margot Guillemot',
        type: 'Static display',
        desc: 'Through a series of streetlights, this installation brings Taipei’s soundscape to life. Light poles of varying heights are scattered throughout the space, each displaying colorful onomatopoeic words that visually capture the sounds of the city. Every word represents a burst of noise, a moment of urban bustle, or a fleeting everyday scene, revealing the energy and diversity of daily life in Taiwan.\nThis work blurs the boundary between image and sound, inviting viewers to imagine the sounds concealed behind these visual “explosions.” In a manner that is both playful and poetic, it brings a place’s sonic identity vividly to life.',
        img: '../images/items/ximen_B18.jpg'
    },
    'ximen_B19': {
        title: 'B19 JINS Rocking Horse Sees the World',
        name: 'JINS Taipei Lantern Festival Design Team',
        type: 'Static display',
        desc: 'This work transforms childhood memories of a rocking horse into a brand lantern installation that dialogues with the city. Inspired by JINS’s redefinition of “vision,” the design invites people to rediscover overlooked beauty in everyday life, creating a relaxed pause within the lively Taipei Lantern Festival.\nLighting design is the soul of the piece. Flowing light effects move left and right along the base, creating the illusion of the rocking horse swaying back and forth. This rhythmic lighting gives the static form a sense of motion and vitality. Through the pulse of light, visitors are encouraged to feel moments of heightened perception and reconnect with their senses and daily experiences.',
        img: '../images/items/ximen_B19.jpg'
    },
    'ximen_B20': {
        title: 'B20  Taipei in Light',
        name: 'Cheng Ju-chieh',
        type: 'Static display',
        desc: 'Centered on a twin circular form where the sun and moon converge, this work employs layered paper cutting techniques to build rich strata of light and shadow, revealing Taipei’s culture, historical depth, and everyday scenery. The front presents “Daytime Taipei,” featuring iconic landmarks such as the National Dr. Sun Yat-sen Memorial Hall, The Red House, and the National Palace Museum, symbolizing the city’s journey from tradition toward modernity. The reverse shifts to “Nightfall Taipei,” combining natural elements like Maokong, Yangmingshan calla lilies, and azaleas with beloved local foods such as xiaolongbao and bubble tea, conveying the warmth and vitality of Taipei’s nightlife. Created in collaboration with Songshan Ciyou Temple, the work highlights Taipei’s distinctive energy and historical character in a radiant display.',
        img: '../images/items/ximen_B20.jpg'
    },
    'ximen_B21': {
        title: 'B21  Running Toward Sustainability, Life in Continuous Growth',
        name: 'Fubon Taipei Lantern Festival Design Team',
        type: '',
        desc: 'Centered on a luminous tree that symbolizes growth and protection, this work features a wooden structure with a canopy formed by 24 light petals, representing 24 hours of continuous care and renewal. It echoes the long term commitment of Fubon Financial Holding and Taiwan Mobile to sustainable development.\nThe installation incorporates a running interaction. As visitors move along the track, light energy flows upward from the ground with each step, gradually illuminating the canopy petals. At the final point, lanterns glow and shift into gentle color changes, symbolizing how action drives change and how energy continues to circulate.\nThrough time, light, and human participation, the work envisions a sustainability driven future in constant operation, expressing the Fubon Group’s vision of coexistence with the city and harmony with the environment.',
        img: '../images/items/ximen_B21.jpg'
    },
    'ximen_B22': {
        title: 'B22  The Empress of Heaven and the Bridge of Blessings',
        name: 'Taipei Tianhou Temple & YOUGO creative',
        type: 'Static display',
        desc: 'Centered on Mazu, the Empress of Heaven, and Taipei Tianhou Temple, the work presents traditional Taiwanese folk beliefs through innovative design. It combines the Peace Bridge and the blessing ritual known as “crawling beneath the palanquin,” making it not only a purely visual display but also an immersive,walkable experience. Visitors can step onto the bridge and walk through the space between the bridge and the palanquin. This act symbolizes a person crossing the threshold of difficulty, warding off misfortune, and completing the prayer to Mazu. As visitors walk across the bridge, responsive lighting flows and shifts with each step, creating an ever-changing interplay of light and shadow.\nThe dynamic illumination feels like Mazu’s divine light shining upon those who pass through, surrounding them with warmth, reassurance, and hope. Through the fusion of traditional beliefs and contemporary light art, the work invites visitors to make wishes amid light and shadow for a prosperous and peaceful year in 2026, so that all blessings may shine as brightly as this work in the city.',
        img: '../images/items/ximen_B22_v2.jpg'
    },
    'ximen_B23': {
        title: 'B23  Golden Luck Pavilion',
        name: 'Taipei Lantern Festival Design Team',
        type: 'Static display',
        desc: 'Guided by the concept that blessings are born in Taipei and radiate outward across the city, this work uses an Eastern style gateway structure and the visual language of lantern light to create a ceremonial gate of blessings unique to Taipei. The main structure features traditional color framing that symbolizes prosperity and abundance, while red lanterns evoke festive joy. Together, they form a vivid expression of Taipei’s warmth during the Lantern Festival. At the center, auspicious phrases serve as a focal point representing the city’s core spirit, gathering good fortune from all directions and dispersing it outward through surrounding light boxes like beams of light. As visitors walk through the illuminated space, they are immersed in a sense of happiness and welcomed by good fortune.During the exhibition period, a wishing card activity will be held near the installation area. Visitors may write down their wishes and hang them on the lantern prayer wall, leaving behind their own heartfelt blessings.',
        img: '../images/items/ximen_B23.jpg'
    },
    'ximen_B24': {
        title: 'B24  Star Whispers of Yuan Night',
        name: 'Yuanling Design Team',
        type: 'Static display',
        desc: 'Inspired by the famed “Shoe Street”, Yuanling Street, this installation transforms the nighttime street into a starlit stage of dreams and imagination. The district mascot Little Yuanbao (a parrot) appears like Cinderella, riding in a pumpkin carriage symbolizing hope and fantasy, traveling between starlight and drifting clouds on a fairytale nighttime journey. Beside a dreamlike celestial steed standing among the clouds, the scene represents companionship, protection, and gentle emotional connection.\nThrough layered clouds and expansive starry visuals, the work creates a serene and romantic nocturnal atmosphere. The familiar Yuanling Street becomes a softly whispering storyscape after dark, inviting visitors to pause and listen to the whispers of the stars.',
        img: '../images/items/ximen_B24.jpg'
    },
    'ximen_B25': {
        title: 'B25  Radiant Wanhua',
        name: 'Taipei Lantern Festival Design Team',
        type: 'Static display',
        desc: 'Rooted in Wanhua’s local culture, this installation transforms the district’s iconic landmarks and cultural stories into lanterns that symbolize blessings. Rendered in gold and red tones, the work conveys festivity and abundance, reflecting Wanhua’s long standing spirit as a vibrant, diverse, and life filled neighborhood. At the center, a large cluster of lanterns forms a cultural map, turning the installation into more than a visual display. It becomes a window that looks back on the land’s stories, awakening emotional connections to Monga culture for residents and visitors alike. Through light, Wanhua’s streets, people, faith, and history are illuminated once more, expressing the city’s profound cultural depth.',
        img: '../images/items/ximen_B25.jpg'
    },
    'ximen_B26': {
        title: 'B26  光行小馬 (剝皮寮)',
        name: '',
        type: 'Static display',
        desc: '',
        img: '../images/items/ximen_B26.jpg'
    },

    // --- 花博展區的資料 ------------ //
    'expo_A1': {
        title: 'A1 Optimus Prime',
        name: 'Transformers Design Team',
        type: 'Static display',
        desc: 'This lantern installation features Optimus Prime, the noble leader of Autobots, as the central figure. The 10 meters tall installation is featured as the main lantern with futuristic lighting design. Layered mechanical details and dynamic illumination present a bold vision of futuristic tech aesthetic, marking the opening of Taipei Lantern Festival’s most iconic chapter of tech-driven light and shadow.\nThe light show is presented every 30 minutes.',
        img: '../images/items/expo_A1.jpg'
    },
    'expo_A2': {
        title: 'A2  Optimus Prime vs Megatron',
        name: 'Transformers Design Team',
        type: 'Static display',
        desc: 'This installation recreates showdown game interface of Autobots and Deceptions on a large-scale arcade game device. Instead of digital screen, it uses layered films and LED sequence controls to recreate classic 8-bit visual effects through lightbox. It showcases the lantern festival’s diverse characters, blending creativity, technology and sense of play',
        img: '../images/items/expo_A4.jpg'
    },
    
    'expo_A3': {
        title: 'A3  Megatron',
        name: 'Transformers Design Team',
        type: 'Static display',
        desc: 'This lantern set captures the dramatic moment of Megatron emerging through a time-space portal. The circular structure combined with blue lighting creates a powerful, futuristic atmosphere. The central lightboxcreates a cinematic moment of energy convergence and spatial rupture. Megatron emerges from the portal wielding his fusion cannon, radiating an overwhelming and intimidating presence. This powerful moment transforms the entire lantern installation into a commanding visual focal point—one that embodies immense power, dramatic tension, and cinematic impact.',
        img: '../images/items/expo_A3.jpg'
    },
    'expo_A4': {
        title: 'A4 Bumblebee',
        name: 'Transformers Design Team',
        type: 'Static display',
        desc: 'Inspired by Bumblebee’s agile and dynamic personality, this lantern set features an Infinity Mirror background that creates a tunnel of reflections that appear to recede into an endless space. The flat base transforms into tunnel with infinite depth , symbolizing speed, traversal, and infinite possibilities.',
        img: '../images/items/expo_A2.jpg'
    },
    'expo_B1': {
        title: 'B1 Yuanshan Memories',
        name: 'Hsu Yu-lun',
        type: 'Static display',
        desc: 'Shaped like a giant soccer ball, this lantern installation recalls the history of Zhongshan Soccer Stadium and transforms it into a vessel of collective memory. Faceted light structures cut into the sphere create a glowing container for stories. From different angles, visitors discover cultural symbols of Yuanshan, including Grandpa Elephant from the former Taipei Zoo, the iconic Grand Hotel, the floral landscapes of Taipei Expo Park, and the beloved Children’s Amusement Park. Together, these memories form a lasting urban imprint that brings Yuanshan’s past into the present.',
        img: '../images/items/expo_B1.jpg'
    },
    'expo_B2': {
        title: 'B2  Gymnastics Baron',
        name: 'Chang Yu-chia',
        type: 'Static display',
        desc: 'The artist’s signature character, Gymnastics Baron, appears as a futuristic astronaut who lands in Taipei Expo Park and gazes at the stars. He represents the act of absorbing the city’s trend-forward energy and carrying it back into outer space, symbolizing the fusion of technology, art, landscape, and pop culture.\nWith a posture that feels half-resting and half-observing, the work echoes the rhythm of nearby Songshan Airport, where departures and arrivals, separations and reunions, happen daily. Through stillness, the piece responds to this constant motion, giving people a rare chance to pause and look up at the sky.',
        img: '../images/items/expo_B2.jpg'
    },
    'expo_B3': {
        title: 'B3  Serenity Flora Realm',
        name: 'Chen Kai-wei',
        type: 'Interactive display',
        desc: 'Inspired by Taipei’s iconic flowers, this immersive light garden invites visitors to slow down, linger, and unwind. Drawing from azaleas, calla lilies, and roses, the installation reimagines blooming forms through fiber optics and translucent materials. Soft pink, elegant white, and gentle purple light reveal the delicate layers of spring in bloom, symbolizing vitality and romance within the city. Designed as a peaceful pause amid busy urban life, the garden offers a quiet space to rest and experience the soothing power of light. Created in collaboration with Taipei Xia-Hai City God Temple, the work incorporates red threads that symbolize harmonious relationships and destined love, extending blessings and protection from the City God and his consort to every visitor.\nSit down the chair and watch the lights respond.',
        img: '../images/items/expo_B3.jpg'
    },
    'expo_B4': {
        title: 'B4  Forest Light Pathway',
        name: 'Hsu Chih-ming',
        type: 'Static display',
        desc: 'Inspired by the twilight cloud bands of Yangmingshan, the installation visualizes the quiet “breath” between earth and sky. The afterglow of sunset becomes swirling strands of cloud, like mountain mist rising at dusk, expressing a life force that is calm yet continuously pulsing. Flowing lines drawn from the Tamsui River gather gently from afar, extending toward the outer ring of the work like forest pathways that lead visitors into its energetic core. Colors and movement unfold in a balanced, breathing rhythm. Through step triggered sensing and gradual tempo shifts, light and motion respond to the presence of visitors, creating a shared, empathetic experience where people and light move together.',
        img: '../images/items/expo_B4.jpg'
    },
    'expo_B5': {
        title: 'B5  Fountain of Life ',
        name: 'Hsu Yu-lun, Shu Tzu-hua',
        type: 'Static display with scheduled lighting transitions',
        desc: 'Trees serve as one of the purest symbols of life. Using an on-site tree trunk as its core, this work channels rising streams of luminous energy from the earth upward, spreading along branching veins like a steady pulse. The expanding light network conveys continuous vitality flowing outward. When illuminated at night, the tree transforms into a living body of light, gentle yet powerful, guiding visitors to sense nature’s breath through shifting shadows. “Fountain of Life” expresses the philosophy of birth, circulation, and growth, reminding us that the source of life is never far away, continuously unfolding through every flow of energy, and inviting us to rediscover nature’s power and the inherent beauty of life through light and shadow.\nThe installation presents a light show every 15 minutes.',
        img: '../images/items/expo_B5.jpg'
    },
    'expo_B6': {
        title: 'B6 Gate of Light',
        name: 'Hsu Chih-ming',
        type: 'Static display',
        desc: 'Centering on Taipei’s cultural identity, the artist transforms forests, night skies, and iconic architecture into visual expressions of energy. Taipei 101 stands as a pillar of technological and future-oriented power. Taipei Performing Arts Center acts as an engine of imagination, driving creative energy outward. The archway of National Chiang Kai-shek Memorial Hall embodies shared civic values, while The Grand Hotel resembles a cultural sanctuary, quietly watching over the city. Together, these elements form a symbolic Gate of Light for Taipei, representing the meeting of nature and civilization and guiding viewers across boundaries of history, civilization, space, and the natural world.',
        img: '../images/items/expo_B6.jpg'
    },
    'expo_B7': {
        title: 'B7  Blooming Galaxy',
        name: 'Chen Kai-wei',
        type: 'Static display with scheduled lighting transitions',
        desc: 'Blending fantasy ecology with cosmic imagination, this installation merges floral forms, light, and extraterrestrial elements to create a lifeform that feels as if it has descended from the stars. A blooming bouquet forms the core, surrounded by surreal and unknown lifeforms, symbolizing endless energy of life. A UFO infused with cosmic power crowns the piece, serving as a visual focal point that amplifies the sense of awakening and expansion. Soft pink-blue hues and dreamy purples flow like a galaxy, giving the installation a warm yet mysterious nighttime presence. The work invites viewers to step beyond everyday perspectives and see how life continues to grow vibrantly, even in a fast-changing world.\nThe installation presents a light show every 15 minutes.',
        img: '../images/items/expo_B7.jpg'
    },
    'expo_B8': {
        title: 'B8  Base',
        name: 'Chiu Chieh-sen',
        type: 'Static display',
        desc: 'This work constructs a luminous urban illusion. Drawing on humanity’s archetypal image of the “tower”, tied to belief, power, memory, and belonging, it reinterprets the form through contemporary industrial materials and digital lighting. The result is a city symbol that exists between reality and fiction. No longer a monument of authority, the structure becomes a space to walk through, observe, and be enveloped by light. As visitors move within it, the city’s order, rhythm, and sensory experience are redefined. The tower becomes a microcosm of Taipei, a memory container built with steel as its bones and light as its language.',
        img: '../images/items/expo_B8.jpg'
    },
    'expo_B9': {
        title: 'B9  SPACE TAIPEI',
        name: 'Margot Guillemot',
        type: 'Static display with scheduled lighting transitions',
        desc: 'Using paper airplanes as a symbol of Taipei’s imagination for the future, this installation traces three-dimensional flight paths made of light, expressing the city’s readiness to take off and break new ground. Multiple glowing paper planes, set at different heights and angles, appear poised to lift off from the grass, inviting visitors into a journey of dreams, technology, and the future.\nAt night, the light draws invisible air routes in the sky. Each plane feels like a future plan coming to life, pointing toward a broader vision of the city. The work reminds us that no matter how times change, Taipei remains a city that carries dreams forward.\nThe installation presents a light show every 10 minutes.',
        img: '../images/items/expo_B9.jpg'
    },
    'expo_B10': {
        title: 'B10  The Circle of Seasons',
        name: 'Margot Guillemot',
        type: 'Static display +Breathing light effects',
        desc: 'This circular installation blends Taipei’s natural landscape with its urban character, creating a symbolic miniature world. Shifting light colors echo the changing seasons - spring blossoms, summer abundance, autumn vibrance, and winter calm - forming a poetic window into the city’s climate cycle.\nIn Taipei, it is common to travel from bustling city streets to forested hills within minutes along the same commute. This seamless transition between nature and city life lies at the heart of the work. Created in collaboration with Songshan Ciyou Temple, the piece hopes to help visitors find inner peace between urban living and natural experience.',
        img: '../images/items/expo_B10.jpg'
    },
    'expo_B11': {
        title: 'B11  TreeLink',
        name: 'Chen Kai-wei',
        type: 'Static display with scheduled lighting transitions',
        desc: 'Inspired by Taipei’s lush greenery and its most iconic banyan trees, a powerful symbol of life in the city’s streetscape, this lantern transforms the banyan into a geometric “Tree of Light” that speaks to the world. It represents Taipei’s openness and spirit of exchange as an international city. Light boxes embedded in the tree feature cultural symbols, signature imagery, and representative colors from Taipei and its sister cities, symbolizing cultural dialogue and emotional connection through light and shadow. Using light as a universal language, the installation gives form to Taipei’s connection with the world, allowing visitors to feel the warmth of the city’s spirit and its outward-looking global vision.\nThe installation presents a light show every 15 minutes.',
        img: '../images/items/expo_B11.jpg'
    },
    'expo_B12': {
        title: 'B12 Taipei Water - Azalea',
        name: 'Taipei Lantern Festival Design Team',
        type: 'Static display',
        desc: 'The Taipei Water Department has designed the “Azalea Direct Drinking Station” inspired by Taipei’s city flower, symbolizing the city’s beauty, prosperity, and happiness. Flowers draw life from water. When visitors drink from the station, they not only quench their thirst and refresh body and mind, but also symbolically nourish the flower itself, conveying the spirit of vitality, renewal, and flourishing growth.\nThe Azalea Direct Drinking Station adopts universal design, featuring drinking fountains at different heights so that adults, children, people with disabilities, and even pets can use it with ease. It creates an environmentally friendly and inclusive public space unique to Taipei. Shimmering, colorful LED stamens and petals invite playful interaction, inviting users to feel like bees gathering nectar. Solar panels embedded in the petals incorporate green energy, carbon reduction, and sustainability concepts, demonstrating energy saving and plastic reduction efforts in caring for the planet. The circular central light fixture, combined with the festive atmosphere of the Lantern Festival and New Year, adds a lively and cheerful touch that enhances the city’s visual landscape.',
        img: '../images/items/expo_B12.jpg'
    },
    'expo_B13': {
        title: 'B13  Whimsy Fizzy Rhapsody',
        name: 'Ku-Tsao Music',
        type: 'Interactive display',
        desc: 'Inspired by whimsical animal forms and Taipei’s vibrant multicultural spirit, this interactive artwork reimagines the city’s hopes and visions for the coming year through contemporary technology. Characters such as Doodoo Beast, Tootoo Horse, Roarro Dragon, and Zhen Qi Guai feature bold colors and playful shapes. Enhanced by dynamic lighting and interactive elements, they symbolize Taipei’s boundless creativity and lively energy.\nWhen visitors interact with the installation, the lights shift in response, and bubbles gently float from above, adding a lighthearted, dreamlike atmosphere that reflects the city’s endless possibilities.',
        img: '../images/items/expo_B13.jpg'
    },
    'expo_B14': {
        title: 'B14  Team Taipei Bravo',
        name: 'Taipei Lantern Festival Design Team',
        type: 'Static display',
        desc: 'As part of the 2026 Taipei Lantern Festival, all 12 administrative districts of Taipei are brought together through 12 specially designed Bravo the Bear figures. Each figure highlights the distinctive character of its district, including fashionable Xinyi, refined Daan, trendy Nangang, exploratory Neihu, vibrant Shilin, travel-inspired Songshan, tea-scented Wenshan, inquisitive Zhongzheng, theatrical Datong, historic Wanhua, arts-focused Zhongshan, and hot spring Beitou. Transforming into ambassadors for their respective districts, Bravo becomes an essential member of Team Taipei, perfectly representing the city’s diversity, creativity, and vitality. Every district earns its Bravo, and together they form Taipei Team Bravo.',
        img: '../images/items/expo_B14_v2.jpg'
    },
    'expo_B15': {
        title: 'B15 景福宮燈區',
        name: '',
        type: 'Static display',
        desc: '',
        img: '../images/items/expo_B15.jpg'
    },
    'expo_B16': {
        title: 'B16 Dazzling in Zhongshan',
        name: 'Zhongshan Shopping District Development Association',
        type: 'Static display',
        desc: 'Dazzling in Zhongshan integrates iconic landmarks of the Zhongshan commercial district, including Yuanshan Expo Park, and the district flower, the butterfly iris. Blending traditional architecture with modern urban scenery, the installation features specially designed floral bouquets that bloom in radiant colors and light at night. Come shine with Zhongshan tonight.',
        img: '../images/items/expo_B16.jpg'
    },

    'expo_C1': {
        title: 'Light of Liberty Promise of Prosperity',
        name: 'LIN, Yu-Chu、LEE, Kuan-I、Lico Lee',
        type: '',
        desc: 'On July 4, 2026, the United States will commemorate the 250ᵗʰ anniversary of its founding. To mark this historic milestone, the American Institute in Taiwan (AIT) is honored to participate in the 2026 Taipei Lantern Festival by presenting the AIT Lantern-an artistic celebration of American he ritage and enduring friendship between the United States and Taiwan.\nDesigned and crafted by acclaimed Taiwanese lantern artists Lin Yu-Chu, Lee Kuan-I, and Lico Lee, the AIT Lantern features iconic American symbols, each representing ideals that have guided the United States for two and a half centuries. The Statue of Liberty stands for freedom and opportunity, while the Capitol reflects democracy and civic participation. Baseball honors tradition and teamwork; the Golden Gate Bridge represents ingenuity, ambition, and progress. The Bald Eagle conveys sovereignty and strength, the Space Shuttle captures inspiration and innovation, and the Stars and Stripes affirm unity and sacrifice.\nAnchoring the installation is its theme, "Light of Liberty, Promise of Prosperity," illuminated along the base-a reminder of foundational American values: freedom, opportunity, and progress. As we write the next chapter of American history, AIT invites friends across Taiwan to join us in honoring the founding ideals that have shaped the United States for 250 years and to join together toward a future defined by strong partnership and shared prosperity.',
        img: '../images/items/expo_C1.jpg'
    },
    'expo_C2': {
        title: 'Vibrant Folklore',
        name: 'Huang Wen Chuan',
        type: '',
        desc: 'St. Kitts and Nevis folklore groups showcase our African heritage combined with European influences. Experience our unique cultural parade through this vibrant lantern display!\nFrom left to right:\nThe Moko Jumbie—These stilt walkers symbolize the giants of African mythology.\nThe Clown—The costume mimics the European court jester.\nThe Actors—Daring stunts are performed by a team of acrobats with a garden pitchfork.\nThe Bull—The main character in a national tale of a vicious bull that survived a stabbing and became even more ferocious than before.\nThe Masquerade—Adorned in colorful costume s and peacock feather headdresses , masquerade dancers perform well-choreographed routines to the rhythm of a fife band.',
        img: '../images/items/expo_C2.jpg'
    },
    'expo_C3': {
        title: 'Experience Fukushima Through Traditiona l Lucky Charms',
        name: 'Lan Yung Chi Lantern Art House',
        type: '',
        desc: 'Located in Japan\'s Tohoku region, Fukushima Prefecture is the country\'s third-largest prefecture, celebrated for its abundant nature and ever-changing scenery across all four seasons.\nThis enchanting lantern display showcases two beloved folk toys from the Aizu region- the Akabeko and Okiagari Koboshi. Long treasured as symbo ls of good fortune, they represent protection from illness, resilience, and harmony within the family.\nWith convenient direct flights from Taiwan to Fukushima every Tuesday and Friday via Tigerair Taiwan, getting there has never been easier. Come and disc over Fukushima\'s seasonal beauty, rich traditions, and distinctive cultural charm for yourself.',
        img: '../images/items/expo_C3.jpg'
    },
    'expo_C4': {
        title: 'Elegant Melodies of Hamamatsu, Flowers Flowing on Wheels',
        name: 'Lan Yung Chi',
        type: '',
        desc: 'Ideally situated midway between Tokyo and Osaka, Hamamatsu is a city blessed with a rich natural environment . Acce ssible in just 90 minutes by Shinkansen from either metropolis and conveniently reached from Chubu Centrair International Airport, the city is defined by four key elements: History, Flowers, Lake Hamana, and Music & Manufacturing.\nThe city boasts numerous highlights, including Hamamatsu Castle, where Shogun Tokugawa Ieyasu spent his formative years; Hamamatsu Flower Park, famous for its stunning cherry blossoms and tulips; and Lake Hamana, a resort area offering ropeway rides, cycling, hot springs, and its renowned eel (unagi) cuisine. Visitors can also explore the corporate museums of world-leading manufacturers such as SUZUKI and YAMAHA , reflecting the city\'s identity as a global hub of craftsmanship.\nWe warmly invite you to visit Hamamatsu and discover its unique charms for yourself.',
        img: '../images/items/expo_C4.jpg'
    },
    'expo_C5': {
        title: 'Powerful Daegu',
        name: 'CHEN, ZU-RONG',
        type: '',
        desc: 'The lantern is themed "Powerful Daegu" and was created by Taiwan s national treasure-level lantern art master, Chen, Zu-Rong. In addition to showcasing Daegu\'s many famous tourist attractions, it specially features Daegu\'s most popular mascot-the Daegu Otter-to present the city\'s energetic and adorable spirit to the people.',
        img: '../images/items/expo_C5.jpg'
    },
    'expo_C6': {
        title: 'Welcome to Matsuyama',
        name: 'CHEN, ZU-RONG',
        type: '',
        desc: 'Matsuyama City, Ehime Prefecture, Japan is home to many fascinating tourist attractions.\nDōgo Onsen is said to be the oldest hot spring in Japan, with legends dating back to Japan\'s mythological era. In addition to its high-quality waters, the Dōgo Onsen Honkan is also recognized as a three-star tourist attraction in the Michelin Green Guide Japan.\nMatsuyama Castle, visible from many parts of the city, has a history of over 400 years. Its castle tower, perched atop a 132-meter mountain , is one of only twelve such structures remaining in Japan, making it a rare find. The site also includes numerous other important cultural properties.\nThere is also the Botchan Train, a tramway replic a of a train that operated approximately 130 years ago.\nDirect flights between Matsuyama and Taiwan make the city easily accessible for visitors. Come visit Matsuyama, a city brimming with history and culture.',
        img: '../images/items/expo_C6.jpg'
    },
    'expo_C7': {
        title: 'Guam, the Chamoru Spirit Lantern',
        name: 'CHEN, ZU-RONG',
        type: '',
        desc: 'Guam, the CHamoru Spirit Lantern illuminates the cultural pride and living heritage of the CHamoru people, honoring their ancestors, land, and enduring way of life. Through a harmonious blend of natural and cultural symbols, the lantern reflects Guam\'s unique identity and deep-rooted history.\nThe design features the Latte Stone, the ancient foundation of CHamoru homes, symbolizing resilience and st rength; the long, curved silhouette of Guam inspired by the legend of the goddess Fu\'una, whose sacrifice gave life to the island; and the Proa canoe, representing the seafaring mastery of CHamoru ancestors and their shared Austronesian heritage with Taiwan. The Ko\'ko\'bird, endemic to Guam and now under active conservation, embodies hope and restoration, while the coconut tree-known as the "tree of life"-highlights the island\'s sustainable traditions and daily reliance on nature.\nAnchored in the spirit of traditional CHamoru performance, where dance, chant, and storytelling preserve history and strengthen community bonds, the lantern shines as a beacon of cultural continuity. It conveys Guam\'s commitment to honoring its indigenous roots while sharing the CHamoru spirit with the world.',
        img: '../images/items/expo_C7.jpg'
    },
    'expo_C8': {
        title: 'Kasama City, Ibaraki~a charming city~',
        name: 'CHEN, ZU-RONG',
        type: '',
        desc: 'Kasama City(a city of Ibaraki Pref. ,Japan ), long renowned as a major producer of pottery "Kasama yaki(or Kasama Pottery)" and granite, abounds in natural resources, enjoys a rich history, and has deep cultural roots. Throughout the city there are a number of temples, shrines, and historical points of interest. The Azalea Festival in spring, the Chrysanthemum Festival in autumn, the ever-changing seasonal backdrop, the flames of pottery kilns alight, the unique collections displayed in the museum\'s, and Kasama\'s status as Japan\'s leading producer of chestnuts-all characterize the charm that keeps attracting visitors.',
        img: '../images/items/expo_C8.jpg'
    },
    'expo_C9': {
        title: 'Akita Cultural Journey in Lantern Light',
        name: 'Lan Yung Chi Lantern Art House',
        type: '',
        desc: 'Akita Prefecture is located in the Tohoku region of Japan\'s main island and is the hometown of the legendary loyal dog Hachiko (Akita Dog). Akita Prefecture features four distinct seasons, where fresh air and pure water nurture renowned cuisine and sake.\nBeyond its natural beauty, Akita is home to unique cultural festivals. Following last year\'s showcase of the mysterious "Oga Namahage," the heartwarming "Yokote Kamakura," the elegant "Yuzawa Tanabata Painted Lanterns," and Tigerair Taiwan\'s mascot "Hoo Jiang," this year\'s exhibition features the addition of the dreamlike "Kamihinokinai Paper Balloon" and the "Noshiro Tanabata Sky Lanterns." This castle-shaped lantern stands as the tallest in Japan at 24.1 meters; revived in 2013 after a century-long hiatus, it has revitalized the city. These cultural icons are all meticulously presented through these lanterns.\nThrough this exhibition, we hope these stunning lanterns will spark a sense of curiosity and longing for Akita. Tigerair Taiwan now offers direct flights to Akita Airport every Thursday and Sunday, making travel convenient. We warmly invite you to visit Akita in person and experience its rich culture and breathtaking seasonal beauty for yourself. We look forward to seeing you in Akita!',
        img: '../images/items/expo_C9.jpg'
    },
    'expo_C10': {
        title: 'Taipei City・Matsue City Friendship Lantern',
        name: 'The Bards：Kota、Pori、Satoshi、Tabuchi',
        type: '',
        desc: 'Matsue City\'s autumn tradition, the "Matsue Water Lantern Festival," features numerous handmade lanterns lining the castle town. This year marks the 20ᵗʰ anniversary of the exchange between Matsue City and Taipei City, which began with peonies. As a symbol of friendship between Taipei and Matsue, lanterns created through a collaboration between students from University of Taipei Department of Visual Arts and Matsue City creators will be displayed.',
        img: '../images/items/expo_C10.jpg'
    },
    'expo_C11': {
        title: 'Illuminated Elegance The Tale of Wakayama',
        name: 'Lan Yung Chi Lantern Art House',
        type: '',
        desc: 'Wakayama Prefecture, located at the southern tip of Japan\'s Honshu Island, is a treasure where nature and culture harmoniously coexist, boasting magnificent coastlines, lush mountains, and World Heritage sites such as Mt. Koya and the Kumano Kodo. This lantern exhibition presents four exquisite pieces that convey the diverse charms of this land.\nThe Arida Mikan in golden autumn symbolizes the joy of harvest, spreading the rich fragrance of Wakayama, the home of citrus. The beloved cat stationmaster Tama, with its adorable figure, recreates the heartwarming story of the Wakayama Electric Railway. The mascot Kiichan, dressed in Heian-period attire, depicts a magnificent chapter of a thousand years of history. Meanwhile, the Konpon Daito pagoda, towering on Mt. Koya, symbolizes the deep religious and cultural heritage of Wakayama Prefecture.\nThrough these four lanterns, the natural beauty and cultural stories of Wakayama are expressed in light and shadow, inviting visitors to experience this destination, rich in history and vibrant in charm.',
        img: '../images/items/expo_C11.jpg'
    },
    'expo_C12': {
        title: 'Front Design :"Ma Chao Fighting Valiantly"\nBack Design :"Tang Beauty"',
        name: 'KAWAMURA REIHA',
        type: '',
        desc: 'This is a miniature version of a festival float actually used in the Hirosaki Neputa Festival, a traditional summer festival held annually in Hirosaki City, Aomori Prefecture, Japan.\nNeputa lanterns are typically fan-shaped. The base features illustrations of warriors along with the calligraphy "Unkan" (雲漢), which represents the Milky Way, and is decorated with peony motifs.\nThe fan-shaped lanterns commonly depict characters from Romance of the Three Kingdoms. The Neputa lantern exhibited here is painted with the image of Ma Chao, valor in the midst of battle.',
        img: '../images/items/expo_C12.jpg'
    },
    'expo_C13': {
        title: 'This is Shanghai',
        name: 'WANG ZHAO QING',
        type: '',
        desc: 'The sculpture is inspired by the legend of the “Winged Heavenly Horse.” Made from iridescent, eco-friendly polypropylene (PP) material, it forms the “Cosmic Steed Traversing Time and Space,” with its hooves poised above the “Star-Trail Galaxy.” Shanghai’s iconic landmarks, the Huangpu River, and Suzhou Creek surround the figure. Lights flow and shift colors smoothly, while swirling stars at the base recreate the shimmering hues of the Milky Way, creating a futuristic sci-fi atmosphere.  \nThe galloping horse carries Shanghai’s warm blessings, surrounded by blooming flowers. It symbolizes prosperity, the beauty of spring, and peaceful harmony. We sincerely wish everyone a joyful, lucky, and prosperous Year of the Horse!',
        img: '../images/items/expo_C13.jpg'
    },

};


/* --- 2. 再定義功能函式 (放在資料下面) --- */
function openMapModal(id) {
    console.log("1. 正在開啟 ID:", id); 
    
    // --- [新增] 判斷當前網頁語系 ---
    const currentLang = document.documentElement.lang; // 抓取 <html lang="xxx"> 的值
    
    // 根據語系決定要用哪個資料庫
    let data;
    if (currentLang === 'en') {
        data = mapDataEn[id]; // 如果是英文版，抓 mapDataEn
    } else {
        data = mapData[id];   // 否則預設抓中文版的 mapData
    }
    
    if (!data) {
        console.error("2. 錯誤！找不到這個 ID 的資料，請檢查資料庫設定");
        return;
    }

    console.log("2. 成功抓到資料:", data);

    // --- 填充標題 ---
    const titleEl = document.getElementById('modalTitle');
    if (titleEl) titleEl.innerText = data.title;

    // --- 填充作者名 ---
    const nameEl = document.getElementById('modalName');
    if (nameEl) {
        nameEl.innerText = data.name || ""; 
    }

    // --- 填充展演方式 ---
    const typeEl = document.getElementById('modalType');
    if (typeEl) {
        typeEl.innerText = data.type || ""; 
    }

    // --- 填充描述 ---
    const descEl = document.getElementById('modalDesc');
    if (descEl) {
        descEl.innerHTML = data.desc || ""; 
    }

    // --- 填充圖片 ---
    const imgEl = document.getElementById('modalImg');
    if (imgEl) {
        if (data.img) {
            imgEl.src = data.img;
            imgEl.style.display = 'block';
        } else {
            imgEl.style.display = 'none';
        }
    }

    // --- 顯示彈窗 ---
    const modal = document.getElementById('mapModal');
    if (modal) {
        modal.style.display = 'flex';
        setTimeout(() => { modal.classList.add('show'); }, 10);
    }
}

/* --- 關閉彈窗 (整合版) --- */
function closeMapModal(e) {
    // 1. 如果有傳入事件 (代表是點擊背景)，要判斷是否點在遮罩上
    if (e && !e.target.classList.contains('modal-overlay')) {
        return; // 點在內容框裡面，不關閉
    }

    // 2. 執行關閉動作
    const modal = document.getElementById('mapModal');
    if (modal) {
        modal.classList.remove('show');
        setTimeout(() => { modal.style.display = 'none'; }, 300);
    }
}







