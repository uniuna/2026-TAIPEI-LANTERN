<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header.php'; ?>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/pages.css">
</head>
<body>
    <?php include 'nav.php'; ?>

    <main class="container events-main">
        <section>
            <h2 class="section-title">Featured Events</h2>
            
            <div class="tab-buttons events-tab-wrapper">
                <!-- <button class="tab-btn active" onclick="openTab(event, 'event1')">Opening Ceremony</button> -->
                <button class="tab-btn active" onclick="openTab(event, 'event2')">Stage Performances</button>
                <button class="tab-btn" onclick="openTab(event, 'event3')">12 Districts Events</button>
                <button class="tab-btn" onclick="openTab(event, 'event4')">Coffee Capital Carnival</button>
                <button class="tab-btn" onclick="openTab(event, 'event5')">Theme Events</button>
            </div>

<!-- 開幕式 -->
            <div id="event1" class="tab-content">
                <section class="coming-soon-block">

                </section>
            </div>
<!-- 花博舞台活動 -->
            <div id="event2" class="tab-content active">
                
                <div class="stage-intro-box">
                    <div class="stage-intro-row">
                        <span class="stage-intro-label">Date：</span>
                        <span>2026/02/27 ~ 03/15</span>
                    </div>
                    <div class="stage-intro-row">
                        <span class="stage-intro-label">Location：</span>
                        <span>Taipei Expo Park Main Stage</span>
                    </div>
                </div>

                <div class="events-masonry-grid">

                    <div class="day-group-card">
                        <h3 class="event-date-title">2026/02/27 (Fri.)</h3>
                        <div class="event-list">
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">14:05-14:35</div>
                                    <div class="event-details"><h3 class="event-title">Ana</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">14:45-15:15</div>
                                    <div class="event-details"><h3 class="event-title">Liu Shao Xi & Kids Of Rock</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">15:25-15:55</div>
                                    <div class="event-details"><h3 class="event-title">iColor</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">18:00-18:30</div>
                                    <div class="event-details"><h3 class="event-title">Hamamatsu City</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:00-19:03</div>
                                    <div class="event-details"><h3 class="event-title">Main Lantern Show</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:03-19:30</div>
                                    <div class="event-details"><h3 class="event-title">Dinosaur Show</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:30-19:33</div>
                                    <div class="event-details"><h3 class="event-title">Main Lantern Show</h3></div>
                                </div>
                            </div>
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:33-19:45</div>
                                    <div class="event-details"><h3 class="event-title">Dinosaur Show</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:45-20:00</div>
                                    <div class="event-details"><h3 class="event-title">Fantasy Magic Show</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:00-20:03</div>
                                    <div class="event-details"><h3 class="event-title">Main Lantern Show</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:03-20:20</div>
                                    <div class="event-details"><h3 class="event-title">Fantasy Magic Show</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:20-20:30</div>
                                    <div class="event-details"><h3 class="event-title">Aurora Circus</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:30-20:33</div>
                                    <div class="event-details"><h3 class="event-title">Main Lantern Show</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:33-21:00</div>
                                    <div class="event-details"><h3 class="event-title">Aurora Circus</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="day-group-card">
                        <h3 class="event-date-title">2026/02/28 (Sat.)</h3>
                        <div class="event-list">
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">14:00-14:10</div>
                                    <div class="event-details"><h3 class="event-title">Fata’an Youth Group</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">14:15-14:40</div>
                                    <div class="event-details"><h3 class="event-title">AZ Li Hsiao-Tsu (Mayaw Alang)</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">14:50-15:20</div>
                                    <div class="event-details"><h3 class="event-title">Saw Lam</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">15:30-15:50</div>
                                    <div class="event-details"><h3 class="event-title">Eric Lee</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">18:30-18:38</div>
                                    <div class="event-details"><h3 class="event-title">Zhongshan Shopping District-Ethereal Dessert Show</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">18:40-19:00</div>
                                    <div class="event-details"><h3 class="event-title">Zhongshan Shopping District-Golden Beef Noodle Show</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:00-19:03</div>
                                    <div class="event-details"><h3 class="event-title">Main Lantern Show</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:03-19:30</div>
                                    <div class="event-details"><h3 class="event-title">Smile Dash</h3></div>
                                </div>
                            </div>
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:30-19:33</div>
                                    <div class="event-details"><h3 class="event-title">Main Lantern Show</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:33-19:40</div>
                                    <div class="event-details"><h3 class="event-title">Smile Dash</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:40-20:00</div>
                                    <div class="event-details"><h3 class="event-title">Whoou!</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:00-20:03</div>
                                    <div class="event-details"><h3 class="event-title">Main Lantern Show</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:03-20:20</div>
                                    <div class="event-details"><h3 class="event-title">Whoou!</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:20-20:30</div>
                                    <div class="event-details"><h3 class="event-title">DrunkMonk</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:30-20:33</div>
                                    <div class="event-details"><h3 class="event-title">Main Lantern Show</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:33-21:00</div>
                                    <div class="event-details"><h3 class="event-title">DrunkMonk</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="day-group-card">
                        <h3 class="event-date-title">2026/03/01 (Sun.)</h3>
                        <div class="event-list">
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">14:00-14:10</div>
                                    <div class="event-details"><h3 class="event-title">Le Po Taiko</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">14:10-14:50</div>
                                    <div class="event-details"><h3 class="event-title">Taipei Guzheng Ensemble</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">15:00-15:45</div>
                                    <div class="event-details"><h3 class="event-title">Lin yu-fei</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">15:45-16:00</div>
                                    <div class="event-details"><h3 class="event-title">Song Medley Challenge</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">16:30-17:00</div>
                                    <div class="event-details"><h3 class="event-title">The mascot of Taipei City Bravo Bear+The mascot of Taipei Metro JAMIE</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:00-19:03</div>
                                    <div class="event-details"><h3 class="event-title">Main Lantern Show</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:03-19:30</div>
                                    <div class="event-details"><h3 class="event-title">Curry</h3></div>
                                </div>
                            </div>
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:30-19:33</div>
                                    <div class="event-details"><h3 class="event-title">Main Lantern Show</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:33-20:00</div>
                                    <div class="event-details"><h3 class="event-title">Eason Wu</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:00-20:03</div>
                                    <div class="event-details"><h3 class="event-title">Main Lantern Show</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:03-20:30</div>
                                    <div class="event-details"><h3 class="event-title">KEzINE & DJ Z.ChUAN</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:30-20:33</div>
                                    <div class="event-details"><h3 class="event-title">Main Lantern Show</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:33-21:00</div>
                                    <div class="event-details"><h3 class="event-title">Howard</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="day-group-card">
                        <h3 class="event-date-title">2026/03/02 (Mon.)</h3>
                        <div class="event-list">
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:00-19:30</div>
                                    <div class="event-details"><h3 class="event-title">Taipei Municipal Jinhua Junior High School Grade 7</h3></div>
                                </div>
                            </div>
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:30-20:00</div>
                                    <div class="event-details"><h3 class="event-title">NHRC35th</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="day-group-card">
                        <h3 class="event-date-title">2026/03/03 (Tue.)</h3>
                        <div class="event-list">
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:00-19:30</div>
                                    <div class="event-details"><h3 class="event-title">Lao-Song Elementary School Drum and Ocarina , Band</h3></div>
                                </div>
                            </div>
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:30-20:00</div>
                                    <div class="event-details"><h3 class="event-title">Taipei Municipal Minghu Junior High School Wind Band</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="day-group-card">
                        <h3 class="event-date-title">2026/03/04 (Wed.)</h3>
                        <div class="event-list">
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:00-19:30</div>
                                    <div class="event-details"><h3 class="event-title">Taipei Municipal Taoyuan Junior High School Diabolo Team</h3></div>
                                </div>
                            </div>
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:30-20:00</div>
                                    <div class="event-details"><h3 class="event-title">Shimane Prefecture Tourism Mascot Shimanekko</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="day-group-card">
                        <h3 class="event-date-title">2026/03/05 (Thu.)</h3>
                        <div class="event-list">
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:00-19:30</div>
                                    <div class="event-details"><h3 class="event-title">Vibrant Folklore from Saint Christopher and Nevis</h3></div>
                                </div>
                            </div>
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:30-20:00</div>
                                    <div class="event-details"><h3 class="event-title">Taipei Municipal Ren’ai Junior High School Street Dance Club</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="day-group-card">
                        <h3 class="event-date-title">2026/03/06 (Fri.)</h3>
                        <div class="event-list">
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:00-19:03</div>
                                    <div class="event-details"><h3 class="event-title">Main Lantern Show</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:03-19:30</div>
                                    <div class="event-details"><h3 class="event-title">PACHILA</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:30-19:33</div>
                                    <div class="event-details"><h3 class="event-title">Main Lantern Show</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:33-19:40</div>
                                    <div class="event-details"><h3 class="event-title">PACHILA</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:40-20:00</div>
                                    <div class="event-details"><h3 class="event-title">BADLARRY</h3></div>
                                </div>
                            </div>
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">20:00-20:03</div>
                                    <div class="event-details"><h3 class="event-title">Main Lantern Show</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:03-20:20</div>
                                    <div class="event-details"><h3 class="event-title">BADLARRY</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:20-20:30</div>
                                    <div class="event-details"><h3 class="event-title">P!SCO</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:30-20:33</div>
                                    <div class="event-details"><h3 class="event-title">Main Lantern Show</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:33-21:00</div>
                                    <div class="event-details"><h3 class="event-title">P!SCO</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="day-group-card">
                        <h3 class="event-date-title">2026/03/07 (Sat.)</h3>
                        <div class="event-list">
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">14:05-14:35</div>
                                    <div class="event-details"><h3 class="event-title">Hung Yu-Chiao</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">14:40-15:10</div>
                                    <div class="event-details"><h3 class="event-title">Tiffany Liu</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">15:15-15:35</div>
                                    <div class="event-details"><h3 class="event-title">Twu Pei-Tsern</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">15:35-16:00</div>
                                    <div class="event-details"><h3 class="event-title">Southduet</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:00-19:03</div>
                                    <div class="event-details"><h3 class="event-title">Main Lantern Show</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:03-19:30</div>
                                    <div class="event-details"><h3 class="event-title">Black Coffee-Johnny&Penny</h3></div>
                                </div>
                            </div>
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:30-19:33</div>
                                    <div class="event-details"><h3 class="event-title">Main Lantern Show</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:33-20:00</div>
                                    <div class="event-details"><h3 class="event-title">Black Coffee-Johnny&Penny</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:00-20:03</div>
                                    <div class="event-details"><h3 class="event-title">Main Lantern Show</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:03-20:30</div>
                                    <div class="event-details"><h3 class="event-title">Jerry Ku</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:30-20:33</div>
                                    <div class="event-details"><h3 class="event-title">Main Lantern Show</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:30-21:00</div>
                                    <div class="event-details"><h3 class="event-title">Judy Chou</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="day-group-card">
                        <h3 class="event-date-title">2026/03/08 (Sun.)</h3>
                        <div class="event-list">
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">14:00-14:25</div>
                                    <div class="event-details"><h3 class="event-title">Education – Quiz & Dance Performance</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">14:25-14:55</div>
                                    <div class="event-details"><h3 class="event-title">Kids & Family – Interactive Session</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">14:55-15:30</div>
                                    <div class="event-details"><h3 class="event-title">Seniors – Vocal Performance Showcase</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">15:30-16:00</div>
                                    <div class="event-details"><h3 class="event-title">Arts & Culture – Quiz & Dance Performance</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:00-19:03</div>
                                    <div class="event-details"><h3 class="event-title">Main Lantern Show</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:03-19:30</div>
                                    <div class="event-details"><h3 class="event-title">Badman</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:30-19:33</div>
                                    <div class="event-details"><h3 class="event-title">Main Lantern Show</h3></div>
                                </div>
                            </div>
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:33-19:40</div>
                                    <div class="event-details"><h3 class="event-title">Badman</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:40-20:00</div>
                                    <div class="event-details"><h3 class="event-title">DJ LELE</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:00-20:03</div>
                                    <div class="event-details"><h3 class="event-title">Main Lantern Show</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:03-20:20</div>
                                    <div class="event-details"><h3 class="event-title">DJ LELE</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:20-20:30</div>
                                    <div class="event-details"><h3 class="event-title">Banyan Gang</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:30-20:33</div>
                                    <div class="event-details"><h3 class="event-title">Main Lantern Show</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:33-21:00</div>
                                    <div class="event-details"><h3 class="event-title">Banyan Gang</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="day-group-card">
                        <h3 class="event-date-title">2026/03/09 (Mon.)</h3>
                        <div class="event-list">
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:00-19:30</div>
                                    <div class="event-details"><h3 class="event-title">Taipei Municipal Neihu Senior High School Chinese Music Club</h3></div>
                                </div>
                            </div>
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:30-20:00</div>
                                    <div class="event-details"><h3 class="event-title">Shimane Prefecture Tourism Mascot Shimanekko</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="day-group-card">
                        <h3 class="event-date-title">2026/03/10 (Tue.)</h3>
                        <div class="event-list">
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:00-19:30</div>
                                    <div class="event-details"><h3 class="event-title">Blooming Splendor Duet</h3></div>
                                </div>
                            </div>
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:30-20:00</div>
                                    <div class="event-details"><h3 class="event-title">JM Strings</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="day-group-card">
                        <h3 class="event-date-title">2026/03/11 (Wed.)</h3>
                        <div class="event-list">
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:00-19:30</div>
                                    <div class="event-details"><h3 class="event-title">TAIPEI DONUHU ELEMENTARY SCHOOL ORCHESTRA</h3></div>
                                </div>
                            </div>
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:30-20:00</div>
                                    <div class="event-details"><h3 class="event-title">New Century Culture Arts Group</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="day-group-card">
                        <h3 class="event-date-title">2026/03/12 (Thu.)</h3>
                        <div class="event-list">
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:00-19:30</div>
                                    <div class="event-details"><h3 class="event-title">Xing-An Elementary School Choir</h3></div>
                                </div>
                            </div>
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:30-20:00</div>
                                    <div class="event-details"><h3 class="event-title">WFKR</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="day-group-card">
                        <h3 class="event-date-title">2026/03/13 (Fri.)</h3>
                        <div class="event-list">
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:00-19:03</div>
                                    <div class="event-details"><h3 class="event-title">Main Lantern Show</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:03-19:30</div>
                                    <div class="event-details"><h3 class="event-title">AnnieTaco</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:30-19:33</div>
                                    <div class="event-details"><h3 class="event-title">Main Lantern Show</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:33-19:40</div>
                                    <div class="event-details"><h3 class="event-title">AnnieTaco</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:40-20:00</div>
                                    <div class="event-details"><h3 class="event-title">WoodyWoody Guitar Duo</h3></div>
                                </div>
                            </div>
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">20:00-20:03</div>
                                    <div class="event-details"><h3 class="event-title">Main Lantern Show</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:03-20:20</div>
                                    <div class="event-details"><h3 class="event-title">WoodyWoody Guitar Duo</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:20-20:30</div>
                                    <div class="event-details"><h3 class="event-title">PIA</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:30-20:33</div>
                                    <div class="event-details"><h3 class="event-title">Main Lantern Show</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:33-21:00</div>
                                    <div class="event-details"><h3 class="event-title">PIA</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="day-group-card">
                        <h3 class="event-date-title">2026/03/14 (Sat.)</h3>
                        <div class="event-list">
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">14:05-14:30</div>
                                    <div class="event-details"><h3 class="event-title">Richard Wang</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">14:30-14:50</div>
                                    <div class="event-details"><h3 class="event-title">You Xian</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">14:50-15:20</div>
                                    <div class="event-details"><h3 class="event-title">Jessica Cheng</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">15:20-16:00</div>
                                    <div class="event-details"><h3 class="event-title">Weaving Voices</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:00-19:03</div>
                                    <div class="event-details"><h3 class="event-title">Main Lantern Show</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:03-19:30</div>
                                    <div class="event-details"><h3 class="event-title">Hypersomnia</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:30-19:33</div>
                                    <div class="event-details"><h3 class="event-title">Main Lantern Show</h3></div>
                                </div>
                            </div>
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:33-19:50</div>
                                    <div class="event-details"><h3 class="event-title">Hypersomnia</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:50-20:00</div>
                                    <div class="event-details"><h3 class="event-title">CHENYO</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:00-20:03</div>
                                    <div class="event-details"><h3 class="event-title">Main Lantern Show</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:00-20:30</div>
                                    <div class="event-details"><h3 class="event-title">CHENYO</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:30-20:33</div>
                                    <div class="event-details"><h3 class="event-title">Main Lantern Show</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:33-21:00</div>
                                    <div class="event-details"><h3 class="event-title">Vicky</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="day-group-card">
                        <h3 class="event-date-title">2026/03/15 (Sun.)</h3>
                        <div class="event-list">
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">14:00-14:30</div>
                                    <div class="event-details"><h3 class="event-title">Hsu Wei-Ming</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">14:30-15:00</div>
                                    <div class="event-details"><h3 class="event-title">Chiang Yu-Ju</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">15:00-15:35</div>
                                    <div class="event-details"><h3 class="event-title">Sun Chen</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">15:35-16:00</div>
                                    <div class="event-details"><h3 class="event-title">Eric Lee</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:00-19:03</div>
                                    <div class="event-details"><h3 class="event-title">Main Lantern Show</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:03-19:30</div>
                                    <div class="event-details"><h3 class="event-title">It's Time to Play !</h3></div>
                                </div>
                            </div>
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:30-19:33</div>
                                    <div class="event-details"><h3 class="event-title">Main Lantern Show</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:33-20:00</div>
                                    <div class="event-details"><h3 class="event-title">Resonance vocal band</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:00-20:03</div>
                                    <div class="event-details"><h3 class="event-title">Main Lantern Show</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:03-20:30</div>
                                    <div class="event-details"><h3 class="event-title">Hsinhao</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:30-20:33</div>
                                    <div class="event-details"><h3 class="event-title">Main Lantern Show</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:33-21:00</div>
                                    <div class="event-details"><h3 class="event-title">Arrow Wei</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
