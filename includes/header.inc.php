<?php  
  require_once('app/Baseclass.php');


  use App\Classes\QueryClass;
  use App\Classes\Baseclass;

  $queryclass = new QueryClass();
  $baseclass = new Baseclass();

  ?>

<link rel="shortcut icon" href="cdn.shopify.com/s/files/1/0012/3024/1844/t/11/assets/favicon020a.png?16680006302654876230"
    type="image/png" />
  <!-- Social meta ================================================== -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="Drug Consult Pharmacy">
  <meta property="og:url" content="index.html">

  <meta property="og:image" content="cdn.shopify.com/s/files/1/0012/3024/1844/t/11/assets/logo020a.png?16680006302654876230">
  <meta property="og:image:secure_url" content="cdn.shopify.com/s/files/1/0012/3024/1844/t/11/assets/logo020a.png?16680006302654876230">
  <meta property="og:site_name" content="Drug Consult Store">
  <meta name="twitter:card" content="summary">
  <!-- Helpers ================================================== -->
  <link rel="canonical" href="index.php">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="theme-color" content="#dd3a2e">

  <!-- CSS ================================================== -->
  <link href="cdn.shopify.com/s/files/1/0012/3024/1844/t/11/assets/bootstrap.min020a.css?16680006302654876230" rel="stylesheet"
    type="text/css" media="all" />
  <link href="cdn.shopify.com/s/files/1/0012/3024/1844/t/11/assets/timber.scss020a.css?16680006302654876230" rel="stylesheet"
    type="text/css" media="all" />
  <link href="cdn.shopify.com/s/files/1/0012/3024/1844/t/11/assets/font-awesome.min020a.css?16680006302654876230" rel="stylesheet"
    type="text/css" media="all" />
  <link href="cdn.shopify.com/s/files/1/0012/3024/1844/t/11/assets/material-design-iconic-font.min020a.css?16680006302654876230"
    rel="stylesheet" type="text/css" media="all" />
  <link href="cdn.shopify.com/s/files/1/0012/3024/1844/t/11/assets/material-design-iconic-font020a.css?16680006302654876230"
    rel="stylesheet" type="text/css" media="all" />
  <link href="cdn.shopify.com/s/files/1/0012/3024/1844/t/11/assets/animate020a.css?16680006302654876230" rel="stylesheet"
    type="text/css" media="all" />
  <link href="cdn.shopify.com/s/files/1/0012/3024/1844/t/11/assets/style020a.css?16680006302654876230" rel="stylesheet"
    type="text/css" media="all" />
  <link href="cdn.shopify.com/s/files/1/0012/3024/1844/t/11/assets/settings020a.css?16680006302654876230" rel="stylesheet"
    type="text/css" media="all" />
  <link href="cdn.shopify.com/s/files/1/0012/3024/1844/t/11/assets/prettyPhoto020a.css?16680006302654876230" rel="stylesheet"
    type="text/css" media="all" />
  <link href="cdn.shopify.com/s/files/1/0012/3024/1844/t/11/assets/slick020a.css?16680006302654876230" rel="stylesheet"
    type="text/css" media="all" />
  <link href="cdn.shopify.com/s/files/1/0012/3024/1844/t/11/assets/slick-theme020a.css?16680006302654876230" rel="stylesheet"
    type="text/css" media="all" />


  <link href="fonts.googleapis.com/css0325.css?family=Poppins:400,500,600" rel="stylesheet">


  <link href="fonts.googleapis.com/css0325.css?family=Poppins:400,500,600" rel="stylesheet">


  <link href="fonts.googleapis.com/css0325.css?family=Poppins:400,500,600" rel="stylesheet">


  <link href="fonts.googleapis.com/cssa94d.css?family=Karma" rel="stylesheet">

  <script src="cdn.shopify.com/s/files/1/0012/3024/1844/t/11/assets/bootstrap.min020a.js?16680006302654876230" type="text/javascript"></script>
  
  <!-- Header hook for plugins ================================================== -->
  <style>
    .shopify-payment-button__button--hidden {
      visibility: hidden;
    }

    .shopify-payment-button__button {
      border-radius: 4px;
      border: none;
      box-shadow: 0 0 0 0 transparent;
      color: white;
      cursor: pointer;
      display: block;
      font-size: 1em;
      font-weight: 500;
      line-height: 1;
      text-align: center;
      width: 100%;
      transition: background 0.2s ease-in-out;
    }

    .shopify-payment-button__button[disabled] {
      opacity: 0.6;
      cursor: default;
    }

    .shopify-payment-button__button--unbranded {
      background-color: #1990c6;
      padding: 1em 2em;
    }

    .shopify-payment-button__button--unbranded:hover:not([disabled]) {
      background-color: #136f99;
    }

    .shopify-payment-button__more-options {
      background: transparent;
      border: 0 none;
      cursor: pointer;
      display: block;
      font-size: 1em;
      margin-top: 1em;
      text-align: center;
      width: 100%;
    }

    .shopify-payment-button__more-options:hover:not([disabled]) {
      text-decoration: underline;
    }

    .shopify-payment-button__more-options[disabled] {
      opacity: 0.6;
      cursor: default;
    }

    .shopify-payment-button__button--branded {
      display: flex;
      flex-direction: column;
      min-height: 44px;
      position: relative;
      z-index: 1;
    }

    .shopify-payment-button__button--branded .shopify-cleanslate {
      flex: 1 !important;
      display: flex !important;
      flex-direction: column !important;
    }
  </style>
 
  
  <link rel="stylesheet" media="screen" href="cdn.shopify.com/s/files/1/0012/3024/1844/t/11/compiled_assets/styles020a.css?16680006302654876230">

  <script src="cdn.shopify.com/s/files/1/0012/3024/1844/t/11/assets/header020a.js?16680006302654876230" type="text/javascript"></script>

  <script>
    /* loader */
    $(document).ready(function () {
      var o = $('#page-preloader');
      if (o.length > 0) {
        $(window).on('load', function () {
          $('#page-preloader').removeClass('visible');
        });
      }
    });
  </script>
