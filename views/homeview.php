<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>JackPot</title>
    <link href="<?php echo base_url();?>assets_home/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets_home/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets_home/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets_home/css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>assets_home/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>assets_home/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>assets_home/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>assets_home/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body data-spy="scroll" data-target="#navbar" data-offset="0">
    <header id="header" role="banner">
        <div class="container">
            <div id="navbar" class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>"></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#main-slider"><i class="icon-home"></i></a></li>
                        <li><a href="#category">Category</a></li>
                        <li><a href="#topproducts">Top Products</a></li>
                        <li><a href="#pricing">Pricing</a></li>
                        <li><a href="#about-us">About Us</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header><!--/#header-->

    <section id="main-slider" class="carousel">
        <div class="carousel-inner">
            <div class="item active">
                <div class="container">
                    <div class="carousel-content">
                        <h1>JackPot</h1>
                        <p class="lead">Nepal's best online shopping</p>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item">
                <div class="container">
                    <div class="carousel-content">
                        <h1>Shop Anything</h1>
                        <p class="lead">Win JackPot each day<br/>50% Discount on every item after purchase of goods more than Rs. 5000</p>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
        <a class="prev" href="#main-slider" data-slide="prev"><i class="icon-angle-left"></i></a>
        <a class="next" href="#main-slider" data-slide="next"><i class="icon-angle-right"></i></a>
    </section><!--/#main-slider-->

    <section id="category">


        <div class="container">

            <div class="box first">
              <h2 style="">Categories</h2>
                <div class="row">

                  <?php
                  foreach ($category as $c) {
                  ?>
                    <div class="col-md-4 col-sm-6">
                        <div class="left">
                            <i class="icon-apple icon-md icon-color1"></i>
                            <?php echo $c['category_name'];?>
                          </div>
                      </div>
                      <?php }?>
                </div><!--/.row-->

            </div><!--/.box-->

        </div><!--/.container-->
    </section><!--/#services-->

    <section id="topproducts">
        <div class="container">
            <div class="box">
                <div class="center gap">
                    <h2>Top Products</h2>
                    <p class="lead"></p>
                </div><!--/.center-->
                <ul class="portfolio-filter">
                    <li><a class="btn btn-primary active" href="#" data-filter="*">Clothing</a></li>
                    <li><a class="btn btn-primary" href="#" data-filter=".bootstrap">Gadgets</a></li>
                    <li><a class="btn btn-primary" href="#" data-filter=".html">Food</a></li>
                    <li><a class="btn btn-primary" href="#" data-filter=".wordpress">Home Appliances</a></li>
                </ul><!--/#portfolio-filter-->
                <ul class="portfolio-items col-4">
                    <li class="portfolio-item apps">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="<?php echo base_url();?>assets_home/images/portfolio/thumb/item1.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="images/portfolio/full/item1.jpg"><i class="icon-eye-open"></i></a>
                                </div>
                            </div>
                            <h5></h5>
                        </div>
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item joomla bootstrap">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="<?php echo base_url();?>assets_home/images/portfolio/thumb/item2.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="images/portfolio/full/item2.jpg"><i class="icon-eye-open"></i></a>
                                </div>
                            </div>
                            <h5></h5>
                        </div>
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item bootstrap wordpress">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="<?php echo base_url();?>assets_home/images/portfolio/thumb/item3.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="images/portfolio/full/item3.jpg"><i class="icon-eye-open"></i></a>
                                </div>
                            </div>
                            <h5></h5>
                        </div>
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item joomla wordpress apps">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="<?php echo base_url();?>assets_home/images/portfolio/thumb/item4.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="images/portfolio/full/item4.jpg"><i class="icon-eye-open"></i></a>
                                </div>
                            </div>
                            <h5></h5>
                        </div>
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item joomla html">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="<?php echo base_url();?>assets_home/images/portfolio/thumb/item5.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="images/portfolio/full/item5.jpg"><i class="icon-eye-open"></i></a>
                                </div>
                            </div>
                            <h5></h5>
                        </div>
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item wordpress html">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="<?php echo base_url();?>assets_home/images/portfolio/thumb/item6.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="images/portfolio/full/item6.jpg"><i class="icon-eye-open"></i></a>
                                </div>
                            </div>
                            <h5></h5>
                        </div>
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item joomla html">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="<?php echo base_url();?>assets_home/images/portfolio/thumb/item5.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="images/portfolio/full/item5.jpg"><i class="icon-eye-open"></i></a>
                                </div>
                            </div>
                            <h5></h5>
                        </div>
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item wordpress html">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="<?php echo base_url();?>assets_home/images/portfolio/thumb/item6.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="images/portfolio/full/item6.jpg"><i class="icon-eye-open"></i></a>
                                </div>
                            </div>
                            <h5></h5>
                        </div>
                    </li><!--/.portfolio-item-->
                </ul>
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#portfolio-->

    <section id="pricing">
        <div class="container">
            <div class="box">
                <div class="center">
                    <h2>See our Pricings</h2>
                    <p class="lead"></p>
                </div><!--/.center-->
                <div class="big-gap"></div>
                <div id="pricing-table" class="row">
                    <div class="col-sm-4">
                        <ul class="plan">
                            <li class="plan-name">Purchase upto Rs. 10,000</li>
                            <li class="plan-price">General Member</li>
                            <li>10% Discount on Clothing</li>
                            <li>No Discount on others</li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li class="plan-action"><a href="#" class="btn btn-primary btn-lg">Signup</a></li>
                        </ul>
                    </div><!--/.col-sm-4-->
                    <div class="col-sm-4">
                        <ul class="plan featured">
                            <li class="plan-name">Purchase upto Rs. 20,000</li>
                            <li class="plan-price">Standard Member</li>
                            <li>20% Discount on Clothing</li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li class="plan-action"><a href="#" class="btn btn-primary btn-lg"></a></li>
                        </ul>
                    </div><!--/.col-sm-4-->
                    <div class="col-sm-4">
                        <ul class="plan">
                            <li class="plan-name">Purchase upto Rs. 50,000</li>
                            <li class="plan-price">Premium Member</li>
                            <li>50% Discount on Clothing</li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li class="plan-action"><a href="#" class="btn btn-primary btn-lg">Signup</a></li>
                        </ul>
                    </div><!--/.col-sm-4-->
                </div>
            </div>
        </div>
    </section><!--/#pricing-->

    <section id="about-us">
        <div class="container">
            <div class="box">
                <div class="center">
                    <h2>Meet the Team</h2>
                    <p class="lead">Top Businessmen of the country</p>
                </div>
                <div class="gap"></div>
                <div id="team-scroller" class="carousel scale">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="member">
                                        <p><img class="img-responsive img-thumbnail img-circle" src="<?php echo base_url();?>assets_home/images/team1.jpg" alt="" ></p>
                                        <h3>Smaran Luitel<small class="designation">CEO &amp; Founder</small></h3>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="member">
                                        <p><img class="img-responsive img-thumbnail img-circle" src="<?php echo base_url();?>assets_home/images/team2.jpg" alt="" ></p>
                                        <h3>Sujan Limbu<small class="designation">Senior Vice President</small></h3>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="member">
                                        <p><img class="img-responsive img-thumbnail img-circle" src="<?php echo base_url();?>assets_home/images/team3.jpg" alt="" ></p>
                                        <h3>Deepak Subedi<small class="designation">Assitant Vice President</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="member">
                                        <p><img class="img-responsive img-thumbnail img-circle" src="<?php echo base_url();?>assets_home/images/team3.jpg" alt="" ></p>
                                        <h3>Sushil Thapa<small class="designation">Co-Founder</small></h3>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="member">
                                        <p><img class="img-responsive img-thumbnail img-circle" src="<?php echo base_url();?>assets_home/images/team1.jpg" alt="" ></p>
                                        <h3>Sandeep Khanal<small class="designation">Marketing Manager</small></h3>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="member">
                                        <p><img class="img-responsive img-thumbnail img-circle" src="<?php echo base_url();?>assets_home/images/team2.jpg" alt="" ></p>
                                        <h3>Arjun Lama<small class="designation">Support Manager</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="left-arrow" href="#team-scroller" data-slide="prev">
                        <i class="icon-angle-left icon-4x"></i>
                    </a>
                    <a class="right-arrow" href="#team-scroller" data-slide="next">
                        <i class="icon-angle-right icon-4x"></i>
                    </a>
                </div><!--/.carousel-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#about-us-->

    <section id="contact">
        <div class="container">
            <div class="box last">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Contact Form</h1>
                        <p></p>
                        <div class="status alert alert-success" style="display: none"></div>
                        <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php" role="form">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" required="required" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" required="required" placeholder="Email address">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-danger btn-lg">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div><!--/.col-sm-6-->
                    <div class="col-sm-6">
                        <h1>Our Address</h1>
                        <div class="row">
                            <div class="col-md-6">
                                <address>
                                    <strong>Kings Way, Kathmandu</strong><br>

                                    <abbr title="Phone">P:</abbr> 9849302279
                                </address>
                            </div>
                            <div class="col-md-6">
                                <address>
                                    <strong></strong><br>
                                    <br>
                                    <br>
                                    <abbr title="Phone"></abbr>
                                </address>
                            </div>
                        </div>
                        <h1>Connect with us</h1>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="social">
                                    <li><a href="#"><i class="icon-facebook icon-social"></i> Facebook</a></li>
                                    <li><a href="#"><i class="icon-google-plus icon-social"></i> Google Plus</a></li>
                                    <li><a href="#"><i class="icon-pinterest icon-social"></i> Pinterest</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="social">
                                    <li><a href="#"><i class="icon-linkedin icon-social"></i> Linkedin</a></li>
                                    <li><a href="#"><i class="icon-twitter icon-social"></i> Twitter</a></li>
                                    <li><a href="#"><i class="icon-youtube icon-social"></i> Youtube</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--/.col-sm-6-->
                </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#contact-->

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2016 <a target="_blank" href="http://jackpot.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">JackPot, Inc</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <img class="pull-right" src="<?php echo base_url();?>assets_home/images/shapebootstrap.png" alt="ShapeBootstrap" title="ShapeBootstrap">
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="<?php echo base_url();?>assets_home/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets_home/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets_home/js/jquery.isotope.min.js"></script>
    <script src="<?php echo base_url();?>assets_home/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url();?>assets_home/js/main.js"></script>
</body>
</html>
