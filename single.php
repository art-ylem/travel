<?php get_header(); ?>
            <div class="content">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>		

				<div class="post-main">
                	<h1><?php the_title(); ?></a><span> <?php the_time( 'j.m.Y' ) ?></span></h1>
                	<div class="post">
                	<?php the_post_thumbnail('full', 'class=imgstyle'); ?>
		                <?php the_content(); ?>
		                <p><?php the_tags(); ?> </p>
                	</div>
            	</div>
            
            <?php comments_template(); ?>

			<?php endwhile; ?>
			<?php else: ?>
			<?php endif; ?>
				

        </div>
      <?php get_sidebar( ); ?>
        </div>
      <?php get_footer(); ?>




