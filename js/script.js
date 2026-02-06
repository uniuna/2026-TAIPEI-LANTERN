
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
        title: 'A1  MOLLY的夢幻飛行',
        name: '',
        type: '',
        size: '',
        desc: '本座主燈採用「巨型音樂盒」的機械結構設計，讓 Molly 與上方的 LED 新年光環 成為動態核心。這象徵著在 2026 年，Molly 化身為全方位的守護天使，透過 360 度的緩慢迴旋，將目光與祝福投射到西門町的每一個角落。<br><br>「Molly 的夢幻飛行」 不僅是一座主燈，更是一個巨型的打卡地標。在 2026 年，讓我們騎上旋轉木馬，在光影交錯的西門町，找回那份最純粹的快樂與勇氣，華麗旋轉，奔向新的一年。',
        img: 'images/items/ximen_A1.jpg'
    },
    'ximen_A2': {
        title: 'A2  星塵降臨：『Twinkle Twinkle 奇遇』',
        name: '',
        type: '',
        size: '',
        desc: '在位於西門站 6 號出口安排這位來自 POP MART 的可愛訪客，身著青花瓷戰袍，化身為「西門守護星」。他蹲踞在捷運出口頂端，以 6 米高的巨大身影，為每一位踏出捷運站的民眾，送上第一份燈節的驚喜與祝福。<br><br>這是一場關於「遇見」的設計。 「Twinkle Twinkle 奇遇」 燈組，利用西門町不可忽視的高度優勢，將傳統文化的雅緻與潮流玩具的童趣結合，成為最稱職的迎賓大使，讓燈節的感動，從出站的那一刻就開始蔓延。',
        img: 'images/items/ximen_A2.jpg'
    },
    'ximen_A3': {
        title: 'A3  Labubu 雲端粉紅星光',
        name: '',
        type: '',
        size: '',
        desc: '我們將場景設定在雲端之上，巨大的粉紅溜滑梯是視覺的主軸，流暢的曲線從雲端延伸而下。「溜」諧音「六」，象徵著 2026 年運勢「六六大順」、「順順利利」。 邀請大家一起從舊的一年「滑」進充滿希望的新年。<br><br>Labubu 雲端粉紅星光 是一座關於快樂的發射台。 在這個角落，沒有煩惱，我們希望透過這個燈組祝福台北：2026 年，願大家都能像騎著搖搖馬的 Labubu 一樣，在星光與雲朵之間，順利、開心地滑向未來！',
        img: 'images/items/ximen_A3.jpg'
    },
    'ximen_A4': {
        title: 'A4 『Hirono 的微觀靜域』',
        name: '',
        type: '',
        size: '',
        desc: '在五光十色的西門町與熱鬧的燈會中，這組燈飾代表的是城市裡每一個渴望安靜的靈魂。 Hirono 總是用他獨有的憂鬱眼神治癒人心。這座燈組被設計為燈會中的「情緒避風港」，邀請觀眾在狂歡的節慶中停下腳步，與內心的自己進行一場安靜的對話。<br><br>Hirono 站立在一個巨大的圓形框架前，這是園林中的「月洞門」，也象徵著圓滿。背後一道金色的流雲，象徵著時間的流動與東方氣韻。兩側點綴著綠色的仿真竹林與發著暖黃光的球形燈籠，竹子代表韌性，暖光則營造出如家一般的溫馨感。',
        img: 'images/items/ximen_A4.jpg'
    },
    'ximen_A5': {
        title: 'A5 『台北雙面畫卷』：夢境與時空的對視',
        name: '',
        type: '',
        size: '',
        desc: '閱讀台北的兩種方式<br>台北是一座擁有多重面貌的城市，既有雲霧繚繞的山城秘境，也有前衛科幻的現代建築。 我們設計了一座巨大的「展開卷軸」作為舞台，象徵著正在書寫的城市故事。透過「雙面觀賞」，翻閱了台北的日與夜、自然與人文，看見截然不同的城市風景。<br><br>（正面）自然與童心<br>Dimoo 以經典的湖水綠/自然系造型登場， 畫面右側那座優雅的半圓形拱橋，正是曾登上國際版面的「大湖公園錦帶橋」，特殊的圓拱造型與水面形成完美的虛實圓形，象徵著圓滿與和諧，左側轉動的彩色摩天輪，不僅是台北夜景的指標，更象徵著童心與浪漫的旋轉，背景運用剪紙風格的綠色山景，代表台北四面環山的盆地地形。<br><br>（背面）前衛與藝術<br>Skullpanda 以一種探索者的姿態出現， 上方懸掛的纜車車廂，在流線型的軌道上滑行，象徵著在高空俯瞰城市的流動視角，左側獨特的球體建築元素，致敬士林地標「臺北表演藝術中心」，突顯台北作為設計之都的建築美學，雲朵採用更具風格化的紅/金色調，營造出如夢似幻的城市霓虹氛圍。<br><br>「台北雙面畫卷」 是一場關於平行時空的對話。 Dimoo 帶你看見山林間的微風，Skullpanda 帶你領略城市裡的霓虹。這座燈組告訴我們：無論你喜歡哪一種頻率，都能在台北這座城市裡，找到屬於自己的共鳴。',
        img: 'images/items/ximen_A5.jpg'
    },
    'ximen_B1': {
        title: 'B1  馬上有錢',
        name: '松山慈惠堂設計團隊',
        type: '靜態展出',
        size: '500x400cm',
        desc: '燈組以傳統燈籠工藝為創作核心，結合民俗吉祥寓意，傳遞新春納福、財運即來的祝福意象，造型以雙馬奔騰為主體，象徵財運迅速到位、「馬上」得財；聚財主體穩立其間，寓意財庫充盈、福氣匯聚。<br>整體運用溫暖光色與層次燈法，展現傳統燈藝的細緻線條與立體結構，在夜間營造祥瑞喜慶的節慶氛圍，透過熟悉的文化符號與燈光語言，讓民眾在燈節的城市場域中，感受祝福被看見、被點亮，也被溫暖地傳遞。',
        img: 'images/items/ximen_B1.jpg'
    },
    'ximen_B2': {
        title: 'B2  遠東百貨・馬躍新春',
        name: '遠東百貨台北燈節設計團隊',
        type: '旋轉馬達結構輔以燈飾工程',
        size: '500*350cm',
        desc: '在春節家族團聚、共享幸福的美好時刻，遠東百貨以象徵奔放、進取與希望的「馬」為核心意象，<br>創作六隻祝福寓意的吉祥馬，為新春揭開喜慶序幕，一同奔向幸福、豐收與美好的願景：<br>「永續活力馬」綠色環保護地球，永續生活向前跑。<br>「福氣歡喜馬」好事連連笑開懷，福氣歡喜一起來。<br>「豐衣足食馬」吃得好、買得巧，生活樣樣都剛好。<br>「平安吉利馬」出入平安、萬事順利，心安好福氣。<br>「智慧領航馬」智慧數位向前行，創新科技領先贏。<br>「招財進寶馬」財運到、好運來，年年錢財滾滾來。<br>遠東百貨傳遞新春心意，陪伴大家迎接嶄新一年，<br>攜手邁向「永續創造美好生活」的品牌願景，共享璀璨未來。',
        img: 'images/items/ximen_B2.jpg'
    },
    'ximen_B3': {
        title: 'B3  八駿揚蹄展鴻圖',
        name: '台北燈節設計團隊',
        type: '靜態展出',
        size: '300*300*350cm',
        desc: '以奔騰向前的八駿馬為主視覺<br>象徵台新新光金融控股股份有限公司在穩健基礎上持續突破、開創新局，設計採對稱構圖，八匹駿馬環繞主體立柱揚蹄而出，展現團隊齊心、動能匯聚的力量感，而主體造型向上延伸，呼應企業長遠視野與持續成長的品牌精神。<br>燈組燈光以金紅色調為核心，透過點狀與流動光效<br>交錯呈現，營造節慶喜氣與前進節奏，並結合東方<br>吉祥意涵與現代金融形象•傳達新春祝福，也象徵企業攜手社會邁向更寬廣的未來藍圖。',
        img: 'images/items/ximen_B3.jpg'
    },
    'ximen_B4': {
        title: 'B4  台北主場・奔龍而上',
        name: '頂新臺北燈節設計團隊',
        type: '靜態展出',
        size: '300*323cm',
        desc: '以「台北主場・奔龍而上」為核心概念，將職棒精神轉化為具代表性的城市燈會地標。作品以棒球選手昂首進場的瞬間為主視覺，象徵每一位站上主場的選手及市民，都是為榮耀而拚的主角。透過溫潤內發光的花燈工法，呈現熱血與親和並存的形象，邀請市民一起上場。<br>•整體設計呼應台北燈會「全民參與、城市共感」的節慶精神，讓球迷、家庭與遊客都能在光影中感受城市主場的凝聚力，共同創造屬於你我的榮耀時刻。',
        img: 'images/items/ximen_B4.jpg'
    },
    'ximen_B5': {
        title: 'B5  台北好水',
        name: '',
        type: '',
        size: '',
        desc: '',
        img: 'images/items/ximen_B5.jpg'
    },
    'ximen_B6': {
        title: 'B6  揮出夢想經典熊讚',
        name: '台北燈節設計團隊',
        type: '靜態展出',
        size: '320X255cm',
        desc: '2026年即將再次迎來WBC世界棒球經典賽，由台北市吉祥物「熊讚」，身著中華隊球衣，手握球棒、英姿煥發，象徵全民一心為中華隊加油的熱情與凝聚力，打造結合運動激情與榮耀的特別款燈組，象徵追求勝利與榮耀的決心。整體設計融合了「燈節美學」與「體育精神」，讓民眾在台北燈節期間也能共同感受棒球經典賽的熱血與自豪，為中華隊加油！',
        img: 'images/items/ximen_B6.jpg'
    },
    'ximen_B7': {
        title: 'B7  今馬熊讚',
        name: '',
        type: '',
        size: '',
        desc: '臺北市吉祥物「熊讚」眼神閃耀的光芒，是馬年限定「一馬當先眼神」；為了和大家開心合照，熊讚也特地換上「今馬熊讚」喜氣新裝，祝賀大家滿滿正能量樂活當下、喜迎新年。',
        img: 'images/items/ximen_B7.jpg'
    },
    'ximen_B8': {
        title: 'B8  城隍燈海隧道',
        name: '臺灣省城隍廟設計團隊',
        type: '靜態展出',
        size: '',
        desc: '',
        img: 'images/items/ximen_B8.jpg'
    },
    'ximen_B9': {
        title: 'B9  燈映平安幸福橋',
        name: '臺灣省城隍廟設計團隊',
        type: '靜態展出',
        size: '高300cm/寬200cm',
        desc: '結合省城隍廟祈福意涵，打造象徵平安的燈橋。<br>民眾行走其上，如同跨越祝福之路，祈願來年平安順遂、福氣相伴、諸事圓滿。',
        img: 'images/items/ximen_B9.jpg'
    },
    'ximen_B10': {
        title: 'B10  響樂到中華',
        name: '',
        type: '',
        size: '',
        desc: '',
        img: 'images/items/ximen_B10.jpg'
    },
    'ximen_B11': {
        title: 'B11  城市光譜',
        name: '徐于倫、舒次華',
        type: '靜態展出',
        size: '770X330cm、480X330cm',
        desc: '以「光是臺北的節奏」為核心理念，將多層次拱形光環化為象徵臺北城市能量的動態光譜通道，整體造型取材自臺北的都會天際線、捷運路網與繁華夜景，並以變色光流呈現城市24 小時的律動。每一圈光環代表臺北的不同城市符號包括淡水河與基隆河的城市水脈、大安森林、陽明山與城市中的綠帶、西門町、東區、信義商圈的潮流能量、臺北夜景的霓虹文化與藝文場景，燈光會沿著拱形向前流動變色，如同捷運穿梭城區、河道水光律動、夜景霓虹閃爍，形成獨一無二的「臺北光脈」視覺語彙，當民眾行走其中，能感受到臺北城市脈動的變化，象徵城市不斷前進的生命力，更是對臺北多元文化、城市節奏與夜間魅力的沉浸式詮釋。',
        img: 'images/items/ximen_B11.jpg'
    },
    'ximen_B12': {
        title: 'B12  城門之後',
        name: '鄧志權、吳宗益',
        type: '靜態展出+感應變化燈光',
        size: '300X300X300cm',
        desc: '重現已被拆除的臺北府城西門 ——「寶成門」，於清朝完工，位處艋舺通往城內的交通要衝，原為分界與防禦之用的城門，如今轉化為開放與流動的象徵，呼應水運、商業與文化在此交會，又隨都市變遷而重組的過程。塑膠與竹的並置運用，對比全球化工業製品與在地自然材質，構築出一種跨時代、跨文化的空間語言，呈現傳統與當代、手工與工業、地方與全球的交會。我們所留下的，是對歷史的再想像，是對城市邊界的重新提問。當人們經過作品時，會使作品產生光譜色溫的變化，象徵民眾穿越時空，來到古城，又像是科幻片一般，讓空間產生不同層次的閱讀方式。',
        img: 'images/items/ximen_B12.jpg'
    },
    'ximen_B13': {
        title: 'B13  Queen 女力星願',
        name: '聯利媒體股份有限公司',
        type: '靜態展出',
        size: '300*200cm',
        desc: '本裝置以「女性力量與時尚魅力」為核心概念，結合精品禮盒、粉色光球與柔和曲線造型，象徵每一位女性都是值得被珍視的主角。透過層次光效與夢幻色彩，營造如星空般的浪漫氛圍，傳達自信、溫柔與勇敢並存的女力精神，邀請民眾走入燈光之中，感受屬於「她」的高光時刻，展現城市對多元與美好的祝福。',
        img: 'images/items/ximen_B13.jpg'
    },
    'ximen_B14': {
        title: 'B14  食尚星光派對',
        name: '聯利媒體股份有限公司',
        type: '靜態展出',
        size: '300*200cm',
        desc: '本裝置以「美食 × 音樂 × 星光舞台」為核心概念，結合星形燈構、吉他意象與可愛小馬，加上Q版表現的漢堡甜甜圈等美食視覺，象徵城市夜晚中最具魅力的食尚文化能量。透過明亮色彩與層次光效，打造如演唱會般的熱鬧氛圍，邀請民眾走入燈光舞台，感受味蕾與節奏交織的歡樂體驗，展現城市夜生活的活力與創意魅力。',
        img: 'images/items/ximen_B14.jpg'
    },
    'ximen_B15': {
        title: 'B15  歡盛豐年讚財神',
        name: '聯利媒體股份有限公司',
        type: '靜態展出',
        size: '180*120*200cm',
        desc: '燈組以臺北市吉祥物「熊讚」為主角，穿戴華麗的財神冠服，雙手虔誠捧握象徵財富的巨型金元寶，寓意新的一年招財進寶、萬象更新。「讚財神」象徵著「真實力量與豐盛生活的連結」。底座點綴象徵富貴的牡丹與閃耀星辰，也希望將 TVBS 致力於多元媒體管道傳遞希望與正能量的核心概念表現出來。這不僅是一尊財神，更象徵著「精彩生活，由我綻放」的媒體初衷，祝福全台觀眾與市民，在 2026 年能如熊讚雙眼展現出的星光般，眼界開闊、財源廣進。',
        img: 'images/items/ximen_B15.jpg'
    },
    'ximen_B16': {
        title: 'B16  反界',
        name: 'hello bast workshop',
        type: '靜態展出+感應互動',
        size: '900X500X290cm',
        desc: '《反界》是一座融合鏡面結構與燈光語言的裝置藝術作品。整體造型為半開放式的橢圓形光之殼體，略呈拱形曲面，如同一個被橫向拉伸的圓柱體或膠囊狀的光影環室。外殼由多片鏡面不鏽鋼板組成，依流線型排列，圍繞中央核心，打造出極具包覆感、雕塑感與未來感的沉浸空間。從上方俯視，如同一座開放式的光之穹頂，充滿科技感與空間張力。<br>觀眾站在弧形內焦點位置，作品感應後將呈現不同光感變化；視覺上則呈現出萬花筒般的反射錯置效果，觀者的影像從不同角度同時浮現。作品邀請觀眾觀看世界的同時也回望自我，面對自身在數位與現實交錯之中的多重樣貌。',
        img: 'images/items/ximen_B16.jpg'
    },
    'ximen_B17': {
        title: 'B17  燈波',
        name: '林芷彤',
        type: '靜態展出+感應變化燈光',
        size: '300X300X130cm',
        desc: '燈籠在臺北歷史場景中擁有鮮明而深厚的文化意涵。此創作取材自大稻埕的百年燈籠老店，以其歷經世代傳承的職人工藝與人文故事為靈感根基，突破對傳統紙燈籠的既定印象，透過材質與光的重新詮釋，探索傳統意象在當代語境中的延伸可能，讓歷史記憶在現代設計中持續發光。因此主體以玻璃透光材質構成，表現出虛實之間、懸浮不定的視覺語境。玻璃的透明與反射特性，使燈籠的輪廓在環境光中隨時間與視角變化，創造具動態性的觀看體驗。作品內部搭配七彩LED光源，透過程式控制，依照周遭環境音量切換燈光色彩與強度，呈現時間與文化記憶交錯的流動性。',
        img: 'images/items/ximen_B17.jpg'
    },
    'ximen_B18': {
        title: 'B18  Sounds',
        name: '莫珊嵐',
        type: '靜態展出',
        size: '50X50X150-300(cm)',
        desc: '透過一系列街燈，喚起了台灣的聲音景觀。這些燈柱以不同高度散佈在空間中，運用色彩繽紛的擬聲字，形象地呈現外國作者眼中台北的城市聲音。每個詞彙都視覺化地代表了一次聲響爆發、一次城市喧囂或是一個日常生活的片刻，捕捉出台北日常生活中的能量與多樣聲音。<br>此作品模糊了圖像與聲音之間的界線，其靈感來自漫畫、漫畫書和圖像小說的視覺語言，邀請觀眾想像這些視覺爆炸背後所隱含的聲音。這是一種既富玩味又詩意的方式，讓一個地方的聲音身分鮮活地呈現出來。',
        img: 'images/items/ximen_B18.jpg'
    },
    'ximen_B19': {
        title: 'B19  J!NS小馬看視界',
        name: '睛姿臺北燈節設計團隊',
        type: '靜態展出',
        size: '300*323cm',
        desc: '作品透過搖搖馬將童趣記憶轉化為一座能與城市對話的品牌燈組，設計靈感來自 JINS 對「視界」的重新定義——透過設計，讓人們重新看見生活中被忽略的美好細節，在熱鬧的台北燈節中形成一處輕鬆停留的風景。<br>燈光設計是本作品的靈魂，底部配置左右來回的流動燈效，創造出搖搖馬前後擺動的視覺感，使靜態裝置產生節奏感與生命力，希望透過光的律動，讓民眾在行走之間感受視覺被放大的瞬間，重新連結生活與感受。',
        img: 'images/items/ximen_B19.jpg'
    },
    'ximen_B20': {
        title: 'B20  台北晝夜',
        name: '成如潔',
        type: '靜態展出',
        size: '250X250X300(cm)',
        desc: '作品以日與月交融的雙圓造型為主軸，象徵台北 24 小時不停歇的城市能量，透過剪紙似的堆疊所形成的層次光影，呈現台北多元文化、歷史底蘊與生活風景。<br>正面以「白日台北」為主題，收錄中正紀念堂、國父紀念館、北門、總統府、紅樓、故宮等具代表性的地標建築象徵台北從傳統走向現代的歷史軌跡，也展現城市在陽光下清晰而自信的樣貌。<br>背面則轉換為「夜幕台北」，以貓空、陽明山海芋、杜鵑花等自然素材搭配小籠包、珍珠奶茶等人氣美食，體現台北夜生活的豐富與溫度。<br>《台北晝夜》是一幅以時間為筆，描繪台北獨特生命力的光影畫卷，呈現這座城市無論白晝或夜晚都同樣耀眼動人。',
        img: 'images/items/ximen_B20.jpg'
    },
    'ximen_B21': {
        title: 'B21  奔向永續 生森不息',
        name: '富邦臺北燈節設計團隊',
        type: '民眾踏上跑道前行，腳下光能隨步伐光源由底部向上流動，逐一喚醒樹冠光瓣，最終點亮燈籠並產生柔和變色效果',
        size: '625X403X395CM',
        desc: '以象徵成長與守護的光之樹為核心，作品以木材質結構呈現，樹冠由24片光瓣構成，代表一天24小時不間斷的守護與循環，呼應富邦金控及台灣大哥大對永續發展的長期承諾。<br>燈組結合跑步互動設計，當民眾踏上跑道前行，腳下光能隨步伐由底部向上流動，逐一喚醒樹冠光瓣，最終點亮燈籠並產生柔和變色效果，象徵行動帶動改變、能量持續傳遞。<br>作品透過時間、光與人的參與，形塑「全時運轉的永續未來」，展現富邦集團與城市共生、與環境共好的品牌願景。',
        img: 'images/items/ximen_B21.jpg'
    },
    'ximen_B22': {
        title: 'B22  天后．祈福光橋',
        name: '于容創意有限公司',
        type: '靜態展出',
        size: '500X400cm',
        desc: '傳統文化信仰，創新設計製作，用台北天后宮媽祖信仰為核心意象，結合傳統「平<br>安橋」與「鑽轎底」祈福文化，轉化為一座可行走、可體驗的祈福燈組。民眾循<br>階而上，穿越橋體與轎底空間，象徵跨越關卡、消災解厄，在行進之間完成一場<br>向天后祈願的儀式旅程。整體燈光設計結合動態感應與色彩變化，隨著步伐流動、<br>明暗轉換，彷彿媽祖庇佑之光一路相隨，傳遞安定與祝福的力量。透過傳統信仰<br>與現代燈光藝術的融合，邀請民眾在光影之中祈願2026 年一路長紅、平安順遂，<br>讓祝福在城市夜色中持續流轉。',
        img: 'images/items/ximen_B22.jpg'
    },
    'ximen_B23': {
        title: 'B23  金福氣',
        name: '台北燈節設計團隊',
        type: '靜態展出',
        size: '500X385cm',
        desc: '以「福運自台北而生、向城市四方擴散」為設計理念，透過象徵迎賓門的東方結構與燈節的光影語彙，打造一座屬於台北的祝福之門，主體以傳統色框架象徵富足與繁榮，紅色燈籠則象徵節慶喜氣，兩者共同構築出台北在節慶氛圍中最具代表性的城市溫度。<br>作品設計屋簷採用層層向外延伸的造型，如同台北城市脈動：艋舺廟埕的屋脊、城門的形象皆隱含其中，象徵歷史與現代交會的城市輪廓，中央圓形主燈結合吉祥語和視覺設計，象徵城市核心精神的聚光點，將來自各地的福氣凝聚在此，再透過四方燈箱像光芒般向城市散播。願市民步入燈光之中時，感受幸福環繞、好運盈門。',
        img: 'images/items/ximen_B23.jpg'
    },
    'ximen_B24': {
        title: 'B24  沅夜星語',
        name: '',
        type: '',
        size: '',
        desc: '',
        img: 'images/items/ximen_B24.jpg'
    },
    'ximen_B25': {
        title: 'B25  金彩萬華 (萬華車站)',
        name: '台北燈節設計團隊',
        type: '靜態展出',
        size: '420X180X250cm',
        desc: '以萬華在地文化為核心，將區域內的代表性地標與人文特色化為一盞盞象徵祝福的燈籠。運用金紅色系呈現喜慶與富足，寓意萬華長久以來蓬勃、多元又充滿生命力的街區精神。燈組中央以大幅燈籠群構成文化地圖，讓燈組不僅是一件視覺裝置，更像是一扇回望土地故事的窗口，喚起居民與遊客對艋舺文化的情感連結，讓萬華的街巷、人情、信仰與歷史再度亮起，用光彩說出屬於這個城市的深厚底蘊。',
        img: 'images/items/ximen_B25.jpg'
    },
    'ximen_B26': {
        title: 'B26  光行小馬 (剝皮寮)',
        name: '',
        type: '',
        size: '',
        desc: '',
        img: 'images/items/ximen_B26.jpg'
    },

    // --- 花博展區的資料 ------------ //
    'expo_A1': {
        title: 'A1  變形金剛-柯博文',
        name: '',
        type: '',
        size: '',
        desc: '2026 台北燈節迎來史無前例的重磅跨界！<br>這是台北燈節首度與國際頂級 IP《變形金剛》(TRANSFORMERS)正式聯名，我們試圖打破傳統元宵節慶的既定框架，“將科幻美學植入東方節慶，展現台北市作為國際都會「兼容並蓄、勇於創新」的城市氣度。<br><br>本次主燈由博派金剛領袖——「柯博文」（Optimus Prime）擔綱主角。他巍峨聳立的身影，象徵正義與勇气的力量，透過其充滿未來感的機械結構與光影科技，完美呼應台北市作為國際先進都市的科技底蘊。當柯博文出现在台北街頭，象徵著這座城市如變形金剛般，擁有不斷進化、追求卓越的動能。讓我們在璀璨燈火中，一同見證台北與博派領袖共譜的科技光輝篇章。',
        img: '../images/items/expo_A1.jpg'
    },
    'expo_A2': {
        title: 'A2  變形金剛-大黃蜂',
        name: '',
        type: '',
        size: '',
        desc: '如果柯博文象徵著城市的宏觀高度，那麼大黃蜂（Bumblebee）則代表了這座城市穿梭的敏捷與活力。<br><br>本燈組最大的設計亮點，在於背景運用了「無限鏡（Infinity Mirror）」的光學技術。透過多層次的光束反射，在平面的燈座上創造出深邃、彷彿無止盡的視覺隧道。這不僅象徵了博派金剛空間穿越的快速飛馳感，更象徵著台北市作為一座先進都市，擁有深不可測的潛力與「無限可能」的未來視野。<br>大黃蜂彷彿從無限延伸的數位光廊中破框而出，以活潑敏捷的動態跳躍姿勢，向參加燈節的觀衆互動問好，展現熱情友善的個性。',
        img: '../images/items/expo_A2.jpg'
    },
    'expo_A3': {
        title: 'A3  變形金剛-密卡登',
        name: '',
        type: '',
        size: '',
        desc: '警報響起！博派金剛的宿敵已鎖定台北！ 這座充滿未來科技感的圓形時空傳送門，正是狂派首領「密卡登」的登場舞台。<br>透過中央卡布燈箱細膩的光影演繹，我們凝結了密卡登撕裂空間、踏出傳送門的那一秒。圓圈藍色能量源光芒一閃，能量聚集起来，他夾帶著充能的加農砲出現在台北。這不僅是一座燈飾，更是一個張力十足的電影級場景。站在燈組前，你將感受到這位宇宙狂派首領令人窒息的強大氣場，準備好面對他的挑戰了嗎？',
        img: '../images/items/expo_A3.jpg'
    },
    'expo_A4': {
        title: 'A4  博派出擊',
        name: '',
        type: '',
        size: '',
        desc: '當傳統燈藝遇上 8-bit 電玩美學呈現，會擦出什麼樣的火花？ 這組作品大膽挑戰視覺慣性，將巨大的遊戲機台搬進現實。設計團隊捨棄了數位螢幕，回歸燈節本質，利用「多層次動態燈箱」來演繹遊戲畫面。<br>我們運用 LED 跑馬燈與序列控制技術，讓柯博文與密卡登的對戰畫面產生「視覺暫留」的動態感。光線在燈箱內快速推移、閃爍，彷彿像素粒子在跳動，完美復刻了老遊戲機台的映像管質感。這不僅是一座燈飾，更是一場向電玩黃金年代致敬的光影實驗，象徵台北這座城市充滿創意與玩心的多變面貌。',
        img: '../images/items/expo_A4.jpg'
    },
    'expo_B1': {
        title: 'B1  記憶圓山',
        name: '徐于倫',
        type: '',
        size: '300X250cm',
        desc: '以巨型足球為造型，帶出曾為中山足球場的過往歷史，透過球體切割出的多面光結構，使燈組成為盛載故事的「記憶容器」。在不同角度看見網格中呈現的圓山文化符號：象徵圓山動物園歲月的大象爺爺、代表東方建築精神的圓山大飯店、城市花卉美學的臺北花博、以及承載童年的兒童樂園，讓圓山的歷史化為城市印記。',
        img: '../images/items/expo_B1.jpg'
    },
    'expo_B2': {
        title: 'B2  體操男爵',
        name: '張育嘉',
        type: '靜態展出',
        size: '300X300X400cm',
        desc: '《體操男爵》安放於花博園區這片城市綠洲，一處介於繁忙街廓、基隆河谷與松山機場航道之間的獨特場域。這裡的天空永遠充滿動態：飛機掠過的軌跡、城市光的反射、轉換季節的雲層，以及夜晚清晰可見的星群。正因如此，是台北最接近「天空」的地景之一。<br>作品以一位巨大的「旅者」像剛結束一段跨越星際的旅程，也像在等待下一次飛行。這種半休息、半觀測的姿態，呼應鄰近松山機場的城市節奏：每天都有離開與抵達、分離與重逢，而作品以種靜止的方式回應這股流動，讓人終於有機會停下來，重新仰望天空。花博園區提供了這種近似「大地臥鋪」的空間，作品便在此與地景自然結合。',
        img: '../images/items/expo_B2.jpg'
    },
    'expo_B3': {
        title: 'B3  靜語花境',
        name: '陳楷葳',
        type: '互動展出',
        size: '500X200X240cm',
        desc: '作品以台北最具代表性的花卉為創作靈感，將城市的繽紛轉化為一座可沉浸、可停留的光影花園，而花朵取材自台北花季常見的杜鵑、海芋、玫瑰等花卉，以光纖與透光材質重構其盛開姿態，透過柔粉、雅白與淡紫色光芒展現春日綻放的細膩層次，每朵花皆以立體方式在夜空綻放，象徵台北城市中蘊含的生機與浪漫。<br>中央的長椅象徵城市間隱藏的休憩角落，邀請人們走入花叢，感受屬於台北夜晚的靜謐氣息。民眾可坐上椅子，花朵燈光將會產生變化喔。<br>《靜語花境》希望在繁忙城市中創造一個能短暫喘息的光之花園，讓人們在靜謐光影裡重新連結自我，並感受自然帶來的療癒力量。',
        img: '../images/items/expo_B3.jpg'
    },
    'expo_B4': {
        title: 'B4  森光行道',
        name: '徐志銘',
        type: '靜態展出',
        size: '依現地廊道設計',
        desc: '藝術家作品以 台北自然意象為本，透過光雕演繹四段能量旅程，讓觀者走入一條由自然力量建構的光之路徑。在自然與城市交界之處，光與風、雲與水交織成一條循環的能量之道。<br>作品整體視覺概念構成以陽明山暮色雲帶象徵大地與天空之間的呼吸，夕陽餘暉化為旋轉雲絲，彷彿山嵐在傍晚升騰，帶出沈靜卻仍持續脈動的生命力。另搭配淡水河水流曲線河水以溫柔而堅定的姿態自遠方匯聚，水脈延伸至作品外環，如森中幽徑，引導民眾進入能量核心。《森光行道》將色彩與動態呈現如呼吸般平衡、流動，透過步伐感應或緩慢的節奏變化，讓光影能與民眾同步，成為一段「共感式」體驗。',
        img: '../images/items/expo_B4.jpg'
    },
    'expo_B5': {
        title: 'B5  生之源',
        name: '徐于倫，舒次華',
        type: '靜態展出+定時燈光變化',
        size: '以現地樹枝幹可延伸尺寸',
        desc: '作品以樹木作為生命最純粹的象徵，透過光線與能量流動的視覺語彙，展現大自然永不枯竭的生命循環。以現地樹幹為主體，透過向上攀升的生命光條能量自大地湧起，沿著樹脈向外擴散，如同脈搏跳動般持續輸送活力形成向外擴張的光之網絡，象徵生命彼此相連、交織成共同的宇宙。夜間點亮後，整棵樹化為一個光之生命體，脈動柔和卻充滿力量，引導民眾能在光影中感受到自然的呼吸，「生之源」意在傳達生命孕育、循環與成長的哲學寓意，提醒人們生命的源頭從未遠離，它就在我們身邊、在每一次能量流動裡持續綻放，在光影之間重新感受自然的力量與生命自身的美好。',
        img: '../images/items/expo_B5.jpg'
    },
    'expo_B6': {
        title: 'B6 星樹之門',
        name: '徐志銘',
        type: '靜態展出',
        size: '依現地樹叢設計',
        desc: '本系列以台北文化為核心，將森林、夜空與建築轉化為能量視覺語彙，形成四座台北具有象徵性的光之門，以圓形構圖、樹影拱門與星軌能量構成沉浸式場域，象徵自然與文明的交會，也引導觀者進入一種穿越的經驗。<br>藝術家以台北建築擬畫抽象圖形，台北 101 象徵科技與城市的未來能量柱；穿越北門，如同踏入城市記憶深處，回望台北的文化源頭；中正紀念堂牌樓承載公共精神與價值，是城市的儀式入口；圓山大飯店的山頭文化能量彷彿是一座文化能量殿堂，遠離喧囂，靜靜守望著城市。<br>系列作品以森林為結界、夜空為能量、建築為文化精神，當光與樹相遇，城市被重新觀看感受，一座座「星樹之門」不只是建築的符號，更是一種穿越；穿越了歷史、文明、空間與自然的邊界。',
        img: '../images/items/expo_B6.jpg'
    },
    'expo_B7': {
        title: 'B7  花漾銀河',
        name: '陳楷葳',
        type: '靜態展出+定時燈光變化',
        size: '底台直徑450cmX高450cm',
        desc: '作品以奇幻生態與宇宙想像為主題核心，透過花卉、光影與外星元素的融合，打造一座彷彿從星際降臨的生命體，以盛放的花束作為主體呈現一個超越現實、充滿未知生命形態環繞的奇幻場景，象徵無盡的生命能量,而頂端以充滿宇宙能量的飛碟裝置作為視覺焦點，營造整體被宇宙能量喚醒、綻放的生命張力。燈光以柔和粉藍、幻紫交織呈現，形成如銀河般的流動色彩，使裝置在夜間呈現溫暖又神秘的氣息。《花漾銀河》希望帶領觀者跳脫日常視角，在快速變動的世界中，生命依然以多彩姿態蓬勃成長，並邀請每位來訪者一同探索屬於自己的星際花境。',
        img: '../images/items/expo_B7.jpg'
    },
    'expo_B8': {
        title: 'B8  城市樓閣',
        name: '邱杰森',
        type: '靜態展出',
        size: '250X250X300cm',
        desc: '《城市樓閣》以台北市的天際線為設計核心，從都市獨特的立面輪廓與山海交錯的地景中汲取靈感。作品結合主要都會區的區域地圖，將城市脈絡以線條化、抽象化的方式轉譯到鋼板之中，透過精密的金屬雕刻呈現出台北多層次的空間結構。鋼板上的刻線如同城市的呼吸與流動，象徵道路、建築與人群之間不斷生成的關係；透過材質的反射性與光影變化，作品呈現白天與夜晚不同的城市面貌，彷彿一座凝縮的都市樓閣。這是一件將地景、建築與日常生活重新編織的金屬地景作品，亦是對台北城市特質的抽象詮釋。',
        img: '../images/items/expo_B8.jpg'
    },
    'expo_B9': {
        title: 'B9  SPACE TAIPEI',
        name: '莫珊嵐',
        type: '靜態展出+定時燈光變化',
        size: '1000cmX1000cmX180cm',
        desc: '燈組以紙飛機作為象徵台北未來想像力的圖騰，透過光線構成的立體飛行軌跡，展現城市蓄勢待發、勇於突破的精神，作品以多架不同角度、不同高度的光紙飛機組成，宛如準備從草地上起飛，帶領大家進入一段關於夢想、科技與未來的飛行旅程。<br>夜間亮起時，光線彷彿在空中描繪航道，每一架紙飛機都像是一個正在啟動的未來計畫，指向更開闊的城市想像，提醒人們：無論時代如何變動，台北始終是承載夢想的城市，是讓理想啟航、讓創意落地的地方，如同一封寄向未來的訊息，《SPACE TAIPEI》邀請每位路過的市民朋友一同啟航，讓夢想從這片光的跑道上，飛向世界、飛向未來。',
        img: '../images/items/expo_B9.jpg'
    },
    'expo_B10': {
        title: 'B10  四時之環',
        name: '莫珊嵐',
        type: '靜態展出+呼吸光變化',
        size: '200x80x250cm',
        desc: '這件圓形裝置融合了台北的自然地貌與城市特徵，呈現出一座象徵性的微型風景模型。透過燈光色彩的變化，作品呼應四季更迭——春之繁花、夏之繁茂、秋之繽紛、冬之寧靜——猶如一扇通往城市氣候循環的詩意之窗。從正面觀賞，如同凝視一個持續變化的內在世界；側面則可見「台北市」及多個地標名稱的雕刻，象徵這片縮影自然牢牢地嵌入真實都市的脈絡中。在台北，人們經常於同一段通勤路線中，在短短數分鐘內穿梭於鬧區與山林之間。這種自然與城市無縫接軌的空間特質，正是本作品試圖傳達的核心經驗。',
        img: '../images/items/expo_B10.jpg'
    },
    'expo_B11': {
        title: 'B11  城光樹語',
        name: '陳楷葳',
        type: '靜態展出+定時燈光變化',
        size: '樹狀建置，最寬處直徑450X高450cm',
        desc: '「城光樹語」以臺北市多綠蔭的城市意象以及最具代表性的榕樹為發想核心，是臺北街景中最具生命力的城市符號，本燈組以此為靈感，將榕樹以幾何形象化作一座能向世界發聲的光之樹，象徵台北作為國際城市的開放姿態與交流精神。樹上的城市意象燈箱，以台北與全球友好城市的文化符號、特色圖像與代表色彩呈現，象徵城市之間透過光影展開的文化對話與情感交流。「城光樹語」呈現的是一座城市之間的互動地圖，以榕樹為起點，以光為語言，將台北與世界的連結具象化，讓每位走近的人都能看見台北城市精神的溫度與向外延伸的國際視野。',
        img: '../images/items/expo_B11.jpg'
    },
    'expo_B12': {
        title: 'B12  台北好水 (杜鵑花)',
        name: '',
        type: '',
        size: '',
        desc: '',
        img: '../images/items/expo_B12.jpg'
    },
    'expo_B13': {
        title: 'B13  奇幻動物園',
        name: '穀造音樂',
        type: '互動展出',
        size: '238x117x114cm、309x152x220cm、272x134x274cm、20x235x238cm',
        desc: '以奇特的動物造型為意象和台北多元文化為特色出發，並運當代科技的互動藝術，重新詮釋首都在新一年的期許與展望。作品「嘟嘟獸」、「吐兔馬」、「吼吼龍」、「珍奇怪」的外觀都融合豐富的色彩和活潑的造型，並透過燈光與互動技術，象徵台北蓬勃的生命力與創造力。<br>當觀眾觸碰或擠壓作品時，燈光會隨之變化，彷彿映照這座多元城市的絢爛景貌，與觀眾展開一場感官對話。同時，頂部吹出的一顆顆泡泡，增添了輕盈與夢幻的氛圍，也象徵在這座城市有無限可能，人們勇於懷抱夢想，實踐理想，祝福參與的民眾都能「馬到成功」。',
        img: '../images/items/expo_B13.jpg'
    },
    'expo_B14': {
        title: 'B14  12熊讚',
        name: '台北燈節設計團隊',
        type: '',
        size: '',
        desc: '',
        img: '../images/items/expo_B14.jpg'
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
        // 如果資料裡沒有 name，就顯示 "暫無作者名"
        nameEl.innerText = data.name || ""; 
    } else {
        console.error("3. 錯誤！找不到 id='modalName' 的 HTML 元素");
    }

    // --- 填充展演方式 (檢查點) ---
    const typeEl = document.getElementById('modalType');
    if (typeEl) {
        // 如果資料裡沒有 type，就顯示 "暫無展演方式"
        typeEl.innerText = data.type || ""; 
    } else {
        console.error("3. 錯誤！找不到 id='modalType' 的 HTML 元素");
    }

    // --- 填充尺寸 (檢查點) ---
    const sizeEl = document.getElementById('modalSize');
    if (sizeEl) {
        // 如果資料裡沒有 size，就顯示 "暫無尺寸"
        sizeEl.innerText = data.size || ""; 
    } else {
        console.error("3. 錯誤！找不到 id='modalSize' 的 HTML 元素");
    }

    // --- 填充描述 (檢查點) ---
    const descEl = document.getElementById('modalDesc');
    if (descEl) {
        // 如果資料裡沒有 desc，就顯示 "暫無介紹"
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