<!-- 十二行政區活動 -->
            <div id="event3" class="tab-content">
                
                <div class="featured-event-card">
                    
                    <div class="featured-img-box">
                        <img src="../images/events/十二行政區熊讚.jpg" alt="十二行政區熊讚">
                    </div>

                    <div class="featured-content">
                        <h3 class="featured-title">12 Administrative Districts Joint Event</h3>
                        
                        <ul class="featured-info-list" style="padding: 20px;">
                            <li>
                                <span class="info-label">Event Location:ㅤ</span>
                                <span class="info-text">Taipei Expo Park Area</span>
                            </li>
                            <li>
                                <span class="info-label">Event Period:ㅤ</span>
                                <span class="info-text">Now until 2/24 (Tue) 23:59</span>
                            </li>
                            <li>
                                <span class="info-label">How to Participate:ㅤ</span>
                                <span class="info-text">Leave a comment under the designated post on the Bravo Facebook page and correctly guess the names of the districts shown for a chance to win a limited-edition Bravo Bear badge set.</span>
                            </li>
                            <li>
                                <span class="info-label">Lucky Draw Participation:ㅤ</span>
                                <span class="info-text" style="line-height: 1.8;">
                                    ➊ Follow the “Bravo” Facebook page.<br>
                                    ➋ Like and publicly share the designated post.<br>
                                    ➌ Comment with your answer: Which three administrative districts do the icons in the image represent? (order does not matter)
                                </span>
                            </li>
                            <li>
                                <span class="info-label">Prize:ㅤ</span>
                                <span class="info-text" style="font-weight: bold;">Bravo Badge Set (5 winners)</span>
                            </li>
                            <li>
                                <span class="info-label">Winner Announcement:ㅤ</span>
                                <span class="info-text">2/25</span>
                            </li>
                        </ul>
                        
                        <p class="info-note" style="text-align: center; max-width: 800px; line-height: 1.6;">
                            The organizer reserves the right to amend, change, interpret, or cancel the event. Any updates will be announced on the official Facebook page without further notice.
                        </p>

                    </div>
                </div>

            </div>
