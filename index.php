<?php include("parts/header.php"); ?>

<div id="primary">
    <main id="main" class="site-main" role="main">
        <div class="seccionHomeUno" style="background-color: <?php echo get_theme_mod('color_fondo_home', '#000000'); ?>;">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <h1 style="font-size: <?php echo get_theme_mod('tamano_fuente_h1', '5rem'); ?>;
            color: <?php echo get_theme_mod('color_fuente_h1', '#ffffff'); ?>;
            font-weight: <?php echo (get_theme_mod('estilo_fuente_h1', 'normal') === 'bold') ? 'bold' : 'normal'; ?>;">
                            <?php echo get_theme_mod('titulo_h1', 'First wanted to be a veterinarian'); ?>
                        </h1>
                        <p style="font-size: <?php echo get_theme_mod('tamano_fuente_parrafo', '1.5rem'); ?>;
            color: <?php echo get_theme_mod('color_fuente_parrafo', '#ffffff'); ?>;">
                            <?php echo get_theme_mod('parrafo_home', 'Lorem ipsum dolor sit amet consectetur adipisicing elit...'); ?>
                        </p>
                        <div class="button-container">
                            <button class="button llamada-accion-1" style="text-transform: uppercase; background-color: <?php echo get_theme_mod('color_fondo_boton', '#ffffff'); ?>;
                                border: <?php echo (get_theme_mod('borde_activo', true)) ? '1px solid ' . get_theme_mod('color_borde_boton', '#000000') : 'none'; ?>;
                                font-size: <?php echo get_theme_mod('tamano_fuente_boton', '16px'); ?>;
                                color: <?php echo get_theme_mod('color_fuente_boton', '#000000'); ?>;
                                margin-top: <?php echo get_theme_mod('margen_superior_boton1', '0'); ?>;">
                                <?php echo get_theme_mod('texto_boton_1', 'Botón 1'); ?>
                            </button>
                            <button class="button transparent-button"><?php echo get_theme_mod('texto_boton_2', 'Botón 2'); ?></button>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <img src="<?php echo esc_url(get_theme_mod('imagen_home', get_template_directory_uri() . '/assets/img/dogHome.png')); ?>" alt="Dog" class="dogImg">
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<!--
<aside id="sidebar" class="sidebar">
    <?php dynamic_sidebar('sidebar-1'); ?>
</aside>
!>

<?php include("parts/footer.php"); ?>