<?php /**
 * Template name: Custom front page
 *
 *
 */?>
<?php global $mytheme;  //echo whith REDUX FRAMEWORK?>

<?php get_header(); ?>

    <div class="container header-section" style="background: url('<?php echo $mytheme['background-logo']['url'];?>') no-repeat; background-size: cover;">

        <div class="header-sub-up-section" >
            <?php  do_action('my_show_top_section'); ?>

        </div>
    </div>
    <!-- first-section-->
    <div class="container first-section" >
            <?php do_action('my_show_first_section'); ?>
            <?php echo do_shortcode('[video_presentation]'); ?>
    </div>
    <!-- /first-section-->
    <!-- section  categories-->
    <div class="container categories-section">
            <?php do_action('my_show_categories_section'); ?>


    </div>
    <!-- /section categories-->

    <!-- section  categories-->
    <div class="container partners-section">
        <?php do_action('my_show_partners_section'); ?>


    </div>
    <!-- /section categories-->

    <!-- section  contact form-->

            <div class="container contact-form-section" style="background: url('<?php echo ($mytheme['background-contact-img']['background-image']);?>') no-repeat; background-size:cover;" >
                <?php echo do_shortcode('[contact-form-7 id="9" title="Contact us form homepage"]');?>

               <!--/.products-->
            </div>


        <!-- /section contact form-->

<?php get_footer(); ?>