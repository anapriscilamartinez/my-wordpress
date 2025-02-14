<?php
    while ( have_posts() ): the_post();

        the_title('<h1 class="text-center text-primary">','</h1>');
        if(has_post_thumbnail()){ //comprobamos si hay una img, si es asi: muestra
            the_post_thumbnail('full', array('class'=>'imagen-destacada')); //mostrar una imagen
        }
        
        the_content();
    endwhile;