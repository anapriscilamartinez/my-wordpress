<?php
/**
 * Template Name: Listado de Clases
 */

get_header();
?>

<main class="contenedor seccion">
    <!-- Trae la info del titulo y párrafo-->
    <?php
        get_template_part('template-parts/pagina')
    ?>
    <ul class="listado-grid">
        <?php
        $args = array(
            'post_type' => 'gymfitness_clases'
        );
        $clases = new WP_Query($args);

        while ($clases->have_posts()) :
            $clases->the_post();
        ?>
            <!-- Contenedor de la clase-card -->
            <li class="card">
                <!-- Imprime la imagen destacada -->
                <?php the_post_thumbnail(); ?>
                <div class="contenido">
                    <!-- Retorna el enlace -->
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <?php
                        $hora_inicio = get_field('hora_inicio');
                        $hora_fin = get_field('hora_inicio');
                    ?>
                    <!-- como son campos de ACF, para que muestre, dia, hora, etc. -->
                    <p>
                        <?php the_field('dias_clase'); ?>
                        <?php echo $hora_inicio . " a " . $hora_fin; ?>
                    </p>


                </div>
            </li>
        <?php
        endwhile;
        wp_reset_postdata();
        ?>
    </ul>
</main>

<?php
get_footer();
?>
