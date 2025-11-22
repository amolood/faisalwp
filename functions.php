<?php
/**
 * Set up theme defaults and register support for WordPress features.
 */
function faisalwp_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('custom-logo');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'faisalwp'),
    ));
}
add_action('after_setup_theme', 'faisalwp_setup');

function faisalwp_get_default_language_content() {
    return array(
        'en' => array(
            'langToggle' => 'ع',
            'navName' => 'Dr. Faisal Khudawardi',
            'navHome' => 'Home',
            'navAbout' => 'About Me',
            'navServices' => 'Services',
            'navSchedule' => 'Schedule',
            'navContact' => 'Contact',
            'navAppointment' => 'Book Appointment',
            'heroName' => 'Dr. Faisal Hasan Khudawardi',
            'heroTitle' => 'Consultant General Surgery and Laparoscopy',
            'heroSubtitle' => 'Providing expert surgical care with a focus on minimal access techniques for faster recovery.',
            'heroCTA' => 'Book an Appointment',
            'aboutSubtitle' => 'About Me',
            'aboutTitle' => 'Dr. Faisal H. Khudawardi',
            'aboutText1' => 'An approved Fellow of the American College of Surgeons, specializing in laparoscopy and hernia surgery. With over 10 years of work experience across the Middle East, I am an expert in General Surgery directing care delivery with an emphasis on high-quality, patient-centered strategies.',
            'aboutText2' => 'I excel in leading multidisciplinary teams and monitoring clinical efficiency to ensure the best surgical and patient outcomes.',
            'aboutCredentialsTitle' => 'Boards & Fellowships',
            'aboutCredential1' => 'Saudi Board of General Surgery',
            'aboutCredential2' => 'Jordanian Board of General Surgery',
            'aboutCredential3' => 'Fellow of American College of Surgery (FACS)',
            'aboutCredential4' => 'Fellowship of Minimal Invasive Surgery (World Laparoscopic Hospital)',
            'servicesSubtitle' => 'Specializations',
            'servicesTitle' => 'My Areas of Expertise',
            'servicesDescription' => 'I specialize in a wide range of general and laparoscopic surgical procedures.',
            'service1Title' => 'Laparoscopic Hernia Repair',
            'service1Desc' => '(Inguinal, Umbilical, Ventral)',
            'service2Title' => 'Gallbladder Diseases',
            'service2Desc' => '(Gallstone, Polyp, Cholecystitis)',
            'service3Title' => 'Laparoscopic Appendectomy',
            'service4Title' => 'Colon and Small Bowel Disease',
            'service5Title' => 'Rectal and Anal Diseases',
            'service6Title' => 'Pilonidal Sinus',
            'service7Title' => 'Thyroid Diseases',
            'service8Title' => 'Breast Diseases & Biopsy',
            'service9Title' => 'Diabetic Foot',
            'service10Title' => 'Soft Tissue Diseases',
            'service11Title' => 'Ingrown Toe Nail',
            'service12Title' => 'And more...',
            'scheduleSubtitle' => 'Clinic Schedule',
            'scheduleTitle' => 'My Availability',
            'scheduleDescription' => 'Find me at the following locations during the week. Please call to confirm and book.',
            'locationLabel' => 'Location:',
            'daysLabel' => 'Days:',
            'timeLabel' => 'Time:',
            'scheduleLocation1Name' => 'Dr. Talal Qutb Center - Al-Safa',
            'scheduleLocation1Address' => 'Prince Mutaib Bin Abdulaziz St, Al-Safa, Jeddah',
            'scheduleLocation1Days' => 'Sunday & Tuesday',
            'scheduleLocation1Time' => '5:00 PM - 10:00 PM',
            'scheduleLocation2Name' => 'European Medical Center',
            'scheduleLocation2Address' => 'Nahdah St, Al-Rawdah, Jeddah',
            'scheduleLocation2Days' => 'Tuesday',
            'scheduleLocation2Time' => '1:00 PM - 4:00 PM',
            'contactSubtitle' => 'Get in Touch',
            'contactTitle' => 'Contact Me',
            'contactDescription' => 'Ready to schedule a consultation? Please reach out via phone or email.',
            'contactPhone' => 'Phone',
            'contactEmail' => 'Email',
            'footerText' => '© ' . date('Y') . ' Dr. Faisal Khudawardi. All rights reserved.',
        ),
        'ar' => array(
            'langToggle' => 'En',
            'navName' => 'د. فيصل خداوردي',
            'navHome' => 'الرئيسية',
            'navAbout' => 'عني',
            'navServices' => 'الخدمات',
            'navSchedule' => 'الجدول',
            'navContact' => 'تواصل معي',
            'navAppointment' => 'احجز موعد',
            'heroName' => 'د. فيصل حسن خداوردي',
            'heroTitle' => 'استشاري جراحة عامة ومناظير متقدمة',
            'heroSubtitle' => 'تقديم رعاية جراحية متخصصة مع التركيز على تقنيات التدخل المحدود لتعافٍ أسرع.',
            'heroCTA' => 'احجز موعدك الآن',
            'aboutSubtitle' => 'عني',
            'aboutTitle' => 'د. فيصل حسن خداوردي',
            'aboutText1' => 'زميل الكلية الأمريكية للجراحين، متخصص في جراحة المناظير وجراحة الفتق. بخبرة تزيد عن 10 سنوات في الشرق الأوسط، أنا خبير في الجراحة العامة أُدير الرعاية مع التركيز على استراتيجيات عالية الجودة تتمحور حول المريض.',
            'aboutText2' => 'أتفوق في قيادة الفرق متعددة التخصصات ومراقبة الكفاءة السريرية لضمان أفضل النتائج الجراحية للمرضى.',
            'aboutCredentialsTitle' => 'البورد والزمالات',
            'aboutCredential1' => 'البورد السعودي في الجراحة العامة',
            'aboutCredential2' => 'البورد الأردني في الجراحة العامة',
            'aboutCredential3' => 'زمالة الكلية الأمريكية في الجراحة العامة',
            'aboutCredential4' => 'زمالة جراحة المناظير (World Laparoscopic Hospital)',
            'servicesSubtitle' => 'التخصصات',
            'servicesTitle' => 'مجالات خبرتي',
            'servicesDescription' => 'أنا متخصص في مجموعة واسعة من الإجراءات الجراحية العامة وجراحة المناظير.',
            'service1Title' => 'اصلاح الفتق بالمنظار',
            'service1Desc' => '(الاربي، السري، البطني)',
            'service2Title' => 'أمراض المرارة',
            'service2Desc' => '(حصوة، لحمية، التهاب)',
            'service3Title' => 'التهابات الزائدة بالمنظار',
            'service4Title' => 'أمراض وأورام القولون',
            'service5Title' => 'أمراض المستقيم والشرج',
            'service6Title' => 'الناسور العصعصي',
            'service7Title' => 'أمراض وأورام الغدة الدرقية',
            'service8Title' => 'أمراض وأورام الثدي',
            'service9Title' => 'القدم السكري',
            'service10Title' => 'كتل الجلد (كيس دهني، شمعي)',
            'service11Title' => 'الظفر الغارز',
            'service12Title' => 'والمزيد...',
            'scheduleSubtitle' => 'جدول العيادات',
            'scheduleTitle' => 'جدول مواعيدي',
            'scheduleDescription' => 'يمكنكم إيجادي في المواقع التالية خلال الأسبوع. يرجى الاتصال للتأكيد والحجز.',
            'locationLabel' => 'الموقع:',
            'daysLabel' => 'الأيام:',
            'timeLabel' => 'الوقت:',
            'scheduleLocation1Name' => 'مركز د. طلال قطب - الصفا',
            'scheduleLocation1Address' => 'شارع الأمير متعب بن عبدالعزيز، حي الصفا، جدة',
            'scheduleLocation1Days' => 'الأحد والثلاثاء',
            'scheduleLocation1Time' => '٥:٠٠ م - ١٠:٠٠ م',
            'scheduleLocation2Name' => 'المركز الاوروبي الطبي',
            'scheduleLocation2Address' => 'شارع نهضة، حي الروضه، جدة',
            'scheduleLocation2Days' => 'الثلاثاء',
            'scheduleLocation2Time' => '١:٠٠ م - ٤:٠٠ م',
            'contactSubtitle' => 'تواصل معي',
            'contactTitle' => 'اتصل بنا',
            'contactDescription' => 'هل أنت مستعد لتحديد موعد للاستشارة؟ يرجى التواصل عبر الهاتف أو البريد الإلكتروني.',
            'contactPhone' => 'الجوال',
            'contactEmail' => 'البريد الإلكتروني',
            'footerText' => '© ' . date('Y') . ' د. فيصل خداوردي. جميع الحقوق محفوظة.',
        ),
    );
}

