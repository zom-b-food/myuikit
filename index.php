<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0' name='viewport'/>
        <meta name="description"
              content="Adam L Marsh; UI/UX Designer and Developer, www.adam-marsh.com, www.ui-design-engineering.com, www.myuikit.com, front-end web design and development.">
        <meta name="author" content="ui-design-engineering.com www.myuikit.com">
        <script src="./assets-bs/js/jquery-2.1.1.js" type="text/javascript"></script>
        <script src="./assets-bs/compiled/_myuikit.min.js" type="text/javascript"></script>
        <link rel="icon" href="./assets-bs/images/ui/favicon.ico" type="image/x-icon"/>
        <link rel="shortcut icon" href="./assets-bs/images/ui/favicon.ico" type="image/x-icon"/>
        <link rel="apple-touch-icon-precomposed" href="./assets-bs/images/apple-touch-icon.png"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="./assets-bs/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="./assets-bs/compiled/_myuikit.min.css"/>
        <link rel="stylesheet" href="./assets-bs/css/custom.css"/>
        <title>
            www.myuikit.com [SASSified w/ Grunt]
        </title>
        <!--
<?php

  function quercus_test()
  {
    return function_exists("quercus_version");
  }

?>
-->
        <style type="text/css">
            body {
                background-image: url('./assets-bs/images/ui/2.jpg');
            }

            #heading-splash {
                border-bottom: 4px solid rgba(13, 18, 28, .3) !important;
                width: 100%;
                top: 85px;
            }

            #starter-template {
                margin-top: 160px !important;
            }

            .page-header {
                height: 93vh !important;
                padding: 0 !important;
                color: $smoke !important;
                position: relative;
                border-bottom: none;
                background-position: center center;
                background-size: cover;

                &:after,
                &:before {
                    position: absolute;
                    z-index: 0;
                    width: 100%;
                    height: 100%;
                    display: block;
                    left: 0;
                    top: 0;
                    content: "";
                }

                &:before {
                    background-color: rgba(0, 0, 0, .5);
                }

                &[filter-color="blue"] {
                    @include linear-gradient ( rgba ( $ black, .20 ), rgba ( 94, 140, 167, 0.6 ) );
                    }

            }

            footer {
                background-color: rgba(0, 0, 0, .85) !important;
                float: left !important;
                margin-bottom: -61px;
            }

            .message {
                color:#8d8496;
                padding: 6px;
                border: 1px rgba(4, 133, 125, .8);
                background: rgba(32, 43, 58, .5);
                margin-top: 126px;
            }

            .blockquote-white {
                color: #ffffff;
            }

            h1.centered {
                text-align: center;
                margin-top: -28px;
            }

            .fauxcardmat {
                background: url(./assets-mat/images/ui/mat.png) center no-repeat transparent;
                max-width: 491px;
                height: 300px;
                border-radius: .1875rem;
                position: relative;
                overflow: hidden;
                text-align: center;
                box-shadow: 0 5px 25px 0 rgba(0, 0, 0, .2);
            }

            .mattheme, .bstheme {
                text-align: center;
                margin: 20px auto !important;
                background-color: transparent;
            }

            .mattheme p {
                border: 1px solid #934fab;
                padding: 6px;
                width: 40%;
                margin: 100px auto;
                background-color: rgba(94, 48, 110, .8);
            }

            .mattheme p a, .bstheme p a {
                font-size: 16px;
                color: #ffffff;
            }

            .fauxcardbs {
                background: url(./assets-bs/images/ui/greentheme.png) center no-repeat transparent;
                max-width: 491px;
                height: 300px;
                border-radius: .1875rem;
                position: relative;
                overflow: hidden;
                text-align: center;
                box-shadow: 0 5px 25px 0 rgba(0, 0, 0, .2);
            }

            .bstheme p {
                border: 1px solid green;
                padding: 6px;
                width: 40%;
                margin: 100px auto;
                background-color: rgba(2, 109, 14, .3);
            }

            a.bs:hover {
                color: green;
            }

            a.mat:hover {
                color: mediumpurple;
            }


            #failure {
            <?php echo "display: none;"; ?>
            }

            #failure_default_interpreter {
                display: none;
            <?php if (! quercus_test()) echo "display: block;"; ?>
            }

            #success_pro {
                display: none;
            <?php if (quercus_is_pro() && quercus_test()) echo "display: block;"; ?>
            }

            #success_open_source {
                display: none;
            <?php if (! quercus_is_pro() && quercus_test()) echo "display: block;"; ?>
            }
        </style>
    </head>
    <body>
        <div class="se-pre-con"></div>
        <div class="page-header" filter-color="blue">
            <div class="page-header-image" data-parallax="true"
                 style="background-image: url('./assets-bs/images/ui/2.jpg');"></div>
            <!-- First Parallax Section -->
            <header>
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="200">
                    <div class="container">
                        <div class="dropdown button-dropdown">
                            <a href="#" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
                                <span class="button-bar"></span>
                                <span class="button-bar"></span>
                                <span class="button-bar"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-header">Dropdown header</a>
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">One more separated link</a>
                            </div>
                        </div>
                        <div class="navbar-translate">
                            <a class="navbar-brand" href="#" rel="tooltip"
                               title="Created by Adam @ www.ui-design-engineering.com" data-placement="bottom">
                                myuikit.com <small>(sassified)</small>
                            </a>
                            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navigation" aria-controls="navigation-index" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse justify-content-end" id="navigation">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link Here</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link Here</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" rel="tooltip" title="LinkedIn Profile" data-placement="bottom"
                                       href="https://www.linkedin.com/in/sassmaster/" target="_blank">
                                        <i class="fa fa-linkedin"></i>

                                        <p class="d-lg-none d-xl-none">LinkedIn</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" rel="tooltip" title="My Github"
                                       data-placement="bottom"
                                       href="https://github.com/zom-b-food" target="_blank">
                                        <i class="fa fa-github-square"></i>

                                        <p class="d-lg-none d-xl-none">Github</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" rel="tooltip" title="Contact" data-placement="bottom"
                                       href="mailto:web@myuikit.com">
                                        <i class="fa fa-envelope"></i>

                                        <p class="d-lg-none d-xl-none">web@myuikit.com</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->
                <div class="heading container" id="heading-splash">
                    <h2 class="blockquote-white">SASS-ified Starter Kits</h2>

                    <p class="blockquote-white">Sassified with Grunt. Responsive and Modular. Guaranteed to compile ALL
                        your scss files.</p>


                </div>
            </header>
            <div id="starter-template">
                <div class="container">
                    <h1 class="centered">Pick Your SASS Starter Kit</h1>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="fauxcardmat mattheme"><p><a href="pages-mat/jump.php"
                                                                    class="mat">Materialize</a></p></div>
                        </div>
                        <div class="col-md-6">
                            <div class="fauxcardbs bstheme"><p><a href="pages-bs/jump.php"
                                                                        class="bs">Bootstrap</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="message" id="failure">
                        PHP files are not being interpreted by Quercus&#153;.
                    </div>
                    <div class="message" id="failure_default_interpreter">
                        PHP is being interpreted, but not by Quercus&#153;! Please check your configuration.
                    </div>
                    <div class="message" id="success_pro">
                        <img src="./assets-bs/images/ui/dragonfly-tiny.png" alt="Caucho Dragonfly Logo">Congratulations!
                        Quercus&#153; <?php if (quercus_test()) echo quercus_version(); ?> is compiling PHP pages.
                    </div>
                    <div class="message d-none d-md-block" id="success_open_source">
                        <img src="./assets-bs/images/ui/dragonfly-tiny.png" alt="Caucho Dragonfly Logo">Congratulations!
                        Quercus&#153; <?php if (quercus_test()) echo quercus_version(); ?> is interpreting PHP pages.
                    </div>
                </div>
                <footer class="d-none d-sm-block">
                    <div class="container">
                <span class="text-muted"><br/>

