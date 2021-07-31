<!DOCTYPE html>
<html>

<head>
    <title>NewsFeed</title>
    <base href="{{asset('')}}">
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<style>
    .comment_item {
        margin-top: 20px;
        padding: 0;
        word-wrap: break-word;
    }

    .width_common {
        width: 100%;
        float: left;
    }

    .content-comment {
        padding: 0 0 0 46px;
        margin-top: 0;
    }

    .comment_item p {
        padding-bottom: 0;
        font: 400 15px arial;
        line-height: 150%;
    }

    .comment_item .txt-name {
        color: #222;
        margin-right: 5px;
    }

    .block_like_web {
        float: left;
        text-align: left;
        padding: 0;
        font-size: 13px;
        position: relative;
        margin-top: 10px;
    }

    .block_like_web a {
        color: #757575;
        margin-right: 20px;
    }

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

        <section id="sliderSection">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <h1 style="font-family: Times New Roman, Times, serif;">Hơn 100.000 người Pháp biểu tình phản đối tiêm vaccine bắt buộc</h1>
                    <br>
                    Khoảng 114.000 người xuống đường khắp nước Pháp phản đối kế hoạch tiêm chủng bắt buộc được Tổng thống Macron công bố nhằm ngăn làn sóng Covid-19 mới.

                    Thế giới đã ghi nhận 190.689.607 ca nhiễm nCoV và 4.097.251 ca tử vong, tăng lần lượt 419.450 và 5.766, trong khi 172.007.058 người đã bình phục, theo trang thống kê thời gian thực Worldometers.

                    Pháp là vùng dịch lớn thứ năm thế giới với 5.855.198 ca nhiễm và 111.467 ca tử vong. Số ca nhiễm mới hàng ngày tại Pháp đã giảm từ hơn 42.000 hồi giữa tháng 4 xuống còn chưa đầy 2.000 ca/ngày hồi cuối tháng 6, nhưng đang tăng trở lại với mức trung bình gần 11.000 ca nhiễm mới mỗi ngày. Đợt bùng phát mới được cho là bởi biến chủng Delta có nguồn gốc Ấn Độ.
                    <br>
                    <br>
                    <img src="https://i1-vnexpress.vnecdn.net/2021/07/18/phap-covid-19-6-9473-1626564535.jpg?w=680&h=0&q=100&dpr=1&fit=crop&s=jKbDoY2KXHkqb19h84AErQ">
                    <br>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="latest_post">
                        <h2><span>Latest post</span></h2>
                        <div class="latest_post_container">
                            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
                            <ul class="latest_postnav" style="height: 400px;">
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
                        <br>
                        Bộ Nội vụ Pháp cho biết 137 cuộc biểu tình và tuần hành đã diễn ra khắp nước này hôm 17/7, với sự tham gia của gần 114.000 người, trong đó 18.000 người ở thủ đô Paris. Hoạt động diễn ra nhằm phản đối kế hoạch ứng phó Covid-19 của Tổng thống Emmanuel Macron, trong đó gồm tiêm vaccine bắt buộc với nhân viên y tế và yêu cầu người dân trình giấy chứng nhận âm tính nCoV để vào những địa điểm như nhà hàng và rạp chiếu phim.

                Loạt biện pháp được Tổng thống Pháp công bố trong tuần này nhưng chưa có hiệu lực, nhằm đối phó đợt tăng vọt ca nhiễm nCoV. Người biểu tình cho rằng điều này đã xâm phạm quyền tự do của những người không muốn tiêm vaccine. Nhiều cuộc biểu tình đã diễn ra trên khắp nước Pháp từ đầu tuần, buộc cảnh sát bắn đạn hơi cay để giải tán đám đông.

                Thủ tướng Jean Castex khẳng định tiêm vaccine là cách duy nhất để chống lại virus. "Tôi biết sự lưỡng lự đang gia tăng, nhưng chúng ta phải tìm mọi cách để thuyết phục người dân đi tiêm chủng đó, đó là cách tối nhất để ứng phó với khủng hoảng y tế này", ông nói trong chuyến thăm một trung tâm y tế hôm 17/7.

                Bất chấp lượng người tham gia biểu tình, kết quả khảo sát do Ipsos-Sopra Steria công bố cho thấy hơn 60% người dân Pháp đồng ý với quy định tiêm chủng bắt buộc với nhân viên y tế và giấy xác nhận âm tính nCoV khi đến nơi công cộng.

                Khoảng 55,5% người trưởng thành Pháp đã được tiêm ít nhất một liều vaccine, trong khi 44,8% đã tiêm đủ hai liều.

                Mỹ, vùng dịch lớn nhất thế giới, báo cáo 34.949.746 ca nhiễm và 624.710 ca tử vong do nCoV, tăng 19.890 ca nhiễm và 108 ca tử vong so với một ngày trước đó. Giới chức y tế Mỹ kêu gọi người dân đi tiêm vaccine Covid-19 và cảnh báo đây đang trở thành đại dịch của những người chưa tiêm chủng.

                "Thông điệp rõ ràng được đưa ra là Covid-19 đang trở thành đại dịch của những người không tiêm vaccine", giám đốc Trung tâm Kiểm soát và Phòng ngừa Dịch bệnh Mỹ (CDC) Rochelle Walensky cảnh báo.

                Trong 7 ngày qua, trung bình mỗi ngày tại Mỹ có 2.790 người phải nhập viện, tăng 36%, số ca tử vong là 221 người, tăng 26%. Mức gia tăng đột biến tập trung ở các cộng đồng có tỷ lệ tiêm vaccine Covid-19 thấp và "những người Mỹ không tiêm vaccine chiếm gần như toàn bộ các ca nhập viện lẫn tử vong do nCoV gần đây", điều phối viên ứng phó Covid-19 của Nhà Trắng Jeff Zient cho biết.

                Ấn Độ là vùng dịch lớn thứ hai thế giới với 31.105.209 ca nhiễm và 413.640 ca tử vong, tăng so với hôm trước lần lượt 41.222 và 517 ca. Các chuyên gia đã cảnh báo rằng một đợt bùng phát mới có thể ập đến Ấn Độ trong vài tuần tới. Ấn Độ từng hứng đợt bùng phát thảm khốc hồi tháng 4-5.

                Ấn Độ đặt mục tiêu tiêm chủng cho tất cả người lớn vào cuối năm nay nhưng chiến dịch này đang chững lại và các thành phố lớn như Delhi và một số bang cho biết họ đã hết vaccine.

                Ấn Độ tiêm hơn 9 triệu liều vào ngày 21/6 nhưng con số sau đó đó đã giảm xuống chưa đến ba triệu liều mỗi ngày. Nước này tiêm chủng cho gần 390 triệu người, trong chưa đến 6% dân số đã tiêm hai liều, 23% mới tiêm một liều.

                Tại Đông Nam Á, Indonesia là vùng dịch lớn nhất khu vực với 2.832.755 ca nhiễm, tăng 51.952, trong đó 72.489 người chết, tăng 1.092.

                Tuần trước, quốc gia đông dân thứ tư thế giới đã tiến hành các biện pháp hạn chế chặt chẽ hơn, bao gồm đóng cửa các trung tâm mua sắm, nhà hàng và văn phòng tại thủ đô Jakarta, đảo Java và đảo Bali. Bộ trưởng Tôn giáo Indonesia Yaqut Cholil Qoumas cảnh báo người dân không tụ tập và chuyển sang cầu nguyện tại nhà cho lễ hội Hồi giáo Eid-al-Adha sắp tới để tránh nguy cơ lây lan Covid-19.

                Indonesia dồn lực chống Covid-19 tại đảo Java, nơi các bệnh viện gần như rơi vào tình trạng quá tải. Tuy nhiên, một số vùng xa xôi của đất nước với tỷ lệ tiêm chủng thấp đang bắt đầu chứng kiến ca nhiễm tăng cao.

                Thái Lan trong 24 giờ qua báo cáo thêm 10.082 ca nhiễm và 141 ca tử vong, nâng tổng số ca nhiễm và tử vong vì Covid-19 của nước này lên lần lượt 391.989 và 3.240.

                Giới chức Thái Lan đã áp lệnh cấp tụ tập nơi công cộng, người vi phạm có thể lĩnh án tối đa hai năm tù, bị phạt tiền lên đến 40.000 baht (khoảng 1.220 USD) hoặc cả hai.

                Thủ tướng Prayuth Chan-ocha cho biết chính phủ Thái Lan đang xem xét thêm các biện pháp hạn chế khi nước này đối mặt với đợt bùng phát tồi tệ nhất bắt đầu từ tháng 4, liên quan đến biến chủng Alpha và Delta có khả năng lây lan nhanh.

                Từ ngày 12/7, các khu vực được coi là có nguy cơ cao tại Thái Lan chịu lệnh phong tỏa nghiêm ngặt nhất trong một năm trở lại đây. Dân chúng ở những khu này bị hạn chế di chuyển và tụ tập, các trung tâm thương mại cùng một số cơ sở kinh doanh bị đóng cửa và lệnh giới nghiêm được áp đặt từ 21h đến 4h sáng hôm sau.

                57% ca nhiễm mới gần đây ở thủ đô Bangkok liên quan biến chủng Delta. Số ca nhiễm tăng nhanh dẫn đến tình trạng thiếu giường bệnh trầm trọng, khiến giới chức phải cho phép bệnh nhân triệu chứng nhẹ hoặc không triệu chứng được cách ly tại nhà và các trung tâm cộng đồng. Thái Lan cũng cho phép người dân sử dụng bộ xét nghiệm Covid-19 ngay tại nhà.
                <br>
                        <br>
                        <div>
                            <!-- <form method="POST">
                                <div class="form-group">
                                    <input type="hidden" name="comment_name" value="" id="comment_name" class="form-control" placeholder="Enter Name" />
                                </div>
                                <div class="form-group">
                                    <textarea name="comment" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
                                </div>
                            </form> -->
                        </div>
                        <div class="comment_item width_common">
                            <div class="content-comment">
                                <?php
                                foreach ($list_comment as $list) {
                                ?>
                                    <p class="full_content">
                                        <span class="txt-name"><?= $list->comment_name ?></span>
                                        <?= $list->comment ?>
                                    </p>
                                    <p class="block_like_web width_common">
                                        <a id="40981567" class="link_thich " href="javascript:;" rel="40981567">
                                            <span class="total_like" href="javascript:;">565</span><i class="ic ic-like"></i>
                                        </a>
                                        <a id="40981567" class="link_reply" href="javascript:;" rel="40981567" parent="40981567">Trả lời</a>
                                        <a href="javascript:;" rel="40981567" class="share_cmt_fb">Chia sẻ</a><span class="time-com">5h trước</span>
                                    </p>
                                <?php } ?>
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