<!DOCTYPE html>

<?php get_header(); ?>


<?php
      if(is_active_sidebar('sidebar')):
     dynamic_sidebar('sidebar');
     endif;  
?>

<div class="container-fluid main_container">

	<div class="container blog_container">

		<div class="row h1_index">
			<div class="col">
				<br>
				<h1> Latest TravelBlogger stories </h1>
			</div>
		</div>

	<div class="row entries">

		<div class="col-sm-8 col-md-5">

	<div id="entry">

		<div class="h_entry">

				<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
			<h3><a href="<?php the_permalink(); ?>" id="h_indexEntry"> <?php the_title(); ?></a></h3>

		</div>

		<div class="entry_info">
			<p><?php the_author(); ?> <?php the_time("F j, Y g:i a"); ?></p>
		</div>

		<div class="entry_text">
		<p><?php the_content(); ?></p>
		
	

			<?php endwhile; ?>
		<?php else :?>
			<?php_("No posts found"); ?>
			<?php endif; ?>
		
</div>
	
		</div>  <!---------------end of entry----------------->


	</div>

	</div> <!-----------end of entries-------------->

	</div> <!-----------------end of blog_container----------------->

</div> <!---------------------- end of main_container--------------->


  <?php get_footer(); ?>



