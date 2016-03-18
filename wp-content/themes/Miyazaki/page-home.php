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
     
    </div> <!--ends About Hayao Miyazaki Sectio ----------> 
    
   
    
    <div id= "show-row"> 
    
  <h2>Example - 5</h2>
  
    <div id="demo5" class="scroll-img">
      <ul>
        <li><a href="http://www.faceyourmanga.com/mangatar.php?id=234" target="_blank"><img src="img/normal_234.png"></a></li>
        <li><a href="http://www.faceyourmanga.com/mangatar.php?id=485" target="_blank"><img src="img/normal_485.png"></a></li>
        <li><a href="http://www.faceyourmanga.com/mangatar.php?id=511" target="_blank"><img src="img/normal_511.png"></a></li>
        <li><a href="http://www.faceyourmanga.com/mangatar.php?id=725" target="_blank"><img src="img/normal_725.png"></a></li>
        <li><a href="http://www.faceyourmanga.com/mangatar.php?id=840" target="_blank"><img src="img/normal_840.png"></a></li>
        <li><a href="http://www.faceyourmanga.com/mangatar.php?id=934" target="_blank"><img src="img/normal_934.png"></a></li>
        <li><a href="http://www.faceyourmanga.com/mangatar.php?id=1295" target="_blank"><img src="img/normal_1295.png"></a></li>
        <li><a href="http://www.faceyourmanga.com/mangatar.php?id=1459" target="_blank"><img src="img/normal_1459.png"></a></li>
        <li><a href="http://www.faceyourmanga.com/mangatar.php?id=1590" target="_blank"><img src="img/normal_1590.png"></a></li>
        <li><a href="http://www.faceyourmanga.com/mangatar.php?id=1688" target="_blank"><img src="img/normal_1688.png"></a></li>
        <li><a href="http://www.faceyourmanga.com/mangatar.php?id=3206" target="_blank"><img src="img/normal_3206.png"></a></li>
        <li><a href="http://www.faceyourmanga.com/mangatar.php?id=3810" target="_blank"><img src="img/normal_3810.png"></a></li>
        <li><a href="http://www.faceyourmanga.com/mangatar.php?id=5176" target="_blank"><img src="img/normal_5176.png"></a></li>
        <li><a href="http://www.faceyourmanga.com/mangatar.php?id=6861" target="_blank"><img src="img/normal_6861.png"></a></li>
        <li><a href="http://www.faceyourmanga.com/mangatar.php?id=7004" target="_blank"><img src="img/normal_7004.png"></a></li>
      </ul>
    </div>
    <div id="demo5-btn" class="text-center">
      <button class="btn" id="demo5-backward"><i class="icon-chevron-left"></i> Backward</button>
      <button class="btn" id="demo5-forward">Forward <i class="icon-chevron-right"></i></button>
    </div>

   
    </div> <!--ends show-row---> 

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

  <script>$('#demo5').scrollbox({
  direction: 'h',
  distance: 140
});
$('#demo5-backward').click(function () {
  $('#demo5').trigger('backward');
});
$('#demo5-forward').click(function () {
  $('#demo5').trigger('forward');
});</script>
