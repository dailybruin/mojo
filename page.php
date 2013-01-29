<?php get_header(); ?>



		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		
		<article class="nine columns alpha articlewrap" id="<?php the_ID(); ?>">
			<section class="article_head">
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			</section>
			
			<section class="article_text">
				<?php the_content(); ?>
				<?php the_tags('<p class="tags">Tags: <em>',', ','</em></p>');?>			
				<?php comments_template(); ?>

			</section>
		</article>
		<!-- Article Information -->
		<section class="three columns omega right_sidebar">
			<div class="day"><?php the_time('l'); ?></div>
			<div class="date"><?php the_time('n/j/Y'); ?></div>
			<div class="time"><?php the_time(); ?></div>
		</section>
		<section class="three columns omega right_sidebar socialmedia">
			<h2>Share This Page</h2>
			<ul class="blank">
				<li><div class="fb-like" data-href="<?php the_permalink(); ?>" data-send="false" data-layout="button_count" data-width="200" data-show-faces="false" style="width:100px;overflow:hidden;"></div></li>
				<li><a href="https://twitter.com/share" class="twitter-share-button" data-lang="en" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?>" data-related="dailybruin" data-via="dailybruin">Tweet</a></li>
			</ul>
		</section>
		

		<?php endwhile; endif; ?>
	
	

<?php get_sidebar(); ?>

<?php get_footer(); ?>