function faisalwp_get_language_content() {
    $defaults = faisalwp_get_default_language_content();
    $saved = get_option('faisalwp_language_strings', array());
    if (!is_array($saved)) {
        $saved = array();
    }

    $content = $defaults;
    foreach ($defaults as $lang => $values) {
        if (!empty($saved[$lang]) && is_array($saved[$lang])) {
            foreach ($values as $key => $default_value) {
                if (isset($saved[$lang][$key]) && $saved[$lang][$key] !== '') {
                    $content[$lang][$key] = $saved[$lang][$key];
                }
            }
        }
    }

    return $content;
}

function faisalwp_language_sections() {
    return array(
        'navigation' => array(
            'label' => __('Navigation', 'faisalwp'),
            'keys' => array(
                'navName' => __('Site Name', 'faisalwp'),
                'navHome' => __('Home Link', 'faisalwp'),
                'navAbout' => __('About Link', 'faisalwp'),
                'navServices' => __('Services Link', 'faisalwp'),
                'navSchedule' => __('Schedule Link', 'faisalwp'),
                'navContact' => __('Contact Link', 'faisalwp'),
                'navAppointment' => __('Book Appointment label', 'faisalwp'),
            ),
        ),
        'hero' => array(
            'label' => __('Hero', 'faisalwp'),
            'keys' => array(
                'heroName' => __('Hero headline', 'faisalwp'),
                'heroTitle' => __('Hero subtitle', 'faisalwp'),
                'heroSubtitle' => __('Hero body copy', 'faisalwp'),
                'heroCTA' => __('Hero CTA', 'faisalwp'),
            ),
        ),
        'about' => array(
            'label' => __('About section', 'faisalwp'),
            'keys' => array(
                'aboutSubtitle' => __('Section subtitle', 'faisalwp'),
                'aboutTitle' => __('Section title', 'faisalwp'),
                'aboutText1' => __('Paragraph 1', 'faisalwp'),
                'aboutText2' => __('Paragraph 2', 'faisalwp'),
                'aboutCredentialsTitle' => __('Credentials heading', 'faisalwp'),
            ),
        ),
        'services' => array(
            'label' => __('Services', 'faisalwp'),
            'keys' => array_merge(
                array(
                    'servicesSubtitle' => __('Services subtitle', 'faisalwp'),
                    'servicesTitle' => __('Services title', 'faisalwp'),
                    'servicesDescription' => __('Services description', 'faisalwp'),
                    'service1Desc' => __('Service 1 description', 'faisalwp'),
                    'service2Desc' => __('Service 2 description', 'faisalwp'),
                ),
                array_reduce(range(1, 12), function ($carry, $i) {
                    $carry["service{$i}Title"] = sprintf(__('Service %d title', 'faisalwp'), $i);
                    return $carry;
                }, array())
            ),
        ),
        'schedule' => array(
            'label' => __('Schedule', 'faisalwp'),
            'keys' => array(
                'scheduleSubtitle' => __('Schedule subtitle', 'faisalwp'),
                'scheduleTitle' => __('Schedule title', 'faisalwp'),
                'scheduleDescription' => __('Schedule description', 'faisalwp'),
                'locationLabel' => __('Location label', 'faisalwp'),
                'daysLabel' => __('Days label', 'faisalwp'),
                'timeLabel' => __('Time label', 'faisalwp'),
                'scheduleLocation1Name' => __('Location 1 name', 'faisalwp'),
                'scheduleLocation1Address' => __('Location 1 address', 'faisalwp'),
                'scheduleLocation1Days' => __('Location 1 days', 'faisalwp'),
                'scheduleLocation1Time' => __('Location 1 time', 'faisalwp'),
                'scheduleLocation2Name' => __('Location 2 name', 'faisalwp'),
                'scheduleLocation2Address' => __('Location 2 address', 'faisalwp'),
                'scheduleLocation2Days' => __('Location 2 days', 'faisalwp'),
                'scheduleLocation2Time' => __('Location 2 time', 'faisalwp'),
            ),
        ),
        'contact' => array(
            'label' => __('Contact', 'faisalwp'),
            'keys' => array(
                'contactSubtitle' => __('Contact subtitle', 'faisalwp'),
                'contactTitle' => __('Contact title', 'faisalwp'),
                'contactDescription' => __('Contact description', 'faisalwp'),
                'contactPhone' => __('Contact phone label', 'faisalwp'),
                'contactEmail' => __('Contact email label', 'faisalwp'),
            ),
        ),
        'footer' => array(
            'label' => __('Footer', 'faisalwp'),
            'keys' => array(
                'footerText' => __('Footer text', 'faisalwp'),
            ),
        ),
    );
}

