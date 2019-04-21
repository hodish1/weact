<?php //Template Name:home ?>

<?php get_header();?>



<div class="headline-wrapper">
    <video autoplay muted loop id="vid">
    <source src="<?= get_template_directory_uri().'/assets/images/vid.mp4' ?>" type="video/mp4">
    </video>
    <div class="darken">
        <p class="big-phrase">באנו לעשות</p>
        <p class="little-phrase">תקשורת בלתי תלויה</p>
    </div>
</div>

<?php  get_footer();?>