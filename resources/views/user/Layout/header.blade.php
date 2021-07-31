<header id="header">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="header_top">
                <div class="header_top_left">
                    <ul class="top_nav">
                        <li><a href="home">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="pages/contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="header_top_right">
                    <!-- <p>Sunday, December 05, 2021</p> -->
                    <div style="color: blanchedalmond;">
                        <?php if (isset($_SESSION['user']) && $_SESSION['role'] == 'user') { ?>
                            <p style="position: absolute; margin-top: 20px;">Xin chao, <?= $_SESSION['user'] ?></p>
                            <a style="color: blanchedalmond;" class="nav-link" href="logout"><i class="fa fa-power-off"></i> Logout</a>
                        <?php } else
                            echo '<a style="color: blanchedalmond;" class="nav-link" href="admin/dangnhap"><i class="fa fa-power-on"></i> Login</a>';
                        ?>
                    </div>
                    <p>
                        <script language="javascript" type="text/javascript">
                            dayName = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday")
                            monName = new Array("January", "February", "March", "April", "May", "Jun", "July", "August", "September", "October", "November", "December")
                            now = new Date
                            document.write("<b>" + dayName[now.getDay()] + ", " + monName[now.getMonth()] + " " + now.getDate() + " , " + now.getFullYear() + "</b>")
                        </script>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="header_bottom">
                <div class="logo_area"><a href="home-news-users" class="logo"><img style="height: 150px;" src="images/logo2.jpg" alt=""></a></div>
                <div class="add_banner"><a href="#"><img style="height: 150px;" src="images/images3.jpg" alt=""></a></div>
            </div>
        </div>
    </div>
</header>