function faisalwp_language_keys_list() {
    $defaults = faisalwp_get_default_language_content();
    return isset($defaults['en']) ? array_keys($defaults['en']) : array();
}

/**
 * Enqueue scripts and styles.
 */
function faisalwp_enqueue_assets() {
    wp_enqueue_style('faisalwp-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
    wp_enqueue_style(
        'faisalwp-google-fonts',
        'https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap',
        array(),
        null
    );

    wp_enqueue_script('tailwind', 'https://cdn.tailwindcss.com', array(), null);
    $tailwind_config = <<<'JS'
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        inter: ['"Inter"', 'sans-serif'],
                        plex: ['"IBM Plex Sans Arabic"', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            50: '#f0fdfa',
                            100: '#ccfbf1',
                            200: '#99f6e4',
                            300: '#5eead4',
                            400: '#2dd4bf',
                            500: '#14b8a6',
                            600: '#0d9488',
                            700: '#0f766e',
                            800: '#115e59',
                            900: '#134e4a',
                            950: '#042f2e',
                        },
                    },
                },
            },
        };
    JS;
    wp_add_inline_script('tailwind', $tailwind_config);

    wp_enqueue_script('lucide', 'https://unpkg.com/lucide@0.395.0/dist/umd/lucide.min.js', array(), '0.395.0', true);
    wp_enqueue_script(
        'faisalwp-site',
        get_theme_file_uri('assets/js/site.js'),
        array('lucide'),
        filemtime(__DIR__ . '/assets/js/site.js'),
        true
    );
    wp_localize_script('faisalwp-site', 'faisalwpTranslations', faisalwp_get_language_content());
}
add_action('wp_enqueue_scripts', 'faisalwp_enqueue_assets');

