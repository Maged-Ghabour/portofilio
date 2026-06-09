<?php get_header(); ?>

<!-- HOME -->
<section class="home" id="home">
  <canvas id="particles"></canvas>
  <div class="home-content" data-aos="fade-up">
    <h3 data-en="<?php echo esc_attr(get_theme_mod('maged_home_greeting_en', 'HI THERE! 👋')); ?>" 
        data-ar="<?php echo esc_attr(get_theme_mod('maged_home_greeting_ar', 'أهلاً بك! 👋')); ?>">
        <?php echo esc_html(get_theme_mod('maged_home_greeting_en', 'HI THERE! 👋')); ?></h3>
    
    <h1 data-en="<?php echo esc_attr(get_theme_mod('maged_home_iam_en', "I'M <span>Maged Ghabour</span>")); ?>" 
        data-ar="<?php echo esc_attr(get_theme_mod('maged_home_iam_ar', "أنا <span>ماجد غبور</span>")); ?>">
        <?php echo wp_kses_post(get_theme_mod('maged_home_iam_en', "I'M <span>Maged Ghabour</span>")); ?></h1>
    
    <h2><span id="typed-text"></span></h2>
    
    <p data-en="<?php echo esc_attr(get_theme_mod('maged_home_desc_en', 'I am a highly motivated Full Stack PHP Developer with expertise in building scalable, responsive web applications.')); ?>" 
       data-ar="<?php echo esc_attr(get_theme_mod('maged_home_desc_ar', 'أنا مطور ويب متكامل (Full Stack) شغوف ومحترف، متخصص في بناء تطبيقات الويب المتجاوبة والقابلة للتوسع.')); ?>">
       <?php echo esc_html(get_theme_mod('maged_home_desc_en', 'I am a highly motivated Full Stack PHP Developer with expertise in building scalable, responsive web applications.')); ?></p>
    
    <div class="home-btns">
      <a href="#about"><button class="btn btn-primary" data-en="About Me" data-ar="نبذة عني"><i class="fas fa-user"></i> About Me</button></a>
      <a href="<?php echo esc_url(get_theme_mod('maged_cv_link', '#')); ?>" target="_blank" rel="noopener noreferrer"><button class="btn btn-outline" data-en="Download CV" data-ar="تحميل السيرة الذاتية"><i class="fas fa-download"></i> Download CV</button></a>
    </div>
  </div>
  <div class="home-img" data-aos="fade-left">
    <?php
    $avatar = get_theme_mod('maged_avatar');
    $avatar_url = $avatar ? esc_url($avatar) : get_template_directory_uri() . '/assets/img/maged.png';
    ?>
    <img src="<?php echo $avatar_url; ?>" alt="Maged Ghabour"/>
  </div>
</section>

<!-- ABOUT -->
<section class="about" id="about">
  <h1 class="heading" data-aos="fade-up"><span data-en="About Me" data-ar="نبذة عني">About Me</span></h1>
  <div class="row">
    <div class="info" data-aos="fade-right">
      <h3 data-en="Age : <span><?php echo esc_attr(get_theme_mod('maged_age', '26')); ?></span>" 
          data-ar="العمر : <span><?php echo esc_attr(get_theme_mod('maged_age', '26')); ?></span>">
          Age : <span><?php echo esc_html(get_theme_mod('maged_age', '26')); ?></span></h3>
      <h3 data-en="Degree : <span><?php echo esc_attr(get_theme_mod('maged_degree_en', 'Bachelor')); ?></span>" 
          data-ar="المؤهل : <span><?php echo esc_attr(get_theme_mod('maged_degree_ar', 'بكالوريوس')); ?></span>">
          Degree : <span><?php echo esc_html(get_theme_mod('maged_degree_en', 'Bachelor')); ?></span></h3>
      <h3 data-en="Location : <span><?php echo esc_attr(get_theme_mod('maged_location_en', 'Egypt, Mansoura')); ?></span>" 
          data-ar="الموقع : <span><?php echo esc_attr(get_theme_mod('maged_location_ar', 'مصر، المنصورة')); ?></span>">
          Location : <span><?php echo esc_html(get_theme_mod('maged_location_en', 'Egypt, Mansoura')); ?></span></h3>
    </div>
    <div class="counter" data-aos="fade-left">
      <div class="box">
        <span class="count" data-target="<?php echo esc_attr(get_theme_mod('maged_exp_years', '2')); ?>">0</span>
        <h3 data-en="Years Experience" data-ar="سنوات الخبرة">Years Experience</h3>
      </div>
      <div class="box">
        <span class="count" data-target="<?php echo esc_attr(get_theme_mod('maged_projects_count', '20')); ?>">0</span>
        <h3 data-en="Projects Completed" data-ar="المشاريع المنجزة">Projects Completed</h3>
      </div>
      <div class="box">
        <span class="count" data-target="<?php echo esc_attr(get_theme_mod('maged_clients_count', '15')); ?>">0</span>
        <h3 data-en="Happy Clients" data-ar="العملاء السعداء">Happy Clients</h3>
      </div>
      <div class="box">
        <span class="count" data-target="<?php echo esc_attr(get_theme_mod('maged_awards_count', '2')); ?>">0</span>
        <h3 data-en="Awards Won" data-ar="الجوائز الحاصل عليها">Awards Won</h3>
      </div>
    </div>
  </div>
