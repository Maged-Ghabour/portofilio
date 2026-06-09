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
              'icon' => 'fas fa-globe',
              'title_en' => 'Web Development', 
              'title_ar' => 'تطوير مواقع الويب',
              'desc_en' => 'Designing and developing modern, responsive websites using PHP, Laravel, HTML, CSS, and JavaScript.',
              'desc_ar' => 'تصميم وتطوير مواقع ويب حديثة ومتجاوبة باستخدام PHP, Laravel, HTML, CSS و JavaScript.'
          ],
          [
              'icon' => 'fas fa-plug',
              'title_en' => 'API Development', 
              'title_ar' => 'تطوير واجهات برمجة التطبيقات (API)',
              'desc_en' => 'Designing and developing secure, efficient RESTful APIs for seamless integration between web and mobile apps.',
              'desc_ar' => 'تصميم وتطوير واجهات برمجة تطبيقات (RESTful APIs) آمنة وفعالة للربط السلس بين تطبيقات الويب والهواتف الذكية.'
          ],
          [
              'icon' => 'fab fa-wordpress',
              'title_en' => 'WordPress Development', 
              'title_ar' => 'تطوير قوالب وإضافات ووردبريس',
              'desc_en' => 'Developing and customizing WordPress themes and plugins to meet your business requirements accurately.',
              'desc_ar' => 'تطوير وتخصيص قوالب وإضافات ووردبريس لتلبي متطلبات عملك بدقة واحترافية.'
          ],
          [
              'icon' => 'fas fa-database',
              'title_en' => 'Database Design', 
              'title_ar' => 'تصميم قواعد البيانات',
              'desc_en' => 'Planning and designing robust, scalable databases using MySQL and MongoDB to ensure optimal performance.',
              'desc_ar' => 'تخطيط وتصميم قواعد بيانات متينة وقابلة للتوسع باستخدام MySQL و MongoDB لضمان أفضل أداء.'
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
              'icon' => 'fas fa-graduation-cap',
              'date' => '2018',
              'title_en' => 'Bachelor of Computers and Information', 'title_ar' => 'بكالوريوس حاسبات ومعلومات',
              'desc_en' => 'Graduated from the Faculty of Computers and Information, Mansoura University.',
              'desc_ar' => 'تخرجت من كلية الحاسبات والمعلومات، جامعة المنصورة.'
          ],
          [
              'icon' => 'fas fa-shield-alt',
              'date' => '2021',
              'title_en' => 'Reserve Officer in Armed Forces', 'title_ar' => 'ضابط احتياط بالقوات المسلحة',
              'desc_en' => 'Acquired skills in network and server administration (CCNA and MCSA) in addition to Front-End development.',
              'desc_ar' => 'اكتسبت مهارات في إدارة الشبكات والخوادم (CCNA و MCSA) بالإضافة إلى تطوير الواجهات الأمامية (Front-End).'
          ],
          [
              'icon' => 'fas fa-laptop-code',
              'date' => '2022',
              'title_en' => 'Web Development Course (PHP, MySQL, Laravel) — NTI', 'title_ar' => 'دورة تطوير الويب (PHP, MySQL, Laravel) — NTI',
              'desc_en' => 'Designing and building dynamic web applications and relational databases using PHP and Laravel framework.',
              'desc_ar' => 'تصميم وبناء تطبيقات ويب ديناميكية وقواعد بيانات علائقية باستخدام PHP وإطار العمل Laravel.'
          ],
          [
              'icon' => 'fas fa-code',
              'date' => '2022',
              'title_en' => 'Front-end and Server Apps Course (Node.js & Angular) — NTI', 'title_ar' => 'دورة تطوير الواجهات وتطبيقات الخادم (Node.js & Angular) — NTI',
              'desc_en' => 'Training on developing, securing, and deploying advanced and real-world web applications using Node.js and Angular technologies.',
              'desc_ar' => 'التدريب على تطوير وتأمين ونشر تطبيقات ويب متقدمة وحقيقية باستخدام تقنيات Node.js و Angular.'
          ],
          [
              'icon' => 'fas fa-rocket',
              'date' => '2022',
              'title_en' => 'Full Stack Web Scholarship (PHP & Laravel) — ITI', 'title_ar' => 'منحة تطوير الويب المتكامل (PHP & Laravel) — ITI',
              'desc_en' => 'Intensive training covering: HTML, CSS, JS, Bootstrap, PHP, Laravel, MySQL, Node.js, Docker, and GitHub.',
              'desc_ar' => 'تدريب مكثف على تطوير الويب الشامل يغطي تقنيات: HTML, CSS, JS, Bootstrap, PHP, Laravel, MySQL, Node.js, Docker وإدارة النسخ باستخدام GitHub.'
          ]
      ];
      for ($i = 1; $i <= 5; $i++) : 
      $icon = get_theme_mod("maged_edu_{$i}_icon", $default_education[$i-1]['icon']);
      $date = get_theme_mod("maged_edu_{$i}_date", $default_education[$i-1]['date']);
      $title_en = get_theme_mod("maged_edu_{$i}_title_en", $default_education[$i-1]['title_en']);
      $title_ar = get_theme_mod("maged_edu_{$i}_title_ar", $default_education[$i-1]['title_ar']);
      $desc_en = get_theme_mod("maged_edu_{$i}_desc_en", $default_education[$i-1]['desc_en']);
      $desc_ar = get_theme_mod("maged_edu_{$i}_desc_ar", $default_education[$i-1]['desc_ar']);
      if ($title_en) :
    ?>
    <div class="box" data-aos="fade-up" data-aos-delay="<?php echo ($i-1)*100; ?>">
      <i class="<?php echo esc_attr($icon); ?>"></i>
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