</head>

<body id="maxdino-store" class="template-index">

  <div id="page-preloader" class="visible">
    <div class="preloader">
      <div id="loading-center-absolute">
        <div class="object" id="object_one"></div>
      </div>
    </div>
  </div>
  <?php 
 $allCatHeader = $queryclass->getAllCategories();
 //var_dump($allCat);
 ?>

  <div id="PageContainer"></div>
  <div class="quick-view"></div>
  <div id="shopify-section-header" class="shopify-section">
    <div data-section-id="header" class="headertop">

      <div class="top_bar top-bar">
        <div class="container">
          <div class="row">
            <div class="wrapper mobile-nav-section hidden-sm hidden-md hidden-lg col-xs-2">
              <button type="button" class="mobile-nav-trigger" id="MobileNavTrigger">
                <span class="icon-menu" aria-hidden="true"></span>
              </button>
            </div>
            <!-- Mobile Navigation Start -->
            <ul id="MobileNav" class="mobile-nav wide--hide post-large--hide large--hide">

          
         
          <?php foreach($allCat as $category){ ?>
              <li class="mobile-nav__link" aria-haspopup="true">

                <a href="#" class="mobile-nav ">
                - <?php echo $category['category']; ?>
                </a>

              </li>

          <?php } ?>

          
            </ul>

