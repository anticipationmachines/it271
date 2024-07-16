<?php
get_header();
?>

    <div id="wrapper">
        <main>
            <!-- add wrong page image -->
             <h2>This is embaressing...</h2>
             <p>nothing was found at this location. try somewhere else?</p>
             <?php echo get_search_query();?>
             <h3>
                Or, please feel free to browse out pages
             </h3>
             <?php wp_list_pages() ;?>
  
    </main>
    <!-- close main -->

    <aside>this is my 404.php page!</aside>

    </div>
    <!-- close wrapper -->

    <?php
get_footer();
?>
