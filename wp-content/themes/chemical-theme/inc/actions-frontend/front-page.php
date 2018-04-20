<?php

add_action('my_show_top_section','top_section');
function top_section(){
    global $mytheme;
        ?>
    <div class="general-text">
       <label><p><?php echo $mytheme['general-text']; ?></p></label>
    </div>
    <div class="under-general-text">
        <label><?php echo $mytheme['under-general-text']; ?></label>
    </div>

    <a href="#" class="button see-all-products">SEE ALL PRODUCTS</a>

    <div class="bottom-general-text">
        <label><p><?php echo $mytheme['bottom-general-text']; ?></p></label>
    </div>
    <div class="bottom-under-general-text">
        <label><?php echo $mytheme['bottom-under-general-text']; ?></label>
    </div>
<?php
}




add_action('my_show_first_section','first_section');
function first_section(){
    global $mytheme;
    global $atts;
    //echo wp_video_shortcode( $atts );
    ?>



    <div class="first-section-general-text">
        <label><p><?php echo $mytheme['about-production-general-text']; ?></p></label>
    </div>
    <div class="first-section-under-general-text">
        <label><?php echo $mytheme['about-production-under-general-text']; ?></label>
    </div>

<?php
}
?>


<?php
add_action('my_show_categories_section','categories_section');
function categories_section()
{
    global $mytheme;
    $args = array( 'taxonomy' => 'product_cat',
        'hide_empty' => false, );
    $product_categories = get_terms($args);
    echo '<span class="categories-head">'.$mytheme['category-general-text'].'</span>';
    if (!empty($product_categories)) {

        echo '<div id="categories" class="categories-group">';

        foreach ( $product_categories as $category) {

            $link = get_term_link($category);
            $name = $category->name;
            $description = $category->description;

            if ( $category->parent != 0 )
                continue;
            $cat_thumb_id = get_term_meta( $category->term_id, 'thumbnail_id', true );
            $cat_thumb_url = wp_get_attachment_image_url( $cat_thumb_id,'full' );


            echo '<div class="category">';
            echo "<div class='parent-div-category'>";
            echo '<a href='.$link.'>';
            echo "<div class='child-div-category'>";
            echo "<img src={$cat_thumb_url} />";
            echo "<div class='category-name-text'>{$name}</div>";
            //echo "<div class='category-description-text'>{$description}</div>";
            //echo "<span class='button-go-from-category' type='submit'>GO TO STORE</span>";
            echo "</div>";
            echo "</a></div>";
            echo '</div>';
        };
        echo '</div>';

    }

    wp_reset_postdata();
}
?>
<?php
add_action('my_show_partners_section','partners_section');
function partners_section()
{
    global $mytheme;
    ?>
    <div class="partner-general-text">
        <label><p><?php echo $mytheme['partners-general-text']; ?></p></label>

<div class="partners-wrap">
    <?php
    foreach ($mytheme['partners-logo-images'] as $item) {
        ?>
        <div class="partners-images">
        <img src="<?php echo $item['image']; ?>"">
        </div>
    <?php
        }
        ?>
        </div>
    </div>
    <?php
}
?>