</section>

<!-- SKILLS -->
<section class="skills" id="skills">
  <h1 class="heading" data-aos="fade-up"><span data-en="My Skills" data-ar="مهاراتي">My Skills</span></h1>
  <div class="skills-container">
    <?php 
      $default_skills = [
          ['name' => 'PHP', 'pct' => '90'],
          ['name' => 'Laravel', 'pct' => '85'],
          ['name' => 'MySQL', 'pct' => '85'],
          ['name' => 'Node.js', 'pct' => '70'],
          ['name' => 'HTML / CSS', 'pct' => '95'],
          ['name' => 'JavaScript', 'pct' => '80'],
          ['name' => 'Angular', 'pct' => '65'],
          ['name' => 'Git / GitHub', 'pct' => '80'],
      ];
    ?>
    <div class="skill-col">
      <?php for ($i = 1; $i <= 4; $i++) : 
        $skill_name = get_theme_mod("maged_skill_{$i}_name", $default_skills[$i-1]['name']);
        $skill_pct = get_theme_mod("maged_skill_{$i}_pct", $default_skills[$i-1]['pct']);
        if ($skill_name && $skill_pct) :
      ?>
      <div class="skill-item" data-aos="fade-up">
        <div class="skill-info">
          <span><?php echo esc_html($skill_name); ?></span>
          <span><?php echo esc_html($skill_pct); ?>%</span>
        </div>
        <div class="skill-bar">
          <div class="skill-fill" data-width="<?php echo esc_attr($skill_pct); ?>" style="width: 0;"></div>
        </div>
      </div>
      <?php endif; endfor; ?>
    </div>

    <div class="skill-col">
      <?php for ($i = 5; $i <= 8; $i++) : 
        $skill_name = get_theme_mod("maged_skill_{$i}_name", $default_skills[$i-1]['name']);
        $skill_pct = get_theme_mod("maged_skill_{$i}_pct", $default_skills[$i-1]['pct']);
        if ($skill_name && $skill_pct) :
      ?>
      <div class="skill-item" data-aos="fade-up">
        <div class="skill-info">
          <span><?php echo esc_html($skill_name); ?></span>
          <span><?php echo esc_html($skill_pct); ?>%</span>
        </div>
        <div class="skill-bar">
          <div class="skill-fill" data-width="<?php echo esc_attr($skill_pct); ?>" style="width: 0;"></div>
        </div>
      </div>
      <?php endif; endfor; ?>
    </div>
  </div>
</section>

