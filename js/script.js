
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

// --- 第二層：原本的 Tab 切換 (保持不變，稍作微調) ---
function switchSubCat(evt, tabName) {
    // 1. 隱藏所有 tab-content
    // 注意：這裡只抓取 "當前顯示的主分類" 下面的 tab-content 會比較安全，
    // 但如果 ID 不重複，直接抓 ID 也可以。
    var i, tabcontent, tablinks;
    
    tabcontent = document.getElementsByClassName("tab-content");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // 2. 移除 sub-cat-btn 的 active
    tablinks = document.getElementsByClassName("sub-cat-btn");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // 3. 顯示目標
    document.getElementById(tabName).style.display = "block";
    
    // 4. 按鈕亮起
    evt.currentTarget.className += " active";
}


/* --------- 商圈活動：次選單切換功能 (bonus）--------- */

function switchSubCat(evt, contentId) {
    // 1. 防止連結預設跳轉
    if(evt) evt.preventDefault();
    
    // 2. 取得點擊按鈕的「父層容器」 (也就是 .sub-category-nav)
    // 這樣做的好處是：同一個頁面有多組次選單也不會互相衝突
    var btn = evt.currentTarget;
    var navContainer = btn.parentElement;
    
    // 3. 找到這個次選單控制的「內容區域容器」
    // 假設結構是：導覽列在內容的上方，我們往上找父層(.main-cat-content)，再往下找內容
    var mainContainer = navContainer.closest('.main-cat-content');
    
    // 4. 隱藏該區塊下所有的內容 (.shop-content-block)
    // 注意：這裡我設定抓取 "shop-content-block"，對應您商圈活動的 HTML class
    var contents = mainContainer.querySelectorAll('.shop-content-block');
    contents.forEach(function(div) {
        div.style.display = "none";
    });

    // 5. 移除該導覽列中所有按鈕的 active 狀態
    var buttons = navContainer.querySelectorAll('.sub-cat-btn');
    buttons.forEach(function(b) {
        b.classList.remove("active");
    });

    // 6. 顯示目標內容 & 點擊的按鈕設為 active
    var targetDiv = document.getElementById(contentId);
    if (targetDiv) {
        targetDiv.style.display = "block";
        // 如果內容有卡片，觸發淡入動畫 (非必要，但為了美觀)
        targetDiv.style.animation = 'none';
        targetDiv.offsetHeight; /* trigger reflow */
        targetDiv.style.animation = 'fadeIn 0.5s ease-in-out';
    }
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

// 頁面載入後自動顯示
window.addEventListener('load', function() {
    const liveModal = document.getElementById('liveModal');
    
    // 如果想要每次重整都跳出，直接用這行：
    // setTimeout(() => { openLiveModal(); }, 1000);

    // [進階] 如果希望「使用者關閉後，這次瀏覽器期間不再跳出」，請使用下面這段：
    if (!sessionStorage.getItem('liveModalClosed')) {
        setTimeout(() => {
            openLiveModal();
        }, 1000); // 延遲1秒顯示，比較不突兀
    }
});

function openLiveModal() {
    const modal = document.getElementById('liveModal');
    if(modal) {
        modal.style.display = 'flex';
        // 延遲一點點加 show class 以觸發淡入動畫
        setTimeout(() => {
            modal.classList.add('show');
        }, 10);
    }
}

function closeLiveModal() {
    const modal = document.getElementById('liveModal');
    if(modal) {
        modal.classList.remove('show');
        setTimeout(() => {
            modal.style.display = 'none';
        }, 500); // 等動畫跑完再隱藏
        
        // 紀錄已關閉，避免重複跳出 (搭配上面的 sessionStorage 使用)
        sessionStorage.setItem('liveModalClosed', 'true');
    }
}

// 點擊背景也可以關閉
document.getElementById('liveModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeLiveModal();
    }
});





/* ------------------------------------------------------------------------ */
/* --------- 展區地圖彈窗資料庫 (ximen / expo) --------- */

