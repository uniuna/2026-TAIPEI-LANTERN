
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
        img: 'images/items/ximen_A1.jpg'
    },
    'ximen_A2': {
        title: 'A2  Twinkle Twinkle 星夢迎春',
        name: '泡泡瑪特設計團隊',
        type: '靜態展出',
        desc: '星星人以青花瓷為靈感，將幽藍紋飾與璀璨星芒交織於身，俏皮又勇敢無畏。這份古典與潮流的碰撞，是一場關於「遇見」的設計——6公尺米高的巨大星星人佇立於捷運站6號出口上方頂端，利用西門町特有的空間高度，將傳統文化的雅緻與潮流玩具的童趣結合，讓大家踏出捷運站的那一刻，便能感受滿天星光的感動。',
        img: 'images/items/ximen_A2.jpg'
    },
    'ximen_A3': {
        title: 'A3  LABUBU 小馬歡騰',
        name: '泡泡瑪特設計團隊',
        type: '靜態展出',
        desc: 'LABUBU抱著精靈天團特別製作的小馬，在春節展現俏皮舞姿。這不僅是一場舞蹈，更是帶著童心勇敢向前奔騰的象徵。我們將這場舞蹈搬到了雲端之上。視覺主軸是一座巨大的粉紅色溜滑梯，滑梯的流暢的曲線從雲端延伸而下，取「溜」的諧音「六」，象徵2026年運勢「六六大順」。邀請大家揮別過去，感受純粹的快樂與希望。',
        img: 'images/items/ximen_A3.jpg'
    },
    'ximen_A4': {
        title: 'A4  Hirono小野 馬上福到',
        name: '泡泡瑪特設計團隊',
        type: '靜態展出',
        desc: 'Hirono小野執鞭前行，他像是一盞在夜色中堅持閃耀的「倔強之光」，不論前路如何，都要將好運「馬上」送到大家手中。在熱鬧喧囂的燈會中，這組燈飾是城市裡的「情緒避風港」。Hirono小野背後環繞著金色流雲，燈組運用了綠色仿真竹林與暖黃色球形燈籠，營造出靜謐感。邀請大家在狂歡的節慶中停下腳步，與內心的自己進行一場寧靜對話。',
        img: 'images/items/ximen_A4.jpg'
    },
    'ximen_A5': {
        title: 'A5  臺北雙面畫卷',
        name: '泡泡瑪特設計團隊',
        type: '靜態展出',
        desc: '台北是充滿魅力的城市，我們以「展開的卷軸」為舞台，象徵正在書寫的城市故事。透過雙面觀賞，呈現出台北的兩面，無論是誰都能在臺北這座城市裡，找到屬於自己的共鳴。<br><br>・SKULLPANDA 馭長風 Wind RiderSKULLPANDA以書法「馬」字為發想，用毛筆勾勒出飄逸灑脫的形象。<br>SKULLPANDA 化意為馬，在夕陽與寒雪間隨心而行。<br><br>・DIMOO 逐雲而行 Chasing the Clouds<br>DIMOO靜坐馬背，手執玉笛，燕影隨風穿梭，傳遞春回大地的訊息。<br><br>這座燈組以紅、金色調的雲朵營造出如夢似幻的氛圍，並運用剪紙風格呈現臺北盆地的山景，展現城市與自然的和諧共生。燈組設計結合了士林地標「臺北表演藝術中心」的球體元素，上方懸掛的「貓空纜車」在軌道上滑行，更還原了「大湖公園錦帶橋」的拱橋美學，而左側轉動的「兒童新樂園彩色摩天輪」則是臺北童心未泯的指標。',
        img: 'images/items/ximen_A5.jpg'
    },
    'ximen_B1': {
        title: 'B1  馬上有錢',
        name: '松山慈惠堂設計團隊',
        type: '靜態展出',
        desc: '燈組以傳統燈籠工藝為創作核心，結合民俗吉祥寓意，傳遞新春納福、財運即來的祝福意象，造型以雙馬奔騰為主體，象徵財運迅速到位、「馬上」得財；聚財主體穩立其間，寓意財庫充盈、福氣匯聚。<br>整體運用溫暖光色與層次燈法，展現傳統燈藝的細緻線條與立體結構，在夜間營造祥瑞喜慶的節慶氛圍，透過熟悉的文化符號與燈光語言，讓民眾在燈節的城市場域中，感受祝福被看見、被點亮，也被溫暖地傳遞。',
        img: 'images/items/ximen_B1.jpg'
    },
    'ximen_B2': {
        title: 'B2  遠東百貨・馬躍新春',
        name: '遠東百貨台北燈節設計團隊',
        type: '旋轉馬達結構輔以燈飾工程',
        desc: '在春節家族團聚、共享幸福的美好時刻，遠東百貨以象徵奔放、進取與希望的「馬」為核心意象，<br>創作六隻祝福寓意的吉祥馬，為新春揭開喜慶序幕，一同奔向幸福、豐收與美好的願景：<br><br>「永續活力馬」綠色環保護地球，永續生活向前跑。<br>「福氣歡喜馬」好事連連笑開懷，福氣歡喜一起來。<br>「豐衣足食馬」吃得好、買得巧，生活樣樣都剛好。<br>「平安吉利馬」出入平安、萬事順利，心安好福氣。<br>「智慧領航馬」智慧數位向前行，創新科技領先贏。<br>「招財進寶馬」財運到、好運來，年年錢財滾滾來。<br><br>遠東百貨傳遞新春心意，陪伴大家迎接嶄新一年，攜手邁向「永續創造美好生活」的品牌願景，共享璀璨未來。',
        img: 'images/items/ximen_B2.jpg'
    },
    'ximen_B3': {
        title: 'B3  八駿揚蹄展鴻圖',
        name: '台北燈節設計團隊',
        type: '靜態展出',
        desc: '以奔騰向前的八駿馬為主視覺，象徵台新新光金控在穩健基礎上持續突破、開創新局。設計採對稱構圖，八匹駿馬環繞主體立柱揚蹄而出，展現團隊動能匯聚的力量感，而主體造型向上延伸，呼應台新新光金控長遠視野與持續成長的品牌精神。<br>燈組燈光以金紅色調為核心，透過點狀與流動光效交錯呈現，營造節慶喜氣與前進節奏，同時結合東方吉祥意涵傳達台新新光金控對民眾新春的祝福，也象徵台新新光金控將攜手民眾邁向嶄新、光明的未來。<br>台新新光金控以這份象徵希望與能量的作品，為民眾獻上滿滿的祝福，祈願大家在新的一年八方順遂、馬到成功！',
        img: 'images/items/ximen_B3.jpg'
    },
    'ximen_B4': {
        title: 'B4  台北主場・奔龍而上',
        name: '味全龍 DRAGONS',
        type: '靜態展出',
        desc: '以「台北主場•奔龍而上」為核心概念，將職棒精神轉化為具代表性的城市燈會地標。作品以棒球選手昂首進場的瞬間為主視覺，象徵每一位站上主場的選手及市民，都是為榮耀而拚的主角。透過溫潤內發光的花燈工法，呈現熱血與親和並存的形象，邀請市民一起上場。整體設計呼應台北燈會「全民參與、城市共感」的節慶清神，讓球迷、家庭與遊客都能在光影中感受城市主場的凝聚力，共同創造屬於你我的榮耀時刻。',
        img: 'images/items/ximen_B4_v2.jpg'
    },
    'ximen_B5': {
        title: 'B5  台北好水',
        name: '台北燈節設計團隊',
        type: '靜態展出',
        desc: '北水處為展現臺北城共融特色，且考量不同年齡層使用者需求，設計時尚木紋造型TAIPEI WATER直飲台，讓民眾看到就知道有乾淨的水可飲用，每個字體都有不同的飲水體驗，營造不僅好玩、好看，更具有安心、友善的飲水環境，一起為生活減塑。為方便民眾使用直飲台，民眾掃描臺北好水直飲地圖QRcode，透過智慧手機即可輕鬆搜尋鄰近直飲台，讓市民朋友能夠暢飲好水、減少購買瓶裝水，環保愛地球！',
        img: 'images/items/ximen_B5.jpg'
    },
    'ximen_B6': {
        title: 'B6  揮出夢想經典熊讚',
        name: '台北燈節設計團隊',
        type: '靜態展出',
        desc: '2026年即將再次迎來WBC世界棒球經典賽，由台北市吉祥物「熊讚」，身著中華隊球衣，手握球棒、英姿煥發，象徵全民一心為中華隊加油的熱情與凝聚力，打造結合運動激情與榮耀的特別款燈組，象徵追求勝利與榮耀的決心。整體設計融合了「燈節美學」與「體育精神」，讓民眾在台北燈節期間也能共同感受棒球經典賽的熱血與自豪，為中華隊加油！',
        img: 'images/items/ximen_B6.jpg'
    },
    'ximen_B7': {
        title: 'B7  今馬熊讚',
        name: '',
        type: '',
        desc: '臺北市吉祥物「熊讚」眼神閃耀的光芒，是馬年限定「一馬當先眼神」；為了和大家開心合照，熊讚也特地換上「今馬熊讚」喜氣新裝，祝賀大家滿滿正能量樂活當下、喜迎新年。',
        img: 'images/items/ximen_B7.jpg'
    },
    'ximen_B8': {
        title: 'B8  城隍燈海隧道',
        name: '臺灣省城隍廟設計團隊',
        type: '靜態展出',
        desc: '',
        img: 'images/items/ximen_B8.jpg'
    },
    'ximen_B9': {
        title: 'B9  燈映平安幸福橋',
        name: '臺灣省城隍廟設計團隊',
        type: '靜態展出',
        desc: '結合省城隍廟祈福意涵，打造象徵平安的燈橋。<br>民眾行走其上，如同跨越祝福之路，祈願來年平安順遂、福氣相伴、諸事圓滿。',
        img: 'images/items/ximen_B9.jpg'
    },
    'ximen_B10': {
        title: 'B10  響樂到中華',
        name: '',
        type: '',
        desc: '',
        img: 'images/items/ximen_B10.jpg'
    },
    'ximen_B11': {
        title: 'B11  城市光譜',
        name: '徐于倫、舒次華',
        type: '靜態展出',
        desc: '以「光是臺北的節奏」為核心理念，將多層次拱形光環化為象徵臺北城市能量的動態光譜通道，整體造型取材自臺北的都會天際線、捷運路網與繁華夜景，並以變色光流呈現城市24 小時的律動。每一圈光環代表臺北的不同城市符號包括淡水河與基隆河的城市水脈、大安森林、陽明山與城市中的綠帶、西門町、東區、信義商圈的潮流能量、臺北夜景的霓虹文化與藝文場景，燈光會沿著拱形向前流動變色，如同捷運穿梭城區、河道水光律動、夜景霓虹閃爍，形成獨一無二的「臺北光脈」視覺語彙，當民眾行走其中，能感受到臺北城市脈動的變化，象徵城市不斷前進的生命力，更是對臺北多元文化、城市節奏與夜間魅力的沉浸式詮釋。',
        img: 'images/items/ximen_B11.jpg'
    },
    'ximen_B12': {
        title: 'B12  城門之後',
        name: '鄧志權、吳宗益',
        type: '靜態展出+感應變化燈光',
        desc: '重現已被拆除的臺北府城西門 ——「寶成門」，於清朝完工，位處艋舺通往城內的交通要衝，原為分界與防禦之用的城門，如今轉化為開放與流動的象徵，呼應水運、商業與文化在此交會，又隨都市變遷而重組的過程。塑膠與竹的並置運用，對比全球化工業製品與在地自然材質，構築出一種跨時代、跨文化的空間語言，呈現傳統與當代、手工與工業、地方與全球的交會。我們所留下的，是對歷史的再想像，是對城市邊界的重新提問。當人們經過作品時，會使作品產生光譜色溫的變化，象徵民眾穿越時空，來到古城，又像是科幻片一般，讓空間產生不同層次的閱讀方式。',
        img: 'images/items/ximen_B12.jpg'
    },
    'ximen_B13': {
        title: 'B13  Queen 女力星願',
        name: '聯利媒體股份有限公司',
        type: '靜態展出',
        desc: '本裝置以「女性力量與時尚魅力」為核心概念，結合精品禮盒、粉色光球與柔和曲線造型，象徵每一位女性都是值得被珍視的主角。透過層次光效與夢幻色彩，營造如星空般的浪漫氛圍，傳達自信、溫柔與勇敢並存的女力精神，邀請民眾走入燈光之中，感受屬於「她」的高光時刻，展現城市對多元與美好的祝福。',
        img: 'images/items/ximen_B13.jpg'
    },
    'ximen_B14': {
        title: 'B14  食尚星光派對',
        name: '聯利媒體股份有限公司',
        type: '靜態展出',
        desc: '本裝置以「美食 × 音樂 × 星光舞台」為核心概念，結合星形燈構、吉他意象與可愛小馬，加上Q版表現的漢堡甜甜圈等美食視覺，象徵城市夜晚中最具魅力的食尚文化能量。透過明亮色彩與層次光效，打造如演唱會般的熱鬧氛圍，邀請民眾走入燈光舞台，感受味蕾與節奏交織的歡樂體驗，展現城市夜生活的活力與創意魅力。',
        img: 'images/items/ximen_B14.jpg'
    },
    'ximen_B15': {
        title: 'B15  歡盛豐年讚財神',
        name: '聯利媒體股份有限公司',
        type: '靜態展出',
        desc: '燈組以臺北市吉祥物「熊讚」為主角，穿戴華麗的財神冠服，雙手虔誠捧握象徵財富的巨型金元寶，寓意新的一年招財進寶、萬象更新。「讚財神」象徵著「真實力量與豐盛生活的連結」。底座點綴象徵富貴的牡丹與閃耀星辰，也希望將 TVBS 致力於多元媒體管道傳遞希望與正能量的核心概念表現出來。這不僅是一尊財神，更象徵著「精彩生活，由我綻放」的媒體初衷，祝福全台觀眾與市民，在 2026 年能如熊讚雙眼展現出的星光般，眼界開闊、財源廣進。',
        img: 'images/items/ximen_B15.jpg'
    },
    'ximen_B16': {
        title: 'B16  反界',
        name: 'hellobastworkshop',
        type: '靜態展出+感應互動',
        desc: '《反界》是一座融合鏡面結構與燈光語言的裝置藝術作品。整體造型為半開放式的橢圓形光之殼體，略呈拱形曲面，如同一個被橫向拉伸的圓柱體或膠囊狀的光影環室。外殼由多片鏡面不鏽鋼板組成，依流線型排列，圍繞中央核心，打造出極具包覆感、雕塑感與未來感的沉浸空間。從上方俯視，如同一座開放式的光之穹頂，充滿科技感與空間張力。<br>觀眾站在弧形內焦點位置，作品感應後將呈現不同光感變化；視覺上則呈現出萬花筒般的反射錯置效果，觀者的影像從不同角度同時浮現。作品邀請觀眾觀看世界的同時也回望自我，面對自身在數位與現實交錯之中的多重樣貌。',
        img: 'images/items/ximen_B16.jpg'
    },
    'ximen_B17': {
        title: 'B17  燈波',
        name: '林芷彤',
        type: '靜態展出+感應變化燈光',
        desc: '燈籠在臺北歷史場景中擁有鮮明而深厚的文化意涵。此創作取材自大稻埕的百年燈籠老店，以其歷經世代傳承的職人工藝與人文故事為靈感根基，突破對傳統紙燈籠的既定印象，透過材質與光的重新詮釋，探索傳統意象在當代語境中的延伸可能，讓歷史記憶在現代設計中持續發光。因此主體以玻璃透光材質構成，表現出虛實之間、懸浮不定的視覺語境。玻璃的透明與反射特性，使燈籠的輪廓在環境光中隨時間與視角變化，創造具動態性的觀看體驗。作品內部搭配七彩LED光源，透過程式控制，依照周遭環境音量切換燈光色彩與強度，呈現時間與文化記憶交錯的流動性。',
        img: 'images/items/ximen_B17.jpg'
    },
    'ximen_B18': {
        title: 'B18  Sounds',
        name: '莫珊嵐',
        type: '靜態展出',
        desc: '透過一系列街燈，喚起了台灣的聲音景觀。這些燈柱以不同高度散佈在空間中，運用色彩繽紛的擬聲字，形象地呈現外國作者眼中台北的城市聲音。每個詞彙都視覺化地代表了一次聲響爆發、一次城市喧囂或是一個日常生活的片刻，捕捉出台北日常生活中的能量與多樣聲音。<br>此作品模糊了圖像與聲音之間的界線，其靈感來自漫畫、漫畫書和圖像小說的視覺語言，邀請觀眾想像這些視覺爆炸背後所隱含的聲音。這是一種既富玩味又詩意的方式，讓一個地方的聲音身分鮮活地呈現出來。',
        img: 'images/items/ximen_B18.jpg'
    },
    'ximen_B19': {
        title: 'B19  J!NS小馬看視界',
        name: '睛姿臺北燈節設計團隊',
        type: '靜態展出',
        desc: '作品透過搖搖馬將童趣記憶轉化為一座能與城市對話的品牌燈組，設計靈感來自 JINS 對「視界」的重新定義——透過設計，讓人們重新看見生活中被忽略的美好細節，在熱鬧的台北燈節中形成一處輕鬆停留的風景。<br>燈光設計是本作品的靈魂，底部配置左右來回的流動燈效，創造出搖搖馬前後擺動的視覺感，使靜態裝置產生節奏感與生命力，希望透過光的律動，讓民眾在行走之間感受視覺被放大的瞬間，重新連結生活與感受。',
        img: 'images/items/ximen_B19.jpg'
    },
    'ximen_B20': {
        title: 'B20  台北晝夜',
        name: '成如潔',
        type: '靜態展出',
        desc: '作品以日與月交融的雙圓造型為主軸，象徵台北 24 小時不停歇的城市能量，透過剪紙似的堆疊所形成的層次光影，呈現台北多元文化、歷史底蘊與生活風景。<br>正面以「白日台北」為主題，收錄中正紀念堂、國父紀念館、北門、總統府、紅樓、故宮等具代表性的地標建築象徵台北從傳統走向現代的歷史軌跡，也展現城市在陽光下清晰而自信的樣貌。<br>背面則轉換為「夜幕台北」，以貓空、陽明山海芋、杜鵑花等自然素材搭配小籠包、珍珠奶茶等人氣美食，體現台北夜生活的豐富與溫度。<br>《台北晝夜》是一幅以時間為筆，描繪台北獨特生命力的光影畫卷，呈現這座城市無論白晝或夜晚都同樣耀眼動人。',
        img: 'images/items/ximen_B20.jpg'
    },
    'ximen_B21': {
        title: 'B21  奔向永續 生森不息',
        name: '富邦臺北燈節設計團隊',
        type: '民眾踏上跑道前行，腳下光能隨步伐光源由底部向上流動，逐一喚醒樹冠光瓣，最終點亮燈籠並產生柔和變色效果',
        desc: '以象徵成長與守護的光之樹為核心，作品以木材質結構呈現，樹冠由24片光瓣構成，代表一天24小時不間斷的守護與循環，呼應富邦金控及台灣大哥大對永續發展的長期承諾。<br>燈組結合跑步互動設計，當民眾踏上跑道前行，腳下光能隨步伐由底部向上流動，逐一喚醒樹冠光瓣，最終點亮燈籠並產生柔和變色效果，象徵行動帶動改變、能量持續傳遞。<br>作品透過時間、光與人的參與，形塑「全時運轉的永續未來」，展現富邦集團與城市共生、與環境共好的品牌願景。',
        img: 'images/items/ximen_B21.jpg'
    },
    'ximen_B22': {
        title: 'B22  天后．祈福光橋',
        name: '于容創意有限公司',
        type: '靜態展出',
        desc: '傳統文化信仰，創新設計製作，用台北天后宮媽祖信仰為核心意象，結合傳統「平<br>安橋」與「鑽轎底」祈福文化，轉化為一座可行走、可體驗的祈福燈組。民眾循<br>階而上，穿越橋體與轎底空間，象徵跨越關卡、消災解厄，在行進之間完成一場<br>向天后祈願的儀式旅程。整體燈光設計結合動態感應與色彩變化，隨著步伐流動、<br>明暗轉換，彷彿媽祖庇佑之光一路相隨，傳遞安定與祝福的力量。透過傳統信仰<br>與現代燈光藝術的融合，邀請民眾在光影之中祈願2026 年一路長紅、平安順遂，<br>讓祝福在城市夜色中持續流轉。',
        img: 'images/items/ximen_B22_v2.jpg'
    },
    'ximen_B23': {
        title: 'B23  金福氣',
        name: '台北燈節設計團隊',
        type: '靜態展出',
        desc: '以「福運自台北而生、向城市四方擴散」為設計理念，透過象徵迎賓門的東方結構與燈節的光影語彙，打造一座屬於台北的祝福之門，主體以傳統色框架象徵富足與繁榮，紅色燈籠則象徵節慶喜氣，兩者共同構築出台北在節慶氛圍中最具代表性的城市溫度。<br>作品設計屋簷採用層層向外延伸的造型，如同台北城市脈動：艋舺廟埕的屋脊、城門的形象皆隱含其中，象徵歷史與現代交會的城市輪廓，中央圓形主燈結合吉祥語和視覺設計，象徵城市核心精神的聚光點，將來自各地的福氣凝聚在此，再透過四方燈箱像光芒般向城市散播。願市民步入燈光之中時，感受幸福環繞、好運盈門。此外，開展期間作品周邊設有祈福卡活動，民眾寫下心願、掛上燈籠祈福牆，留下專屬心願。',
        img: 'images/items/ximen_B23.jpg'
    },
    'ximen_B24': {
        title: 'B24  沅夜星語',
        name: '沅陵設計團隊',
        type: '靜態展出',
        desc: '以沅陵街-「鞋街」為靈感，將夜晚的街道轉化為一座承載夢想與想像的星空舞台。商圈吉祥物小沅寶（鸚鵡）如灰姑娘般，乘坐象徵希望與奇幻的南瓜車，穿梭於星光與雲層之間，展開一段屬於夜晚的童話旅程；與夢幻神馬佇立雲端，代表陪伴、守護與溫柔的情感連結。透過星空與層疊雲朵的視覺元素，營造靜謐而浪漫的夜間氛圍，讓熟悉的沅陵街在夜色中化為低聲呢喃故事的場域，邀請每一位走入街區的人，傾聽屬於夜晚的星語。',
        img: 'images/items/ximen_B24.jpg'
    },
    'ximen_B25': {
        title: 'B25  金彩萬華 (萬華車站)',
        name: '台北燈節設計團隊',
        type: '靜態展出',
        desc: '以萬華在地文化為核心，將區域內的代表性地標與人文特色化為一盞盞象徵祝福的燈籠。運用金紅色系呈現喜慶與富足，寓意萬華長久以來蓬勃、多元又充滿生命力的街區精神。燈組中央以大幅燈籠群構成文化地圖，讓燈組不僅是一件視覺裝置，更像是一扇回望土地故事的窗口，喚起居民與遊客對艋舺文化的情感連結，讓萬華的街巷、人情、信仰與歷史再度亮起，用光彩說出屬於這個城市的深厚底蘊。',
        img: 'images/items/ximen_B25.jpg'
    },
    'ximen_B26': {
        title: 'B26  光行小馬 (剝皮寮)',
        name: '',
        type: '',
        desc: '',
        img: 'images/items/ximen_B26.jpg'
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
        title: 'A2  蜂芒畢露・無限之鏡｜大黃蜂',
        name: '變形金剛設計團隊',
        type: '靜態展出',
        desc: '本燈組以大黃蜂靈活敏捷的形象為設計核心，背景結合「無限鏡Infinity Mirror）」光學技術，透過多層次反射，營造出彷彿無限延伸的光影空間。平面燈座轉化為深邃的視覺隧道，象徵速度、穿梭與無限可能。',
        img: '../images/items/expo_A2.jpg'
    },
    'expo_A3': {
        title: 'A3  霸氣破界｜密卡登時空傳送門',
        name: '變形金剛設計團隊',
        type: '靜態展出',
        desc: '本燈組以狂派首領密卡登穿越時空的瞬間為主題，圓形傳送門結合藍色光效，營造強烈的未來科技氛圍。中央卡布燈箱精準捕捉能量聚集與空間撕裂的畫面，塑造電影級的臨場張力。密卡登攜帶加農 炮 踏出傳送門，展現震懾人心的氣勢，使整座燈組成為充滿力量與戲劇張力的視覺焦點。',
        img: '../images/items/expo_A3.jpg'
    },
    'expo_A4': {
        title: 'A4  兩派雙雄對決・街機巨人｜柯博文 vs 密卡登',
        name: '變形金剛設計團隊',
        type: '靜態展出',
        desc: '此燈組以經典對戰為主題，將博派與狂派的 衝突轉化為大型街機造型燈飾。設計捨棄數位螢幕，改以多層次動態燈箱、 LED 跑馬燈與序列控制技術，重現 8-bit 電玩風格的視覺暫留效果。展現燈節結合創意、科技與玩心的多元樣貌。',
        img: '../images/items/expo_A4.jpg'
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

};
    