/**
 * Add resource hints for Google Fonts.
 */
function faisalwp_resource_hints($urls, $relation_type) {
    if ('preconnect' === $relation_type) {
        $urls[] = 'https://fonts.googleapis.com';
        $urls[] = array(
            'href' => 'https://fonts.gstatic.com',
            'crossorigin' => 'anonymous',
        );
    }

    return $urls;
}
add_filter('wp_resource_hints', 'faisalwp_resource_hints', 10, 2);

/**
 * Register the custom taxonomies used on the homepage.
 */
function faisalwp_register_taxonomies() {
    $common_args = array(
        'public'            => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,
        'hierarchical'      => false,
    );

    register_taxonomy('specialization', array('post'), array_merge($common_args, array(
        'labels' => array(
            'name'              => __('مجالات خبرتي', 'faisalwp'),
            'singular_name'     => __('مجال خبرة', 'faisalwp'),
            'add_new_item'      => __('إضافة مجال خبرة جديد', 'faisalwp'),
            'edit_item'         => __('تحرير مجال الخبرة', 'faisalwp'),
            'search_items'      => __('البحث في مجالات الخبرة', 'faisalwp'),
        ),
        'rewrite' => array('slug' => 'specialization'),
    )));

    register_taxonomy('schedule', array('post'), array_merge($common_args, array(
        'labels' => array(
            'name'              => __('جدول مواعيدي', 'faisalwp'),
            'singular_name'     => __('موقع / مواعيد', 'faisalwp'),
            'add_new_item'      => __('إضافة موقع جديد', 'faisalwp'),
            'edit_item'         => __('تحرير الموقع', 'faisalwp'),
            'search_items'      => __('البحث في جدول المواعيد', 'faisalwp'),
        ),
        'rewrite' => array('slug' => 'schedule'),
    )));

    register_taxonomy('credential', array('post'), array_merge($common_args, array(
        'labels' => array(
            'name'              => __('البورد والزمالات', 'faisalwp'),
            'singular_name'     => __('شهادة / زمالة', 'faisalwp'),
            'add_new_item'      => __('إضافة شهادة أو زمالة جديدة', 'faisalwp'),
            'edit_item'         => __('تحرير الشهادة', 'faisalwp'),
            'search_items'      => __('البحث في الشهادات', 'faisalwp'),
        ),
        'rewrite' => array('slug' => 'credential'),
    )));
}
add_action('init', 'faisalwp_register_taxonomies');

