<!DOCTYPE html>
<html>

<head>
    <title>NewsFeed</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="use/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="use/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="use/css/animate.css">
    <link rel="stylesheet" type="text/css" href="use/css/font.css">
    <link rel="stylesheet" type="text/css" href="use/css/li-scroller.css">
    <link rel="stylesheet" type="text/css" href="use/css/slick.css">
    <link rel="stylesheet" type="text/css" href="use/css/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="use/css/theme.css">
    <link rel="stylesheet" type="text/css" href="use/css/style.css">
    <!--[if lt IE 9]>
<script src="use/js/html5shiv.min.js"></script>
<script src="use/js/respond.min.js"></script>
<![endif]-->
</head>
<style>
    body {
        font-family: 'Noto Serif', serif;
    }
 
</style>

<body>
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    <div class="container">
        <!-- Header -->
        @include('user.Layout.header')
        <!-- Header -->
        <section id="navArea">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav main_nav">
                        <li class="active"><a href="home"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>
                        <li><a href="the-gioi">Th??? gi???i</a></li>
                        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Th??? thao</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Video</a></li>
                                <li><a href="#">B??ng ????</a></li>
                                <li><a href="#">Tennis</a></li>
                                <li><a href="#">B??ng r???</a></li>
                                <li><a href="#">Euro 2021</a></li>
                            </ul>
                        </li>
                        <li><a href="user/thoitrang/index">Th???i trang</a></li>
                        <li><a href="user/phapluat/index">Ph??p lu???t</a></li>
                        <li><a href="user/suckhoe/index">S???c kh???e</a></li>
                        <li><a href="user/giaoduc/index">Gi??o d???c</a></li>
                    </ul>
                </div>
            </nav>
        </section>
        <section id="newsSection">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="latest_newsarea"> <span>Tin M???i</span>
                        <ul id="ticker01" class="news_sticker">
                            <?php
                            foreach ($list_news as $ls) {
                            ?>
                                <li><a href="#"><img src="<?= $ls->images ?>" alt=""><?= $ls->title ?></a></li>
                            <?php } ?>
                        </ul>
                        <div class="social_area">
                            <ul class="social_nav">
                                <li class="facebook"><a href="#"></a></li>
                                <li class="twitter"><a href="#"></a></li>
                                <li class="flickr"><a href="#"></a></li>
                                <li class="pinterest"><a href="#"></a></li>
                                <li class="googleplus"><a href="#"></a></li>
                                <li class="vimeo"><a href="#"></a></li>
                                <li class="youtube"><a href="#"></a></li>
                                <li class="mail"><a href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="sliderSection">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <div class="slick_slider">
                        <?php
                        foreach ($list_news as $ls) {
                        ?>
                            <div class="single_iteam"> <a href="<?= $ls->title ?>"> <img src="<?= $ls->images ?>" alt=""></a>
                                <div class="slider_article">
                                    <h2><a class="slider_tittle" href="pages/single_page.html"><?= $ls->title ?></a></h2>
                                    <p><?= $ls->description ?></p>
                                </div>
                            </div>
                        <?php } ?>
                        <!-- <div class="single_iteam"> <a href="pages/single_page.html"> <img src="images/slider_img2.jpg" alt=""></a>
                            <div class="slider_article">
                                <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
                                <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
                            </div>
                        </div>
                         -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="latest_post">
                        <h2><span>Latest post</span></h2>
                        <div class="latest_post_container">
                            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
                            <ul class="latest_postnav" style="height: 300px; overflow: hidden;">
                                <?php
                                foreach ($list_news as $ls) {
                                ?>
                                    <li>
                                        <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="<?= $ls->images ?>"> </a>
                                            <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> <?= $ls->title ?></a> </div>
                                        </div>
                                    </li>
                                <?php } ?>
                            </ul>
                            <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="contentSection">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <div class="left_content">
                        <div class="single_post_content">
                            <h2><span>Th??? thao</span></h2>
                            <div class="single_post_content_left">
                                <ul class="business_catgnav  wow fadeInDown">
                                    <li>
                                        <figure class="bsbig_fig"> <a href="home/new" class="featured_img"> <img alt="" src="https://i1-thethao.vnecdn.net/2021/07/10/e181191718094db2967386e64b1bf8-9861-5154-1625886809.jpg?w=680&h=0&q=100&dpr=1&fit=crop&s=Z2wrnBqLmQb9imnMiuyj1Q"> <span class="overlay"></span> </a>
                                            <figcaption> <a href="home/new">Messi c?? th??? ph?? k??? l???c c???a Pele ??? chung k???t Copa America</a> </figcaption>
                                            <p>Tr???n chung k???t Copa America 2021 g???p Brazil s??ng 11/7 l?? c?? h???i ????? Lionel Messi b???t k???p, th???m ch?? v?????t k??? l???c ghi b??n cho ??TQG ??? khu v???c Nam M??? c???a Pele.</p>
                                        </figure>
                                    </li>
                                </ul>
                            </div>
                            <div class="single_post_content_right">
                                <ul class="spost_nav">
                                    <?php
                                    foreach ($list_sp as $ls) {
                                    ?>
                                        <li>
                                            <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="<?= $ls->images ?>"> </a>
                                                <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> <?= $ls->title ?></a> </div>
                                            </div>
                                        </li>
                                    <?php } ?>
                                    <!-- <li>
                                        <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                                            <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                                            <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                                            <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                                        </div>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="fashion_technology_area">
                            <div class="fashion">
                                <div class="single_post_content">
                                    <h2><span>Th??? gi???i</span></h2>
                                    <ul class="business_catgnav wow fadeInDown">
                                        <li>
                                            <figure class="bsbig_fig"> <a href="pages" class="featured_img"> <img alt="" src="https://i1-vnexpress.vnecdn.net/2021/07/10/55631871721603a-can-cu-2797-16-9573-7285-1625903124.jpg?w=1020&h=0&q=100&dpr=1&fit=crop&s=M6GDVA1nreAyuthClgqQ3Q"> <span class="overlay"></span> </a>
                                                <figcaption> <a href="pages">Nga k??u g???i M??? r??t qu??n c?? tr??ch nhi???m kh???i Afghanistan</a> </figcaption>
                                                <p>Nga n??i M??? c???n th??? hi???n tr??ch nhi???m khi r??t qu??n, trong b???i c???nh Taliban ?????y m???nh ho???t ?????ng v?? c?? nhi???u lo ng???i qu??n ?????i Afghanistan s??? s???p ?????....</p>
                                            </figure>
                                        </li>
                                    </ul>
                                    <ul class="spost_nav">
                                        <?php
                                        foreach ($list_tg as $ls) {
                                        ?>
                                            <li>
                                                <div class="media wow fadeInDown"> <a href="<?= $ls->title ?>" class="media-left"> <img alt="" src="<?= $ls->images ?>"> </a>
                                                    <div class="media-body"> <a href="<?= $ls->title ?>" class="catg_title"> <?= $ls->title ?></a> </div>
                                                </div>
                                            </li>
                                        <?php } ?>
                                        <!-- <li>
                                            <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                                                <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                                                <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                                                <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                                            </div>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                            <div class="technology">
                                <div class="single_post_content">
                                    <h2><span>C??ng ngh???</span></h2>
                                    <ul class="business_catgnav">
                                        <li>
                                            <figure class="bsbig_fig wow fadeInDown"> <a href="https://i1-sohoa.vnecdn.net/2021/07/09/HPE-Cloud-Computing-2944-1625817717.png?w=680&h=0&q=100&dpr=1&fit=crop&s=bddMgTxPh3nw-CYcVvd3KA" class="featured_img"> <img alt="" src="images/featured_img3.jpg"> <span class="overlay"></span> </a>
                                                <figcaption> <a href="pages/single_page.html">C??ng ngh??? ??i???n to??n ????m m??y trong ng??nh t??i ch??nh ng??n h??ng</a> </figcaption>
                                                <p>57% ng??nh ng??n h??ng ???? tri???n khai th??nh c??ng ng??n h??ng s??? v?? chuy???n ?????i l??n ????m m??y, theo b??o c??o c???a IDC th??ng 8/2020. ??i c??ng xu th??? ...</p>
                                            </figure>
                                        </li>
                                    </ul>
                                    <ul class="spost_nav">
                                        <?php
                                        foreach ($list_cn as $ls) {
                                        ?>
                                            <li>
                                                <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="<?= $ls->images ?>"> </a>
                                                    <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> <?= $ls->title ?></a> </div>
                                                </div>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single_post_content">
                            <h2><span>Photography</span></h2>
                            <ul class="photograph_nav  wow fadeInDown">
                                <li>
                                    <div class="photo_grid">
                                        <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img2.jpg" title="Photography Ttile 1"> <img src="images/photograph_img2.jpg" alt="" /></a> </figure>
                                    </div>
                                </li>
                                <li>
                                    <div class="photo_grid">
                                        <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img3.jpg" title="Photography Ttile 2"> <img src="images/photograph_img3.jpg" alt="" /> </a> </figure>
                                    </div>
                                </li>
                                <li>
                                    <div class="photo_grid">
                                        <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img4.jpg" title="Photography Ttile 3"> <img src="images/photograph_img4.jpg" alt="" /> </a> </figure>
                                    </div>
                                </li>
                                <li>
                                    <div class="photo_grid">
                                        <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img4.jpg" title="Photography Ttile 4"> <img src="images/photograph_img4.jpg" alt="" /> </a> </figure>
                                    </div>
                                </li>
                                <li>
                                    <div class="photo_grid">
                                        <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img2.jpg" title="Photography Ttile 5"> <img src="images/photograph_img2.jpg" alt="" /> </a> </figure>
                                    </div>
                                </li>
                                <li>
                                    <div class="photo_grid">
                                        <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img3.jpg" title="Photography Ttile 6"> <img src="images/photograph_img3.jpg" alt="" /> </a> </figure>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="single_post_content">
                            <h2><span>Games</span></h2>
                            <div class="single_post_content_left">
                                <ul class="business_catgnav">
                                    <li>
                                        <figure class="bsbig_fig  wow fadeInDown"> <a class="featured_img" href="pages/single_page.html"> <img src="images/featured_img1.jpg" alt=""> <span class="overlay"></span> </a>
                                            <figcaption> <a href="pages/single_page.html">Proin rhoncus consequat nisl eu ornare mauris</a> </figcaption>
                                            <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                                        </figure>
                                    </li>
                                </ul>
                            </div>
                            <div class="single_post_content_right">
                                <ul class="spost_nav">
                                    <li>
                                        <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                                            <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                                            <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                                            <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                                            <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <aside class="right_content">
                        <div style="background-color: gainsboro;" class="single_sidebar">
                            <h2><span>Popular Post</span></h2>
                            <ul class="spost_nav">
                                <li>
                                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                                        <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                                        <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                                        <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                                        <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="single_sidebar">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#category" aria-controls="home" role="tab" data-toggle="tab">Category</a></li>
                                <li role="presentation"><a href="#video" aria-controls="profile" role="tab" data-toggle="tab">Video</a></li>
                                <li role="presentation"><a href="#comments" aria-controls="messages" role="tab" data-toggle="tab">Comments</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="category">
                                    <ul>
                                        <li class="cat-item"><a href="#">Sports</a></li>
                                        <li class="cat-item"><a href="#">Fashion</a></li>
                                        <li class="cat-item"><a href="#">Business</a></li>
                                        <li class="cat-item"><a href="#">Technology</a></li>
                                        <li class="cat-item"><a href="#">Games</a></li>
                                        <li class="cat-item"><a href="#">Life &amp; Style</a></li>
                                        <li class="cat-item"><a href="#">Photography</a></li>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="video">
                                    <div class="vide_area">
                                        <iframe width="100%" height="250" src="http://www.youtube.com/embed/h5QWbURNEpA?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="comments">
                                    <ul class="spost_nav">
                                        <li>
                                            <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                                                <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                                                <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                                                <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                                                <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single_sidebar wow fadeInDown">
                            <h2><span>Sponsor</span></h2>
                            <a class="sideAdd" href="#"><img src="images/add_img.jpg" alt=""></a>
                        </div>
                        <div class="single_sidebar wow fadeInDown">
                            <h2><span>Category Archive</span></h2>
                            <select class="catgArchive">
                                <option>Select Category</option>
                                <option>Life styles</option>
                                <option>Sports</option>
                                <option>Technology</option>
                                <option>Treads</option>
                            </select>
                        </div>
                        <div class="single_sidebar wow fadeInDown">
                            <h2><span>Links</span></h2>
                            <ul>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Rss Feed</a></li>
                                <li><a href="#">Login</a></li>
                                <li><a href="#">Life &amp; Style</a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
        <!-- Footer -->
        @include('user.Layout.footer')

        <!-- Footer -->
    </div>
    <script src="use/js/jquery.min.js"></script>
    <script src="use/js/wow.min.js"></script>
    <script src="use/js/bootstrap.min.js"></script>
    <script src="use/js/slick.min.js"></script>
    <script src="use/js/jquery.li-scroller.1.0.js"></script>
    <script src="use/js/jquery.newsTicker.min.js"></script>
    <script src="use/js/jquery.fancybox.pack.js"></script>
    <script src="use/js/custom.js"></script>
</body>

</html>