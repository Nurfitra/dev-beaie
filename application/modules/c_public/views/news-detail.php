    <section class="menu-cart scroll-reveal" id="news">
        <div class="container" style="padding-left:100px;padding-right:100px;">
            <br/>
            <h1 class="header-txt"><?=$this->session->userdata('lang') == 'id' ? $news->row('news_title_id') : $news->row('news_title_en');?></h1>
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
                  <div class="col-sm-6 col-md-12">
          <p><?=$this->session->userdata('lang') == 'id' ? $news->row('news_desc_id') : $news->row('news_desc_en');?></p>
                  </div>

                </div>
            </div>

        </div>
        <!--.container-->
    </section>
