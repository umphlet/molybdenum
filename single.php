<?
/*
Theme Name: Molybdenum
Theme URI: http://github.com/umphlet/molybdenum
Description: A brief description of your theme
Version: 0.1
Author: Sean Umphlet
Author URI: http://umphlet.com
Tags: Blue, Bootstrap, Monospace, Pastel
*/

get_header(); ?>





    <main>
        <div class="col-sm-8 left-col">
            <div class="content">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="post-header">
					<div class="date" title="Posted on <?php the_time( 'M j Y' ) ?>"><span class="month"><?php the_time( 'M' ); ?></span><br><span class="day"><?php the_time( 'j' ); ?></span><br></div>
					<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<div class="author">Posted by <?php the_author(); ?></div>
				</div><!--.post-header-->
				<div class="entry clear">
					<?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
					<?php the_content(); ?>
					<?php edit_post_link(); ?>
					<?php wp_link_pages(); ?>
				</div><!--. entry-->
				<footer class="post-footer">
					<div class="comments"><ol class="commentlist"><?php /*Find out how to list comments*/ wp_list_comments(); ?></ol>
</div>
				<?php comment_form(); ?>
				</footer><!--.post-footer-->
			</div><!-- .post-->
		<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
			<nav class="navigation index">
				<div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
				<div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
			</nav><!--.navigation-->
		<?php else : ?>
	<?php endif; ?>
</div><!--.content-->
        </div>
        <div class="col-sm-4 right-col">
<? get_sidebar(); ?>
        </div>

    </main>
<? get_footer(); ?>

