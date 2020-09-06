<?php

	/*
		This is the template for the footer

		@package sunsettheme
	*/

?>

<footer class="gradient">
	<div class="container">
		<div class="col-md-5 border col-sm-12 order-sm-12"><img class="logoFooter" src="<?php echo get_theme_file_uri('/img/logo.svg')?>" >
			<div class="containerTwo">
				<div class="col-md-2 marginRight"><img class="icons " src="<?php echo get_theme_file_uri('/img/facebook.svg')?>" ></div>
				<div class="col-md-2 marginRight "><img class="icons twitter" src="<?php echo get_theme_file_uri('/img/twitter.svg')?>" ></div>
				<div class="col-md-2"><img class="icons gplus" src="<?php echo get_theme_file_uri('/img/googleplus.svg')?>" ></div>
			</div>
			<div class="container text-left">
				<p>© 2020 GeoCom. All Rights Reserved.</p>
			</div>
		</div> <!-- col-md-5 border -->


		<div class="col-md-3 border col-sm-12 paddingBottom" style="padding-bottom: 85px;">
			<p class="bold">Page</p>
			<a href="/"><p class="menuFooter">Home</p></a>
			<a href="/about"><p class="menuFooter">About</p></a>
			<a href="/contact"><p class="menuFooter">Contact</p></a>
		</div><!-- col-md-3 border -->


		<div class="col-md-3 col-sm-12 " style="padding-left: 80px; ">
			<p class="bold">Recent Posts</p>
			<?php
				$recentPosts = new WP_Query(array(
					'posts_per_page' =>3
				));
			while($recentPosts -> have_posts()) : $recentPosts -> the_post();?>

				<a href="<?php the_permalink();?>"><p class="menuFooter"><?php  the_title();?></p></a>
			<?php endwhile; ?>
		</div><!-- col-md-3 -->


	</div>
</footer>


<?php wp_footer(); ?>
</body>
</html>