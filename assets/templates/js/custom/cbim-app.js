/**
 * CBIM App — Main JavaScript
 * Yayasan Citra Bina Insan Mandiri
 * 
 * Features:
 *  - FE-02: IntersectionObserver fade-in reveal
 *  - FE-03: Sticky navbar active state detection
 *  - FE-08: i18n language switcher (mini engine)
 */

(function () {
    'use strict';

    /* =========================================================
       1. IntersectionObserver — Fade-In Reveal (FE-02)
       ========================================================= */
    function initRevealAnimations() {
        var revealElements = document.querySelectorAll('.cbim-reveal');
        if (!revealElements.length) return;

        if (!('IntersectionObserver' in window)) {
            // Fallback: show all immediately
            revealElements.forEach(function (el) {
                el.classList.add('cbim-visible');
            });
            return;
        }

        var revealObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('cbim-visible');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.15,
            rootMargin: '0px 0px -50px 0px'
        });

        revealElements.forEach(function (el) {
            revealObserver.observe(el);
        });
    }

    /* =========================================================
       2. Sticky Navbar Active State (FE-03)
       ========================================================= */
    function initActiveNavState() {
        var navLinks = document.querySelectorAll('#kt_landing_menu .menu-link[href*="#"]');
        if (!navLinks.length) return;

        // Collect sections referenced by nav links
        var sections = [];
        navLinks.forEach(function (link) {
            var href = link.getAttribute('href');
            if (!href) return;
            var hashIndex = href.indexOf('#');
            if (hashIndex === -1) return;
            var sectionId = href.substring(hashIndex + 1);
            var section = document.getElementById(sectionId);
            if (section) {
                sections.push({ el: section, link: link, id: sectionId });
            }
        });

        if (!sections.length || !('IntersectionObserver' in window)) return;

        var currentActive = null;

        var navObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    // Find matching section
                    var matchedSection = sections.find(function (s) {
                        return s.el === entry.target;
                    });
                    if (matchedSection) {
                        // Remove active from all
                        navLinks.forEach(function (l) {
                            l.classList.remove('active');
                        });
                        // Find ALL links pointing to this section (could be multiple)
                        sections.forEach(function (s) {
                            if (s.id === matchedSection.id) {
                                s.link.classList.add('active');
                            }
                        });
                        currentActive = matchedSection.id;
                    }
                }
            });
        }, {
            threshold: 0.2,
            rootMargin: '-80px 0px -60% 0px'
        });

        sections.forEach(function (s) {
            navObserver.observe(s.el);
        });

        // Also highlight "Home" if at top
        window.addEventListener('scroll', function () {
            if (window.scrollY < 100) {
                navLinks.forEach(function (l) {
                    l.classList.remove('active');
                });
                var homeLink = document.querySelector('#kt_landing_menu .menu-link[href*="#kt_body"]');
                if (homeLink) homeLink.classList.add('active');
            }
        });
    }

    /* =========================================================
       3. i18n Language Switcher (FE-08)
       ========================================================= */
    var i18nData = {};
    var currentLang = 'id';

    // Translation data — embedded for minimal HTTP requests
    var translations = {
        id: {
            'nav.home': 'Home',
            'nav.units': 'Unit-Unit',
            'nav.legality': 'Legalitas',
            'nav.structure': 'Struktur Organisasi',
            'nav.vision': 'Visi Misi',
            'nav.operational': 'Operasional',
            'nav.activities': 'Kegiatan',
            'nav.news': 'Berita',
            'nav.gallery': 'Galeri',
            'nav.catalog': 'Katalog',
            'nav.login': 'Login',
            'nav.logout': 'Logout',
            'hero.welcome': 'SELAMAT DATANG DI',
            'hero.foundation': 'YAYASAN CITRA BINA INSAN MANDIRI',
            'section.units': 'UNIT-UNIT',
            'section.legality': 'LEGALITAS',
            'section.structure': 'Struktur Organisasi Yayasan CBIM',
            'section.vision': 'VISI MISI',
            'section.vision.sub': 'Visi Misi Yayasan Citra Bina Insan Mandiri',
            'section.visi': 'VISI',
            'section.misi': 'MISI',
            'section.values': 'NILAI-NILAI YAYASAN CITRA BINA INSAN MANDIRI',
            'section.operational': 'Operasional Yayasan CBIM',
            'footer.connect': 'Selalu terhubung bersama kami!',
            'footer.contact': 'Kontak',
            'footer.office': 'Kantor Kami',
            'footer.units': 'Unit-Unit',
            'footer.social': 'Sosial Media',
            'footer.explore': 'Telusuri',
            'cookie.text': 'Website ini menggunakan cookie untuk meningkatkan pengalaman Anda. Dengan melanjutkan, Anda menyetujui penggunaan cookie sesuai',
            'cookie.policy': 'Kebijakan Privasi',
            'cookie.accept': 'Terima',
            'cookie.reject': 'Tolak',
            'contact.name': 'Nama Lengkap',
            'contact.email': 'Alamat Email',
            'contact.subject': 'Subjek',
            'contact.message': 'Pesan',
            'contact.send': 'Kirim Pesan',
            'contact.title': 'Hubungi Kami'
        },
        en: {
            'nav.home': 'Home',
            'nav.units': 'Units',
            'nav.legality': 'Legality',
            'nav.structure': 'Organization',
            'nav.vision': 'Vision & Mission',
            'nav.operational': 'Operations',
            'nav.activities': 'Activities',
            'nav.news': 'News',
            'nav.gallery': 'Gallery',
            'nav.catalog': 'Catalog',
            'nav.login': 'Login',
            'nav.logout': 'Logout',
            'hero.welcome': 'WELCOME TO',
            'hero.foundation': 'CITRA BINA INSAN MANDIRI FOUNDATION',
            'section.units': 'UNITS',
            'section.legality': 'LEGALITY',
            'section.structure': 'CBIM Foundation Organizational Structure',
            'section.vision': 'VISION & MISSION',
            'section.vision.sub': 'Vision & Mission of Citra Bina Insan Mandiri Foundation',
            'section.visi': 'VISION',
            'section.misi': 'MISSION',
            'section.values': 'VALUES OF CITRA BINA INSAN MANDIRI FOUNDATION',
            'section.operational': 'CBIM Foundation Operations',
            'footer.connect': 'Stay connected with us!',
            'footer.contact': 'Contact',
            'footer.office': 'Our Office',
            'footer.units': 'Units',
            'footer.social': 'Social Media',
            'footer.explore': 'Explore',
            'cookie.text': 'This website uses cookies to improve your experience. By continuing, you agree to the use of cookies in accordance with our',
            'cookie.policy': 'Privacy Policy',
            'cookie.accept': 'Accept',
            'cookie.reject': 'Reject',
            'contact.name': 'Full Name',
            'contact.email': 'Email Address',
            'contact.subject': 'Subject',
            'contact.message': 'Message',
            'contact.send': 'Send Message',
            'contact.title': 'Contact Us'
        }
    };

    function initI18n() {
        // Load saved preference
        var savedLang = localStorage.getItem('cbim_lang');
        if (savedLang && translations[savedLang]) {
            currentLang = savedLang;
        }

        // Apply translations
        applyTranslations(currentLang);

        // Update switcher button states
        updateLangButtons(currentLang);

        // Bind switcher buttons
        document.querySelectorAll('.cbim-lang-btn').forEach(function (btn) {
            btn.addEventListener('click', function () {
                var lang = this.getAttribute('data-lang');
                if (lang && translations[lang]) {
                    currentLang = lang;
                    localStorage.setItem('cbim_lang', lang);
                    applyTranslations(lang);
                    updateLangButtons(lang);
                }
            });
        });
    }

    function applyTranslations(lang) {
        var dict = translations[lang];
        if (!dict) return;

        document.querySelectorAll('[data-i18n]').forEach(function (el) {
            var key = el.getAttribute('data-i18n');
            if (dict[key]) {
                // For input placeholders
                if (el.hasAttribute('placeholder')) {
                    el.setAttribute('placeholder', dict[key]);
                } else {
                    el.textContent = dict[key];
                }
            }
        });

        // Update html lang attribute
        document.documentElement.lang = lang === 'id' ? 'id' : 'en';
    }

    function updateLangButtons(lang) {
        document.querySelectorAll('.cbim-lang-btn').forEach(function (btn) {
            if (btn.getAttribute('data-lang') === lang) {
                btn.classList.add('active');
            } else {
                btn.classList.remove('active');
            }
        });
    }

    /* =========================================================
       4. Auto-add reveal classes to sections
       ========================================================= */
    function autoAddRevealClasses() {
        // Add cbim-reveal to major content sections
        var selectors = [
            '.text-center.mb-17',
            '.text-center.mb-12',
            '.text-center.mb-10',
            '.text-center.mt-15.mb-18',
            '.mb-13.text-center',
            '.row.g-10',
            '.row.g-lg-10',
            '.tns.tns-default',
            '.rounded.landing-dark-border',
            '.card-rounded.shadow'
        ];

        selectors.forEach(function (sel) {
            document.querySelectorAll(sel).forEach(function (el) {
                if (!el.classList.contains('cbim-reveal')) {
                    el.classList.add('cbim-reveal');
                }
            });
        });
    }

    /* =========================================================
       5. Initialize Everything on DOMContentLoaded
       ========================================================= */
    document.addEventListener('DOMContentLoaded', function () {
        autoAddRevealClasses();
        initRevealAnimations();
        initActiveNavState();
        initI18n();
    });

})();