<!-- End of Mobile Nav -->

            <div class="col-sm-5 col-xs-12 hidden-xs">
              <ul class="list-inline list-unstyled">

                <li class="header_social">
                  <ul class="inline-list social-icons">

                    <li>
                      <a class="icon-fallback-text twitt hexagon" target="blank" href="https://twitter.com/webiarch" title="Twitter">
                        <i class="fa fa-twitter"></i>
                      </a>
                    </li>


                    <li>
                      <a class="icon-fallback-text fb hexagon" target="blank" href="https://www.facebook.com/" title="Facebook">
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>


                    <li>
                      <a class="icon-fallback-text pin hexagon" target="blank" href="https://www.pinterest.com/" title="Pinterest">
                        <i class="fa fa-pinterest"></i>
                      </a>
                    </li>


                    <li>
                      <a class="icon-fallback-text google hexagon" target="blank" href="https://plus.google.com/" title="Google+" rel="publisher">
                        <i class="fa fa-google-plus"></i>
                      </a>
                    </li>


                    <li>
                      <a class="icon-fallback-text ins" target="blank" href="https://instagram.com/" title="Instagram">
                        <i class="fa fa-instagram"></i>
                      </a>
                    </li>

                  </ul>

                </li>

              </ul>
            </div>

            <div class="col-sm-7 col-xs-10 text-right">
              <ul class="list-unstyled list-inline">
                <li>
                  <a class="topwish" href="" title="Wishlist">Wishlist</a>
                </li>
                <li>

                  <div class="slidedown_section">
                    <a id="Togglemodal">
                      <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-login" viewBox="0 0 55 55">
                        <path d="M55,27.5C55,12.337,42.663,0,27.5,0S0,12.337,0,27.5c0,8.009,3.444,15.228,8.926,20.258l-0.026,0.023l0.892,0.752
	c0.058,0.049,0.121,0.089,0.179,0.137c0.474,0.393,0.965,0.766,1.465,1.127c0.162,0.117,0.324,0.234,0.489,0.348
	c0.534,0.368,1.082,0.717,1.642,1.048c0.122,0.072,0.245,0.142,0.368,0.212c0.613,0.349,1.239,0.678,1.88,0.98
	c0.047,0.022,0.095,0.042,0.142,0.064c2.089,0.971,4.319,1.684,6.651,2.105c0.061,0.011,0.122,0.022,0.184,0.033
	c0.724,0.125,1.456,0.225,2.197,0.292c0.09,0.008,0.18,0.013,0.271,0.021C25.998,54.961,26.744,55,27.5,55
	c0.749,0,1.488-0.039,2.222-0.098c0.093-0.008,0.186-0.013,0.279-0.021c0.735-0.067,1.461-0.164,2.178-0.287
	c0.062-0.011,0.125-0.022,0.187-0.034c2.297-0.412,4.495-1.109,6.557-2.055c0.076-0.035,0.153-0.068,0.229-0.104
	c0.617-0.29,1.22-0.603,1.811-0.936c0.147-0.083,0.293-0.167,0.439-0.253c0.538-0.317,1.067-0.648,1.581-1
	c0.185-0.126,0.366-0.259,0.549-0.391c0.439-0.316,0.87-0.642,1.289-0.983c0.093-0.075,0.193-0.14,0.284-0.217l0.915-0.764
	l-0.027-0.023C51.523,42.802,55,35.55,55,27.5z M2,27.5C2,13.439,13.439,2,27.5,2S53,13.439,53,27.5
	c0,7.577-3.325,14.389-8.589,19.063c-0.294-0.203-0.59-0.385-0.893-0.537l-8.467-4.233c-0.76-0.38-1.232-1.144-1.232-1.993v-2.957
	c0.196-0.242,0.403-0.516,0.617-0.817c1.096-1.548,1.975-3.27,2.616-5.123c1.267-0.602,2.085-1.864,2.085-3.289v-3.545
	c0-0.867-0.318-1.708-0.887-2.369v-4.667c0.052-0.519,0.236-3.448-1.883-5.864C34.524,9.065,31.541,8,27.5,8
	s-7.024,1.065-8.867,3.168c-2.119,2.416-1.935,5.345-1.883,5.864v4.667c-0.568,0.661-0.887,1.502-0.887,2.369v3.545
	c0,1.101,0.494,2.128,1.34,2.821c0.81,3.173,2.477,5.575,3.093,6.389v2.894c0,0.816-0.445,1.566-1.162,1.958l-7.907,4.313
	c-0.252,0.137-0.502,0.297-0.752,0.476C5.276,41.792,2,35.022,2,27.5z M42.459,48.132c-0.35,0.254-0.706,0.5-1.067,0.735
	c-0.166,0.108-0.331,0.216-0.5,0.321c-0.472,0.292-0.952,0.57-1.442,0.83c-0.108,0.057-0.217,0.111-0.326,0.167
	c-1.126,0.577-2.291,1.073-3.488,1.476c-0.042,0.014-0.084,0.029-0.127,0.043c-0.627,0.208-1.262,0.393-1.904,0.552
	c-0.002,0-0.004,0.001-0.006,0.001c-0.648,0.16-1.304,0.293-1.964,0.402c-0.018,0.003-0.036,0.007-0.054,0.01
	c-0.621,0.101-1.247,0.174-1.875,0.229c-0.111,0.01-0.222,0.017-0.334,0.025C28.751,52.97,28.127,53,27.5,53
	c-0.634,0-1.266-0.031-1.895-0.078c-0.109-0.008-0.218-0.015-0.326-0.025c-0.634-0.056-1.265-0.131-1.89-0.233
	c-0.028-0.005-0.056-0.01-0.084-0.015c-1.322-0.221-2.623-0.546-3.89-0.971c-0.039-0.013-0.079-0.027-0.118-0.04
	c-0.629-0.214-1.251-0.451-1.862-0.713c-0.004-0.002-0.009-0.004-0.013-0.006c-0.578-0.249-1.145-0.525-1.705-0.816
	c-0.073-0.038-0.147-0.074-0.219-0.113c-0.511-0.273-1.011-0.568-1.504-0.876c-0.146-0.092-0.291-0.185-0.435-0.279
	c-0.454-0.297-0.902-0.606-1.338-0.933c-0.045-0.034-0.088-0.07-0.133-0.104c0.032-0.018,0.064-0.036,0.096-0.054l7.907-4.313
	c1.36-0.742,2.205-2.165,2.205-3.714l-0.001-3.602l-0.23-0.278c-0.022-0.025-2.184-2.655-3.001-6.216l-0.091-0.396l-0.341-0.221
	c-0.481-0.311-0.769-0.831-0.769-1.392v-3.545c0-0.465,0.197-0.898,0.557-1.223l0.33-0.298v-5.57l-0.009-0.131
	c-0.003-0.024-0.298-2.429,1.396-4.36C21.583,10.837,24.061,10,27.5,10c3.426,0,5.896,0.83,7.346,2.466
	c1.692,1.911,1.415,4.361,1.413,4.381l-0.009,5.701l0.33,0.298c0.359,0.324,0.557,0.758,0.557,1.223v3.545
	c0,0.713-0.485,1.36-1.181,1.575l-0.497,0.153l-0.16,0.495c-0.59,1.833-1.43,3.526-2.496,5.032c-0.262,0.37-0.517,0.698-0.736,0.949
	l-0.248,0.283V39.8c0,1.612,0.896,3.062,2.338,3.782l8.467,4.233c0.054,0.027,0.107,0.055,0.16,0.083
	C42.677,47.979,42.567,48.054,42.459,48.132z" />
                      </svg> My Account
                      <i class="fa fa-angle-down"></i>
                    </a>
                    <div id="acdrop">
                      <div class="header-panel-top">

                        <div class="customer_account text-left">
                          <ul class="list-unstyled">

                            <li>
                              <a href="auth/conduit.php">
                                <i class="fa fa-lock"></i>
                                Log in
                              </a>
                            </li>
                            <li>
                              <a href="auth/conduit.php" title="Create account">
                                <i class="fa fa-user"></i>
                                Create account
                              </a>
                            </li>

                          </ul>
                        </div>

                      </div>
                    </div>
                  </div>


                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

