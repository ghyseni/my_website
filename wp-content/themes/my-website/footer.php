
<footer id="footer">
    <section class="copyright">
        &copy; 2017 Copyright - Grese Hyseni
    </section>
    <section class="contact-info">
        <?php
        $frontpage_id = get_option('page_on_front');
        $address = get_field('address', $frontpage_id);
        if ($address):
            ?>
            <address class="address">
                <?php echo $address; ?>
            </address>
            <?php
        endif;
        ?>
        <a class="phone" href="tel:+19174598826">(+1)917-459-8826</a>
        <a class="phone" href="tel:+38649777826">(+386)49 777 826</a>
        <a class="email" href="mailto:hysenigresa@gmail.com">hysenigresa@gmail.com</a>
    </section>
</footer>
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/frontend/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/frontend/js/app.js"></script>

</body>

</html>