Resin <sup><font size="-1">&#174;</font></sup> is a registered trademark,
and Quercus<sup>tm</sup>, Amber<sup>tm</sup>, and Hessian<sup>tm</sup>
are trademarks of Caucho Technology.<br/>Created by Adam @ www.ui-design-engineering.com</span>
                    </div>
                </footer>
                <div class="text-muted d-none d-sm-block" style="position:absolute;bottom:0;">
                    <?php
                    $count_my_page = ("countlog.txt");
                    $hits = file($count_my_page);
                    $hits[0]++;
                    $fp = fopen($count_my_page, "w");
                    fputs($fp, "$hits[0]");
                    fclose($fp);
                    echo $hits[0];
                    ?>
                </div>



            </div>

        </div>
        <div class="links-sites">
            <a href="http://www.adam-marsh.com">Adam L Marsh www.adam-marsh.com</a>
            <a href="http://www.adam-marsh.com">Adam L Marsh http://www.adam-marsh.com</a>
            <a href="http://www.ui-design-engineering.com">Adam L Marsh www.ui-design-engineering.com</a>
            <a href="http://www.ui-design-engineering.com">Adam L Marsh http://www.ui-design-engineering.com</a>
            <a href="http://www.irisandpith.com">Webster Latimer - Author, Walking Through Brambles
                www.irisandpith.com</a>
            <a href="http://www.irisandpith.com">Webster Latimer - Author, Walking Through Brambles
                http://www.irisandpith.com</a>
            <a href="http://www.myuikit.com">Adam L Marsh www.myuikit.com</a>
            <a href="http://www.myuikit.com">Adam L Marsh http://www.myuikit.com</a>
            <a href="http://www.irisandpith.com">Webster Latimer - Author, Walking Through Brambles</a>
        </div>
        <script src="./assets-bs/js/components/popper.min.js" type="text/javascript"></script>
        <script src="./assets-bs/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="./assets-bs/js/bootstrap-switch.js" type="text/javascript"></script>
        <script src="./assets-bs/js/components/accordion.js" type="text/javascript"></script>
        <script src="./assets-bs/js/components/nouislider.min.js" type="text/javascript"></script>
        <script src="./assets-bs/js/components/wow.min.js" type="text/javascript"></script>
        <script src="./assets-bs/js/components/jquery.filtertable.js" type="text/javascript"></script>
        <script src="./assets-bs/js/components/tablesort.js" type="text/javascript"></script>
        <script src="./assets-bs/js/components/jquery.beefup.min.js"></script>
    </body>
</html>