/* --- 2. 再定義功能函式 (放在資料下面) --- */
function openMapModal(id) {
    console.log("1. 正在開啟 ID:", id); // 確認點擊 ID
    
    const data = mapData[id];
    
    if (!data) {
        console.error("2. 錯誤！找不到這個 ID 的資料，請檢查 mapData 的設定");
        return;
    }

    console.log("2. 成功抓到資料:", data); // 確認資料內容

    // --- 填充標題 ---
    const titleEl = document.getElementById('modalTitle');
    if (titleEl) titleEl.innerText = data.title;


    // --- 填充作者名 (檢查點) ---
    const nameEl = document.getElementById('modalName');
    if (nameEl) {
        // 如果資料裡沒有 name，就顯示空字串
        nameEl.innerText = data.name || ""; 
    } else {
        console.error("3. 錯誤！找不到 id='modalName' 的 HTML 元素");
    }

    // --- 填充展演方式 (檢查點) ---
    const typeEl = document.getElementById('modalType');
    if (typeEl) {
        // 如果資料裡沒有 type，就顯示空字串
        typeEl.innerText = data.type || ""; 
    } else {
        console.error("3. 錯誤！找不到 id='modalType' 的 HTML 元素");
    }

    // 【註】：已經將填充 size 的段落刪除

    // --- 填充描述 (檢查點) ---
    const descEl = document.getElementById('modalDesc');
    if (descEl) {
        // 如果資料裡沒有 desc，就顯示空字串
        descEl.innerHTML = data.desc || ""; 
    } else {
        console.error("3. 錯誤！找不到 id='modalDesc' 的 HTML 元素");
    }

    // --- 填充圖片 (檢查點) ---
    const imgEl = document.getElementById('modalImg');
    if (imgEl) {
        if (data.img) {
            imgEl.src = data.img;
            imgEl.style.display = 'block';
        } else {
            console.warn("注意：這筆資料沒有 img 屬性，或者是圖片路徑為空");
            imgEl.style.display = 'none';
        }
    } else {
        console.error("3. 錯誤！找不到 id='modalImg' 的 HTML 元素");
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







