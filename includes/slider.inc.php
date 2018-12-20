<div id="shopify-section-slider" class="shopify-section index-section col-lg-9 col-xs-12">
            <div id="wbslider" style="display:none;" data-version="5.4.3.1">
              <ul>

                <li>

                  <a class="tp-caption rev-link  tp-resizeme" href="#" data-frames='[{"delay":10,"speed":0},{"delay":"wait","speed":10}]'>
                    <img src="img/Felicia.jpg" alt="" title="" class="img-responsive">
                  </a>

                </li>


                <li>

                  <a class="tp-caption rev-link  tp-resizeme" href="#" data-frames='[{"delay":10,"speed":0},{"delay":"wait","speed":10}]'>
                    <img src="img/img1.jpg" alt="" title="" class="img-responsive">
                  </a>

                </li>

              </ul>
            </div>


            <script type="text/javascript">
              var revapi71,
                tpj = jQuery;

              tpj(document).ready(function () {
                if (tpj("#wbslider").revolution == undefined) {
                  revslider_showDoubleJqueryError("#wbslider");
                } else {
                  revapi71 = tpj("#wbslider").show().revolution({
                    sliderType: "standard",
                    sliderLayout: "auto",
                    dottedOverlay: "none",
                    delay: 8000,
                    navigation: {
                      onHoverStop: "off",
                      bullets: {
                        enable: true,
                        hide_onmobile: false,
                        style: "hermes",
                        hide_onleave: false,
                        direction: "horizontal",
                        h_align: "center",
                        v_align: "bottom",
                        h_offset: 0,
                        v_offset: 20,
                        space: 5,
                        tmp: ''
                      }
                    },
                    gridwidth: 813,
                    gridheight: 390,
                    lazyType: "none",
                    shadow: 0,
                    spinner: "spinner0",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    disableProgressBar: "off",
                    debugMode: false,
                    fallbacks: {
                      simplifyAll: "off",
                      nextSlideOnWindowFocus: "off",
                      disableFocusListener: false,
                    }
                  });
                }

              }); /*ready*/
            </script>
          </div>