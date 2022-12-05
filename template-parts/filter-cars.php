<section class="filters-cars">
    <h1>Selecione uma Marca</h1>
    <?php
        //Create a select with data post_type cars show name brand e number of cars
        $args = array(
            'post_type' => 'cars',
            'posts_per_page' => -1,
            'orderby' => 'title',
            'order' => 'ASC'
        );
        $cars = new WP_Query($args);

        if($cars->have_posts()) : while($cars->have_posts()) : $cars->the_post();
    ?>
        <select>
            <option value="<?php the_ID();?>"><?php the_title();?></option>
        </select>
    <?php
        endwhile;
        endif;
        wp_reset_postdata();
    ?>
</section>
