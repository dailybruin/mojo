<?php get_header(); ?>
<!-- This sets the $curauth variable -->

    <?php
    $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
    if($curauth->nickname == 'admin') {require TEMPLATEPATH.'/404.php'; die();}

    ?>


<article class="nine columns alpha articlewrap">
	<section class="article_head">
	    <h1><?php echo $curauth->first_name.' '.$curauth->last_name; ?></h1>
	</section>

	<section class="article_text">
        <?php $authordata = $curauth; userphoto_the_author_photo(); ?>

    <dl>
    	<?php if($curauth->twitter_handle): ?>
        <dt>Twitter</dt>
        <dd><a href="http://twitter.com/<?php echo $curauth->twitter_handle; ?>"><?php echo $curauth->twitter_handle; ?></a></dd>
        <?php endif; ?>
    	<dt>Email</dt>
    	<dd><a href="mailto:<?php echo $curauth->user_email; ?>"><?php echo $curauth->user_email; ?></a></dd>
    	<?php if($curauth->user_url): ?>
        <dt>Website</dt>
        <dd><a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a></dd>
        <?php endif; if($curauth->user_description): ?>
        <dt>About</dt>
        <dd><?php echo $curauth->user_description; ?></dd>
        <?php endif; ?>
    </dl>

<hr />
    <h3>Posts by <?php echo $curauth->first_name; ?>:</h3>

    <ul>
<!-- The Loop -->

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <li>
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
            <?php the_title(); ?></a>,
            <?php the_time('d M Y'); ?> in <?php the_category('&');?>
        </li>

    <?php endwhile; else: ?>
        <p><?php _e('No posts by this author.'); ?></p>

    <?php endif; ?>

<!-- End Loop -->

    </ul>
</section></article>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
