<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <?php include 'header.php'; ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/pages.css">
    <link rel="stylesheet" href="../css/events.css">
</head>
<body>
    <?php include 'nav.php'; ?>

    <main class="container events-main">
        <section>
            <h2 class="section-title">精彩活動列表</h2>
            
            <div class="tab-buttons events-tab-wrapper">
                <!-- <button class="tab-btn active" onclick="openTab(event, 'event1')">Opening Ceremony</button> -->
                <button class="tab-btn active" onclick="openTab(event, 'event2')">Stage Performances</button>
                <button class="tab-btn" onclick="openTab(event, 'event3')">主題日</button>
            </div>

            <div id="event1" class="tab-content">
                <section class="coming-soon-block">
                    <h3 class="coming-soon-title">Coming Soon...</h3>
                    <img src="../images/comingsoon.jpg" alt="Coming Soon" class="coming-soon-img">
                </section>
            </div>

            <div id="event2" class="tab-content active">
                
                <div class="stage-intro-box">
                    <div class="stage-intro-row">
                        <span class="stage-intro-label">Date:</span>
                        <span>Feb 27 - Mar 15, 2026 (Fri, Sat, Sun)</span>
                    </div>
                    <div class="stage-intro-row">
                        <span class="stage-intro-label">Time:</span>
                        <span>19:00 - 21:00</span>
                    </div>
                    <div class="stage-intro-row">
                        <span class="stage-intro-label">Location:</span>
                        <span>Expo Area Main Stage</span>
                    </div>
                </div>

                <div class="events-masonry-grid">

                    <div class="day-group-card">
                        <h3 class="event-date-title">02/27 (Fri) A Night at the Circus</h3>
                        <div class="event-list">
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:00-19:40</div>
                                    <div class="event-details"><h3 class="event-title">Jurassic World – Age of Dinosaurs</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:40-20:20</div>
                                    <div class="event-details"><h3 class="event-title">Justin’s Magic Show</h3></div>
                                </div>
                            </div>
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">20:20-21:00</div>
                                    <div class="event-details"><h3 class="event-title">Cirque Éloize</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="day-group-card">
                        <h3 class="event-date-title">02/28 (Sat) Next Generation Bands</h3>
                        <div class="event-list">
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:00-19:40</div>
                                    <div class="event-details"><h3 class="event-title">Whoou!</h3><p class="event-desc">Taipei Street Hip Hop</p></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:40-20:20</div>
                                    <div class="event-details"><h3 class="event-title">Pallas</h3><p class="event-desc">Rock</p></div>
                                </div>
                            </div>
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">20:20-21:00</div>
                                    <div class="event-details"><h3 class="event-title">DrunkMonk</h3><p class="event-desc">Hard Rock</p></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="day-group-card">
                        <h3 class="event-date-title">03/01 (Sun) Voices of the People</h3>
                        <div class="event-list">
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:00-19:30</div>
                                    <div class="event-details"><h3 class="event-title">Chang Chia Hsin</h3><p class="event-desc">Super Hit Parade</p></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:30-20:00</div>
                                    <div class="event-details"><h3 class="event-title">Eason Wu</h3><p class="event-desc">Elf Boyfriend</p></div>
                                </div>
                            </div>
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">20:00-20:30</div>
                                    <div class="event-details"><h3 class="event-title">𝙆𝙀𝙯𝙄𝙉𝙀 and Z.ChUAN</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:30-21:00</div>
                                    <div class="event-details"><h3 class="event-title">Howard Wu</h3><p class="event-desc">Folk Legend</p></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="day-group-card">
                        <h3 class="event-date-title">03/06 (Fri) Rock Equation</h3>
                        <div class="event-list">
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:00-19:40</div>
                                    <div class="event-details"><h3 class="event-title">Badlarry</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:40-20:20</div>
                                    <div class="event-details"><h3 class="event-title">Pachila</h3></div>
                                </div>
                            </div>
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">20:20-21:00</div>
                                    <div class="event-details"><h3 class="event-title">P!SCO</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="day-group-card">
                        <h3 class="event-date-title">03/07 (Sat) Folk Club</h3>
                        <div class="event-list">
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:00-19:30</div>
                                    <div class="event-details"><h3 class="event-title">Chen-Fu Huang</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:30-20:00</div>
                                    <div class="event-details"><h3 class="event-title">Chen Jia Luo</h3></div>
                                </div>
                            </div>
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">20:00-20:30</div>
                                    <div class="event-details"><h3 class="event-title">Jerry Ku</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:30-21:00</div>
                                    <div class="event-details"><h3 class="event-title">Chou Mei-Ti</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="day-group-card">
                        <h3 class="event-date-title">03/08 (Sun) An Evening of Hip Hop</h3>
                        <div class="event-list">
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:00-19:40</div>
                                    <div class="event-details"><h3 class="event-title">Bad Man</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:40-20:20</div>
                                    <div class="event-details"><h3 class="event-title">DJ Lele</h3></div>
                                </div>
                            </div>
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">20:20-21:00</div>
                                    <div class="event-details"><h3 class="event-title">Banyan Gang</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="day-group-card">
                        <h3 class="event-date-title">03/13 (Fri) An Evening of Light Indie Pop</h3>
                        <div class="event-list">
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:00-19:30</div>
                                    <div class="event-details"><h3 class="event-title">Annie Taco</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:30-20:00</div>
                                    <div class="event-details"><h3 class="event-title">WoodyWoody</h3></div>
                                </div>
                            </div>
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">20:00-20:30</div>
                                    <div class="event-details"><h3 class="event-title">PiA</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="day-group-card">
                        <h3 class="event-date-title">03/14 (Sat) An Evening for Lovers</h3>
                        <div class="event-list">
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:00-19:50</div>
                                    <div class="event-details"><h3 class="event-title">Hypersomnia</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:50-20:30</div>
                                    <div class="event-details"><h3 class="event-title">Chenyo</h3></div>
                                </div>
                            </div>
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">20:30-21:00</div>
                                    <div class="event-details"><h3 class="event-title">Vicky Chen</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="day-group-card">
                        <h3 class="event-date-title">03/15 (Sun) Festival Finale</h3>
                        <div class="event-list">
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">19:00-19:30</div>
                                    <div class="event-details"><h3 class="event-title">Mario Game Time</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">19:30-20:00</div>
                                    <div class="event-details"><h3 class="event-title">Resonance</h3><p class="event-desc">A Cappella Vocal Group</p></div>
                                </div>
                            </div>
                            <div class="event-list-col">
                                <div class="event-item">
                                    <div class="event-time">20:00-20:30</div>
                                    <div class="event-details"><h3 class="event-title">Yoyo Song and Dance Show</h3></div>
                                </div>
                                <div class="event-item">
                                    <div class="event-time">20:30-21:00</div>
                                    <div class="event-details"><h3 class="event-title">Sun Son Theatre</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div id="event3" class="tab-content">
                
                <h3 class="event-date-title">March 3 (Tue) Lantern Festival Theme Day</h3>
                <div class="event-list" style="display: block;">
                    <div class="event-item">
                        <div class="event-time">16:30 ～ 20:40</div>
                        <div class="event-details">
                            <h3 class="event-title">Lantern Riddle Challenge</h3>
                            <p class="event-desc">Location: Taipei Expo Park, Yuanshan Park Stage</p>
                            <p class="event-desc">3 Sessions: 16:30-17:40, 18:00-19:10, 19:30-20:40</p>
                        </div>
                        <!-- <div><span class="tag-blue">On-site Registration</span></div> -->
                    </div>
                </div>

                <h3 class="event-date-title">March 13 (Fri) - March 15 (Sun) White Day Weekend</h3>
                <div class="event-list" style="display: block;">
                    <div class="event-item">
                        <div class="event-time">16:30 ～ 20:40</div>
                        <div class="event-details">
                            <h3 class="event-title">Pop-up Chocolate Booth</h3>
                            <p class="event-desc">Location: Next to the Service Desk, Ximen Lantern Area</p>
                        </div>
                        <!-- <div><span class="tag-blue">Check-in Giveaway</span></div> -->
                    </div>
                </div>

                <h3 class="event-date-title">March 2 (Mon) - March 17 (Tue) WBC Theme Days</h3>
                <div class="event-list" style="display: block;">
                    <div class="event-item">
                        <div class="event-time">17:00 ～ 21:00</div>
                        <div class="event-details">
                            <h3 class="event-title">Fan Support Events</h3>
                            <p class="event-desc">Location: Ximen Lantern Area</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </main>
  
    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>