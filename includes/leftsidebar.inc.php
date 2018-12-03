<?php 
 $allCat = $queryclass->getAllCategories();
 //var_dump($allCat);
 ?>

<div class="col-md-3 col-sm-4 col-xs-12 leftw">
          <div id="shopify-section-site-nav" class="shopify-section index-section hidden-xs">
            <h1 class="lefthead" style="color:#fff; background: #156322;">Pharmacy</h1>
            <ul class="site-nav">
        <?php foreach($allCat as $category){ ?>

              <li class="level1">
                <a class="sitemenus" href="">
                  - <?php echo $category['category']; ?>
                </a>

              </li>

        <?php } ?>
            </ul>

            
          </div>

          <div id="shopify-section-toprated" class="shopify-section index-section">
            <div data-section-id="toprated" data-section-type="toprated" class="toprated">
              <h1 class="lefthead" style="color:#fff; background: #156322;">
                Grocery
              </h1>
              <div class="allbgc">
                <ul class="owl-toprated">
                <?php
                $CAT = $queryclass->displayItems('GROCERY');
                
                foreach($CAT as $item){
                  
                  $imagelink = $queryclass->getImage($item['category']);
                  $href = "products_view.php?variant=".$item['id']."";
                ?>
                  <li class="leftpro item-row    on-sale" id="product-747392958516">
                    <div class="product-container col-xs-12">

                        <div class="imgblock col-xs-4">

                          <a href="<?php echo $href ?>">
                            <img class="" src="<?php echo $imagelink ?>"
                              />
                          </a>
                          <a href="<?php echo $href ?>">
                            <img src="imgfiles/cartout.jpg"
                              class="second-img featured-image" > 
                          </a>

                          </div>

                          <div class="wbproductdes col-xs-8">
                            <div class="shopify-product-reviews-badge" data-id="747392958516"></div>
                            <h5>
                              <a href="<?php echo $href ?>" class="grid-link__title"><?php echo $item['product'] ?></a>
                            </h5>
                            <div class="product_price">

                              <span>
                                <span class="Bold-theme-hook-DO-NOT-DELETE bold_product_price" data-override-value-set="1" data-override-value="60000"
                                  style="display:none !important;"></span>
                                <span class=money>&#8358 <?php echo $item['price'] ?>.00</span>
                              </span>
                              <span class="dis-price">
                                <span class="Bold-theme-hook-DO-NOT-DELETE bold_product_compare_price" data-override-value-set="1"
                                  data-override-value="119900" style="display:none !important;"></span>
                                
                              </span>
                            </div>


                          </div>

                    </div>
                  </li>
     
                <?php  } ?>


                </ul>
              </div>
            </div>
            <script>
              $(document).on('ready', function () {
                $(".owl-toprated").slick({
                  rows: 3,
                  dots: false,
                  infinite: false,
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  responsive: [
                    {
                      breakpoint: 768,
                      settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                      }
                    },
                    {
                      breakpoint: 600,
                      settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                      }
                    }
                  ]
                });
              });
            </script>
          </div>

          <div id="shopify-section-newsletter" class="shopify-section index-section">
            <div class="newsletter-bg" style="background-image:url('cdn.shopify.com/s/files/1/0012/3024/1844/files/newsbg_445x46243c1.jpg?v=1528276345');">
              <div class="section-block section-block--padding">
                <img class="img-responsive center-block" src="cdn.shopify.com/s/files/1/0012/3024/1844/files/icon_408x4076f7b.png?v=1528275940"
                  alt="">
                <div class="newsl text-center">

                  <h3>newsletter</h3>
                  <hr>


                  <p>wants to get latest updates ! sign up for free.</p>

                </div>
                <div class="form-vertical">
                  <form method="post" action='' id="contact_form" accept-charset="UTF-8"
                    class="contact-form">
                    <input type="hidden" name="form_type" value="customer" />
                    <input type="hidden" name="utf8" value="✓" />


                    <input type="hidden" name="contact[tags]" value="newsletter">
                    <label for="NewsletterEmail-" class="label--hidden">translation missing: en.general.newsletter_form.newsletter_label</label>
                    <div class="">
                      <input type="email" value="" placeholder="Email address" name="contact[email]" id="NewsletterEmail-" class="input-group__field"
                        autocorrect="off" autocapitalize="off">
                      <div class="text-center">
                        <button type="submit" class="btn nbtn" name="commit">
                          subscribe
                        </button>
                      </div>
                    </div>

                  </form>
                </div>
              </div>
            </div>


          </div>
          <div id="shopify-section-onsale" class="shopify-section index-section">
            <div data-section-id="onsale" data-section-type="onsale" class="onsale">
              <h1 class="lefthead" style="color:#fff; background: #156322;">
               OINTMENTS
              </h1>

              <div class="allbgc">

                <ul class="owl-onsale">

                  <?php
                $CAT = $queryclass->displayItems('OINTMENT / CREAM');
                
                foreach($CAT as $item){
                  
                  $imagelink = $queryclass->getImage($item['category']);
                  $href = "products_view.php?variant=".$item['id']."";
                ?>

                  <li class="leftpro item-row on-sale" id="product-747392958516">
                    <div class="product-container col-xs-12">

                      <div class="imgblock col-xs-4">

                            <a href="<?php echo $href ?>">
                            <img class="" src="<?php echo $imagelink ?>"
                              />
                          </a>
                          <a href="<?php echo $href ?>">
                            <img src="imgfiles/cartout.jpg"
                              class="second-img featured-image" > 
                          </a>

                      </div>

                      <div class="wbproductdes col-xs-8">
                        <div class="shopify-product-reviews-badge" data-id="747392958516"></div>
                        <h5>
                          <a href="<?php echo $href ?>" class="grid-link__title"><?php echo $item['product'] ?></a>
                        </h5>
                        <div class="product_price">

                          <span>
                            <span class="Bold-theme-hook-DO-NOT-DELETE bold_product_price" data-override-value-set="1" data-override-value="60000"
                              style="display:none !important;"></span>
                            <span class=money>&#8358 <?php echo $item['price'] ?>.00</span>
                          </span>
                          <span class="dis-price">
                            <span class="Bold-theme-hook-DO-NOT-DELETE bold_product_compare_price" data-override-value-set="1"
                              data-override-value="119900" style="display:none !important;"></span>
                            
                          </span>
                        </div>


                      </div>

                    </div>
                  </li>

                <?php } ?>
                </ul>
              </div>

            </div>


            <script>
              $(document).on('ready', function () {
                $(".owl-onsale").slick({
                  rows: 3,
                  dots: false,
                  infinite: false,
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  responsive: [
                    {
                      breakpoint: 768,
                      settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                      }
                    },
                    {
                      breakpoint: 600,
                      settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                      }
                    }
                  ]
                });
              });
            </script>
          </div>
        </div>