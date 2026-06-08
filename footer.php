<?php
/**
 * The template for displaying the footer
 *
 * @package Maged_Portfolio
 */
?>

<!-- Scroll Top Button -->
<a href="#home" class="top" id="scroll-top"><i class="fas fa-arrow-up"></i></a>

<footer>
  <p data-en="Created By <?php echo esc_attr(get_theme_mod('maged_name_en', 'Maged Ghabour')); ?> | All Rights Reserved" 
     data-ar="تم التطوير بواسطة <?php echo esc_attr(get_theme_mod('maged_name_ar', 'ماجد غبور')); ?> | جميع الحقوق محفوظة">
    Created By <?php echo esc_html(get_theme_mod('maged_name_en', 'Maged Ghabour')); ?> | All Rights Reserved &copy; <?php echo date('Y'); ?>
  </p>
</footer>

<?php wp_footer(); ?>
</body>
</html>
