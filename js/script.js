
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



/* --------- Tab 頁籤切換功能 (event.html) --------- */

function openTab(evt, tabName) {
    var i, tabContent, tabBtns;

    // 1. 隱藏所有內容區塊
    tabContent = document.getElementsByClassName("tab-content");
    for (i = 0; i < tabContent.length; i++) {
        tabContent[i].style.display = "none";
        tabContent[i].classList.remove("active");
    }

    // 2. 移除所有按鈕的 "active" 樣式
    tabBtns = document.getElementsByClassName("tab-btn");
    for (i = 0; i < tabBtns.length; i++) {
        tabBtns[i].className = tabBtns[i].className.replace(" active", "");
    }

    // 3. 顯示被點擊的區塊，並將按鈕設為 active
    document.getElementById(tabName).style.display = "block";
    // 加上一個小延遲讓淡入動畫每次都觸發
    setTimeout(() => {
        document.getElementById(tabName).classList.add("active");
    }, 10);
    
    evt.currentTarget.className += " active";
}

// --- 新增：同場加映切換功能 (獨立運作) ---
function openExtraTab(evt, tabName) {
    var i, tabContent, tabBtns;

    // 1. 隱藏 "extra-content"
    tabContent = document.getElementsByClassName("extra-content");
    for (i = 0; i < tabContent.length; i++) {
        tabContent[i].style.display = "none";
        tabContent[i].classList.remove("active");
    }

    // 2. 移除 "extra-btn" 的 active 狀態
    tabBtns = document.getElementsByClassName("extra-btn");
    for (i = 0; i < tabBtns.length; i++) {
        tabBtns[i].className = tabBtns[i].className.replace(" active", "");
    }

    // 3. 顯示選中的內容
    document.getElementById(tabName).style.display = "block";
    setTimeout(() => {
        document.getElementById(tabName).classList.add("active");
    }, 10);
    
    evt.currentTarget.className += " active";
}



/* --------- 年份 Tab 頁籤切換功能 (index.html) --------- */

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
            threshold: 0.5 // 設定門檻：當 Footer 出現 50% 的面積時觸發
        });

        observer.observe(footer);
    }
});



/* --------- Swiper 輪播初始化 含防呆機制 (共用) --------- */

// 1. 先嘗試抓取容器
const highlightContainer = document.querySelector('.highlight-swiper');

// 2. 判斷：只有當「容器存在」且「Swiper 套件已載入」時才執行
if (highlightContainer && typeof Swiper !== 'undefined') {
    
    const highlightSwiper = new Swiper('.highlight-swiper', {
        // 核心參數
        loop: true,
        spaceBetween: 30,
        
        // RWD 響應式設定
        breakpoints: {
            320: { slidesPerView: 1.2, spaceBetween: 20 },
            768: { slidesPerView: 2.5, spaceBetween: 30 },
            1024: { slidesPerView: 3.5, spaceBetween: 30 }
        },
    
        // 導航箭頭設定
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    
        // 自動播放設定
        autoplay: {
            delay: 5000, 
            disableOnInteraction: false,
        },
    });

    // --- Hover 控制自動播放邏輯 (也必須包在防呆裡面) ---
    // 只有當 highlightSwiper 成功建立後，才能執行下面的指令
    
    // 1. 初始先停止播放
    highlightSwiper.autoplay.stop();

    // 2. 滑鼠移入 -> 開始播放
    highlightContainer.addEventListener('mouseenter', () => {
        highlightSwiper.autoplay.start();
    });

    // 3. 滑鼠移出 -> 停止播放
    highlightContainer.addEventListener('mouseleave', () => {
        highlightSwiper.autoplay.stop();
    });

} else {
    // (選用) 如果你想知道為什麼沒跑，可以打開這行
    // console.log("本頁面無 Swiper 區塊，或未引入 Swiper JS，故不執行輪播初始化。");
}



/* --------- 展區地圖彈窗資料庫 (ximen.html / expo.html) --------- */

