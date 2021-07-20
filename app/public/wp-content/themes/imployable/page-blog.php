<?php get_header(); ?>


<section class="imployable-blog">
    <div class="container">
        <div class="section-title">
            <h2><?php echo get_theme_mod('set_blog_title', 'News From Our Blog'); ?></h2>
        </div>
        <div class="row">
            <?php 
                //IF THERE ARE ANY POSTS
                if( have_posts() ):
                
                //LOAD POSTS
                while( have_posts() ): the_post();
            ?>
            <article>
                <h2><?php the_title(); ?> </h2>
                <div><?php the_content(); ?></div>
            </article>
            <?php
            endwhile;
        else:
            ?>
            <p>Nothing to display.</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>


