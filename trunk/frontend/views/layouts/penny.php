<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html>
    <head>
        <!-- Title here -->
        <title><?php echo isset($title) ? $title : WEBSITENAME; ?></title>
        <!-- Description, Keywords and Author -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Your description"/>
        <meta name="keywords" content="Your,Keywords"/>
        <meta name="author" content="ResponsiveWebInc"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!-- Favicon -->
        <link rel="shortcut icon" href="./public/img/avalon.ico"/>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,600' rel='stylesheet' type='text/css'/>	 
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700,300italic' rel='stylesheet' type='text/css'/>
        <!-- Styles -->
        <!-- Bootstrap CSS -->
        <link href="./public/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="./public/css/font-awesome.min.css" rel="stylesheet"/>	
        <link href="./public/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="./public/css/nprogress.css" rel="stylesheet" type="text/css"/>
        <script src="./public/js/jquery.js"></script> 
        <link href="./public/css/toastr.css" rel="stylesheet" type="text/css"/>
    </head>
    <body style="display: block">
        <div class="outer">
            <!-- Sidebar Start-->
            <div class="sidebar" id="sidebarID" style="position: fixed">
                <?php
                include_once './frontend/views/common/menu.php';
                ?>
            </div>
            <!-- Sidebar End -->
            <!-- Main Start -->
            <div class="main">
                <div id="carousel-example-generic" class="carousel slide carousel-fade">
                    <!-- Wrapper for slides -->
                    <?php
                    include_once './frontend/views/common/banner.php';
                    ?>
                </div>
                <!-- Wrapper for slides End -->
                <div class="container">
                    <!-- Start About Us -->
                    <div class="team">
                        <?php
                        if (isset($_SESSION['language']) && $_SESSION['language'] == 'english') {
                            include_once './frontend/views/us/aboutus_en.php';
                        } else {
                            include_once './frontend/views/us/aboutus_vn.php';
                        }
                        ?>
                    </div>
                    <hr />
                    <!-- Start Products -->
                    <div class="service">
                        <?php
                        include_once './frontend/views/product/index.php';
                        ?>
                    </div>
                    <!-- Promotestimonialtion End -->
                    <!-- Where to buy Start -->
                    <div class="testimonial">
                        <?php
                            include_once './frontend/views/us/wheretobuy.php';
                        ?>
                        <div class="clearfix"></div>
                    </div>
                    <?php
                    if (isset($_SESSION['language']) && $_SESSION['language'] == 'english') {
                        include_once './frontend/views/common/footer_en.php';
                    } else {
                        include_once './frontend/views/common/footer_vn.php';
                    }
                    ?>
                </div>
            </div>	
            <!-- This end div for main class -->
            <div id="customerCartId">
                <?php
                if (isset($_SESSION['login']) && $_SESSION['login'][11] == '0') {
                    include_once './frontend/views/cart/dialog.php';
                }
                ?>
            </div>
            <div id="loginID">
                <?php
                if (!isset($_SESSION['login'])) {
                    include_once './frontend/views/common/login.php';
                }
                ?>
            </div>
            <div id="dialogDetailProduct">
                <?php
                include_once './frontend/views/product/add.php';
                ?>
            </div>
            <div id="changePassId">
                <?php
                // if (isset($_SESSION['login'])) {
                //  include_once './frontend/views/user/changepass.php';
                //}
                ?>
            </div>
            <div id="profileID">
                <?php
                if (isset($_SESSION['login'])) {
                    include_once './frontend/views/user/profile.php';
                }
                ?>
            </div>
            <div id="registerFormID">
                <?php
                if (!isset($_SESSION['login'])) {
                    include_once './frontend/views/user/register.php';
                }
                ?>
            </div>
            <div id="contactFormID">
                <?php
                if (!isset($_SESSION['login']) || (isset($_SESSION['login'])) && $_SESSION['login'][11] != '1') {
                    include_once './frontend/views/us/contact.php';
                }
                ?>
            </div>
            <?php
            include_once './frontend/views/us/promotions.php';
            ?>
        </div>

        <div class="clearfix"></div>
        <!-- Scroll to top -->
        <span class="totop"><a href="#"><i class="icon-chevron-up"></i></a></span> 
        <!-- Javascript files -->
        <!-- jQuery -->

        <!-- Bootstrap JS -->
        <script src="./public/js/bootstrap.min.js"></script>
        <!-- jquery Anchor JS -->
        <script src="./public/js/jquery.arbitrary-anchor.js"></script>
        <!-- jQuery way points -->
        <script src="./public/js/waypoints.min.js"></script>
        <!-- Respond JS for IE8 -->
        <script src="./public/js/respond.min.js"></script>
        <!-- HTML5 Support for IE -->
        <script src="./public/js/html5shiv.js"></script>
        <!-- Custom JS -->
        <script src="./public/js/custom.js"></script>
        <script src="./public/js/nprogress.js"></script>
        <script src="./public/js/toastr.js"></script>
        <!-- Function JS -->
        <script src="./public/js/query.functions.extend.js"></script>
        <script src="./public/js/jquery.zpaging.1.0.js"></script> 
        <script src="./public/js/jquery.zauthenticate.1.0.js"></script> 
        <script src="./public/js/jquery.zloaddetailpro2dialog.1.0.js"></script> 
        <script type="text/javascript">
            toastr.options.closeButton = true;
            toastr.options.newestOnTop = true;
            $('body').show();
            NProgress.start();
            setTimeout(function() {
                NProgress.done();
                $('.fade').removeClass('out');
            }, 100);
            $(document).ready(function() {
                switch ($.urlParam('type'))
                {
                    case 'productdetails':
                        $("#largeModal").modal('show');
                        $.zLoadDetailPro2Dialog({"idProduct": $.urlParam('id')});
                        break;
                    case 'promotions':
                        $("#promotionDialogID").modal('show');
                        break;
                    case 'contactus':
                        $("#contactDialogID").modal('show');
                        break;
                    case 'cart':
                        $("#dialogCartID").modal('show');
                        break;
                }
                $(this).on("click", ".openDetailDiaLog", function() {
                    $.zLoadDetailPro2Dialog({"idProduct": $(this).data("id")});
                    $("#dialogCartID").modal("hide");
                });
                //Thay doi url tren trinh duuyet khi click vao cac id sau
                $("#promotionIDLink").click(function() {
                    window.history.pushState("object or string", "Promotions", "?content=home&type=promotions");
                });
                $("#contactUsIDLink").click(function() {
                    window.history.pushState("object or string", "Contact Us", "?content=home&type=contactus");
                });
                done();//kiem tra
                // pseudo code
            });

            function done() {
                setTimeout(function() {
                    checkVariableValue();
                    done();
                }, 2000);
            }

            function checkVariableValue() {
                $.ajax({
                    url: '?content=checksession',
                    success: function(newVal) {
                        if (newVal === 'yes_logout') {
                            //location.reload();
                            var obj = {
                                "alertLogoutFailed": "<?= LOGOUT_FAILED ?>",
                                "alertLoginSuccess": "<?= LOGOUT_SUCCESS ?>"
                            };
                            $.zAuthenticate(obj, 'logout');
                        }
                        else if (newVal === 'yes_login') {
                            $.zAuthenticate({}, 'login');
                        }
                    }
                });
            }
            ;
        </script>
    </body>	
</html>