<!-- SERVICES -->
<section class="services" id="services">
  <h1 class="heading" data-aos="fade-up"><span data-en="My Services" data-ar="خدماتي">My Services</span></h1>
  <div class="services-container">
    <?php 
      $default_services = [
          [
              'icon' => 'fas fa-laptop-code',
              'title_en' => 'Web Development', 'title_ar' => 'تطوير الويب',
              'desc_en' => 'Building responsive and highly scalable web applications from scratch.',
              'desc_ar' => 'بناء تطبيقات ويب متجاوبة وقابلة للتوسع من الصفر بجودة عالية.'
          ],
          [
              'icon' => 'fas fa-server',
              'title_en' => 'Backend Solutions', 'title_ar' => 'برمجة الواجهة الخلفية',
              'desc_en' => 'Creating robust backend systems and databases architecture.',
              'desc_ar' => 'إنشاء أنظمة واجهة خلفية قوية وهيكلة قواعد بيانات متطورة.'
          ],
          [
              'icon' => 'fas fa-plug',
              'title_en' => 'API Integration', 'title_ar' => 'ربط واجهات برمجية API',
              'desc_en' => 'Seamlessly connecting third-party services and APIs to your platform.',
              'desc_ar' => 'ربط سلس مع الخدمات الخارجية والواجهات البرمجية المختلفة.'
          ],
          [
              'icon' => 'fas fa-mobile-alt',
              'title_en' => 'Responsive Design', 'title_ar' => 'تصميم متجاوب',
              'desc_en' => 'Ensuring your website looks perfectly on all devices and screen sizes.',
              'desc_ar' => 'ضمان ظهور موقعك بشكل مثالي على جميع الأجهزة والشاشات.'
          ]
      ];
      for ($i = 1; $i <= 4; $i++) : 
      $icon = get_theme_mod("maged_service_{$i}_icon", $default_services[$i-1]['icon']);
      $title_en = get_theme_mod("maged_service_{$i}_title_en", $default_services[$i-1]['title_en']);
      $title_ar = get_theme_mod("maged_service_{$i}_title_ar", $default_services[$i-1]['title_ar']);
      $desc_en = get_theme_mod("maged_service_{$i}_desc_en", $default_services[$i-1]['desc_en']);
      $desc_ar = get_theme_mod("maged_service_{$i}_desc_ar", $default_services[$i-1]['desc_ar']);
      if ($title_en) :
    ?>
    <div class="service-card" data-aos="zoom-in" data-aos-delay="<?php echo ($i-1)*100; ?>">
      <i class="<?php echo esc_attr($icon ? $icon : 'fas fa-code'); ?>"></i>
      <h3 data-en="<?php echo esc_attr($title_en); ?>" data-ar="<?php echo esc_attr($title_ar); ?>"><?php echo esc_html($title_en); ?></h3>
      <p data-en="<?php echo esc_attr($desc_en); ?>" data-ar="<?php echo esc_attr($desc_ar); ?>"><?php echo esc_html($desc_en); ?></p>
    </div>
    <?php endif; endfor; ?>
  </div>
</section>

