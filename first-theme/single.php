<?php
get_header();
?>

<div id="hero">
<img src="https://frirod1.dreamhosters.com/it270/site1/wp-content/uploads/yellowstone-inner.jpg" alt="yellowstone">
</div>
<!-- end hero -->

    <div id="wrapper">
        <main>
    <!-- if we have any posts or pages, show them -->
<?php if(have_posts()) : ?>
    <!-- show posts by using a while loop -->

    <?php while(have_posts()) : the_post() ; ?>
    <article class="post">
        <h2 class="title">
        <?php  the_title(); ?>
        </h2>
        <div class="meta">
        <span class="posted-meta"> <b>Posted by: </b><?php  the_author(); ?></span>
        <span class="posted-meta"> <b>Posted on: </b><?php  the_time('F j, Y g:i a'); ?></span>
        </div>
        <!-- close meta -->
         
        <div class="thumbnail">
<?php if(has_post_thumbnail()) : ?>
    <a href="<?php the_permalink(); ?>">
        <?php  the_post_thumbnail(); ?>
        </a>
        <?php endif ?>

    </div>
    <!-- close thumbnail -->

    <?php the_content() ; ?>

    </article>
    <!-- close article -->

    <?php endwhile ; ?>
    <?php else: ?>
    <h2><?php echo wpautop('Sorry, no posts were found!');?></h2>

    <?php endif; ?>
    <?php comments_template(); ?>
    </main>
    <!-- close main -->
     <a href="blog"><button>Blog Home</button></a>

     <?php get_sidebar(); ?>

    </div>
    <!-- close wrapper -->

    <?php
get_footer();
?>
