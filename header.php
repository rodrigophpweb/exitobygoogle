<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head()?>
</head>
<body>
    <header>
        <div class="fones">
            <ul>
                <li class="phone"><a href="" title="">+55 11 2978-3033</a></li>
                <li class="whatsapp"><a href="" title="+55 11 94788-1474">+55 11 94788-1474</a></li>
                <li class="mail"><a href="" title="contato@exitoisencoes.com.br">contato@exitoisencoes.com.br</a></li>
            </ul>
        </div>
        <?php
            // Insert custom logo in header

            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
            if(has_custom_logo()){
                echo '<img src="'. esc_url($logo[0]) .'" alt="'. get_bloginfo('name') .'">';
            }else{
                echo '<h1>'. get_bloginfo('name') .'</h1>';
            }

            wp_nav_menu(
                array(
                    'theme_location' => 'header-menu',
                    'menu_class' => 'menu'
                )
            );
        ?>
    </header>