<!-- PAYMENT -->
<?php
  $pay_title_en = get_theme_mod('maged_payment_title_en', 'Payment Details');
  $pay_title_ar = get_theme_mod('maged_payment_title_ar', 'بيانات الدفع');
  $pay_sub_en   = get_theme_mod('maged_payment_subtitle_en', 'Choose the suitable payment method and copy details easily.');
  $pay_sub_ar   = get_theme_mod('maged_payment_subtitle_ar', 'اختر طريقة الدفع المناسبة لك وانسخ البيانات بسهولة.');

  $paypal_link  = get_theme_mod('maged_payment_paypal_link', 'https://paypal.me/elwaaa');
  $paypal_email = get_theme_mod('maged_payment_paypal_email', '3lwaaa+5@gmail.com');

  $stc_name     = get_theme_mod('maged_payment_stc_name', 'Ali Ahmed Abd elrazek Ahmed');
  $stc_iban     = get_theme_mod('maged_payment_stc_iban', 'EG070002023102310333000113743');
  $stc_bank     = get_theme_mod('maged_payment_stc_bank', 'Banque Misr');
  $stc_account  = get_theme_mod('maged_payment_stc_account', '2310333000113743');
  $stc_purpose  = get_theme_mod('maged_payment_stc_purpose', 'Family Support/Living Expenses');

  $rajhi_first  = get_theme_mod('maged_payment_rajhi_firstname', 'على');
  $rajhi_last   = get_theme_mod('maged_payment_rajhi_lastname', 'احمد عبدالرازق احمد');
  $rajhi_iban   = get_theme_mod('maged_payment_rajhi_iban', 'EG070002023102310333000113743');
  $rajhi_account= get_theme_mod('maged_payment_rajhi_account', '2310333000113743');
  $rajhi_swift  = get_theme_mod('maged_payment_rajhi_swift', 'BMISEGCXXXX');
  $rajhi_bank   = get_theme_mod('maged_payment_rajhi_bank', 'Banque Misr');
  $rajhi_branch = get_theme_mod('maged_payment_rajhi_branch', '101- All Branches (أو 231 - كفر الشيخ 50)');
  $rajhi_address= get_theme_mod('maged_payment_rajhi_address', 'مزلقان الانشاء والتعمير, Kafr El-Sheikh');
  $rajhi_postal = get_theme_mod('maged_payment_rajhi_postal', '33513');

  $int_city     = get_theme_mod('maged_payment_int_city', 'Kafr El-Sheikh');
  $int_state    = get_theme_mod('maged_payment_int_state', 'Kafr El-Sheikh Governorate');
  $int_country  = get_theme_mod('maged_payment_int_country', 'Egypt');
  $int_phone    = get_theme_mod('maged_payment_int_phone', '+20 100 224 1591');