<!-- 咖啡首都嘉年華 -->
            <div id="event4" class="tab-content">

                <div class="featured-event-card">
                    
                    <div class="featured-img-box">
                        <img src="../images/events/coffe-capital-v2.jpg" alt="Coffee Capital Carnival">
                    </div>

                    <div class="featured-content">
                        <h3 class="featured-title">Coffee Capital Carnival </h3>
                        
                        <h4 class="featured-subtitle">Enjoy the Lantern Festival and Savor Premium Coffee: the “Coffee Capital Carnival” Kicks Off on 2/28 for Two Exciting Days</h4>
                        <h4 class="featured-subtitle">Limited Specialty Coffee and Desserts for Free Tasting, Complete the Stamp Challenge to Receive a Golden Cup Gift Box</h4><br>
                        <p class="featured-desc">
                            When light art meets the aroma of specialty coffee, the “2026 Taipei Lantern Festival ‧Coffee Capital Carnival” will be held for two days beginning February 28 at the plaza in front of Wanhua Station. The event brings together past Golden Cup Award-winning coffee brands, renowned local Wanhua establishments, and popular Taipei dessert brands to form the “Coffee Capital Specialty Market.” During the event, limited quantities of specialty coffee or desserts will be offered for complimentary tasting each day. Visitors who spend NT$499 or more may enter a prize draw for exquisite gifts and participate in hands-on coffee DIY activities. The carnival also connects with local hotels and businesses to launch “Wanhua Classics ‧ Let’s Celebrate,” along with the “Coffee Capital Dessert Map,” guiding visitors through Golden Cup cafés and featured dessert brands across the district.
                        </p>
                        
                        <ul class="featured-info-list">
                            <li>
                                <span class="info-label">2026 Taipei Lantern Festival · Coffee Capital Carnival: 　</span>
                                <span class="info-text">2/28-3/1｜14:00-21:00｜Plaza in front of Wanhua Station</span>
                            </li>
                            <li>
                                <span class="info-label">Coffee Capital Dessert Map: 　</span>
                                <span class="info-text">2/28-3/31</span>
                            </li>
                            <li>
                                <span class="info-label">Wanhua Classics ‧ Let’s Celebrate: 　</span>
                                <span class="info-text">2/28-3/1｜Wanhua District</span>
                            </li>
                        </ul>

                    </div>
                </div>

            </div>
