<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raja Fried Chicken</title>
    <link rel="stylesheet" href="<?=base_url('assets');?>/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url('assets');?>/css/app.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.css" />
    <script src="https://unpkg.com/scrollreveal@4.0.0-beta.6"></script>
  <script src="<?=base_url('assets');?>/js/jssor.slider-27.4.0.min.js" type="text/javascript"></script>
  <script src="<?=base_url('assets');?>/js/jssor-slider.js" type="text/javascript"></script>
  <link rel="stylesheet" href="<?=base_url('assets');?>/css/jssor-slider.css">
  <link rel="stylesheet" href="<?=base_url('assets');?>/css/jquery.bxslider.css">
  <style type="text/css">
  <?php $no=1; foreach ($slider->result() as $row) { ?>
  .slider .slick-track .slide<?=$no;?> .container{
    height: 100%;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-flow: row wrap;
    flex-flow: row wrap;
    -ms-flex-pack: center;
    justify-content: center;
    color:#fff;
  }
@media screen and (max-width: 63.9375em) {
    .slider .slick-track .slide<?=$no;?> .container{
    background: rgba(255, 255, 255, 0.5);
}
}@media screen and (min-width: 64em) and (orientation: portrait) {
    .slider .slick-track .slide<?=$no;?> .container{
    background: rgba(255, 255, 255, 0.5);
}
}.slider .slick-track .slide<?=$no;?> .container .bottom-section{
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    min-height: 0px;
    min-width: 0px;
    width: calc(100% - 1.875rem);
    margin-right: .9375rem;
    margin-left: .9375rem;
    -ms-flex-item-align: center;
    -ms-grid-row-align: center;
    align-self: center;
}
@media print,  screen and (min-width: 64em) {
    .slider .slick-track .slide<?=$no;?> .container .bottom-section{
    width: calc(42.85714% - 1.875rem);
    margin-right: .9375rem;
    margin-left: .9375rem;
    margin-left: calc(57.14286% + .625rem);
}
}@media screen and (min-width: 64em) and (orientation: portrait) {
    .slider .slick-track .slide<?=$no;?> .container .bottom-section{
    -ms-flex: 1 1 0px;
    flex: 1 1 0px;
    width: auto;
    margin-left: calc(0% + .625rem);
}
}@media screen and (max-width: 39.9375em) and (orientation: landscape) {
    .slider .slick-track .slide<?=$no;?> .container .bottom-section{
    margin-top: 6.25rem;
    width: 60%}
}@media screen and (min-width: 40em) and (max-width: 63.9375em) and (orientation: portrait) {
    .slider .slick-track .slide<?=$no;?> .container .bottom-section{
    margin-top: 6.25rem;
    width: 60%}
}@media screen and (min-width: 40em) and (max-width: 63.9375em) and (orientation: landscape) {
    .slider .slick-track .slide<?=$no;?> .container .bottom-section{
    margin-top: 6.25rem;
}
}.slider .slick-track .slide<?=$no;?> .container .bottom-section .divider{
    margin-top: .9375rem;
}
.slider .slick-track .slide<?=$no;?> {
    background: url(<?=base_url('uploads/'.$row->slider_img);?>) no-repeat;
    background-size: cover;
    background-position: 0% 0%
}
        <?php $no++; } ?>

  </style>


</head>

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
                                <li><a class="m-active" href="<?=base_url();?>" data-text="Home">Home</a></li>
                                <li><a class="m-anim" href="<?=base_url();?>#about-us" data-text="About">Tentang</a></li>
                                <li><a class="m-anim" href="<?=base_url();?>#news" data-text="Specials">Berita</a></li>
                                <li><a class="m-anim" href="<?=base_url();?>#activity-section" data-text="Specials">Kegiatan</a></li>
                                <li><a class="m-anim" href="<?=base_url();?>#gallery-section" data-text="Specials">Gallery</a></li>
                                <li><a class="m-anim" href="<?=base_url();?>#contact-us" data-text="Contact">Contact</a></li>
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