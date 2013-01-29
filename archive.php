<?php get_header(); ?>

		<?php if(have_posts()) : ?>
	
		<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
		<?php /* If this is a category archive */ if (is_category()) { ?>
		<h4 class="pagetitle">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h4>
		<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h4 class="pagetitle">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h4>
		<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h4 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h4>
		<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h4 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h4>
		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h4 class="pagetitle">Archive for <?php the_time('Y'); ?></h4>
		<?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h4 class="pagetitle">Author Archive</h4>
		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h4 class="pagetitle">Blog Archives</h4>
		<?php } ?>
			
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
			
			<section class="article_text">
				<?php the_content(); ?>
				<p class="byline">&mdash;<?php the_author_posts_link(); ?></p>
				<?php the_tags('<p class="tags">Tags: <em>',', ','</em></p>');?>
				<p class="comments"><a href="<?php comments_link(); ?>"><?php comments_number('No Comments Yet', 'Comments (1)', 'Comments (%)') ?></a></p>
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

		<?php endwhile; else : ?>

		<article class="nine columns alpha articlewrap">
			<section class="article_text">
		
			<h1>Page Not Found</h1>
			
			<p>Looks like the page you're looking for isn't here anymore. Try browsing the <a href="">categories</a>, <a href="">archives</a>, or using the search box below.</p>
			
			<?php get_search_form(); ?>
			</section>
		</article> <!-- .post -->

		<?php endif; ?>
	
		<div class="navigation clear">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>