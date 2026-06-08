<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="ltr">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Audio -->
<audio id="audio1" src="<?php echo get_template_directory_uri(); ?>/assets/sounds/whoosh.mp3" preload="auto"></audio>
<audio id="audio4" src="<?php echo get_template_directory_uri(); ?>/assets/sounds/nav.mp3" preload="auto"></audio>

<!-- Preloader -->
<div id="preloader">
  <div class="loader"></div>
</div>

<div id="menu" class="fas fa-bars"></div>

<header>
  <div class="user">
    <?php
    $avatar = get_theme_mod('maged_avatar');
    $avatar_url = $avatar ? esc_url($avatar) : get_template_directory_uri() . '/assets/img/maged.png';
    ?>
    <img src="<?php echo $avatar_url; ?>" alt="User Avatar"/>
    <h3 class="name">
      <span data-en="<?php echo esc_attr(get_theme_mod('maged_name_en', 'Maged Ghabour')); ?>" 
            data-ar="<?php echo esc_attr(get_theme_mod('maged_name_ar', 'ماجد غبور')); ?>">
        <?php echo esc_html(get_theme_mod('maged_name_en', 'Maged Ghabour')); ?>
      </span>
    </h3>
    <p class="post" 
       data-en="<?php echo esc_attr(get_theme_mod('maged_role_en', 'Full Stack Web Developer')); ?>" 
       data-ar="<?php echo esc_attr(get_theme_mod('maged_role_ar', 'مطور ويب متكامل (Full Stack)')); ?>">
       <?php echo esc_html(get_theme_mod('maged_role_en', 'Full Stack Web Developer')); ?>
    </p>
    <div class="social-links">
      <a href="<?php echo esc_url(get_theme_mod('maged_social_github', 'https://github.com/Maged-Ghabour')); ?>" target="_blank" rel="noopener noreferrer" title="GitHub"><i class="fab fa-github"></i></a>
      <a href="<?php echo esc_url(get_theme_mod('maged_social_linkedin', 'https://www.linkedin.com/in/magedghabour/')); ?>" target="_blank" rel="noopener noreferrer" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
      <a href="<?php echo esc_url(get_theme_mod('maged_social_whatsapp', 'https://wa.me/201007852746')); ?>" target="_blank" rel="noopener noreferrer" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
    </div>
  </div>
  <nav class="navbar">
    <ul>
      <li><a href="#home" class="active"><i class="fas fa-home"></i> <span data-en="Home" data-ar="الرئيسية">Home</span></a></li>
      <li><a href="#about"><i class="fas fa-user"></i> <span data-en="About" data-ar="نبذة عني">About</span></a></li>
      <li><a href="#skills"><i class="fas fa-code"></i> <span data-en="Skills" data-ar="مهاراتي">Skills</span></a></li>
      <li><a href="#services"><i class="fas fa-cogs"></i> <span data-en="Services" data-ar="خدماتي">Services</span></a></li>
      <li><a href="#projects"><i class="fas fa-briefcase"></i> <span data-en="Projects" data-ar="مشاريعي">Projects</span></a></li>
      <li><a href="#experience"><i class="fas fa-building"></i> <span data-en="Experience" data-ar="الخبرات المهنية">Experience</span></a></li>
      <li><a href="#education"><i class="fas fa-graduation-cap"></i> <span data-en="Education" data-ar="المؤهلات العلمية">Education</span></a></li>
      <li><a href="#contact"><i class="fas fa-envelope"></i> <span data-en="Contact" data-ar="تواصل معي">Contact</span></a></li>
    </ul>
  </nav>
  <div class="header-btns">
    <button id="theme-toggle" class="theme-btn" title="Toggle Theme"><i class="fas fa-sun"></i></button>
    <button id="lang-toggle" class="lang-btn">عربي</button>
  </div>
</header>
