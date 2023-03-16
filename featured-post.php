<?php
            $args = array(
                //solo 1 post.
                'posts_per_page' => 1,
            );
            $featured_post = new WP_Query( $args );



            if ( $featured_post->have_posts( ) ){
                while ( $featured_post->have_posts() ){
                    $featured_post->the_post();
                    $featured_id = $post->ID;
            
        ?>
        <article class="blog-entry content-block">
            <header class="blog-entry__header">
                <div class="blog-entry__header__category">
                    <a href="">Featured</a>
                </div>
                <a class="blog-entry_header_link" href= " <?php the_permalink(  ); ?>">
                    <h1 class="blog-entry__header__title"><?php the_title(); ?></h1>
                </a>
                <time datetime=""><?php the_time('F j, Y'); ?></time>
            </header>
        </article>

        <?php } // while.
        } // if.

        ?>
