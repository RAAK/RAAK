<?php
/*
Template Name: Author Archive
 */
?>
<?php get_header(); ?>

    <div class="container rounded-corners blog_archive">
        <div class="content" id="content">
<?php do_shortcode('[title page_type="category"]'); ?>
<?php do_shortcode('[archive_list page_type="category"]'); ?>
<?php do_shortcode('[tags all_tags="1"]'); ?>
<?php do_shortcode('[authors]'); ?>
		</div><!-- #content -->
<?php get_sidebar() ?>
<?php get_footer() ?>
<script>
$('.whitebox_primary_footer_right a').click(function() {
    if(!$(this).hasClass('active')) {
        $(this).preventDefault();
    }
}
</script>