<!-- PROJECTS -->
<section class="projects" id="projects">
  <h1 class="heading" data-aos="fade-up"><span data-en="My Projects" data-ar="أبرز مشاريعي">My Projects</span></h1>
  <div class="projects-container">
    <?php 
      $default_projects = [
          [
              'img' => get_template_directory_uri() . '/assets/img/wallpaperflare.com_wallpaper.jpg',
              'title_en' => 'E-Commerce Platform', 'title_ar' => 'منصة تجارة إلكترونية',
              'desc_en' => 'A fully featured e-commerce website with payment gateways.',
              'desc_ar' => 'موقع تجارة إلكترونية متكامل يحتوي على بوابات دفع.',
              'link' => '#'
          ],
          [
              'img' => get_template_directory_uri() . '/assets/img/wallpaperflare.com_wallpaper (1).jpg',
              'title_en' => 'Real Estate Portal', 'title_ar' => 'بوابة عقارية',
              'desc_en' => 'Advanced search functionality for properties and agencies.',
              'desc_ar' => 'وظيفة بحث متقدمة للعقارات والوكالات العقارية.',
              'link' => '#'
          ],
          [
              'img' => get_template_directory_uri() . '/assets/img/wallpaperflare.com_wallpaper (2).jpg',
              'title_en' => 'Learning Management', 'title_ar' => 'نظام إدارة التعليم',
              'desc_en' => 'Online courses platform with quizzes and video streaming.',
              'desc_ar' => 'منصة دورات تعليمية على الإنترنت مع اختبارات وبث فيديو.',
              'link' => '#'
          ],
          [
              'img' => get_template_directory_uri() . '/assets/img/wallpaperflare.com_wallpaper (3).jpg',
              'title_en' => 'Booking System', 'title_ar' => 'نظام حجوزات',
              'desc_en' => 'Automated appointment scheduling for clinics and salons.',
              'desc_ar' => 'جدولة مواعيد تلقائية للعيادات والصالونات.',
              'link' => '#'
          ],
          [
              'img' => get_template_directory_uri() . '/assets/img/wallpaperflare.com_wallpaper (4).jpg',
              'title_en' => 'Company Portfolio', 'title_ar' => 'محفظة أعمال لشركة',
              'desc_en' => 'Sleek and modern portfolio design with dynamic content.',
              'desc_ar' => 'تصميم حديث وأنيق لمحفظة أعمال مع محتوى ديناميكي.',
              'link' => '#'
          ],
          [
              'img' => get_template_directory_uri() . '/assets/img/wallpaperflare.com_wallpaper (5).jpg',
              'title_en' => 'SaaS Application', 'title_ar' => 'تطبيق SaaS',
              'desc_en' => 'Cloud-based software solution with multi-tenant architecture.',
              'desc_ar' => 'حل برمجي سحابي يدعم مستخدمين وشركات متعددة.',
              'link' => '#'
          ],
      ];
      for ($i = 1; $i <= 6; $i++) : 
      $img = get_theme_mod("maged_project_{$i}_img", $default_projects[$i-1]['img']);
      $title_en = get_theme_mod("maged_project_{$i}_title_en", $default_projects[$i-1]['title_en']);
      $title_ar = get_theme_mod("maged_project_{$i}_title_ar", $default_projects[$i-1]['title_ar']);
      $desc_en = get_theme_mod("maged_project_{$i}_desc_en", $default_projects[$i-1]['desc_en']);
      $desc_ar = get_theme_mod("maged_project_{$i}_desc_ar", $default_projects[$i-1]['desc_ar']);
      $link = get_theme_mod("maged_project_{$i}_link", $default_projects[$i-1]['link']);
      if ($title_en && $img) :
    ?>
    <div class="project-card" data-aos="fade-up" data-aos-delay="<?php echo ($i-1)*100; ?>">
      <div class="project-img">
        <img src="<?php echo esc_url($img); ?>" alt="<?php echo esc_attr($title_en); ?>"/>
        <div class="project-overlay">
          <a href="<?php echo esc_url($link); ?>" target="_blank" rel="noopener noreferrer" class="project-link"><i class="fas fa-external-link-alt"></i></a>
        </div>
      </div>
      <div class="project-info">
        <h3 data-en="<?php echo esc_attr($title_en); ?>" data-ar="<?php echo esc_attr($title_ar); ?>"><?php echo esc_html($title_en); ?></h3>
        <p data-en="<?php echo esc_attr($desc_en); ?>" data-ar="<?php echo esc_attr($desc_ar); ?>"><?php echo esc_html($desc_en); ?></p>
      </div>
    </div>
    <?php endif; endfor; ?>
  </div>
</section>

<!-- EXPERIENCE -->
<section class="experience" id="experience">
  <h1 class="heading" data-aos="fade-up"><span data-en="Work Experience" data-ar="الخبرات المهنية">Work Experience</span></h1>
  <div class="timeline">
    <?php 
      $default_experience = [
          [
              'date_en' => '2022 - Present', 'date_ar' => '2022 - حتى الآن',
              'title_en' => 'Senior Backend Developer', 'title_ar' => 'مطور واجهة خلفية أول',
              'desc_en' => 'Leading the backend team in developing scalable APIs and microservices.',
              'desc_ar' => 'قيادة فريق الواجهة الخلفية في تطوير واجهات برمجية قابلة للتوسع.',
              'tags' => 'PHP, Laravel, MySQL, Redis'
          ],
          [
              'date_en' => '2020 - 2022', 'date_ar' => '2020 - 2022',
              'title_en' => 'Full Stack Developer', 'title_ar' => 'مطور ويب متكامل',
              'desc_en' => 'Developed and maintained various e-commerce and corporate websites.',
              'desc_ar' => 'تطوير وصيانة العديد من مواقع التجارة الإلكترونية والمواقع للشركات.',
              'tags' => 'Vue.js, HTML, CSS, JavaScript'
          ],
          [
              'date_en' => '2019 - 2020', 'date_ar' => '2019 - 2020',
              'title_en' => 'Junior Web Developer', 'title_ar' => 'مطور ويب مبتدئ',
              'desc_en' => 'Assisted in building custom WordPress themes and plugins.',
              'desc_ar' => 'المساعدة في بناء قوالب وإضافات ووردبريس مخصصة.',
              'tags' => 'WordPress, PHP, jQuery'
          ]
      ];
      for ($i = 1; $i <= 3; $i++) : 
      $date_en = get_theme_mod("maged_exp_{$i}_date_en", $default_experience[$i-1]['date_en']);
      $date_ar = get_theme_mod("maged_exp_{$i}_date_ar", $default_experience[$i-1]['date_ar']);
      $title_en = get_theme_mod("maged_exp_{$i}_title_en", $default_experience[$i-1]['title_en']);
      $title_ar = get_theme_mod("maged_exp_{$i}_title_ar", $default_experience[$i-1]['title_ar']);
      $desc_en = get_theme_mod("maged_exp_{$i}_desc_en", $default_experience[$i-1]['desc_en']);
      $desc_ar = get_theme_mod("maged_exp_{$i}_desc_ar", $default_experience[$i-1]['desc_ar']);
      $tags = get_theme_mod("maged_exp_{$i}_tags", $default_experience[$i-1]['tags']);
      if ($title_en) :
    ?>
    <div class="timeline-item" data-aos="fade-up" data-aos-delay="<?php echo ($i-1)*100; ?>">
      <div class="timeline-dot"></div>
      <div class="timeline-content">
        <span class="timeline-date" data-en="<?php echo esc_attr($date_en); ?>" data-ar="<?php echo esc_attr($date_ar); ?>"><?php echo esc_html($date_en); ?></span>
        <h3 data-en="<?php echo esc_attr($title_en); ?>" data-ar="<?php echo esc_attr($title_ar); ?>"><?php echo esc_html($title_en); ?></h3>
        <p data-en="<?php echo esc_attr($desc_en); ?>" data-ar="<?php echo esc_attr($desc_ar); ?>"><?php echo esc_html($desc_en); ?></p>
        <?php if ($tags) : ?>
        <div class="timeline-tags">
          <?php foreach(explode(',', $tags) as $tag) : ?>
            <span><?php echo esc_html(trim($tag)); ?></span>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>
      </div>
    </div>
    <?php endif; endfor; ?>
  </div>
