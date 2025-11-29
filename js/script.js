// 手機版選單切換腳本
function toggleMenu() {
    const nav = document.getElementById('navLinks');
    nav.classList.toggle('active');
}

// 頁籤切換功能
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


// --- 活動亮點輪播 (Swiper) 初始化腳本 --- 
const highlightSwiper = new Swiper('.highlight-swiper', {
    // 核心參數
    loop: true,       // 循環播放
    spaceBetween: 30, // 圖片之間的間距
    
    // RWD 響應式設定：不同螢幕寬度顯示不同張數
    breakpoints: {
        320: { slidesPerView: 1.2, spaceBetween: 20 }, // 手機版：顯示 1.2 張 (讓人知道旁邊還有)
        768: { slidesPerView: 2.5, spaceBetween: 30 }, // 平板：顯示 2.5 張
        1024: { slidesPerView: 3.5, spaceBetween: 30 } // 電腦版：顯示 3.5 張
    },

    // 導航箭頭設定
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // 自動播放設定 (初始先關閉，稍後用 JS 控制 hover 觸發)
    autoplay: {
        delay: 5000, // 5秒換一張
        disableOnInteraction: false, // 使用者操作後是否停止自動播放 (否)
    },
});

