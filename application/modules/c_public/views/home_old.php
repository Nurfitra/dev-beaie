
<body>
    <header class="site-header">
        <div class="container">
            <div class="header-content">
                <img src="assets/LOGO RFC.jpeg" style="height:100px;">
                <div class="top-menu  scroll-reveal">
                    <div class="menu">
                        <div class="title-bar" data-responsive-toggle="main-nav" data-hide-for="medium">
                            <button class="menu-icon dark" type="button" data-toggle="main-nav"></button>
                            <div class="title-bar-title">Menu</div>
                        </div>

                        <nav id="main-nav" data-animate="menu-in menu-out">
                            <ul class="main-navigation">
                                <li><a class="m-active" href="#" data-text="Home">Home</a></li>
                                <li><a class="m-anim" href="#about-us" data-text="About">Tentang</a></li>
                                <li><a class="m-anim" href="#news" data-text="Specials">Berita</a></li>
                                <li><a class="m-anim" href="#activity-section" data-text="Specials">Kegiatan</a></li>
                                <li><a class="m-anim" href="#gallery-section" data-text="Specials">Gallery</a></li>
                                <li><a class="m-anim" href="#contact-us" data-text="Contact">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider">
            <?php $no=1; foreach ($slider->result() as $row) { ?>
            <div class="a-slide slide<?=$no;?>">
                <div class="container">
                    <div class="bottom-section scroll-reveal" data-origin="right" data-distance="20%">
                        <h2 class="header-txt"><?=$this->session->userdata('lang') == 'id' ? $row->slider_desc_id : $row->slider_desc_en;?></h2>
                        <div class="divider">
                            <?php echo '<?xml version="1.0" encoding="UTF-8"?>';?>
                            <!-- Generator: Adobe Illustrator 21.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1930 255.5" style="enable-background:new 0 0 1930 255.5;" xml:space="preserve">
                                <style type="text/css">
                                    .st0{fill:none;stroke:#ffffff;stroke-width:10;stroke-linecap:square;stroke-miterlimit:10;}
                                </style>
                                <polyline class="st0" points="1224,171.8 1181.3,171.8 1139.2,129.6 1065,203.9 970.5,110.4 876,203.6 801.8,129.4 759.7,171.5 
                                    717,171.5 "/>
                                <polyline class="st0" points="5,131.5 757.3,131.5 801.8,176.1 885.9,91.9 868.3,74.2 831.5,111 870.4,149.9 970.2,50.2 1070,149.9 
                                    1108.8,111 1072.1,74.2 1054.4,91.9 1138.5,176.1 1183.1,131.5 1925,131.5 "/>
                                <rect x="921.9" y="26.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 231.426 707.2043)" class="st0" width="95" height="95"/>
                                <rect x="921.9" y="99.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 179.8072 728.5855)" class="st0" width="95" height="95"/>
                                <rect x="940.3" y="178.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 137.3893 746.1556)" class="st0" width="58.2" height="58.2"/>
                                </svg>                            
                        </div>
                        <!--.divider-->

                    </div>
                    <!--.bottom-section-->
                </div>
            </div>
            <?php $no++;} ?>
        </div>

    </header>

 <!--    <section class="category-icons">
     <div class="container">
         <div class="yellow-content">
             <div class="icon">
                 <img class="scroll-reveal" data-origin="top" data-distance="20%" src="assets/icon-vege.svg" />
                 <h3 class="scroll-reveal" data-origin="top" data-distance="20%">Turnip greens</h3>
                 <p class="scroll-reveal" data-distance="0" data-duration="500">Turnip greens yarrow ricebean rutabaga endive cauliflower sea lettuce kohlrabi amaranth water spinach avocado daikon napa cabbage.</p>
             </div>
             <div class="icon">
                 <img class="scroll-reveal" data-origin="top" data-distance="20%" src="assets/icon-coffee.svg" />
                 <h3 class="scroll-reveal" data-origin="top" data-distance="20%">beetroot water</h3>
                 <p class="scroll-reveal" data-distance="0" data-duration="700">Nori grape silver beet broccoli kombu beet greens fava bean potato quandong celery. Bunya nuts black-eyed pea prairie turnip leek.</p>
             </div>
             <div class="icon">
                 <img class="scroll-reveal" data-origin="top" data-distance="20%" src="assets/icon-sweet.svg" />
                 <h3 class="scroll-reveal" data-origin="top" data-distance="20%">get social</h3>
                 <p class="scroll-reveal" data-distance="0" data-duration="900">Pea horseradish azuki bean lettuce avocado asparagus okra. Kohlrabi radish okra azuki bean corn fava bean mustard tigernut jícama.</p>
             </div>
         </div>          
         .yellow-content
     </div>
     .container
 </section> -->
    <!--.category-icons-->
<!-- 
    <section id="specials-grid" class="month-specials" data-scroll-reveal="enter from the bottom after 0.9s">
        <div class="container">
            <h1 class="header-txt">This month specials</h1>
            <div class="divider">
                <?php echo '<?xml version="1.0" encoding="UTF-8"?>';?>
                Generator: Adobe Illustrator 21.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1930 255.5" style="enable-background:new 0 0 1930 255.5;" xml:space="preserve">
                                <style type="text/css">
                                    .st0{fill:none;stroke:#3c3c3c;stroke-width:10;stroke-linecap:square;stroke-miterlimit:10;}
                                </style>
                                <polyline class="st0" points="1224,171.8 1181.3,171.8 1139.2,129.6 1065,203.9 970.5,110.4 876,203.6 801.8,129.4 759.7,171.5 
                                    717,171.5 "/>
                                <polyline class="st0" points="5,131.5 757.3,131.5 801.8,176.1 885.9,91.9 868.3,74.2 831.5,111 870.4,149.9 970.2,50.2 1070,149.9 
                                    1108.8,111 1072.1,74.2 1054.4,91.9 1138.5,176.1 1183.1,131.5 1925,131.5 "/>
                                <rect x="921.9" y="26.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 231.426 707.2043)" class="st0" width="95" height="95"/>
                                <rect x="921.9" y="99.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 179.8072 728.5855)" class="st0" width="95" height="95"/>
                                <rect x="940.3" y="178.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 137.3893 746.1556)" class="st0" width="58.2" height="58.2"/>
                                </svg>
            </div>
            .divider
            <div class="specials-content">
                <div class="special">
                    <div class="special-img img-01">
                        <img src="assets/img/special-1.png" />
                    </div>
                    <div class="special-items spec-01">
                        <h2 class="scroll-reveal" data-origin="top" data-distance="20%">Greens fava</h2>
                        <span class="line scroll-reveal" data-origin="top" data-distance="20%"></span>
                        <p class="scroll-reveal" data-origin="bottom" data-distance="30%">Nori grape silver beet broccoli kombu beet greens fava</p>
                        <span class="scroll-reveal" data-origin="bottom" data-distance="60%">19$</span>
                    </div>
                </div>
                .special
                <div class="special">
                    <div class="special-img img-02">
                        <img src="assets/img/special-2.png" />
                    </div>
                    <div class="special-items spec-02">
                        <h2 class="scroll-reveal" data-origin="top" data-distance="20%">Celery quand</h2>
                        <span class="line scroll-reveal" data-origin="top" data-distance="20%"></span>
                        <p class="scroll-reveal" data-origin="bottom" data-distance="30%">Celery quandong swiss chard chicory earthnut pea</p>
                        <span class="scroll-reveal" data-origin="bottom" data-distance="60%">18$</span>
                    </div>
                </div>
                .special
                <div class="special">
                    <div class="special-img img-03">
                        <img src="assets/img/special-3.png" />
                    </div>
                    <div class="special-items spec-03">
                        <h2 class="scroll-reveal" data-origin="top" data-distance="20%">Pea horser</h2>
                        <span class="line scroll-reveal" data-origin="top" data-distance="20%"></span>
                        <p class="scroll-reveal" data-origin="bottom" data-distance="30%">Kohlrabi radish okra azuki bean corn fava bean mustard</p>
                        <span class="scroll-reveal" data-origin="bottom" data-distance="60%">7$</span>
                    </div>
                </div>
                .special
                <div class="special">
                    <div class="special-items spec-04">
                        <h2 class="scroll-reveal" data-origin="top" data-distance="20%">Soko radicchio</h2>
                        <span class="line scroll-reveal" data-origin="top" data-distance="20%"></span>
                        <p class="scroll-reveal" data-origin="bottom" data-distance="30%">Dandelion zucchini burdock yarrow chickpea dandelion</p>
                        <span class="scroll-reveal" data-origin="bottom" data-distance="60%">25$</span>
                    </div>
                    <div class="special-img img-04">
                        <img src="assets/img/special-4.png" />
                    </div>
                </div>
                .special
                <div class="special">
                    <div class="special-items spec-05">
                        <h2 class="scroll-reveal" data-origin="top" data-distance="20%">Tigernut</h2>
                        <span class="line scroll-reveal" data-origin="top" data-distance="20%"></span>
                        <p class="scroll-reveal" data-origin="bottom" data-distance="30%">Grape silver beet watercress potato tigernut</p>
                        <span class="scroll-reveal" data-origin="bottom" data-distance="60%">14$</span>
                    </div>
                    <div class="special-img img-05">
                        <img src="assets/img/special-5.png" />
                    </div>
                </div>
                .special
                <div class="special">
                    <div class="special-items spec-06">
                        <h2 class="scroll-reveal" data-origin="top" data-distance="20%">Yarrow sweet</h2>
                        <span class="line scroll-reveal" data-origin="top" data-distance="20%"></span>
                        <p class="scroll-reveal" data-origin="bottom" data-distance="30%">Gumbo kakadu plum komatsuna black-eyed pea green</p>
                        <span class="scroll-reveal" data-origin="bottom" data-distance="60%">8$</span>
                    </div>
                    <div class="special-img img-06">
                        <img src="assets/img/special-6.png" />
                    </div>
                </div>
                .special
            </div>
            .specials-content
        </div>
        .container
    </section> -->
    <!--.month-specials-->

    <section id="about-us" class="about">
        <div class="container">
            <div class="about-content">
                <h1 class="header-txt scroll-reveal"><?=$this->session->userdata('lang') == 'id' ? 'Profil <span>Perusahaan</span>' : 'Company <span> Profile</span>';?></h1>
                <div class="divider scroll-reveal">
                    <?php echo '<?xml version="1.0" encoding="UTF-8"?>';?>
                    <!-- Generator: Adobe Illustrator 21.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1930 255.5" style="enable-background:new 0 0 1930 255.5;" xml:space="preserve">
                                <style type="text/css">
                                    .st0{fill:none;stroke:#3c3c3c;stroke-width:10;stroke-linecap:square;stroke-miterlimit:10;}
                                </style>
                                <polyline class="st0" points="1224,171.8 1181.3,171.8 1139.2,129.6 1065,203.9 970.5,110.4 876,203.6 801.8,129.4 759.7,171.5 
                                    717,171.5 "/>
                                <polyline class="st0" points="5,131.5 757.3,131.5 801.8,176.1 885.9,91.9 868.3,74.2 831.5,111 870.4,149.9 970.2,50.2 1070,149.9 
                                    1108.8,111 1072.1,74.2 1054.4,91.9 1138.5,176.1 1183.1,131.5 1925,131.5 "/>
                                <rect x="921.9" y="26.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 231.426 707.2043)" class="st0" width="95" height="95"/>
                                <rect x="921.9" y="99.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 179.8072 728.5855)" class="st0" width="95" height="95"/>
                                <rect x="940.3" y="178.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 137.3893 746.1556)" class="st0" width="58.2" height="58.2"/>
                                </svg>
                </div>
                <!--.divider-->
                <p class="scroll-reveal" data-origin="top" data-distance="2%"><?=$this->session->userdata('lang') == 'id' ? $profile->row('profile_id') : $profile->row('profile_en');?></p>
                <br/>
                <!-- <img class="signature scroll-reveal" data-origin="right" data-distance="20%" src="assets/signature.png" /> -->
            </div>
        </div>
        <!--.container-->
    </section>
    <!--.about-->
    
    <section class="category-icons" id="gallery-section">
        <div class="container">
            <br/>
            <h1 class="header-txt"><?=$this->session->userdata('lang') == 'id' ? '<span> Galeri</span>' : '<span> Gallery</span>';?></h1>
            <div class="divider scroll-reveal">
                <?php echo '<?xml version="1.0" encoding="UTF-8"?>';?>
                <!-- Generator: Adobe Illustrator 21.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1930 255.5" style="enable-background:new 0 0 1930 255.5;" xml:space="preserve">
                            <style type="text/css">
                                .st0{fill:none;stroke:#3c3c3c;stroke-width:10;stroke-linecap:square;stroke-miterlimit:10;}
                            </style>
                            <polyline class="st0" points="1224,171.8 1181.3,171.8 1139.2,129.6 1065,203.9 970.5,110.4 876,203.6 801.8,129.4 759.7,171.5 
                                717,171.5 "/>
                            <polyline class="st0" points="5,131.5 757.3,131.5 801.8,176.1 885.9,91.9 868.3,74.2 831.5,111 870.4,149.9 970.2,50.2 1070,149.9 
                                1108.8,111 1072.1,74.2 1054.4,91.9 1138.5,176.1 1183.1,131.5 1925,131.5 "/>
                            <rect x="921.9" y="26.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 231.426 707.2043)" class="st0" width="95" height="95"/>
                            <rect x="921.9" y="99.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 179.8072 728.5855)" class="st0" width="95" height="95"/>
                            <rect x="940.3" y="178.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 137.3893 746.1556)" class="st0" width="58.2" height="58.2"/>
                            </svg>
            </div>
            <div class="yellow-content">
                <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:480px;overflow:hidden;visibility:hidden;">
                    <!-- Loading Screen -->
                    <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="assets/img/slider/spin.svg" />
                    </div>
                    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
                        <?php foreach ($gallery_img->result() as $row) { ?>
                            <div>
                                <img data-u="image" src="<?=base_url('uploads');?>/<?=$row->image;?>" />
                                <img data-u="thumb" src="<?=base_url('uploads');?>/<?=$row->image;?>" />
                            </div>
                        <?php } ?>
                    </div>
                    <!-- Thumbnail Navigator -->
                    <div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;bottom:0px;width:980px;height:100px;background-color:#000;" data-autocenter="1" data-scale-bottom="0.75">
                        <div data-u="slides">
                            <div data-u="prototype" class="p" style="width:190px;height:90px;">
                                <div data-u="thumbnailtemplate" class="t"></div>
                                <svg viewbox="0 0 16000 16000" class="cv">
                                    <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                                    <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                                    <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <!-- Arrow Navigator -->
                    <div data-u="arrowleft" class="jssora106" style="width:55px;height:55px;top:162px;left:30px;" data-scale="0.75">
                        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                            <polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
                            <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
                        </svg>
                    </div>
                    <div data-u="arrowright" class="jssora106" style="width:55px;height:55px;top:162px;right:30px;" data-scale="0.75">
                        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                            <polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
                            <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
                        </svg>
                    </div>
                </div>
                <script type="text/javascript">jssor_1_slider_init();</script>          
            </div>          
            <!--.gallery-content-->
        </div>
        <!--.container-->
    </section>
    <!--.category-icons-->  

    <!-- <section id="main-menu" class="menu-cart scroll-reveal">
        <div class="container">
            <h1 class="header-txt">Menu Cart</h1>
            <div class="divider">
                <?php echo '<?xml version="1.0" encoding="UTF-8"?>';?>
                Generator: Adobe Illustrator 21.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1930 255.5" style="enable-background:new 0 0 1930 255.5;" xml:space="preserve">
                                <style type="text/css">
                                    .st0{fill:none;stroke:#3c3c3c;stroke-width:10;stroke-linecap:square;stroke-miterlimit:10;}
                                </style>
                                <polyline class="st0" points="1224,171.8 1181.3,171.8 1139.2,129.6 1065,203.9 970.5,110.4 876,203.6 801.8,129.4 759.7,171.5 
                                    717,171.5 "/>
                                <polyline class="st0" points="5,131.5 757.3,131.5 801.8,176.1 885.9,91.9 868.3,74.2 831.5,111 870.4,149.9 970.2,50.2 1070,149.9 
                                    1108.8,111 1072.1,74.2 1054.4,91.9 1138.5,176.1 1183.1,131.5 1925,131.5 "/>
                                <rect x="921.9" y="26.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 231.426 707.2043)" class="st0" width="95" height="95"/>
                                <rect x="921.9" y="99.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 179.8072 728.5855)" class="st0" width="95" height="95"/>
                                <rect x="940.3" y="178.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 137.3893 746.1556)" class="st0" width="58.2" height="58.2"/>
                                </svg>
            </div>
            .divider
            <ul class="menu-navigation" data-tabs data-match-height="true" id="example-tabs">
                <li class="tabs-title is-active"><a class="m-anim" href="#panel1" aria-selected="true" data-text="Starters">Starters</a></li>
                <li class="tabs-title"><a class="m-anim" data-tabs-target="panel2" href="#panel2" data-text="Main Dishes">Main Dishes</a></li>
                <li class="tabs-title"><a class="m-anim" data-tabs-target="panel3" href="#panel3" data-text="Desserts">Desserts</a></li>
                <li class="tabs-title"><a class="m-anim" data-tabs-target="panel4" href="#panel4" data-text="Drinks">Drinks</a></li>
            </ul>
    
            <div class="tabs-content" data-tabs-content="example-tabs">
                <div class="tabs-panel is-active" id="panel1">
                    <div class="menu-content">
                        <div class="menu-section">
                            <table>
                                <tr>
                                    <td><span>SMOKED RICOTTA TERRINE</span></td>
                                    <td><span>$12</span></td>
                                </tr>
                                <tr>
                                    <td>ricotta, shallots, cheddar, capers</td>
                                </tr>
                                <tr>
                                    <td><span>SAMPHIRE FRITTERS WITH FENNEL CEVICHE </span></td>
                                    <td><span>$19</span></td>
                                </tr>
                                <tr>
                                    <td>fresh samphire, plain flour, cornflower, eggs, fennel</td>
                                </tr>
                                <tr>
                                    <td><span>PAN FRIED COURGETTE FLOWERS</span></td>
                                    <td><span>$13</span></td>
                                </tr>
                                <tr>
                                    <td>courgette flowers, goats cheese, red onion, pine nuts</td>
                                </tr>
                                <tr>
                                    <td><span>SMOKED RICOTTA TERRINE</span></td>
                                    <td><span>$12</span></td>
                                </tr>
                                <tr>
                                    <td>ricotta, shallots, cheddar, capers</td>
                                </tr>
                                <tr>
                                    <td><span>PAN FRIED COURGETTE FLOWERS</span></td>
                                    <td><span>$11</span></td>
                                </tr>
                                <tr>
                                    <td>courgette flowers, goats cheese, red onion, pine nuts</td>
                                </tr>
                                <tr>
                                    <td><span>FRIED COURGETTE FLOWERS</span></td>
                                    <td><span>$16</span></td>
                                </tr>
                                <tr>
                                    <td>courgette flowers, goats cheese, red onion, pine nuts</td>
                                </tr>
                            </table>
                        </div>
                        .menu-section
                        <div class="menu-section">
                            <table>
                                <tr>
                                    <td><span>SMOKED RICOTTA TERRINE</span></td>
                                    <td><span>$12</span></td>
                                </tr>
                                <tr>
                                    <td>ricotta, shallots, cheddar, capers</td>
                                </tr>
                                <tr>
                                    <td><span>SAMPHIRE FRITTERS WITH FENNEL CEVICHE </span></td>
                                    <td><span>$19</span></td>
                                </tr>
                                <tr>
                                    <td>fresh samphire, plain flour, cornflower, eggs, fennel</td>
                                </tr>
                                <tr>
                                    <td><span>PAN FRIED COURGETTE FLOWERS</span></td>
                                    <td><span>$13</span></td>
                                </tr>
                                <tr>
                                    <td>courgette flowers, goats cheese, red onion, pine nuts</td>
                                </tr>
                                <tr>
                                    <td><span>SMOKED RICOTTA TERRINE</span></td>
                                    <td><span>$12</span></td>
                                </tr>
                                <tr>
                                    <td>ricotta, shallots, cheddar, capers</td>
                                </tr>
                                <tr>
                                    <td><span>PAN FRIED COURGETTE FLOWERS</span></td>
                                    <td><span>$11</span></td>
                                </tr>
                                <tr>
                                    <td>courgette flowers, goats cheese, red onion, pine nuts</td>
                                </tr>
                                <tr>
                                    <td><span>PAN FRIED COURGETTE FLOWERS</span></td>
                                    <td><span>$16</span></td>
                                </tr>
                                <tr>
                                    <td>courgette flowers, goats cheese, red onion, pine nuts</td>
                                </tr>
                            </table>
                        </div>
                        .menu-section
                    </div>
                    .menu-content
                </div>
                #panel1
    
                <div class="tabs-panel" id="panel2">
                    <div class="menu-content">
                        <div class="menu-section">
                            <table>
                                <tr>
                                    <td><span>SAMPHIRE FRITTERS WITH FENNEL CEVICHE </span></td>
                                    <td><span>$19</span></td>
                                </tr>
                                <tr>
                                    <td>fresh samphire, plain flour, cornflower, eggs, fennel</td>
                                </tr>
                                <tr>
                                    <td><span>PAN FRIED COURGETTE FLOWERS</span></td>
                                    <td><span>$13</span></td>
                                </tr>
                                <tr>
                                    <td>courgette flowers, goats cheese, red onion, pine nuts</td>
                                </tr>
                                <tr>
                                    <td><span>SMOKED RICOTTA TERRINE</span></td>
                                    <td><span>$12</span></td>
                                </tr>
                                <tr>
                                    <td>ricotta, shallots, cheddar, capers</td>
                                </tr>
                                <tr>
                                    <td><span>PAN FRIED COURGETTE FLOWERS</span></td>
                                    <td><span>$11</span></td>
                                </tr>
                                <tr>
                                    <td>courgette flowers, goats cheese, red onion, pine nuts</td>
                                </tr>
                                <tr>
                                    <td><span>PAN FRIED COURGETTE FLOWERS</span></td>
                                    <td><span>$16</span></td>
                                </tr>
                                <tr>
                                    <td>courgette flowers, goats cheese, red onion, pine nuts</td>
                                </tr>
                            </table>
                        </div>
                        .menu-section
                        <div class="menu-section">
                            <table>
                                <tr>
                                    <td><span>SAMPHIRE FRITTERS WITH FENNEL CEVICHE </span></td>
                                    <td><span>$19</span></td>
                                </tr>
                                <tr>
                                    <td>fresh samphire, plain flour, cornflower, eggs, fennel</td>
                                </tr>
                                <tr>
                                    <td><span>PAN FRIED COURGETTE FLOWERS</span></td>
                                    <td><span>$13</span></td>
                                </tr>
                                <tr>
                                    <td>courgette flowers, goats cheese, red onion, pine nuts</td>
                                </tr>
                                <tr>
                                    <td><span>SMOKED RICOTTA TERRINE</span></td>
                                    <td><span>$12</span></td>
                                </tr>
                                <tr>
                                    <td>ricotta, shallots, cheddar, capers</td>
                                </tr>
                                <tr>
                                    <td><span>PAN FRIED COURGETTE FLOWERS</span></td>
                                    <td><span>$11</span></td>
                                </tr>
                                <tr>
                                    <td>courgette flowers, goats cheese, red onion, pine nuts</td>
                                </tr>
                                <tr>
                                    <td><span>PAN FRIED COURGETTE FLOWERS</span></td>
                                    <td><span>$16</span></td>
                                </tr>
                                <tr>
                                    <td>courgette flowers, goats cheese, red onion, pine nuts</td>
                                </tr>
                            </table>
                        </div>
                        .menu-section
                    </div>
                    .menu-content
                </div>
                #panel2
    
                <div class="tabs-panel" id="panel3">
                    <div class="menu-content">
                        <div class="menu-section">
                            <table>
    
                                <tr>
                                    <td><span>SMOKED RICOTTA TERRINE</span></td>
                                    <td><span>$12</span></td>
                                </tr>
                                <tr>
                                    <td>ricotta, shallots, cheddar, capers</td>
                                </tr>
                                <tr>
                                    <td><span>PAN FRIED COURGETTE FLOWERS</span></td>
                                    <td><span>$11</span></td>
                                </tr>
                                <tr>
                                    <td>courgette flowers, goats cheese, red onion, pine nuts</td>
                                </tr>
                                <tr>
                                    <td><span>COURGETTE FLOWERS</span></td>
                                    <td><span>$16</span></td>
                                </tr>
                                <tr>
                                    <td>courgette flowers, goats cheese, red onion, pine nuts</td>
                                </tr>
                            </table>
                        </div>
                        .menu-section
                        <div class="menu-section">
                            <table>
                                <tr>
                                    <td><span>SMOKED RICOTTA TERRINE</span></td>
                                    <td><span>$12</span></td>
                                </tr>
                                <tr>
                                    <td>ricotta, shallots, cheddar, capers</td>
                                </tr>
                                <tr>
                                    <td><span>PAN FRIED COURGETTE FLOWERS</span></td>
                                    <td><span>$11</span></td>
                                </tr>
                                <tr>
                                    <td>courgette flowers, goats cheese, red onion, pine nuts</td>
                                </tr>
                                <tr>
                                    <td><span>FRIED COURGETTE FLOWERS</span></td>
                                    <td><span>$16</span></td>
                                </tr>
                                <tr>
                                    <td>courgette flowers, goats cheese, red onion, pine nuts</td>
                                </tr>
                            </table>
                        </div>
                        .menu-section
                    </div>
                    .menu-content
                </div>
                #panel3
    
                <div class="tabs-panel" id="panel4">
                    <div class="menu-content">
                        <div class="menu-section">
                            <table>
                                <tr>
                                    <td><span>COURGETTE FLOWERS</span></td>
                                    <td><span>$11</span></td>
                                </tr>
                                <tr>
                                    <td>courgette flowers, goats cheese, red onion, pine nuts</td>
                                </tr>
                                <tr>
                                    <td><span>SMOKED RICOTTA TERRINE</span></td>
                                    <td><span>$12</span></td>
                                </tr>
                                <tr>
                                    <td>ricotta, shallots, cheddar, capers</td>
                                </tr>
                            </table>
                        </div>
                        .menu-section
                        <div class="menu-section">
                            <table>
                                <tr>
                                    <td><span>COURGETTE FLOWERS</span></td>
                                    <td><span>$11</span></td>
                                </tr>
                                <tr>
                                    <td>courgette flowers, goats cheese, red onion, pine nuts</td>
                                </tr>
                                <tr>
                                    <td><span>SMOKED RICOTTA TERRINE</span></td>
                                    <td><span>$12</span></td>
                                </tr>
                                <tr>
                                    <td>ricotta, shallots, cheddar, capers</td>
                                </tr>
                            </table>
                        </div>
                        .menu-section
                    </div>
                    .menu-content
                </div>
                #panel4
    
            </div>
        </div>
        .container
    </section> -->
    <!--.menu-cart-->

    <section class="menu-cart scroll-reveal" id="news">
        <div class="container" style="padding-left:100px;padding-right:100px;">
            <br/>
            <h1 class="header-txt"><?=$this->session->userdata('lang') == 'id' ? '<span>Berita</span>' : '<span>News</span>';?></h1>
            <div class="divider scroll-reveal">
                <?php echo '<?xml version="1.0" encoding="UTF-8"?>';?>
                <!-- Generator: Adobe Illustrator 21.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1930 255.5" style="enable-background:new 0 0 1930 255.5;" xml:space="preserve">
                            <style type="text/css">
                                .st0{fill:none;stroke:#3c3c3c;stroke-width:10;stroke-linecap:square;stroke-miterlimit:10;}
                            </style>
                            <polyline class="st0" points="1224,171.8 1181.3,171.8 1139.2,129.6 1065,203.9 970.5,110.4 876,203.6 801.8,129.4 759.7,171.5 
                                717,171.5 "/>
                            <polyline class="st0" points="5,131.5 757.3,131.5 801.8,176.1 885.9,91.9 868.3,74.2 831.5,111 870.4,149.9 970.2,50.2 1070,149.9 
                                1108.8,111 1072.1,74.2 1054.4,91.9 1138.5,176.1 1183.1,131.5 1925,131.5 "/>
                            <rect x="921.9" y="26.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 231.426 707.2043)" class="st0" width="95" height="95"/>
                            <rect x="921.9" y="99.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 179.8072 728.5855)" class="st0" width="95" height="95"/>
                            <rect x="940.3" y="178.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 137.3893 746.1556)" class="st0" width="58.2" height="58.2"/>
                            </svg>
            </div>
            <div class="container-fluid">
                <div class="row">                    
                <?php foreach($news->result() as $row) { ?>
                   <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="<?=base_url('uploads/'.$row->news_img);?>" alt="<?=$this->session->userdata('lang') == 'id' ? $row->news_title_id : $row->news_title_en;?>">
                      <div class="caption">
                        <h3><a href="<?=base_url('news/detail/'.$row->id_news);?>"><?=$this->session->userdata('lang') == 'id' ? $row->news_title_id : $row->news_title_en;?></a></h3>
                        <p><?=character_limiter(strip_tags($this->session->userdata('lang') == 'id' ? $row->news_desc_id : $row->news_desc_en), 120);?></p>
                        <p><a href="<?=base_url('news/detail/'.$row->id_news);?>" class="btn btn-primary" role="button">Readmore</a></p>
                      </div>
                    </div>
                  </div>
                <?php } ?>

                </div>
            </div>

        </div>
        <!--.container-->
    </section>
    
    <!--.activity-section-->
    <section class="category-icons1" id="activity-section">
        <div class="container" style="padding-left:100px;padding-right:100px;">
            <br/>
            <h1 class="header-txt">Activity</h1>
            <div class="divider scroll-reveal">
                <?php echo '<?xml version="1.0" encoding="UTF-8"?>';?>
                <!-- Generator: Adobe Illustrator 21.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1930 255.5" style="enable-background:new 0 0 1930 255.5;" xml:space="preserve">
                            <style type="text/css">
                                .st0{fill:none;stroke:#3c3c3c;stroke-width:10;stroke-linecap:square;stroke-miterlimit:10;}
                            </style>
                            <polyline class="st0" points="1224,171.8 1181.3,171.8 1139.2,129.6 1065,203.9 970.5,110.4 876,203.6 801.8,129.4 759.7,171.5 
                                717,171.5 "/>
                            <polyline class="st0" points="5,131.5 757.3,131.5 801.8,176.1 885.9,91.9 868.3,74.2 831.5,111 870.4,149.9 970.2,50.2 1070,149.9 
                                1108.8,111 1072.1,74.2 1054.4,91.9 1138.5,176.1 1183.1,131.5 1925,131.5 "/>
                            <rect x="921.9" y="26.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 231.426 707.2043)" class="st0" width="95" height="95"/>
                            <rect x="921.9" y="99.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 179.8072 728.5855)" class="st0" width="95" height="95"/>
                            <rect x="940.3" y="178.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 137.3893 746.1556)" class="st0" width="58.2" height="58.2"/>
                            </svg>
            </div>
            <div class="activity">
          <?php foreach ($activity_img->result() as $row) { ?>
              <div style="overflow: hidden;position: relative;height: 400px;text-align: center;"><img style="display: block;margin-left: auto;margin-right: auto;" src="<?=base_url('uploads');?>/<?=$row->image;?>" title="<?=$this->session->userdata('lang') == 'id' ? $img->get_desc_activity($row->id_activity)->row('activity_title_id') : $img->get_desc_activity($row->id_activity)->row('activity_title_en');?>"></div>
          <?php } ?>
            </div>          
        </div>
        <!--.container-->
    </section>
    <!--.category-icons-->  

    <a href="#0" class="cd-top">Top</a>