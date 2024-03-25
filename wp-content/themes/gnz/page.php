<?php
 get_header();
?>

<section class="page-image d-flex align-items-center justify-content-center"
    style="background-image: url('<?php the_post_thumbnail_url( );?>');">
    <span class="page-overlay"></span>
    <h1 class="page-title title"><?php the_title();?></h1>
</section>
<?php
    if( have_posts() ){
        while ( have_posts() ) {
            
            the_post( );
            get_template_part('template-parts/content', 'page');
        }
    }

?>

<?php
get_footer();
?>
</body>

</html>