<!-- End of Top Header --> 

      <header class="site-header">
        <div id="header-landing">
          <div class="container">
            <div class="row">
              <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 hlogo">
                <div class="" style="max-width: 150px; padding: 0px 10px 0px 10px; background: #fff; margin-top: -14px; border-radius: 0.5em;" >


                  <a href="index.php" >
                    <img class="normal-logo" src="img/drugconsultlogo.jpg"
                      alt="DC Store" itemprop="logo">
                  </a>


                </div>
              </div>

              <div class="header-search col-lg-8 col-md-6 col-sm-6 col-xs-12">
                <div id="toggle-search">
                  <form action="#" method="get" class="input-group">
                    <input type="text" id="search" name="q" value="" placeholder="Search..." aria-label="Search..." class="search-bar__input ">
                    <div class="input-group-btn">
                      <button class="btn" type="submit" value="">Search</button>
                    </div>
                  </form>
                </div>
              </div>

              <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 text-right xsheader">
                <div class="header-bar__module cart header_cart">

                  <!-- Mini Cart Start -->
                  <div class="baskettop">
                    <div class="wrapper-top-cart">
                      <a href="javascript:void(0)" id="ToggleDown" class="icon-cart-arrow">
                        <div class="detail">
                          <svg aria-hidden="true" focusable="false" role="presentation" class="icon iconcart" viewBox="0 0 512 512">
                            <path d="M480.6,179.6h-54C425.5,86.4,349.4,11,256,11S86.5,86.4,85.5,179.6h-54c-19.1,1.5-21.1,17.9-20.1,23.8L59,484    c1.7,9.8,10.2,17,20.1,17h353.8c10,0,18.5-7.2,20.1-17l47.7-280.6C501.7,197.5,499.3,181,480.6,179.6z M256,51.8    c70.9,0,128.6,57.1,129.7,127.7H126.3C127.4,108.9,185.1,51.8,256,51.8z M415.7,460.2H96.4L55.6,220.4h400.8L415.7,460.2z"
                            />
                            <path d="m170.9,309.7h170.1c11.3,0 20.4-9.1 20.4-20.4s-9.1-20.4-20.4-20.4h-170.1c-11.3,0-20.4,9.1-20.4,20.4s9.2,20.4 20.4,20.4z"
                            />
                            <path d="m170.9,411.7h170.1c11.3,0 20.4-9.1 20.4-20.4 0-11.3-9.1-20.4-20.4-20.4h-170.1c-11.3,0-20.4,9.1-20.4,20.4 0,11.3 9.2,20.4 20.4,20.4z"
                            />
                          </svg>
                          <span id="cartCount">
                            0
                          </span>
                          <span id="minicart_total">shopping cart</span>
                        </div>
                      </a>
                      <div id="slidedown-cart" style="display:none">
                        <!--  <h3>Shopping cart</h3>-->
                        <div class="no-items">
                          <p>Your cart is currently empty!</p>
                          <p class="text-continue">
                            <a class="btn" href="#">Continue shopping</a>
                          </p>
                        </div>
                        <div class="has-items">
                          <ul class="mini-products-list">

                          </ul>

                          <div class="summary">
                            <p class="total">
                              <span>Cart total:</span>
                              <span class="price pull-right">
                                <span class=money>$0.00</span>
                              </span>
                            </p>
                          </div>



                          <div class="actions">
                            <button class="btn" onclick="window.location='checkout.html'">
                              <i class="fa fa-check"></i>Check Out</button>
                            <button class="btn text-cart" onclick="window.location='cart.html'">
                              <i class="fa fa-shopping-basket"></i>View Cart</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Top Header -->

                </div>
              </div>
            </div>
          </div>
        </div>
      </header>


      <style>
        .headertop a.close {
          background: ;
        }

        .headertop a.close:hover {
          background: ;
        }

        .headertop ul li {
          color: ;
        }

        .headertop .top_bar {
          padding: 10px 0;
          background: #ededed;
        }

        .headertop .top_bar li {
          color: #6e6e6e;
        }

        .headertop .top_bar a {
          color: #6e6e6e;
        }

        .headertop .top_bar a:hover,
        .headertop .top_bar a:hover span {
          color: #dd3a2e;
        }


        /* Menu  block */

        .headertop .menu-tool ul li {
          color: ;
        }

        .headertop .menu-tool ul li a:hover,
        .headertop .menu-tool .site-nav>li>a.current:hover,
        .headertop .is-sticky .menu_icon li a:hover i {
          color: #dd3a2e;
        }

        .headertop .menu-tool .site-nav>li>a.current {
          color: #9bda54;
        }

        .headertop .site-nav-dropdown,
        #MobileNav,
        .mobile-nav__sublist {
          background: #fff;
        }

        .headertop .site-nav-dropdown .inner>a {
          color: #282828;
        }

        .headertop .site-nav-dropdown .inner>a:hover {
          color: #9bda54;
        }

        .headertop .site-nav-dropdown .inner .dropdown a,
        .headertop .menu-tool .site-nav .site-nav-dropdown li a,
        #MobileNav a,
        .mobile-nav__sublist a,
        .site-nav .widget-featured-nav .owl-prev a,
        .site-nav .widget-featured-nav .owl-next a,
        .site-nav .widget-featured-product .product-title {
          color: #282828;
        }

        .headertop .site-nav-dropdown .inner .dropdown a:hover,
        .headertop .menu-tool .site-nav .site-nav-dropdown li a:hover,
        #MobileNav a:hover,
        .mobile-nav__sublist a:hover,
        #MobileNav a.current,
        .mobile-nav__sublist a.current,
        .site-nav .widget-featured-nav .owl-prev a:hover,
        .site-nav .widget-featured-nav .owl-next a:hover,
        .site-nav .widget-featured-product .product-title:hover {
          color: #9bda54;
        }

        /* Dropdown block */

        .headertop .menu_icon #Togglemodal i {
          color: ;
        }

        .headertop .menu_icon #Togglemodal i:hover {
          color: ;
        }

        .headertop #acdrop ul li a {
          color: #282828;
        }

        .headertop #acdrop ul li a:hover {
          color: #9bda54;
        }

        /* Search block */

        .headertop .header-search span,
        .headertop .search-bar__form button.res_btn {
          color: ;
        }

        .headertop .header-search span:hover,
        .headertop .search-bar__form button.res_btn:hover {
          color: ;
        }

        .headertop .header-search input[type="text"] {
          margin-bottom: 0;
          border-radius: 4px 0 0 4px;
          border: none;
          height: 50px;
          background: #ffffff;
        }

        .headertop .header-search .btn {
          min-width: 110px;
          height: 50px;
          border-radius: 0 4px 4px 0;
          color: #282828;
          background: #9bda54;
        }

        .headertop .header-search .btn:hover {
          color: #ffffff;
          background: #dd3a2e;
        }

        .headertop .search-bar__form button.res_btn {
          background: none;
          border: none;
          height: auto;
        }



        /* Cart Summary block */

        .headertop #minicart_total,
        .headertop a .detail {
          font-weight: 500;
          color: #000;
        }

        .headertop a.icon-cart-arrow:hover i {
          color: #dd3a2e;
        }

        .headertop #slidedown-cart .actions,
        .headertop #slidedown-cart {
          background: #ffffff;
        }

        .headertop .header-bar__module p {
          padding: 0 10px;
          text-transform: capitalize;
          color: #999999;
        }

        .headertop .product-details p {
          font-size: 12px;
          margin-bottom: 0;
          padding: 0
        }

        .headertop .header-bar__module a {
          color: #282828;
        }

        .headertop .header-bar__module a:hover {
          color: #dd3a2e;
        }

        .headertop .header-bar__module .btn {
          color: #ffffff;
          background: #dd3a2e;
        }

        .headertop .header-bar__module .btn:hover {
          color: #282828;
          background: #9bda54;
          border-color: #9bda54;
        }

        .headertop #slidedown-cart .total .price,
        .headertop #slidedown-cart ul li .cart-collateral {
          color: #282828;
        }

        .headertop #minicart_total:before {
          background: #000;
        }

        .headertop #slidedown-cart li {
          border-bottom: 1px solid #eee;
        }


        /* Currency block */

        .headertop .select-selected.select-arrow-active:after {
          border-color: transparent transparent transparent;
        }

        .headertop .select-selected:after {
          border-color: transparent transparent transparent;
        }

        .headertop .header_currency ul li.currency:after {
          border-top-color: ;
        }

        .headertop .tbl-list>li.currency>.dropdown-toggle:hover {
          color: ;
        }

        .headertop .select-selected {
          color: #6c6c6c;
        }

        .headertop .select-selected:hover {
          color: #dd3a2e;
        }

        /* Header borders */

        .headertop .site-nav>li>a:before {
          background: ;
        }
      </style>
    </div>

  </div>
