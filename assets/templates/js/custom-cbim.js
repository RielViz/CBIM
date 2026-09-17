/**
 * Yayasan Citra Bina Insan Mandiri (CBIM)
 * Main Interactive JS: i18n, Sticky Navbar, Live Search, FAQ Chatbot, Cookie Consent & GA4 Tracking
 */

(function() {
    'use strict';

    // =========================================================================
    // 1. BE-04: Google Analytics 4 Custom Event Tracker
    // =========================================================================
    window.cbimTrackEvent = function(eventName, eventParams) {
        if (typeof gtag === 'function') {
            gtag('event', eventName, eventParams || {});
        } else {
            console.log('[GA4 Track]:', eventName, eventParams);
        }
    };

    // Attach tracking to Unit and Social links
    function initEventTracking() {
        document.querySelectorAll('a[href*="ucb.ac.id"], a[href*="smakcitrabangsa"], a[href*="smpkcitrabangsa"], a[href*="/sd"], a[href*="/tk"]').forEach(function(el) {
            el.addEventListener('click', function() {
                var unitName = this.textContent.trim() || this.getAttribute('title') || 'Unit Pendidikan';
                window.cbimTrackEvent('click_unit_pendidikan', {
                    unit_name: unitName,
                    destination_url: this.href
                });
            });
        });

        document.querySelectorAll('a[href*="facebook.com"], a[href*="youtube.com"], a[href*="instagram.com"]').forEach(function(el) {
            el.addEventListener('click', function() {
                var platform = this.href.includes('facebook') ? 'Facebook' : (this.href.includes('youtube') ? 'YouTube' : 'Instagram');
                window.cbimTrackEvent('click_social_media', {
                    platform: platform,
                    link: this.href
                });
            });
        });
    }

    // =========================================================================
    // 2. FE-02 & FE-03: Sticky Navbar & Active Navigation State via IntersectionObserver
    // =========================================================================
    function initNavbarScrollSpy() {
        var header = document.querySelector('#kt_landing_header') || document.querySelector('.landing-header');
        if (header) {
            header.classList.add('cbim-sticky-header');
        }

        var navLinks = document.querySelectorAll('.cbim-nav-link');
        var sections = document.querySelectorAll('section[id], div[id].landing-curve + div, #home, #unit-unit, #struktur-organisasi, #visi-misi, #kontak, #operasional');

        if ('IntersectionObserver' in window && sections.length > 0) {
            var observerOptions = {
                root: null,
                rootMargin: '-20% 0px -70% 0px',
                threshold: 0
            };

            var sectionObserver = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        var currentId = entry.target.getAttribute('id');
                        if (currentId) {
                            navLinks.forEach(function(link) {
                                var href = link.getAttribute('href') || '';
                                if (href.includes('#' + currentId)) {
                                    navLinks.forEach(function(l) { l.classList.remove('cbim-nav-active', 'active'); });
                                    link.classList.add('cbim-nav-active', 'active');
                                }
                            });
                        }
                    }
                });
            }, observerOptions);

            sections.forEach(function(section) {
                if (section.id) {
                    sectionObserver.observe(section);
                }
            });
        }
    }

    // =========================================================================
    // 3. FE-02: Micro Fade-in on Scroll
    // =========================================================================
    function initFadeAnimations() {
        var fadeItems = document.querySelectorAll('.cbim-fade-item');
        if ('IntersectionObserver' in window && fadeItems.length > 0) {
            var fadeObserver = new IntersectionObserver(function(entries, observer) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('cbim-in-view');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1 });

            fadeItems.forEach(function(item) {
                fadeObserver.observe(item);
            });
        } else {
            fadeItems.forEach(function(item) { item.classList.add('cbim-in-view'); });
        }
    }

    // =========================================================================
    // 4. FE-08: i18n Language Switcher (Indonesian / English)
    // =========================================================================
    var translations = {
        id: {
            nav_home: "Beranda",
            nav_units: "Unit Pendidikan",
            nav_structure: "Struktur Organisasi",
            nav_visimisi: "Visi & Misi",
            nav_news: "Berita",
            nav_activities: "Kegiatan",
            nav_gallery: "Galeri",
            nav_catalog: "Katalog",
            nav_legality: "Legalitas",
            nav_operations: "Operasional",
            nav_ppdb: "PPDB Online",
            nav_contact: "Kontak",
            hero_welcome: "SELAMAT DATANG DI",
            hero_subtitle: "Membina Generasi Unggul, Berkarakter, dan Mandiri di Nusa Tenggara Timur",
            hero_btn_explore: "Jelajahi Unit",
            hero_btn_register: "Daftar Sekarang",
            unit_title: "UNIT-UNIT PENDIDIKAN",
            unit_desc: "Layanan pendidikan terpadu dari jenjang usia dini hingga perguruan tinggi",
            btn_explore: "Telusuri",
            newsletter_title: "Berlangganan Warta & Informasi",
            newsletter_desc: "Dapatkan info kegiatan, prestasi, dan pendaftaran terbaru langsung di email Anda.",
            newsletter_placeholder: "Ketik alamat email Anda...",
            newsletter_btn: "Langganan",
            footer_contact_title: "Kontak Kami",
            footer_office_title: "Kantor Yayasan",
            footer_privacy: "Kebijakan Privasi",
            footer_all_rights: "Semua Hak Dilindungi Undang-Undang"
        },
        en: {
            nav_home: "Home",
            nav_units: "Educational Units",
            nav_structure: "Organization",
            nav_visimisi: "Vision & Mission",
            nav_news: "News",
            nav_activities: "Activities",
            nav_gallery: "Gallery",
            nav_catalog: "Book Catalog",
            nav_legality: "Legality",
            nav_operations: "Operations",
            nav_ppdb: "Online Admission",
            nav_contact: "Contact",
            hero_welcome: "WELCOME TO",
            hero_subtitle: "Nurturing Excellent, Character-Driven, and Independent Generations in NTT",
            hero_btn_explore: "Explore Units",
            hero_btn_register: "Register Now",
            unit_title: "EDUCATIONAL UNITS",
            unit_desc: "Integrated education services from early childhood to higher university education",
            btn_explore: "Explore",
            newsletter_title: "Subscribe to Newsletter",
            newsletter_desc: "Get the latest updates, achievements, and admissions directly in your inbox.",
            newsletter_placeholder: "Enter your email address...",
            newsletter_btn: "Subscribe",
            footer_contact_title: "Contact Us",
            footer_office_title: "Foundation Office",
            footer_privacy: "Privacy Policy",
            footer_all_rights: "All Rights Reserved"
        }
    };

    function applyLanguage(lang) {
        lang = lang === 'en' ? 'en' : 'id';
        localStorage.setItem('cbim_lang', lang);
        document.cookie = "cbim_lang=" + lang + ";path=/;max-age=31536000";

        document.querySelectorAll('[data-i18n]').forEach(function(el) {
            var key = el.getAttribute('data-i18n');
            if (translations[lang] && translations[lang][key]) {
                el.textContent = translations[lang][key];
            }
        });

        document.querySelectorAll('[data-i18n-placeholder]').forEach(function(el) {
            var key = el.getAttribute('data-i18n-placeholder');
            if (translations[lang] && translations[lang][key]) {
                el.setAttribute('placeholder', translations[lang][key]);
            }
        });

        document.querySelectorAll('.cbim-lang-btn').forEach(function(btn) {
            if (btn.getAttribute('data-lang') === lang) {
                btn.classList.add('active');
            } else {
                btn.classList.remove('active');
            }
        });

        document.documentElement.lang = lang;
    }

    function initLanguageSwitcher() {
        var currentLang = localStorage.getItem('cbim_lang') || 'id';
        applyLanguage(currentLang);

        document.querySelectorAll('.cbim-lang-btn').forEach(function(btn) {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                var selected = this.getAttribute('data-lang');
                applyLanguage(selected);
                window.cbimTrackEvent('switch_language', { lang: selected });
            });
        });
    }

    // =========================================================================
    // 5. INT-01: Sitewide Search with 300ms Debounce
    // =========================================================================
    function initSitewideSearch() {
        var searchInput = document.getElementById('cbimSitewideSearch');
        var searchDropdown = document.getElementById('cbimSearchDropdown');
        if (!searchInput || !searchDropdown) return;

        var debounceTimer = null;

        searchInput.addEventListener('input', function() {
            var query = this.value.trim();
            clearTimeout(debounceTimer);

            if (query.length < 2) {
                searchDropdown.style.display = 'none';
                searchDropdown.innerHTML = '';
                return;
            }

            debounceTimer = setTimeout(function() {
                var apiUrl = (window.base_url || '/') + 'api/search?q=' + encodeURIComponent(query);
                fetch(apiUrl)
                    .then(function(res) { return res.json(); })
                    .then(function(data) {
                        searchDropdown.innerHTML = '';
                        if (data && data.results && data.results.length > 0) {
                            data.results.slice(0, 6).forEach(function(item) {
                                var a = document.createElement('a');
                                a.className = 'cbim-search-item';
                                a.href = item.url;
                                a.innerHTML = '<div class="fw-bold fs-7 text-truncate">' + escapeHtml(item.title) + '</div>' +
                                    '<div class="fs-8 text-muted text-uppercase">' + escapeHtml(item.category) + '</div>';
                                searchDropdown.appendChild(a);
                            });

                            var moreLink = document.createElement('a');
                            moreLink.className = 'cbim-search-item text-center fw-bold text-cbim-primary bg-light';
                            moreLink.href = (window.base_url || '/') + 'search?q=' + encodeURIComponent(query);
                            moreLink.textContent = 'Lihat Semua Hasil (' + data.total + ') →';
                            searchDropdown.appendChild(moreLink);

                            searchDropdown.style.display = 'block';
                        } else {
                            searchDropdown.innerHTML = '<div class="p-3 text-center text-muted fs-7">Tidak ada hasil untuk "' + escapeHtml(query) + '"</div>';
                            searchDropdown.style.display = 'block';
                        }
                    })
                    .catch(function(err) {
                        console.error('Search error:', err);
                    });
            }, 300);
        });

        // Close on click outside
        document.addEventListener('click', function(e) {
            if (!searchInput.contains(e.target) && !searchDropdown.contains(e.target)) {
                searchDropdown.style.display = 'none';
            }
        });

        // Submit form directly on Enter
        searchInput.addEventListener('keydown', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                var q = this.value.trim();
                if (q) {
                    window.location.href = (window.base_url || '/') + 'search?q=' + encodeURIComponent(q);
                }
            }
        });
    }

    // =========================================================================
    // 6. INT-04: Footer Newsletter AJAX Handler
    // =========================================================================
    function initNewsletterForm() {
        var form = document.getElementById('cbimNewsletterForm');
        if (!form) return;

        form.addEventListener('submit', function(e) {
            e.preventDefault();
            var emailInput = document.getElementById('cbimNewsletterEmail');
            var prefInput = document.getElementById('cbimNewsletterPref') || { value: 'semua' };
            var alertBox = document.getElementById('cbimNewsletterMsg');
            var btn = form.querySelector('button[type="submit"]');

            if (!emailInput || !emailInput.value.trim()) return;

            btn.disabled = true;
            btn.innerHTML = '<span class="spinner-border spinner-border-sm"></span>';

            var formData = new FormData();
            formData.append('email', emailInput.value.trim());
            formData.append('preferensi', prefInput.value);

            fetch((window.base_url || '/') + 'newsletter/subscribe', {
                method: 'POST',
                body: formData
            })
            .then(function(res) { return res.json(); })
            .then(function(data) {
                btn.disabled = false;
                btn.innerHTML = 'Langganan';
                if (alertBox) {
                    alertBox.style.display = 'block';
                    if (data.status === 'success') {
                        alertBox.className = 'alert alert-success mt-2 py-2 px-3 fs-7';
                        alertBox.textContent = data.message;
                        emailInput.value = '';
                        window.cbimTrackEvent('newsletter_subscribe', { success: true });
                    } else {
                        alertBox.className = 'alert alert-warning mt-2 py-2 px-3 fs-7';
                        alertBox.textContent = data.message;
                    }
                }
            })
            .catch(function() {
                btn.disabled = false;
                btn.innerHTML = 'Langganan';
                if (alertBox) {
                    alertBox.style.display = 'block';
                    alertBox.className = 'alert alert-danger mt-2 py-2 px-3 fs-7';
                    alertBox.textContent = 'Terjadi kesalahan jaringan. Silakan coba lagi.';
                }
            });
        });
    }

    // =========================================================================
    // 7. BE-10: Cookie Consent Banner
    // =========================================================================
    // PATCH 2026-09-07
    // Versi lama hanya menyembunyikan banner dan menulis localStorage -- GA4
    // tetap berjalan penuh sejak halaman dimuat. Versi ini benar-benar
    // mengendalikan Google Consent Mode v2 yang di-default 'denied' di header,
    // dan menambahkan penanganan tombol "Tolak".
    function updateConsentMode(granted) {
        if (typeof gtag !== 'function') return;
        var state = granted ? 'granted' : 'denied';
        gtag('consent', 'update', {
            'ad_storage': state,
            'ad_user_data': state,
            'ad_personalization': state,
            'analytics_storage': state
        });
    }

    function storeConsent(value) {
        try {
            localStorage.setItem('cbim_cookie_consent', value);
        } catch (e) { /* localStorage diblokir -- lanjut lewat cookie saja */ }
        // Cookie dipakai agar persetujuan ikut berlaku di subsite /sd dan /tk
        document.cookie = 'cbim_cookie_consent=' + value + ';path=/;max-age=31536000;SameSite=Lax';
    }

    function initCookieConsent() {
        var banner = document.getElementById('cbimCookieBanner');
        if (!banner) return;

        var consent = null;
        try {
            consent = localStorage.getItem('cbim_cookie_consent');
        } catch (e) { /* abaikan */ }

        if (!consent) {
            var m = document.cookie.match(/(?:^|;\s*)cbim_cookie_consent=([^;]+)/);
            if (m) consent = m[1];
        }

        if (!consent) {
            banner.style.display = 'block';
        } else {
            updateConsentMode(consent === 'accepted');
        }

        var acceptBtn = document.getElementById('cbimAcceptCookie');
        if (acceptBtn) {
            acceptBtn.addEventListener('click', function() {
                storeConsent('accepted');
                updateConsentMode(true);
                banner.style.display = 'none';
                window.cbimTrackEvent('cookie_consent', { consent: 'accepted' });
            });
        }

        var rejectBtn = document.getElementById('cbimRejectCookie');
        if (rejectBtn) {
            rejectBtn.addEventListener('click', function() {
                storeConsent('rejected');
                updateConsentMode(false);
                banner.style.display = 'none';
                // Sengaja tidak memanggil cbimTrackEvent di sini:
                // pengunjung baru saja menolak dilacak.
            });
        }
    }

    // =========================================================================
    // 8. INT-05: Floating Chatbot FAQ & WhatsApp Connect
    // =========================================================================
    function initChatbotWidget() {
        var toggleBtn = document.getElementById('cbimChatToggle');
        var popup = document.getElementById('cbimChatPopup');
        var closeBtn = document.getElementById('cbimChatClose');

        if (!toggleBtn || !popup) return;

        toggleBtn.addEventListener('click', function() {
            if (popup.style.display === 'flex') {
                popup.style.display = 'none';
            } else {
                popup.style.display = 'flex';
                window.cbimTrackEvent('open_chatbot_widget');
            }
        });

        if (closeBtn) {
            closeBtn.addEventListener('click', function() {
                popup.style.display = 'none';
            });
        }

        // Accordion behavior for FAQ
        document.querySelectorAll('.cbim-faq-btn').forEach(function(btn) {
            btn.addEventListener('click', function() {
                var answer = this.nextElementSibling;
                if (answer && answer.classList.contains('cbim-faq-answer')) {
                    var isVisible = answer.style.display === 'block';
                    document.querySelectorAll('.cbim-faq-answer').forEach(function(a) { a.style.display = 'none'; });
                    answer.style.display = isVisible ? 'none' : 'block';
                }
            });
        });
    }

    function escapeHtml(str) {
        if (!str) return '';
        return str.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;');
    }

    // DOM Ready
    document.addEventListener('DOMContentLoaded', function() {
        initNavbarScrollSpy();
        initFadeAnimations();
        initLanguageSwitcher();
        initSitewideSearch();
        initNewsletterForm();
        initCookieConsent();
        initChatbotWidget();
        initEventTracking();
    });
})();
