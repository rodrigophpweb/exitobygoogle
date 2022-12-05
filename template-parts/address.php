<address class="contact">
    <h2>Nossos contatos</h2>
    <?php
        if( have_rows('address') ): while ( have_rows('address') ) : the_row();            
        $image = get_sub_field('image');
    ?>
        <article>
            <img src="<?php echo $image['size']['full']?>" alt="<?php echo $image['alt']?>">
            <h3><?php the_sub_field('title')?></h3>
            <p><?php the_content();?></p>
        </article>
    <?php endwhile; else : endif;?>
</address>