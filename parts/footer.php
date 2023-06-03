<footer id="colophon" class="site-footer">
    <div class="footer-content">
        <div class="footer-menu text-center">
            <!-- Agrega aquí tu logotipo del sitio o cualquier otro elemento visual que desees mostrar en el pie de página -->
            <ul>
                <li><a href="#">Enlace 1</a></li>
                <li><a href="#">Enlace 2</a></li>
                <li><a href="#">Enlace 3</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom text-center">
        <!-- Agrega aquí información adicional del pie de página, como derechos de autor, enlaces legales, etc. -->
        <p>&copy; <?php echo date('Y'); ?> Todos los derechos reservados</p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
<script src="<?php echo get_template_directory_uri(); ?>/node_modules/jquery/dist/jquery.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    
</html>