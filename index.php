<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0' name='viewport'/>
        <meta name="description" content="Adam L Marsh; UI/UX Designer and Developer, www.adam-marsh.com, www.ui-design-engineering.com, www.myuikit.com, front-end web design and development.">
        <meta name="author" content="ui-design-engineering.com www.myuikit.com">
        <script src="./assets1/js/jquery-2.1.1.js" type="text/javascript"></script>
        <script src="./assets1/compiled/_myuikit.min.js" type="text/javascript"></script>
        <link rel="icon" href="./assets1/images/ui/favicon.ico" type="image/x-icon"/>
        <link rel="shortcut icon" href="./assets1/images/ui/favicon.ico" type="image/x-icon"/>
        <link rel="apple-touch-icon-precomposed" href="./assets1/images/apple-touch-icon.png"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="./assets1/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="./assets1/compiled/_myuikit.min.css"/>
        <link rel="stylesheet" href="./assets1/css/custom.css"/>
        <title>
            Quercus&#153; Start Page
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
            .message {
                margin: 10px;
                padding: 10px;
                border: 1px rgba(4, 133, 125, .3);
                background: rgba(2, 109, 14, .3);
            }
            .blockquote-white {color:#ffffff;}
            h1.centered {
                text-align: center;
                margin-top: -28px;
            }

            .heading {
                top: 72px;
            }

            .greentheme {
                background: url(./assets1/images/ui/greentheme.jpg) center no-repeat transparent;
                width: 491px;
                height: 300px;
            }

            .redtheme {
                background: url(./assets2/images/ui/redtheme.jpg) center no-repeat transparent;
                width: 491px;
                height: 300px;
            }

            .greentheme *, .redtheme * {
                font-size: 16px;
                color: #ffffff;
                text-align: center;
            }

            .greentheme p {
                border: 1px solid green;
                padding: 6px;
                width: 40%;
                text-align: center;
                margin: 100px auto;
                background-color: rgba(2, 109, 14, .3);
            }

            .redtheme p {
                border: 1px solid red;
                padding: 6px;
                width: 40%;
                margin: 100px auto;
                background-color: rgba(218, 12, 17, .3);
            }

            a.green:hover {color:green;}
            a.red:hover {color:red;}

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
    <body class="sidebar-collapse">
        <div class="se-pre-con"></div>
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
                        <a class="navbar-brand" href="javascript:history.back()" rel="tooltip"
                           title="Created by Adam @ www.ui-design-engineering.com" data-placement="bottom">
                            BS-4 SASS Kit
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
                                <a class="nav-link" rel="tooltip" title="Like me on Facebook" data-placement="bottom"
                                   href="https://www.facebook.com/kungfurufus" target="_blank">
                                    <i class="fa fa-facebook-square"></i>

                                    <p class="d-lg-none d-xl-none">Facebook</p>
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
            <div class="page-header page-header-small" filter-color="green">
                <div class="page-header-image" data-parallax="false"
                     style="background-image: url('./assets1/images/bg5.jpg');"></div>
                <div class="heading container">
                    <h2 class="blockquote-white">SASS-ified BS-4 Kit</h2>
                    <p class="blockquote-white">Sassified with Grunt. Responsive and Modular. Guaranteed to compile ALL your scss files.</p>
                    <div class="message" id="failure">
                        PHP files are not being interpreted by Quercus&#153;.
                    </div>
                    <div class="message" id="failure_default_interpreter">
                        PHP is being interpreted, but not by Quercus&#153;! Please check your configuration.
                    </div>
                    <div class="message" id="success_pro">
                        <img src="./assets1/images/ui/dragonfly-tiny.png" alt="Caucho Dragonfly Logo">Congratulations!
                        Quercus&#153; <?php if (quercus_test()) echo quercus_version(); ?> is compiling PHP pages.
                    </div>
                    <div class="message d-none d-md-block" id="success_open_source">
                        <img src="./assets1/images/ui/dragonfly-tiny.png" alt="Caucho Dragonfly Logo">Congratulations!
                        Quercus&#153; <?php if (quercus_test()) echo quercus_version(); ?> is interpreting PHP pages.

                    </div>
                </div>
            </div>
        </header>
        <div class="starter-template container">
            <h1 class="centered">Bootstrap 4 SASS starter kit</h1>
            <div class="row">
                <div class="col-md-12 col-lg-6 greentheme"><p><a href="pages1/jump.php" class="green">Green Theme</a></p></div>
                <div class="col-md-12 col-lg-6 redtheme"><p><a href="pages2/jump.php" class="red">Red Theme</a></p></div>

            </div>

        </div>

        <div style="color:#cccccc;position:absolute;bottom:64px;" class="d-none d-sm-block">
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
        <div class="links-sites">
            <a href="http://www.adam-marsh.com">Adam L Marsh www.adam-marsh.com</a>
            <a href="http://www.adam-marsh.com">Adam L Marsh http://www.adam-marsh.com</a>
            <a href="http://www.ui-design-engineering.com">Adam L Marsh www.ui-design-engineering.com</a>
            <a href="http://www.ui-design-engineering.com">Adam L Marsh http://www.ui-design-engineering.com</a>
            <a href="http://www.irisandpith.com">Webster Latimer - Author, Walking Through Brambles www.irisandpith.com</a>
            <a href="http://www.irisandpith.com">Webster Latimer - Author, Walking Through Brambles http://www.irisandpith.com</a>
            <a href="http://www.myuikit.com">Adam L Marsh www.myuikit.com</a>
            <a href="http://www.myuikit.com">Adam L Marsh http://www.myuikit.com</a>
            <a href="http://www.irisandpith.com">Webster Latimer - Author, Walking Through Brambles</a>
        </div>
        <footer>

            <div class="container">
                <span class="text-muted"><br/>

Resin <sup><font size="-1">&#174;</font></sup> is a registered trademark,
and Quercus<sup>tm</sup>, Amber<sup>tm</sup>, and Hessian<sup>tm</sup>
are trademarks of Caucho Technology.<br/>Created by Adam @ www.ui-design-engineering.com</span>
            </div>
        </footer>
        <script src="./assets1/js/components/popper.min.js" type="text/javascript"></script>
        <script src="./assets1/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="./assets1/js/bootstrap-switch.js" type="text/javascript"></script>
        <script src="./assets1/js/components/accordion.js" type="text/javascript"></script>
        <script src="./assets1/js/components/nouislider.min.js" type="text/javascript"></script>
        <script src="./assets1/js/components/wow.min.js" type="text/javascript"></script>
        <script src="./assets1/js/components/jquery.filtertable.js" type="text/javascript"></script>
        <script src="./assets1/js/components/tablesort.js" type="text/javascript"></script>
        <script src="./assets1/js/components/jquery.beefup.min.js"></script>

    </body>
</html>

