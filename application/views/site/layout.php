<html>
<head>
    <?php
    $this->load->view("site/head");
    ?>
</head>
<body>
<a href="#" id="back_to_top">
    <img src="<?php echo public_url("site") ?>/images/top.png">
</a>
<div class="wraper">
    <!-- the header -->
    <div class="header">
        <?php
        // view : mặc định "application/views"
        $this->load->view("site/header");
        ?>
    </div>
    <!-- End header -->

    <!-- The container -->
    <div id="container">
        <!-- The left -->
        <div class="left">
            <?php $this->load->view("site/left"); ?>
        </div>
        <!-- End left -->

        <!-- The content -->
        <div class='content'>
            <!-- lay slide -->
            <script src="royalslider/jquery.royalslider.min.js"></script>
            <link type="text/css" href="royalslider/royalslider.css" rel="stylesheet">
            <link type="text/css" href="royalslider/skins/minimal-white/rs-minimal-white.css" rel="stylesheet">


            <script type="text/javascript">
                (function ($) {
                    $(document).ready(function () {
                        $("#HomeSlide").royalSlider({
                            arrowsNav: true,
                            loop: false,
                            keyboardNavEnabled: true,
                            controlsInside: false,
                            imageScaleMode: "fill",
                            arrowsNavAutoHide: false,
                            autoScaleSlider: true,
                            autoScaleSliderWidth: 580,//chiều rộng slide
                            autoScaleSliderHeight: 205,//chiều cao slide
                            controlNavigation: "bullets",
                            thumbsFitInViewport: false,
                            navigateByClick: true,
                            startSlideId: 0,
                            autoPlay: {enabled: true, stopAtAction: false, pauseOnHover: true, delay: 5000},
                            transitionType: "move",
                            slideshowEnabled: true,
                            slideshowDelay: 5000,
                            slideshowPauseOnHover: true,
                            slideshowAutoStart: true,
                            globalCaption: false
                        });
                    });
                })(jQuery);
            </script>


            <style>
                #HomeSlide.royalSlider {
                    width: 580px;
                    height: 205px;
                    overflow: hidden;
                }
            </style>

            <div id='slide'>
                <div id="img-slide" class="sliderContainer" style='width:580px'>
                    <div id="HomeSlide" class="royalSlider rsMinW">
                        <a href="http://dantri.com.vn/" target='_blank'><img
                                    src="../../application/upload/slide/31.jpg"/> </a>
                        <a href="http://dantri.com.vn/" target='_blank'><img
                                    src="../../application/upload/slide/21.jpg"/> </a>
                        <a href="http://dantri.com.vn/" target='_blank'><img
                                    src="../../application/upload/slide/11.jpg"/> </a>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear pb20"></div>


            <!-- lay san pham moi nhat -->
            <div class="box-center"><!-- The box-center product-->
                <div class="tittle-box-center">
                    <h2>Sản phẩm mới</h2>
                </div>
                <div class="box-content-center product"><!-- The box-content-center -->
                    <div class='product_item'>
                        <h3>
                            <a href="" title="Sản phẩm">
                                Tivi LG 520 </a>
                        </h3>
                        <div class='product_img'>
                            <a href="san-pham-Tivi-LG-520/9.html" title="Sản phẩm">
                                <img src="../../application/upload/product/product13.jpg" alt=''/>
                            </a>
                        </div>
                        <p class='price'>
                            5,400,000 đ
                        </p>
                        <center>
                            <div class='raty' style='margin:10px 0px' id='9' data-score='4'></div>
                        </center>
                        <div class='action'>
                            <p style='float:left;margin-left:10px'>Lượt xem: <b>19</b></p>
                            <a class='button' href="../../index.php" title='Mua ngay'>Mua ngay</a>
                            <div class='clear'></div>
                        </div>
                    </div>
                    <div class='product_item'>
                        <h3>
                            <a href="" title="Sản phẩm">
                                Tivi JVC 500 </a>
                        </h3>
                        <div class='product_img'>
                            <a href="san-pham-Tivi-JVC-500/8.html" title="Sản phẩm">
                                <img src="../../application/upload/product/product7.jpg" alt=''/>
                            </a>
                        </div>
                        <p class='price'>
                            9,500,000 đ
                            <span class='price_old'>10,000,000 đ</span>
                        </p>
                        <center>
                            <div class='raty' style='margin:10px 0px' id='8' data-score='3.4'></div>
                        </center>
                        <div class='action'>
                            <p style='float:left;margin-left:10px'>Lượt xem: <b>112</b></p>
                            <a class='button' href="../../index.php" title='Mua ngay'>Mua ngay</a>
                            <div class='clear'></div>
                        </div>
                    </div>
                    <div class='product_item'>
                        <h3>
                            <a href="" title="Sản phẩm">
                                Tivi Toshiba </a>
                        </h3>
                        <div class='product_img'>
                            <a href="san-pham-Tivi-Toshiba/7.html" title="Sản phẩm">
                                <img src="../../application/upload/product/product6.jpg" alt=''/>
                            </a>
                        </div>
                        <p class='price'>
                            5,800,000 đ
                            <span class='price_old'>6,200,000 đ</span>
                        </p>
                        <center>
                            <div class='raty' style='margin:10px 0px' id='7' data-score='3.5'></div>
                        </center>
                        <div class='action'>
                            <p style='float:left;margin-left:10px'>Lượt xem: <b>74</b></p>
                            <a class='button' href="../../index.php" title='Mua ngay'>Mua ngay</a>
                            <div class='clear'></div>
                        </div>
                    </div>

                    <div class='clear'></div>
                </div><!-- End box-content-center -->
            </div>    <!-- End box-center product-->
            <!-- lay san pham dang giam gia -->
            <div class="box-center"><!-- The box-center product-->
                <div class="tittle-box-center">
                    <h2>Sản phẩm giảm giá</h2>
                </div>
                <div class="box-content-center product"><!-- The box-content-center -->
                    <div class='product_item'>
                        <h3>
                            <a href="" title="Sản phẩm">
                                Tivi JVC 500 </a>
                        </h3>
                        <div class='product_img'>
                            <a href="san-pham-Tivi-JVC-500/8.html" title="Sản phẩm">
                                <img src="../../application/upload/product/product7.jpg" alt=''/>
                            </a>
                        </div>
                        <p class='price'>
                            9,500,000 đ
                            <span class='price_old'>10,000,000 đ</span>
                        </p>
                        <center>
                            <div class='raty' style='margin:10px 0px' id='8' data-score='3.4'></div>
                        </center>
                        <div class='action'>
                            <p style='float:left;margin-left:10px'>Lượt xem: <b>112</b></p>
                            <a class='button' href="../../index.php" title='Mua ngay'>Mua ngay</a>
                            <div class='clear'></div>
                        </div>
                    </div>
                    <div class='product_item'>
                        <h3>
                            <a href="" title="Sản phẩm">
                                Tivi Toshiba </a>
                        </h3>
                        <div class='product_img'>
                            <a href="san-pham-Tivi-Toshiba/7.html" title="Sản phẩm">
                                <img src="../../application/upload/product/product6.jpg" alt=''/>
                            </a>
                        </div>
                        <p class='price'>
                            5,800,000 đ
                            <span class='price_old'>6,200,000 đ</span>
                        </p>
                        <center>
                            <div class='raty' style='margin:10px 0px' id='7' data-score='3.5'></div>
                        </center>
                        <div class='action'>
                            <p style='float:left;margin-left:10px'>Lượt xem: <b>74</b></p>
                            <a class='button' href="../../index.php" title='Mua ngay'>Mua ngay</a>
                            <div class='clear'></div>
                        </div>
                    </div>
                    <div class='product_item'>
                        <h3>
                            <a href="" title="Sản phẩm">
                                Tivi LG 4000 </a>
                        </h3>
                        <div class='product_img'>
                            <a href="san-pham-Tivi-LG-4000/2.html" title="Sản phẩm">
                                <img src="../../application/upload/product/product2.jpg" alt=''/>
                            </a>
                        </div>
                        <p class='price'>
                            3,800,000 đ
                            <span class='price_old'>4,000,000 đ</span>
                        </p>
                        <center>
                            <div class='raty' style='margin:10px 0px' id='2' data-score='4'></div>
                        </center>
                        <div class='action'>
                            <p style='float:left;margin-left:10px'>Lượt xem: <b>4</b></p>
                            <a class='button' href="../../index.php" title='Mua ngay'>Mua ngay</a>
                            <div class='clear'></div>
                        </div>
                    </div>

                    <div class='clear'></div>
                </div><!-- End box-content-center -->
            </div>    <!-- End box-center product-->
            <!-- lay san pham xem nhieu -->
            <div class="box-center"><!-- The box-center product-->
                <div class="tittle-box-center">
                    <h2>Sản phẩm xem nhiều</h2>
                </div>
                <div class="box-content-center product"><!-- The box-content-center -->
                    <div class='product_item'>
                        <h3>
                            <a href="" title="Sản phẩm">
                                Tivi JVC 500 </a>
                        </h3>
                        <div class='product_img'>
                            <a href="san-pham-Tivi-JVC-500/8.html" title="Sản phẩm">
                                <img src="../../application/upload/product/product7.jpg" alt=''/>
                            </a>
                        </div>
                        <p class='price'>
                            9,500,000 đ
                            <span class='price_old'>10,000,000 đ</span>
                        </p>
                        <center>
                            <div class='raty' style='margin:10px 0px' id='8' data-score='3.4'></div>
                        </center>
                        <div class='action'>
                            <p style='float:left;margin-left:10px'>Lượt xem: <b>112</b></p>
                            <a class='button' href="../../index.php" title='Mua ngay'>Mua ngay</a>
                            <div class='clear'></div>
                        </div>
                    </div>
                    <div class='product_item'>
                        <h3>
                            <a href="" title="Sản phẩm">
                                Tivi Toshiba </a>
                        </h3>
                        <div class='product_img'>
                            <a href="san-pham-Tivi-Toshiba/7.html" title="Sản phẩm">
                                <img src="../../application/upload/product/product6.jpg" alt=''/>
                            </a>
                        </div>
                        <p class='price'>
                            5,800,000 đ
                            <span class='price_old'>6,200,000 đ</span>
                        </p>
                        <center>
                            <div class='raty' style='margin:10px 0px' id='7' data-score='3.5'></div>
                        </center>
                        <div class='action'>
                            <p style='float:left;margin-left:10px'>Lượt xem: <b>74</b></p>
                            <a class='button' href="../../index.php" title='Mua ngay'>Mua ngay</a>
                            <div class='clear'></div>
                        </div>
                    </div>
                    <div class='product_item'>
                        <h3>
                            <a href="" title="Sản phẩm">
                                Tivi LG 520 </a>
                        </h3>
                        <div class='product_img'>
                            <a href="san-pham-Tivi-LG-520/9.html" title="Sản phẩm">
                                <img src="../../application/upload/product/product13.jpg" alt=''/>
                            </a>
                        </div>
                        <p class='price'>
                            5,400,000 đ
                        </p>
                        <center>
                            <div class='raty' style='margin:10px 0px' id='9' data-score='4'></div>
                        </center>
                        <div class='action'>
                            <p style='float:left;margin-left:10px'>Lượt xem: <b>19</b></p>
                            <a class='button' href="../../index.php" title='Mua ngay'>Mua ngay</a>
                            <div class='clear'></div>
                        </div>
                    </div>

                    <div class='clear'></div>
                </div><!-- End box-content-center -->
            </div>    <!-- End box-center product-->                       </div>
        <!-- End content -->

        <!-- The right -->
        <div class="right">
            <?php $this->load->view("site/right") ?>
        </div>
        <!-- End right -->
        <div class="clear"></div>

    </div>
    <!-- End container -->
    <center>
        <img src="<?php echo public_url("site") ?>/images/bank.png">
    </center>
    <!-- The footer -->
    <div class="footer">
        <?php
        $this->load->view("site/footer");
        ?>
    </div>
    <!-- End footer -->

</div>
</body>
</html>