// --- Term Meta Helpers -----------------------------------------------------

function faisalwp_term_icon_field($taxonomy) {
    ?>
    <tr class="form-field term-icon-wrap">
        <th scope="row"><label><?php esc_html_e('أيقونة (SVG أو PNG)', 'faisalwp'); ?></label></th>
        <td>
            <div class="faisalwp-icon-controls">
                <input type="hidden" name="specialization_icon_id" class="faisalwp-icon-id" value="0">
                <button type="button" class="button button-secondary faisalwp-icon-upload">
                    <?php esc_html_e('رفع صورة', 'faisalwp'); ?>
                </button>
                <button type="button" class="button-link faisalwp-icon-remove"><?php esc_html_e('إزالة', 'faisalwp'); ?></button>
            </div>
            <div class="faisalwp-icon-preview" aria-live="polite"></div>
        </td>
    </tr>
    <?php
}

function faisalwp_term_icon_field_add() {
    ?>
    <div class="form-field term-icon-wrap">
        <label for="specialization_icon_id"><?php esc_html_e('أيقونة (SVG أو PNG)', 'faisalwp'); ?></label>
        <div class="faisalwp-icon-controls">
            <input type="hidden" name="specialization_icon_id" class="faisalwp-icon-id" value="0">
            <button type="button" class="button button-secondary faisalwp-icon-upload"><?php esc_html_e('رفع صورة', 'faisalwp'); ?></button>
            <button type="button" class="button-link faisalwp-icon-remove"><?php esc_html_e('إزالة', 'faisalwp'); ?></button>
        </div>
        <div class="faisalwp-icon-preview" aria-live="polite"></div>
    </div>
    <?php
}

function faisalwp_save_specialization_icon($term_id) {
    if (!isset($_POST['specialization_icon_id'])) {
        return;
    }

    $icon_id = absint($_POST['specialization_icon_id']);
    if ($icon_id) {
        update_term_meta($term_id, 'specialization_icon_id', $icon_id);
    } else {
        delete_term_meta($term_id, 'specialization_icon_id');
    }
}

add_action('specialization_add_form_fields', 'faisalwp_term_icon_field_add');
add_action('specialization_edit_form_fields', 'faisalwp_term_icon_field');
add_action('created_specialization', 'faisalwp_save_specialization_icon', 10, 2);
add_action('edited_specialization', 'faisalwp_save_specialization_icon', 10, 2);

function faisalwp_specialization_translation_fields($term) {
    $name_en = $term ? get_term_meta($term->term_id, 'specialization_name_en', true) : '';
    $desc_en = $term ? get_term_meta($term->term_id, 'specialization_desc_en', true) : '';
    ?>
    <tr class="form-field">
        <th scope="row"><label for="specialization_name_en"><?php esc_html_e('اسم التخصص (إنجليزي)', 'faisalwp'); ?></label></th>
        <td><input name="specialization_name_en" id="specialization_name_en" type="text" value="<?php echo esc_attr($name_en); ?>" class="regular-text"></td>
    </tr>
    <tr class="form-field">
        <th scope="row"><label for="specialization_desc_en"><?php esc_html_e('وصف التخصص (إنجليزي)', 'faisalwp'); ?></label></th>
        <td><textarea name="specialization_desc_en" id="specialization_desc_en" rows="3" class="regular-text"><?php echo esc_textarea($desc_en); ?></textarea></td>
    </tr>
    <?php
}

function faisalwp_save_specialization_translation_meta($term_id) {
    if (isset($_POST['specialization_name_en'])) {
        update_term_meta($term_id, 'specialization_name_en', sanitize_text_field($_POST['specialization_name_en']));
    }
    if (isset($_POST['specialization_desc_en'])) {
        update_term_meta($term_id, 'specialization_desc_en', sanitize_text_field($_POST['specialization_desc_en']));
    }
}

