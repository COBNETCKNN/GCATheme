<?php get_header(); ?>

<!-- Block Archive Hero Section -->
<section id="blogArchive_hero" class="py-14">
  <div class="container mx-auto border-b-2 border-black py-14">
    <div class="blogArchive_heading__wrapper">
      <h1 class="blogArchive_heading text-black font-inter font-semibold ml-5">GCA News</h1>
  </div>
</section>

<!-- Blog posts Query -->
<section id="blogPosts" class="py-14">
  <div class="container mx-auto">
      <div class="grid grid-cols-3 gap-6">

        <?php
          $args = array(
              'post_type' => 'post',
              'posts_per_page' => -1,
          );

          $query = new WP_Query( $args );

          if ( $query->have_posts() ) :
              while ( $query->have_posts() ) : $query->the_post(); 
              
              $content = get_the_content();
              ?>
              
              <div class="blogPost_wrapper mb-10">
                  <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('single-post'); ?>
                  </a>
                  <h2 class="blogPosts_article__heading font-inter text-black font-medium text-2xl my-5 min-h-[100px]"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                  <div class="font-inter text-black font-light text-lg">
                    <?php echo wp_trim_words(get_the_content(), 16); ?>
                  </div>
              </div>



          <?php 
              endwhile;
              wp_reset_postdata(); // Reset post data to the main loop
          else :
              echo 'No posts found';
          endif;
        ?>
      </div>
  </div>
</section>



<?php get_footer(); ?>