<?php
/**
 * 
 * index.
 * 
 * @since 1.0
 */
?>

<?php get_header(); ?>
<main class="site-content" role="main">

    <div class="section-inner">
    <?php
    if (is_front_page() ) {
        // come scrivere https://localhost:8888/{nomesito}/{tema}/featured-post.php
        include(  TEMPLATEPATH . '/featured-post.php');
    }
    
    ?>
        <ul class="post-list">
        <ul class="post-list">
	<?php
	// Start loop.
	while ( have_posts() ) :
		the_post();
		if ( $post->ID !== $featured_id ) : ?>
               <li>
                  <div class="post-thumb">
				<?php the_post_thumbnail('thumbnail'); ?>
                   </div>
                <div class="post-entry">
                <a href="<?php the_permalink (); ?>"><?php the_title(); ?></a>
                <?php
                /**
                 * will only output the date if the current post's date is different from the previous one output.
                 *  @see https://developer.wordpress.org/reference/functions/the_date/
                 */
                 the_date( 'F, j, Y', '<time>' , '</time>' ); 
                 ?>
            </div>
        </li>
            <?php endif; endwhile; ?>
        </ul>
        <div class="pagination">
            <a class="prev page-numbers" href="#">&laquo;</a>
            <a class="page-numbers" href="#">1</a>
            <a class="page-numbers" href="#">2</a>
            <span aria-current="page" class="page-numbers current">3</span>
            <a class="next page-numbers" href="http://localhost:8888/wordpress/page/3/">»</a>
        </div>
    </div>
</main>
<?php get_footer(); 

?>