add_action('specialization_add_form_fields', 'faisalwp_specialization_translation_fields');
add_action('specialization_edit_form_fields', 'faisalwp_specialization_translation_fields');
add_action('created_specialization', 'faisalwp_save_specialization_translation_meta');
add_action('edited_specialization', 'faisalwp_save_specialization_translation_meta');

function faisalwp_schedule_fields($term) {
    $address = $term ? get_term_meta($term->term_id, 'schedule_address', true) : '';
    $days = $term ? get_term_meta($term->term_id, 'schedule_days', true) : '';
    $time = $term ? get_term_meta($term->term_id, 'schedule_time', true) : '';
    ?>
    <tr class="form-field">
        <th scope="row"><label for="schedule_address"><?php esc_html_e('العنوان', 'faisalwp'); ?></label></th>
        <td><input name="schedule_address" id="schedule_address" type="text" value="<?php echo esc_attr($address); ?>" class="regular-text"></td>
    </tr>
    <tr class="form-field">
        <th scope="row"><label for="schedule_days"><?php esc_html_e('الأيام', 'faisalwp'); ?></label></th>
        <td><input name="schedule_days" id="schedule_days" type="text" value="<?php echo esc_attr($days); ?>" class="regular-text"></td>
    </tr>
    <tr class="form-field">
        <th scope="row"><label for="schedule_time"><?php esc_html_e('الوقت', 'faisalwp'); ?></label></th>
        <td><input name="schedule_time" id="schedule_time" type="text" value="<?php echo esc_attr($time); ?>" class="regular-text"></td>
    </tr>
    <?php
}

function faisalwp_schedule_fields_add() {
    faisalwp_schedule_fields(null);
}

function faisalwp_save_schedule_meta($term_id) {
    if (isset($_POST['schedule_address'])) {
        update_term_meta($term_id, 'schedule_address', sanitize_text_field($_POST['schedule_address']));
    }
    if (isset($_POST['schedule_days'])) {
        update_term_meta($term_id, 'schedule_days', sanitize_text_field($_POST['schedule_days']));
    }
    if (isset($_POST['schedule_time'])) {
        update_term_meta($term_id, 'schedule_time', sanitize_text_field($_POST['schedule_time']));
    }
}

add_action('schedule_add_form_fields', 'faisalwp_schedule_fields_add');
add_action('schedule_edit_form_fields', 'faisalwp_schedule_fields');
add_action('created_schedule', 'faisalwp_save_schedule_meta');
add_action('edited_schedule', 'faisalwp_save_schedule_meta');

function faisalwp_schedule_translation_fields($term) {
    $name_en = $term ? get_term_meta($term->term_id, 'schedule_name_en', true) : '';
    $address_en = $term ? get_term_meta($term->term_id, 'schedule_address_en', true) : '';
    $days_en = $term ? get_term_meta($term->term_id, 'schedule_days_en', true) : '';
    $time_en = $term ? get_term_meta($term->term_id, 'schedule_time_en', true) : '';
    ?>
    <tr class="form-field">
        <th scope="row"><label for="schedule_name_en"><?php esc_html_e('اسم الجدول (إنجليزي)', 'faisalwp'); ?></label></th>
        <td><input name="schedule_name_en" id="schedule_name_en" type="text" value="<?php echo esc_attr($name_en); ?>" class="regular-text"></td>
    </tr>
    <tr class="form-field">
        <th scope="row"><label for="schedule_address_en"><?php esc_html_e('العنوان (إنجليزي)', 'faisalwp'); ?></label></th>
        <td><input name="schedule_address_en" id="schedule_address_en" type="text" value="<?php echo esc_attr($address_en); ?>" class="regular-text"></td>
    </tr>
    <tr class="form-field">
        <th scope="row"><label for="schedule_days_en"><?php esc_html_e('الأيام (إنجليزي)', 'faisalwp'); ?></label></th>
        <td><input name="schedule_days_en" id="schedule_days_en" type="text" value="<?php echo esc_attr($days_en); ?>" class="regular-text"></td>
    </tr>
    <tr class="form-field">
        <th scope="row"><label for="schedule_time_en"><?php esc_html_e('الوقت (إنجليزي)', 'faisalwp'); ?></label></th>
        <td><input name="schedule_time_en" id="schedule_time_en" type="text" value="<?php echo esc_attr($time_en); ?>" class="regular-text"></td>
    </tr>
    <?php
}