?>
<section class="payment" id="payment">
  <h1 class="heading" data-aos="fade-up">
    <span data-en="<?php echo esc_attr($pay_title_en); ?>" data-ar="<?php echo esc_attr($pay_title_ar); ?>">
      <?php echo esc_html($pay_title_en); ?>
    </span>
  </h1>
  <p class="payment-subtitle" data-aos="fade-up" data-en="<?php echo esc_attr($pay_sub_en); ?>" data-ar="<?php echo esc_attr($pay_sub_ar); ?>">
    <?php echo esc_html($pay_sub_en); ?>
  </p>

  <div class="payment-methods" data-aos="fade-up">
    
    <!-- PayPal -->
    <?php if($paypal_link || $paypal_email) : ?>
    <div class="payment-card">
      <div class="payment-card-header">
        <i class="fab fa-paypal"></i>
        <h3 data-en="PayPal Transfer" data-ar="تحويل PayPal">PayPal Transfer</h3>
      </div>
      <div class="payment-card-body">
        <?php if($paypal_link) : ?>
        <div class="payment-info-item">
          <span data-en="Direct Link:" data-ar="رابط الدفع المباشر:">Direct Link:</span>
          <div class="copy-wrapper">
            <input type="text" value="<?php echo esc_attr($paypal_link); ?>" readonly>
            <button type="button" class="copy-btn" onclick="magedCopyText(this)"><i class="fas fa-copy"></i></button>
          </div>
        </div>
        <?php endif; ?>
        <?php if($paypal_email) : ?>
        <div class="payment-info-item">
          <span data-en="Email:" data-ar="البريد الإلكتروني:">Email:</span>
          <div class="copy-wrapper">
            <input type="text" value="<?php echo esc_attr($paypal_email); ?>" readonly>
            <button type="button" class="copy-btn" onclick="magedCopyText(this)"><i class="fas fa-copy"></i></button>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </div>
    <?php endif; ?>

    <!-- STC Pay -->
    <?php if($stc_name || $stc_iban) : ?>
    <div class="payment-card">
      <div class="payment-card-header">
        <i class="fas fa-wallet"></i>
        <h3 data-en="STC Pay (International)" data-ar="STC Pay (حوالة دولية)">STC Pay (International)</h3>
      </div>
      <div class="payment-card-body">
        <p class="payment-note" data-en="Via MoneyGram" data-ar="عبر MoneyGram (وليس ويسترن يونيون)">Via MoneyGram</p>
        
        <?php if($stc_name) : ?>
        <div class="payment-info-item">
          <span data-en="Name:" data-ar="الاسم:">Name:</span>
          <div class="copy-wrapper">
            <input type="text" value="<?php echo esc_attr($stc_name); ?>" readonly>
            <button type="button" class="copy-btn" onclick="magedCopyText(this)"><i class="fas fa-copy"></i></button>
          </div>
        </div>
        <?php endif; ?>

        <?php if($stc_iban) : ?>
        <div class="payment-info-item">
          <span data-en="IBAN:" data-ar="IBAN:">IBAN:</span>
          <div class="copy-wrapper">
            <input type="text" value="<?php echo esc_attr($stc_iban); ?>" readonly>
            <button type="button" class="copy-btn" onclick="magedCopyText(this)"><i class="fas fa-copy"></i></button>
          </div>
        </div>
        <?php endif; ?>

        <?php if($stc_bank) : ?>
        <div class="payment-info-item">
          <span data-en="Bank Name:" data-ar="اسم البنك:">Bank Name:</span>
          <div class="copy-wrapper">
            <input type="text" value="<?php echo esc_attr($stc_bank); ?>" readonly>
            <button type="button" class="copy-btn" onclick="magedCopyText(this)"><i class="fas fa-copy"></i></button>
          </div>
        </div>
        <?php endif; ?>

        <?php if($stc_account) : ?>
        <div class="payment-info-item">
          <span data-en="Account Number:" data-ar="رقم الحساب:">Account Number:</span>
          <div class="copy-wrapper">
            <input type="text" value="<?php echo esc_attr($stc_account); ?>" readonly>
            <button type="button" class="copy-btn" onclick="magedCopyText(this)"><i class="fas fa-copy"></i></button>
          </div>
        </div>
        <?php endif; ?>

        <?php if($stc_purpose) : ?>
        <div class="payment-info-item">
          <span data-en="Purpose:" data-ar="الغرض من التحويل:">Purpose:</span>
          <div class="copy-wrapper">
            <input type="text" value="<?php echo esc_attr($stc_purpose); ?>" readonly>
            <button type="button" class="copy-btn" onclick="magedCopyText(this)"><i class="fas fa-copy"></i></button>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </div>
    <?php endif; ?>

    <!-- Al Rajhi Bank -->
    <?php if($rajhi_first || $rajhi_last || $rajhi_iban) : ?>
    <div class="payment-card">
      <div class="payment-card-header">
        <i class="fas fa-university"></i>
        <h3 data-en="Al Rajhi Bank" data-ar="تحويل بنك الراجحي">Al Rajhi Bank</h3>
      </div>
      <div class="payment-card-body">
        
        <?php if($rajhi_first) : ?>
        <div class="payment-info-item">
          <span data-en="First Name:" data-ar="الاسم الأول:">First Name:</span>
          <div class="copy-wrapper">
            <input type="text" value="<?php echo esc_attr($rajhi_first); ?>" readonly>
            <button type="button" class="copy-btn" onclick="magedCopyText(this)"><i class="fas fa-copy"></i></button>
          </div>
        </div>
        <?php endif; ?>

        <?php if($rajhi_last) : ?>
        <div class="payment-info-item">
          <span data-en="Last Name:" data-ar="اسم العائلة:">Last Name:</span>
          <div class="copy-wrapper">
            <input type="text" value="<?php echo esc_attr($rajhi_last); ?>" readonly>
            <button type="button" class="copy-btn" onclick="magedCopyText(this)"><i class="fas fa-copy"></i></button>
          </div>
        </div>
        <?php endif; ?>

        <?php if($rajhi_iban) : ?>
        <div class="payment-info-item">
          <span data-en="IBAN:" data-ar="IBAN:">IBAN:</span>
          <div class="copy-wrapper">
            <input type="text" value="<?php echo esc_attr($rajhi_iban); ?>" readonly>
            <button type="button" class="copy-btn" onclick="magedCopyText(this)"><i class="fas fa-copy"></i></button>
          </div>
        </div>
        <?php endif; ?>

        <?php if($rajhi_account) : ?>
        <div class="payment-info-item">
          <span data-en="Account Number:" data-ar="رقم الحساب:">Account Number:</span>
          <div class="copy-wrapper">
            <input type="text" value="<?php echo esc_attr($rajhi_account); ?>" readonly>
            <button type="button" class="copy-btn" onclick="magedCopyText(this)"><i class="fas fa-copy"></i></button>
          </div>
        </div>
        <?php endif; ?>

        <?php if($rajhi_swift) : ?>
        <div class="payment-info-item">
          <span data-en="SWIFT Code:" data-ar="SWIFT Code:">SWIFT Code:</span>
          <div class="copy-wrapper">
            <input type="text" value="<?php echo esc_attr($rajhi_swift); ?>" readonly>
            <button type="button" class="copy-btn" onclick="magedCopyText(this)"><i class="fas fa-copy"></i></button>
          </div>
        </div>
        <?php endif; ?>

        <?php if($rajhi_bank) : ?>
        <div class="payment-info-item">
          <span data-en="Bank Name:" data-ar="اسم البنك:">Bank Name:</span>
          <div class="copy-wrapper">
            <input type="text" value="<?php echo esc_attr($rajhi_bank); ?>" readonly>
            <button type="button" class="copy-btn" onclick="magedCopyText(this)"><i class="fas fa-copy"></i></button>
          </div>
        </div>
        <?php endif; ?>

        <?php if($rajhi_postal) : ?>
        <div class="payment-info-item">
          <span data-en="Postal Code:" data-ar="الرمز البريدي:">Postal Code:</span>
          <div class="copy-wrapper">
            <input type="text" value="<?php echo esc_attr($rajhi_postal); ?>" readonly>
            <button type="button" class="copy-btn" onclick="magedCopyText(this)"><i class="fas fa-copy"></i></button>
          </div>
        </div>
        <?php endif; ?>

        <?php if($rajhi_branch) : ?>
        <div class="payment-info-item">
          <span data-en="Branch:" data-ar="الفرع:">Branch:</span>
          <span class="payment-plain-text"><?php echo esc_html($rajhi_branch); ?></span>
        </div>
        <?php endif; ?>

        <?php if($rajhi_address) : ?>
        <div class="payment-info-item">
          <span data-en="Branch Address:" data-ar="عنوان الفرع:">Branch Address:</span>
          <span class="payment-plain-text"><?php echo esc_html($rajhi_address); ?></span>
        </div>
        <?php endif; ?>

      </div>
    </div>
    <?php endif; ?>

    <!-- International Bank Transfer -->
    <?php if($int_city || $int_state) : ?>
    <div class="payment-card">
      <div class="payment-card-header">
        <i class="fas fa-globe"></i>
        <h3 data-en="Int. Bank Transfer (Extra)" data-ar="تحويل بنكي دولي (بيانات إضافية)">Int. Bank Transfer (Extra)</h3>
      </div>
      <div class="payment-card-body">
        <p class="payment-note" data-en="Required for some international transfers." data-ar="هذه البيانات قد تكون مطلوبة في بعض الحوالات الدولية.">Required for some international transfers.</p>
        
        <?php if($int_city) : ?>
        <div class="payment-info-item">
          <span data-en="City:" data-ar="المدينة / City:">City:</span>
          <div class="copy-wrapper">
            <input type="text" value="<?php echo esc_attr($int_city); ?>" readonly>
            <button type="button" class="copy-btn" onclick="magedCopyText(this)"><i class="fas fa-copy"></i></button>
          </div>
        </div>
        <?php endif; ?>

        <?php if($int_state) : ?>
        <div class="payment-info-item">
          <span data-en="State/Province:" data-ar="الولاية/المحافظة:">State/Province:</span>
          <div class="copy-wrapper">
            <input type="text" value="<?php echo esc_attr($int_state); ?>" readonly>
            <button type="button" class="copy-btn" onclick="magedCopyText(this)"><i class="fas fa-copy"></i></button>
          </div>
        </div>
        <?php endif; ?>

        <?php if($int_country) : ?>
        <div class="payment-info-item">
          <span data-en="Country:" data-ar="الدولة:">Country:</span>
          <div class="copy-wrapper">
            <input type="text" value="<?php echo esc_attr($int_country); ?>" readonly>
            <button type="button" class="copy-btn" onclick="magedCopyText(this)"><i class="fas fa-copy"></i></button>
          </div>
        </div>
        <?php endif; ?>

        <?php if($int_phone) : ?>
        <div class="payment-info-item">
          <span data-en="Phone:" data-ar="رقم الهاتف:">Phone:</span>
          <div class="copy-wrapper">
            <input type="text" value="<?php echo esc_attr($int_phone); ?>" readonly>
            <button type="button" class="copy-btn" onclick="magedCopyText(this)"><i class="fas fa-copy"></i></button>
          </div>
        </div>
        <?php endif; ?>

      </div>
    </div>
    <?php endif; ?>

  </div>
</section>

<?php get_footer(); ?>
