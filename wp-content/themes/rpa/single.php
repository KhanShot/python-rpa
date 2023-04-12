<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Rpa
 */

get_header('home');
?>
    <div class="page-main">
      <div style="background-image:  linear-gradient(0deg, #29339b, rgb(0 0 0 / 30%)), url('<?php $thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); // возвращает массив параметров миниатюры
echo $thumbnail_attributes[0]; ?>');" class="publication_section_heading wf-section">
        <h1 class="heading_publication"><?php the_title(); ?></h1>
        <p class="data_publication"><?php echo get_the_date('d.m.Y'); ?></p>
      </div>
      <div class="section_case_text wf-section">
        <div class="section-v-wrapper partnership">
          <div class="section-h-wrapper">
            <div class="container">
              <div class="rich-text-block-3 w-richtext">
			  <?php the_content(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section_blog wf-section">
      <div id="start" class="section-v-wrapper x-relative x-expand">
        <div class="section-h-wrapper">
          <div class="container">
            <div class="vertical-6xl">
              <div class="container-inner x-medium x-left">
                <h2 id="w-node-_03fa7107-4969-acca-8282-567d966a9abe-966a9ab8" data-w-id="03fa7107-4969-acca-8282-567d966a9abe" class="line-height-xs color-white">News <span class="text-span">blog</span></h2>
              </div>
              <div class="position-relative blog_section">
			  <div class="blog_grid">
                  <?php
$args = array( 'posts_per_page' => 3 );
$rand_posts = get_posts( $args );
foreach( $rand_posts as $post ) : ?>
  <a id="w-node-dc9dcdb0-1969-32d0-1538-4b596b84264d-966a9ab8" href="<?php the_permalink() ?>" class="blog_wrap_link w-inline-block">
                      <div style="background-image: url('<?php $thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' ); // возвращает массив параметров миниатюры
echo $thumbnail_attributes[0]; ?>');" class="img_blog_wrap"></div>
                      <div class="description_blog">
                      <div class="text-block-23"><?php echo get_the_date('d.m.Y'); ?></div>
                        <div class="heading_div_blog">
                          <h3 class="heading_blog"><?php the_title(); ?></h3>
                        </div>
                        <p><?php the_excerpt(); ?></p>
                      </div>
                    </a>
  <?php
endforeach;
wp_reset_postdata(); // сбрасывает $post
?>
                  </div>
                <a href="/blog" class="button second blog_button w-button"><?php echo esc_attr( pll__( 'More...' ) )  ?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


<?php
get_footer('home');
