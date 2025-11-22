<?php
get_header();

$service_cards = array(
    array('title' => 'service1Title', 'desc' => 'service1Desc'),
    array('title' => 'service2Title', 'desc' => 'service2Desc'),
    array('title' => 'service3Title'),
    array('title' => 'service4Title'),
    array('title' => 'service5Title'),
    array('title' => 'service6Title'),
    array('title' => 'service7Title'),
    array('title' => 'service8Title'),
    array('title' => 'service9Title'),
    array('title' => 'service10Title'),
    array('title' => 'service11Title'),
    array('title' => 'service12Title'),
);

$schedule_locations = array(
    array(
        'name_key' => 'scheduleLocation1Name',
        'address_key' => 'scheduleLocation1Address',
        'days_key' => 'scheduleLocation1Days',
        'time_key' => 'scheduleLocation1Time',
    ),
    array(
        'name_key' => 'scheduleLocation2Name',
        'address_key' => 'scheduleLocation2Address',
        'days_key' => 'scheduleLocation2Days',
        'time_key' => 'scheduleLocation2Time',
    ),
);

$specializations = get_terms(array(
    'taxonomy'   => 'specialization',
    'hide_empty' => false,
));
$has_specializations = !is_wp_error($specializations) && !empty($specializations);

$schedule_terms = get_terms(array(
    'taxonomy'   => 'schedule',
    'hide_empty' => false,
));
$has_schedule_terms = !is_wp_error($schedule_terms) && !empty($schedule_terms);