/* --- 1. 先定義資料庫 --- */
const mapData = {

    // --- 西門展區的資料 ------------ //
    // --- 頁籤 主題IP燈組 的資料 ---
    'ximen-main': {
        title: 'Coming Soon! 敬請期待！',
        name: '',
        desc: '',
        img: 'https://uniuna.github.io/2026-TAIPEI-LANTERN/images/items/comingsoon.jpg'
    },
    'ximen-ip1': {
        title: 'Coming Soon! 敬請期待！',
        desc: '',
        img: 'https://uniuna.github.io/2026-TAIPEI-LANTERN/images/items/comingsoon.jpg'
    },
    'ximen-ip2': {
        title: 'Coming Soon! 敬請期待！',
        desc: '',
        img: 'https://uniuna.github.io/2026-TAIPEI-LANTERN/images/items/comingsoon.jpg'
    },
    'ximen-ip3': {
        title: 'Coming Soon! 敬請期待！',
        desc: '',
        img: 'https://uniuna.github.io/2026-TAIPEI-LANTERN/images/items/comingsoon.jpg'
    },

    // --- 頁籤 藝術燈組 的資料 ---
    'artist-1': {
        title: '中山堂光雕',
        desc: '藝術家打造的光影秀...',
        img: 'https://picsum.photos/600/400'
    },
    'artist-2': {
        title: '街頭藝術裝置',
        desc: '隱藏在巷弄中的驚喜...',
        img: 'https://picsum.photos/600/400'
    },
    'artist-3': {
        title: '街頭藝術裝置',
        desc: '隱藏在巷弄中的驚喜...',
        img: 'https://picsum.photos/600/400'
    },
    'artist-4': {
        title: '街頭藝術裝置',
        desc: '隱藏在巷弄中的驚喜...',
        img: 'https://picsum.photos/600/400'
    },
    'artist-5': {
        title: '街頭藝術裝置',
        desc: '隱藏在巷弄中的驚喜...',
        img: 'https://picsum.photos/600/400'
    },

    // --- 頁籤 企業燈組 的資料 ---
    'enterprise-1': {
        title: '台新燈組',
        desc: '還沒有文案還沒有文案...',
        img: 'https://picsum.photos/600/400'
    },
    'enterprise-2': {
        title: '企業燈組',
        desc: '還沒有文案還沒有文案...',
        img: 'https://picsum.photos/600/400'
    },
    'enterprise-3': {
        title: '企業燈組',
        desc: '還沒有文案還沒有文案...',
        img: 'https://picsum.photos/600/400'
    },
    

    // --- 頁籤 宮廟燈組 的資料 ---
    'temple-1': {
        title: '城隍廟燈組',
        desc: '傳統祈福燈籠...',
        img: 'https://picsum.photos/600/400'
    },
    'temple-1': {
        title: '宮廟燈組',
        desc: '傳統祈福燈籠...',
        img: 'https://picsum.photos/600/400'
    },
    'temple-1': {
        title: '宮廟燈組',
        desc: '傳統祈福燈籠...',
        img: 'https://picsum.photos/600/400'
    },


    // --- 花博展區的資料 ------------ //
    // --- 頁籤 IP主題燈組 的資料 ---
    'expo-main': {
        title: '花博展區主燈',
        desc: '花博展區主燈介紹...',
        img: 'https://picsum.photos/800/600'
    },
    'expo-ip1': {
        title: '主題燈組',
        desc: '主題燈組介紹...',
        img: 'https://picsum.photos/800/600'
    },
    
};

// --- 新版切換函式：同時切換地圖與簡介 ---
function switchMapLayer(evt, mapId, infoId) {
    
    // 1. 處理地圖層 (Map Layer)
    const mapLayers = document.getElementsByClassName("map-layer");
    for (let i = 0; i < mapLayers.length; i++) {
        mapLayers[i].style.display = "none";
        mapLayers[i].classList.remove("active");
    }
    document.getElementById(mapId).style.display = "block";
    setTimeout(() => {
        document.getElementById(mapId).classList.add("active");
    }, 10);

    // 2. 處理簡介層 (Info Layer) - 新增的部分
    const infoLayers = document.getElementsByClassName("info-layer");
    for (let i = 0; i < infoLayers.length; i++) {
        infoLayers[i].style.display = "none";
        infoLayers[i].classList.remove("active");
    }
    // 如果有傳入 infoId 才執行 (防呆)
    if (infoId) {
        document.getElementById(infoId).style.display = "block";
        setTimeout(() => {
            document.getElementById(infoId).classList.add("active");
        }, 10);
    }

    // 3. 處理按鈕樣式
    const btns = document.getElementsByClassName("map-tab-btn");
    for (let i = 0; i < btns.length; i++) {
        btns[i].classList.remove("active");
    }
    evt.currentTarget.classList.add("active");
}

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

    // --- 填充作品名 (檢查點 A+) ---
    const nameEl = document.getElementById('modalName');
    if (nameEl) {
        // 如果資料裡沒有 name，就顯示 "暫無作者名"
        nameEl.innerText = data.name || "（暫無作者名）"; 
    } else {
        console.error("3. 錯誤！找不到 id='modalName' 的 HTML 元素");
    }

    // --- 填充描述 (檢查點 A) ---
    const descEl = document.getElementById('modalDesc');
    if (descEl) {
        // 如果資料裡沒有 desc，就顯示 "暫無介紹"
        descEl.innerText = data.desc || "（暫無介紹資料）"; 
    } else {
        console.error("3. 錯誤！找不到 id='modalDesc' 的 HTML 元素");
    }

    // --- 填充圖片 (檢查點 B) ---
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





/* --------- Loading 動畫控制腳本 --------- */
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