function faisalwp_save_schedule_translation_meta($term_id) {
    if (isset($_POST['schedule_name_en'])) {
        update_term_meta($term_id, 'schedule_name_en', sanitize_text_field($_POST['schedule_name_en']));
    }
    if (isset($_POST['schedule_address_en'])) {
        update_term_meta($term_id, 'schedule_address_en', sanitize_text_field($_POST['schedule_address_en']));
    }
    if (isset($_POST['schedule_days_en'])) {
        update_term_meta($term_id, 'schedule_days_en', sanitize_text_field($_POST['schedule_days_en']));
    }
    if (isset($_POST['schedule_time_en'])) {
        update_term_meta($term_id, 'schedule_time_en', sanitize_text_field($_POST['schedule_time_en']));
    }
}

add_action('schedule_add_form_fields', 'faisalwp_schedule_translation_fields');
add_action('schedule_edit_form_fields', 'faisalwp_schedule_translation_fields');
add_action('created_schedule', 'faisalwp_save_schedule_translation_meta');
add_action('edited_schedule', 'faisalwp_save_schedule_translation_meta');

function faisalwp_credential_translation_fields($term) {
    $name_en = $term ? get_term_meta($term->term_id, 'credential_name_en', true) : '';
    ?>
    <tr class="form-field">
        <th scope="row"><label for="credential_name_en"><?php esc_html_e('اسم الشهادة بزمن الإنجليزية', 'faisalwp'); ?></label></th>
        <td><input name="credential_name_en" id="credential_name_en" type="text" value="<?php echo esc_attr($name_en); ?>" class="regular-text"></td>
    </tr>
    <?php
}

function faisalwp_save_credential_translation_meta($term_id) {
    if (isset($_POST['credential_name_en'])) {
        update_term_meta($term_id, 'credential_name_en', sanitize_text_field($_POST['credential_name_en']));
    }
}

add_action('credential_add_form_fields', 'faisalwp_credential_translation_fields');
add_action('credential_edit_form_fields', 'faisalwp_credential_translation_fields');
add_action('created_credential', 'faisalwp_save_credential_translation_meta');
add_action('edited_credential', 'faisalwp_save_credential_translation_meta');

function faisalwp_admin_assets($hook) {
    $screen = get_current_screen();
    if (!$screen || ! in_array($screen->taxonomy, array('specialization', 'schedule', 'credential'), true)) {
        return;
    }

    if ('specialization' === $screen->taxonomy) {
        wp_enqueue_media();
        wp_enqueue_script(
            'faisalwp-admin-taxonomy',
            get_theme_file_uri('assets/js/admin-taxonomy.js'),
            array('jquery'),
            filemtime(__DIR__ . '/assets/js/admin-taxonomy.js'),
            true
        );
        wp_localize_script('faisalwp-admin-taxonomy', 'faisalwp_admin', array(
            'upload_title' => __('اختيار الأيقونة', 'faisalwp'),
            'select_text' => __('استخدام الأيقونة', 'faisalwp'),
            'icon_alt' => __('أيقونة المجال', 'faisalwp'),
        ));
    }
}
add_action('admin_enqueue_scripts', 'faisalwp_admin_assets');

function faisalwp_sanitize_language_strings($input) {
    $defaults = faisalwp_get_default_language_content();
    if (!is_array($input)) {
        return $defaults;
    }

    $allowed_keys = faisalwp_language_keys_list();
    $output = $defaults;
    foreach (array('en', 'ar') as $lang) {
        if (!isset($input[$lang]) || !is_array($input[$lang])) {
            continue;
        }

        foreach ($allowed_keys as $key) {
            if (isset($input[$lang][$key])) {
                $output[$lang][$key] = sanitize_text_field($input[$lang][$key]);
            }
        }
    }

    return $output;
}

function faisalwp_register_language_settings() {
    register_setting('faisalwp_translations', 'faisalwp_language_strings', 'faisalwp_sanitize_language_strings');
}
add_action('admin_init', 'faisalwp_register_language_settings');

function faisalwp_language_strings_page() {
    add_theme_page(
        __('Language Copy', 'faisalwp'),
        __('Language Copy', 'faisalwp'),
        'edit_theme_options',
        'faisalwp-language-copy',
        'faisalwp_render_language_strings_page'
    );
}
add_action('admin_menu', 'faisalwp_language_strings_page');