</section>

<!-- EDUCATION -->
<section class="education" id="education">
  <h1 class="heading" data-aos="fade-up"><span data-en="My Education" data-ar="مؤهلاتي العلمية">My Education</span></h1>
  <div class="box-container">
    <?php 
      $default_education = [
          [
              'date' => '2015 - 2019',
              'title_en' => 'Bachelor of Computer Science', 'title_ar' => 'بكالوريوس علوم الحاسب',
              'desc_en' => 'Studied core computer science concepts, algorithms, and software engineering.',
              'desc_ar' => 'دراسة مفاهيم علوم الحاسب الأساسية، الخوارزميات، وهندسة البرمجيات.'
          ],
          [
              'date' => '2020',
              'title_en' => 'Advanced PHP Certification', 'title_ar' => 'شهادة متقدمة في PHP',
              'desc_en' => 'Completed an intensive program focusing on advanced PHP and Laravel concepts.',
              'desc_ar' => 'إكمال برنامج مكثف يركز على مفاهيم PHP و Laravel المتقدمة.'
          ],
          [
              'date' => '2021',
              'title_en' => 'Frontend Web Development', 'title_ar' => 'تطوير واجهات الويب',
              'desc_en' => 'Mastered modern frontend frameworks like React and Vue.js.',
              'desc_ar' => 'إتقان أطر عمل الواجهات الأمامية الحديثة مثل React و Vue.js.'
          ]
      ];
      for ($i = 1; $i <= 3; $i++) : 
      $date = get_theme_mod("maged_edu_{$i}_date", $default_education[$i-1]['date']);
      $title_en = get_theme_mod("maged_edu_{$i}_title_en", $default_education[$i-1]['title_en']);
      $title_ar = get_theme_mod("maged_edu_{$i}_title_ar", $default_education[$i-1]['title_ar']);
      $desc_en = get_theme_mod("maged_edu_{$i}_desc_en", $default_education[$i-1]['desc_en']);
      $desc_ar = get_theme_mod("maged_edu_{$i}_desc_ar", $default_education[$i-1]['desc_ar']);
      if ($title_en) :
    ?>
    <div class="box" data-aos="fade-up" data-aos-delay="<?php echo ($i-1)*100; ?>">
      <i class="fas fa-graduation-cap"></i>
      <span><?php echo esc_html($date); ?></span>
      <h3 data-en="<?php echo esc_attr($title_en); ?>" data-ar="<?php echo esc_attr($title_ar); ?>"><?php echo esc_html($title_en); ?></h3>
      <p data-en="<?php echo esc_attr($desc_en); ?>" data-ar="<?php echo esc_attr($desc_ar); ?>"><?php echo esc_html($desc_en); ?></p>
    </div>
    <?php endif; endfor; ?>
  </div>
