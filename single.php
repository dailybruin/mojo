<?php get_header(); ?>



	<?php while(have_posts()) : the_post(); ?>
		<article class="nine columns alpha articlewrap" id="<?php the_ID(); ?>">
			<section class="article_head">
				<span>
				<?php $categories = get_the_category(); 
					foreach($categories as $category) {
					echo '<a class="white" href="'.get_category_link($category->term_id ).'">'.$category->cat_name.'</a>';
				}?></span>
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			</section>
			
			<figure>
			<?php the_post_thumbnail('large',array('class' => 'scale-with-grid')); ?>
			<figcaption>
				<?php echo get_post(get_post_thumbnail_id($post->ID))->post_excerpt; ?>
			</figcaption>
			</figure>

			<section class="article_text">
				<?php the_content(); ?>
				<p class="byline">&mdash;<?php the_author_posts_link(); ?></p>
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
			<h2>Share This Article</h2>
			<ul class="blank">
				<li><div class="fb-like" data-href="<?php the_permalink(); ?>" data-send="false" data-layout="button_count" data-width="120" data-show-faces="false" data-action="recommend" style="width:120px;overflow:hidden;"></div></li>
				<li><a href="https://twitter.com/share" class="twitter-share-button" data-lang="en" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?>" data-related="dailybruin" data-via="dailybruin">Tweet</a></li>
				<li><div class="g-plusone" data-size="small" data-annotation="none" data-href="<?php the_permalink(); ?>"></div></li>
			</ul>
		</section>

	<?php endwhile; ?>
	
	

<?php get_sidebar(); ?>

<?php get_footer(); ?>