<!-- 主題日活動 -->
            <div id="event5" class="tab-content">
                
                <h3 class="event-date-title">Lantern Festival Riddle Guessing</h3>
                <div class="event-list" style="display: block;">
                    <div class="event-item">
                        <div class="event-time minw-300">3/3 (Tue) 19:00 - 21:00</div>
                        <div class="event-details">
                            <h3 class="event-title">Lantern Festival Riddle Guessing</h3>
                            <p class="event-desc"><strong>Location:</strong> Booth next to the Service Counter, Expo Park Lantern Area & Booth next to Service Counter No. 1, Ximen Lantern Area (near the rear side of MRT Exit 6).</p>
                            <p class="event-desc"><strong>Details</strong> Line up on-site to spin the prize wheel and guess lantern riddles. Answer correctly to receive a convenience store gift card.</p>
                            <p class="event-desc" style="color: var(--accent-color); font-size: 0.9rem;">Limited quantities available while supplies last.</p>
                        </div>
                    </div>
                </div>

                <!-- <div class="event-gallery">
                    <div class="event-gallery-item">
                        <img src="../images/theme_lantern_riddle.jpg" alt="猜燈謎活動示意圖">
                    </div>
                    <div class="event-gallery-item">
                        <img src="../images/theme_wheel.jpg" alt="轉輪盤活動示意圖">
                    </div>
                </div> -->


                <h3 class="event-date-title">WBC World Baseball Classic - Cheer for Team Chinese Taipei</h3>
                <div class="event-list" style="display: block;">
                    <div class="event-item">
                        <div class="event-time minw-300" >3/5 (Thu) - 3/6 (Fri) 17:00-22:00<br>3/7 (Sat) - 3/8 (Sun) 14:00-22:00</div>
                        <div class="event-details">
                            <h3 class="event-title">WBC Team National Team Cheer Wall</h3>
                            <p class="event-desc"><strong>Location:</strong> Next to the lantern installation Home Run for Dreams in the Ximen Lantern Area</p>
                            <p class="event-desc"><strong>Details</strong> Sticky notes will be provided on-site. Visitors are invited to write messages of support and encouragement for Team Chinese Taipei.</p>
                        </div>
                    </div>
                    <div class="event-item">
                        <div class="event-time minw-300" >3/6 (Fri) 18:00 <br>until the end of the live broadcast</div>
                        <div class="event-details">
                            <h3 class="event-title">WBC live broadcast at Taipei Performing Arts Center - cheer and win prizes</h3>
                            <p class="event-desc"><strong>Location:</strong> Outdoor Plaza Broadcast Area, Taipei Performing Arts Center + Expo Park Lantern Area</p>
                            <p class="event-desc"><strong>Details</strong> On 3/6 (Fri), during the live WBC broadcast at the Taipei Performing Arts Center, visitors may collect a Taipei Lantern Festival raffle ticket at the service counter. Before 3/8 (Sun), visit the Expo Park Lantern Area to enjoy the lantern displays and present the ticket at the Information Desk (in front of the floral wall at Taipei Expo Park) to enter the prize draw.</p>
                            <p class="event-desc" style="color: var(--accent-color); font-size: 0.9rem;">Limited quantities available while supplies last.</p>
                        </div>
                    </div>
                </div>

                <!-- <div class="event-gallery">
                    <div class="event-gallery-item">
                        <img src="../images/theme_wbc_wall.jpg" alt="應援牆示意圖">
                    </div>
                    <div class="event-gallery-item">
                        <img src="../images/theme_wbc_broadcast.jpg" alt="戶外轉播示意圖">
                    </div>
                    <div class="event-gallery-item">
                        <img src="../images/theme_iphone.jpg" alt="抽獎獎品示意圖">
                    </div>
                </div> -->


                <h3 class="event-date-title">White Day</h3>
                <div class="event-list" style="display: block;">
                    <div class="event-item">
                        <div class="event-time minw-300" >3/13 (Fri) - 3/15 (Sun) <br>18:00 to 21:00</div>
                        <div class="event-details">
                            <h3 class="event-title">Photo Printing Experience & Ferrero Rocher Bouquet Giveaway</h3>
                            <p class="event-desc"><strong>Location:</strong> Booth next to the Transformers Main Lantern, Expo Park Lantern Area & Booth next to Service Counter No. 1, Ximen Lantern Area (near the rear side of MRT Exit 6) Target segment</p>
                            <p class="event-desc">1. <strong>Photo Printing Experience: </strong>Upload a photo taken with a lantern installation to receive one free festival-exclusive printed photo.</p>
                            <p class="event-desc" style="color: var(--accent-color); font-size: 0.9rem;">Limited to one per person.</p>
                            <p class="event-desc">2. <strong>Ferrero Rocher Bouquet Giveaway: </strong>Upload the printed photo to social media with the hashtag #2026TaipeiLanternFestival. After verification by staff, receive a Ferrero Rocher bouquet.</p>
                            <p class="event-desc" style="color: var(--accent-color); font-size: 0.9rem;">Limited to one per person while supplies last.</p>
                        </div>
                    </div>
                </div>

                <!-- <div class="event-gallery">
                    <div class="event-gallery-item">
                        <img src="../images/theme_photobooth.jpg" alt="印相機體驗示意圖">
                    </div>
                    <div class="event-gallery-item">
                        <img src="../images/theme_chocolate_flower.jpg" alt="金莎花束示意圖">
                    </div>
                </div> -->

            </div>

        </section>
    </main>

    <?php include 'footer.php'; ?>
    <script src="../js/script.js"></script>
</body>
</html>