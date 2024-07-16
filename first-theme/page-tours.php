<?php
get_header();
/* Template Name: Tours */ 
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
    <?php the_content() ; ?>

    <?php endwhile ; ?>
    <?php else: ?>
    <h2><?php echo wpautop('Sorry, no posts were found!');?></h2>

    <?php endif; ?>
    </main>

    <aside>

    
    </aside>
    </div>
    <!-- close wrapper -->

    <?php
get_footer();
?>