$credentials = get_terms(array(
    'taxonomy'   => 'credential',
    'hide_empty' => false,
));
$has_credentials = !is_wp_error($credentials) && !empty($credentials);
?>
<main>
    <section id="home" class="bg-primary-50 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center min-h-[calc(100vh-80px)] md:min-h-[600px] lg:min-h-[700px] py-12 md:py-0">
                <div class="w-full md:w-1/2 lg:w-3/5 text-center md:text-left rtl:md:text-right">
                    <div class="md:pr-12 rtl:md:pr-0 rtl:md:pl-12">
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-primary-900 leading-tight" data-lang-key="heroName"></h1>
                        <p class="mt-4 text-xl md:text-2xl text-primary-700 font-medium" data-lang-key="heroTitle"></p>
                        <p class="mt-6 text-lg text-slate-600 max-w-lg mx-auto md:mx-0" data-lang-key="heroSubtitle"></p>
                        <a href="#contact" class="inline-block mt-10 px-8 py-3.5 rounded-lg font-semibold text-white bg-primary-700 hover:bg-primary-800 transition-all shadow-xl text-lg transform hover:scale-105" data-lang-key="heroCTA"></a>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-2/5 mt-10 md:mt-0 h-80 md:h-[600px] lg:h-[700px] relative">
                    <img src="https://faisalkhadwardi.sa/doctor.png" alt="Dr. Faisal Khudawardi | د. فيصل خداوردي" class="w-full h-full object-cover object-top rounded-3xl -scale-x-100 rtl:scale-x-100">
                </div>
            </div>
        </div>
    </section>

    <section id="schedule" class="py-20 md:py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-base font-semibold text-primary-600 tracking-wide uppercase" data-lang-key="scheduleSubtitle"></h2>
                <h3 class="mt-2 text-3xl md:text-4xl font-bold text-primary-900" data-lang-key="scheduleTitle"></h3>
                <p class="mt-4 max-w-2xl mx-auto text-lg text-slate-600" data-lang-key="scheduleDescription"></p>
            </div>
            <div class="mt-16 grid gap-8 md:grid-cols-1 lg:grid-cols-2 max-w-4xl mx-auto">
                <?php if ($has_schedule_terms) : ?>
                    <?php foreach ($schedule_terms as $term) : ?>
                        <?php
                        $name_ar = $term->name;
                        $name_en = get_term_meta($term->term_id, 'schedule_name_en', true) ?: $name_ar;
                        $address_ar = get_term_meta($term->term_id, 'schedule_address', true);
                        $address_en = get_term_meta($term->term_id, 'schedule_address_en', true) ?: $address_ar;
                        $days_ar = get_term_meta($term->term_id, 'schedule_days', true);
                        $days_en = get_term_meta($term->term_id, 'schedule_days_en', true) ?: $days_ar;
                        $time_ar = get_term_meta($term->term_id, 'schedule_time', true);
                        $time_en = get_term_meta($term->term_id, 'schedule_time_en', true) ?: $time_ar;
                        ?>
                        <div class="bg-slate-50 rounded-2xl shadow-lg overflow-hidden">
                            <div class="p-6 md:p-8">
                                <h4 class="text-2xl font-bold text-primary-800"
                                    data-sched-field="name"
                                    data-sched-ar="<?php echo esc_attr($name_ar); ?>"
                                    data-sched-en="<?php echo esc_attr($name_en); ?>">
                                    <?php echo esc_html($name_ar); ?>
                                </h4>
                                <div class="mt-6 space-y-4">
                                    <?php if ($address_ar || $address_en) : ?>
                                        <div class="flex items-start">
                                            <div class="flex-shrink-0">
                                                <i data-lucide="map-pin" class="w-6 h-6 text-primary-600"></i>
                                            </div>
                                            <div class="ml-3 rtl:mr-3">
                                                <span class="font-semibold text-slate-700" data-lang-key="locationLabel"></span>
                                                <p class="text-slate-600"
                                                   data-sched-field="address"
                                                   data-sched-ar="<?php echo esc_attr($address_ar); ?>"
                                                   data-sched-en="<?php echo esc_attr($address_en); ?>"></p>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($days_ar || $days_en) : ?>
                                        <div class="flex items-start">
                                            <div class="flex-shrink-0">
                                                <i data-lucide="calendar-days" class="w-6 h-6 text-primary-600"></i>
                                            </div>
                                            <div class="ml-3 rtl:mr-3">
                                                <span class="font-semibold text-slate-700" data-lang-key="daysLabel"></span>
                                                <p class="text-slate-600"
                                                   data-sched-field="days"
                                                   data-sched-ar="<?php echo esc_attr($days_ar); ?>"
                                                   data-sched-en="<?php echo esc_attr($days_en); ?>"></p>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($time_ar || $time_en) : ?>
                                        <div class="flex items-start">
                                            <div class="flex-shrink-0">
                                                <i data-lucide="clock" class="w-6 h-6 text-primary-600"></i>
                                            </div>
                                            <div class="ml-3 rtl:mr-3">
                                                <span class="font-semibold text-slate-700" data-lang-key="timeLabel"></span>
                                                <p class="text-slate-600"
                                                   data-sched-field="time"
                                                   data-sched-ar="<?php echo esc_attr($time_ar); ?>"
                                                   data-sched-en="<?php echo esc_attr($time_en); ?>"></p>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <?php foreach ($schedule_locations as $location) : ?>
                        <div class="bg-slate-50 rounded-2xl shadow-lg overflow-hidden">
                            <div class="p-6 md:p-8">
                                <h4 class="text-2xl font-bold text-primary-800" data-lang-key="<?php echo esc_attr($location['name_key']); ?>"></h4>
                                <div class="mt-6 space-y-4">
                                    <div class="flex items-start">
                                        <div class="flex-shrink-0">
                                            <i data-lucide="map-pin" class="w-6 h-6 text-primary-600"></i>
                                        </div>
                                        <div class="ml-3 rtl:mr-3">
                                            <span class="font-semibold text-slate-700" data-lang-key="locationLabel"></span>
                                            <p class="text-slate-600" data-lang-key="<?php echo esc_attr($location['address_key']); ?>"></p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex-shrink-0">
                                            <i data-lucide="calendar-days" class="w-6 h-6 text-primary-600"></i>
                                        </div>
                                        <div class="ml-3 rtl:mr-3">
                                            <span class="font-semibold text-slate-700" data-lang-key="daysLabel"></span>
                                            <p class="text-slate-600" data-lang-key="<?php echo esc_attr($location['days_key']); ?>"></p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex-shrink-0">
                                            <i data-lucide="clock" class="w-6 h-6 text-primary-600"></i>
                                        </div>
                                        <div class="ml-3 rtl:mr-3">
                                            <span class="font-semibold text-slate-700" data-lang-key="timeLabel"></span>
                                            <p class="text-slate-600" data-lang-key="<?php echo esc_attr($location['time_key']); ?>"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section id="about" class="py-20 md:py-32 bg-primary-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-12 lg:gap-16 items-start">
                <div class="lg:col-span-7">
                    <h2 class="text-base font-semibold text-primary-600 tracking-wide uppercase" data-lang-key="aboutSubtitle"></h2>
                    <h3 class="mt-2 text-3xl md:text-4xl font-bold text-primary-900" data-lang-key="aboutTitle"></h3>
                    <p class="mt-6 text-lg text-slate-600 leading-relaxed" data-lang-key="aboutText1"></p>
                    <p class="mt-4 text-lg text-slate-600 leading-relaxed" data-lang-key="aboutText2"></p>
                </div>
                <div class="lg:col-span-5 mt-12 lg:mt-0">
                    <div class="bg-slate-50 rounded-2xl p-6 md:p-8 shadow-sm">
                        <h4 class="text-xl font-bold text-primary-800" data-lang-key="aboutCredentialsTitle"></h4>
                        <ul class="mt-6 space-y-5">
                            <?php if ($has_credentials) : ?>
                                <?php foreach ($credentials as $term) : ?>
                                    <?php
                                    $cred_ar = $term->name;
                                    $cred_en = get_term_meta($term->term_id, 'credential_name_en', true) ?: $cred_ar;
                                    ?>
                                    <li class="flex items-start">
                                        <div class="flex-shrink-0">
                                            <i data-lucide="check-circle-2" class="w-6 h-6 text-green-600"></i>
                                        </div>
                                        <p class="ml-3 rtl:mr-3 text-md font-medium text-slate-700"
                                           data-cred-field="name"
                                           data-cred-ar="<?php echo esc_attr($cred_ar); ?>"
                                           data-cred-en="<?php echo esc_attr($cred_en); ?>">
                                            <?php echo esc_html($cred_ar); ?>
                                        </p>
                                    </li>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <li class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <i data-lucide="check-circle-2" class="w-6 h-6 text-green-600"></i>
                                    </div>
                                    <p class="ml-3 rtl:mr-3 text-md font-medium text-slate-700" data-lang-key="aboutCredential1"></p>
                                </li>
                                <li class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <i data-lucide="check-circle-2" class="w-6 h-6 text-green-600"></i>
                                    </div>
                                    <p class="ml-3 rtl:mr-3 text-md font-medium text-slate-700" data-lang-key="aboutCredential2"></p>
                                </li>
                                <li class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <i data-lucide="check-circle-2" class="w-6 h-6 text-green-600"></i>
                                    </div>
                                    <p class="ml-3 rtl:mr-3 text-md font-medium text-slate-700" data-lang-key="aboutCredential3"></p>
                                </li>
                                <li class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <i data-lucide="check-circle-2" class="w-6 h-6 text-green-600"></i>
                                    </div>
                                    <p class="ml-3 rtl:mr-3 text-md font-medium text-slate-700" data-lang-key="aboutCredential4"></p>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="py-20 md:py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-base font-semibold text-primary-600 tracking-wide uppercase" data-lang-key="servicesSubtitle"></h2>
                <h3 class="mt-2 text-3xl md:text-4xl font-bold text-primary-900" data-lang-key="servicesTitle"></h3>
                <p class="mt-4 max-w-2xl mx-auto text-lg text-slate-600" data-lang-key="servicesDescription"></p>
            </div>
            <div class="mt-16 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                <?php if ($has_specializations) : ?>
                    <?php foreach ($specializations as $term) : ?>
                        <?php
                        $icon_id = get_term_meta($term->term_id, 'specialization_icon_id', true);
                        $icon_url = $icon_id ? wp_get_attachment_image_url($icon_id, 'medium') : '';
                        $name_ar = $term->name;
                        $name_en = get_term_meta($term->term_id, 'specialization_name_en', true) ?: $name_ar;
                        $desc_ar = $term->description;
                        $desc_en = get_term_meta($term->term_id, 'specialization_desc_en', true) ?: $desc_ar;
                        ?>
                        <div class="bg-primary-50 p-8 rounded-2xl shadow-lg transition-transform transform hover:-translate-y-2">
                            <div class="w-12 h-12 rounded-full bg-primary-100 flex items-center justify-center">
                                <?php if ($icon_url) : ?>
                                    <img src="<?php echo esc_url($icon_url); ?>" alt="<?php echo esc_attr(sprintf(__('أيقونة %s', 'faisalwp'), $name_ar)); ?>" class="max-w-full max-h-full">
                                <?php else : ?>
                                    <i data-lucide="check" class="w-7 h-7 text-primary-700"></i>
                                <?php endif; ?>
                            </div>
                            <h4 class="mt-6 text-xl font-bold text-primary-900"
                                data-spec-field="name"
                                data-spec-ar="<?php echo esc_attr($name_ar); ?>"
                                data-spec-en="<?php echo esc_attr($name_en); ?>">
                                <?php echo esc_html($name_ar); ?>
                            </h4>
                            <?php if ($desc_ar || $desc_en) : ?>
                                <p class="mt-2 text-slate-600"
                                   data-spec-field="description"
                                   data-spec-ar="<?php echo esc_attr($desc_ar); ?>"
                                   data-spec-en="<?php echo esc_attr($desc_en); ?>">
                                    <?php echo esc_html($desc_ar); ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <?php foreach ($service_cards as $card) : ?>
                        <div class="bg-primary-50 p-8 rounded-2xl shadow-lg transition-transform transform hover:-translate-y-2">
                            <div class="w-12 h-12 rounded-full bg-primary-100 flex items-center justify-center">
                                <i data-lucide="check" class="w-7 h-7 text-primary-700"></i>
                            </div>
                            <h4 class="mt-6 text-xl font-bold text-primary-900" data-lang-key="<?php echo esc_attr($card['title']); ?>"></h4>
                            <?php if (!empty($card['desc'])) : ?>
                                <p class="mt-2 text-slate-600" data-lang-key="<?php echo esc_attr($card['desc']); ?>"></p>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section id="contact" class="py-20 md:py-32 bg-primary-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-base font-semibold text-primary-600 tracking-wide uppercase" data-lang-key="contactSubtitle"></h2>
                <h3 class="mt-2 text-3xl md:text-4xl font-bold text-primary-900" data-lang-key="contactTitle"></h3>
                <p class="mt-4 max-w-2xl mx-auto text-lg text-slate-600" data-lang-key="contactDescription"></p>
            </div>
            <div class="mt-16 max-w-lg mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 md:max-w-2xl lg:max-w-3xl">
                <a href="tel:+966565141262" class="group">
                    <div class="bg-white p-8 rounded-2xl shadow-lg border border-slate-200 transition-all transform group-hover:scale-105 group-hover:shadow-xl">
                        <div class="w-12 h-12 rounded-full bg-primary-100 flex items-center justify-center">
                            <i data-lucide="phone" class="w-6 h-6 text-primary-700"></i>
                        </div>
                        <h4 class="mt-6 text-xl font-bold text-primary-900" data-lang-key="contactPhone"></h4>
                        <p class="mt-2 text-lg text-slate-600 group-hover:text-primary-700 transition-colors" dir="ltr">
                            +966 56 514 1262
                        </p>
                    </div>
                </a>
                <a href="mailto:Khudawardi@gmail.com" class="group">
                    <div class="bg-white p-8 rounded-2xl shadow-lg border border-slate-200 transition-all transform group-hover:scale-105 group-hover:shadow-xl">
                        <div class="w-12 h-12 rounded-full bg-primary-100 flex items-center justify-center">
                            <i data-lucide="mail" class="w-6 h-6 text-primary-700"></i>
                        </div>
                        <h4 class="mt-6 text-xl font-bold text-primary-900" data-lang-key="contactEmail"></h4>
                        <p class="mt-2 text-lg text-slate-600 group-hover:text-primary-700 transition-colors">
                            Khudawardi@gmail.com
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