/* --- 1. 先定義資料庫 --- */
const mapData = {
    
    // --- 西門展區的資料 ------------ //
    'ximen_01': {
        title: 'No.01  敬請期待！',
        name: '',
        size: '',
        desc: '',
        img: '../images/items/comingsoon.jpg'
    },
    'ximen_02': {
        title: 'No.02  敬請期待！',
        name: '',
        size: '',
        desc: '',
        img: '../images/items/comingsoon.jpg'
    },
    'ximen_03': {
        title: 'No.03  敬請期待！',
        name: '',
        size: '',
        desc: '',
        img: '../images/items/comingsoon.jpg'
    },
    'ximen_04': {
        title: 'No.04  敬請期待！',
        name: '',
        size: '',
        desc: '',
        img: '../images/items/comingsoon.jpg'
    },
    'ximen_05': {
        title: 'No.05  敬請期待！',
        name: '',
        size: '',
        desc: '',
        img: '../images/items/comingsoon.jpg'
    },
    'ximen_06': {
        title: 'No.06  敬請期待！',
        name: '',
        size: '',
        desc: '',
        img: '../images/items/comingsoon.jpg'
    },
    'ximen_07': {
        title: 'No.07  敬請期待！',
        name: '',
        size: '',
        desc: '',
        img: '../images/items/comingsoon.jpg'
    },
    'ximen_08': {
        title: 'No.08  敬請期待！',
        name: '',
        size: '',
        desc: '',
        img: '../images/items/comingsoon.jpg'
    },
    'ximen_09': {
        title: 'No.09  敬請期待！',
        name: '',
        size: '',
        desc: '',
        img: '../images/items/comingsoon.jpg'
    },
    'ximen_10': {
        title: 'No.10  敬請期待！',
        name: '',
        size: '',
        desc: '',
        img: '../images/items/comingsoon.jpg'
    },
    'ximen_11': {
        title: 'No.11  揮出夢想經典熊讚',
        name: '台北燈節設計團隊',
        size: '320X255cm',
        desc: '本燈組以2026年WBC世界棒球經典賽為主題，結合台北市吉祥物「熊讚」，打造出一座結合運動激情與國家榮耀的互動拍照燈組。熊讚身著中華隊球衣，手握球棒、英姿煥發，象徵全民一心為中華隊加油的熱情與凝聚力。<br>背景以經典賽標誌與球場夜燈結合，營造出夜間比賽的震撼氛圍，圓形平台仿照投手丘造型，增添臨場感，象徵追求勝利與榮耀的決心。整體設計融合了「燈節美學」與「體育精神」，讓民眾在台北燈節活動也能感受棒球經典賽的熱血與自豪。',
        img: '../images/items/ximen-11.jpg'
    },
    'ximen_12': {
        title: 'No.12  敬請期待！',
        name: '',
        size: '',
        desc: '',
        img: '../images/items/comingsoon.jpg'
    },
    'ximen_13': {
        title: 'No.13  敬請期待！',
        name: '',
        size: '',
        desc: '',
        img: '../images/items/comingsoon.jpg'
    },
    'ximen_14': {
        title: 'No.14  敬請期待！',
        name: '',
        size: '',
        desc: '',
        img: '../images/items/comingsoon.jpg'
    },
    'ximen_15': {
        title: 'No.15  城門之後',
        name: '吳宗益',
        size: '300X300X300cm',
        desc: '重現已被拆除的臺北府城西門 ——「寶成門」，於清朝完工，位處艋舺通往城內的交通要衝，原為分界與防禦之用的城門，如今轉化為開放與流動的象徵，呼應水運、商業與文化在此交會，又隨都市變遷而重組的過程。塑膠與竹的並置運用，對比全球化工業製品與在地自然材質，構築出一種跨時代、跨文化的空間語言，呈現傳統與當代、手工與工業、地方與全球的交會。我們所留下的，是對歷史的再想像，是對城市邊界的重新提問。當人們經過作品時，會使作品產生光譜色溫的變化，象徵民眾穿越時空，來到古城，又像是科幻片一般，讓空間產生不同層次的閱讀方式。',
        img: '../images/items/ximen-15.jpg'
    },
    'ximen_16': {
        title: 'No.16  敬請期待！',
        name: '',
        size: '',
        desc: '',
        img: '../images/items/comingsoon.jpg'
    },
    'ximen_17': {
        title: 'No.17  敬請期待！',
        name: '',
        size: '',
        desc: '',
        img: '../images/items/comingsoon.jpg'
    },
    'ximen_18': {
        title: 'No.18  反界',
        name: 'hello bast workshop',
        size: '900X500X290cm',
        desc: '《反界》是一座融合鏡面結構與燈光語言的裝置藝術作品。整體造型為半開放式的橢圓形光之殼體，略呈拱形曲面，如同一個被橫向拉伸的圓柱體或膠囊狀的光影環室。外殼由多片鏡面不鏽鋼板組成，依流線型排列，圍繞中央核心，打造出極具包覆感、雕塑感與未來感的沉浸空間。從上方俯視，如同一座開放式的光之穹頂，充滿科技感與空間張力。<br>觀眾站在弧形內焦點位置，作品感應後將呈現不同光感變化；視覺上則呈現出萬花筒般的反射錯置效果，觀者的影像從不同角度同時浮現。作品邀請觀眾觀看世界的同時也回望自我，面對自身在數位與現實交錯之中的多重樣貌。',
        img: '../images/items/ximen-18.jpg'
    },
    'ximen_19': {
        title: 'No.19  敬請期待！',
        name: '',
        size: '',
        desc: '',
        img: '../images/items/comingsoon.jpg'
    },
    'ximen_20': {
        title: 'No.20  燈波',
        name: '林芷彤',
        size: '300X300X130cm',
        desc: '燈籠在臺北歷史場景中擁有鮮明而深厚的文化意涵。此創作取材自大稻埕的百年燈籠老店，以其歷經世代傳承的職人工藝與人文故事為靈感根基，突破對傳統紙燈籠的既定印象，透過材質與光的重新詮釋，探索傳統意象在當代語境中的延伸可能，讓歷史記憶在現代設計中持續發光。因此主體以玻璃透光材質構成，表現出虛實之間、懸浮不定的視覺語境。玻璃的透明與反射特性，使燈籠的輪廓在環境光中隨時間與視角變化，創造具動態性的觀看體驗。作品內部搭配七彩LED光源，透過程式控制，依照周遭環境音量切換燈光色彩與強度，呈現時間與文化記憶交錯的流動性。',
        img: '../images/items/ximen-20.jpg'
    },
    'ximen_21': {
        title: 'No.21  敬請期待！',
        name: '',
        size: '',
        desc: '',
        img: '../images/items/comingsoon.jpg'
    },
    'ximen_22': {
        title: 'No.22  敬請期待！',
        name: '',
        size: '',
        desc: '',
        img: '../images/items/comingsoon.jpg'
    },
    'ximen_23': {
        title: 'No.23  台北晝夜',
        name: '成如潔',
        size: '250直徑X高300',
        desc: '作品以日與月交融的雙圓造型為主軸，象徵台北 24 小時不停歇的城市能量，透過剪紙似的堆疊所形成的層次光影，呈現台北多元文化、歷史底蘊與生活風景。正面以「白日台北」為主題，收錄中正紀念堂、國父紀念館、北門、總統府、紅樓、故宮等具代表性的地標建築象徵台北從傳統走向現代的歷史軌跡，也展現城市在陽光下清晰而自信的樣貌。背面則轉換為「夜幕台北」，以貓空、陽明山海芋、杜鵑花等自然素材搭配小籠包、珍珠奶茶等人氣美食，體現台北夜生活的豐富與溫度。《台北晝夜》是一幅以時間為筆，描繪台北獨特生命力的光影畫卷，呈現這座城市無論白晝或夜晚都同樣耀眼動人。',
        img: '../images/items/ximen-23.jpg'
    },
    'ximen_24': {
        title: 'No.24  敬請期待！',
        name: '',
        size: '',
        desc: '',
        img: '../images/items/comingsoon.jpg'
    },
    'ximen_25': {
        title: 'No.25  敬請期待！',
        name: '',
        size: '',
        desc: '',
        img: '../images/items/comingsoon.jpg'
    },
    'ximen_26': {
        title: 'No.26  敬請期待！',
        name: '',
        size: '',
        desc: '',
        img: '../images/items/comingsoon.jpg'
    },

    
    // --- 花博展區的資料 ------------ //
    'expo_01': {
        title: 'No.01  敬請期待！',
        name: '',
        size: '',
        desc: '',
        img: '../images/items/comingsoon.jpg'
    },
    'expo_02': {
        title: 'No.02  敬請期待！',
        name: '',
        size: '',
        desc: '',
        img: '../images/items/comingsoon.jpg'
    },
    'expo_03': {
        title: 'No.03  敬請期待！',
        name: '',
        size: '',
        desc: '',
        img: '../images/items/comingsoon.jpg'
    },
    'expo_04': {
        title: 'No.04  敬請期待！',
        name: '',
        size: '',
        desc: '',
        img: '../images/items/comingsoon.jpg'
    },
    'expo_05': {
        title: 'No.05  記憶圓山',
        name: '徐于倫',
        size: '直徑300X高250cm',
        desc: '圓山曾經是中山足球場的城市運動場域，也是台北早期集體記憶的核心，我們以巨型足球為造型主體，透過球體切割出的多面光結構使燈組不僅是造型展示，更像是一顆盛載城市故事的「記憶容器」。在不同角度看見網格中呈現的圓山文化符號：象徵圓山動物園歲月的「林旺爺爺」、代表東方建築精神的「圓山大飯店」、國際視野與城市花卉美學的「臺北花博」、以及承載童年的「台北兒童樂園」。燈組以足球造型串連城市文化，以光構築時間感，讓圓山的歷史不再停留於記憶，而成為城市能量的象徵重現。',
        img: '../images/items/expo-05.jpg'
    },
    'expo_06': {
        title: 'No.06  體操男爵',
        name: '張育嘉',
        size: '300X300X400cm',
        desc: '《體操男爵》安放於花博園區這片城市綠洲，一處介於繁忙街廓、基隆河谷與松山機場航道之間的獨特場域。這裡的天空永遠充滿動態：飛機掠過的軌跡、城市光的反射、轉換季節的雲層，以及夜晚清晰可見的星群。正因如此，是台北最接近「天空」的地景之一。<br>作品以一位巨大的「旅者」像剛結束一段跨越星際的旅程，也像在等待下一次飛行。這種半休息、半觀測的姿態，呼應鄰近松山機場的城市節奏：每天都有離開與抵達、分離與重逢，而作品以種靜止的方式回應這股流動，讓人終於有機會停下來，重新仰望天空。花博園區提供了這種近似「大地臥鋪」的空間，作品便在此與地景自然結合。',
        img: '../images/items/expo-06.jpg'
    },
    'expo_07': {
        title: 'No.07  靜語花境',
        name: '陳楷葳',
        size: '500X200X240cm',
        desc: '作品以台北最具代表性的花卉為創作靈感，將城市的繽紛轉化為一座可沉浸、可停留的光影花園，而花朵取材自台北花季常見的杜鵑、海芋、玫瑰等花卉，以光纖與透光材質重構其盛開姿態，透過柔粉、雅白與淡紫色光芒展現春日綻放的細膩層次，每朵花皆以立體方式在夜空綻放，象徵台北城市中蘊含的生機與浪漫。<br>中央的長椅象徵城市間隱藏的休憩角落，邀請人們走入花叢，感受屬於台北夜晚的靜謐氣息。民眾可坐上椅子，花朵燈光將會產生變化喔。<br>《靜語花境》希望在繁忙城市中創造一個能短暫喘息的光之花園，讓人們在靜謐光影裡重新連結自我，並感受自然帶來的療癒力量。',
        img: '../images/items/expo-07.jpg'
    },
    'expo_08': {
        title: 'No.08  敬請期待！',
        name: '',
        size: '',
        desc: '',
        img: '../images/items/comingsoon.jpg'
    },
    'expo_09': {
        title: 'No.09  生之源',
        name: '徐于倫，舒次華',
        size: '以現地樹枝幹可延伸尺寸',
        desc: '作品以樹木作為生命最純粹的象徵，透過光線與能量流動的視覺語彙，展現大自然永不枯竭的生命循環。以現地樹幹為主體，透過向上攀升的生命光條能量自大地湧起，沿著樹脈向外擴散，如同脈搏跳動般持續輸送活力形成向外擴張的光之網絡，象徵生命彼此相連、交織成共同的宇宙。夜間點亮後，整棵樹化為一個光之生命體，脈動柔和卻充滿力量，引導民眾能在光影中感受到自然的呼吸，「生之源」意在傳達生命孕育、循環與成長的哲學寓意，提醒人們生命的源頭從未遠離，它就在我們身邊、在每一次能量流動裡持續綻放，在光影之間重新感受自然的力量與生命自身的美好。',
        img: '../images/items/expo-09.jpg'
    },
    'expo_10': {
        title: 'No.10  星樹之門',
        name: '徐志銘',
        size: '依現地樹叢設計',
        desc: '本系列以台北文化為核心，將森林、夜空與建築轉化為能量視覺語彙，形成四座台北具有象徵性的光之門，以圓形構圖、樹影拱門與星軌能量構成沉浸式場域，象徵自然與文明的交會，也引導觀者進入一種穿越的經驗。<br>藝術家以台北建築擬畫抽象圖形，台北 101 象徵科技與城市的未來能量柱；穿越北門，如同踏入城市記憶深處，回望台北的文化源頭；中正紀念堂牌樓承載公共精神與價值，是城市的儀式入口；圓山大飯店的山頭文化能量彷彿是一座文化能量殿堂，遠離喧囂，靜靜守望著城市。<br>系列作品以森林為結界、夜空為能量、建築為文化精神，當光與樹相遇，城市被重新觀看感受，一座座「星樹之門」不只是建築的符號，更是一種穿越；穿越了歷史、文明、空間與自然的邊界。',
        img: '../images/items/expo-10.jpg'
    },
    'expo_11': {
        title: 'No.11  花漾銀河',
        name: '陳楷葳',
        size: '底台直徑450cmX高450cm',
        desc: '作品以奇幻生態與宇宙想像為主題核心，透過花卉、光影與外星元素的融合，打造一座彷彿從星際降臨的生命體，以盛放的花束作為主體呈現一個超越現實、充滿未知生命形態環繞的奇幻場景，象徵無盡的生命能量,而頂端以充滿宇宙能量的飛碟裝置作為視覺焦點，營造整體被宇宙能量喚醒、綻放的生命張力。燈光以柔和粉藍、幻紫交織呈現，形成如銀河般的流動色彩，使裝置在夜間呈現溫暖又神秘的氣息。《花漾銀河》希望帶領觀者跳脫日常視角，在快速變動的世界中，生命依然以多彩姿態蓬勃成長，並邀請每位來訪者一同探索屬於自己的星際花境。',
        img: '../images/items/expo-11.jpg'
    },
    'expo_12': {
        title: 'No.12  城市樓閣',
        name: '邱杰森',
        size: '250X250X300cm',
        desc: '《城市樓閣》以台北市的天際線為設計核心，從都市獨特的立面輪廓與山海交錯的地景中汲取靈感。作品結合主要都會區的區域地圖，將城市脈絡以線條化、抽象化的方式轉譯到鋼板之中，透過精密的金屬雕刻呈現出台北多層次的空間結構。鋼板上的刻線如同城市的呼吸與流動，象徵道路、建築與人群之間不斷生成的關係；透過材質的反射性與光影變化，作品呈現白天與夜晚不同的城市面貌，彷彿一座凝縮的都市樓閣。這是一件將地景、建築與日常生活重新編織的金屬地景作品，亦是對台北城市特質的抽象詮釋。',
        img: '../images/items/expo-12.jpg'
    },
    'expo_13': {
        title: 'No.13  SPACE TAIPEI',
        name: '莫珊嵐',
        size: '長1000cmX寬1000cmX均高約180cm',
        desc: '燈組以紙飛機作為象徵台北未來想像力的圖騰，透過光線構成的立體飛行軌跡，展現城市蓄勢待發、勇於突破的精神，作品以多架不同角度、不同高度的光紙飛機組成，宛如準備從草地上起飛，帶領大家進入一段關於夢想、科技與未來的飛行旅程。<br>夜間亮起時，光線彷彿在空中描繪航道，每一架紙飛機都像是一個正在啟動的未來計畫，指向更開闊的城市想像，提醒人們：無論時代如何變動，台北始終是承載夢想的城市，是讓理想啟航、讓創意落地的地方，如同一封寄向未來的訊息，《SPACE TAIPEI》邀請每位路過的市民朋友一同啟航，讓夢想從這片光的跑道上，飛向世界、飛向未來。',
        img: '../images/items/expo-13.jpg'
    },
    'expo_14': {
        title: 'No.14  四時之環',
        name: '莫珊嵐 MARGOT GUILLEMOT',
        size: '200x80x250cm',
        desc: '這件圓形裝置融合了台北的自然地貌與城市特徵，呈現出一座象徵性的微型風景模型。透過燈光色彩的變化，作品呼應四季更迭——春之繁花、夏之繁茂、秋之繽紛、冬之寧靜——猶如一扇通往城市氣候循環的詩意之窗。<br>從正面觀賞，如同凝視一個持續變化的內在世界；側面則可見「台北市」及多個地標名稱的雕刻，象徵這片縮影自然牢牢地嵌入真實都市的脈絡中。<br>在台北，人們經常於同一段通勤路線中，在短短數分鐘內穿梭於鬧區與山林之間。這種自然與城市無縫接軌的空間特質，正是本作品試圖傳達的核心經驗。',
        img: '../images/items/expo-14.jpg'
    },
    'expo_15': {
        title: 'No.15  城光樹語 ',
        name: '陳楷葳',
        size: '樹狀建置，最寬處直徑450X高450cm',
        desc: '「城光樹語」以臺北市多綠蔭的城市意象以及最具代表性的榕樹為發想核心，是臺北街景中最具生命力的城市符號，本燈組以此為靈感，將榕樹以幾何形象化作一座能向世界發聲的光之樹，象徵台北作為國際城市的開放姿態與交流精神。樹上的城市意象燈箱，以台北與全球友好城市的文化符號、特色圖像與代表色彩呈現，象徵城市之間透過光影展開的文化對話與情感交流。「城光樹語」呈現的是一座城市之間的互動地圖，以榕樹為起點，以光為語言，將台北與世界的連結具象化，讓每位走近的人都能看見台北城市精神的溫度與向外延伸的國際視野。',
        img: '../images/items/expo-15.jpg'
    },
    'expo_16': {
        title: 'No.16  敬請期待！',
        name: '',
        size: '',
        desc: '',
        img: '../images/items/comingsoon.jpg'
    },
    'expo_17': {
        title: 'No.17  敬請期待！',
        name: '',
        size: '',
        desc: '',
        img: '../images/items/comingsoon.jpg'
    },
    'expo_18': {
        title: 'No.18  奇幻動物園',
        name: '穀造音樂',
        size: '238x117x114cm、309x152x220cm、272x134x274cm、20x235x238cm ',
        desc: '以奇特的動物造型為意象和台北多元文化為特色出發，並運當代科技的互動藝術，重新詮釋首都在新一年的期許與展望。作品「嘟嘟獸」、「吐兔馬」、「吼吼龍」、「珍奇怪」的外觀都融合豐富的色彩和活潑的造型，並透過燈光與互動技術，象徵台北蓬勃的生命力與創造力。 <br>當觀眾觸碰或擠壓作品時，燈光會隨之變化，彷彿映照這座多元城市的絢爛景貌，與觀眾展開一場感官對話。同時，頂部吹出的一顆顆泡泡，增添了輕盈與夢幻的氛圍，也象徵在這座城市有無限可能，人們勇於懷抱夢想，實踐理想，祝福參與的民眾都能「馬到成功」。',
        img: '../images/items/expo-18.jpg'
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

    // --- 填充尺寸 (檢查點) ---
    const sizeEl = document.getElementById('modalSize');
    if (sizeEl) {
        // 如果資料裡沒有 size，就顯示 "暫無尺寸"
        sizeEl.innerText = data.size || ""; 
    } else {
        console.error("3. 錯誤！找不到 id='modalSize' 的 HTML 元素");
    }

    // --- 填充展演方式 (檢查點) ---
    const typeEl = document.getElementById('modalType');
    if (typeEl) {
        // 如果資料裡沒有 type，就顯示 "暫無展演方式"
        typeEl.innerText = data.type || ""; 
    } else {
        console.error("3. 錯誤！找不到 id='modalType' 的 HTML 元素");
    }

    // --- 填充描述 (檢查點) ---
    const descEl = document.getElementById('modalDesc');
    if (descEl) {
        // 如果資料裡沒有 desc，就顯示 "暫無介紹"
        descEl.innerText = data.desc || ""; 
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

/* --- 原本的函式 (負責處理背景點擊) --- */
function closeMapModal(e) {
    // 只有點到 "遮罩背景 (modal-overlay)" 時才關閉
    if (e.target.classList.contains('modal-overlay')) {
        closeActualModal(); // 呼叫下方的關閉動作
    }
}
/* --- 新增：強制關閉函式 (負責處理 X 按鈕) --- */
function closeActualModal() {
    const modal = document.getElementById('mapModal');
    if (modal) {
        modal.classList.remove('show');
        // 等 0.3 秒動畫跑完再隱藏
        setTimeout(() => { modal.style.display = 'none'; }, 300);
    }
}







