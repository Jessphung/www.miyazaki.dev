<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>
        
   

	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>
    
    
    
    <!---- About Hayao Miyazak Section----> 
    <div id="about">
    <h1 id="hayao"> About </h1>

    <p id="hm"> Hayao Miyazaki was born in Tôkyô on January 5, 1941. He started his career in 1963 as an animator at the studio Toei Douga studio, and was subsequently involved in many early classics of Japanese animation. From the beginning, he commanded attention with his incredible drawing ability and the seemingly endless stream of movie ideas he proposed. </p>
    
     <img id="hmimage" src="http://www.miyazaki.dev/wp-content/uploads/2016/03/hayao_miyazaki_art_portrait_by_c3nmt-d6949y0.jpg" alt="Hayao Mizaki">
     
    </div> <!--ends About Hayao Miyazaki Section----------> 
    
   
    
    <div id= "show-row"> 
    

   
    </div> <!--ends show-row---> 

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
