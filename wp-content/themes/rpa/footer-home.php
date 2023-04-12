<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rpa
 */

?>
    <div class="page-footer">
      <div class="footer">
        <div class="grid vertical-5xl">
          <div id="w-node-_16b5ff3c-0ea0-ad44-3bc0-5a25cd9ed250-cd9ed24d" class="vertical-m footer_block"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo-rpa-black-bCK.svg" loading="lazy" width="42" height="49" alt="" class="footer---logo">
            <p class="display-block"><?php echo esc_attr( pll__( 'Invent and build your future' ) )  ?></p>
          </div>
          <div id="w-node-_16b5ff3c-0ea0-ad44-3bc0-5a25cd9ed254-cd9ed24d" class="vertical-m">
            <?php

dynamic_sidebar("footer_one");

?>
          </div>
          <div id="w-node-_16b5ff3c-0ea0-ad44-3bc0-5a25cd9ed268-cd9ed24d" class="vertical-m">
                        <?php

dynamic_sidebar("footer_two");

?>
          <div id="w-node-_16b5ff3c-0ea0-ad44-3bc0-5a25cd9ed276-cd9ed24d" class="font-size-s">
            <div class="text-block-3"><?php echo esc_attr( pll__( '© RPA python. All rights reserved.' ) )  ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=637370bc3ff18755a9d061f1" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
  <!--  Typed effect   -->
  <script async="">
var Webflow = Webflow || [];
if (window.innerWidth > 0) { Webflow.push(function() {
  $.getScript('https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.7/typed.min.js', function() {
       /* String Seven 07 - With SmartBackspace */
      $(".typed").typed({
      strings: [<?php echo carbon_get_the_post_meta( 'rpa_ticker' ); ?>],
	typeSpeed: 40,
      backSpeed: 20,
      backDelay: 1600,
      showCursor: !1,
      loop: !0
      });
      });
      });
      } else { 
      	var typed = $('.typed-div')
				typed.css('display', 'none')    
      }
// $('#slider222 div:nth-child(2)').trigger('tap');
     //$("tag1").
   $("#tagswrapper" ).each(function(index) {
    $(this).on("click", function(){
        // For the boolean value
        //var boolKey = $(this).data('selected');
        // For the mammal value
        // var mammalKey = $(this).attr('id');
        $('#slider222 div:nth-child('+index+')').trigger('tap');
    });
});
</script>

<?php wp_footer(); ?>

</body>
</html>
