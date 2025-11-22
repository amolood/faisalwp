function setToggleText(buttons, text) {
    buttons.forEach((btn) => {
        const textEl = btn.querySelector('[data-lang-toggle-text]');
        if (textEl) {
            textEl.textContent = text;
        }
    });
}

(function () {
    const content = window.faisalwpTranslations || { en: {}, ar: {} };

    let currentLang = 'ar';
    let htmlEl;
    let bodyEl;
    let langToggleButtons = [];
    let mobileMenuBtn;
    let mobileMenu;

    function updateScheduleTranslations() {
        document.querySelectorAll('[data-sched-field]').forEach((el) => {
            const dataset = el.dataset;
            const langValue = dataset[`sched${currentLang === 'en' ? 'En' : 'Ar'}`];
            if (langValue) {
                el.textContent = langValue;
            }
        });
    }

    function updateCredentialTranslations() {
        const isEnglish = currentLang === 'en';
        document.querySelectorAll('[data-cred-field]').forEach((el) => {
            const langAttr = isEnglish ? 'credEn' : 'credAr';
            const langValue = el.dataset[langAttr];
            if (langValue) {
                el.textContent = langValue;
            }
        });
    }

    function updateSpecializationTranslations() {
        const lang = currentLang === 'en' ? 'En' : 'Ar';
        document.querySelectorAll('[data-spec-field]').forEach((el) => {
            const langValue = el.dataset[`spec${lang}`];
            if (langValue) {
                el.textContent = langValue;
            }
        });
    }

    function updateTextContent() {
        const langData = content[currentLang];
        if (!langData) {
            return;
        }

        document.querySelectorAll('[data-lang-key]').forEach((el) => {
            const key = el.getAttribute('data-lang-key');
            if (langData[key]) {
                el.textContent = langData[key];
            }
        });

        if (langData.langToggle) {
            setToggleText(langToggleButtons, langData.langToggle);
        }

        updateScheduleTranslations();
        updateCredentialTranslations();
        updateSpecializationTranslations();
    }

    function applyDirection() {
        if (!htmlEl || !bodyEl) {
            return;
        }

        htmlEl.lang = currentLang;
        htmlEl.dir = currentLang === 'ar' ? 'rtl' : 'ltr';

        bodyEl.classList.toggle('font-inter', currentLang === 'en');
        bodyEl.classList.toggle('font-plex', currentLang === 'ar');
    }

    function toggleLanguage() {
        currentLang = currentLang === 'en' ? 'ar' : 'en';
        applyDirection();
        updateTextContent();
    }

    function toggleMobileMenu() {
        if (!mobileMenu || !mobileMenuBtn) {
            return;
        }

        mobileMenu.classList.toggle('hidden');
        const icon = mobileMenuBtn.querySelector('i');

        if (icon) {
            icon.setAttribute('data-lucide', mobileMenu.classList.contains('hidden') ? 'menu' : 'x');
        }

        if (window.lucide && typeof window.lucide.createIcons === 'function') {
            window.lucide.createIcons();
        }
    }

    function init() {
        htmlEl = document.documentElement;
        bodyEl = document.body;
        langToggleButtons = Array.from(document.querySelectorAll('.faisalwp-lang-toggle'));
        mobileMenuBtn = document.getElementById('mobile-menu-btn');
        mobileMenu = document.getElementById('mobile-menu');

        applyDirection();
        updateTextContent();

        if (window.lucide && typeof window.lucide.createIcons === 'function') {
            window.lucide.createIcons();
        }

        langToggleButtons.forEach((btn) => {
            btn.addEventListener('click', toggleLanguage);
        });

        if (mobileMenuBtn) {
            mobileMenuBtn.addEventListener('click', toggleMobileMenu);
        }

        if (mobileMenu) {
            mobileMenu.querySelectorAll('a').forEach((link) => {
                link.addEventListener('click', () => {
                    if (!mobileMenu.classList.contains('hidden')) {
                        toggleMobileMenu();
                    }
                });
            });
        }
    }

    document.addEventListener('DOMContentLoaded', init);
})();
