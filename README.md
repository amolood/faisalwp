# FaisalWP Theme

This WordPress theme mirrors the original static landing page for Dr. Faisal Khudawardi with Tailwind CSS, Lucide icons, RTL/LTR support, and synchronized bilingual content management.

## Getting started

1. Copy this theme folder into `wp-content/themes/` on a WordPress installation.
2. Activate it via the admin under **Appearance → Themes**.
3. Use **Appearance → Language Copy** to edit all hero/about/services/contact copy per language.
4. Populate the **Specialization**, **Schedule**, and **Credential** taxonomies (with icons and English translations) so the home sections render automatically.

## Notes

- `functions.php` enqueues Tailwind & fonts, registers the taxonomies, and exposes localized strings via `faisalwpTranslations`.
- `assets/js/site.js` toggles the text direction and language-specific datasets (hero copy, schedule cards, credentials, services) based on the saved option values.
- Schedule and specialization terms now include meta for English translations, and the JS reads their `data-*` attributes to swap text when the language button (now part of the nav) is clicked.
