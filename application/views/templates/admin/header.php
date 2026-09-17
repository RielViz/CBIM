<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="" />
    <title>
        Yayasan CBIM
    </title>
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/templates/media/logos/logo-cbim.png" />
    <meta name="description" content="Yayasan Citra Bina Insan Mandiri (YCBIM) - Membawahi Universitas Citra Bangsa (UCB), SMA K Citra Bangsa, SMP K Citra Bangsa, SD K Citra Bangsa, dan Tk K Citra Bangsa." />
    <meta name="keywords" content="Yayasan, Citra Bina Insan Mandiri (YCBIM), Universitas Citra Bangsa (UCB), SMA K Citra Bangsa, SMP K Citra Bangsa, SD K Citra Bangsa, Tk K Citra Bangsa." />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Yayasan Citra Bina Insan Mandiri - YCBIM" />
    <meta property="og:url" content="https://www.cbim.or.id/yayasan/" />
    <meta property="og:site_name" content="Yayasan | CBIM" />
    <link rel="canonical" href="https://www.cbim.or.id/yayasan/" />
    <!-- <link rel="shortcut icon" href="<?= base_url(); ?>assets/templates/media/logos/logo-cbim.png" /> -->
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="<?= base_url(); ?>assets/templates/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="<?= base_url(); ?>assets/templates/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/templates/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.2/styles/dracula.min.css">

    <!-- begin::Datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" />
    <!-- end::Datatables -->

    <!-- charts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script src="<?= base_url(); ?>assets/templates/js/gauge.min.js"></script> -->

    <!-- Ckeditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed">
    <!--begin::Main-->
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
        <!--begin::Aside-->
        <div id="kt_aside" class="aside pb-5 pt-5 pt-lg-0" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'80px', '300px': '100px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
            <!--begin::Brand-->
            <div class="aside-logo py-8" id="kt_aside_logo">
                <!--begin::Logo-->
                <a href="<?= base_url('admin/'); ?>" class="d-flex align-items-center">
                    <img alt="Logo" src="<?= base_url(); ?>assets/templates/media/logos/logo-cbim.png" class="h-45px logo" />
                </a>
                <!--end::Logo-->
            </div>
            <!--end::Brand-->
            <!--begin::Aside menu-->
            <div class="aside-menu flex-column-fluid" id="kt_aside_menu">
                <!--begin::Aside Menu-->
                <div class="hover-scroll-overlay-y my-2 my-lg-5 pe-lg-n1" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="5px">
                    <!--begin::Menu-->
                         <?php if ($this->session->userdata('role') != 'default') { ?>
                           <div class="menu menu-column menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold" id="#kt_aside_menu" data-kt-menu="true">
                        <div class="menu-item py-2">
                            <a class="menu-link menu-center <?= $menu == 'galeri' ? 'active' : ''; ?>" href="<?= base_url('katalog') ?>" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                <span class="menu-icon me-0">
                                    <i class="bi bi-images fs-2"></i>
                                </span>
                                <span class="menu-title text-center">Kelola Katalog</span>
                            </a>
                        </div>
                    </div>
        <?php }else{ ?>
                    <div class="menu menu-column menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold" id="#kt_aside_menu" data-kt-menu="true">
                        <div class="menu-item py-2">
                            <a class="menu-link menu-center <?= $menu == 'dashboard' ? 'active' : ''; ?>" href="<?= base_url('admin/'); ?>" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                <span class="menu-icon me-0">
                                    <i class="bi bi-house fs-2"></i>
                                </span>
                                <span class="menu-title text-center">Dashboard</span>
                            </a>
                        </div>
                    </div>
                    <div class="menu menu-column menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold" id="#kt_aside_menu" data-kt-menu="true">
                        <div class="menu-item py-2">
                            <a class="menu-link menu-center <?= $menu == 'struktur_organisasi' ? 'active' : ''; ?>" href="<?= base_url('admin/struktur_organisasi') ?>" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                <span class="menu-icon me-0">
                                    <i class="bi bi-app fs-2"></i>
                                </span>
                                <span class="menu-title text-center">Struktur Organisasi</span>
                            </a>
                        </div>
                    </div>
                    <div class="menu menu-column menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold" id="#kt_aside_menu" data-kt-menu="true">
                        <div class="menu-item py-2">
                            <a class="menu-link menu-center <?= $menu == 'manajemen_konten' ? 'active' : ''; ?>" href="<?= base_url('admin/manajemen_konten') ?>" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                <span class="menu-icon me-0">
                                    <i class="bi bi-gear fs-2"></i>
                                </span>
                                <span class="menu-title text-center">Manajemen Konten</span>
                            </a>
                        </div>
                    </div>
                    <div class="menu menu-column menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold" id="#kt_aside_menu" data-kt-menu="true">
                        <div class="menu-item py-2">
                            <a class="menu-link menu-center <?= $menu == 'video_kegiatan' ? 'active' : ''; ?>" href="<?= base_url('admin/video_kegiatan') ?>" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                <span class="menu-icon me-0">
                                    <i class="bi bi-play fs-2"></i>
                                </span>
                                <span class="menu-title text-center">Video Kegiatan</span>
                            </a>
                        </div>
                    </div>
                    <div class="menu menu-column menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold" id="#kt_aside_menu" data-kt-menu="true">
                        <div class="menu-item py-2">
                            <a class="menu-link menu-center <?= $menu == 'berita' ? 'active' : ''; ?>" href="<?= base_url('admin/berita') ?>" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                <span class="menu-icon me-0">
                                    <i class="bi bi-book fs-2"></i>
                                </span>
                                <span class="menu-title text-center">Berita</span>
                            </a>
                        </div>
                    </div>
                    <div class="menu menu-column menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold" id="#kt_aside_menu" data-kt-menu="true">
                        <div class="menu-item py-2">
                            <a class="menu-link menu-center <?= $menu == 'galeri' ? 'active' : ''; ?>" href="<?= base_url('admin/galeri') ?>" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                <span class="menu-icon me-0">
                                    <i class="bi bi-images fs-2"></i>
                                </span>
                                <span class="menu-title text-center">Galeri</span>
                            </a>
                        </div>
                    </div>
                    <div class="menu menu-column menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold" id="#kt_aside_menu" data-kt-menu="true">
                        <div class="menu-item py-2">
                            <a class="menu-link menu-center <?= $menu == 'pendaftaran_sd' ? 'active' : ''; ?>" href="<?= base_url('admin/pendaftaran_sd') ?>" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                <span class="menu-icon me-0">
                                    <i class="bi bi-mortarboard fs-2"></i>
                                </span>
                                <span class="menu-title text-center">PPDB SD</span>
                            </a>
                        </div>
                    </div>
                    <div class="menu menu-column menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold" id="#kt_aside_menu" data-kt-menu="true">
                        <div class="menu-item py-2">
                            <a class="menu-link menu-center <?= $menu == 'pendaftaran_tk' ? 'active' : ''; ?>" href="<?= base_url('admin/pendaftaran_tk') ?>" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                <span class="menu-icon me-0">
                                    <i class="bi bi-stars fs-2"></i>
                                </span>
                                <span class="menu-title text-center">PPDB TK</span>
                            </a>
                        </div>
                    </div>

                    <!-- INT-03: PPDB Terpadu -->
                    <div class="menu menu-column menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold" id="#kt_aside_menu" data-kt-menu="true">
                        <div class="menu-item py-2">
                            <a class="menu-link menu-center <?= $menu == 'pendaftaran_terpadu' ? 'active' : ''; ?>" href="<?= base_url('admin/pendaftaran_terpadu') ?>" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                <span class="menu-icon me-0">
                                    <i class="bi bi-person-check fs-2"></i>
                                </span>
                                <span class="menu-title text-center">PPDB Terpadu</span>
                            </a>
                        </div>
                    </div>

                    <!-- BE-07: Pesan Masuk Kontak -->
                    <div class="menu menu-column menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold" id="#kt_aside_menu" data-kt-menu="true">
                        <div class="menu-item py-2">
                            <a class="menu-link menu-center <?= $menu == 'pesan_kontak' ? 'active' : ''; ?>" href="<?= base_url('admin/pesan_kontak') ?>" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                <span class="menu-icon me-0">
                                    <i class="bi bi-chat-left-dots fs-2"></i>
                                </span>
                                <span class="menu-title text-center">Pesan Kontak</span>
                            </a>
                        </div>
                    </div>

                    <!-- INT-04: Newsletter Subscribers -->
                    <div class="menu menu-column menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold" id="#kt_aside_menu" data-kt-menu="true">
                        <div class="menu-item py-2">
                            <a class="menu-link menu-center <?= $menu == 'newsletter' ? 'active' : ''; ?>" href="<?= base_url('admin/newsletter') ?>" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                <span class="menu-icon me-0">
                                    <i class="bi bi-envelope-paper fs-2"></i>
                                </span>
                                <span class="menu-title text-center">Newsletter</span>
                            </a>
                        </div>
                    </div>

                    <!-- BE-08: Backup Sistem -->
                    <div class="menu menu-column menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold" id="#kt_aside_menu" data-kt-menu="true">
                        <div class="menu-item py-2">
                            <a class="menu-link menu-center <?= $menu == 'backup' ? 'active' : ''; ?>" href="<?= base_url('admin/backup') ?>" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                <span class="menu-icon me-0">
                                    <i class="bi bi-shield-lock fs-2"></i>
                                </span>
                                <span class="menu-title text-center">Backup Sistem</span>
                            </a>
                        </div>
                    </div>
                  
                         
                    <?php }?>
                    <!--end::Menu-->
                </div>
                <!--end::Aside Menu-->
            </div>
            <!--end::Aside menu-->
            <!--begin::Footer-->
            <div class="aside-footer flex-column-auto" id="kt_aside_footer">
                <!--begin::Menu-->
                <div class="d-flex justify-content-center">
                    <button type="button" class="btn btm-sm btn-icon btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="top-start" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-dismiss="click">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen008.svg-->
                        <!-- <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M3 2H10C10.6 2 11 2.4 11 3V10C11 10.6 10.6 11 10 11H3C2.4 11 2 10.6 2 10V3C2 2.4 2.4 2 3 2Z" fill="black" />
                                <path opacity="0.3" d="M14 2H21C21.6 2 22 2.4 22 3V10C22 10.6 21.6 11 21 11H14C13.4 11 13 10.6 13 10V3C13 2.4 13.4 2 14 2Z" fill="black" />
                                <path opacity="0.3" d="M3 13H10C10.6 13 11 13.4 11 14V21C11 21.6 10.6 22 10 22H3C2.4 22 2 21.6 2 21V14C2 13.4 2.4 13 3 13Z" fill="black" />
                                <path opacity="0.3" d="M14 13H21C21.6 13 22 13.4 22 14V21C22 21.6 21.6 22 21 22H14C13.4 22 13 21.6 13 21V14C13 13.4 13.4 13 14 13Z" fill="black" />
                            </svg>
                        </span> -->
                        <!--end::Svg Icon-->
                    </button>
                </div>
                <!--end::Menu-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Aside-->
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <!--begin::Header-->
            <div id="kt_header" class="header align-items-stretch">
                <!--begin::Container-->
                <div class="container-fluid d-flex align-items-stretch justify-content-between">
                    <!--begin::Aside mobile toggle-->
                    <div class="d-flex align-items-center d-lg-none ms-n1 me-2" title="Show aside menu">
                        <div class="btn btn-icon btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" id="kt_aside_mobile_toggle">
                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                            <span class="svg-icon svg-icon-2x mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
                                    <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                    </div>
                    <!--end::Aside mobile toggle-->
                    <!--begin::Mobile logo-->
                    <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                        <a href="<?= base_url(); ?>/demo6/dist/index.html" class="d-lg-none">
                            <img alt="Logo" src="<?= base_url(); ?>assets/templates/media/logos/logo-cbim.png" class="h-30px" />
                        </a>
                    </div>
                    <!--end::Mobile logo-->
                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
                        <!--begin::Navbar-->
                        <div class="d-flex align-items-stretch" id="kt_header_nav">
                            <!--begin::Menu wrapper-->
                            <div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
                            </div>
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::Navbar-->
                        <!--begin::Topbar-->
                        <div class="d-flex align-items-stretch flex-shrink-0">
                            <!--begin::Toolbar wrapper-->
                            <div class="d-flex align-items-stretch flex-shrink-0">
                                <!--begin::User-->
                                <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                                    <!--begin::Menu wrapper-->
                                    <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                        <img src="<?= base_url(); ?>assets/templates/media/avatars/150-26.jpg" alt="image" />
                                    </div>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content d-flex align-items-center px-3">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-50px me-5">
                                                    <img alt="Logo" src="<?= base_url(); ?>assets/templates/media/avatars/150-26.jpg" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Username-->
                                                <div class="d-flex flex-column">
                                                    <div class="fw-bolder d-flex align-items-center fs-5">
                                                        <?= $this->session->userdata('username'); ?>
                                                        <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">.</span>
                                                    </div>
                                                </div>
                                                <!--end::Username-->
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator my-2"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-5">
                                            <a href="<?= base_url(); ?>logout" class="menu-link px-5">Sign Out</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator my-2"></div>
                                        <!--end::Menu separator-->
                                    </div>
                                    <!--end::Menu-->
                                    <!--end::Menu wrapper-->
                                </div>
                                <!--end::User -->
                            </div>
                            <!--end::Toolbar wrapper-->
                        </div>
                        <!--end::Topbar-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Header-->
            <!--begin::Toolbar-->
            <div class="toolbar py-2" id="kt_toolbar">
                <!--begin::Container-->
                <div id="kt_toolbar_container" class="container-fluid d-flex align-items-center">
                </div>
                <!--end::Container-->
            </div>
            <!--end::Toolbar-->