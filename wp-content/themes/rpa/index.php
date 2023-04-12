<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Rpa
 */

get_header('home');
?>
  <section id="products" class="section x-relative video-section partnership top_margin_0 grey_bg wf-section">
    <div class="section-v-wrapper partnership">
      <div class="section-h-wrapper">
        <div class="container">
          <div class="line-height-xs vertical">Here you can find the most current news of our company <span class="text-span">and not only</span></div>
        </div>
      </div>
    </div>
  </section>
  <div class="section_blog grey_bg wf-section">
    <div id="start" class="section-v-wrapper x-relative x-expand blogs_page grey_bg">
      <div class="section-h-wrapper">
        <div class="container">
          <div class="vertical-6xl">
            <div class="container-inner x-medium x-left"></div>
            <div class="position-relative blog_section">
              <div class="blog_grid blogs_page">
			  <?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
              </div>
              <div class="pagination_wrap">
              <?php the_posts_pagination(
$args = array(
    'show_all'     => false,
    'end_size'     => 2,
    'mid_size'     => 2,
    'prev_next'    => true,
    'prev_text'    => '«',
    'next_text'    => '»',
    'add_args'     => false,
    'add_fragment' => '',
    'before_page_number' => '',
        'after_page_number' => '',
    'screen_reader_text' => 'Смотреть другие страницы',
))
?> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
get_footer('home');