function faisalwp_render_language_strings_page() {
    $translations = faisalwp_get_language_content();
    $sections = faisalwp_language_sections();
    ?>
    <div class="wrap">
        <h1><?php esc_html_e('Language Copy', 'faisalwp'); ?></h1>
        <p class="description">
            <?php esc_html_e('Edit each section below. Changes are saved per language.', 'faisalwp'); ?>
        </p>
        <div class="faisalwp-tabs">
            <?php $first = true; ?>
            <?php foreach ($sections as $section_id => $section) : ?>
                <button type="button" class="faisalwp-tab-button<?php echo $first ? ' is-active' : ''; ?>" data-tab="<?php echo esc_attr($section_id); ?>">
                    <?php echo esc_html($section['label']); ?>
                </button>
                <?php $first = false; ?>
            <?php endforeach; ?>
        </div>
        <form method="post" action="options.php">
            <?php settings_fields('faisalwp_translations'); ?>
            <div class="faisalwp-tab-panels">
                <?php $first = true; ?>
                <?php foreach ($sections as $section_id => $section) : ?>
                    <div id="faisalwp-tab-<?php echo esc_attr($section_id); ?>" class="faisalwp-tab-panel<?php echo $first ? ' is-active' : ''; ?>">
                        <?php foreach ($section['keys'] as $key => $label) : ?>
                            <div class="faisalwp-language-field">
                                <p class="faisalwp-language-field-label"><?php echo esc_html($label); ?> <span class="dashicons dashicons-admin-page"></span></p>
                                <div class="faisalwp-language-field-inputs">
                                    <label>
                                        <span class="faisalwp-language-field-language"><?php esc_html_e('English', 'faisalwp'); ?></span>
                                        <input type="text" name="faisalwp_language_strings[en][<?php echo esc_attr($key); ?>]" value="<?php echo esc_attr($translations['en'][$key] ?? ''); ?>">
                                    </label>
                                    <label>
                                        <span class="faisalwp-language-field-language"><?php esc_html_e('Arabic', 'faisalwp'); ?></span>
                                        <input type="text" name="faisalwp_language_strings[ar][<?php echo esc_attr($key); ?>]" value="<?php echo esc_attr($translations['ar'][$key] ?? ''); ?>">
                                    </label>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <?php $first = false; ?>
                <?php endforeach; ?>
            </div>
            <?php submit_button(); ?>
        </form>
    </div>
    <style>
        .faisalwp-tabs {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 16px;
        }
        .faisalwp-tab-button {
            border: 1px solid #dcdcdc;
            background: #fff;
            padding: 6px 14px;
            cursor: pointer;
        }
        .faisalwp-tab-button.is-active {
            border-color: #0b85a1;
            background: #0b85a1;
            color: #fff;
        }
        .faisalwp-tab-panels .faisalwp-tab-panel {
            display: none;
            padding-bottom: 24px;
        }
        .faisalwp-tab-panels .faisalwp-tab-panel.is-active {
            display: block;
        }
        .faisalwp-language-field {
            margin-bottom: 16px;
        }
        .faisalwp-language-field-label {
            font-weight: 600;
            margin-bottom: 6px;
            display: flex;
            align-items: center;
            gap: 4px;
        }
        .faisalwp-language-field-inputs {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 12px;
        }
        .faisalwp-language-field-inputs label {
            font-weight: 500;
            font-size: 13px;
            display: block;
        }
        .faisalwp-language-field-inputs input {
            width: 100%;
            padding: 6px 10px;
            border: 1px solid #dcdcdc;
            border-radius: 4px;
        }
    </style>
    <script>
        (function () {
            const tabs = document.querySelectorAll('.faisalwp-tab-button');
            const panels = document.querySelectorAll('.faisalwp-tab-panel');

            if (!tabs.length || !panels.length) {
                return;
            }

            function activateTab(tabId) {
                tabs.forEach((button) => {
                    const isActive = button.getAttribute('data-tab') === tabId;
                    button.classList.toggle('is-active', isActive);
                });
                panels.forEach((panel) => {
                    panel.classList.toggle('is-active', panel.id === 'faisalwp-tab-' + tabId);
                });
            }

            tabs.forEach((button) => {
                button.addEventListener('click', () => {
                    activateTab(button.getAttribute('data-tab'));
                });
            });

            activateTab(tabs[0].getAttribute('data-tab'));
        })();
    </script>
    <?php
}
