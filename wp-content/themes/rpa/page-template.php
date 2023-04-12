
<?php
/**
 * The template for main page.
 *
 * Template Name: Tamplate Page
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
    <div class="page-main">
      <section id="products" class="section x-relative tample_page_section wf-section">
        <div class="section-v-wrapper partnership">
          <div class="section-h-wrapper">
            <div class="container">
              <div class="line-height-xs"><?php the_title(); ?></div>
              <div class="paragraph_tample_page w-richtext">
              <?php the_content(); ?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="reviews" data-w-id="6bc59f0b-e14d-740a-c014-5647e2387db9" class="section x-relative reviews wf-section">
        <div class="section-v-wrapper review">
          <div class="vertical-6xl">
            <div class="section-h-wrapper">
              <div class="container">
                <div id="w-node-_6bc59f0b-e14d-740a-c014-5647e2387e02-c53289f9" class="position-relative">
                  <div class="grid vertical-xl grid_forn">
                    <div id="w-node-_6bc59f0b-e14d-740a-c014-5647e2387e04-c53289f9" class="vertical-xl">
                      <h2 data-w-id="6bc59f0b-e14d-740a-c014-5647e2387e05" class="line-height-xs white">Ready to <span class="text-span">get started?</span></h2>
                      <div class="form-block w-form">
                        <form id="wf-form-Name" name="wf-form-Name" data-name="Name" method="get">
                          <div class="div-block-2"><input type="text" class="text-field-2 fildefirst w-input" maxlength="256" name="name" data-name="Name" placeholder="Name company" id="name"><input type="text" class="text-field-2 w-input" maxlength="256" name="Industry" data-name="Industry" placeholder="Industry" data-w-id="6bc59f0b-e14d-740a-c014-5647e2387e0d" id="Industry" required=""></div>
                          <div class="div-block-2"><input type="text" class="text-field-2 fildefirst w-input" maxlength="256" name="Name" data-name="Name" placeholder="Name" id="Name-3"><input type="tel" class="text-field-2 fildefirst w-input" maxlength="256" name="Phone" data-name="Phone" placeholder="Phone" id="Phone"><input type="email" class="text-field-2 w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="Email" data-w-id="6bc59f0b-e14d-740a-c014-5647e2387e11" id="email-2" required=""></div><textarea class="textarea w-input" maxlength="5000" name="field" data-name="field" placeholder=" Describe the task" data-w-id="6bc59f0b-e14d-740a-c014-5647e2387e12" id="field"></textarea>
                          <a href="#" class="button w-button">Submit</a>
                        </form>
                        <div class="w-form-done">
                          <div>Thank you! Your submission has been received!</div>
                        </div>
                        <div class="w-form-fail">
                          <div>Oops! Something went wrong while submitting the form.</div>
                        </div>
                      </div>
                    </div>
                    <p id="w-node-_6bc59f0b-e14d-740a-c014-5647e2387e1b-c53289f9" data-w-id="6bc59f0b-e14d-740a-c014-5647e2387e1b" class="notic">*By submitting your data, you agree to the processing of personal data.</p>
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
    </div>
<?php
get_footer('home');