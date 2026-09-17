<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
    <base href="">
    <title>Yayasan CBIM</title>
    <meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/templates/media/logos/logo-cbim.png" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="<?= base_url() ?>assets/templates/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/templates/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" data-bs-offset="200" class="bg-white position-relative">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed"    >
            <!-- <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(<?= base_url() ?>/assets/templates/media/illustrations/sketchy-1/14.png"> -->
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                <a href="#" class="mb-6 text-center">
                    <img alt="Logo" src="<?= base_url() ?>assets/templates/media/logos/logo-cbim.png" class="h-90px" />
                    <h1>CBIM</h1>
                </a>
                <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                    <form class="form w-100" action="<?= base_url('auth/login'); ?>" method="post">
                        <div class="text-center mb-10">
                            <h1 class="text-dark mb-3">LOG IN</h1>
                        </div>
                        <div class="fv-row mb-10">
                            <label for="username" class="form-label fs-6 fw-bolder text-dark">Username</label>
                            <input class="form-control form-control-lg form-control-solid" required type="text" name="username" id="username" autocomplete="off" />
                        </div>
                        <div class="fv-row mb-10">
                            <div class="d-flex flex-stack mb-2">
                                <label for="password" class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                            </div>
                            <input class="form-control form-control-lg form-control-solid" required type="password" id="password" name="password" autocomplete="off" />
                        </div>
                        <div class="text-center">
                            <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                                <span class="indicator-label">Login</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--end::Main-->
    <script>
        var hostUrl = "<?= base_url() ?>assets/templates/";
    </script>
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="<?= base_url() ?>assets/templates/plugins/global/plugins.bundless.js"></script>
    <script src="<?= base_url() ?>assets/templates/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="<?= base_url() ?>assets/templates/plugins/custom/fslightbox/fslightbox.bundle.js"></script>
    <script src="<?= base_url() ?>assets/templates/plugins/custom/typedjs/typedjs.bundle.js"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="<?= base_url() ?>assets/templates/js/custom/landing.js"></script>
    <!-- <script src="<?= base_url() ?>assets/templates/js/custom/pages/company/pricing.js"></script> -->
    <!--end::Page Custom Javascript-->

    <!--end::Javascript-->
    <!-- begin::Alert -->
    <?php if ($this->session->flashdata('success')) : ?>
        <script>
            var successfuly = '<?= $this->session->flashdata('success'); ?>';
            Swal.fire({
                title: 'Sukses!',
                text: successfuly,
                icon: 'success',
                confirmButtonText: 'OK'
            }).then(function(result) {
                if (result.isConfirmed) {
                    window.location.href = '';
                }
            });
        </script>
        <?php $this->session->unset_userdata('success'); // Menghapus session setelah ditampilkan 
        ?>
    <?php endif; ?>

    <?php if ($this->session->flashdata('error')) : ?>
        <script>
            Swal.fire({
                title: 'Error!',
                text: '<?= $this->session->flashdata('error'); ?>',
                icon: 'error',
                confirmButtonText: 'OK'
            }).then(function(result) {
                if (result.isConfirmed) {
                    window.location.href = '';
                }
            });
        </script>
        <?php $this->session->unset_userdata('error'); // Menghapus session setelah ditampilkan 
        ?>
    <?php endif; ?>
    <!-- end::Alert -->

</body>
<!--end::Body-->

</html>