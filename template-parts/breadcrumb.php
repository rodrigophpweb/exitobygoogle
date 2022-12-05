<section class="bread">
    <h1>Contato</h1>
    <!-- Create Breadcrumb semantic html -->
    <?php 
        if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb('<p id="breadcrumbs">','</p>');
        } 
    ?>    
</section>