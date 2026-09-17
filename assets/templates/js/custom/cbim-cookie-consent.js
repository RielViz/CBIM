/**
 * CBIM Cookie Consent Manager
 * BE-10: Cookie consent banner with GA4 blocking
 * 
 * Blocks GA4 and other tracking scripts until user consents.
 * Stores preference in cookie (365 days).
 */

(function () {
    'use strict';

    var COOKIE_NAME = 'cbim_cookie_consent';
    var COOKIE_DAYS = 365;

    /**
     * Get cookie value by name
     */
    function getCookie(name) {
        var match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
        return match ? match[2] : null;
    }

    /**
     * Set cookie
     */
    function setCookie(name, value, days) {
        var expires = '';
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = '; expires=' + date.toUTCString();
        }
        document.cookie = name + '=' + value + expires + '; path=/; SameSite=Lax';
    }

    /**
     * Load GA4 script dynamically
     */
    function loadGA4() {
        var GA_ID = window.CBIM_GA4_ID;
        if (!GA_ID) return;

        // Prevent double loading
        if (document.querySelector('script[src*="googletagmanager.com/gtag"]')) return;

        var script = document.createElement('script');
        script.async = true;
        script.src = 'https://www.googletagmanager.com/gtag/js?id=' + GA_ID;
        document.head.appendChild(script);

        window.dataLayer = window.dataLayer || [];
        function gtag() { window.dataLayer.push(arguments); }
        window.gtag = gtag;
        gtag('js', new Date());
        gtag('config', GA_ID, {
            'send_page_view': true,
            'cookie_flags': 'SameSite=None;Secure'
        });

        // Track custom events
        initGA4Events();
    }

    /**
     * Setup GA4 custom event tracking
     * BE-04: Event tracking for unit buttons, social icons, forms, news reading
     */
    function initGA4Events() {
        if (typeof window.gtag !== 'function') return;

        // Track clicks on unit education buttons
        document.querySelectorAll('a[href*="ucb.ac.id"], a[href*="smakcitrabangsa"], a[href*="smpkcitrabangsa"], a[href*="citrabangsa.net"]').forEach(function (link) {
            link.addEventListener('click', function () {
                window.gtag('event', 'click_unit_pendidikan', {
                    'event_category': 'Unit Pendidikan',
                    'event_label': this.textContent.trim() || this.href,
                    'transport_type': 'beacon'
                });
            });
        });

        // Track social media icon clicks
        document.querySelectorAll('a[href*="facebook.com"], a[href*="youtube.com"], a[href*="instagram.com"]').forEach(function (link) {
            link.addEventListener('click', function () {
                window.gtag('event', 'click_social_media', {
                    'event_category': 'Social Media',
                    'event_label': this.href,
                    'transport_type': 'beacon'
                });
            });
        });

        // Track contact form submissions
        var contactForm = document.getElementById('cbim-contact-form');
        if (contactForm) {
            contactForm.addEventListener('submit', function () {
                window.gtag('event', 'form_submission', {
                    'event_category': 'Contact Form',
                    'event_label': 'Footer Contact Form'
                });
            });
        }

        // Track news reading duration
        var newsContent = document.querySelector('.text-gray-500.fw-bold.fs-4[style*="text-align: justify"]');
        if (newsContent) {
            var startTime = Date.now();
            window.addEventListener('beforeunload', function () {
                var readDuration = Math.round((Date.now() - startTime) / 1000);
                window.gtag('event', 'read_duration', {
                    'event_category': 'Berita',
                    'event_label': document.title,
                    'value': readDuration,
                    'transport_type': 'beacon'
                });
            });
        }
    }

    /**
     * Show/hide cookie banner
     */
    function showBanner() {
        var banner = document.getElementById('cbim-cookie-banner');
        if (banner) {
            // Small delay for transition
            setTimeout(function () {
                banner.classList.add('cbim-cookie-show');
            }, 500);
        }
    }

    function hideBanner() {
        var banner = document.getElementById('cbim-cookie-banner');
        if (banner) {
            banner.classList.remove('cbim-cookie-show');
        }
    }

    /**
     * Handle user consent
     */
    function acceptCookies() {
        setCookie(COOKIE_NAME, 'accepted', COOKIE_DAYS);
        hideBanner();
        loadGA4();
    }

    function rejectCookies() {
        setCookie(COOKIE_NAME, 'rejected', COOKIE_DAYS);
        hideBanner();
    }

    /**
     * Initialize consent manager
     */
    function init() {
        var consent = getCookie(COOKIE_NAME);

        if (consent === 'accepted') {
            loadGA4();
            return; // Don't show banner
        }

        if (consent === 'rejected') {
            return; // Don't show banner, don't load GA4
        }

        // No consent yet — show banner
        showBanner();

        // Bind button events
        var acceptBtn = document.getElementById('cbim-cookie-accept');
        var rejectBtn = document.getElementById('cbim-cookie-reject');

        if (acceptBtn) {
            acceptBtn.addEventListener('click', acceptCookies);
        }
        if (rejectBtn) {
            rejectBtn.addEventListener('click', rejectCookies);
        }
    }

    // Run on DOM ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

})();
