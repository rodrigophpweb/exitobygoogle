<?php
//WP Query type post FAQ
$args = array(
    'post_type' => 'faq',
    'posts_per_page' => -1,
    'orderby' => 'title',
    'order' => 'ASC'
);
    $faq = new WP_Query($args);
    if($faq->have_posts()) : while($faq->have_posts()) : $faq->the_post();
?>
    <details>
        <summary><?php the_title();?></summary>
        <p><?php the_content();?></p>
    </details>
    
<?php
    endwhile;
    endif;
    wp_reset_postdata();
?>