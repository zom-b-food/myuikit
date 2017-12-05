<script>
    $(window).scroll(function (e) {
        if ($(this).scrollTop() > 90) { // choose the value you want.
            $('#dropdownnav:hidden').slideDown();
        } else {
            $('#dropdownnav:visible').slideUp();
        }
    });
</script>
<header>
    <!-- Top bar start-->
    <div class="top-bar visible-md visible-lg">
        <div class="container">
            <div class="row">
                <!-- Social Icon -->
                <div class="col-md-6">
                    <!-- Social Icon -->
                    <ul class="list-inline social-top tt-animate btt">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-6 text-right">
                    <ul class="topbar-cta no-margin">
                        <li class="mr-20">
                            <a><i class="material-icons mr-10">&#xE0B9;</i>info@materialize.com</a>
                        </li>
                        <li>
                            <a><i class="material-icons mr-10">&#xE0CD;</i> +01 123 456 78</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- Top bar end-->
    <? include "../sitewide-mat/topnav.php"; ?>
    <div id="dropdownnav">
        <? include "../sitewide-mat/topnav.php"; ?>
    </div>
    <section class="padding-bottom-100">
        <div class="container">
            <div class="row">
                <div class="banner txt-white">
                    <h1>SASS-ified Materialize Kit</h1>

                    <p class="centered">
                        <a href="bs4-sass-kit-1.zip" class="waves-effect waves-light btn purple">Download This Kit</a>
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="rutger">
                            <div class="row tight smoke">
                                <div>
                                    <h4 class="white-text">Stock Materialize Templates</h4>
                                    <ul>
                                        <li>
                                            <a href="../pages-mat/tabs.php">tabs</a>
                                        </li>
                                        <li>
                                            <a href="../pages-mat/blog.php">blog</a>
                                        </li>
                                        <li>
                                            <a href="../pages-mat/feature-box.php">feature-box</a>
                                        </li>
                                        <li>
                                            <a href="../pages-mat/forms.php">forms</a>
                                        </li>

                                        <li>
                                            <a href="../pages-mat/gallery.php">gallery</a>
                                        </li>
                                        <li>
                                            <a href="../pages-mat/grid.php">grid</a>
                                        </li>
                                        <li>
                                            <a href="../pages-mat/promo-box.php">promo-box</a>
                                        </li>
                                        <li>
                                            <a href="../pages-mat/tables.php">tables</a>
                                        </li>

                                        <li>
                                            <a href="../pages-mat/revolution-kenburns.php">slider 1</a>
                                        </li>
                                        <li>
                                            <a href="../pages-mat/more-sliders.php">more sliders</a>
                                        </li>
                                        <li>
                                            <a href="../pages-mat/template.php">template</a>
                                        </li>
                                        <li>
                                            <a href="../pages-mat/team.php">team</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="border-box-tab rufus">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs nav-justified" role="tablist">
                                <li role="presentation"><a href="#tab-18" class="waves-effect waves-dark"
                                                                          role="tab" data-toggle="tab"> <i
                                            class="fa fa-bell-o"></i> About</a></li>
                                <li role="presentation" class="active"><a href="#tab-19" class="waves-effect waves-dark" role="tab"
                                                           data-toggle="tab"> <i class="fa fa-anchor"></i> Templates</a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="panel-body">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade" id="tab-18">
                                        <div class="row tight smoke">
                                            <div class="col-sm-6">
                                                <p>This SASS-ified Materialize Kit download is a php website that
                                                    uses server-side includes for common components like header,
                                                    navigation, and footer. You can reskin the app by merely changing
                                                    the scss variables. The kit uses Grunt to compile and concatenate js
                                                    and css files. Feel free to examine the grunt file and make changes
                                                    as you see fit.</p>
                                            </div>
                                            <div class="col-sm-6">
                                                <p>Materialize is heavy. I doubt you'll need customized plugins at all.
                                                    Out-of-the-box components include:</p>
                                                <ul>
                                                    <li>Revolution Slider</li>
                                                    <li>Owl Carousel</li>
                                                    <li>Magnific Popup</li>
                                                    <li>and yes, Bootstrap</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade in active" id="tab-19">
                                        <div class="row tight smoke">
                                            <div class="col-sm-4">
                                                <h4 class="white-text">Stock Materialize Templates</h4>
                                                <ul>
                                                    <li>
                                                        <a href="../pages-mat/tabs.php">tabs</a>
                                                    </li>
                                                    <li>
                                                        <a href="../pages-mat/blog.php">blog</a>
                                                    </li>
                                                    <li>
                                                        <a href="../pages-mat/feature-box.php">feature-box</a>
                                                    </li>
                                                    <li>
                                                        <a href="../pages-mat/forms.php">forms</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-4">
                                                <h4 class="white-text">...More</h4>
                                                <ul>
                                                    <li>
                                                        <a href="../pages-mat/gallery.php">gallery</a>
                                                    </li>
                                                    <li>
                                                        <a href="../pages-mat/grid.php">grid</a>
                                                    </li>
                                                    <li>
                                                        <a href="../pages-mat/promo-box.php">promo-box</a>
                                                    </li>
                                                    <li>
                                                        <a href="../pages-mat/tables.php">tables</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-4">
                                                <h4 class="white-text">...More</h4>
                                                <ul>
                                                    <li>
                                                        <a href="../pages-mat/revolution-kenburns.php">slider 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="../pages-mat/more-sliders.php">more sliders</a>
                                                    </li>
                                                    <li>
                                                        <a href="../pages-mat/template.php">template</a>
                                                    </li>
                                                    <li>
                                                        <a href="../pages-mat/team.php">team</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.border-bottom-tab -->
                    </div>
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
</header>
