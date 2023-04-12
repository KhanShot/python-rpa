
<?php
/**
 * The template for main page.
 *
 * Template Name: Contact Page
*/
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Rpa
 */

 get_header('home');
?>
<div class="section-2 partnership wf-section">
    <div class="section-v-wrapper">
      <div class="section-h-wrapper">
        <div class="container">
          <div class="grid vertical-7xl video_block">
            <div id="w-node-_82648a0c-5971-a2d5-0aba-e94b7c5706f8-7f04ec29" class="slider---content video">
              <div id="w-node-_82648a0c-5971-a2d5-0aba-e94b7c5706f9-7f04ec29" class="vertical-2xl video_block">
                <div class="slider---heading">
                  <div class="vertical-s">
                    <div class="slider---title-wrap">
                      <div class="slider---title">
                        <h2 class="line-height-xs"><?php echo carbon_get_the_post_meta( 'rpa_contact_h' ); ?></h2>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="slider---text-wrap">
                  <div class="slider---text">
                    <div class="contact_wrap">
                      <p class="contact_link"><?php echo carbon_get_the_post_meta( 'rpa_contact_adress' ); ?></p>
                      <a href="#" class="contact_link"><?php echo carbon_get_the_post_meta( 'rpa_contact_phone' ); ?></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="w-node-_82648a0c-5971-a2d5-0aba-e94b7c57070e-7f04ec29" class="map_div"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section id="reviews" class="section x-relative reviews wf-section">
    <div class="section-v-wrapper review">
      <div class="vertical-6xl">
        <div class="section-h-wrapper">
          <div class="container">
            <div id="w-node-_15ab9b11-83ed-6ce4-3420-fb97be3dffc3-7f04ec29" class="position-relative">
              <div class="grid vertical-xl grid_forn">
                <div id="w-node-_15ab9b11-83ed-6ce4-3420-fb97be3dffc5-7f04ec29" class="vertical-xl">
                  <h2 data-w-id="15ab9b11-83ed-6ce4-3420-fb97be3dffc6" class="heading-h3 white"><?php echo carbon_get_the_post_meta( 'rpa_contact_form' ); ?></h2>
                  <?php echo do_shortcode( '[contact-form-7 id="417" title="Leave your information (contact)"]' ); ?>
                </div>
                <p id="w-node-_15ab9b11-83ed-6ce4-3420-fb97be3dffd9-7f04ec29" data-w-id="15ab9b11-83ed-6ce4-3420-fb97be3dffd9" class="notic"><?php echo esc_attr( pll__( '*By submitting your data, you agree to the processing of personal data.' ) )  ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div css-shield-lines="clear" class="pair-shield">
      <div class="pair-shield---item x-01">
        <div class="shd">
          <div class="shd---line-h-wrap">
            <div class="shd---line"></div>
          </div>
          <div class="shd---line-v-wrap">
            <div class="shd---line"></div>
          </div>
          <div class="shd---line-v-wrap x-right">
            <div class="shd---line"></div>
          </div>
          <div class="shd---line-angle-wrap x-left">
            <div class="shd---line"></div>
            <div class="shd---line-v-wrap x-right">
              <div class="shd---line"></div>
            </div>
          </div>
          <div class="shd---line-angle-wrap x-right">
            <div class="shd---line"></div>
            <div class="shd---line-v-wrap x-right">
              <div class="shd---line"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="pair-shield---item x-02">
        <div class="shd">
          <div class="shd---line-h-wrap">
            <div class="shd---line"></div>
          </div>
          <div class="shd---line-v-wrap">
            <div class="shd---line"></div>
          </div>
          <div class="shd---line-v-wrap x-right">
            <div class="shd---line"></div>
          </div>
          <div class="shd---line-angle-wrap x-left">
            <div class="shd---line"></div>
            <div class="shd---line-v-wrap x-right">
              <div class="shd---line"></div>
            </div>
          </div>
          <div class="shd---line-angle-wrap x-right">
            <div class="shd---line"></div>
            <div class="shd---line-v-wrap x-right">
              <div class="shd---line"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
get_footer('home');