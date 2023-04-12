<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Rpa
 */

?>
 <a id="w-node-a21ac268-41c0-effc-976d-7a32472c7d96-901d005f" href="<?php the_permalink() ?>" class="blog_wrap_link w-inline-block">
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