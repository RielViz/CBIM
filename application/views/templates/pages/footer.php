 <!--begin::Highlight & Newsletter Subscription-->
 <div class="container my-6">
     <div class="card-rounded shadow p-8 p-lg-12 mb-n5 mb-lg-n13"
         style="background: linear-gradient(90deg, #660519 0%, #890C25 40%, #B71A34 75%, #FFD80C 100%);">
         <div class="row align-items-center">
             <div class="col-lg-6 mb-5 mb-lg-0 text-white">
                 <span class="fs-1 fs-lg-2qx fw-bolder d-block mb-2" data-i18n="newsletter_title">
                     Selalu terhubung bersama kami!
                 </span>
                 <p class="fs-6 opacity-75 mb-0" data-i18n="newsletter_desc">
                     Dapatkan warta kegiatan, prestasi sekolah & universitas, serta informasi terbaru langsung di email Anda.
                 </p>
             </div>
             <div class="col-lg-6">
                 <!-- INT-04: Newsletter Form Widget -->
                 <form id="cbimNewsletterForm" class="cbim-newsletter-form">
                     <div class="input-group">
                         <input type="email" id="cbimNewsletterEmail" class="form-control form-control-solid cbim-newsletter-input" 
                             placeholder="Ketik alamat email Anda..." required aria-label="Alamat Email" data-i18n-placeholder="newsletter_placeholder" />
                         <select id="cbimNewsletterPref" class="form-select form-select-solid d-none d-md-block" style="max-width: 140px; background: rgba(255,255,255,0.15); color: #ffffff; border-color: rgba(255,255,255,0.2);">
                             <option value="semua" class="text-dark" selected>Semua Unit</option>
                             <option value="UCB" class="text-dark">UCB</option>
                             <option value="SMA" class="text-dark">SMA K</option>
                             <option value="SMP" class="text-dark">SMP K</option>
                             <option value="SD" class="text-dark">SD K</option>
                             <option value="TK" class="text-dark">TK K</option>
                         </select>
                         <button type="submit" class="btn cbim-newsletter-btn px-6" data-i18n="newsletter_btn">
                             Langganan
                         </button>
                     </div>
                     <div id="cbimNewsletterMsg" style="display: none;"></div>
                 </form>
             </div>
         </div>
     </div>
 </div>
 <!--end::Highlight & Newsletter Subscription-->

 </div>
 <!--end::Container-->
 </div>
 <!--end::Testimonials Section-->

 <!--begin::Footer Section-->
 <div class="mb-0">
     <!--begin::Curve top-->
     <div class="landing-curve landing-dark-color">
         <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
             <path
                 d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z"
                 fill="currentColor"></path>
         </svg>
     </div>
     <!--end::Curve top-->

     <!--begin::Wrapper-->
     <footer class="landing-dark-bg pt-20" role="contentinfo">
         <!--begin::Container-->
         <div class="container">
             <!--begin::Row-->
             <div class="row py-10 py-lg-16">
                 <!--begin::Col - Kontak & Kantor-->
                 <div class="col-lg-5 pe-lg-12 mb-10 mb-lg-0">
                     <div class="rounded landing-dark-border p-7 mb-6">
                         <h3 class="text-white mb-4 d-flex align-items-center" data-i18n="footer_contact_title">
                             <i class="bi bi-telephone-fill text-warning me-3 fs-3"></i> Kontak Kami
                         </h3>
                         <div class="fw-normal fs-5 text-gray-400">
                             <?= !empty($data_kontak[0]['isi_konten']) ? $data_kontak[0]['isi_konten'] : "Telepon: (0380) 8553888<br>Email: info@cbim.or.id"; ?>
                         </div>
                     </div>
                     <div class="rounded landing-dark-border p-7">
                         <h3 class="text-white mb-4 d-flex align-items-center" data-i18n="footer_office_title">
                             <i class="bi bi-geo-alt-fill text-warning me-3 fs-3"></i> Kantor Yayasan
                         </h3>
                         <div class="fw-normal fs-5 text-gray-400">
                             <?= !empty($data_alamat[0]['isi_konten']) ? $data_alamat[0]['isi_konten'] : "Jl. Manafe No.17, Kel. Kayu Putih, Kec. Oebobo, Kota Kupang, NTT"; ?>
                         </div>
                     </div>
                 </div>
                 <!--end::Col-->

                 <!--begin::Col - Unit & PPDB-->
                 <div class="col-lg-4 col-sm-6 mb-8 mb-lg-0">
                     <h4 class="fw-bolder text-gray-300 mb-6 fs-4" data-i18n="nav_units">Unit-Unit Pendidikan</h4>
                     <ul class="list-unstyled mb-0">
                         <li class="mb-4">
                             <a href="https://ucb.ac.id/" target="_blank" rel="noopener" class="text-white opacity-75 text-hover-warning fs-5 d-flex align-items-center">
                                 <i class="bi bi-chevron-right fs-7 me-2 text-warning"></i> Universitas Citra Bangsa (UCB)
                             </a>
                         </li>
                         <li class="mb-4">
                             <a href="https://smakcitrabangsa.sch.id/" target="_blank" rel="noopener" class="text-white opacity-75 text-hover-warning fs-5 d-flex align-items-center">
                                 <i class="bi bi-chevron-right fs-7 me-2 text-warning"></i> SMA K Citra Bangsa
                             </a>
                         </li>
                         <li class="mb-4">
                             <a href="http://smpkcitrabangsa.com/" target="_blank" rel="noopener" class="text-white opacity-75 text-hover-warning fs-5 d-flex align-items-center">
                                 <i class="bi bi-chevron-right fs-7 me-2 text-warning"></i> SMP K Citra Bangsa
                             </a>
                         </li>
                         <li class="mb-4">
                             <a href="<?= base_url('sd'); ?>" class="text-white opacity-75 text-hover-warning fs-5 d-flex align-items-center">
                                 <i class="bi bi-chevron-right fs-7 me-2 text-warning"></i> SD K Citra Bangsa
                             </a>
                         </li>
                         <li class="mb-4">
                             <a href="<?= base_url('tk'); ?>" class="text-white opacity-75 text-hover-warning fs-5 d-flex align-items-center">
                                 <i class="bi bi-chevron-right fs-7 me-2 text-warning"></i> TK K Citra Bangsa
                             </a>
                         </li>
                         <li class="mt-4 pt-2 border-top border-secondary">
                             <a href="#" target="_blank" rel="noopener" class="badge badge-warning py-2 px-3 fs-6 text-dark fw-bolder">
                                 <i class="bi bi-pencil-square me-1"></i> Pendaftaran Online
                             </a>
                         </li>
                     </ul>
                 </div>
                 <!--end::Col-->

                 <!--begin::Col - Media Sosial & Tautan-->
                 <div class="col-lg-3 col-sm-6">
                     <h4 class="fw-bolder text-gray-300 mb-6 fs-4">Sosial Media</h4>
                     <ul class="list-unstyled mb-6">
                         <li class="mb-4">
                             <a href="https://www.facebook.com/profile.php?id=100086189573438" target="_blank" rel="noopener" class="d-flex align-items-center text-white opacity-75 text-hover-warning fs-5">
                                 <img src="<?= base_url(); ?>assets/templates/media/svg/brand-logos/facebook-4.svg" class="h-20px me-3" alt="Facebook Yayasan CBIM" />
                                 Citra Bina Insan Mandiri
                             </a>
                         </li>
                         <li class="mb-4">
                             <a href="https://www.youtube.com/@CBIMYayasan" target="_blank" rel="noopener" class="d-flex align-items-center text-white opacity-75 text-hover-warning fs-5">
                                 <img src="<?= base_url(); ?>assets/templates/media/svg/brand-logos/youtube-play.svg" class="h-20px me-3" alt="YouTube Yayasan CBIM" />
                                 Yayasan CBIM
                             </a>
                         </li>
                         <li class="mb-4">
                             <a href="https://www.instagram.com/yayasan_cbim?igsh=MTNwamlmZnl1dmo2" target="_blank" rel="noopener" class="d-flex align-items-center text-white opacity-75 text-hover-warning fs-5">
                                 <img src="<?= base_url(); ?>assets/templates/media/svg/brand-logos/instagram-2-1.svg" class="h-20px me-3" alt="Instagram Yayasan CBIM" />
                                 @yayasan_cbim
                             </a>
                         </li>
                     </ul>

                     <div class="pt-3 border-top border-secondary">
                         <a href="<?= base_url('kebijakan-privasi'); ?>" class="text-gray-400 text-hover-warning fs-6 me-4" data-i18n="footer_privacy">
                             Kebijakan Privasi
                         </a>
                         <a href="<?= base_url('katalog'); ?>" class="text-gray-400 text-hover-warning fs-6 me-4" data-i18n="nav_catalog">
                             Katalog Buku
                         </a>
                         <a href="<?= base_url('sitemap.xml'); ?>" target="_blank" class="text-gray-400 text-hover-warning fs-6">
                             Sitemap
                         </a>
                     </div>
                 </div>
                 <!--end::Col-->
             </div>
             <!--end::Row-->
         </div>
         <!--end::Container-->

         <!--begin::Separator-->
         <div class="landing-dark-separator"></div>
         <!--end::Separator-->

         <!--begin::Container (FE-07: Removed Metronic Attribution)-->
         <div class="container">
             <div class="d-flex flex-column flex-md-row flex-stack py-6 py-lg-8 align-items-center">
                 <div class="d-flex align-items-center mb-3 mb-md-0">
                     <a href="<?= base_url(); ?>">
                         <img alt="Logo Yayasan CBIM Kupang" src="<?= base_url(); ?>assets/templates/media/logos/logo-cbim.png" class="h-30px h-md-40px me-3" />
                     </a>
                     <span class="fs-6 fw-bold text-gray-500">
                         © <?= date('Y'); ?> <strong class="text-gray-300">Yayasan Citra Bina Insan Mandiri (CBIM)</strong> - Kota Kupang. All Rights Reserved.
                     </span>
                 </div>
                 <div class="text-muted fs-7">
                     Maju Bersama Generasi Unggul Nusa Tenggara Timur
                 </div>
             </div>
         </div>
         <!--end::Container-->
     </footer>
     <!--end::Wrapper-->
 </div>
 <!--end::Footer Section-->

 <!-- BE-10: Cookie Consent Banner -->
 <div id="cbimCookieBanner" class="cbim-cookie-banner" role="dialog" aria-live="polite" aria-label="Pemberitahuan Cookie">
     <div class="d-flex align-items-start gap-3">
         <i class="bi bi-shield-check text-success fs-1 mt-1"></i>
         <div>
             <h5 class="fw-bolder mb-1 text-dark">Privasi & Cookie</h5>
             <p class="fs-7 text-muted mb-3">
                 Website Yayasan CBIM menggunakan cookie untuk memberikan pengalaman terbaik, menganalisis lalu lintas web, dan meningkatkan layanan pendaftaran.
                 Pelajari selengkapnya di <a href="<?= base_url('kebijakan-privasi'); ?>" class="text-cbim-primary fw-bold">Kebijakan Privasi</a> kami.
             </p>
             <!-- PATCH 2026-09-07: tombol "Tolak" ditambahkan.
                  Banner sebelumnya hanya menyediakan "Setujui", sehingga secara
                  hukum bukan persetujuan yang sah (harus ada pilihan menolak
                  yang setara). Penanganannya ada di custom-cbim.js. -->
             <div class="d-flex flex-wrap gap-2">
                 <button type="button" id="cbimAcceptCookie" class="btn btn-sm btn-cbim-primary px-4 py-2">
                     Setujui Semua
                 </button>
                 <button type="button" id="cbimRejectCookie" class="btn btn-sm btn-light border py-2 px-4">
                     Tolak
                 </button>
                 <a href="<?= base_url('kebijakan-privasi'); ?>" class="btn btn-sm btn-link py-2 px-3 text-muted">
                     Pelajari
                 </a>
             </div>
         </div>
     </div>
 </div>

 <!-- INT-05: Floating Chatbot FAQ & WhatsApp Direct Connect -->
 <div class="cbim-float-container" id="cbimFloatContainer">
     <!-- Popup Box -->
     <div class="cbim-chat-popup" id="cbimChatPopup">
         <div class="cbim-chat-header">
             <div class="d-flex align-items-center gap-2">
                 <img src="<?= base_url(); ?>assets/templates/media/logos/logo-cbim.png" class="h-25px" alt="CBIM Bot" />
                 <div>
                     <div class="fw-bold fs-6">Bantuan & FAQ CBIM</div>
                     <small class="opacity-75 fs-8">Tanya seputar pendaftaran & unit</small>
                 </div>
             </div>
             <button type="button" id="cbimChatClose" class="btn btn-sm btn-icon text-white" aria-label="Tutup Chat">
                 <i class="bi bi-x-lg fs-5"></i>
             </button>
         </div>

         <div class="cbim-chat-body">
             <p class="fs-7 text-muted mb-3">Pilih pertanyaan yang sering diajukan atau hubungi admin unit kami:</p>

             <!-- FAQ Accordion -->
             <button type="button" class="cbim-faq-btn">
                 <span>Cara Mendaftar Siswa / Mahasiswa Baru?</span>
                 <i class="bi bi-chevron-down fs-8"></i>
             </button>
             <div class="cbim-faq-answer">
                 Pendaftaran dapat dilakukan secara online melalui menu <strong>PPDB Online</strong> di website ini, atau langsung datang ke sekretariat kampus/sekolah di Jl. Manafe No.17 Kayu Putih Kupang.
             </div>

             <button type="button" class="cbim-faq-btn">
                 <span>Jenjang Pendidikan Apa Saja di CBIM?</span>
                 <i class="bi bi-chevron-down fs-8"></i>
             </button>
             <div class="cbim-faq-answer">
                 Yayasan CBIM menaungi: PAUD/TK Kristen Citra Bangsa, SD Kristen Citra Bangsa, SMP Kristen Citra Bangsa, SMA Kristen Citra Bangsa, dan Universitas Citra Bangsa (UCB).
             </div>

             <button type="button" class="cbim-faq-btn">
                 <span>Berapa Biaya Pendaftaran & SPP?</span>
                 <i class="bi bi-chevron-down fs-8"></i>
             </button>
             <div class="cbim-faq-answer">
                 Rincian biaya bervariasi sesuai jenjang dan gelombang pendaftaran. Silakan hubungi langsung admin unit terkait melalui tombol WhatsApp di bawah.
             </div>

             <!-- Direct WhatsApp Contact Buttons -->
             <div class="mt-4 pt-3 border-top">
                 <div class="fs-8 fw-bold text-muted text-uppercase mb-2">Hubungi WhatsApp Resmi:</div>
                 <div class="d-grid gap-2">
                     <a href="https://wa.me/6281234567890?text=Halo%20Admin%20Yayasan%20CBIM,%20saya%20ingin%20bertanya%20informasi..." target="_blank" rel="noopener" class="btn btn-sm btn-outline-success d-flex align-items-center justify-content-between py-2 px-3">
                         <span><i class="bi bi-whatsapp text-success me-2"></i> Admin Yayasan</span>
                         <span class="badge bg-success">Chat</span>
                     </a>
                     <a href="https://wa.me/6281234567895?text=Halo%20Admin%20UCB,%20saya%20ingin%20bertanya%20pendaftaran%20kuliah..." target="_blank" rel="noopener" class="btn btn-sm btn-outline-success d-flex align-items-center justify-content-between py-2 px-3">
                         <span><i class="bi bi-whatsapp text-success me-2"></i> Admin PMB UCB</span>
                         <span class="badge bg-success">Chat</span>
                     </a>
                     <a href="https://wa.me/6281234567892?text=Halo%20Admin%20SD%20Citra%20Bangsa,%20saya%20ingin%20bertanya%20PPDB%20SD..." target="_blank" rel="noopener" class="btn btn-sm btn-outline-success d-flex align-items-center justify-content-between py-2 px-3">
                         <span><i class="bi bi-whatsapp text-success me-2"></i> Admin SD K Citra Bangsa</span>
                         <span class="badge bg-success">Chat</span>
                     </a>
                 </div>
             </div>
         </div>
     </div>

     <!-- Floating Toggle Button -->
     <button type="button" class="cbim-chat-toggle-btn" id="cbimChatToggle" title="Pusat Bantuan & WhatsApp" aria-label="Buka Chatbot FAQ">
         <i class="bi bi-chat-dots-fill"></i>
     </button>
 </div>

 <!--begin::Scrolltop-->
 <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
     <span class="svg-icon">
         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
             <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
             <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
         </svg>
     </span>
 </div>
 <!--end::Scrolltop-->

 </div>
 <!--end::Main-->

 <script>
     var hostUrl = "<?= base_url(); ?>assets/templates/";
 </script>

 <!-- Global Javascript Bundle -->
 <script src="<?= base_url(); ?>assets/templates/plugins/global/plugins.bundless.js"></script>
 <script src="<?= base_url(); ?>assets/templates/js/scripts.bundle.js"></script>
 <script src="<?= base_url(); ?>assets/templates/plugins/custom/fslightbox/fslightbox.bundle.js"></script>
 <script src="<?= base_url(); ?>assets/templates/plugins/custom/typedjs/typedjs.bundle.js"></script>
 <script src="<?= base_url(); ?>assets/templates/js/custom/landing.js"></script>
 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
 <script>
     AOS.init({ duration: 800, once: true });
 </script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.js"></script>

 <!-- Custom CBIM Interactive JS -->
 <script src="<?= base_url(); ?>assets/templates/js/custom-cbim.js"></script>
 </body>
 </html>