</section>

<!-- CONTACT -->
<section class="contact" id="contact">
  <h1 class="heading" data-aos="fade-up"><span data-en="Contact Me" data-ar="تواصل معي">Contact Me</span></h1>
  <div class="row">
    <div class="content" data-aos="fade-right">
      <h3 class="title" data-en="Get In Touch" data-ar="تواصل معي مباشرة">Get In Touch</h3>
      <div class="info">
        <h3><i class="fas fa-envelope"></i> <?php echo esc_html(get_theme_mod('maged_contact_email', 'ghabourmaged@gmail.com')); ?></h3>
        <h3><i class="fas fa-phone"></i> <?php echo esc_html(get_theme_mod('maged_contact_phone1', '+20 100 785 2746')); ?></h3>
        <h3><i class="fas fa-phone"></i> <?php echo esc_html(get_theme_mod('maged_contact_phone2', '+20 155 087 0134')); ?></h3>
        <h3 data-en="<i class='fas fa-map-marker-alt'></i> <?php echo esc_attr(get_theme_mod('maged_contact_address_en', 'Dakahlia, Mansoura')); ?>" 
            data-ar="<i class='fas fa-map-marker-alt'></i> <?php echo esc_attr(get_theme_mod('maged_contact_address_ar', 'المنصورة، الدقهلية')); ?>">
            <i class="fas fa-map-marker-alt"></i> <?php echo esc_html(get_theme_mod('maged_contact_address_en', 'Dakahlia, Mansoura')); ?>
        </h3>
      </div>
      <div class="contact-social">
        <a href="<?php echo esc_url(get_theme_mod('maged_social_github', 'https://github.com/Maged-Ghabour')); ?>" target="_blank" rel="noopener noreferrer"><i class="fab fa-github"></i></a>
        <a href="<?php echo esc_url(get_theme_mod('maged_social_linkedin', 'https://www.linkedin.com/in/magedghabour/')); ?>" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
        <a href="<?php echo esc_url(get_theme_mod('maged_social_whatsapp', 'https://wa.me/201007852746')); ?>" target="_blank" rel="noopener noreferrer"><i class="fab fa-whatsapp"></i></a>
      </div>
    </div>
    
    <div class="form-container" data-aos="fade-left">
      <?php 
        $cf7_shortcode = get_theme_mod('maged_cf7_shortcode', ''); 
        if ($cf7_shortcode) :
          echo do_shortcode($cf7_shortcode);
        else :
      ?>
      <form id="contact-form">
        <input type="text" class="box" placeholder="Name" data-en-placeholder="Name" data-ar-placeholder="الاسم" required>
        <input type="email" class="box" placeholder="Email" data-en-placeholder="Email" data-ar-placeholder="البريد الإلكتروني" required>
        <input type="text" class="box" placeholder="Subject" data-en-placeholder="Subject" data-ar-placeholder="الموضوع" required>
        <textarea class="box" cols="30" rows="10" placeholder="Message" data-en-placeholder="Message" data-ar-placeholder="الرسالة" required></textarea>
        <button type="submit" class="btn btn-primary" data-en="<span>Send Message</span> <i class='fas fa-paper-plane'></i>" data-ar="<span>إرسال الرسالة</span> <i class='fas fa-paper-plane'></i>">
          <span>Send Message</span> <i class="fas fa-paper-plane"></i>
        </button>
        <div id="form-success" style="display:none; color: #2ecc71; font-size: 1.6rem; margin-top: 1rem; align-items: center; gap: .5rem;">
          <i class="fas fa-check-circle"></i> <span data-en="Message Sent Successfully!" data-ar="تم إرسال الرسالة بنجاح!">Message Sent Successfully!</span>
        </div>
      </form>
      <p style="font-size: 1.2rem; margin-top: 10px; color: var(--text-muted);" data-en="To enable dynamic forms, enter a Contact Form 7 shortcode in Customizer." data-ar="لتفعيل إرسال الرسائل الفعلي، أضف كود Contact Form 7 في لوحة التحكم.">
        To enable dynamic forms, enter a Contact Form 7 shortcode in Customizer.
      </p>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
